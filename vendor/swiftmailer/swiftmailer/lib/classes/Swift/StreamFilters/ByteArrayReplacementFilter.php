<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Processes bytes as they pass through a buffer and replaces sequences in it.
 *
 * This stream filter deals with Byte arrays rather than simple strings.
 *
 * @author  Chris Corbyn
 */
class Swift_StreamFilters_ByteArrayReplacementFilter implements Swift_StreamFilter
{
    /** The replacement(s) to make */
    private $replace;

    /** The Index for Searching */
    private $index;

    /** The Search Tree */
    private $tree = [];

    /**  Gives the size of the largest Search */
    private $treeMaxLen = 0;

    private $repSize;

    /**
     * Create a new ByteArrayReplacementFilter with $Search and $replace.
     *
     * @param array $Search
     * @param array $replace
     */
    public function __construct($Search, $replace)
    {
        $this->index = [];
        $this->tree = [];
        $this->replace = [];
        $this->repSize = [];

        $tree = null;
        $i = null;
        $last_size = $size = 0;
        foreach ($Search as $i => $Search_element) {
            if (null !== $tree) {
                $tree[-1] = min(count($replace) - 1, $i - 1);
                $tree[-2] = $last_size;
            }
            $tree = &$this->tree;
            if (is_array($Search_element)) {
                foreach ($Search_element as $k => $char) {
                    $this->index[$char] = true;
                    if (!isset($tree[$char])) {
                        $tree[$char] = [];
                    }
                    $tree = &$tree[$char];
                }
                $last_size = $k + 1;
                $size = max($size, $last_size);
            } else {
                $last_size = 1;
                if (!isset($tree[$Search_element])) {
                    $tree[$Search_element] = [];
                }
                $tree = &$tree[$Search_element];
                $size = max($last_size, $size);
                $this->index[$Search_element] = true;
            }
        }
        if (null !== $i) {
            $tree[-1] = min(count($replace) - 1, $i);
            $tree[-2] = $last_size;
            $this->treeMaxLen = $size;
        }
        foreach ($replace as $rep) {
            if (!is_array($rep)) {
                $rep = [$rep];
            }
            $this->replace[] = $rep;
        }
        for ($i = count($this->replace) - 1; $i >= 0; --$i) {
            $this->replace[$i] = $rep = $this->filter($this->replace[$i], $i);
            $this->repSize[$i] = count($rep);
        }
    }

    /**
     * Returns true if based on the buffer passed more bytes should be buffered.
     *
     * @param array $buffer
     *
     * @return bool
     */
    public function shouldBuffer($buffer)
    {
        $endOfBuffer = end($buffer);

        return isset($this->index[$endOfBuffer]);
    }

    /**
     * Perform the actual replacements on $buffer and return the result.
     *
     * @param array $buffer
     * @param int   $minReplaces
     *
     * @return array
     */
    public function filter($buffer, $minReplaces = -1)
    {
        if (0 == $this->treeMaxLen) {
            return $buffer;
        }

        $newBuffer = [];
        $buf_size = count($buffer);
        $last_size = 0;
        for ($i = 0; $i < $buf_size; ++$i) {
            $Search_pos = $this->tree;
            $last_found = PHP_INT_MAX;
            // We try to find if the next byte is part of a Search pattern
            for ($j = 0; $j <= $this->treeMaxLen; ++$j) {
                // We have a new byte for a Search pattern
                if (isset($buffer[$p = $i + $j]) && isset($Search_pos[$buffer[$p]])) {
                    $Search_pos = $Search_pos[$buffer[$p]];
                    // We have a complete pattern, save, in case we don't find a better match later
                    if (isset($Search_pos[-1]) && $Search_pos[-1] < $last_found
                        && $Search_pos[-1] > $minReplaces) {
                        $last_found = $Search_pos[-1];
                        $last_size = $Search_pos[-2];
                    }
                }
                // We got a complete pattern
                elseif (PHP_INT_MAX !== $last_found) {
                    // Adding replacement datas to output buffer
                    $rep_size = $this->repSize[$last_found];
                    for ($j = 0; $j < $rep_size; ++$j) {
                        $newBuffer[] = $this->replace[$last_found][$j];
                    }
                    // We Move cursor forward
                    $i += $last_size - 1;
                    // Edge Case, last position in buffer
                    if ($i >= $buf_size) {
                        $newBuffer[] = $buffer[$i];
                    }

                    // We start the next loop
                    continue 2;
                } else {
                    // this byte is not in a pattern and we haven't found another pattern
                    break;
                }
            }
            // Normal byte, move it to output buffer
            $newBuffer[] = $buffer[$i];
        }

        return $newBuffer;
    }
}

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
 * @author Chris Corbyn
 */
class Swift_StreamFilters_StringReplacementFilter implements Swift_StreamFilter
{
    /** The needle(s) to Search for */
    private $Search;

    /** The replacement(s) to make */
    private $replace;

    /**
     * Create a new StringReplacementFilter with $Search and $replace.
     *
     * @param string|array $Search
     * @param string|array $replace
     */
    public function __construct($Search, $replace)
    {
        $this->Search = $Search;
        $this->replace = $replace;
    }

    /**
     * Returns true if based on the buffer passed more bytes should be buffered.
     *
     * @param string $buffer
     *
     * @return bool
     */
    public function shouldBuffer($buffer)
    {
        if ('' === $buffer) {
            return false;
        }

        $endOfBuffer = substr($buffer, -1);
        foreach ((array) $this->Search as $needle) {
            if (false !== strpos($needle, $endOfBuffer)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Perform the actual replacements on $buffer and return the result.
     *
     * @param string $buffer
     *
     * @return string
     */
    public function filter($buffer)
    {
        return str_replace($this->Search, $this->replace, $buffer);
    }
}

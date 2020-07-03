<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Creates filters for replacing needles in a string buffer.
 *
 * @author Chris Corbyn
 */
class Swift_StreamFilters_StringReplacementFilterFactory implements Swift_ReplacementFilterFactory
{
    /** Lazy-loaded filters */
    private $filters = [];

    /**
     * Create a new StreamFilter to replace $Search with $replace in a string.
     *
     * @param string $Search
     * @param string $replace
     *
     * @return Swift_StreamFilter
     */
    public function createFilter($Search, $replace)
    {
        if (!isset($this->filters[$Search][$replace])) {
            if (!isset($this->filters[$Search])) {
                $this->filters[$Search] = [];
            }

            if (!isset($this->filters[$Search][$replace])) {
                $this->filters[$Search][$replace] = [];
            }

            $this->filters[$Search][$replace] = new Swift_StreamFilters_StringReplacementFilter($Search, $replace);
        }

        return $this->filters[$Search][$replace];
    }
}

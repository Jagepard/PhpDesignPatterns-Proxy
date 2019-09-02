<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Proxy;

interface SubjectInterface
{
    /**
     * @param string $value
     * @param string $key
     */
    public function setAssoc(string $value, string $key): void;

    /**
     * @return array
     */
    public function getAssoc(): array;
}

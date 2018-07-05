<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Proxy;

/**
 * Class Subject
 * @package Structural\Proxy
 */
class Subject implements SubjectInterface
{

    /**
     * @var array
     */
    protected $assoc = [];

    /**
     * @param string $value
     * @param string $key
     */
    public function setAssoc(string $key, string $value): void
    {
        $this->assoc[$key] = $value;
    }

    /**
     * @return array
     */
    public function getAssoc(): array
    {
        return $this->assoc;
    }
}

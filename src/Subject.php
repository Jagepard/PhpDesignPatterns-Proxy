<?php
/**
 * Date: 06.04.18
 * Time: 12:20
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
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
    public function setArray(string $value, string $key): void
    {
        $this->setAssoc(array_merge($this->getAssoc(), [$key => $value]));
    }

    public function getArray()
    {
        return $this->getAssoc();
    }

    /**
     * @return array
     */
    public function getAssoc(): array
    {
        return $this->assoc;
    }

    /**
     * @param array $assoc
     */
    public function setAssoc(array $assoc): void
    {
        $this->assoc = $assoc;
    }
}
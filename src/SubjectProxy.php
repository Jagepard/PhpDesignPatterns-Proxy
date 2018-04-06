<?php
/**
 * Date: 06.04.18
 * Time: 12:43
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Proxy;

/**
 * Class SubjectProxy
 * @package Structural\Proxy
 */
class SubjectProxy implements SubjectInterface
{

    /**
     * @var null|Subject
     */
    protected $subject = null;

    /**
     * @param string $key
     * @param string $value
     */
    public function setArray(string $key, string $value): void
    {
        if (null == $this->getSubject()) {
            $this->setSubject();
        }

        $this->getSubject()->setArray($value, $key);
    }

    public function getArray(): string
    {
        if (null == $this->getSubject()) {
            $this->setSubject();
        }

        return json_encode($this->getSubject()->getArray());
    }

    /**
     * @return null|Subject
     */
    public function getSubject(): ?Subject
    {
        return $this->subject;
    }

    public function setSubject(): void
    {
        $this->subject = new Subject();
    }
}
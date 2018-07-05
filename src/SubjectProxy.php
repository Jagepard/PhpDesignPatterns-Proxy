<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Proxy;

/**
 * Class SubjectProxy
 * @package Structural\Proxy
 */
class SubjectProxy implements SubjectInterface
{

    /**
     * @var null|SubjectInterface
     */
    protected $subject = null;

    /**
     * @param string $key
     * @param string $value
     */
    public function setAssoc(string $key, string $value): void
    {
        if (!$this->subject instanceof SubjectInterface) {
            $this->subject = new Subject();
        }

        $this->subject->setAssoc($key, $value);
    }

    public function getAssoc(): array
    {
        return $this->subject->getAssoc();
    }

    /**
     * @return string
     */
    public function getJson(): string
    {
        return json_encode($this->getAssoc());
    }
}

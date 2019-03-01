<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Proxy;

/**
 * Class JsonProxy
 * @package Structural\Proxy
 */
class JsonProxy implements SubjectInterface
{
    /**
     * @var null|SubjectInterface
     */
    private $subject = null;

    /**
     * @param string $key
     * @param string $value
     */
    public function setAssoc(string $key, string $value): void
    {
        if (!$this->getSubject() instanceof SubjectInterface) {
            $this->setSubject(new Subject());
        }

        $this->getSubject()->setAssoc($key, $value);
    }

    public function getAssoc(): array
    {
        return $this->getSubject()->getAssoc();
    }

    /**
     * @return string
     */
    public function getJson(): string
    {
        return \json_encode($this->getAssoc());
    }

    /**
     * @return SubjectInterface|null
     */
    public function getSubject(): ?SubjectInterface
    {
        return $this->subject;
    }

    /**
     * @param SubjectInterface|null $subject
     */
    public function setSubject(?SubjectInterface $subject): void
    {
        $this->subject = $subject;
    }
}

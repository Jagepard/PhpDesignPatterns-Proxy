<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Proxy;

class JsonProxy implements SubjectInterface
{
    private ?SubjectInterface $subject;

    public function setItem(string $key, string $value): void
    {
        if (!isset($this->subject)) {
            $this->subject = new Subject();
        }

        $this->subject->setItem($key, $value);
    }

    public function getArray(): array
    {
        return $this->subject->getArray();
    }

    public function getJson(): string
    {
        return \json_encode($this->getArray());
    }
}

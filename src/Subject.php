<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Proxy;

class Subject implements SubjectInterface
{
    private array $array = [];

    public function setItem(string $key, string $value): void
    {
        $this->array[$key] = $value;
    }

    public function getArray(): array
    {
        return $this->array;
    }
}

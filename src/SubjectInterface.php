<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Proxy;

interface SubjectInterface
{
    public function setItem(string $value, string $key): void;
    public function getArray(): array;
}

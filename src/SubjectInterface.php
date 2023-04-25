<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Proxy;

interface SubjectInterface
{
    /**
     * @param  string $value
     * @param  string $key
     * @return void
     */
    public function setItem(string $value, string $key): void;

    /**
     * @return array
     */
    public function getArray(): array;
}

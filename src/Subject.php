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

    /**
     * Sets an item
     * ------------
     * Устанавливает элемент
     *
     * @param  string $key
     * @param  string $value
     * @return void
     */
    public function setItem(string $key, string $value): void
    {
        $this->array[$key] = $value;
    }

    /**
     * Gets an array of data
     * ---------------------
     * Получает массив данных
     *
     * @return array
     */
    public function getArray(): array
    {
        return $this->array;
    }
}

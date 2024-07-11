<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Proxy;

class JsonProxy
{
    private ?SubjectInterface $subject;

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
        if (!isset($this->subject)) {
            $this->subject = new Subject();
        }

        $this->subject->setItem($key, $value);
    }

    /**
     * Gets data in the format JSON
     * ----------------------------
     * Получает данные в формате JSON
     *
     * @return string
     */
    public function getJson(): string
    {
        return \json_encode($this->subject->getArray());
    }
}

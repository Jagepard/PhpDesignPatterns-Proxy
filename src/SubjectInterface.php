<?php
/**
 * Date: 06.04.18
 * Time: 13:16
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Proxy;


interface SubjectInterface
{

    /**
     * @param string $value
     * @param string $key
     */
    public function setArray(string $value, string $key): void;

    /**
     * @return mixed
     */
    public function getArray();
}
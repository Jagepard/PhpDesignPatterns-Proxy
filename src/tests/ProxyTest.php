<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Structural\Proxy\SubjectProxy;
use Structural\Proxy\SubjectInterface;


/**
 * Class ProxyTest
 */
class ProxyTest extends PHPUnit_Framework_TestCase
{

    protected $proxy;

    protected function setUp(): void
    {
        $this->proxy = new SubjectProxy();
    }

    public function testProxy()
    {
        $this->getProxy()->setArray('key1', 'value1');
        $this->getProxy()->setArray('key2', 'value2');
        $this->getProxy()->setArray('key3', 'value3');

        $this->assertEquals('{"key1":"value1","key2":"value2","key3":"value3"}', $this->getProxy()->getArray());
    }

    public function testSubject()
    {
        $this->assertNull($this->getProxy()->getSubject());
        $this->getProxy()->getArray();

        $this->assertInstanceOf(SubjectInterface::class, $this->getProxy()->getSubject());
    }

    /**
     * @return mixed
     */
    public function getProxy()
    {
        return $this->proxy;
    }
}

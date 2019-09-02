<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Proxy\Tests;

use Structural\Proxy\JsonProxy;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class ProxyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var JsonProxy
     */
    private $proxy;

    protected function setUp(): void
    {
        $this->proxy = new JsonProxy();
    }

    public function testProxy()
    {
        $this->getProxy()->setAssoc('key1', 'value1');
        $this->getProxy()->setAssoc('key2', 'value2');
        $this->getProxy()->setAssoc('key3', 'value3');

        $this->assertEquals('{"key1":"value1","key2":"value2","key3":"value3"}', $this->getProxy()->getJson());
    }

    /**
     * @return JsonProxy
     */
    public function getProxy(): JsonProxy
    {
        return $this->proxy;
    }
}

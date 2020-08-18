<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Proxy\Tests;

use Structural\Proxy\JsonProxy;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class ProxyTest extends PHPUnit_Framework_TestCase
{
    private JsonProxy $proxy;

    protected function setUp(): void
    {
        $this->proxy = new JsonProxy();
    }

    public function testProxy()
    {
        $this->proxy->setItem('key1', 'value1');
        $this->proxy->setItem('key2', 'value2');
        $this->proxy->setItem('key3', 'value3');

        $this->assertEquals('{"key1":"value1","key2":"value2","key3":"value3"}', $this->proxy->getJson());
    }
}

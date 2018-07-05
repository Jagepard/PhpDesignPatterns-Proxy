<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Proxy\Tests;

use Structural\Proxy\SubjectProxy;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class ProxyTest
 */
class ProxyTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var SubjectProxy
     */
    protected $proxy;

    protected function setUp(): void
    {
        $this->proxy = new SubjectProxy();
    }

    public function testProxy()
    {
        $this->proxy->setAssoc('key1', 'value1');
        $this->proxy->setAssoc('key2', 'value2');
        $this->proxy->setAssoc('key3', 'value3');

        $this->assertEquals('{"key1":"value1","key2":"value2","key3":"value3"}', $this->proxy->getJson());
    }
}

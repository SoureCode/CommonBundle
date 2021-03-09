<?php

namespace SoureCode\Bundle\Common\Tests;

use SoureCode\BundleTest\TestCase\AbstractKernelTestCase;
use SoureCode\Component\Common\Generator\RandomGeneratorInterface;

class TestBundleServices extends AbstractKernelTestCase
{
    public function testRandomGeneratedIsRegistered(): void
    {
        $container = static::bootKernel()->getContainer();

        self::assertTrue($container->has('sourecode.common.generator.random'), 'It should be registered by id.');
        self::assertTrue($container->has(RandomGeneratorInterface::class), 'It should be registered by interface.');
    }
}

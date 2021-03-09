<?php

namespace SoureCode\Bundle\Common\Tests;

use PHPUnit\Framework\TestCase;
use ReflectionObject;
use SoureCode\Bundle\Common\Tests\Mock\BarMock;
use SoureCode\Bundle\Common\Tests\Mock\FooType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AbstractResourceTypeTest extends TestCase
{
    public function testConstruct(): void
    {
        // Arrange and Act
        $type = new FooType(BarMock::class);

        // Assert
        $reflection = new ReflectionObject($type);
        $classProperty = $reflection->getProperty('class');
        $classProperty->setAccessible(true);
        $class = $classProperty->getValue($type);

        self::assertSame(BarMock::class, $class);
    }

    public function testConfigureOptions(): void
    {
        // Arrange
        $resolver = new OptionsResolver();
        $type = new FooType(BarMock::class);

        // Act
        $type->configureOptions($resolver);

        // Assert
        self::assertTrue($resolver->hasDefault('data_class'));

        $resolved = $resolver->resolve([]);

        self::assertSame(BarMock::class, $resolved['data_class']);
    }
}

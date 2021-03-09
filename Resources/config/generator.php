<?php

use SoureCode\Component\Common\Generator\RandomGenerator;
use SoureCode\Component\Common\Generator\RandomGeneratorInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function (ContainerConfigurator $container) {
    $services = $container->services();

    $services->defaults()->public();

    // ============================
    // = Generator
    // ============================
    $services->set('sourecode.common.generator.random', RandomGenerator::class);
    $services->alias(RandomGeneratorInterface::class, 'sourecode.common.generator.random');
};

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
    $services->set('sourecode.common.generator.random', RandomGenerator::class)
        ->deprecate(
            'SoureCode/CommonBundle',
            '0.2.0',
            'Service sourecode.common.generator.random is deprecated since 0.2.0 and will be removed in 1.0.0.'
        );
    $services->alias(RandomGeneratorInterface::class, 'sourecode.common.generator.random')
        ->deprecate(
            'SoureCode/CommonBundle',
            '0.2.0',
            'Service '.RandomGeneratorInterface::class.' is deprecated since 0.2.0 and will be removed in 1.0.0.'
        );
};

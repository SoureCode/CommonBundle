<?php

use Gedmo\Sluggable\SluggableListener;
use Gedmo\Timestampable\TimestampableListener;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return function (ContainerConfigurator $container) {
    $services = $container->services();
    $services->defaults()->public();

    $services->set('sourecode.common.listener.timestampable', TimestampableListener::class)
        ->tag('doctrine.event_subscriber', ['connection' => 'default'])
        ->call('setAnnotationReader', [service('annotation_reader')]);

    $services->set('sourecode.common.listener.sluggable', SluggableListener::class)
        ->tag('doctrine.event_subscriber', ['connection' => 'default'])
        ->call('setAnnotationReader', [service('annotation_reader')]);
};

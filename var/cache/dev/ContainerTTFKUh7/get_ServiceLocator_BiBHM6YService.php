<?php

namespace ContainerTTFKUh7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BiBHM6YService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.biBHM6Y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.biBHM6Y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'color' => ['privates', '.errored..service_locator.biBHM6Y.App\\Entity\\Color', NULL, 'Cannot autowire service ".service_locator.biBHM6Y": it references class "App\\Entity\\Color" but no such service exists.'],
        ], [
            'color' => 'App\\Entity\\Color',
        ]);
    }
}

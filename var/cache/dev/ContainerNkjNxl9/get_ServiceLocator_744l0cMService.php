<?php

namespace ContainerNkjNxl9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_744l0cMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.744l0cM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.744l0cM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'city' => ['privates', '.errored..service_locator.744l0cM.App\\Entity\\City', NULL, 'Cannot autowire service ".service_locator.744l0cM": it references class "App\\Entity\\City" but no such service exists.'],
        ], [
            'city' => 'App\\Entity\\City',
        ]);
    }
}

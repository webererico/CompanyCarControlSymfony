<?php

namespace ContainerTTFKUh7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HZ3yPNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.h_Z3yPN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h_Z3yPN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'car' => ['privates', '.errored..service_locator.h_Z3yPN.App\\Entity\\Car', NULL, 'Cannot autowire service ".service_locator.h_Z3yPN": it references class "App\\Entity\\Car" but no such service exists.'],
        ], [
            'car' => 'App\\Entity\\Car',
        ]);
    }
}

<?php

namespace ContainerTTFKUh7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SKDsw_HService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SKDsw.h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SKDsw.h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CarController::carClient' => ['privates', '.service_locator.0Ym44.P', 'get_ServiceLocator_0Ym44_PService', true],
            'App\\Controller\\CarController::edit' => ['privates', '.service_locator.h_Z3yPN', 'get_ServiceLocator_HZ3yPNService', true],
            'App\\Controller\\CarController::editOwner' => ['privates', '.service_locator.h_Z3yPN', 'get_ServiceLocator_HZ3yPNService', true],
            'App\\Controller\\CityController::edit' => ['privates', '.service_locator.744l0cM', 'get_ServiceLocator_744l0cMService', true],
            'App\\Controller\\ClientsController::delete' => ['privates', '.service_locator.0Ym44.P', 'get_ServiceLocator_0Ym44_PService', true],
            'App\\Controller\\ClientsController::edit' => ['privates', '.service_locator.0Ym44.P', 'get_ServiceLocator_0Ym44_PService', true],
            'App\\Controller\\ClientsController::view' => ['privates', '.service_locator.0Ym44.P', 'get_ServiceLocator_0Ym44_PService', true],
            'App\\Controller\\ColorController::delete' => ['privates', '.service_locator.biBHM6Y', 'get_ServiceLocator_BiBHM6YService', true],
            'App\\Controller\\ColorController::edit' => ['privates', '.service_locator.biBHM6Y', 'get_ServiceLocator_BiBHM6YService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\CarController:carClient' => ['privates', '.service_locator.0Ym44.P', 'get_ServiceLocator_0Ym44_PService', true],
            'App\\Controller\\CarController:edit' => ['privates', '.service_locator.h_Z3yPN', 'get_ServiceLocator_HZ3yPNService', true],
            'App\\Controller\\CarController:editOwner' => ['privates', '.service_locator.h_Z3yPN', 'get_ServiceLocator_HZ3yPNService', true],
            'App\\Controller\\CityController:edit' => ['privates', '.service_locator.744l0cM', 'get_ServiceLocator_744l0cMService', true],
            'App\\Controller\\ClientsController:delete' => ['privates', '.service_locator.0Ym44.P', 'get_ServiceLocator_0Ym44_PService', true],
            'App\\Controller\\ClientsController:edit' => ['privates', '.service_locator.0Ym44.P', 'get_ServiceLocator_0Ym44_PService', true],
            'App\\Controller\\ClientsController:view' => ['privates', '.service_locator.0Ym44.P', 'get_ServiceLocator_0Ym44_PService', true],
            'App\\Controller\\ColorController:delete' => ['privates', '.service_locator.biBHM6Y', 'get_ServiceLocator_BiBHM6YService', true],
            'App\\Controller\\ColorController:edit' => ['privates', '.service_locator.biBHM6Y', 'get_ServiceLocator_BiBHM6YService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\CarController::carClient' => '?',
            'App\\Controller\\CarController::edit' => '?',
            'App\\Controller\\CarController::editOwner' => '?',
            'App\\Controller\\CityController::edit' => '?',
            'App\\Controller\\ClientsController::delete' => '?',
            'App\\Controller\\ClientsController::edit' => '?',
            'App\\Controller\\ClientsController::view' => '?',
            'App\\Controller\\ColorController::delete' => '?',
            'App\\Controller\\ColorController::edit' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CarController:carClient' => '?',
            'App\\Controller\\CarController:edit' => '?',
            'App\\Controller\\CarController:editOwner' => '?',
            'App\\Controller\\CityController:edit' => '?',
            'App\\Controller\\ClientsController:delete' => '?',
            'App\\Controller\\ClientsController:edit' => '?',
            'App\\Controller\\ClientsController:view' => '?',
            'App\\Controller\\ColorController:delete' => '?',
            'App\\Controller\\ColorController:edit' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}

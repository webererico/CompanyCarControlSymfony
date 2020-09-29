<?php

namespace ContainerTTFKUh7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ClientsController' shared autowired service.
     *
     * @return \App\Controller\ClientsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ClientsController.php';

        $container->services['App\\Controller\\ClientsController'] = $instance = new \App\Controller\ClientsController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ClientsController', $container));

        return $instance;
    }
}

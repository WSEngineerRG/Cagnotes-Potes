<?php

namespace ContainerE9puQi3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EpKkOAkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.epKkOAk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.epKkOAk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'campaign' => ['privates', '.errored..service_locator.epKkOAk.App\\Entity\\Campaign', NULL, 'Cannot autowire service ".service_locator.epKkOAk": it references class "App\\Entity\\Campaign" but no such service exists.'],
        ], [
            'campaign' => 'App\\Entity\\Campaign',
        ]);
    }
}
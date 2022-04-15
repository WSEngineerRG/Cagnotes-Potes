<?php

namespace ContainerE9puQi3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O6KmXmPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o6KmXmP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o6KmXmP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'campaign' => ['privates', '.errored..service_locator.o6KmXmP.App\\Entity\\Campaign', NULL, 'Cannot autowire service ".service_locator.o6KmXmP": it references class "App\\Entity\\Campaign" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'campaign' => 'App\\Entity\\Campaign',
            'entityManager' => '?',
        ]);
    }
}

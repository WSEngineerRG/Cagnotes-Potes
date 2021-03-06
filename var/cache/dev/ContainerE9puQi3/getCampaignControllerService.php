<?php

namespace ContainerE9puQi3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CampaignController' shared autowired service.
     *
     * @return \App\Controller\CampaignController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CampaignController.php';

        $container->services['App\\Controller\\CampaignController'] = $instance = new \App\Controller\CampaignController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\CampaignController', $container));

        return $instance;
    }
}

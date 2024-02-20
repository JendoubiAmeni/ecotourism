<?php

namespace ContainerWJy4s8P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2D2bXlDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2D2bXlD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2D2bXlD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrines' => ['services', 'doctrine', 'getDoctrineService', false],
            'repo' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'doctrines' => '?',
            'repo' => 'App\\Repository\\EvenementRepository',
            'slugger' => '?',
        ]);
    }
}

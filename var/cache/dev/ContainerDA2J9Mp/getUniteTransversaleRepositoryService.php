<?php

namespace ContainerDA2J9Mp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUniteTransversaleRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\UniteTransversaleRepository' shared autowired service.
     *
     * @return \App\Repository\UniteTransversaleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/UniteTransversaleRepository.php';

        return $container->privates['App\\Repository\\UniteTransversaleRepository'] = new \App\Repository\UniteTransversaleRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}

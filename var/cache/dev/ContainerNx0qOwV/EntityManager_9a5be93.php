<?php

namespace ContainerNx0qOwV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf8bbf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer81b03 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties35062 = [
        
    ];

    public function getConnection()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getConnection', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getMetadataFactory', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getExpressionBuilder', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'beginTransaction', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getCache', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'transactional', array('func' => $func), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'commit', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->commit();
    }

    public function rollback()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'rollback', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getClassMetadata', array('className' => $className), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'createQuery', array('dql' => $dql), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'createNamedQuery', array('name' => $name), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'createQueryBuilder', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'flush', array('entity' => $entity), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'clear', array('entityName' => $entityName), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->clear($entityName);
    }

    public function close()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'close', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->close();
    }

    public function persist($entity)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'persist', array('entity' => $entity), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'remove', array('entity' => $entity), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'refresh', array('entity' => $entity), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'detach', array('entity' => $entity), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'merge', array('entity' => $entity), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'contains', array('entity' => $entity), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getEventManager', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getConfiguration', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'isOpen', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getUnitOfWork', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getProxyFactory', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'initializeObject', array('obj' => $obj), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'getFilters', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'isFiltersStateClean', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'hasFilters', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return $this->valueHolderf8bbf->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer81b03 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf8bbf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf8bbf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf8bbf->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, '__get', ['name' => $name], $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        if (isset(self::$publicProperties35062[$name])) {
            return $this->valueHolderf8bbf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8bbf;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf8bbf;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8bbf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf8bbf;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, '__isset', array('name' => $name), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8bbf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf8bbf;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, '__unset', array('name' => $name), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8bbf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf8bbf;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, '__clone', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        $this->valueHolderf8bbf = clone $this->valueHolderf8bbf;
    }

    public function __sleep()
    {
        $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, '__sleep', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;

        return array('valueHolderf8bbf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer81b03 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer81b03;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer81b03 && ($this->initializer81b03->__invoke($valueHolderf8bbf, $this, 'initializeProxy', array(), $this->initializer81b03) || 1) && $this->valueHolderf8bbf = $valueHolderf8bbf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf8bbf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf8bbf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

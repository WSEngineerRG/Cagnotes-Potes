<?php

namespace ContainerE9puQi3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3394e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1c27c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf7deb = [
        
    ];

    public function getConnection()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getConnection', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getMetadataFactory', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getExpressionBuilder', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'beginTransaction', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getCache', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'transactional', array('func' => $func), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'commit', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->commit();
    }

    public function rollback()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'rollback', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getClassMetadata', array('className' => $className), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'createQuery', array('dql' => $dql), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'createNamedQuery', array('name' => $name), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'createQueryBuilder', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'flush', array('entity' => $entity), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'clear', array('entityName' => $entityName), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->clear($entityName);
    }

    public function close()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'close', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->close();
    }

    public function persist($entity)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'persist', array('entity' => $entity), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'remove', array('entity' => $entity), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'refresh', array('entity' => $entity), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'detach', array('entity' => $entity), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'merge', array('entity' => $entity), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'contains', array('entity' => $entity), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getEventManager', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getConfiguration', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'isOpen', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getUnitOfWork', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getProxyFactory', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'initializeObject', array('obj' => $obj), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'getFilters', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'isFiltersStateClean', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'hasFilters', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return $this->valueHolder3394e->hasFilters();
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

        $instance->initializer1c27c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3394e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3394e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3394e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, '__get', ['name' => $name], $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        if (isset(self::$publicPropertiesf7deb[$name])) {
            return $this->valueHolder3394e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3394e;

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

        $targetObject = $this->valueHolder3394e;
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
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3394e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3394e;
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
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, '__isset', array('name' => $name), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3394e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3394e;
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
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, '__unset', array('name' => $name), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3394e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3394e;
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
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, '__clone', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        $this->valueHolder3394e = clone $this->valueHolder3394e;
    }

    public function __sleep()
    {
        $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, '__sleep', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;

        return array('valueHolder3394e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1c27c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1c27c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1c27c && ($this->initializer1c27c->__invoke($valueHolder3394e, $this, 'initializeProxy', array(), $this->initializer1c27c) || 1) && $this->valueHolder3394e = $valueHolder3394e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3394e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3394e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

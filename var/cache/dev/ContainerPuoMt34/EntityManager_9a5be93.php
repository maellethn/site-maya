<?php

namespace ContainerPuoMt34;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder938ff = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer12be4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3bc20 = [
        
    ];

    public function getConnection()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getConnection', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getMetadataFactory', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getExpressionBuilder', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'beginTransaction', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getCache', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getCache();
    }

    public function transactional($func)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'transactional', array('func' => $func), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->transactional($func);
    }

    public function commit()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'commit', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->commit();
    }

    public function rollback()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'rollback', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getClassMetadata', array('className' => $className), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'createQuery', array('dql' => $dql), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'createNamedQuery', array('name' => $name), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'createQueryBuilder', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'flush', array('entity' => $entity), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'clear', array('entityName' => $entityName), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->clear($entityName);
    }

    public function close()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'close', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->close();
    }

    public function persist($entity)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'persist', array('entity' => $entity), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'remove', array('entity' => $entity), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'refresh', array('entity' => $entity), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'detach', array('entity' => $entity), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'merge', array('entity' => $entity), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getRepository', array('entityName' => $entityName), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'contains', array('entity' => $entity), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getEventManager', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getConfiguration', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'isOpen', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getUnitOfWork', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getProxyFactory', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'initializeObject', array('obj' => $obj), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'getFilters', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'isFiltersStateClean', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'hasFilters', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return $this->valueHolder938ff->hasFilters();
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

        $instance->initializer12be4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder938ff) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder938ff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder938ff->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, '__get', ['name' => $name], $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        if (isset(self::$publicProperties3bc20[$name])) {
            return $this->valueHolder938ff->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder938ff;

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

        $targetObject = $this->valueHolder938ff;
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
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder938ff;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder938ff;
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
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, '__isset', array('name' => $name), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder938ff;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder938ff;
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
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, '__unset', array('name' => $name), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder938ff;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder938ff;
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
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, '__clone', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        $this->valueHolder938ff = clone $this->valueHolder938ff;
    }

    public function __sleep()
    {
        $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, '__sleep', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;

        return array('valueHolder938ff');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer12be4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer12be4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer12be4 && ($this->initializer12be4->__invoke($valueHolder938ff, $this, 'initializeProxy', array(), $this->initializer12be4) || 1) && $this->valueHolder938ff = $valueHolder938ff;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder938ff;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder938ff;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

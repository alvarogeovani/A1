<?php

namespace Seguridad\Core;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\ResultSet\ResultSetInterface;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\TableIdentifier;
use Zend\Db\TableGateway\Feature;
use Seguridad\Excepciones\UpdateExcepcion;
use Seguridad\Excepciones\DeleteExcepcion;
use Seguridad\Excepciones\FindExcepcion;
use Seguridad\Excepciones\SaveExcepcion;

class BaseRepository extends AbstractTableGateway {

    /**
     * Constructor
     *
     * @param Entity                                              $table
     * @param AdapterInterface                                                          $adapter
     * @param Feature\AbstractFeature|Feature\FeatureSet|Feature\AbstractFeature[]|null $features
     * @param ResultSetInterface|null                                                   $resultSetPrototype
     * @param Sql|null                                                                  $sql
     *
     * @throws Exception\InvalidArgumentException
     */
    public function __construct($entity, $dbAdapter) {
        // table
        $this->table = new TableIdentifier($entity::TABLE, $entity::SCHEMA);
        // adapter
        $this->adapter = $dbAdapter;

        // process features
        $features = new \Zend\Db\TableGateway\Feature\SequenceFeature($entity::PKEY, $entity::SEQUENCE);
        if ($features !== null) {
            if ($features instanceof Feature\AbstractFeature) {
                $features = [$features];
            }
            if (is_array($features)) {
                $this->featureSet = new Feature\FeatureSet($features);
            } elseif ($features instanceof Feature\FeatureSet) {
                $this->featureSet = $features;
            } else {
                throw new Exception\InvalidArgumentException(
                'TableGateway expects $feature to be an instance of an AbstractFeature or a FeatureSet, or an '
                . 'array of AbstractFeatures'
                );
            }
        } else {
            $this->featureSet = new Feature\FeatureSet();
        }

        // result prototype

        $this->resultSetPrototype = new ResultSet(ResultSet::TYPE_ARRAYOBJECT, $entity);

        // Sql object (factory for select, insert, update, delete)
        $this->sql = new Sql($this->adapter, $this->table);

        // check sql object bound to same table
        if ($this->sql->getTable() != $this->table) {
            throw new Exception\InvalidArgumentException(
            'The table inside the provided Sql object must match the table of this TableGateway'
            );
        }

        $this->initialize();
    }

    /**
     * Insert
     *
     * @param  array $set
     * @return int
     */
    public function insert($set) {
        try {
            if (parent::insert($set) > 0) {
                return parent::getLastInsertValue();
            } else {
                return false;
            }
        } catch (\Zend\Db\Adapter\Exception\InvalidQueryException $ex) {
            throw new SaveExcepcion($ex, $set);
        }
    }

    /**
     * Update
     *
     * @param  array $set
     * @param  string|array|\Closure $where
     * @param  null|array $joins
     * @return int
     */
    public function update($set, $where = null, array $joins = null) {
        try {
            return parent::update($set, $where);
        } catch (\Zend\Db\Adapter\Exception\InvalidQueryException $ex) {
            throw new UpdateExcepcion($ex, $set, $where);
        }
    }

    /**
     * Delete
     *
     * @param  Where|\Closure|string|array $where
     * @return int
     */
    public function delete($where) {
        try {
            return parent::delete($where);
        } catch (\Zend\Db\Adapter\Exception\InvalidQueryException $ex) {
            throw new DeleteExcepcion($ex, $where);
        }
    }

    /**
     * Select
     *
     * @param Where|\Closure|string|array $where
     * @return ResultSet
     */
    public function find($where) {
        try {
            return parent::select($where)->current();
        } catch (\Zend\Db\Adapter\Exception\InvalidQueryException $ex) {
            throw new FindExcepcion($ex, $where);
        }
    }

    /**
     *
     * Buscar un registro de con la clave primaria
     *
     * @param int $id
     * @return Array ResultSet
     */
    public function fetchAll() {
        try {
            return parent::select();
        } catch (\Zend\Db\Adapter\Exception\InvalidQueryException $ex) {
            throw new FindExcepcion($ex);
        }
    }

    public function fetchList($where, $order = null, $limit = null, $offset = null) {
        try {
            if ($order != null) {
                return self::select($where, $order, $limit, $offset);
            } else {
                return parent::select($where);
            }
        } catch (\Zend\Db\Adapter\Exception\InvalidQueryException $ex) {

            throw new FindExcepcion($ex, $where);
        }
    }

    /**
     * Ejecuta código nativo de SQL
     * @param type código SQL
     * @return Driver\StatementInterface|ResultSet\ResultSet
     * * @throws Exception\InvalidArgumentException
     */
    public function runNativeSQL($query) {
        try {
            return $this->adapter->query($query, Adapter::QUERY_MODE_EXECUTE);
        } catch (\Zend\Db\Adapter\Exception\InvalidQueryException $ex) {
            throw new FindExcepcion($ex);
        }
    }
/**
 * Conviente el obj que envia el cliente a un arreglo
 * @param type $d  obj-json
 * @return type array
 */
    function objectToArray($d) {
        if (is_object($d)) {
            // Gets the properties of the given object
            // with get_object_vars function
            $d = get_object_vars($d);
        }
        return $d;
    }

}

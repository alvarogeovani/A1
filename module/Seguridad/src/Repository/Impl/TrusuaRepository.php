<?php

/**
 * Implementation of the interface   Trusua Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrusuaRepository
 * @package Seguridad
 * @subpackage Repository
 */

namespace Seguridad\Repository\Impl;

use Seguridad\Core\BaseRepository;
use Seguridad\Entity\Trusua;
use Seguridad\Repository\ITrusuaRepository;

class TrusuaRepository implements ITrusuaRepository
    {

    protected $tableGateway;

    public function __construct(BaseRepository $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    /**
     * Save the current entry
     * @param  $data
     * @return int
     */
    public function save($data)
    {
        $ojbData = new Trusua($data);
        if ($ojbData->getRussecu() == null || $ojbData->getRussecu() == 0)
        {
            $arrayData = $ojbData->toArray();
            //($arrayData['russecu']);
            return $this->tableGateway->insert($arrayData);
        } else
        {
            if ($this->find($ojbData->getRussecu()))
            {
                $this->tableGateway->update($ojbData->toArray(), ['russecu' => $ojbData->getRussecu()]);
            } else
            {
                throw new \RuntimeException('Trusua Id=' . $ojbData->getRussecu() . ' does not exist');
            }
        }
    }

    /**
     * Delete the current entry
     * @param string Where|array $where
     * @return int
     */
    public function delete($id)
    {
        $this->tableGateway->delete(['russecu' => (int) $id]);
    }

    /**
     *
     * Find an entry
     * Resets entry state if matching id found.
     * @param  int $id
     * @return Trusua
     */
    public function find($id)
    {
        $id = (int) $id;
        $row = $this->tableGateway->find(['russecu' => $id]);
        if (! $row) {
            throw new RuntimeException(sprintf(
                'Could not find row with identifier %d',
                $id
            ));
        }
        return $row;
    }

    /**
     * Fetch a list of entries that satisfy the parameters <params>
     *
     * @return array|ResultSet
     */
    public function fetchAll()
    {
        return $this->tableGateway->fetchAll();
    }

    /**
     * Fetch all entries
     *
     * @return array|ResultSet
     */
    public function fetchList($where = null, $order = null, $count = null, $offset = null)
    {
        return $this->tableGateway->fetchList($where, $order, $count, $offset);
    }

    }

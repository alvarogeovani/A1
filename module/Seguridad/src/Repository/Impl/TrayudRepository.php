<?php
 /**
 * Implementation of the interface   Trayud Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrayudRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trayud;
  use Seguridad\Repository\ITrayudRepository;
  class TrayudRepository implements ITrayudRepository
  
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
		$ojbData = new Trayud($data);
	if ($ojbData->getRadsecu() == null || $ojbData->getRadsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['radsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRadsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['radsecu' => $ojbData->getRadsecu()]);
	  return $ojbData->getRadsecu();
	} else
	 {
	      throw new \RuntimeException('Trayud Id='.$ojbData->getRadsecu().' does not exist');
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
		$this->tableGateway->delete(['radsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trayud
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['radsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trayud could not be found:radsecu='.$id);
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

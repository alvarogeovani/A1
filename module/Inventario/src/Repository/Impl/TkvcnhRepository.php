<?php
 /**
 * Implementation of the interface   Tkvcnh Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITkvcnhRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tkvcnh;
  use Inventario\Repository\ITkvcnhRepository;
  class TkvcnhRepository implements ITkvcnhRepository
  
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
		$ojbData = new Tkvcnh($data);
	if ($ojbData->getKvcsecu() == null || $ojbData->getKvcsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['kvcsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getKvcsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['kvcsecu' => $ojbData->getKvcsecu()]);
	  return $ojbData->getKvcsecu();
	} else
	 {
	      throw new \RuntimeException('Tkvcnh Id='.$ojbData->getKvcsecu().' does not exist');
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
		$this->tableGateway->delete(['kvcsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tkvcnh
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['kvcsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tkvcnh could not be found:kvcsecu='.$id);
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

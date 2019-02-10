<?php
 /**
 * Implementation of the interface   Tvsame Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvsameRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvsame;
  use Inventario\Repository\ITvsameRepository;
  class TvsameRepository implements ITvsameRepository
  
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
		$ojbData = new Tvsame($data);
	if ($ojbData->getVsesecu() == null || $ojbData->getVsesecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vsesecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVsesecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vsesecu' => $ojbData->getVsesecu()]);
	  return $ojbData->getVsesecu();
	} else
	 {
	      throw new \RuntimeException('Tvsame Id='.$ojbData->getVsesecu().' does not exist');
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
		$this->tableGateway->delete(['vsesecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvsame
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vsesecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvsame could not be found:vsesecu='.$id);
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

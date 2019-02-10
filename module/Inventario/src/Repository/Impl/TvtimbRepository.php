<?php
 /**
 * Implementation of the interface   Tvtimb Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvtimbRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvtimb;
  use Inventario\Repository\ITvtimbRepository;
  class TvtimbRepository implements ITvtimbRepository
  
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
		$ojbData = new Tvtimb($data);
	if ($ojbData->getVtmsecu() == null || $ojbData->getVtmsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vtmsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVtmsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vtmsecu' => $ojbData->getVtmsecu()]);
	  return $ojbData->getVtmsecu();
	} else
	 {
	      throw new \RuntimeException('Tvtimb Id='.$ojbData->getVtmsecu().' does not exist');
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
		$this->tableGateway->delete(['vtmsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvtimb
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vtmsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvtimb could not be found:vtmsecu='.$id);
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

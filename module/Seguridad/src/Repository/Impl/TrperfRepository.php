<?php
 /**
 * Implementation of the interface   Trperf Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrperfRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trperf;
  use Seguridad\Repository\ITrperfRepository;
  class TrperfRepository implements ITrperfRepository
  
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
		$ojbData = new Trperf($data);
	if ($ojbData->getRpesecu() == null || $ojbData->getRpesecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rpesecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRpesecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rpesecu' => $ojbData->getRpesecu()]);
	  return $ojbData->getRpesecu();
	} else
	 {
	      throw new \RuntimeException('Trperf Id='.$ojbData->getRpesecu().' does not exist');
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
		$this->tableGateway->delete(['rpesecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trperf
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rpesecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trperf could not be found:rpesecu='.$id);
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

<?php
 /**
 * Implementation of the interface   Tvsart Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvsartRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvsart;
  use Inventario\Repository\ITvsartRepository;
  class TvsartRepository implements ITvsartRepository
  
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
		$ojbData = new Tvsart($data);
	if ($ojbData->getVsasec1() == null || $ojbData->getVsasec1() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vsasec1']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVsasec1()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vsasec1' => $ojbData->getVsasec1()]);
	  return $ojbData->getVsasec1();
	} else
	 {
	      throw new \RuntimeException('Tvsart Id='.$ojbData->getVsasec1().' does not exist');
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
		$this->tableGateway->delete(['vsasec1' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvsart
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vsasec1' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvsart could not be found:vsasec1='.$id);
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

<?php
 /**
 * Implementation of the interface   Tvsamn Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvsamnRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvsamn;
  use Inventario\Repository\ITvsamnRepository;
  class TvsamnRepository implements ITvsamnRepository
  
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
		$ojbData = new Tvsamn($data);
	if ($ojbData->getVsnsecu() == null || $ojbData->getVsnsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vsnsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVsnsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vsnsecu' => $ojbData->getVsnsecu()]);
	  return $ojbData->getVsnsecu();
	} else
	 {
	      throw new \RuntimeException('Tvsamn Id='.$ojbData->getVsnsecu().' does not exist');
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
		$this->tableGateway->delete(['vsnsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvsamn
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vsnsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvsamn could not be found:vsnsecu='.$id);
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

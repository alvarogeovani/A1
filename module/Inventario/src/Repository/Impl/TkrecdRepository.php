<?php
 /**
 * Implementation of the interface   Tkrecd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITkrecdRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tkrecd;
  use Inventario\Repository\ITkrecdRepository;
  class TkrecdRepository implements ITkrecdRepository
  
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
		$ojbData = new Tkrecd($data);
	if ($ojbData->getKrdsecu() == null || $ojbData->getKrdsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['krdsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getKrdsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['krdsecu' => $ojbData->getKrdsecu()]);
	  return $ojbData->getKrdsecu();
	} else
	 {
	      throw new \RuntimeException('Tkrecd Id='.$ojbData->getKrdsecu().' does not exist');
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
		$this->tableGateway->delete(['krdsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tkrecd
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['krdsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tkrecd could not be found:krdsecu='.$id);
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

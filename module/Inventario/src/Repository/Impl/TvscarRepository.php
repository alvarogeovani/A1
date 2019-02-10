<?php
 /**
 * Implementation of the interface   Tvscar Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvscarRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvscar;
  use Inventario\Repository\ITvscarRepository;
  class TvscarRepository implements ITvscarRepository
  
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
		$ojbData = new Tvscar($data);
	if ($ojbData->getVscsecu() == null || $ojbData->getVscsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vscsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVscsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vscsecu' => $ojbData->getVscsecu()]);
	  return $ojbData->getVscsecu();
	} else
	 {
	      throw new \RuntimeException('Tvscar Id='.$ojbData->getVscsecu().' does not exist');
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
		$this->tableGateway->delete(['vscsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvscar
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vscsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvscar could not be found:vscsecu='.$id);
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

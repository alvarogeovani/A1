<?php
 /**
 * Implementation of the interface   Tvsend Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvsendRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvsend;
  use Inventario\Repository\ITvsendRepository;
  class TvsendRepository implements ITvsendRepository
  
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
		$ojbData = new Tvsend($data);
	if ($ojbData->getVsvsecu() == null || $ojbData->getVsvsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vsvsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVsvsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vsvsecu' => $ojbData->getVsvsecu()]);
	  return $ojbData->getVsvsecu();
	} else
	 {
	      throw new \RuntimeException('Tvsend Id='.$ojbData->getVsvsecu().' does not exist');
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
		$this->tableGateway->delete(['vsvsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvsend
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vsvsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvsend could not be found:vsvsecu='.$id);
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

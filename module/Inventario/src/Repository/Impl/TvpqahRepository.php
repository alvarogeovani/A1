<?php
 /**
 * Implementation of the interface   Tvpqah Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvpqahRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvpqah;
  use Inventario\Repository\ITvpqahRepository;
  class TvpqahRepository implements ITvpqahRepository
  
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
		$ojbData = new Tvpqah($data);
	if ($ojbData->getVphsecu() == null || $ojbData->getVphsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vphsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVphsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vphsecu' => $ojbData->getVphsecu()]);
	  return $ojbData->getVphsecu();
	} else
	 {
	      throw new \RuntimeException('Tvpqah Id='.$ojbData->getVphsecu().' does not exist');
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
		$this->tableGateway->delete(['vphsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvpqah
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vphsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvpqah could not be found:vphsecu='.$id);
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

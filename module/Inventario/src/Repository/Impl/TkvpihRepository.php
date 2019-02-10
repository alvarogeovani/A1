<?php
 /**
 * Implementation of the interface   Tkvpih Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITkvpihRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tkvpih;
  use Inventario\Repository\ITkvpihRepository;
  class TkvpihRepository implements ITkvpihRepository
  
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
		$ojbData = new Tkvpih($data);
	if ($ojbData->getKvpsecu() == null || $ojbData->getKvpsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['kvpsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getKvpsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['kvpsecu' => $ojbData->getKvpsecu()]);
	  return $ojbData->getKvpsecu();
	} else
	 {
	      throw new \RuntimeException('Tkvpih Id='.$ojbData->getKvpsecu().' does not exist');
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
		$this->tableGateway->delete(['kvpsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tkvpih
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['kvpsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tkvpih could not be found:kvpsecu='.$id);
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

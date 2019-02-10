<?php
 /**
 * Implementation of the interface   Tvsall Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvsallRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvsall;
  use Inventario\Repository\ITvsallRepository;
  class TvsallRepository implements ITvsallRepository
  
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
		$ojbData = new Tvsall($data);
	if ($ojbData->getVslsecu() == null || $ojbData->getVslsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vslsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVslsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vslsecu' => $ojbData->getVslsecu()]);
	  return $ojbData->getVslsecu();
	} else
	 {
	      throw new \RuntimeException('Tvsall Id='.$ojbData->getVslsecu().' does not exist');
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
		$this->tableGateway->delete(['vslsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvsall
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vslsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvsall could not be found:vslsecu='.$id);
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

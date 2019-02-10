<?php
 /**
 * Implementation of the interface   Tvpqad Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvpqadRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvpqad;
  use Inventario\Repository\ITvpqadRepository;
  class TvpqadRepository implements ITvpqadRepository
  
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
		$ojbData = new Tvpqad($data);
	if ($ojbData->getVpdsecu() == null || $ojbData->getVpdsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vpdsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVpdsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vpdsecu' => $ojbData->getVpdsecu()]);
	  return $ojbData->getVpdsecu();
	} else
	 {
	      throw new \RuntimeException('Tvpqad Id='.$ojbData->getVpdsecu().' does not exist');
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
		$this->tableGateway->delete(['vpdsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvpqad
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vpdsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvpqad could not be found:vpdsecu='.$id);
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

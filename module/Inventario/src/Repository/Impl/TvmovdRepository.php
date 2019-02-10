<?php
 /**
 * Implementation of the interface   Tvmovd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvmovdRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvmovd;
  use Inventario\Repository\ITvmovdRepository;
  class TvmovdRepository implements ITvmovdRepository
  
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
		$ojbData = new Tvmovd($data);
	if ($ojbData->getVmdsecu() == null || $ojbData->getVmdsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vmdsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVmdsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vmdsecu' => $ojbData->getVmdsecu()]);
	  return $ojbData->getVmdsecu();
	} else
	 {
	      throw new \RuntimeException('Tvmovd Id='.$ojbData->getVmdsecu().' does not exist');
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
		$this->tableGateway->delete(['vmdsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvmovd
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vmdsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvmovd could not be found:vmdsecu='.$id);
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

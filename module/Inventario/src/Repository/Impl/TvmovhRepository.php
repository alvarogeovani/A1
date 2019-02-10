<?php
 /**
 * Implementation of the interface   Tvmovh Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvmovhRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvmovh;
  use Inventario\Repository\ITvmovhRepository;
  class TvmovhRepository implements ITvmovhRepository
  
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
		$ojbData = new Tvmovh($data);
	if ($ojbData->getVmhsecu() == null || $ojbData->getVmhsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vmhsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVmhsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vmhsecu' => $ojbData->getVmhsecu()]);
	  return $ojbData->getVmhsecu();
	} else
	 {
	      throw new \RuntimeException('Tvmovh Id='.$ojbData->getVmhsecu().' does not exist');
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
		$this->tableGateway->delete(['vmhsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvmovh
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vmhsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvmovh could not be found:vmhsecu='.$id);
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

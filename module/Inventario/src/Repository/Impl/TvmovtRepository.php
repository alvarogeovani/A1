<?php
 /**
 * Implementation of the interface   Tvmovt Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvmovtRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvmovt;
  use Inventario\Repository\ITvmovtRepository;
  class TvmovtRepository implements ITvmovtRepository
  
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
		$ojbData = new Tvmovt($data);
	if ($ojbData->getVmtsecu() == null || $ojbData->getVmtsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vmtsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVmtsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vmtsecu' => $ojbData->getVmtsecu()]);
	  return $ojbData->getVmtsecu();
	} else
	 {
	      throw new \RuntimeException('Tvmovt Id='.$ojbData->getVmtsecu().' does not exist');
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
		$this->tableGateway->delete(['vmtsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvmovt
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vmtsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvmovt could not be found:vmtsecu='.$id);
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

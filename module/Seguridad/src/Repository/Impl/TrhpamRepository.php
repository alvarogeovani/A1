<?php
 /**
 * Implementation of the interface   Trhpam Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrhpamRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trhpam;
  use Seguridad\Repository\ITrhpamRepository;
  class TrhpamRepository implements ITrhpamRepository
  
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
		$ojbData = new Trhpam($data);
	if ($ojbData->getRhmsecu() == null || $ojbData->getRhmsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rhmsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRhmsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rhmsecu' => $ojbData->getRhmsecu()]);
	  return $ojbData->getRhmsecu();
	} else
	 {
	      throw new \RuntimeException('Trhpam Id='.$ojbData->getRhmsecu().' does not exist');
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
		$this->tableGateway->delete(['rhmsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trhpam
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rhmsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trhpam could not be found:rhmsecu='.$id);
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

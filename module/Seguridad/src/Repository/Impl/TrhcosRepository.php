<?php
 /**
 * Implementation of the interface   Trhcos Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrhcosRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trhcos;
  use Seguridad\Repository\ITrhcosRepository;
  class TrhcosRepository implements ITrhcosRepository
  
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
		$ojbData = new Trhcos($data);
	if ($ojbData->getRhcsecu() == null || $ojbData->getRhcsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rhcsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRhcsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rhcsecu' => $ojbData->getRhcsecu()]);
	  return $ojbData->getRhcsecu();
	} else
	 {
	      throw new \RuntimeException('Trhcos Id='.$ojbData->getRhcsecu().' does not exist');
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
		$this->tableGateway->delete(['rhcsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trhcos
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rhcsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trhcos could not be found:rhcsecu='.$id);
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

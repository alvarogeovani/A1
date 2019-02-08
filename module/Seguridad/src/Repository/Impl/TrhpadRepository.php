<?php
 /**
 * Implementation of the interface   Trhpad Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrhpadRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trhpad;
  use Seguridad\Repository\ITrhpadRepository;
  class TrhpadRepository implements ITrhpadRepository
  
{

 protected $tableGateway;
 public function __construct(BaseRepository $tableGateway)
{
 $this->tableGateway = $tableGateway;
 }

	/**
	* Save the current entry
	* @param array $data
	* @return int
	*/
	public function save($data)
	{
		$ojbData = new Trhpad($data);
	if ($ojbData->getRhdsecu() == null || $ojbData->getRhdsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rhdsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRhdsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rhdsecu' => $ojbData->getRhdsecu()]);
	  return $ojbData->getRhdsecu();
	} else
	 {
	      throw new \RuntimeException('Trhpad Id='.$ojbData->getRhdsecu().' does not exist');
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
		$this->tableGateway->delete(['rhdsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trhpad
	*/
	public function find($id)
	{
	 $id = (int) $id;
	$row = $this->tableGateway->find(['rhdsecu' => $id]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trhpad could not be found:rhdsecu='.$id);
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

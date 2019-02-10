<?php
 /**
 * Implementation of the interface   Trayuh Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrayuhRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trayuh;
  use Seguridad\Repository\ITrayuhRepository;
  class TrayuhRepository implements ITrayuhRepository
  
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
		$ojbData = new Trayuh($data);
	if ($ojbData->getRahsecu() == null || $ojbData->getRahsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rahsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRahsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rahsecu' => $ojbData->getRahsecu()]);
	  return $ojbData->getRahsecu();
	} else
	 {
	      throw new \RuntimeException('Trayuh Id='.$ojbData->getRahsecu().' does not exist');
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
		$this->tableGateway->delete(['rahsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trayuh
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rahsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trayuh could not be found:rahsecu='.$id);
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

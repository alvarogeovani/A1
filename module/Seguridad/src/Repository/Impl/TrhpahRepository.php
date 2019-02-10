<?php
 /**
 * Implementation of the interface   Trhpah Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrhpahRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trhpah;
  use Seguridad\Repository\ITrhpahRepository;
  class TrhpahRepository implements ITrhpahRepository
  
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
		$ojbData = new Trhpah($data);
	if ($ojbData->getRhhsecu() == null || $ojbData->getRhhsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rhhsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRhhsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rhhsecu' => $ojbData->getRhhsecu()]);
	  return $ojbData->getRhhsecu();
	} else
	 {
	      throw new \RuntimeException('Trhpah Id='.$ojbData->getRhhsecu().' does not exist');
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
		$this->tableGateway->delete(['rhhsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trhpah
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rhhsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trhpah could not be found:rhhsecu='.$id);
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

<?php
 /**
 * Implementation of the interface   Trmsus Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrmsusRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trmsus;
  use Seguridad\Repository\ITrmsusRepository;
  class TrmsusRepository implements ITrmsusRepository
  
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
		$ojbData = new Trmsus($data);
	if ($ojbData->getRmssecu() == null || $ojbData->getRmssecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rmssecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRmssecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rmssecu' => $ojbData->getRmssecu()]);
	  return $ojbData->getRmssecu();
	} else
	 {
	      throw new \RuntimeException('Trmsus Id='.$ojbData->getRmssecu().' does not exist');
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
		$this->tableGateway->delete(['rmssecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trmsus
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rmssecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trmsus could not be found:rmssecu='.$id);
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

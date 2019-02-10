<?php
 /**
 * Implementation of the interface   Trappm Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrappmRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trappm;
  use Seguridad\Repository\ITrappmRepository;
  class TrappmRepository implements ITrappmRepository
  
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
		$ojbData = new Trappm($data);
	if ($ojbData->getRapsecu() == null || $ojbData->getRapsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rapsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRapsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rapsecu' => $ojbData->getRapsecu()]);
	  return $ojbData->getRapsecu();
	} else
	 {
	      throw new \RuntimeException('Trappm Id='.$ojbData->getRapsecu().' does not exist');
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
		$this->tableGateway->delete(['rapsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trappm
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rapsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trappm could not be found:rapsecu='.$id);
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

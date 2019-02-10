<?php
 /**
 * Implementation of the interface   Trdepr Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrdeprRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trdepr;
  use Seguridad\Repository\ITrdeprRepository;
  class TrdeprRepository implements ITrdeprRepository
  
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
		$ojbData = new Trdepr($data);
	if ($ojbData->getRdpsecu() == null || $ojbData->getRdpsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rdpsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRdpsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rdpsecu' => $ojbData->getRdpsecu()]);
	  return $ojbData->getRdpsecu();
	} else
	 {
	      throw new \RuntimeException('Trdepr Id='.$ojbData->getRdpsecu().' does not exist');
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
		$this->tableGateway->delete(['rdpsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trdepr
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rdpsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trdepr could not be found:rdpsecu='.$id);
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

<?php
 /**
 * Implementation of the interface   Trtabh Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrtabhRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trtabh;
  use Seguridad\Repository\ITrtabhRepository;
  class TrtabhRepository implements ITrtabhRepository
  
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
		$ojbData = new Trtabh($data);
	if ($ojbData->getRtbsec1() == null || $ojbData->getRtbsec1() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rtbsec1']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRtbsec1()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rtbsec1' => $ojbData->getRtbsec1()]);
	  return $ojbData->getRtbsec1();
	} else
	 {
	      throw new \RuntimeException('Trtabh Id='.$ojbData->getRtbsec1().' does not exist');
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
		$this->tableGateway->delete(['rtbsec1' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trtabh
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rtbsec1' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trtabh could not be found:rtbsec1='.$id);
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

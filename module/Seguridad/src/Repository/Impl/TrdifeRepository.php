<?php
 /**
 * Implementation of the interface   Trdife Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrdifeRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trdife;
  use Seguridad\Repository\ITrdifeRepository;
  class TrdifeRepository implements ITrdifeRepository
  
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
		$ojbData = new Trdife($data);
	if ($ojbData->getRcosec1() == null || $ojbData->getRcosec1() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rcosec1']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRcosec1()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rcosec1' => $ojbData->getRcosec1()]);
	  return $ojbData->getRcosec1();
	} else
	 {
	      throw new \RuntimeException('Trdife Id='.$ojbData->getRcosec1().' does not exist');
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
		$this->tableGateway->delete(['rcosec1' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trdife
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rcosec1' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trdife could not be found:rcosec1='.$id);
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

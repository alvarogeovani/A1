<?php
 /**
 * Implementation of the interface   Ttdscd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtdscdRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttdscd;
  use Facturacion\Repository\ITtdscdRepository;
  class TtdscdRepository implements ITtdscdRepository
  
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
		$ojbData = new Ttdscd($data);
	if ($ojbData->getTtdsec1() == null || $ojbData->getTtdsec1() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['ttdsec1']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTtdsec1()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['ttdsec1' => $ojbData->getTtdsec1()]);
	  return $ojbData->getTtdsec1();
	} else
	 {
	      throw new \RuntimeException('Ttdscd Id='.$ojbData->getTtdsec1().' does not exist');
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
		$this->tableGateway->delete(['ttdsec1' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttdscd
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['ttdsec1' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttdscd could not be found:ttdsec1='.$id);
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

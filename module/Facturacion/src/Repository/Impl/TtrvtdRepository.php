<?php
 /**
 * Implementation of the interface   Ttrvtd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtrvtdRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttrvtd;
  use Facturacion\Repository\ITtrvtdRepository;
  class TtrvtdRepository implements ITtrvtdRepository
  
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
		$ojbData = new Ttrvtd($data);
	if ($ojbData->getTrvsec1() == null || $ojbData->getTrvsec1() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['trvsec1']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTrvsec1()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['trvsec1' => $ojbData->getTrvsec1()]);
	  return $ojbData->getTrvsec1();
	} else
	 {
	      throw new \RuntimeException('Ttrvtd Id='.$ojbData->getTrvsec1().' does not exist');
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
		$this->tableGateway->delete(['trvsec1' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttrvtd
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['trvsec1' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttrvtd could not be found:trvsec1='.$id);
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

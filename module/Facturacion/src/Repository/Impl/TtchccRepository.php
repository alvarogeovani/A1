<?php
 /**
 * Implementation of the interface   Ttchcc Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtchccRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttchcc;
  use Facturacion\Repository\ITtchccRepository;
  class TtchccRepository implements ITtchccRepository
  
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
		$ojbData = new Ttchcc($data);
	if ($ojbData->getTtcsecu() == null || $ojbData->getTtcsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['ttcsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTtcsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['ttcsecu' => $ojbData->getTtcsecu()]);
	  return $ojbData->getTtcsecu();
	} else
	 {
	      throw new \RuntimeException('Ttchcc Id='.$ojbData->getTtcsecu().' does not exist');
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
		$this->tableGateway->delete(['ttcsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttchcc
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['ttcsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttchcc could not be found:ttcsecu='.$id);
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

<?php
 /**
 * Implementation of the interface   Ttdpdb Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtdpdbRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttdpdb;
  use Facturacion\Repository\ITtdpdbRepository;
  class TtdpdbRepository implements ITtdpdbRepository
  
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
		$ojbData = new Ttdpdb($data);
	if ($ojbData->getTdbsecu() == null || $ojbData->getTdbsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tdbsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTdbsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tdbsecu' => $ojbData->getTdbsecu()]);
	  return $ojbData->getTdbsecu();
	} else
	 {
	      throw new \RuntimeException('Ttdpdb Id='.$ojbData->getTdbsecu().' does not exist');
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
		$this->tableGateway->delete(['tdbsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttdpdb
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tdbsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttdpdb could not be found:tdbsecu='.$id);
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

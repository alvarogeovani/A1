<?php
 /**
 * Implementation of the interface   Ttcpag Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtcpagRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttcpag;
  use Facturacion\Repository\ITtcpagRepository;
  class TtcpagRepository implements ITtcpagRepository
  
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
		$ojbData = new Ttcpag($data);
	if ($ojbData->getTcpsecu() == null || $ojbData->getTcpsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tcpsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTcpsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tcpsecu' => $ojbData->getTcpsecu()]);
	  return $ojbData->getTcpsecu();
	} else
	 {
	      throw new \RuntimeException('Ttcpag Id='.$ojbData->getTcpsecu().' does not exist');
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
		$this->tableGateway->delete(['tcpsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttcpag
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tcpsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttcpag could not be found:tcpsecu='.$id);
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

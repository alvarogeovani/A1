<?php
 /**
 * Implementation of the interface   Ttpedh Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtpedhRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttpedh;
  use Facturacion\Repository\ITtpedhRepository;
  class TtpedhRepository implements ITtpedhRepository
  
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
		$ojbData = new Ttpedh($data);
	if ($ojbData->getTphsecu() == null || $ojbData->getTphsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tphsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTphsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tphsecu' => $ojbData->getTphsecu()]);
	  return $ojbData->getTphsecu();
	} else
	 {
	      throw new \RuntimeException('Ttpedh Id='.$ojbData->getTphsecu().' does not exist');
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
		$this->tableGateway->delete(['tphsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttpedh
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tphsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttpedh could not be found:tphsecu='.$id);
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

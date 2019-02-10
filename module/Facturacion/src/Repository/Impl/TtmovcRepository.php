<?php
 /**
 * Implementation of the interface   Ttmovc Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtmovcRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttmovc;
  use Facturacion\Repository\ITtmovcRepository;
  class TtmovcRepository implements ITtmovcRepository
  
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
		$ojbData = new Ttmovc($data);
	if ($ojbData->getTmcsecu() == null || $ojbData->getTmcsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tmcsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTmcsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tmcsecu' => $ojbData->getTmcsecu()]);
	  return $ojbData->getTmcsecu();
	} else
	 {
	      throw new \RuntimeException('Ttmovc Id='.$ojbData->getTmcsecu().' does not exist');
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
		$this->tableGateway->delete(['tmcsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttmovc
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tmcsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttmovc could not be found:tmcsecu='.$id);
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

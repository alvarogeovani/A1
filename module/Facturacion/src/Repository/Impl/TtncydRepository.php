<?php
 /**
 * Implementation of the interface   Ttncyd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtncydRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttncyd;
  use Facturacion\Repository\ITtncydRepository;
  class TtncydRepository implements ITtncydRepository
  
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
		$ojbData = new Ttncyd($data);
	if ($ojbData->getTcdsecu() == null || $ojbData->getTcdsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tcdsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTcdsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tcdsecu' => $ojbData->getTcdsecu()]);
	  return $ojbData->getTcdsecu();
	} else
	 {
	      throw new \RuntimeException('Ttncyd Id='.$ojbData->getTcdsecu().' does not exist');
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
		$this->tableGateway->delete(['tcdsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttncyd
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tcdsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttncyd could not be found:tcdsecu='.$id);
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

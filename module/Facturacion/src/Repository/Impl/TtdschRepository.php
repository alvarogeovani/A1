<?php
 /**
 * Implementation of the interface   Ttdsch Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtdschRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttdsch;
  use Facturacion\Repository\ITtdschRepository;
  class TtdschRepository implements ITtdschRepository
  
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
		$ojbData = new Ttdsch($data);
	if ($ojbData->getTthsecu() == null || $ojbData->getTthsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tthsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTthsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tthsecu' => $ojbData->getTthsecu()]);
	  return $ojbData->getTthsecu();
	} else
	 {
	      throw new \RuntimeException('Ttdsch Id='.$ojbData->getTthsecu().' does not exist');
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
		$this->tableGateway->delete(['tthsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttdsch
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tthsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttdsch could not be found:tthsecu='.$id);
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

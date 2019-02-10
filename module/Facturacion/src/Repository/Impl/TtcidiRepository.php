<?php
 /**
 * Implementation of the interface   Ttcidi Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtcidiRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttcidi;
  use Facturacion\Repository\ITtcidiRepository;
  class TtcidiRepository implements ITtcidiRepository
  
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
		$ojbData = new Ttcidi($data);
	if ($ojbData->getTcisecu() == null || $ojbData->getTcisecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tcisecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTcisecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tcisecu' => $ojbData->getTcisecu()]);
	  return $ojbData->getTcisecu();
	} else
	 {
	      throw new \RuntimeException('Ttcidi Id='.$ojbData->getTcisecu().' does not exist');
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
		$this->tableGateway->delete(['tcisecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttcidi
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tcisecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttcidi could not be found:tcisecu='.$id);
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

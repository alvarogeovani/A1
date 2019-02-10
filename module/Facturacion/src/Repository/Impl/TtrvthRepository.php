<?php
 /**
 * Implementation of the interface   Ttrvth Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtrvthRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttrvth;
  use Facturacion\Repository\ITtrvthRepository;
  class TtrvthRepository implements ITtrvthRepository
  
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
		$ojbData = new Ttrvth($data);
	if ($ojbData->getTrvsecu() == null || $ojbData->getTrvsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['trvsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTrvsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['trvsecu' => $ojbData->getTrvsecu()]);
	  return $ojbData->getTrvsecu();
	} else
	 {
	      throw new \RuntimeException('Ttrvth Id='.$ojbData->getTrvsecu().' does not exist');
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
		$this->tableGateway->delete(['trvsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttrvth
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['trvsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttrvth could not be found:trvsecu='.$id);
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

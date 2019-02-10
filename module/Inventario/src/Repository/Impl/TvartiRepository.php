<?php
 /**
 * Implementation of the interface   Tvarti Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvartiRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvarti;
  use Inventario\Repository\ITvartiRepository;
  class TvartiRepository implements ITvartiRepository
  
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
		$ojbData = new Tvarti($data);
	if ($ojbData->getVarsecu() == null || $ojbData->getVarsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['varsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVarsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['varsecu' => $ojbData->getVarsecu()]);
	  return $ojbData->getVarsecu();
	} else
	 {
	      throw new \RuntimeException('Tvarti Id='.$ojbData->getVarsecu().' does not exist');
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
		$this->tableGateway->delete(['varsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvarti
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['varsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvarti could not be found:varsecu='.$id);
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

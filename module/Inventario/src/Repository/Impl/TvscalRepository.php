<?php
 /**
 * Implementation of the interface   Tvscal Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvscalRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvscal;
  use Inventario\Repository\ITvscalRepository;
  class TvscalRepository implements ITvscalRepository
  
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
		$ojbData = new Tvscal($data);
	if ($ojbData->getVsbsecu() == null || $ojbData->getVsbsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vsbsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVsbsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vsbsecu' => $ojbData->getVsbsecu()]);
	  return $ojbData->getVsbsecu();
	} else
	 {
	      throw new \RuntimeException('Tvscal Id='.$ojbData->getVsbsecu().' does not exist');
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
		$this->tableGateway->delete(['vsbsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvscal
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vsbsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvscal could not be found:vsbsecu='.$id);
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

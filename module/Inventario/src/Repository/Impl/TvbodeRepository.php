<?php
 /**
 * Implementation of the interface   Tvbode Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvbodeRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvbode;
  use Inventario\Repository\ITvbodeRepository;
  class TvbodeRepository implements ITvbodeRepository
  
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
		$ojbData = new Tvbode($data);
	if ($ojbData->getVbosecu() == null || $ojbData->getVbosecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vbosecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVbosecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vbosecu' => $ojbData->getVbosecu()]);
	  return $ojbData->getVbosecu();
	} else
	 {
	      throw new \RuntimeException('Tvbode Id='.$ojbData->getVbosecu().' does not exist');
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
		$this->tableGateway->delete(['vbosecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvbode
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vbosecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvbode could not be found:vbosecu='.$id);
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

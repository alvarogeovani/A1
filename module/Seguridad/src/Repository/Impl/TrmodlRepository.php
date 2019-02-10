<?php
 /**
 * Implementation of the interface   Trmodl Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrmodlRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trmodl;
  use Seguridad\Repository\ITrmodlRepository;
  class TrmodlRepository implements ITrmodlRepository
  
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
		$ojbData = new Trmodl($data);
	if ($ojbData->getRmosecu() == null || $ojbData->getRmosecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rmosecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRmosecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rmosecu' => $ojbData->getRmosecu()]);
	  return $ojbData->getRmosecu();
	} else
	 {
	      throw new \RuntimeException('Trmodl Id='.$ojbData->getRmosecu().' does not exist');
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
		$this->tableGateway->delete(['rmosecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trmodl
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rmosecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trmodl could not be found:rmosecu='.$id);
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

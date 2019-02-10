<?php
 /**
 * Implementation of the interface   Trcosi Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrcosiRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trcosi;
  use Seguridad\Repository\ITrcosiRepository;
  class TrcosiRepository implements ITrcosiRepository
  
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
		$ojbData = new Trcosi($data);
	if ($ojbData->getRcosecu() == null || $ojbData->getRcosecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rcosecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRcosecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rcosecu' => $ojbData->getRcosecu()]);
	  return $ojbData->getRcosecu();
	} else
	 {
	      throw new \RuntimeException('Trcosi Id='.$ojbData->getRcosecu().' does not exist');
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
		$this->tableGateway->delete(['rcosecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trcosi
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rcosecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trcosi could not be found:rcosecu='.$id);
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

<?php
 /**
 * Implementation of the interface   Tvsalm Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvsalmRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvsalm;
  use Inventario\Repository\ITvsalmRepository;
  class TvsalmRepository implements ITvsalmRepository
  
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
		$ojbData = new Tvsalm($data);
	if ($ojbData->getVsasecu() == null || $ojbData->getVsasecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vsasecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVsasecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vsasecu' => $ojbData->getVsasecu()]);
	  return $ojbData->getVsasecu();
	} else
	 {
	      throw new \RuntimeException('Tvsalm Id='.$ojbData->getVsasecu().' does not exist');
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
		$this->tableGateway->delete(['vsasecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvsalm
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vsasecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvsalm could not be found:vsasecu='.$id);
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

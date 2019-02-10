<?php
 /**
 * Implementation of the interface   Tvdnar Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvdnarRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvdnar;
  use Inventario\Repository\ITvdnarRepository;
  class TvdnarRepository implements ITvdnarRepository
  
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
		$ojbData = new Tvdnar($data);
	if ($ojbData->getVeasecu() == null || $ojbData->getVeasecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['veasecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVeasecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['veasecu' => $ojbData->getVeasecu()]);
	  return $ojbData->getVeasecu();
	} else
	 {
	      throw new \RuntimeException('Tvdnar Id='.$ojbData->getVeasecu().' does not exist');
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
		$this->tableGateway->delete(['veasecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvdnar
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['veasecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvdnar could not be found:veasecu='.$id);
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

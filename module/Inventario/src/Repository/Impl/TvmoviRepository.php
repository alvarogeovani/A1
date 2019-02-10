<?php
 /**
 * Implementation of the interface   Tvmovi Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvmoviRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvmovi;
  use Inventario\Repository\ITvmoviRepository;
  class TvmoviRepository implements ITvmoviRepository
  
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
		$ojbData = new Tvmovi($data);
	if ($ojbData->getVinsecu() == null || $ojbData->getVinsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vinsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVinsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vinsecu' => $ojbData->getVinsecu()]);
	  return $ojbData->getVinsecu();
	} else
	 {
	      throw new \RuntimeException('Tvmovi Id='.$ojbData->getVinsecu().' does not exist');
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
		$this->tableGateway->delete(['vinsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvmovi
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vinsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvmovi could not be found:vinsecu='.$id);
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

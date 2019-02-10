<?php
 /**
 * Implementation of the interface   Trreer Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrreerRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trreer;
  use Seguridad\Repository\ITrreerRepository;
  class TrreerRepository implements ITrreerRepository
  
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
		$ojbData = new Trreer($data);
	if ($ojbData->getRresecu() == null || $ojbData->getRresecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rresecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRresecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rresecu' => $ojbData->getRresecu()]);
	  return $ojbData->getRresecu();
	} else
	 {
	      throw new \RuntimeException('Trreer Id='.$ojbData->getRresecu().' does not exist');
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
		$this->tableGateway->delete(['rresecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trreer
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rresecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trreer could not be found:rresecu='.$id);
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

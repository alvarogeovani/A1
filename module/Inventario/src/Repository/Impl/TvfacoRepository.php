<?php
 /**
 * Implementation of the interface   Tvfaco Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvfacoRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tvfaco;
  use Inventario\Repository\ITvfacoRepository;
  class TvfacoRepository implements ITvfacoRepository
  
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
		$ojbData = new Tvfaco($data);
	if ($ojbData->getVfcsecu() == null || $ojbData->getVfcsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['vfcsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getVfcsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['vfcsecu' => $ojbData->getVfcsecu()]);
	  return $ojbData->getVfcsecu();
	} else
	 {
	      throw new \RuntimeException('Tvfaco Id='.$ojbData->getVfcsecu().' does not exist');
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
		$this->tableGateway->delete(['vfcsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tvfaco
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['vfcsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tvfaco could not be found:vfcsecu='.$id);
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

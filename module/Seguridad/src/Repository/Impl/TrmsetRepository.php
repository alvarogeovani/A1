<?php
 /**
 * Implementation of the interface   Trmset Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrmsetRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trmset;
  use Seguridad\Repository\ITrmsetRepository;
  class TrmsetRepository implements ITrmsetRepository
  
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
		$ojbData = new Trmset($data);
	if ($ojbData->getRmesecu() == null || $ojbData->getRmesecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rmesecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRmesecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rmesecu' => $ojbData->getRmesecu()]);
	  return $ojbData->getRmesecu();
	} else
	 {
	      throw new \RuntimeException('Trmset Id='.$ojbData->getRmesecu().' does not exist');
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
		$this->tableGateway->delete(['rmesecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trmset
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rmesecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trmset could not be found:rmesecu='.$id);
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

<?php
 /**
 * Implementation of the interface   Tropch Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITropchRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Tropch;
  use Seguridad\Repository\ITropchRepository;
  class TropchRepository implements ITropchRepository
  
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
		$ojbData = new Tropch($data);
	if ($ojbData->getRnosecu() == null || $ojbData->getRnosecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rnosecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRnosecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rnosecu' => $ojbData->getRnosecu()]);
	  return $ojbData->getRnosecu();
	} else
	 {
	      throw new \RuntimeException('Tropch Id='.$ojbData->getRnosecu().' does not exist');
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
		$this->tableGateway->delete(['rnosecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tropch
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rnosecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tropch could not be found:rnosecu='.$id);
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

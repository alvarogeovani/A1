<?php
 /**
 * Implementation of the interface   Trperd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrperdRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trperd;
  use Seguridad\Repository\ITrperdRepository;
  class TrperdRepository implements ITrperdRepository
  
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
		$ojbData = new Trperd($data);
	if ($ojbData->getRrdsecu() == null || $ojbData->getRrdsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rrdsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRrdsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rrdsecu' => $ojbData->getRrdsecu()]);
	  return $ojbData->getRrdsecu();
	} else
	 {
	      throw new \RuntimeException('Trperd Id='.$ojbData->getRrdsecu().' does not exist');
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
		$this->tableGateway->delete(['rrdsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trperd
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rrdsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trperd could not be found:rrdsecu='.$id);
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

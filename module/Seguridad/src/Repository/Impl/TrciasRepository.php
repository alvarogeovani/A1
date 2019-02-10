<?php
 /**
 * Implementation of the interface   Trcias Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrciasRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trcias;
  use Seguridad\Repository\ITrciasRepository;
  class TrciasRepository implements ITrciasRepository
  
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
		$ojbData = new Trcias($data);
	if ($ojbData->getBcisecu() == null || $ojbData->getBcisecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['bcisecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getBcisecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['bcisecu' => $ojbData->getBcisecu()]);
	  return $ojbData->getBcisecu();
	} else
	 {
	      throw new \RuntimeException('Trcias Id='.$ojbData->getBcisecu().' does not exist');
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
		$this->tableGateway->delete(['bcisecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trcias
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['bcisecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trcias could not be found:bcisecu='.$id);
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

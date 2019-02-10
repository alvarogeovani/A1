<?php
 /**
 * Implementation of the interface   Trpriv Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrprivRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trpriv;
  use Seguridad\Repository\ITrprivRepository;
  class TrprivRepository implements ITrprivRepository
  
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
		$ojbData = new Trpriv($data);
	if ($ojbData->getRprsecu() == null || $ojbData->getRprsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rprsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRprsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rprsecu' => $ojbData->getRprsecu()]);
	  return $ojbData->getRprsecu();
	} else
	 {
	      throw new \RuntimeException('Trpriv Id='.$ojbData->getRprsecu().' does not exist');
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
		$this->tableGateway->delete(['rprsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trpriv
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rprsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trpriv could not be found:rprsecu='.$id);
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

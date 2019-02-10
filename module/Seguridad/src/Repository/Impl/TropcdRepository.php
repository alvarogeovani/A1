<?php
 /**
 * Implementation of the interface   Tropcd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITropcdRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Tropcd;
  use Seguridad\Repository\ITropcdRepository;
  class TropcdRepository implements ITropcdRepository
  
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
		$ojbData = new Tropcd($data);
	if ($ojbData->getRpasec2() == null || $ojbData->getRpasec2() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rpasec2']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRpasec2()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rpasec2' => $ojbData->getRpasec2()]);
	  return $ojbData->getRpasec2();
	} else
	 {
	      throw new \RuntimeException('Tropcd Id='.$ojbData->getRpasec2().' does not exist');
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
		$this->tableGateway->delete(['rpasec2' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tropcd
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rpasec2' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tropcd could not be found:rpasec2='.$id);
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

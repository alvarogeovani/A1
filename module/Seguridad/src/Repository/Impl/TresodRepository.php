<?php
 /**
 * Implementation of the interface   Tresod Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITresodRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Tresod;
  use Seguridad\Repository\ITresodRepository;
  class TresodRepository implements ITresodRepository
  
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
		$ojbData = new Tresod($data);
	if ($ojbData->getRedsecu() == null || $ojbData->getRedsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['redsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRedsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['redsecu' => $ojbData->getRedsecu()]);
	  return $ojbData->getRedsecu();
	} else
	 {
	      throw new \RuntimeException('Tresod Id='.$ojbData->getRedsecu().' does not exist');
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
		$this->tableGateway->delete(['redsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tresod
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['redsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tresod could not be found:redsecu='.$id);
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

<?php
 /**
 * Implementation of the interface   Tresoh Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITresohRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Tresoh;
  use Seguridad\Repository\ITresohRepository;
  class TresohRepository implements ITresohRepository
  
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
		$ojbData = new Tresoh($data);
	if ($ojbData->getRehsecu() == null || $ojbData->getRehsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rehsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRehsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rehsecu' => $ojbData->getRehsecu()]);
	  return $ojbData->getRehsecu();
	} else
	 {
	      throw new \RuntimeException('Tresoh Id='.$ojbData->getRehsecu().' does not exist');
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
		$this->tableGateway->delete(['rehsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tresoh
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rehsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tresoh could not be found:rehsecu='.$id);
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

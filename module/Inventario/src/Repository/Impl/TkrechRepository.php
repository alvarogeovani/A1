<?php
 /**
 * Implementation of the interface   Tkrech Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITkrechRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Impl;
  use Inventario\Core\BaseRepository;
  use Inventario\Entity\Tkrech;
  use Inventario\Repository\ITkrechRepository;
  class TkrechRepository implements ITkrechRepository
  
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
		$ojbData = new Tkrech($data);
	if ($ojbData->getKrhsecu() == null || $ojbData->getKrhsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['krhsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getKrhsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['krhsecu' => $ojbData->getKrhsecu()]);
	  return $ojbData->getKrhsecu();
	} else
	 {
	      throw new \RuntimeException('Tkrech Id='.$ojbData->getKrhsecu().' does not exist');
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
		$this->tableGateway->delete(['krhsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tkrech
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['krhsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tkrech could not be found:krhsecu='.$id);
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

<?php
 /**
 * Implementation of the interface   Ttpuem Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtpuemRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttpuem;
  use Facturacion\Repository\ITtpuemRepository;
  class TtpuemRepository implements ITtpuemRepository
  
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
		$ojbData = new Ttpuem($data);
	if ($ojbData->getTpmsecu() == null || $ojbData->getTpmsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tpmsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTpmsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tpmsecu' => $ojbData->getTpmsecu()]);
	  return $ojbData->getTpmsecu();
	} else
	 {
	      throw new \RuntimeException('Ttpuem Id='.$ojbData->getTpmsecu().' does not exist');
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
		$this->tableGateway->delete(['tpmsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttpuem
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tpmsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttpuem could not be found:tpmsecu='.$id);
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

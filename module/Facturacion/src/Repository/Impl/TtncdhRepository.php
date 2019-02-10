<?php
 /**
 * Implementation of the interface   Ttncdh Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtncdhRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttncdh;
  use Facturacion\Repository\ITtncdhRepository;
  class TtncdhRepository implements ITtncdhRepository
  
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
		$ojbData = new Ttncdh($data);
	if ($ojbData->getTnhsecu() == null || $ojbData->getTnhsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tnhsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTnhsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tnhsecu' => $ojbData->getTnhsecu()]);
	  return $ojbData->getTnhsecu();
	} else
	 {
	      throw new \RuntimeException('Ttncdh Id='.$ojbData->getTnhsecu().' does not exist');
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
		$this->tableGateway->delete(['tnhsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttncdh
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tnhsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttncdh could not be found:tnhsecu='.$id);
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

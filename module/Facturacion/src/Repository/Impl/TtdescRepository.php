<?php
 /**
 * Implementation of the interface   Ttdesc Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtdescRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttdesc;
  use Facturacion\Repository\ITtdescRepository;
  class TtdescRepository implements ITtdescRepository
  
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
		$ojbData = new Ttdesc($data);
	if ($ojbData->getTdssecu() == null || $ojbData->getTdssecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tdssecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTdssecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tdssecu' => $ojbData->getTdssecu()]);
	  return $ojbData->getTdssecu();
	} else
	 {
	      throw new \RuntimeException('Ttdesc Id='.$ojbData->getTdssecu().' does not exist');
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
		$this->tableGateway->delete(['tdssecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttdesc
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tdssecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttdesc could not be found:tdssecu='.$id);
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

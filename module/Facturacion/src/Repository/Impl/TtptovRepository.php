<?php
 /**
 * Implementation of the interface   Ttptov Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtptovRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttptov;
  use Facturacion\Repository\ITtptovRepository;
  class TtptovRepository implements ITtptovRepository
  
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
		$ojbData = new Ttptov($data);
	if ($ojbData->getTpvsecu() == null || $ojbData->getTpvsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tpvsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTpvsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tpvsecu' => $ojbData->getTpvsecu()]);
	  return $ojbData->getTpvsecu();
	} else
	 {
	      throw new \RuntimeException('Ttptov Id='.$ojbData->getTpvsecu().' does not exist');
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
		$this->tableGateway->delete(['tpvsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttptov
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tpvsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttptov could not be found:tpvsecu='.$id);
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

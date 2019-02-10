<?php
 /**
 * Implementation of the interface   Tthvtm Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITthvtmRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Tthvtm;
  use Facturacion\Repository\ITthvtmRepository;
  class TthvtmRepository implements ITthvtmRepository
  
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
		$ojbData = new Tthvtm($data);
	if ($ojbData->getThvsecu() == null || $ojbData->getThvsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['thvsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getThvsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['thvsecu' => $ojbData->getThvsecu()]);
	  return $ojbData->getThvsecu();
	} else
	 {
	      throw new \RuntimeException('Tthvtm Id='.$ojbData->getThvsecu().' does not exist');
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
		$this->tableGateway->delete(['thvsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tthvtm
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['thvsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tthvtm could not be found:thvsecu='.$id);
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

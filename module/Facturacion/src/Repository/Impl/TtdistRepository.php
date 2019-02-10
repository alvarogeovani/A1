<?php
 /**
 * Implementation of the interface   Ttdist Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtdistRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttdist;
  use Facturacion\Repository\ITtdistRepository;
  class TtdistRepository implements ITtdistRepository
  
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
		$ojbData = new Ttdist($data);
	if ($ojbData->getTdisecu() == null || $ojbData->getTdisecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tdisecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTdisecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tdisecu' => $ojbData->getTdisecu()]);
	  return $ojbData->getTdisecu();
	} else
	 {
	      throw new \RuntimeException('Ttdist Id='.$ojbData->getTdisecu().' does not exist');
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
		$this->tableGateway->delete(['tdisecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttdist
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tdisecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttdist could not be found:tdisecu='.$id);
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

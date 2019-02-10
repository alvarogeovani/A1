<?php
 /**
 * Implementation of the interface   Tthzon Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITthzonRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Tthzon;
  use Facturacion\Repository\ITthzonRepository;
  class TthzonRepository implements ITthzonRepository
  
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
		$ojbData = new Tthzon($data);
	if ($ojbData->getThmsecu() == null || $ojbData->getThmsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['thmsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getThmsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['thmsecu' => $ojbData->getThmsecu()]);
	  return $ojbData->getThmsecu();
	} else
	 {
	      throw new \RuntimeException('Tthzon Id='.$ojbData->getThmsecu().' does not exist');
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
		$this->tableGateway->delete(['thmsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tthzon
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['thmsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tthzon could not be found:thmsecu='.$id);
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

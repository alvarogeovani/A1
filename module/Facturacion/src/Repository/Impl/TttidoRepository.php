<?php
 /**
 * Implementation of the interface   Tttido Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITttidoRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Tttido;
  use Facturacion\Repository\ITttidoRepository;
  class TttidoRepository implements ITttidoRepository
  
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
		$ojbData = new Tttido($data);
	if ($ojbData->getTbdsecu() == null || $ojbData->getTbdsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tbdsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTbdsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tbdsecu' => $ojbData->getTbdsecu()]);
	  return $ojbData->getTbdsecu();
	} else
	 {
	      throw new \RuntimeException('Tttido Id='.$ojbData->getTbdsecu().' does not exist');
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
		$this->tableGateway->delete(['tbdsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Tttido
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tbdsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Tttido could not be found:tbdsecu='.$id);
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

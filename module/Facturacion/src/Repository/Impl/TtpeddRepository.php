<?php
 /**
 * Implementation of the interface   Ttpedd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtpeddRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttpedd;
  use Facturacion\Repository\ITtpeddRepository;
  class TtpeddRepository implements ITtpeddRepository
  
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
		$ojbData = new Ttpedd($data);
	if ($ojbData->getTpdsecu() == null || $ojbData->getTpdsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tpdsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTpdsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tpdsecu' => $ojbData->getTpdsecu()]);
	  return $ojbData->getTpdsecu();
	} else
	 {
	      throw new \RuntimeException('Ttpedd Id='.$ojbData->getTpdsecu().' does not exist');
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
		$this->tableGateway->delete(['tpdsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttpedd
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tpdsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttpedd could not be found:tpdsecu='.$id);
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

<?php
 /**
 * Implementation of the interface   Ttlprd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtlprdRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttlprd;
  use Facturacion\Repository\ITtlprdRepository;
  class TtlprdRepository implements ITtlprdRepository
  
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
		$ojbData = new Ttlprd($data);
	if ($ojbData->getTldsecu() == null || $ojbData->getTldsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tldsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTldsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tldsecu' => $ojbData->getTldsecu()]);
	  return $ojbData->getTldsecu();
	} else
	 {
	      throw new \RuntimeException('Ttlprd Id='.$ojbData->getTldsecu().' does not exist');
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
		$this->tableGateway->delete(['tldsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttlprd
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tldsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttlprd could not be found:tldsecu='.$id);
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

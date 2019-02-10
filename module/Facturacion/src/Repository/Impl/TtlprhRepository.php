<?php
 /**
 * Implementation of the interface   Ttlprh Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtlprhRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttlprh;
  use Facturacion\Repository\ITtlprhRepository;
  class TtlprhRepository implements ITtlprhRepository
  
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
		$ojbData = new Ttlprh($data);
	if ($ojbData->getTlpsecu() == null || $ojbData->getTlpsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tlpsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTlpsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tlpsecu' => $ojbData->getTlpsecu()]);
	  return $ojbData->getTlpsecu();
	} else
	 {
	      throw new \RuntimeException('Ttlprh Id='.$ojbData->getTlpsecu().' does not exist');
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
		$this->tableGateway->delete(['tlpsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttlprh
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tlpsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttlprh could not be found:tlpsecu='.$id);
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

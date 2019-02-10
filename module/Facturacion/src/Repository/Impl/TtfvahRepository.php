<?php
 /**
 * Implementation of the interface   Ttfvah Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtfvahRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttfvah;
  use Facturacion\Repository\ITtfvahRepository;
  class TtfvahRepository implements ITtfvahRepository
  
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
		$ojbData = new Ttfvah($data);
	if ($ojbData->getTfvsecu() == null || $ojbData->getTfvsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tfvsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTfvsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tfvsecu' => $ojbData->getTfvsecu()]);
	  return $ojbData->getTfvsecu();
	} else
	 {
	      throw new \RuntimeException('Ttfvah Id='.$ojbData->getTfvsecu().' does not exist');
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
		$this->tableGateway->delete(['tfvsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttfvah
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tfvsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttfvah could not be found:tfvsecu='.$id);
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

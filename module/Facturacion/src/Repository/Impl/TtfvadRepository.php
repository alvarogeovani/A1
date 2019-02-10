<?php
 /**
 * Implementation of the interface   Ttfvad Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtfvadRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttfvad;
  use Facturacion\Repository\ITtfvadRepository;
  class TtfvadRepository implements ITtfvadRepository
  
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
		$ojbData = new Ttfvad($data);
	if ($ojbData->getTfdsecu() == null || $ojbData->getTfdsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tfdsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTfdsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tfdsecu' => $ojbData->getTfdsecu()]);
	  return $ojbData->getTfdsecu();
	} else
	 {
	      throw new \RuntimeException('Ttfvad Id='.$ojbData->getTfdsecu().' does not exist');
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
		$this->tableGateway->delete(['tfdsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttfvad
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tfdsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttfvad could not be found:tfdsecu='.$id);
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

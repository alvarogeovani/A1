<?php
 /**
 * Implementation of the interface   Ttauto Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtautoRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttauto;
  use Facturacion\Repository\ITtautoRepository;
  class TtautoRepository implements ITtautoRepository
  
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
		$ojbData = new Ttauto($data);
	if ($ojbData->getTausecu() == null || $ojbData->getTausecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tausecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTausecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tausecu' => $ojbData->getTausecu()]);
	  return $ojbData->getTausecu();
	} else
	 {
	      throw new \RuntimeException('Ttauto Id='.$ojbData->getTausecu().' does not exist');
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
		$this->tableGateway->delete(['tausecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttauto
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tausecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttauto could not be found:tausecu='.$id);
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

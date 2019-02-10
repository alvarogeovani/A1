<?php
 /**
 * Implementation of the interface   Ttagen Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtagenRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttagen;
  use Facturacion\Repository\ITtagenRepository;
  class TtagenRepository implements ITtagenRepository
  
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
		$ojbData = new Ttagen($data);
	if ($ojbData->getTagsecu() == null || $ojbData->getTagsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tagsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTagsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tagsecu' => $ojbData->getTagsecu()]);
	  return $ojbData->getTagsecu();
	} else
	 {
	      throw new \RuntimeException('Ttagen Id='.$ojbData->getTagsecu().' does not exist');
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
		$this->tableGateway->delete(['tagsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttagen
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tagsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttagen could not be found:tagsecu='.$id);
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

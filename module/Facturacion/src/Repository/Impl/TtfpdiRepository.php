<?php
 /**
 * Implementation of the interface   Ttfpdi Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtfpdiRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttfpdi;
  use Facturacion\Repository\ITtfpdiRepository;
  class TtfpdiRepository implements ITtfpdiRepository
  
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
		$ojbData = new Ttfpdi($data);
	if ($ojbData->getTfpsecu() == null || $ojbData->getTfpsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tfpsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTfpsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tfpsecu' => $ojbData->getTfpsecu()]);
	  return $ojbData->getTfpsecu();
	} else
	 {
	      throw new \RuntimeException('Ttfpdi Id='.$ojbData->getTfpsecu().' does not exist');
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
		$this->tableGateway->delete(['tfpsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttfpdi
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tfpsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttfpdi could not be found:tfpsecu='.$id);
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

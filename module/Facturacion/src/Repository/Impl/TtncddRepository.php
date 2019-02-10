<?php
 /**
 * Implementation of the interface   Ttncdd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtncddRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Impl;
  use Facturacion\Core\BaseRepository;
  use Facturacion\Entity\Ttncdd;
  use Facturacion\Repository\ITtncddRepository;
  class TtncddRepository implements ITtncddRepository
  
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
		$ojbData = new Ttncdd($data);
	if ($ojbData->getTncsecu() == null || $ojbData->getTncsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['tncsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getTncsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['tncsecu' => $ojbData->getTncsecu()]);
	  return $ojbData->getTncsecu();
	} else
	 {
	      throw new \RuntimeException('Ttncdd Id='.$ojbData->getTncsecu().' does not exist');
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
		$this->tableGateway->delete(['tncsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Ttncdd
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['tncsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Ttncdd could not be found:tncsecu='.$id);
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

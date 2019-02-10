<?php
 /**
 * Implementation of the interface   Trtabd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrtabdRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trtabd;
  use Seguridad\Repository\ITrtabdRepository;
  class TrtabdRepository implements ITrtabdRepository
  
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
		$ojbData = new Trtabd($data);
	if ($ojbData->getRtbsecu() == null || $ojbData->getRtbsecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rtbsecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRtbsecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rtbsecu' => $ojbData->getRtbsecu()]);
	  return $ojbData->getRtbsecu();
	} else
	 {
	      throw new \RuntimeException('Trtabd Id='.$ojbData->getRtbsecu().' does not exist');
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
		$this->tableGateway->delete(['rtbsecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trtabd
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rtbsecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trtabd could not be found:rtbsecu='.$id);
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

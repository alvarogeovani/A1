<?php
 /**
 * Implementation of the interface   Trdipo Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrdipoRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trdipo;
  use Seguridad\Repository\ITrdipoRepository;
  class TrdipoRepository implements ITrdipoRepository
  
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
		$ojbData = new Trdipo($data);
	if ($ojbData->getRdisecu() == null || $ojbData->getRdisecu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rdisecu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRdisecu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rdisecu' => $ojbData->getRdisecu()]);
	  return $ojbData->getRdisecu();
	} else
	 {
	      throw new \RuntimeException('Trdipo Id='.$ojbData->getRdisecu().' does not exist');
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
		$this->tableGateway->delete(['rdisecu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trdipo
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rdisecu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trdipo could not be found:rdisecu='.$id);
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

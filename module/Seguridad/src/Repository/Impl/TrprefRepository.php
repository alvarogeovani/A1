<?php
 /**
 * Implementation of the interface   Trpref Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITrprefRepository
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Impl;
  use Seguridad\Core\BaseRepository;
  use Seguridad\Entity\Trpref;
  use Seguridad\Repository\ITrprefRepository;
  class TrprefRepository implements ITrprefRepository
  
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
		$ojbData = new Trpref($data);
	if ($ojbData->getRpfsesu() == null || $ojbData->getRpfsesu() == 0)
	{
	$arrayData = $ojbData->toArray();
	($arrayData['rpfsesu']);
	return $this->tableGateway->insert($arrayData);
	} else
	{
	if ($this->find($ojbData->getRpfsesu()))
	 {
	 $this->tableGateway->update($ojbData->toArray(), ['rpfsesu' => $ojbData->getRpfsesu()]);
	  return $ojbData->getRpfsesu();
	} else
	 {
	      throw new \RuntimeException('Trpref Id='.$ojbData->getRpfsesu().' does not exist');
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
		$this->tableGateway->delete(['rpfsesu' => (int) $id]);
	}

	/**
	*
	* Find an entry
	* Resets entry state if matching id found.
	* @param  int $id
	* @return Trpref
	*/
	public function find($id)
	{
	 $idt = (int) $id;
	$row = $this->tableGateway->find(['rpfsesu' => $idt]);
	if (!$row)
	 {
	 throw new \RuntimeException('The Trpref could not be found:rpfsesu='.$id);
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

<?php
 /**
 * Interface of the user   Tvsend Repository
 *
 * It is implemented to program the business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITvsendRepository
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository;
  interface ITvsendRepository
  
{

/**
* Save the current entry
 *
  * @return void
 */

public function save($data);

/**
 * Delete the current entry
 * 
 * @return void
 */

public function delete($id);

/**
 * Find an entry
 *
 * Resets entry state if matching id found.
 *
 * @param  int $id

 * @return Producto
  */

 public function find($id);

 /**
  * Fetch a list of entries that satisfy the parameters <params>
  *
  * @return array
  */

 public function fetchList($where = null, $order = null, $count = null, $offset = null);

 /**
  * Fetch all entries
  *
  * @return ResultSet
  */

 public function fetchAll();

  
}

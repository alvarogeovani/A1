<?php
 /**
 * Interface of the user   Ttchcc Repository
 *
 * It is implemented to program the business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       ITtchccRepository
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository;
  interface ITtchccRepository
  
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

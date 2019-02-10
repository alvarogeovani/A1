<?php
 /**
 * ResourceFactory  of the Ttdpdb table
 *
 * Factory from   TtdpdbRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtdpdbResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttdpdb
 */
 namespace Facturacion\V1\Rest\Ttdpdb;
 use Facturacion\Repository\ITtdpdbRepository;
 use Facturacion\Core\CrudResource;
 use ZF\ApiProblem\ApiProblem;
 class TtdpdbResource extends CrudResource
   {
  public function __construct(ITtdpdbRepository $service)
 {
 parent::__construct($service);
  }
  /**
  * Create a resource
  *
  * @param  mixed $data
  * @return ApiProblem|mixed
 */
  public function create($data)
  {
    return parent::create($data);
  }
  /**
    * Delete a resource
  *
   * @param  mixed $id
    * @return ApiProblem|mixed
    */
   public function delete($id)
   {
       return parent::delete($id);
  }
   /**
    * Delete a collection, or members of a collection
   *
 * @param  mixed $data
    * @return ApiProblem|mixed
   */
   public function deleteList($data)
  {
     return parent::deleteList($data);
   }
  /**
   * Fetch a resource
     *
   * @param  mixed $id
    * @return ApiProblem|mixed
   */
   public function fetch($id)
  {
        return parent::fetch($id);
  }
   /**
    * Fetch all or a subset of resources
    *
   * @param  array $params
     * @return ApiProblem|mixed
     */
   public function fetchAll($params = [])
   {
        return parent::fetchAll($params);
   }
   /**
    * Patch (partial in-place update) a resource
    *
    * @param  mixed 
    * @param  mixed $data
     * @return ApiProblem|mixed
     */
   public function patch($id, $data)
   {
       return parent::patch($id, $data);
  }
  /**
  * Patch (partial in-place update) a collection or members of a collection
    *
    * @param  mixed $data
   * @return ApiProblem|mixed
   */
   public function patchList($data)
  {
      return parent::patchList($data);
   }
  /**
    * Replace a collection or members of a collection
    *
    * @param  mixed $data
   * @return ApiProblem|mixed
   */
   public function replaceList($data)
    {
       return parent::replaceList($data);
    }
    /**
    * Update a resource
     *
     * @param  mixed $id
    * @param  mixed $data
    * @return ApiProblem|mixed
     */
   public function update($id, $data)
   {
      return parent::update($id, $data);
    }
   }

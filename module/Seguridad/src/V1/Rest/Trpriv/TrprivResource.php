<?php
 /**
 * ResourceFactory  of the Trpriv table
 *
 * Factory from   TrprivRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrprivResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trpriv
 */
 namespace Seguridad\V1\Rest\Trpriv;
 use Seguridad\Repository\ITrprivRepository;
 use Seguridad\Core\CrudResource;
 use ZF\ApiProblem\ApiProblem;
 class TrprivResource extends CrudResource
   {
  public function __construct(ITrprivRepository $service)
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

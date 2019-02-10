<?php
 /**
 * Model of the Tvfaco table
 *
 * It is used to convert the   Tvfaco entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvfaco
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvfaco
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Conversión Unidades de Medida
		*/
		protected $vfcsecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Unidad de Medida - Origen
		*/
		protected $vfcumor;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Unidad de Medida - Destino
		*/
		protected $vfcumde;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Factor de Conversión
		*/
		protected $vfcfact;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Operación a aplicar
		*/
		protected $vfcoper;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de creación
		*/
		protected $vfcusuc;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de creación
		*/
		protected $vfcfecc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de modificación
		*/
		protected $vfcusum;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de modificación
		*/
		protected $vfcfecm;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de tarea ejecutada
		*/
		protected $vfctask;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Bandera de borrado
		*/
		protected $vfcpara;

	/**
	* Form fields 
	* @var array 
	 */
	Private $fields = Array();

	/**
	* Schema name 
	* 
	 */
	const   SCHEMA ="inventario";

	/**
	* Name of the table: tvfaco
	* 
	 */
	const TABLE="tvfaco";

	/**
	*Primary key
*/
		 const PKEY = "vfcsecu";



	/**
	*Sequence
*/
		 const SEQUENCE = ""; 



	/**
	* Constructor
	* $options - It may be the form fields that must match the fields in the table
	* @parámetro  array|null $options
	* @return void
	 */
	public function __construct(array $options = null)
	{
		if (is_array($options)) 
		{
			$this->setOptions($options);
		}
	}

	/**
	* Overloading: allow property access
	* 
	* @param  string $name 
	* @param  mixed  $value 
	* @return void
	*/
	public function __set($name, $value)
	{
		$method = 'set' . $name;
		if (!method_exists($this, $method)) 
	{
		throw new \Exception('Class Entity: Tvfaco Invalid specified property: set'.$name);
	}
	$this->$method($value);
	}

	/**
	* Overloading: allow property access
	* 
	* @param  string $name 
	* @return mixed
	*/
	public function __get($name)
	{
	$method = 'get' . $name;
	if (!method_exists($this, $method))
	{
	  throw new \Exception('Clase Entity: Tvfaco. Invalid specified property: get'.$name);
	}
	return $this->$method();
	}

	/**
	* Fill the model with data
	* 
	* @param  array $options 
	* @retorna 
	*/
	 public function setOptions(array $options)
	{
	$methods = get_class_methods($this);
	foreach ($options as $key => $value) 
	{
	$key_original = $key;
	 if (strpos($key, '_') > 0) {
	 $aux = preg_replace_callback(" /[-_]([a-z]+)/ ", function($string) {
	return ucfirst($string[1]);
	 }, ucwords($key));
	  $key = $aux;
	}
	$method = 'set' . ucfirst($key);
	if (in_array($method, $methods)) 
	{
	$this->$method($value);
	$this->fields[$key_original] = $key;
	}
	}
	return $this;
	}
	 /**
	 * Retrieves the validated data from the model and returns it in an array
	 *  
	 * @return Array  
	 */
	public function toArray()
	 {
	 $claseArray = get_object_vars($this);
	   foreach ($this->fields as $key => $value) {
	 $this->fields[$key] = $claseArray[lcfirst($value)];
	}
	return $this->fields;
	 }

	/**
	* Set vfcsecu
	*
	*Estos datos se ingresan en la Opción: Conversión Unidades de Medida
	*
	* @parámetro Integer $vfcsecu
	* @return Vfcsecu
	*/
	public function setVfcsecu($vfcsecu)
	{
	  $this->vfcsecu = (Integer) $vfcsecu;
	    return $this;
	}

	/**
	* Get vfcsecu
	*
	* @return null|Integer
	*/
	public function getVfcsecu()
	{
		return $this->vfcsecu;
	}

	/**
	* Set vfcumor
	*
	*Unidad de Medida - Origen
	*
	* @parámetro String $vfcumor
	* @return Vfcumor
	*/
	public function setVfcumor($vfcumor)
	{
	  $this->vfcumor = (String) $vfcumor;
	    return $this;
	}

	/**
	* Get vfcumor
	*
	* @return null|String
	*/
	public function getVfcumor()
	{
		return $this->vfcumor;
	}

	/**
	* Set vfcumde
	*
	*Unidad de Medida - Destino
	*
	* @parámetro String $vfcumde
	* @return Vfcumde
	*/
	public function setVfcumde($vfcumde)
	{
	  $this->vfcumde = (String) $vfcumde;
	    return $this;
	}

	/**
	* Get vfcumde
	*
	* @return null|String
	*/
	public function getVfcumde()
	{
		return $this->vfcumde;
	}

	/**
	* Set vfcfact
	*
	*Factor de Conversión
	*
	* @parámetro Decimal $vfcfact
	* @return Vfcfact
	*/
	public function setVfcfact($vfcfact)
	{
	  $this->vfcfact = (Double) $vfcfact;
	    return $this;
	}

	/**
	* Get vfcfact
	*
	* @return null|Decimal
	*/
	public function getVfcfact()
	{
		return $this->vfcfact;
	}

	/**
	* Set vfcoper
	*
	*Operación a aplicar
	*
	* @parámetro Integer $vfcoper
	* @return Vfcoper
	*/
	public function setVfcoper($vfcoper)
	{
	  $this->vfcoper = (Integer) $vfcoper;
	    return $this;
	}

	/**
	* Get vfcoper
	*
	* @return null|Integer
	*/
	public function getVfcoper()
	{
		return $this->vfcoper;
	}

	/**
	* Set vfcusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vfcusuc
	* @return Vfcusuc
	*/
	public function setVfcusuc($vfcusuc)
	{
	  $this->vfcusuc = (String) $vfcusuc;
	    return $this;
	}

	/**
	* Get vfcusuc
	*
	* @return null|String
	*/
	public function getVfcusuc()
	{
		return $this->vfcusuc;
	}

	/**
	* Set vfcfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vfcfecc
	* @return Vfcfecc
	*/
	public function setVfcfecc($vfcfecc)
	{
	  $this->vfcfecc = (String) $vfcfecc;
	    return $this;
	}

	/**
	* Get vfcfecc
	*
	* @return null|Date
	*/
	public function getVfcfecc()
	{
		return $this->vfcfecc;
	}

	/**
	* Set vfcusum
	*
	*Usuario de modificación
	*
	* @parámetro String $vfcusum
	* @return Vfcusum
	*/
	public function setVfcusum($vfcusum)
	{
	  $this->vfcusum = (String) $vfcusum;
	    return $this;
	}

	/**
	* Get vfcusum
	*
	* @return null|String
	*/
	public function getVfcusum()
	{
		return $this->vfcusum;
	}

	/**
	* Set vfcfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vfcfecm
	* @return Vfcfecm
	*/
	public function setVfcfecm($vfcfecm)
	{
	  $this->vfcfecm = (String) $vfcfecm;
	    return $this;
	}

	/**
	* Get vfcfecm
	*
	* @return null|Date
	*/
	public function getVfcfecm()
	{
		return $this->vfcfecm;
	}

	/**
	* Set vfctask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vfctask
	* @return Vfctask
	*/
	public function setVfctask($vfctask)
	{
	  $this->vfctask = (String) $vfctask;
	    return $this;
	}

	/**
	* Get vfctask
	*
	* @return null|String
	*/
	public function getVfctask()
	{
		return $this->vfctask;
	}

	/**
	* Set vfcpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $vfcpara
	* @return Vfcpara
	*/
	public function setVfcpara($vfcpara)
	{
	  $this->vfcpara = (Integer) $vfcpara;
	    return $this;
	}

	/**
	* Get vfcpara
	*
	* @return null|Integer
	*/
	public function getVfcpara()
	{
		return $this->vfcpara;
	}

	/**
	* Used to recover the data to the form
	* @return array an associative
	*/
	public function getArrayCopy()
	{
		return get_object_vars($this);
	}

	/**
	* Actualiza un registro actual
	* @param array $datos
	* @param int $id
	* @return int
	*/
	public function exchangeArray($data)
	{
		 if (is_array($data))
		 {
		 $this->setOptions($data);
		 }
	}

}

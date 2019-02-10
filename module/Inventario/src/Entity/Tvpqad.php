<?php
 /**
 * Model of the Tvpqad table
 *
 * It is used to convert the   Tvpqad entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvpqad
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvpqad
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Paquete de Artículos
		*/
		protected $vpdsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Artículos
		*/
		protected $varsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Paquetes de Artículos
		*/
		protected $vphsecu;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Porcentaje de Descuento
		*/
		protected $vpdpode;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad de Artículos
		*/
		protected $vpdcant;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Orden de los Items
		*/
		protected $vpdorde;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Comentario
		*/
		protected $vpdcome;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vpdusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vpdfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vpdusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vpdfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vpdtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* 
		*/
		protected $vpdpara;

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
	* Name of the table: tvpqad
	* 
	 */
	const TABLE="tvpqad";

	/**
	*Primary key
*/
		 const PKEY = "vpdsecu";



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
		throw new \Exception('Class Entity: Tvpqad Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvpqad. Invalid specified property: get'.$name);
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
	* Set vpdsecu
	*
	*Estos datos se ingresan en la Opción: Paquete de Artículos
	*
	* @parámetro Integer $vpdsecu
	* @return Vpdsecu
	*/
	public function setVpdsecu($vpdsecu)
	{
	  $this->vpdsecu = (Integer) $vpdsecu;
	    return $this;
	}

	/**
	* Get vpdsecu
	*
	* @return null|Integer
	*/
	public function getVpdsecu()
	{
		return $this->vpdsecu;
	}

	/**
	* Set varsecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Artículos
	*
	* @parámetro Integer $varsecu
	* @return Varsecu
	*/
	public function setVarsecu($varsecu)
	{
	  $this->varsecu = (Integer) $varsecu;
	    return $this;
	}

	/**
	* Get varsecu
	*
	* @return null|Integer
	*/
	public function getVarsecu()
	{
		return $this->varsecu;
	}

	/**
	* Set vphsecu
	*
	*Estos datos se ingresan en la Opción: Paquetes de Artículos
	*
	* @parámetro Integer $vphsecu
	* @return Vphsecu
	*/
	public function setVphsecu($vphsecu)
	{
	  $this->vphsecu = (Integer) $vphsecu;
	    return $this;
	}

	/**
	* Get vphsecu
	*
	* @return null|Integer
	*/
	public function getVphsecu()
	{
		return $this->vphsecu;
	}

	/**
	* Set vpdpode
	*
	*Porcentaje de Descuento
	*
	* @parámetro Decimal $vpdpode
	* @return Vpdpode
	*/
	public function setVpdpode($vpdpode)
	{
	  $this->vpdpode = (Double) $vpdpode;
	    return $this;
	}

	/**
	* Get vpdpode
	*
	* @return null|Decimal
	*/
	public function getVpdpode()
	{
		return $this->vpdpode;
	}

	/**
	* Set vpdcant
	*
	*Cantidad de Artículos
	*
	* @parámetro Decimal $vpdcant
	* @return Vpdcant
	*/
	public function setVpdcant($vpdcant)
	{
	  $this->vpdcant = (Double) $vpdcant;
	    return $this;
	}

	/**
	* Get vpdcant
	*
	* @return null|Decimal
	*/
	public function getVpdcant()
	{
		return $this->vpdcant;
	}

	/**
	* Set vpdorde
	*
	*Orden de los Items
	*
	* @parámetro Integer $vpdorde
	* @return Vpdorde
	*/
	public function setVpdorde($vpdorde)
	{
	  $this->vpdorde = (Integer) $vpdorde;
	    return $this;
	}

	/**
	* Get vpdorde
	*
	* @return null|Integer
	*/
	public function getVpdorde()
	{
		return $this->vpdorde;
	}

	/**
	* Set vpdcome
	*
	*Comentario
	*
	* @parámetro String $vpdcome
	* @return Vpdcome
	*/
	public function setVpdcome($vpdcome)
	{
	  $this->vpdcome = (String) $vpdcome;
	    return $this;
	}

	/**
	* Get vpdcome
	*
	* @return null|String
	*/
	public function getVpdcome()
	{
		return $this->vpdcome;
	}

	/**
	* Set vpdusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vpdusuc
	* @return Vpdusuc
	*/
	public function setVpdusuc($vpdusuc)
	{
	  $this->vpdusuc = (String) $vpdusuc;
	    return $this;
	}

	/**
	* Get vpdusuc
	*
	* @return null|String
	*/
	public function getVpdusuc()
	{
		return $this->vpdusuc;
	}

	/**
	* Set vpdfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vpdfecc
	* @return Vpdfecc
	*/
	public function setVpdfecc($vpdfecc)
	{
	  $this->vpdfecc = (String) $vpdfecc;
	    return $this;
	}

	/**
	* Get vpdfecc
	*
	* @return null|Date
	*/
	public function getVpdfecc()
	{
		return $this->vpdfecc;
	}

	/**
	* Set vpdusum
	*
	*Usuario de modificación
	*
	* @parámetro String $vpdusum
	* @return Vpdusum
	*/
	public function setVpdusum($vpdusum)
	{
	  $this->vpdusum = (String) $vpdusum;
	    return $this;
	}

	/**
	* Get vpdusum
	*
	* @return null|String
	*/
	public function getVpdusum()
	{
		return $this->vpdusum;
	}

	/**
	* Set vpdfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vpdfecm
	* @return Vpdfecm
	*/
	public function setVpdfecm($vpdfecm)
	{
	  $this->vpdfecm = (String) $vpdfecm;
	    return $this;
	}

	/**
	* Get vpdfecm
	*
	* @return null|Date
	*/
	public function getVpdfecm()
	{
		return $this->vpdfecm;
	}

	/**
	* Set vpdtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vpdtask
	* @return Vpdtask
	*/
	public function setVpdtask($vpdtask)
	{
	  $this->vpdtask = (String) $vpdtask;
	    return $this;
	}

	/**
	* Get vpdtask
	*
	* @return null|String
	*/
	public function getVpdtask()
	{
		return $this->vpdtask;
	}

	/**
	* Set vpdpara
	*
	*
	*
	* @parámetro Integer $vpdpara
	* @return Vpdpara
	*/
	public function setVpdpara($vpdpara)
	{
	  $this->vpdpara = (Integer) $vpdpara;
	    return $this;
	}

	/**
	* Get vpdpara
	*
	* @return null|Integer
	*/
	public function getVpdpara()
	{
		return $this->vpdpara;
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

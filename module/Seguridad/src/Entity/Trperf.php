<?php
 /**
 * Model of the Trperf table
 *
 * It is used to convert the   Trperf entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trperf
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trperf
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Perfiles de Usuarios
		*/
		protected $rpesecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código de Perfil
		*/
		protected $rpecodi;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nombre del Perfil
		*/
		protected $rpenomb;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Parámetros del Perfil
		*/
		protected $rpeparm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rpeusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rpefecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rpeusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rpefecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejcutada
		*/
		protected $rpetask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rpepara;

	/**
	* Form fields 
	* @var array 
	 */
	Private $fields = Array();

	/**
	* Schema name 
	* 
	 */
	const   SCHEMA ="seguridad";

	/**
	* Name of the table: trperf
	* 
	 */
	const TABLE="trperf";

	/**
	*Primary key
*/
		 const PKEY = "rpesecu";



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
		throw new \Exception('Class Entity: Trperf Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trperf. Invalid specified property: get'.$name);
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
	* Set rpesecu
	*
	*Estos datos se ingresan en la Opción: Perfiles de Usuarios
	*
	* @parámetro Integer $rpesecu
	* @return Rpesecu
	*/
	public function setRpesecu($rpesecu)
	{
	  $this->rpesecu = (Integer) $rpesecu;
	    return $this;
	}

	/**
	* Get rpesecu
	*
	* @return null|Integer
	*/
	public function getRpesecu()
	{
		return $this->rpesecu;
	}

	/**
	* Set rpecodi
	*
	*Código de Perfil
	*
	* @parámetro String $rpecodi
	* @return Rpecodi
	*/
	public function setRpecodi($rpecodi)
	{
	  $this->rpecodi = (String) $rpecodi;
	    return $this;
	}

	/**
	* Get rpecodi
	*
	* @return null|String
	*/
	public function getRpecodi()
	{
		return $this->rpecodi;
	}

	/**
	* Set rpenomb
	*
	*Nombre del Perfil
	*
	* @parámetro String $rpenomb
	* @return Rpenomb
	*/
	public function setRpenomb($rpenomb)
	{
	  $this->rpenomb = (String) $rpenomb;
	    return $this;
	}

	/**
	* Get rpenomb
	*
	* @return null|String
	*/
	public function getRpenomb()
	{
		return $this->rpenomb;
	}

	/**
	* Set rpeparm
	*
	*Parámetros del Perfil
	*
	* @parámetro String $rpeparm
	* @return Rpeparm
	*/
	public function setRpeparm($rpeparm)
	{
	  $this->rpeparm = (String) $rpeparm;
	    return $this;
	}

	/**
	* Get rpeparm
	*
	* @return null|String
	*/
	public function getRpeparm()
	{
		return $this->rpeparm;
	}

	/**
	* Set rpeusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rpeusuc
	* @return Rpeusuc
	*/
	public function setRpeusuc($rpeusuc)
	{
	  $this->rpeusuc = (String) $rpeusuc;
	    return $this;
	}

	/**
	* Get rpeusuc
	*
	* @return null|String
	*/
	public function getRpeusuc()
	{
		return $this->rpeusuc;
	}

	/**
	* Set rpefecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rpefecc
	* @return Rpefecc
	*/
	public function setRpefecc($rpefecc)
	{
	  $this->rpefecc = (String) $rpefecc;
	    return $this;
	}

	/**
	* Get rpefecc
	*
	* @return null|Date
	*/
	public function getRpefecc()
	{
		return $this->rpefecc;
	}

	/**
	* Set rpeusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rpeusum
	* @return Rpeusum
	*/
	public function setRpeusum($rpeusum)
	{
	  $this->rpeusum = (String) $rpeusum;
	    return $this;
	}

	/**
	* Get rpeusum
	*
	* @return null|String
	*/
	public function getRpeusum()
	{
		return $this->rpeusum;
	}

	/**
	* Set rpefecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rpefecm
	* @return Rpefecm
	*/
	public function setRpefecm($rpefecm)
	{
	  $this->rpefecm = (String) $rpefecm;
	    return $this;
	}

	/**
	* Get rpefecm
	*
	* @return null|Date
	*/
	public function getRpefecm()
	{
		return $this->rpefecm;
	}

	/**
	* Set rpetask
	*
	*Tipo de tarea ejcutada
	*
	* @parámetro String $rpetask
	* @return Rpetask
	*/
	public function setRpetask($rpetask)
	{
	  $this->rpetask = (String) $rpetask;
	    return $this;
	}

	/**
	* Get rpetask
	*
	* @return null|String
	*/
	public function getRpetask()
	{
		return $this->rpetask;
	}

	/**
	* Set rpepara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rpepara
	* @return Rpepara
	*/
	public function setRpepara($rpepara)
	{
	  $this->rpepara = (Integer) $rpepara;
	    return $this;
	}

	/**
	* Get rpepara
	*
	* @return null|Integer
	*/
	public function getRpepara()
	{
		return $this->rpepara;
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

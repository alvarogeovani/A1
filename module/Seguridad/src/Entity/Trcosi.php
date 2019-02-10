<?php
 /**
 * Model of the Trcosi table
 *
 * It is used to convert the   Trcosi entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trcosi
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trcosi
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Constantes del Sistema
		*/
		protected $rcosecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Módulos
		*/
		protected $rmosecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código de la Constante
		*/
		protected $rcocodi;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Valor Interno para Programación
		*/
		protected $rcovalo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Valor a desplegar en grilla
		*/
		protected $rcovagr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Configuración adicional para la creación de Parámetro
		*/
		protected $rcoconf;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Descripción de la Constante
		*/
		protected $rcodesc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Constante S=String,N=Numérico y D=DateTime
		*/
		protected $rcotipo;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rcousuc;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rcofecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rcousum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rcofecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rcotask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rcopara;

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
	* Name of the table: trcosi
	* 
	 */
	const TABLE="trcosi";

	/**
	*Primary key
*/
		 const PKEY = "rcosecu";



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
		throw new \Exception('Class Entity: Trcosi Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trcosi. Invalid specified property: get'.$name);
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
	* Set rcosecu
	*
	*Estos datos se ingresan en la Opción: Constantes del Sistema
	*
	* @parámetro Integer $rcosecu
	* @return Rcosecu
	*/
	public function setRcosecu($rcosecu)
	{
	  $this->rcosecu = (Integer) $rcosecu;
	    return $this;
	}

	/**
	* Get rcosecu
	*
	* @return null|Integer
	*/
	public function getRcosecu()
	{
		return $this->rcosecu;
	}

	/**
	* Set rmosecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Módulos
	*
	* @parámetro Integer $rmosecu
	* @return Rmosecu
	*/
	public function setRmosecu($rmosecu)
	{
	  $this->rmosecu = (Integer) $rmosecu;
	    return $this;
	}

	/**
	* Get rmosecu
	*
	* @return null|Integer
	*/
	public function getRmosecu()
	{
		return $this->rmosecu;
	}

	/**
	* Set rcocodi
	*
	*Código de la Constante
	*
	* @parámetro String $rcocodi
	* @return Rcocodi
	*/
	public function setRcocodi($rcocodi)
	{
	  $this->rcocodi = (String) $rcocodi;
	    return $this;
	}

	/**
	* Get rcocodi
	*
	* @return null|String
	*/
	public function getRcocodi()
	{
		return $this->rcocodi;
	}

	/**
	* Set rcovalo
	*
	*Valor Interno para Programación
	*
	* @parámetro String $rcovalo
	* @return Rcovalo
	*/
	public function setRcovalo($rcovalo)
	{
	  $this->rcovalo = (String) $rcovalo;
	    return $this;
	}

	/**
	* Get rcovalo
	*
	* @return null|String
	*/
	public function getRcovalo()
	{
		return $this->rcovalo;
	}

	/**
	* Set rcovagr
	*
	*Valor a desplegar en grilla
	*
	* @parámetro String $rcovagr
	* @return Rcovagr
	*/
	public function setRcovagr($rcovagr)
	{
	  $this->rcovagr = (String) $rcovagr;
	    return $this;
	}

	/**
	* Get rcovagr
	*
	* @return null|String
	*/
	public function getRcovagr()
	{
		return $this->rcovagr;
	}

	/**
	* Set rcoconf
	*
	*Configuración adicional para la creación de Parámetro
	*
	* @parámetro String $rcoconf
	* @return Rcoconf
	*/
	public function setRcoconf($rcoconf)
	{
	  $this->rcoconf = (String) $rcoconf;
	    return $this;
	}

	/**
	* Get rcoconf
	*
	* @return null|String
	*/
	public function getRcoconf()
	{
		return $this->rcoconf;
	}

	/**
	* Set rcodesc
	*
	*Descripción de la Constante
	*
	* @parámetro String $rcodesc
	* @return Rcodesc
	*/
	public function setRcodesc($rcodesc)
	{
	  $this->rcodesc = (String) $rcodesc;
	    return $this;
	}

	/**
	* Get rcodesc
	*
	* @return null|String
	*/
	public function getRcodesc()
	{
		return $this->rcodesc;
	}

	/**
	* Set rcotipo
	*
	*Tipo de Constante S=String,N=Numérico y D=DateTime
	*
	* @parámetro Integer $rcotipo
	* @return Rcotipo
	*/
	public function setRcotipo($rcotipo)
	{
	  $this->rcotipo = (Integer) $rcotipo;
	    return $this;
	}

	/**
	* Get rcotipo
	*
	* @return null|Integer
	*/
	public function getRcotipo()
	{
		return $this->rcotipo;
	}

	/**
	* Set rcousuc
	*
	*Usuario de creación
	*
	* @parámetro String $rcousuc
	* @return Rcousuc
	*/
	public function setRcousuc($rcousuc)
	{
	  $this->rcousuc = (String) $rcousuc;
	    return $this;
	}

	/**
	* Get rcousuc
	*
	* @return null|String
	*/
	public function getRcousuc()
	{
		return $this->rcousuc;
	}

	/**
	* Set rcofecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rcofecc
	* @return Rcofecc
	*/
	public function setRcofecc($rcofecc)
	{
	  $this->rcofecc = (String) $rcofecc;
	    return $this;
	}

	/**
	* Get rcofecc
	*
	* @return null|Date
	*/
	public function getRcofecc()
	{
		return $this->rcofecc;
	}

	/**
	* Set rcousum
	*
	*Usuario de modificación
	*
	* @parámetro String $rcousum
	* @return Rcousum
	*/
	public function setRcousum($rcousum)
	{
	  $this->rcousum = (String) $rcousum;
	    return $this;
	}

	/**
	* Get rcousum
	*
	* @return null|String
	*/
	public function getRcousum()
	{
		return $this->rcousum;
	}

	/**
	* Set rcofecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rcofecm
	* @return Rcofecm
	*/
	public function setRcofecm($rcofecm)
	{
	  $this->rcofecm = (String) $rcofecm;
	    return $this;
	}

	/**
	* Get rcofecm
	*
	* @return null|Date
	*/
	public function getRcofecm()
	{
		return $this->rcofecm;
	}

	/**
	* Set rcotask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rcotask
	* @return Rcotask
	*/
	public function setRcotask($rcotask)
	{
	  $this->rcotask = (String) $rcotask;
	    return $this;
	}

	/**
	* Get rcotask
	*
	* @return null|String
	*/
	public function getRcotask()
	{
		return $this->rcotask;
	}

	/**
	* Set rcopara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rcopara
	* @return Rcopara
	*/
	public function setRcopara($rcopara)
	{
	  $this->rcopara = (Integer) $rcopara;
	    return $this;
	}

	/**
	* Get rcopara
	*
	* @return null|Integer
	*/
	public function getRcopara()
	{
		return $this->rcopara;
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

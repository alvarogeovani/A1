<?php
 /**
 * Model of the Trdife table
 *
 * It is used to convert the   Trdife entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trdife
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trdife
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Días Laborables
		*/
		protected $rcosec1;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Ejercicio Económico
		*/
		protected $rcoanof;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Día Festivo
		*/
		protected $rcodife;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Ordinal
		*/
		protected $rcoordi;
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
		* Situación del Día Festivo
		*/
		protected $rcositu;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rcousuc;
		/**
		* @var Date
		* Optional field
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
	* Name of the table: trdife
	* 
	 */
	const TABLE="trdife";

	/**
	*Primary key
*/
		 const PKEY = "rcosec1";



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
		throw new \Exception('Class Entity: Trdife Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trdife. Invalid specified property: get'.$name);
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
	* Set rcosec1
	*
	*Estos datos se ingresan en la Opción: Días Laborables
	*
	* @parámetro Integer $rcosec1
	* @return Rcosec1
	*/
	public function setRcosec1($rcosec1)
	{
	  $this->rcosec1 = (Integer) $rcosec1;
	    return $this;
	}

	/**
	* Get rcosec1
	*
	* @return null|Integer
	*/
	public function getRcosec1()
	{
		return $this->rcosec1;
	}

	/**
	* Set rcoanof
	*
	*Ejercicio Económico
	*
	* @parámetro Decimal $rcoanof
	* @return Rcoanof
	*/
	public function setRcoanof($rcoanof)
	{
	  $this->rcoanof = (Double) $rcoanof;
	    return $this;
	}

	/**
	* Get rcoanof
	*
	* @return null|Decimal
	*/
	public function getRcoanof()
	{
		return $this->rcoanof;
	}

	/**
	* Set rcodife
	*
	*Día Festivo
	*
	* @parámetro Date $rcodife
	* @return Rcodife
	*/
	public function setRcodife($rcodife)
	{
	  $this->rcodife = (String) $rcodife;
	    return $this;
	}

	/**
	* Get rcodife
	*
	* @return null|Date
	*/
	public function getRcodife()
	{
		return $this->rcodife;
	}

	/**
	* Set rcoordi
	*
	*Ordinal
	*
	* @parámetro Integer $rcoordi
	* @return Rcoordi
	*/
	public function setRcoordi($rcoordi)
	{
	  $this->rcoordi = (Integer) $rcoordi;
	    return $this;
	}

	/**
	* Get rcoordi
	*
	* @return null|Integer
	*/
	public function getRcoordi()
	{
		return $this->rcoordi;
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
	* Set rcositu
	*
	*Situación del Día Festivo
	*
	* @parámetro Integer $rcositu
	* @return Rcositu
	*/
	public function setRcositu($rcositu)
	{
	  $this->rcositu = (Integer) $rcositu;
	    return $this;
	}

	/**
	* Get rcositu
	*
	* @return null|Integer
	*/
	public function getRcositu()
	{
		return $this->rcositu;
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

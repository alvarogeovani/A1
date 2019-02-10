<?php
 /**
 * Model of the Tvsart table
 *
 * It is used to convert the   Tvsart entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvsart
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvsart
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TVSART
		*/
		protected $vsasec1;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Artículos
		*/
		protected $varsecu;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Actual
		*/
		protected $vsaract;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Stock Comprometido
		*/
		protected $vsarcom;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Stock en Transito
		*/
		protected $vsartra;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Temporal de Saldos Actual y Comprometido
		*/
		protected $vsartem;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Actual Moneda Nacional
		*/
		protected $vconact;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Actual Moneda Extranjera
		*/
		protected $vcoeact;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vsausuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vsafecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vsausum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vsafecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vsatask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $vsapara;

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
	* Name of the table: tvsart
	* 
	 */
	const TABLE="tvsart";

	/**
	*Primary key
*/
		 const PKEY = "vsasec1";



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
		throw new \Exception('Class Entity: Tvsart Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvsart. Invalid specified property: get'.$name);
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
	* Set vsasec1
	*
	*Clave Primaria de la Base de Datos: TVSART
	*
	* @parámetro Integer $vsasec1
	* @return Vsasec1
	*/
	public function setVsasec1($vsasec1)
	{
	  $this->vsasec1 = (Integer) $vsasec1;
	    return $this;
	}

	/**
	* Get vsasec1
	*
	* @return null|Integer
	*/
	public function getVsasec1()
	{
		return $this->vsasec1;
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
	* Set vsaract
	*
	*Saldo Actual
	*
	* @parámetro Decimal $vsaract
	* @return Vsaract
	*/
	public function setVsaract($vsaract)
	{
	  $this->vsaract = (Double) $vsaract;
	    return $this;
	}

	/**
	* Get vsaract
	*
	* @return null|Decimal
	*/
	public function getVsaract()
	{
		return $this->vsaract;
	}

	/**
	* Set vsarcom
	*
	*Stock Comprometido
	*
	* @parámetro Decimal $vsarcom
	* @return Vsarcom
	*/
	public function setVsarcom($vsarcom)
	{
	  $this->vsarcom = (Double) $vsarcom;
	    return $this;
	}

	/**
	* Get vsarcom
	*
	* @return null|Decimal
	*/
	public function getVsarcom()
	{
		return $this->vsarcom;
	}

	/**
	* Set vsartra
	*
	*Stock en Transito
	*
	* @parámetro Decimal $vsartra
	* @return Vsartra
	*/
	public function setVsartra($vsartra)
	{
	  $this->vsartra = (Double) $vsartra;
	    return $this;
	}

	/**
	* Get vsartra
	*
	* @return null|Decimal
	*/
	public function getVsartra()
	{
		return $this->vsartra;
	}

	/**
	* Set vsartem
	*
	*Temporal de Saldos Actual y Comprometido
	*
	* @parámetro Decimal $vsartem
	* @return Vsartem
	*/
	public function setVsartem($vsartem)
	{
	  $this->vsartem = (Double) $vsartem;
	    return $this;
	}

	/**
	* Get vsartem
	*
	* @return null|Decimal
	*/
	public function getVsartem()
	{
		return $this->vsartem;
	}

	/**
	* Set vconact
	*
	*Costo Actual Moneda Nacional
	*
	* @parámetro Decimal $vconact
	* @return Vconact
	*/
	public function setVconact($vconact)
	{
	  $this->vconact = (Double) $vconact;
	    return $this;
	}

	/**
	* Get vconact
	*
	* @return null|Decimal
	*/
	public function getVconact()
	{
		return $this->vconact;
	}

	/**
	* Set vcoeact
	*
	*Costo Actual Moneda Extranjera
	*
	* @parámetro Decimal $vcoeact
	* @return Vcoeact
	*/
	public function setVcoeact($vcoeact)
	{
	  $this->vcoeact = (Double) $vcoeact;
	    return $this;
	}

	/**
	* Get vcoeact
	*
	* @return null|Decimal
	*/
	public function getVcoeact()
	{
		return $this->vcoeact;
	}

	/**
	* Set vsausuc
	*
	*Usuario de creación
	*
	* @parámetro String $vsausuc
	* @return Vsausuc
	*/
	public function setVsausuc($vsausuc)
	{
	  $this->vsausuc = (String) $vsausuc;
	    return $this;
	}

	/**
	* Get vsausuc
	*
	* @return null|String
	*/
	public function getVsausuc()
	{
		return $this->vsausuc;
	}

	/**
	* Set vsafecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vsafecc
	* @return Vsafecc
	*/
	public function setVsafecc($vsafecc)
	{
	  $this->vsafecc = (String) $vsafecc;
	    return $this;
	}

	/**
	* Get vsafecc
	*
	* @return null|Date
	*/
	public function getVsafecc()
	{
		return $this->vsafecc;
	}

	/**
	* Set vsausum
	*
	*Usuario de modificación
	*
	* @parámetro String $vsausum
	* @return Vsausum
	*/
	public function setVsausum($vsausum)
	{
	  $this->vsausum = (String) $vsausum;
	    return $this;
	}

	/**
	* Get vsausum
	*
	* @return null|String
	*/
	public function getVsausum()
	{
		return $this->vsausum;
	}

	/**
	* Set vsafecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vsafecm
	* @return Vsafecm
	*/
	public function setVsafecm($vsafecm)
	{
	  $this->vsafecm = (String) $vsafecm;
	    return $this;
	}

	/**
	* Get vsafecm
	*
	* @return null|Date
	*/
	public function getVsafecm()
	{
		return $this->vsafecm;
	}

	/**
	* Set vsatask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vsatask
	* @return Vsatask
	*/
	public function setVsatask($vsatask)
	{
	  $this->vsatask = (String) $vsatask;
	    return $this;
	}

	/**
	* Get vsatask
	*
	* @return null|String
	*/
	public function getVsatask()
	{
		return $this->vsatask;
	}

	/**
	* Set vsapara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $vsapara
	* @return Vsapara
	*/
	public function setVsapara($vsapara)
	{
	  $this->vsapara = (Integer) $vsapara;
	    return $this;
	}

	/**
	* Get vsapara
	*
	* @return null|Integer
	*/
	public function getVsapara()
	{
		return $this->vsapara;
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

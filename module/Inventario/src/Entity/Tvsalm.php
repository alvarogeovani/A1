<?php
 /**
 * Model of the Tvsalm table
 *
 * It is used to convert the   Tvsalm entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvsalm
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvsalm
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TVSALM
		*/
		protected $vsasecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Bodegas
		*/
		protected $vbosecu;
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
		protected $vsalact;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Stock comprometido
		*/
		protected $vsalcom;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Stock en Tránsito
		*/
		protected $vsaltra;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Temporal de Saldos Actual y Comprometido
		*/
		protected $vsatemp;
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
	* Name of the table: tvsalm
	* 
	 */
	const TABLE="tvsalm";

	/**
	*Primary key
*/
		 const PKEY = "vsasecu";



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
		throw new \Exception('Class Entity: Tvsalm Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvsalm. Invalid specified property: get'.$name);
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
	* Set vsasecu
	*
	*Clave Primaria de la Base de Datos: TVSALM
	*
	* @parámetro Integer $vsasecu
	* @return Vsasecu
	*/
	public function setVsasecu($vsasecu)
	{
	  $this->vsasecu = (Integer) $vsasecu;
	    return $this;
	}

	/**
	* Get vsasecu
	*
	* @return null|Integer
	*/
	public function getVsasecu()
	{
		return $this->vsasecu;
	}

	/**
	* Set vbosecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Bodegas
	*
	* @parámetro Integer $vbosecu
	* @return Vbosecu
	*/
	public function setVbosecu($vbosecu)
	{
	  $this->vbosecu = (Integer) $vbosecu;
	    return $this;
	}

	/**
	* Get vbosecu
	*
	* @return null|Integer
	*/
	public function getVbosecu()
	{
		return $this->vbosecu;
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
	* Set vsalact
	*
	*Saldo Actual
	*
	* @parámetro Decimal $vsalact
	* @return Vsalact
	*/
	public function setVsalact($vsalact)
	{
	  $this->vsalact = (Double) $vsalact;
	    return $this;
	}

	/**
	* Get vsalact
	*
	* @return null|Decimal
	*/
	public function getVsalact()
	{
		return $this->vsalact;
	}

	/**
	* Set vsalcom
	*
	*Stock comprometido
	*
	* @parámetro Decimal $vsalcom
	* @return Vsalcom
	*/
	public function setVsalcom($vsalcom)
	{
	  $this->vsalcom = (Double) $vsalcom;
	    return $this;
	}

	/**
	* Get vsalcom
	*
	* @return null|Decimal
	*/
	public function getVsalcom()
	{
		return $this->vsalcom;
	}

	/**
	* Set vsaltra
	*
	*Stock en Tránsito
	*
	* @parámetro Decimal $vsaltra
	* @return Vsaltra
	*/
	public function setVsaltra($vsaltra)
	{
	  $this->vsaltra = (Double) $vsaltra;
	    return $this;
	}

	/**
	* Get vsaltra
	*
	* @return null|Decimal
	*/
	public function getVsaltra()
	{
		return $this->vsaltra;
	}

	/**
	* Set vsatemp
	*
	*Temporal de Saldos Actual y Comprometido
	*
	* @parámetro Decimal $vsatemp
	* @return Vsatemp
	*/
	public function setVsatemp($vsatemp)
	{
	  $this->vsatemp = (Double) $vsatemp;
	    return $this;
	}

	/**
	* Get vsatemp
	*
	* @return null|Decimal
	*/
	public function getVsatemp()
	{
		return $this->vsatemp;
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

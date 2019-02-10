<?php
 /**
 * Model of the Ttdscd table
 *
 * It is used to convert the   Ttdscd entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttdscd
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttdscd
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TTDSCD
		*/
		protected $ttdsec1;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Familia de Artículos
		*/
		protected $vartfam;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Distribuidor
		*/
		protected $tditipd;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Porcentaje de Descuento
		*/
		protected $ttdspod;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de creación
		*/
		protected $ttdusuc;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de creación
		*/
		protected $ttdfecc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de modificación
		*/
		protected $ttdusum;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de modificación
		*/
		protected $ttdfecm;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de tarea ejecutada
		*/
		protected $ttdtask;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Bandera de borrado
		*/
		protected $ttdpara;

	/**
	* Form fields 
	* @var array 
	 */
	Private $fields = Array();

	/**
	* Schema name 
	* 
	 */
	const   SCHEMA ="facturacion";

	/**
	* Name of the table: ttdscd
	* 
	 */
	const TABLE="ttdscd";

	/**
	*Primary key
*/
		 const PKEY = "ttdsec1";



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
		throw new \Exception('Class Entity: Ttdscd Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttdscd. Invalid specified property: get'.$name);
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
	* Set ttdsec1
	*
	*Clave Primaria de la Base de Datos: TTDSCD
	*
	* @parámetro Integer $ttdsec1
	* @return Ttdsec1
	*/
	public function setTtdsec1($ttdsec1)
	{
	  $this->ttdsec1 = (Integer) $ttdsec1;
	    return $this;
	}

	/**
	* Get ttdsec1
	*
	* @return null|Integer
	*/
	public function getTtdsec1()
	{
		return $this->ttdsec1;
	}

	/**
	* Set vartfam
	*
	*Código Familia de Artículos
	*
	* @parámetro Integer $vartfam
	* @return Vartfam
	*/
	public function setVartfam($vartfam)
	{
	  $this->vartfam = (Integer) $vartfam;
	    return $this;
	}

	/**
	* Get vartfam
	*
	* @return null|Integer
	*/
	public function getVartfam()
	{
		return $this->vartfam;
	}

	/**
	* Set tditipd
	*
	*Tipo de Distribuidor
	*
	* @parámetro Integer $tditipd
	* @return Tditipd
	*/
	public function setTditipd($tditipd)
	{
	  $this->tditipd = (Integer) $tditipd;
	    return $this;
	}

	/**
	* Get tditipd
	*
	* @return null|Integer
	*/
	public function getTditipd()
	{
		return $this->tditipd;
	}

	/**
	* Set ttdspod
	*
	*Porcentaje de Descuento
	*
	* @parámetro Decimal $ttdspod
	* @return Ttdspod
	*/
	public function setTtdspod($ttdspod)
	{
	  $this->ttdspod = (Double) $ttdspod;
	    return $this;
	}

	/**
	* Get ttdspod
	*
	* @return null|Decimal
	*/
	public function getTtdspod()
	{
		return $this->ttdspod;
	}

	/**
	* Set ttdusuc
	*
	*Usuario de creación
	*
	* @parámetro String $ttdusuc
	* @return Ttdusuc
	*/
	public function setTtdusuc($ttdusuc)
	{
	  $this->ttdusuc = (String) $ttdusuc;
	    return $this;
	}

	/**
	* Get ttdusuc
	*
	* @return null|String
	*/
	public function getTtdusuc()
	{
		return $this->ttdusuc;
	}

	/**
	* Set ttdfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $ttdfecc
	* @return Ttdfecc
	*/
	public function setTtdfecc($ttdfecc)
	{
	  $this->ttdfecc = (String) $ttdfecc;
	    return $this;
	}

	/**
	* Get ttdfecc
	*
	* @return null|Date
	*/
	public function getTtdfecc()
	{
		return $this->ttdfecc;
	}

	/**
	* Set ttdusum
	*
	*Usuario de modificación
	*
	* @parámetro String $ttdusum
	* @return Ttdusum
	*/
	public function setTtdusum($ttdusum)
	{
	  $this->ttdusum = (String) $ttdusum;
	    return $this;
	}

	/**
	* Get ttdusum
	*
	* @return null|String
	*/
	public function getTtdusum()
	{
		return $this->ttdusum;
	}

	/**
	* Set ttdfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $ttdfecm
	* @return Ttdfecm
	*/
	public function setTtdfecm($ttdfecm)
	{
	  $this->ttdfecm = (String) $ttdfecm;
	    return $this;
	}

	/**
	* Get ttdfecm
	*
	* @return null|Date
	*/
	public function getTtdfecm()
	{
		return $this->ttdfecm;
	}

	/**
	* Set ttdtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $ttdtask
	* @return Ttdtask
	*/
	public function setTtdtask($ttdtask)
	{
	  $this->ttdtask = (String) $ttdtask;
	    return $this;
	}

	/**
	* Get ttdtask
	*
	* @return null|String
	*/
	public function getTtdtask()
	{
		return $this->ttdtask;
	}

	/**
	* Set ttdpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $ttdpara
	* @return Ttdpara
	*/
	public function setTtdpara($ttdpara)
	{
	  $this->ttdpara = (Integer) $ttdpara;
	    return $this;
	}

	/**
	* Get ttdpara
	*
	* @return null|Integer
	*/
	public function getTtdpara()
	{
		return $this->ttdpara;
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

<?php
 /**
 * Model of the Ttrvtd table
 *
 * It is used to convert the   Ttrvtd entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttrvtd
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttrvtd
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en el Proceso de: Facturación
		*/
		protected $trvsec1;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en el Proceso de: Facturación
		*/
		protected $trvsecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Cuenta Contable
		*/
		protected $bctacod;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Centro de Costo
		*/
		protected $bcdccve;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor
		*/
		protected $trvdimp;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $trvusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $trvfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $trvusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $trvfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $trvtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $trvpara;

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
	* Name of the table: ttrvtd
	* 
	 */
	const TABLE="ttrvtd";

	/**
	*Primary key
*/
		 const PKEY = "trvsec1";



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
		throw new \Exception('Class Entity: Ttrvtd Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttrvtd. Invalid specified property: get'.$name);
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
	* Set trvsec1
	*
	*Estos datos se ingresan en el Proceso de: Facturación
	*
	* @parámetro Integer $trvsec1
	* @return Trvsec1
	*/
	public function setTrvsec1($trvsec1)
	{
	  $this->trvsec1 = (Integer) $trvsec1;
	    return $this;
	}

	/**
	* Get trvsec1
	*
	* @return null|Integer
	*/
	public function getTrvsec1()
	{
		return $this->trvsec1;
	}

	/**
	* Set trvsecu
	*
	*Estos datos se ingresan en el Proceso de: Facturación
	*
	* @parámetro Integer $trvsecu
	* @return Trvsecu
	*/
	public function setTrvsecu($trvsecu)
	{
	  $this->trvsecu = (Integer) $trvsecu;
	    return $this;
	}

	/**
	* Get trvsecu
	*
	* @return null|Integer
	*/
	public function getTrvsecu()
	{
		return $this->trvsecu;
	}

	/**
	* Set bctacod
	*
	*Código de Cuenta Contable
	*
	* @parámetro String $bctacod
	* @return Bctacod
	*/
	public function setBctacod($bctacod)
	{
	  $this->bctacod = (String) $bctacod;
	    return $this;
	}

	/**
	* Get bctacod
	*
	* @return null|String
	*/
	public function getBctacod()
	{
		return $this->bctacod;
	}

	/**
	* Set bcdccve
	*
	*Código Centro de Costo
	*
	* @parámetro String $bcdccve
	* @return Bcdccve
	*/
	public function setBcdccve($bcdccve)
	{
	  $this->bcdccve = (String) $bcdccve;
	    return $this;
	}

	/**
	* Get bcdccve
	*
	* @return null|String
	*/
	public function getBcdccve()
	{
		return $this->bcdccve;
	}

	/**
	* Set trvdimp
	*
	*Valor
	*
	* @parámetro Decimal $trvdimp
	* @return Trvdimp
	*/
	public function setTrvdimp($trvdimp)
	{
	  $this->trvdimp = (Double) $trvdimp;
	    return $this;
	}

	/**
	* Get trvdimp
	*
	* @return null|Decimal
	*/
	public function getTrvdimp()
	{
		return $this->trvdimp;
	}

	/**
	* Set trvusuc
	*
	*Usuario de creación
	*
	* @parámetro String $trvusuc
	* @return Trvusuc
	*/
	public function setTrvusuc($trvusuc)
	{
	  $this->trvusuc = (String) $trvusuc;
	    return $this;
	}

	/**
	* Get trvusuc
	*
	* @return null|String
	*/
	public function getTrvusuc()
	{
		return $this->trvusuc;
	}

	/**
	* Set trvfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $trvfecc
	* @return Trvfecc
	*/
	public function setTrvfecc($trvfecc)
	{
	  $this->trvfecc = (String) $trvfecc;
	    return $this;
	}

	/**
	* Get trvfecc
	*
	* @return null|Date
	*/
	public function getTrvfecc()
	{
		return $this->trvfecc;
	}

	/**
	* Set trvusum
	*
	*Usuario de modificación
	*
	* @parámetro String $trvusum
	* @return Trvusum
	*/
	public function setTrvusum($trvusum)
	{
	  $this->trvusum = (String) $trvusum;
	    return $this;
	}

	/**
	* Get trvusum
	*
	* @return null|String
	*/
	public function getTrvusum()
	{
		return $this->trvusum;
	}

	/**
	* Set trvfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $trvfecm
	* @return Trvfecm
	*/
	public function setTrvfecm($trvfecm)
	{
	  $this->trvfecm = (String) $trvfecm;
	    return $this;
	}

	/**
	* Get trvfecm
	*
	* @return null|Date
	*/
	public function getTrvfecm()
	{
		return $this->trvfecm;
	}

	/**
	* Set trvtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $trvtask
	* @return Trvtask
	*/
	public function setTrvtask($trvtask)
	{
	  $this->trvtask = (String) $trvtask;
	    return $this;
	}

	/**
	* Get trvtask
	*
	* @return null|String
	*/
	public function getTrvtask()
	{
		return $this->trvtask;
	}

	/**
	* Set trvpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $trvpara
	* @return Trvpara
	*/
	public function setTrvpara($trvpara)
	{
	  $this->trvpara = (Integer) $trvpara;
	    return $this;
	}

	/**
	* Get trvpara
	*
	* @return null|Integer
	*/
	public function getTrvpara()
	{
		return $this->trvpara;
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

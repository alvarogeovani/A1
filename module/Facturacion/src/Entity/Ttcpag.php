<?php
 /**
 * Model of the Ttcpag table
 *
 * It is used to convert the   Ttcpag entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttcpag
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttcpag
{

		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opción: Formas de Pago
		*/
		protected $tcpsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opción: Plan de Cuentas Contable
		*/
		protected $bctsecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Forma de Pago
		*/
		protected $tcpacve;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Secuencia
		*/
		protected $tcpasec;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Descripción Forma Pago
		*/
		protected $tcpades;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Plazo en días
		*/
		protected $tcpadia;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Periodo de gracia en días
		*/
		protected $tcpagra;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Forma de Pago
		*/
		protected $tcpatip;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tcpusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tcpfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tcpusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tcpfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tcptask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tcppara;

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
	* Name of the table: ttcpag
	* 
	 */
	const TABLE="ttcpag";

	/**
	*Primary key
*/
		 const PKEY = "tcpsecu";



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
		throw new \Exception('Class Entity: Ttcpag Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttcpag. Invalid specified property: get'.$name);
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
	* Set tcpsecu
	*
	*Estos datos se ingresan en la Opción: Formas de Pago
	*
	* @parámetro Integer $tcpsecu
	* @return Tcpsecu
	*/
	public function setTcpsecu($tcpsecu)
	{
	  $this->tcpsecu = (Integer) $tcpsecu;
	    return $this;
	}

	/**
	* Get tcpsecu
	*
	* @return null|Integer
	*/
	public function getTcpsecu()
	{
		return $this->tcpsecu;
	}

	/**
	* Set bctsecu
	*
	*Estos datos se ingresan en la Opción: Plan de Cuentas Contable
	*
	* @parámetro Integer $bctsecu
	* @return Bctsecu
	*/
	public function setBctsecu($bctsecu)
	{
	  $this->bctsecu = (Integer) $bctsecu;
	    return $this;
	}

	/**
	* Get bctsecu
	*
	* @return null|Integer
	*/
	public function getBctsecu()
	{
		return $this->bctsecu;
	}

	/**
	* Set tcpacve
	*
	*Código Forma de Pago
	*
	* @parámetro String $tcpacve
	* @return Tcpacve
	*/
	public function setTcpacve($tcpacve)
	{
	  $this->tcpacve = (String) $tcpacve;
	    return $this;
	}

	/**
	* Get tcpacve
	*
	* @return null|String
	*/
	public function getTcpacve()
	{
		return $this->tcpacve;
	}

	/**
	* Set tcpasec
	*
	*Secuencia
	*
	* @parámetro Integer $tcpasec
	* @return Tcpasec
	*/
	public function setTcpasec($tcpasec)
	{
	  $this->tcpasec = (Integer) $tcpasec;
	    return $this;
	}

	/**
	* Get tcpasec
	*
	* @return null|Integer
	*/
	public function getTcpasec()
	{
		return $this->tcpasec;
	}

	/**
	* Set tcpades
	*
	*Descripción Forma Pago
	*
	* @parámetro String $tcpades
	* @return Tcpades
	*/
	public function setTcpades($tcpades)
	{
	  $this->tcpades = (String) $tcpades;
	    return $this;
	}

	/**
	* Get tcpades
	*
	* @return null|String
	*/
	public function getTcpades()
	{
		return $this->tcpades;
	}

	/**
	* Set tcpadia
	*
	*Plazo en días
	*
	* @parámetro Decimal $tcpadia
	* @return Tcpadia
	*/
	public function setTcpadia($tcpadia)
	{
	  $this->tcpadia = (Double) $tcpadia;
	    return $this;
	}

	/**
	* Get tcpadia
	*
	* @return null|Decimal
	*/
	public function getTcpadia()
	{
		return $this->tcpadia;
	}

	/**
	* Set tcpagra
	*
	*Periodo de gracia en días
	*
	* @parámetro Decimal $tcpagra
	* @return Tcpagra
	*/
	public function setTcpagra($tcpagra)
	{
	  $this->tcpagra = (Double) $tcpagra;
	    return $this;
	}

	/**
	* Get tcpagra
	*
	* @return null|Decimal
	*/
	public function getTcpagra()
	{
		return $this->tcpagra;
	}

	/**
	* Set tcpatip
	*
	*Código Forma de Pago
	*
	* @parámetro Integer $tcpatip
	* @return Tcpatip
	*/
	public function setTcpatip($tcpatip)
	{
	  $this->tcpatip = (Integer) $tcpatip;
	    return $this;
	}

	/**
	* Get tcpatip
	*
	* @return null|Integer
	*/
	public function getTcpatip()
	{
		return $this->tcpatip;
	}

	/**
	* Set tcpusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tcpusuc
	* @return Tcpusuc
	*/
	public function setTcpusuc($tcpusuc)
	{
	  $this->tcpusuc = (String) $tcpusuc;
	    return $this;
	}

	/**
	* Get tcpusuc
	*
	* @return null|String
	*/
	public function getTcpusuc()
	{
		return $this->tcpusuc;
	}

	/**
	* Set tcpfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tcpfecc
	* @return Tcpfecc
	*/
	public function setTcpfecc($tcpfecc)
	{
	  $this->tcpfecc = (String) $tcpfecc;
	    return $this;
	}

	/**
	* Get tcpfecc
	*
	* @return null|Date
	*/
	public function getTcpfecc()
	{
		return $this->tcpfecc;
	}

	/**
	* Set tcpusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tcpusum
	* @return Tcpusum
	*/
	public function setTcpusum($tcpusum)
	{
	  $this->tcpusum = (String) $tcpusum;
	    return $this;
	}

	/**
	* Get tcpusum
	*
	* @return null|String
	*/
	public function getTcpusum()
	{
		return $this->tcpusum;
	}

	/**
	* Set tcpfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tcpfecm
	* @return Tcpfecm
	*/
	public function setTcpfecm($tcpfecm)
	{
	  $this->tcpfecm = (String) $tcpfecm;
	    return $this;
	}

	/**
	* Get tcpfecm
	*
	* @return null|Date
	*/
	public function getTcpfecm()
	{
		return $this->tcpfecm;
	}

	/**
	* Set tcptask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tcptask
	* @return Tcptask
	*/
	public function setTcptask($tcptask)
	{
	  $this->tcptask = (String) $tcptask;
	    return $this;
	}

	/**
	* Get tcptask
	*
	* @return null|String
	*/
	public function getTcptask()
	{
		return $this->tcptask;
	}

	/**
	* Set tcppara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tcppara
	* @return Tcppara
	*/
	public function setTcppara($tcppara)
	{
	  $this->tcppara = (Integer) $tcppara;
	    return $this;
	}

	/**
	* Get tcppara
	*
	* @return null|Integer
	*/
	public function getTcppara()
	{
		return $this->tcppara;
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

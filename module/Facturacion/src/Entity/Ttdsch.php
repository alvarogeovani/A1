<?php
 /**
 * Model of the Ttdsch table
 *
 * It is used to convert the   Ttdsch entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttdsch
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttdsch
{

		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Clave Primaria de la Base de Datos: TTDSCH
		*/
		protected $tthsecu;
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
		* Tipo de Distribuidor
		*/
		protected $tditipd;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Porcentaje de Descuento
		*/
		protected $tthspod;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tthusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tthfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tthusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tthfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tthtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tthpara;

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
	* Name of the table: ttdsch
	* 
	 */
	const TABLE="ttdsch";

	/**
	*Primary key
*/
		 const PKEY = "tthsecu";



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
		throw new \Exception('Class Entity: Ttdsch Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttdsch. Invalid specified property: get'.$name);
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
	* Set tthsecu
	*
	*Clave Primaria de la Base de Datos: TTDSCH
	*
	* @parámetro Integer $tthsecu
	* @return Tthsecu
	*/
	public function setTthsecu($tthsecu)
	{
	  $this->tthsecu = (Integer) $tthsecu;
	    return $this;
	}

	/**
	* Get tthsecu
	*
	* @return null|Integer
	*/
	public function getTthsecu()
	{
		return $this->tthsecu;
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
	* Set tthspod
	*
	*Porcentaje de Descuento
	*
	* @parámetro Decimal $tthspod
	* @return Tthspod
	*/
	public function setTthspod($tthspod)
	{
	  $this->tthspod = (Double) $tthspod;
	    return $this;
	}

	/**
	* Get tthspod
	*
	* @return null|Decimal
	*/
	public function getTthspod()
	{
		return $this->tthspod;
	}

	/**
	* Set tthusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tthusuc
	* @return Tthusuc
	*/
	public function setTthusuc($tthusuc)
	{
	  $this->tthusuc = (String) $tthusuc;
	    return $this;
	}

	/**
	* Get tthusuc
	*
	* @return null|String
	*/
	public function getTthusuc()
	{
		return $this->tthusuc;
	}

	/**
	* Set tthfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tthfecc
	* @return Tthfecc
	*/
	public function setTthfecc($tthfecc)
	{
	  $this->tthfecc = (String) $tthfecc;
	    return $this;
	}

	/**
	* Get tthfecc
	*
	* @return null|Date
	*/
	public function getTthfecc()
	{
		return $this->tthfecc;
	}

	/**
	* Set tthusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tthusum
	* @return Tthusum
	*/
	public function setTthusum($tthusum)
	{
	  $this->tthusum = (String) $tthusum;
	    return $this;
	}

	/**
	* Get tthusum
	*
	* @return null|String
	*/
	public function getTthusum()
	{
		return $this->tthusum;
	}

	/**
	* Set tthfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tthfecm
	* @return Tthfecm
	*/
	public function setTthfecm($tthfecm)
	{
	  $this->tthfecm = (String) $tthfecm;
	    return $this;
	}

	/**
	* Get tthfecm
	*
	* @return null|Date
	*/
	public function getTthfecm()
	{
		return $this->tthfecm;
	}

	/**
	* Set tthtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tthtask
	* @return Tthtask
	*/
	public function setTthtask($tthtask)
	{
	  $this->tthtask = (String) $tthtask;
	    return $this;
	}

	/**
	* Get tthtask
	*
	* @return null|String
	*/
	public function getTthtask()
	{
		return $this->tthtask;
	}

	/**
	* Set tthpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tthpara
	* @return Tthpara
	*/
	public function setTthpara($tthpara)
	{
	  $this->tthpara = (Integer) $tthpara;
	    return $this;
	}

	/**
	* Get tthpara
	*
	* @return null|Integer
	*/
	public function getTthpara()
	{
		return $this->tthpara;
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

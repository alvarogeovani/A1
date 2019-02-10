<?php
 /**
 * Model of the Tttido table
 *
 * It is used to convert the   Tttido entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tttido
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Tttido
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Tipos de Documentos Comerciales
		*/
		protected $tbdsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Tipos de Documentos
		*/
		protected $tbbsecu;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Clase de Documento
		*/
		protected $tbdregi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de Documento Comercial
		*/
		protected $tbdtipo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción del Documento Comercial
		*/
		protected $tbddesc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código del SRI
		*/
		protected $tbddsri;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tbdusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tbdfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tbdusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tbdfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tbdtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tbdpara;

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
	* Name of the table: tttido
	* 
	 */
	const TABLE="tttido";

	/**
	*Primary key
*/
		 const PKEY = "tbdsecu";



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
		throw new \Exception('Class Entity: Tttido Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tttido. Invalid specified property: get'.$name);
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
	* Set tbdsecu
	*
	*Estos datos se ingresan en la Opción: Tipos de Documentos Comerciales
	*
	* @parámetro Integer $tbdsecu
	* @return Tbdsecu
	*/
	public function setTbdsecu($tbdsecu)
	{
	  $this->tbdsecu = (Integer) $tbdsecu;
	    return $this;
	}

	/**
	* Get tbdsecu
	*
	* @return null|Integer
	*/
	public function getTbdsecu()
	{
		return $this->tbdsecu;
	}

	/**
	* Set tbbsecu
	*
	*Estos datos se ingresan en la Opción: Tipos de Documentos
	*
	* @parámetro Integer $tbbsecu
	* @return Tbbsecu
	*/
	public function setTbbsecu($tbbsecu)
	{
	  $this->tbbsecu = (Integer) $tbbsecu;
	    return $this;
	}

	/**
	* Get tbbsecu
	*
	* @return null|Integer
	*/
	public function getTbbsecu()
	{
		return $this->tbbsecu;
	}

	/**
	* Set tbdregi
	*
	*Clase de Documento
	*
	* @parámetro Integer $tbdregi
	* @return Tbdregi
	*/
	public function setTbdregi($tbdregi)
	{
	  $this->tbdregi = (Integer) $tbdregi;
	    return $this;
	}

	/**
	* Get tbdregi
	*
	* @return null|Integer
	*/
	public function getTbdregi()
	{
		return $this->tbdregi;
	}

	/**
	* Set tbdtipo
	*
	*Tipo de Documento Comercial
	*
	* @parámetro String $tbdtipo
	* @return Tbdtipo
	*/
	public function setTbdtipo($tbdtipo)
	{
	  $this->tbdtipo = (String) $tbdtipo;
	    return $this;
	}

	/**
	* Get tbdtipo
	*
	* @return null|String
	*/
	public function getTbdtipo()
	{
		return $this->tbdtipo;
	}

	/**
	* Set tbddesc
	*
	*Descripción del Documento Comercial
	*
	* @parámetro String $tbddesc
	* @return Tbddesc
	*/
	public function setTbddesc($tbddesc)
	{
	  $this->tbddesc = (String) $tbddesc;
	    return $this;
	}

	/**
	* Get tbddesc
	*
	* @return null|String
	*/
	public function getTbddesc()
	{
		return $this->tbddesc;
	}

	/**
	* Set tbddsri
	*
	*Código del SRI
	*
	* @parámetro String $tbddsri
	* @return Tbddsri
	*/
	public function setTbddsri($tbddsri)
	{
	  $this->tbddsri = (String) $tbddsri;
	    return $this;
	}

	/**
	* Get tbddsri
	*
	* @return null|String
	*/
	public function getTbddsri()
	{
		return $this->tbddsri;
	}

	/**
	* Set tbdusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tbdusuc
	* @return Tbdusuc
	*/
	public function setTbdusuc($tbdusuc)
	{
	  $this->tbdusuc = (String) $tbdusuc;
	    return $this;
	}

	/**
	* Get tbdusuc
	*
	* @return null|String
	*/
	public function getTbdusuc()
	{
		return $this->tbdusuc;
	}

	/**
	* Set tbdfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tbdfecc
	* @return Tbdfecc
	*/
	public function setTbdfecc($tbdfecc)
	{
	  $this->tbdfecc = (String) $tbdfecc;
	    return $this;
	}

	/**
	* Get tbdfecc
	*
	* @return null|Date
	*/
	public function getTbdfecc()
	{
		return $this->tbdfecc;
	}

	/**
	* Set tbdusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tbdusum
	* @return Tbdusum
	*/
	public function setTbdusum($tbdusum)
	{
	  $this->tbdusum = (String) $tbdusum;
	    return $this;
	}

	/**
	* Get tbdusum
	*
	* @return null|String
	*/
	public function getTbdusum()
	{
		return $this->tbdusum;
	}

	/**
	* Set tbdfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tbdfecm
	* @return Tbdfecm
	*/
	public function setTbdfecm($tbdfecm)
	{
	  $this->tbdfecm = (String) $tbdfecm;
	    return $this;
	}

	/**
	* Get tbdfecm
	*
	* @return null|Date
	*/
	public function getTbdfecm()
	{
		return $this->tbdfecm;
	}

	/**
	* Set tbdtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tbdtask
	* @return Tbdtask
	*/
	public function setTbdtask($tbdtask)
	{
	  $this->tbdtask = (String) $tbdtask;
	    return $this;
	}

	/**
	* Get tbdtask
	*
	* @return null|String
	*/
	public function getTbdtask()
	{
		return $this->tbdtask;
	}

	/**
	* Set tbdpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tbdpara
	* @return Tbdpara
	*/
	public function setTbdpara($tbdpara)
	{
	  $this->tbdpara = (Integer) $tbdpara;
	    return $this;
	}

	/**
	* Get tbdpara
	*
	* @return null|Integer
	*/
	public function getTbdpara()
	{
		return $this->tbdpara;
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

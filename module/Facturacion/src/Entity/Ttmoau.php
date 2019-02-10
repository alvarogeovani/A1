<?php
 /**
 * Model of the Ttmoau table
 *
 * It is used to convert the   Ttmoau entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttmoau
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttmoau
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Secuencial del Motivo de Autorización
		*/
		protected $tmasecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Realizar Autorizaciones
		*/
		protected $tausecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Situación del Pedido
		*/
		protected $tphsitu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de la Situación del Pedido
		*/
		protected $tmadesc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Limite de Crédito del Distribuidor (Inf. Crédito)
		*/
		protected $tdislcr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Indicador del Motivo de Autorización (OK, Error)
		*/
		protected $tmachec;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tmausuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tmafecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tmausum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tmafecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tmatask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tmapara;

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
	* Name of the table: ttmoau
	* 
	 */
	const TABLE="ttmoau";

	/**
	*Primary key
*/
		 const PKEY = "tmasecu";



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
		throw new \Exception('Class Entity: Ttmoau Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttmoau. Invalid specified property: get'.$name);
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
	* Set tmasecu
	*
	*Secuencial del Motivo de Autorización
	*
	* @parámetro Integer $tmasecu
	* @return Tmasecu
	*/
	public function setTmasecu($tmasecu)
	{
	  $this->tmasecu = (Integer) $tmasecu;
	    return $this;
	}

	/**
	* Get tmasecu
	*
	* @return null|Integer
	*/
	public function getTmasecu()
	{
		return $this->tmasecu;
	}

	/**
	* Set tausecu
	*
	*Estos datos se ingresan en la Opción: Realizar Autorizaciones
	*
	* @parámetro Integer $tausecu
	* @return Tausecu
	*/
	public function setTausecu($tausecu)
	{
	  $this->tausecu = (Integer) $tausecu;
	    return $this;
	}

	/**
	* Get tausecu
	*
	* @return null|Integer
	*/
	public function getTausecu()
	{
		return $this->tausecu;
	}

	/**
	* Set tphsitu
	*
	*Situación del Pedido
	*
	* @parámetro Integer $tphsitu
	* @return Tphsitu
	*/
	public function setTphsitu($tphsitu)
	{
	  $this->tphsitu = (Integer) $tphsitu;
	    return $this;
	}

	/**
	* Get tphsitu
	*
	* @return null|Integer
	*/
	public function getTphsitu()
	{
		return $this->tphsitu;
	}

	/**
	* Set tmadesc
	*
	*Descripción de la Situación del Pedido
	*
	* @parámetro String $tmadesc
	* @return Tmadesc
	*/
	public function setTmadesc($tmadesc)
	{
	  $this->tmadesc = (String) $tmadesc;
	    return $this;
	}

	/**
	* Get tmadesc
	*
	* @return null|String
	*/
	public function getTmadesc()
	{
		return $this->tmadesc;
	}

	/**
	* Set tdislcr
	*
	*Limite de Crédito del Distribuidor (Inf. Crédito)
	*
	* @parámetro Decimal $tdislcr
	* @return Tdislcr
	*/
	public function setTdislcr($tdislcr)
	{
	  $this->tdislcr = (Double) $tdislcr;
	    return $this;
	}

	/**
	* Get tdislcr
	*
	* @return null|Decimal
	*/
	public function getTdislcr()
	{
		return $this->tdislcr;
	}

	/**
	* Set tmachec
	*
	*Indicador del Motivo de Autorización (OK, Error)
	*
	* @parámetro String $tmachec
	* @return Tmachec
	*/
	public function setTmachec($tmachec)
	{
	  $this->tmachec = (String) $tmachec;
	    return $this;
	}

	/**
	* Get tmachec
	*
	* @return null|String
	*/
	public function getTmachec()
	{
		return $this->tmachec;
	}

	/**
	* Set tmausuc
	*
	*Usuario de creación
	*
	* @parámetro String $tmausuc
	* @return Tmausuc
	*/
	public function setTmausuc($tmausuc)
	{
	  $this->tmausuc = (String) $tmausuc;
	    return $this;
	}

	/**
	* Get tmausuc
	*
	* @return null|String
	*/
	public function getTmausuc()
	{
		return $this->tmausuc;
	}

	/**
	* Set tmafecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tmafecc
	* @return Tmafecc
	*/
	public function setTmafecc($tmafecc)
	{
	  $this->tmafecc = (String) $tmafecc;
	    return $this;
	}

	/**
	* Get tmafecc
	*
	* @return null|Date
	*/
	public function getTmafecc()
	{
		return $this->tmafecc;
	}

	/**
	* Set tmausum
	*
	*Usuario de modificación
	*
	* @parámetro String $tmausum
	* @return Tmausum
	*/
	public function setTmausum($tmausum)
	{
	  $this->tmausum = (String) $tmausum;
	    return $this;
	}

	/**
	* Get tmausum
	*
	* @return null|String
	*/
	public function getTmausum()
	{
		return $this->tmausum;
	}

	/**
	* Set tmafecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tmafecm
	* @return Tmafecm
	*/
	public function setTmafecm($tmafecm)
	{
	  $this->tmafecm = (String) $tmafecm;
	    return $this;
	}

	/**
	* Get tmafecm
	*
	* @return null|Date
	*/
	public function getTmafecm()
	{
		return $this->tmafecm;
	}

	/**
	* Set tmatask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tmatask
	* @return Tmatask
	*/
	public function setTmatask($tmatask)
	{
	  $this->tmatask = (String) $tmatask;
	    return $this;
	}

	/**
	* Get tmatask
	*
	* @return null|String
	*/
	public function getTmatask()
	{
		return $this->tmatask;
	}

	/**
	* Set tmapara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tmapara
	* @return Tmapara
	*/
	public function setTmapara($tmapara)
	{
	  $this->tmapara = (Integer) $tmapara;
	    return $this;
	}

	/**
	* Get tmapara
	*
	* @return null|Integer
	*/
	public function getTmapara()
	{
		return $this->tmapara;
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

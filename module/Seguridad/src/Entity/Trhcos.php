<?php
 /**
 * Model of the Trhcos table
 *
 * It is used to convert the   Trhcos entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trhcos
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trhcos
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Histórico Constantes del Sistema
		*/
		protected $rhcsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Módulos
		*/
		protected $rmosecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opción: Constantes del Sistema
		*/
		protected $rcosecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de la Constante
		*/
		protected $rhccodi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Valor
		*/
		protected $rhcvalo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Configuración adicional para la creación de Parámetro
		*/
		protected $rhcconf;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de la Constante
		*/
		protected $rhcdesc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Tipo de Constante S=String,N=Numérico y D=DateTime
		*/
		protected $rhctipo;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Proceso (Fecha y Hora)
		*/
		protected $rhcfepr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Identificación del computador
		*/
		protected $rhcidco;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rhcusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rhcfecc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de modificación
		*/
		protected $rhcusum;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de modificación
		*/
		protected $rhcfecm;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Tipo de tarea ejecutada
		*/
		protected $rhctask;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Bandera de borrado
		*/
		protected $rhcpara;

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
	* Name of the table: trhcos
	* 
	 */
	const TABLE="trhcos";

	/**
	*Primary key
*/
		 const PKEY = "rhcsecu";



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
		throw new \Exception('Class Entity: Trhcos Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trhcos. Invalid specified property: get'.$name);
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
	* Set rhcsecu
	*
	*Estos datos se ingresan en la Opción: Histórico Constantes del Sistema
	*
	* @parámetro Integer $rhcsecu
	* @return Rhcsecu
	*/
	public function setRhcsecu($rhcsecu)
	{
	  $this->rhcsecu = (Integer) $rhcsecu;
	    return $this;
	}

	/**
	* Get rhcsecu
	*
	* @return null|Integer
	*/
	public function getRhcsecu()
	{
		return $this->rhcsecu;
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
	* Set rhccodi
	*
	*Código de la Constante
	*
	* @parámetro String $rhccodi
	* @return Rhccodi
	*/
	public function setRhccodi($rhccodi)
	{
	  $this->rhccodi = (String) $rhccodi;
	    return $this;
	}

	/**
	* Get rhccodi
	*
	* @return null|String
	*/
	public function getRhccodi()
	{
		return $this->rhccodi;
	}

	/**
	* Set rhcvalo
	*
	*Valor
	*
	* @parámetro String $rhcvalo
	* @return Rhcvalo
	*/
	public function setRhcvalo($rhcvalo)
	{
	  $this->rhcvalo = (String) $rhcvalo;
	    return $this;
	}

	/**
	* Get rhcvalo
	*
	* @return null|String
	*/
	public function getRhcvalo()
	{
		return $this->rhcvalo;
	}

	/**
	* Set rhcconf
	*
	*Configuración adicional para la creación de Parámetro
	*
	* @parámetro String $rhcconf
	* @return Rhcconf
	*/
	public function setRhcconf($rhcconf)
	{
	  $this->rhcconf = (String) $rhcconf;
	    return $this;
	}

	/**
	* Get rhcconf
	*
	* @return null|String
	*/
	public function getRhcconf()
	{
		return $this->rhcconf;
	}

	/**
	* Set rhcdesc
	*
	*Descripción de la Constante
	*
	* @parámetro String $rhcdesc
	* @return Rhcdesc
	*/
	public function setRhcdesc($rhcdesc)
	{
	  $this->rhcdesc = (String) $rhcdesc;
	    return $this;
	}

	/**
	* Get rhcdesc
	*
	* @return null|String
	*/
	public function getRhcdesc()
	{
		return $this->rhcdesc;
	}

	/**
	* Set rhctipo
	*
	*Tipo de Constante S=String,N=Numérico y D=DateTime
	*
	* @parámetro Decimal $rhctipo
	* @return Rhctipo
	*/
	public function setRhctipo($rhctipo)
	{
	  $this->rhctipo = (Double) $rhctipo;
	    return $this;
	}

	/**
	* Get rhctipo
	*
	* @return null|Decimal
	*/
	public function getRhctipo()
	{
		return $this->rhctipo;
	}

	/**
	* Set rhcfepr
	*
	*Fecha de Proceso (Fecha y Hora)
	*
	* @parámetro Date $rhcfepr
	* @return Rhcfepr
	*/
	public function setRhcfepr($rhcfepr)
	{
	  $this->rhcfepr = (String) $rhcfepr;
	    return $this;
	}

	/**
	* Get rhcfepr
	*
	* @return null|Date
	*/
	public function getRhcfepr()
	{
		return $this->rhcfepr;
	}

	/**
	* Set rhcidco
	*
	*Identificación del computador
	*
	* @parámetro String $rhcidco
	* @return Rhcidco
	*/
	public function setRhcidco($rhcidco)
	{
	  $this->rhcidco = (String) $rhcidco;
	    return $this;
	}

	/**
	* Get rhcidco
	*
	* @return null|String
	*/
	public function getRhcidco()
	{
		return $this->rhcidco;
	}

	/**
	* Set rhcusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rhcusuc
	* @return Rhcusuc
	*/
	public function setRhcusuc($rhcusuc)
	{
	  $this->rhcusuc = (String) $rhcusuc;
	    return $this;
	}

	/**
	* Get rhcusuc
	*
	* @return null|String
	*/
	public function getRhcusuc()
	{
		return $this->rhcusuc;
	}

	/**
	* Set rhcfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rhcfecc
	* @return Rhcfecc
	*/
	public function setRhcfecc($rhcfecc)
	{
	  $this->rhcfecc = (String) $rhcfecc;
	    return $this;
	}

	/**
	* Get rhcfecc
	*
	* @return null|Date
	*/
	public function getRhcfecc()
	{
		return $this->rhcfecc;
	}

	/**
	* Set rhcusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rhcusum
	* @return Rhcusum
	*/
	public function setRhcusum($rhcusum)
	{
	  $this->rhcusum = (String) $rhcusum;
	    return $this;
	}

	/**
	* Get rhcusum
	*
	* @return null|String
	*/
	public function getRhcusum()
	{
		return $this->rhcusum;
	}

	/**
	* Set rhcfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rhcfecm
	* @return Rhcfecm
	*/
	public function setRhcfecm($rhcfecm)
	{
	  $this->rhcfecm = (String) $rhcfecm;
	    return $this;
	}

	/**
	* Get rhcfecm
	*
	* @return null|Date
	*/
	public function getRhcfecm()
	{
		return $this->rhcfecm;
	}

	/**
	* Set rhctask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rhctask
	* @return Rhctask
	*/
	public function setRhctask($rhctask)
	{
	  $this->rhctask = (String) $rhctask;
	    return $this;
	}

	/**
	* Get rhctask
	*
	* @return null|String
	*/
	public function getRhctask()
	{
		return $this->rhctask;
	}

	/**
	* Set rhcpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rhcpara
	* @return Rhcpara
	*/
	public function setRhcpara($rhcpara)
	{
	  $this->rhcpara = (Integer) $rhcpara;
	    return $this;
	}

	/**
	* Get rhcpara
	*
	* @return null|Integer
	*/
	public function getRhcpara()
	{
		return $this->rhcpara;
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

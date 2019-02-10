<?php
 /**
 * Model of the Tvpqah table
 *
 * It is used to convert the   Tvpqah entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvpqah
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvpqah
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Paquetes de Artículos
		*/
		protected $vphsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Bodegas
		*/
		protected $vbosecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre del Paquete
		*/
		protected $vphqnom;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción del Paquete
		*/
		protected $vphqdes;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Paquete
		*/
		protected $vphtipq;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Creación del paquete
		*/
		protected $vphfecp;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vphusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vphfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vphusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vphfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vphtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $vphpara;

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
	* Name of the table: tvpqah
	* 
	 */
	const TABLE="tvpqah";

	/**
	*Primary key
*/
		 const PKEY = "vphsecu";



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
		throw new \Exception('Class Entity: Tvpqah Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvpqah. Invalid specified property: get'.$name);
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
	* Set vphsecu
	*
	*Estos datos se ingresan en la Opción: Paquetes de Artículos
	*
	* @parámetro Integer $vphsecu
	* @return Vphsecu
	*/
	public function setVphsecu($vphsecu)
	{
	  $this->vphsecu = (Integer) $vphsecu;
	    return $this;
	}

	/**
	* Get vphsecu
	*
	* @return null|Integer
	*/
	public function getVphsecu()
	{
		return $this->vphsecu;
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
	* Set vphqnom
	*
	*Nombre del Paquete
	*
	* @parámetro String $vphqnom
	* @return Vphqnom
	*/
	public function setVphqnom($vphqnom)
	{
	  $this->vphqnom = (String) $vphqnom;
	    return $this;
	}

	/**
	* Get vphqnom
	*
	* @return null|String
	*/
	public function getVphqnom()
	{
		return $this->vphqnom;
	}

	/**
	* Set vphqdes
	*
	*Descripción del Paquete
	*
	* @parámetro String $vphqdes
	* @return Vphqdes
	*/
	public function setVphqdes($vphqdes)
	{
	  $this->vphqdes = (String) $vphqdes;
	    return $this;
	}

	/**
	* Get vphqdes
	*
	* @return null|String
	*/
	public function getVphqdes()
	{
		return $this->vphqdes;
	}

	/**
	* Set vphtipq
	*
	*Tipo de Paquete
	*
	* @parámetro Integer $vphtipq
	* @return Vphtipq
	*/
	public function setVphtipq($vphtipq)
	{
	  $this->vphtipq = (Integer) $vphtipq;
	    return $this;
	}

	/**
	* Get vphtipq
	*
	* @return null|Integer
	*/
	public function getVphtipq()
	{
		return $this->vphtipq;
	}

	/**
	* Set vphfecp
	*
	*Fecha de Creación del paquete
	*
	* @parámetro Date $vphfecp
	* @return Vphfecp
	*/
	public function setVphfecp($vphfecp)
	{
	  $this->vphfecp = (String) $vphfecp;
	    return $this;
	}

	/**
	* Get vphfecp
	*
	* @return null|Date
	*/
	public function getVphfecp()
	{
		return $this->vphfecp;
	}

	/**
	* Set vphusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vphusuc
	* @return Vphusuc
	*/
	public function setVphusuc($vphusuc)
	{
	  $this->vphusuc = (String) $vphusuc;
	    return $this;
	}

	/**
	* Get vphusuc
	*
	* @return null|String
	*/
	public function getVphusuc()
	{
		return $this->vphusuc;
	}

	/**
	* Set vphfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vphfecc
	* @return Vphfecc
	*/
	public function setVphfecc($vphfecc)
	{
	  $this->vphfecc = (String) $vphfecc;
	    return $this;
	}

	/**
	* Get vphfecc
	*
	* @return null|Date
	*/
	public function getVphfecc()
	{
		return $this->vphfecc;
	}

	/**
	* Set vphusum
	*
	*Usuario de modificación
	*
	* @parámetro String $vphusum
	* @return Vphusum
	*/
	public function setVphusum($vphusum)
	{
	  $this->vphusum = (String) $vphusum;
	    return $this;
	}

	/**
	* Get vphusum
	*
	* @return null|String
	*/
	public function getVphusum()
	{
		return $this->vphusum;
	}

	/**
	* Set vphfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vphfecm
	* @return Vphfecm
	*/
	public function setVphfecm($vphfecm)
	{
	  $this->vphfecm = (String) $vphfecm;
	    return $this;
	}

	/**
	* Get vphfecm
	*
	* @return null|Date
	*/
	public function getVphfecm()
	{
		return $this->vphfecm;
	}

	/**
	* Set vphtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vphtask
	* @return Vphtask
	*/
	public function setVphtask($vphtask)
	{
	  $this->vphtask = (String) $vphtask;
	    return $this;
	}

	/**
	* Get vphtask
	*
	* @return null|String
	*/
	public function getVphtask()
	{
		return $this->vphtask;
	}

	/**
	* Set vphpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $vphpara
	* @return Vphpara
	*/
	public function setVphpara($vphpara)
	{
	  $this->vphpara = (Integer) $vphpara;
	    return $this;
	}

	/**
	* Get vphpara
	*
	* @return null|Integer
	*/
	public function getVphpara()
	{
		return $this->vphpara;
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

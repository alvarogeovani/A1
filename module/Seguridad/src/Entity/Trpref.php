<?php
 /**
 * Model of the Trpref table
 *
 * It is used to convert the   Trpref entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trpref
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trpref
{

		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Secuencial para Clave Primaria
		*/
		protected $rpfsesu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opción: Usuarios del Sistema
		*/
		protected $russecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código de la preferencia
		*/
		protected $rpfcode;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Valor que toma la Preferencia
		*/
		protected $rpfvalo;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Dirección IP
		*/
		protected $rpfdiip;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* MAC  (Media Access Control) de la tarjeta de Red
		*/
		protected $rpfmact;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Descripción de la preferencia
		*/
		protected $rpfdesc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Parametros Extras de la Preferencia
		*/
		protected $rpfpaex;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de creación
		*/
		protected $rpfusuc;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de creación
		*/
		protected $rpffecc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de modificación
		*/
		protected $rpfusum;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de modificación
		*/
		protected $rpffecm;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Tipo de tarea ejecutada
		*/
		protected $rpftask;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Bandera de borrado
		*/
		protected $rpfpara;

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
	* Name of the table: trpref
	* 
	 */
	const TABLE="trpref";

	/**
	*Primary key
*/
		 const PKEY = "rpfsesu";



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
		throw new \Exception('Class Entity: Trpref Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trpref. Invalid specified property: get'.$name);
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
	* Set rpfsesu
	*
	*Secuencial para Clave Primaria
	*
	* @parámetro Integer $rpfsesu
	* @return Rpfsesu
	*/
	public function setRpfsesu($rpfsesu)
	{
	  $this->rpfsesu = (Integer) $rpfsesu;
	    return $this;
	}

	/**
	* Get rpfsesu
	*
	* @return null|Integer
	*/
	public function getRpfsesu()
	{
		return $this->rpfsesu;
	}

	/**
	* Set russecu
	*
	*Estos datos se ingresan en la Opción: Usuarios del Sistema
	*
	* @parámetro Integer $russecu
	* @return Russecu
	*/
	public function setRussecu($russecu)
	{
	  $this->russecu = (Integer) $russecu;
	    return $this;
	}

	/**
	* Get russecu
	*
	* @return null|Integer
	*/
	public function getRussecu()
	{
		return $this->russecu;
	}

	/**
	* Set rpfcode
	*
	*Código de la preferencia
	*
	* @parámetro String $rpfcode
	* @return Rpfcode
	*/
	public function setRpfcode($rpfcode)
	{
	  $this->rpfcode = (String) $rpfcode;
	    return $this;
	}

	/**
	* Get rpfcode
	*
	* @return null|String
	*/
	public function getRpfcode()
	{
		return $this->rpfcode;
	}

	/**
	* Set rpfvalo
	*
	*Valor que toma la Preferencia
	*
	* @parámetro String $rpfvalo
	* @return Rpfvalo
	*/
	public function setRpfvalo($rpfvalo)
	{
	  $this->rpfvalo = (String) $rpfvalo;
	    return $this;
	}

	/**
	* Get rpfvalo
	*
	* @return null|String
	*/
	public function getRpfvalo()
	{
		return $this->rpfvalo;
	}

	/**
	* Set rpfdiip
	*
	*Dirección IP
	*
	* @parámetro String $rpfdiip
	* @return Rpfdiip
	*/
	public function setRpfdiip($rpfdiip)
	{
	  $this->rpfdiip = (String) $rpfdiip;
	    return $this;
	}

	/**
	* Get rpfdiip
	*
	* @return null|String
	*/
	public function getRpfdiip()
	{
		return $this->rpfdiip;
	}

	/**
	* Set rpfmact
	*
	*MAC  (Media Access Control) de la tarjeta de Red
	*
	* @parámetro String $rpfmact
	* @return Rpfmact
	*/
	public function setRpfmact($rpfmact)
	{
	  $this->rpfmact = (String) $rpfmact;
	    return $this;
	}

	/**
	* Get rpfmact
	*
	* @return null|String
	*/
	public function getRpfmact()
	{
		return $this->rpfmact;
	}

	/**
	* Set rpfdesc
	*
	*Descripción de la preferencia
	*
	* @parámetro String $rpfdesc
	* @return Rpfdesc
	*/
	public function setRpfdesc($rpfdesc)
	{
	  $this->rpfdesc = (String) $rpfdesc;
	    return $this;
	}

	/**
	* Get rpfdesc
	*
	* @return null|String
	*/
	public function getRpfdesc()
	{
		return $this->rpfdesc;
	}

	/**
	* Set rpfpaex
	*
	*Parametros Extras de la Preferencia
	*
	* @parámetro String $rpfpaex
	* @return Rpfpaex
	*/
	public function setRpfpaex($rpfpaex)
	{
	  $this->rpfpaex = (String) $rpfpaex;
	    return $this;
	}

	/**
	* Get rpfpaex
	*
	* @return null|String
	*/
	public function getRpfpaex()
	{
		return $this->rpfpaex;
	}

	/**
	* Set rpfusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rpfusuc
	* @return Rpfusuc
	*/
	public function setRpfusuc($rpfusuc)
	{
	  $this->rpfusuc = (String) $rpfusuc;
	    return $this;
	}

	/**
	* Get rpfusuc
	*
	* @return null|String
	*/
	public function getRpfusuc()
	{
		return $this->rpfusuc;
	}

	/**
	* Set rpffecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rpffecc
	* @return Rpffecc
	*/
	public function setRpffecc($rpffecc)
	{
	  $this->rpffecc = (String) $rpffecc;
	    return $this;
	}

	/**
	* Get rpffecc
	*
	* @return null|Date
	*/
	public function getRpffecc()
	{
		return $this->rpffecc;
	}

	/**
	* Set rpfusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rpfusum
	* @return Rpfusum
	*/
	public function setRpfusum($rpfusum)
	{
	  $this->rpfusum = (String) $rpfusum;
	    return $this;
	}

	/**
	* Get rpfusum
	*
	* @return null|String
	*/
	public function getRpfusum()
	{
		return $this->rpfusum;
	}

	/**
	* Set rpffecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rpffecm
	* @return Rpffecm
	*/
	public function setRpffecm($rpffecm)
	{
	  $this->rpffecm = (String) $rpffecm;
	    return $this;
	}

	/**
	* Get rpffecm
	*
	* @return null|Date
	*/
	public function getRpffecm()
	{
		return $this->rpffecm;
	}

	/**
	* Set rpftask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rpftask
	* @return Rpftask
	*/
	public function setRpftask($rpftask)
	{
	  $this->rpftask = (String) $rpftask;
	    return $this;
	}

	/**
	* Get rpftask
	*
	* @return null|String
	*/
	public function getRpftask()
	{
		return $this->rpftask;
	}

	/**
	* Set rpfpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rpfpara
	* @return Rpfpara
	*/
	public function setRpfpara($rpfpara)
	{
	  $this->rpfpara = (Integer) $rpfpara;
	    return $this;
	}

	/**
	* Get rpfpara
	*
	* @return null|Integer
	*/
	public function getRpfpara()
	{
		return $this->rpfpara;
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

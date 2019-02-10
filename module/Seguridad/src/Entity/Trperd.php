<?php
 /**
 * Model of the Trperd table
 *
 * It is used to convert the   Trperd entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trperd
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trperd
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Relación Perfiles y Companías
		*/
		protected $rrdsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Empresa
		*/
		protected $bcisecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Perfiles de Usuarios
		*/
		protected $rpesecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Parámetros de la Relación Perfiles y Companías
		*/
		protected $rrdparm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rrdusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rrdfecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rrdusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rrdfecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rrdtask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rrdpara;

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
	* Name of the table: trperd
	* 
	 */
	const TABLE="trperd";

	/**
	*Primary key
*/
		 const PKEY = "rrdsecu";



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
		throw new \Exception('Class Entity: Trperd Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trperd. Invalid specified property: get'.$name);
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
	* Set rrdsecu
	*
	*Estos datos se ingresan en la Opción: Relación Perfiles y Companías
	*
	* @parámetro Integer $rrdsecu
	* @return Rrdsecu
	*/
	public function setRrdsecu($rrdsecu)
	{
	  $this->rrdsecu = (Integer) $rrdsecu;
	    return $this;
	}

	/**
	* Get rrdsecu
	*
	* @return null|Integer
	*/
	public function getRrdsecu()
	{
		return $this->rrdsecu;
	}

	/**
	* Set bcisecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Empresa
	*
	* @parámetro Integer $bcisecu
	* @return Bcisecu
	*/
	public function setBcisecu($bcisecu)
	{
	  $this->bcisecu = (Integer) $bcisecu;
	    return $this;
	}

	/**
	* Get bcisecu
	*
	* @return null|Integer
	*/
	public function getBcisecu()
	{
		return $this->bcisecu;
	}

	/**
	* Set rpesecu
	*
	*Estos datos se ingresan en la Opción: Perfiles de Usuarios
	*
	* @parámetro Integer $rpesecu
	* @return Rpesecu
	*/
	public function setRpesecu($rpesecu)
	{
	  $this->rpesecu = (Integer) $rpesecu;
	    return $this;
	}

	/**
	* Get rpesecu
	*
	* @return null|Integer
	*/
	public function getRpesecu()
	{
		return $this->rpesecu;
	}

	/**
	* Set rrdparm
	*
	*Parámetros de la Relación Perfiles y Companías
	*
	* @parámetro String $rrdparm
	* @return Rrdparm
	*/
	public function setRrdparm($rrdparm)
	{
	  $this->rrdparm = (String) $rrdparm;
	    return $this;
	}

	/**
	* Get rrdparm
	*
	* @return null|String
	*/
	public function getRrdparm()
	{
		return $this->rrdparm;
	}

	/**
	* Set rrdusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rrdusuc
	* @return Rrdusuc
	*/
	public function setRrdusuc($rrdusuc)
	{
	  $this->rrdusuc = (String) $rrdusuc;
	    return $this;
	}

	/**
	* Get rrdusuc
	*
	* @return null|String
	*/
	public function getRrdusuc()
	{
		return $this->rrdusuc;
	}

	/**
	* Set rrdfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rrdfecc
	* @return Rrdfecc
	*/
	public function setRrdfecc($rrdfecc)
	{
	  $this->rrdfecc = (String) $rrdfecc;
	    return $this;
	}

	/**
	* Get rrdfecc
	*
	* @return null|Date
	*/
	public function getRrdfecc()
	{
		return $this->rrdfecc;
	}

	/**
	* Set rrdusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rrdusum
	* @return Rrdusum
	*/
	public function setRrdusum($rrdusum)
	{
	  $this->rrdusum = (String) $rrdusum;
	    return $this;
	}

	/**
	* Get rrdusum
	*
	* @return null|String
	*/
	public function getRrdusum()
	{
		return $this->rrdusum;
	}

	/**
	* Set rrdfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rrdfecm
	* @return Rrdfecm
	*/
	public function setRrdfecm($rrdfecm)
	{
	  $this->rrdfecm = (String) $rrdfecm;
	    return $this;
	}

	/**
	* Get rrdfecm
	*
	* @return null|Date
	*/
	public function getRrdfecm()
	{
		return $this->rrdfecm;
	}

	/**
	* Set rrdtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rrdtask
	* @return Rrdtask
	*/
	public function setRrdtask($rrdtask)
	{
	  $this->rrdtask = (String) $rrdtask;
	    return $this;
	}

	/**
	* Get rrdtask
	*
	* @return null|String
	*/
	public function getRrdtask()
	{
		return $this->rrdtask;
	}

	/**
	* Set rrdpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rrdpara
	* @return Rrdpara
	*/
	public function setRrdpara($rrdpara)
	{
	  $this->rrdpara = (Integer) $rrdpara;
	    return $this;
	}

	/**
	* Get rrdpara
	*
	* @return null|Integer
	*/
	public function getRrdpara()
	{
		return $this->rrdpara;
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

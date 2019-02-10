<?php
 /**
 * Model of the Trpriv table
 *
 * It is used to convert the   Trpriv entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trpriv
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trpriv
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Privilegios de Perfiles
		*/
		protected $rprsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Perfiles de Usuarios
		*/
		protected $rpesecu;
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
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Menúes y Opciones
		*/
		protected $rnosecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estado del Privilegio
		*/
		protected $rpresta;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Permiso de escritura
		*/
		protected $rprescr;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rprusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rprfecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rprusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rprfecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rprtask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rprpara;

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
	* Name of the table: trpriv
	* 
	 */
	const TABLE="trpriv";

	/**
	*Primary key
*/
		 const PKEY = "rprsecu";



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
		throw new \Exception('Class Entity: Trpriv Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trpriv. Invalid specified property: get'.$name);
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
	* Set rprsecu
	*
	*Estos datos se ingresan en la Opción: Privilegios de Perfiles
	*
	* @parámetro Integer $rprsecu
	* @return Rprsecu
	*/
	public function setRprsecu($rprsecu)
	{
	  $this->rprsecu = (Integer) $rprsecu;
	    return $this;
	}

	/**
	* Get rprsecu
	*
	* @return null|Integer
	*/
	public function getRprsecu()
	{
		return $this->rprsecu;
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
	* Set rnosecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Menúes y Opciones
	*
	* @parámetro Integer $rnosecu
	* @return Rnosecu
	*/
	public function setRnosecu($rnosecu)
	{
	  $this->rnosecu = (Integer) $rnosecu;
	    return $this;
	}

	/**
	* Get rnosecu
	*
	* @return null|Integer
	*/
	public function getRnosecu()
	{
		return $this->rnosecu;
	}

	/**
	* Set rpresta
	*
	*Estado del Privilegio
	*
	* @parámetro Integer $rpresta
	* @return Rpresta
	*/
	public function setRpresta($rpresta)
	{
	  $this->rpresta = (Integer) $rpresta;
	    return $this;
	}

	/**
	* Get rpresta
	*
	* @return null|Integer
	*/
	public function getRpresta()
	{
		return $this->rpresta;
	}

	/**
	* Set rprescr
	*
	*Permiso de escritura
	*
	* @parámetro Integer $rprescr
	* @return Rprescr
	*/
	public function setRprescr($rprescr)
	{
	  $this->rprescr = (Integer) $rprescr;
	    return $this;
	}

	/**
	* Get rprescr
	*
	* @return null|Integer
	*/
	public function getRprescr()
	{
		return $this->rprescr;
	}

	/**
	* Set rprusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rprusuc
	* @return Rprusuc
	*/
	public function setRprusuc($rprusuc)
	{
	  $this->rprusuc = (String) $rprusuc;
	    return $this;
	}

	/**
	* Get rprusuc
	*
	* @return null|String
	*/
	public function getRprusuc()
	{
		return $this->rprusuc;
	}

	/**
	* Set rprfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rprfecc
	* @return Rprfecc
	*/
	public function setRprfecc($rprfecc)
	{
	  $this->rprfecc = (String) $rprfecc;
	    return $this;
	}

	/**
	* Get rprfecc
	*
	* @return null|Date
	*/
	public function getRprfecc()
	{
		return $this->rprfecc;
	}

	/**
	* Set rprusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rprusum
	* @return Rprusum
	*/
	public function setRprusum($rprusum)
	{
	  $this->rprusum = (String) $rprusum;
	    return $this;
	}

	/**
	* Get rprusum
	*
	* @return null|String
	*/
	public function getRprusum()
	{
		return $this->rprusum;
	}

	/**
	* Set rprfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rprfecm
	* @return Rprfecm
	*/
	public function setRprfecm($rprfecm)
	{
	  $this->rprfecm = (String) $rprfecm;
	    return $this;
	}

	/**
	* Get rprfecm
	*
	* @return null|Date
	*/
	public function getRprfecm()
	{
		return $this->rprfecm;
	}

	/**
	* Set rprtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rprtask
	* @return Rprtask
	*/
	public function setRprtask($rprtask)
	{
	  $this->rprtask = (String) $rprtask;
	    return $this;
	}

	/**
	* Get rprtask
	*
	* @return null|String
	*/
	public function getRprtask()
	{
		return $this->rprtask;
	}

	/**
	* Set rprpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rprpara
	* @return Rprpara
	*/
	public function setRprpara($rprpara)
	{
	  $this->rprpara = (Integer) $rprpara;
	    return $this;
	}

	/**
	* Get rprpara
	*
	* @return null|Integer
	*/
	public function getRprpara()
	{
		return $this->rprpara;
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

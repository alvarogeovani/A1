<?php
 /**
 * Model of the Tresod table
 *
 * It is used to convert the   Tresod entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tresod
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Tresod
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Opción: Maestro de Estructura Organizacional (Detalle)
		*/
		protected $redsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Opción: Maestro de Estructura Organizacional (Cabecera)
		*/
		protected $rehsecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código del Detalle
		*/
		protected $redcode;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción del Detalle
		*/
		protected $reddede;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Valor del Detalle
		*/
		protected $redvade;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $redusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $redfecc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de modificación
		*/
		protected $redusum;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de modificación
		*/
		protected $redfecm;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Tipo de tarea ejecutada
		*/
		protected $redtask;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Banera de borrado
		*/
		protected $redpara;

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
	* Name of the table: tresod
	* 
	 */
	const TABLE="tresod";

	/**
	*Primary key
*/
		 const PKEY = "redsecu";



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
		throw new \Exception('Class Entity: Tresod Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tresod. Invalid specified property: get'.$name);
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
	* Set redsecu
	*
	*Opción: Maestro de Estructura Organizacional (Detalle)
	*
	* @parámetro Integer $redsecu
	* @return Redsecu
	*/
	public function setRedsecu($redsecu)
	{
	  $this->redsecu = (Integer) $redsecu;
	    return $this;
	}

	/**
	* Get redsecu
	*
	* @return null|Integer
	*/
	public function getRedsecu()
	{
		return $this->redsecu;
	}

	/**
	* Set rehsecu
	*
	*Opción: Maestro de Estructura Organizacional (Cabecera)
	*
	* @parámetro Integer $rehsecu
	* @return Rehsecu
	*/
	public function setRehsecu($rehsecu)
	{
	  $this->rehsecu = (Integer) $rehsecu;
	    return $this;
	}

	/**
	* Get rehsecu
	*
	* @return null|Integer
	*/
	public function getRehsecu()
	{
		return $this->rehsecu;
	}

	/**
	* Set redcode
	*
	*Código del Detalle
	*
	* @parámetro String $redcode
	* @return Redcode
	*/
	public function setRedcode($redcode)
	{
	  $this->redcode = (String) $redcode;
	    return $this;
	}

	/**
	* Get redcode
	*
	* @return null|String
	*/
	public function getRedcode()
	{
		return $this->redcode;
	}

	/**
	* Set reddede
	*
	*Descripción del Detalle
	*
	* @parámetro String $reddede
	* @return Reddede
	*/
	public function setReddede($reddede)
	{
	  $this->reddede = (String) $reddede;
	    return $this;
	}

	/**
	* Get reddede
	*
	* @return null|String
	*/
	public function getReddede()
	{
		return $this->reddede;
	}

	/**
	* Set redvade
	*
	*Valor del Detalle
	*
	* @parámetro String $redvade
	* @return Redvade
	*/
	public function setRedvade($redvade)
	{
	  $this->redvade = (String) $redvade;
	    return $this;
	}

	/**
	* Get redvade
	*
	* @return null|String
	*/
	public function getRedvade()
	{
		return $this->redvade;
	}

	/**
	* Set redusuc
	*
	*Usuario de creación
	*
	* @parámetro String $redusuc
	* @return Redusuc
	*/
	public function setRedusuc($redusuc)
	{
	  $this->redusuc = (String) $redusuc;
	    return $this;
	}

	/**
	* Get redusuc
	*
	* @return null|String
	*/
	public function getRedusuc()
	{
		return $this->redusuc;
	}

	/**
	* Set redfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $redfecc
	* @return Redfecc
	*/
	public function setRedfecc($redfecc)
	{
	  $this->redfecc = (String) $redfecc;
	    return $this;
	}

	/**
	* Get redfecc
	*
	* @return null|Date
	*/
	public function getRedfecc()
	{
		return $this->redfecc;
	}

	/**
	* Set redusum
	*
	*Usuario de modificación
	*
	* @parámetro String $redusum
	* @return Redusum
	*/
	public function setRedusum($redusum)
	{
	  $this->redusum = (String) $redusum;
	    return $this;
	}

	/**
	* Get redusum
	*
	* @return null|String
	*/
	public function getRedusum()
	{
		return $this->redusum;
	}

	/**
	* Set redfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $redfecm
	* @return Redfecm
	*/
	public function setRedfecm($redfecm)
	{
	  $this->redfecm = (String) $redfecm;
	    return $this;
	}

	/**
	* Get redfecm
	*
	* @return null|Date
	*/
	public function getRedfecm()
	{
		return $this->redfecm;
	}

	/**
	* Set redtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $redtask
	* @return Redtask
	*/
	public function setRedtask($redtask)
	{
	  $this->redtask = (String) $redtask;
	    return $this;
	}

	/**
	* Get redtask
	*
	* @return null|String
	*/
	public function getRedtask()
	{
		return $this->redtask;
	}

	/**
	* Set redpara
	*
	*Banera de borrado
	*
	* @parámetro Integer $redpara
	* @return Redpara
	*/
	public function setRedpara($redpara)
	{
	  $this->redpara = (Integer) $redpara;
	    return $this;
	}

	/**
	* Get redpara
	*
	* @return null|Integer
	*/
	public function getRedpara()
	{
		return $this->redpara;
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

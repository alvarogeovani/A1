<?php
 /**
 * Model of the Tresoh table
 *
 * It is used to convert the   Tresoh entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tresoh
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Tresoh
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Opción: Maestro de Estructura Organizacional (Cabecera)
		*/
		protected $rehsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Opción: Maestro de Estructura Organizacional (Cabecera)
		*/
		protected $treRehsecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de la Estructura
		*/
		protected $rehcoes;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre de la Estructura
		*/
		protected $rehnomb;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Alias de la Estructura
		*/
		protected $rehales;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de la Estructura
		*/
		protected $rehdees;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Orden de Despliegue
		*/
		protected $rehorde;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Nivel de la Estructura
		*/
		protected $rehnive;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Bandera de último nivel
		*/
		protected $rehbaun;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Parámetros Extras para cada Estructura
		*/
		protected $rehpaex;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación de la Estructura
		*/
		protected $rehsitu;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rehusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rehfecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rehusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rehfecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rehtask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rehpara;

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
	* Name of the table: tresoh
	* 
	 */
	const TABLE="tresoh";

	/**
	*Primary key
*/
		 const PKEY = "rehsecu";



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
		throw new \Exception('Class Entity: Tresoh Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tresoh. Invalid specified property: get'.$name);
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
	* Set treRehsecu
	*
	*Opción: Maestro de Estructura Organizacional (Cabecera)
	*
	* @parámetro Integer $treRehsecu
	* @return TreRehsecu
	*/
	public function setTreRehsecu($treRehsecu)
	{
	  $this->treRehsecu = (Integer) $treRehsecu;
	    return $this;
	}

	/**
	* Get treRehsecu
	*
	* @return null|Integer
	*/
	public function getTreRehsecu()
	{
		return $this->treRehsecu;
	}

	/**
	* Set rehcoes
	*
	*Código de la Estructura
	*
	* @parámetro String $rehcoes
	* @return Rehcoes
	*/
	public function setRehcoes($rehcoes)
	{
	  $this->rehcoes = (String) $rehcoes;
	    return $this;
	}

	/**
	* Get rehcoes
	*
	* @return null|String
	*/
	public function getRehcoes()
	{
		return $this->rehcoes;
	}

	/**
	* Set rehnomb
	*
	*Nombre de la Estructura
	*
	* @parámetro String $rehnomb
	* @return Rehnomb
	*/
	public function setRehnomb($rehnomb)
	{
	  $this->rehnomb = (String) $rehnomb;
	    return $this;
	}

	/**
	* Get rehnomb
	*
	* @return null|String
	*/
	public function getRehnomb()
	{
		return $this->rehnomb;
	}

	/**
	* Set rehales
	*
	*Alias de la Estructura
	*
	* @parámetro String $rehales
	* @return Rehales
	*/
	public function setRehales($rehales)
	{
	  $this->rehales = (String) $rehales;
	    return $this;
	}

	/**
	* Get rehales
	*
	* @return null|String
	*/
	public function getRehales()
	{
		return $this->rehales;
	}

	/**
	* Set rehdees
	*
	*Descripción de la Estructura
	*
	* @parámetro String $rehdees
	* @return Rehdees
	*/
	public function setRehdees($rehdees)
	{
	  $this->rehdees = (String) $rehdees;
	    return $this;
	}

	/**
	* Get rehdees
	*
	* @return null|String
	*/
	public function getRehdees()
	{
		return $this->rehdees;
	}

	/**
	* Set rehorde
	*
	*Orden de Despliegue
	*
	* @parámetro Integer $rehorde
	* @return Rehorde
	*/
	public function setRehorde($rehorde)
	{
	  $this->rehorde = (Integer) $rehorde;
	    return $this;
	}

	/**
	* Get rehorde
	*
	* @return null|Integer
	*/
	public function getRehorde()
	{
		return $this->rehorde;
	}

	/**
	* Set rehnive
	*
	*Nivel de la Estructura
	*
	* @parámetro Integer $rehnive
	* @return Rehnive
	*/
	public function setRehnive($rehnive)
	{
	  $this->rehnive = (Integer) $rehnive;
	    return $this;
	}

	/**
	* Get rehnive
	*
	* @return null|Integer
	*/
	public function getRehnive()
	{
		return $this->rehnive;
	}

	/**
	* Set rehbaun
	*
	*Bandera de último nivel
	*
	* @parámetro Integer $rehbaun
	* @return Rehbaun
	*/
	public function setRehbaun($rehbaun)
	{
	  $this->rehbaun = (Integer) $rehbaun;
	    return $this;
	}

	/**
	* Get rehbaun
	*
	* @return null|Integer
	*/
	public function getRehbaun()
	{
		return $this->rehbaun;
	}

	/**
	* Set rehpaex
	*
	*Parámetros Extras para cada Estructura
	*
	* @parámetro String $rehpaex
	* @return Rehpaex
	*/
	public function setRehpaex($rehpaex)
	{
	  $this->rehpaex = (String) $rehpaex;
	    return $this;
	}

	/**
	* Get rehpaex
	*
	* @return null|String
	*/
	public function getRehpaex()
	{
		return $this->rehpaex;
	}

	/**
	* Set rehsitu
	*
	*Situación de la Estructura
	*
	* @parámetro Integer $rehsitu
	* @return Rehsitu
	*/
	public function setRehsitu($rehsitu)
	{
	  $this->rehsitu = (Integer) $rehsitu;
	    return $this;
	}

	/**
	* Get rehsitu
	*
	* @return null|Integer
	*/
	public function getRehsitu()
	{
		return $this->rehsitu;
	}

	/**
	* Set rehusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rehusuc
	* @return Rehusuc
	*/
	public function setRehusuc($rehusuc)
	{
	  $this->rehusuc = (String) $rehusuc;
	    return $this;
	}

	/**
	* Get rehusuc
	*
	* @return null|String
	*/
	public function getRehusuc()
	{
		return $this->rehusuc;
	}

	/**
	* Set rehfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rehfecc
	* @return Rehfecc
	*/
	public function setRehfecc($rehfecc)
	{
	  $this->rehfecc = (String) $rehfecc;
	    return $this;
	}

	/**
	* Get rehfecc
	*
	* @return null|Date
	*/
	public function getRehfecc()
	{
		return $this->rehfecc;
	}

	/**
	* Set rehusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rehusum
	* @return Rehusum
	*/
	public function setRehusum($rehusum)
	{
	  $this->rehusum = (String) $rehusum;
	    return $this;
	}

	/**
	* Get rehusum
	*
	* @return null|String
	*/
	public function getRehusum()
	{
		return $this->rehusum;
	}

	/**
	* Set rehfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rehfecm
	* @return Rehfecm
	*/
	public function setRehfecm($rehfecm)
	{
	  $this->rehfecm = (String) $rehfecm;
	    return $this;
	}

	/**
	* Get rehfecm
	*
	* @return null|Date
	*/
	public function getRehfecm()
	{
		return $this->rehfecm;
	}

	/**
	* Set rehtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rehtask
	* @return Rehtask
	*/
	public function setRehtask($rehtask)
	{
	  $this->rehtask = (String) $rehtask;
	    return $this;
	}

	/**
	* Get rehtask
	*
	* @return null|String
	*/
	public function getRehtask()
	{
		return $this->rehtask;
	}

	/**
	* Set rehpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rehpara
	* @return Rehpara
	*/
	public function setRehpara($rehpara)
	{
	  $this->rehpara = (Integer) $rehpara;
	    return $this;
	}

	/**
	* Get rehpara
	*
	* @return null|Integer
	*/
	public function getRehpara()
	{
		return $this->rehpara;
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

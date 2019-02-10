<?php
 /**
 * Model of the Tropcd table
 *
 * It is used to convert the   Tropcd entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tropcd
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Tropcd
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Menúes y Opciones
		*/
		protected $rpasec2;
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
		* Field hidden in the form or handled internally
		* Tipo Parámetro del Formulario
		*/
		protected $rpatipo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Idioma
		*/
		protected $rpaidio;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre del Parámetro
		*/
		protected $rpanomb;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Query para ejecutar y llenar la lista
		*/
		protected $rpasql;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Parámetros extras para el Formulario
		*/
		protected $rpaextr;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rpausuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rpafecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rpausum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rpafecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rpatask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rpapara;

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
	* Name of the table: tropcd
	* 
	 */
	const TABLE="tropcd";

	/**
	*Primary key
*/
		 const PKEY = "rpasec2";



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
		throw new \Exception('Class Entity: Tropcd Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tropcd. Invalid specified property: get'.$name);
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
	* Set rpasec2
	*
	*Estos datos se ingresan en la Opción: Maestro de Menúes y Opciones
	*
	* @parámetro Integer $rpasec2
	* @return Rpasec2
	*/
	public function setRpasec2($rpasec2)
	{
	  $this->rpasec2 = (Integer) $rpasec2;
	    return $this;
	}

	/**
	* Get rpasec2
	*
	* @return null|Integer
	*/
	public function getRpasec2()
	{
		return $this->rpasec2;
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
	* Set rpatipo
	*
	*Tipo Parámetro del Formulario
	*
	* @parámetro Integer $rpatipo
	* @return Rpatipo
	*/
	public function setRpatipo($rpatipo)
	{
	  $this->rpatipo = (Integer) $rpatipo;
	    return $this;
	}

	/**
	* Get rpatipo
	*
	* @return null|Integer
	*/
	public function getRpatipo()
	{
		return $this->rpatipo;
	}

	/**
	* Set rpaidio
	*
	*Idioma
	*
	* @parámetro String $rpaidio
	* @return Rpaidio
	*/
	public function setRpaidio($rpaidio)
	{
	  $this->rpaidio = (String) $rpaidio;
	    return $this;
	}

	/**
	* Get rpaidio
	*
	* @return null|String
	*/
	public function getRpaidio()
	{
		return $this->rpaidio;
	}

	/**
	* Set rpanomb
	*
	*Nombre del Parámetro
	*
	* @parámetro String $rpanomb
	* @return Rpanomb
	*/
	public function setRpanomb($rpanomb)
	{
	  $this->rpanomb = (String) $rpanomb;
	    return $this;
	}

	/**
	* Get rpanomb
	*
	* @return null|String
	*/
	public function getRpanomb()
	{
		return $this->rpanomb;
	}

	/**
	* Set rpasql
	*
	*Query para ejecutar y llenar la lista
	*
	* @parámetro String $rpasql
	* @return Rpasql
	*/
	public function setRpasql($rpasql)
	{
	  $this->rpasql = (String) $rpasql;
	    return $this;
	}

	/**
	* Get rpasql
	*
	* @return null|String
	*/
	public function getRpasql()
	{
		return $this->rpasql;
	}

	/**
	* Set rpaextr
	*
	*Parámetros extras para el Formulario
	*
	* @parámetro String $rpaextr
	* @return Rpaextr
	*/
	public function setRpaextr($rpaextr)
	{
	  $this->rpaextr = (String) $rpaextr;
	    return $this;
	}

	/**
	* Get rpaextr
	*
	* @return null|String
	*/
	public function getRpaextr()
	{
		return $this->rpaextr;
	}

	/**
	* Set rpausuc
	*
	*Usuario de creación
	*
	* @parámetro String $rpausuc
	* @return Rpausuc
	*/
	public function setRpausuc($rpausuc)
	{
	  $this->rpausuc = (String) $rpausuc;
	    return $this;
	}

	/**
	* Get rpausuc
	*
	* @return null|String
	*/
	public function getRpausuc()
	{
		return $this->rpausuc;
	}

	/**
	* Set rpafecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rpafecc
	* @return Rpafecc
	*/
	public function setRpafecc($rpafecc)
	{
	  $this->rpafecc = (String) $rpafecc;
	    return $this;
	}

	/**
	* Get rpafecc
	*
	* @return null|Date
	*/
	public function getRpafecc()
	{
		return $this->rpafecc;
	}

	/**
	* Set rpausum
	*
	*Usuario de modificación
	*
	* @parámetro String $rpausum
	* @return Rpausum
	*/
	public function setRpausum($rpausum)
	{
	  $this->rpausum = (String) $rpausum;
	    return $this;
	}

	/**
	* Get rpausum
	*
	* @return null|String
	*/
	public function getRpausum()
	{
		return $this->rpausum;
	}

	/**
	* Set rpafecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rpafecm
	* @return Rpafecm
	*/
	public function setRpafecm($rpafecm)
	{
	  $this->rpafecm = (String) $rpafecm;
	    return $this;
	}

	/**
	* Get rpafecm
	*
	* @return null|Date
	*/
	public function getRpafecm()
	{
		return $this->rpafecm;
	}

	/**
	* Set rpatask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rpatask
	* @return Rpatask
	*/
	public function setRpatask($rpatask)
	{
	  $this->rpatask = (String) $rpatask;
	    return $this;
	}

	/**
	* Get rpatask
	*
	* @return null|String
	*/
	public function getRpatask()
	{
		return $this->rpatask;
	}

	/**
	* Set rpapara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rpapara
	* @return Rpapara
	*/
	public function setRpapara($rpapara)
	{
	  $this->rpapara = (Integer) $rpapara;
	    return $this;
	}

	/**
	* Get rpapara
	*
	* @return null|Integer
	*/
	public function getRpapara()
	{
		return $this->rpapara;
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

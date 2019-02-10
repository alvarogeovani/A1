<?php
 /**
 * Model of the Trdipo table
 *
 * It is used to convert the   Trdipo entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trdipo
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trdipo
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: División Política
		*/
		protected $rdisecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Principal
		*/
		protected $rdicodi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Padre
		*/
		protected $rdicpad;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre Largo
		*/
		protected $rdinoml;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre Corto
		*/
		protected $rdinomc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Nivel
		*/
		protected $rdinive;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Orden
		*/
		protected $rdiorde;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rdiusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rdifecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rdiusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tdifecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rditask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rdipara;

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
	* Name of the table: trdipo
	* 
	 */
	const TABLE="trdipo";

	/**
	*Primary key
*/
		 const PKEY = "rdisecu";



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
		throw new \Exception('Class Entity: Trdipo Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trdipo. Invalid specified property: get'.$name);
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
	* Set rdisecu
	*
	*Estos datos se ingresan en la Opción: División Política
	*
	* @parámetro Integer $rdisecu
	* @return Rdisecu
	*/
	public function setRdisecu($rdisecu)
	{
	  $this->rdisecu = (Integer) $rdisecu;
	    return $this;
	}

	/**
	* Get rdisecu
	*
	* @return null|Integer
	*/
	public function getRdisecu()
	{
		return $this->rdisecu;
	}

	/**
	* Set rdicodi
	*
	*Código Principal
	*
	* @parámetro String $rdicodi
	* @return Rdicodi
	*/
	public function setRdicodi($rdicodi)
	{
	  $this->rdicodi = (String) $rdicodi;
	    return $this;
	}

	/**
	* Get rdicodi
	*
	* @return null|String
	*/
	public function getRdicodi()
	{
		return $this->rdicodi;
	}

	/**
	* Set rdicpad
	*
	*Código Padre
	*
	* @parámetro String $rdicpad
	* @return Rdicpad
	*/
	public function setRdicpad($rdicpad)
	{
	  $this->rdicpad = (String) $rdicpad;
	    return $this;
	}

	/**
	* Get rdicpad
	*
	* @return null|String
	*/
	public function getRdicpad()
	{
		return $this->rdicpad;
	}

	/**
	* Set rdinoml
	*
	*Nombre Largo
	*
	* @parámetro String $rdinoml
	* @return Rdinoml
	*/
	public function setRdinoml($rdinoml)
	{
	  $this->rdinoml = (String) $rdinoml;
	    return $this;
	}

	/**
	* Get rdinoml
	*
	* @return null|String
	*/
	public function getRdinoml()
	{
		return $this->rdinoml;
	}

	/**
	* Set rdinomc
	*
	*Nombre Corto
	*
	* @parámetro String $rdinomc
	* @return Rdinomc
	*/
	public function setRdinomc($rdinomc)
	{
	  $this->rdinomc = (String) $rdinomc;
	    return $this;
	}

	/**
	* Get rdinomc
	*
	* @return null|String
	*/
	public function getRdinomc()
	{
		return $this->rdinomc;
	}

	/**
	* Set rdinive
	*
	*Nivel
	*
	* @parámetro Integer $rdinive
	* @return Rdinive
	*/
	public function setRdinive($rdinive)
	{
	  $this->rdinive = (Integer) $rdinive;
	    return $this;
	}

	/**
	* Get rdinive
	*
	* @return null|Integer
	*/
	public function getRdinive()
	{
		return $this->rdinive;
	}

	/**
	* Set rdiorde
	*
	*Orden
	*
	* @parámetro Integer $rdiorde
	* @return Rdiorde
	*/
	public function setRdiorde($rdiorde)
	{
	  $this->rdiorde = (Integer) $rdiorde;
	    return $this;
	}

	/**
	* Get rdiorde
	*
	* @return null|Integer
	*/
	public function getRdiorde()
	{
		return $this->rdiorde;
	}

	/**
	* Set rdiusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rdiusuc
	* @return Rdiusuc
	*/
	public function setRdiusuc($rdiusuc)
	{
	  $this->rdiusuc = (String) $rdiusuc;
	    return $this;
	}

	/**
	* Get rdiusuc
	*
	* @return null|String
	*/
	public function getRdiusuc()
	{
		return $this->rdiusuc;
	}

	/**
	* Set rdifecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rdifecc
	* @return Rdifecc
	*/
	public function setRdifecc($rdifecc)
	{
	  $this->rdifecc = (String) $rdifecc;
	    return $this;
	}

	/**
	* Get rdifecc
	*
	* @return null|Date
	*/
	public function getRdifecc()
	{
		return $this->rdifecc;
	}

	/**
	* Set rdiusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rdiusum
	* @return Rdiusum
	*/
	public function setRdiusum($rdiusum)
	{
	  $this->rdiusum = (String) $rdiusum;
	    return $this;
	}

	/**
	* Get rdiusum
	*
	* @return null|String
	*/
	public function getRdiusum()
	{
		return $this->rdiusum;
	}

	/**
	* Set tdifecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tdifecm
	* @return Tdifecm
	*/
	public function setTdifecm($tdifecm)
	{
	  $this->tdifecm = (String) $tdifecm;
	    return $this;
	}

	/**
	* Get tdifecm
	*
	* @return null|Date
	*/
	public function getTdifecm()
	{
		return $this->tdifecm;
	}

	/**
	* Set rditask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rditask
	* @return Rditask
	*/
	public function setRditask($rditask)
	{
	  $this->rditask = (String) $rditask;
	    return $this;
	}

	/**
	* Get rditask
	*
	* @return null|String
	*/
	public function getRditask()
	{
		return $this->rditask;
	}

	/**
	* Set rdipara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rdipara
	* @return Rdipara
	*/
	public function setRdipara($rdipara)
	{
	  $this->rdipara = (Integer) $rdipara;
	    return $this;
	}

	/**
	* Get rdipara
	*
	* @return null|Integer
	*/
	public function getRdipara()
	{
		return $this->rdipara;
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

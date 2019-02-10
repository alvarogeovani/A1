<?php
 /**
 * Model of the Trmsus table
 *
 * It is used to convert the   Trmsus entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trmsus
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trmsus
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Mensajes para el Usuario
		*/
		protected $rmssecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código del Mensaje
		*/
		protected $varca01;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nombre del mensaje
		*/
		protected $rmsmens;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Estado Mensaje del Usuario
		*/
		protected $rmssitu;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Idioma
		*/
		protected $rmsidio;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Descripción
		*/
		protected $rmsdesc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de creación
		*/
		protected $rmsusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rmsfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rmsusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rmsfecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rmstask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rmspara;

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
	* Name of the table: trmsus
	* 
	 */
	const TABLE="trmsus";

	/**
	*Primary key
*/
		 const PKEY = "rmssecu";



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
		throw new \Exception('Class Entity: Trmsus Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trmsus. Invalid specified property: get'.$name);
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
	* Set rmssecu
	*
	*Estos datos se ingresan en la Opción: Mensajes para el Usuario
	*
	* @parámetro Integer $rmssecu
	* @return Rmssecu
	*/
	public function setRmssecu($rmssecu)
	{
	  $this->rmssecu = (Integer) $rmssecu;
	    return $this;
	}

	/**
	* Get rmssecu
	*
	* @return null|Integer
	*/
	public function getRmssecu()
	{
		return $this->rmssecu;
	}

	/**
	* Set varca01
	*
	*Código del Mensaje
	*
	* @parámetro String $varca01
	* @return Varca01
	*/
	public function setVarca01($varca01)
	{
	  $this->varca01 = (String) $varca01;
	    return $this;
	}

	/**
	* Get varca01
	*
	* @return null|String
	*/
	public function getVarca01()
	{
		return $this->varca01;
	}

	/**
	* Set rmsmens
	*
	*Nombre del mensaje
	*
	* @parámetro String $rmsmens
	* @return Rmsmens
	*/
	public function setRmsmens($rmsmens)
	{
	  $this->rmsmens = (String) $rmsmens;
	    return $this;
	}

	/**
	* Get rmsmens
	*
	* @return null|String
	*/
	public function getRmsmens()
	{
		return $this->rmsmens;
	}

	/**
	* Set rmssitu
	*
	*Estado Mensaje del Usuario
	*
	* @parámetro Integer $rmssitu
	* @return Rmssitu
	*/
	public function setRmssitu($rmssitu)
	{
	  $this->rmssitu = (Integer) $rmssitu;
	    return $this;
	}

	/**
	* Get rmssitu
	*
	* @return null|Integer
	*/
	public function getRmssitu()
	{
		return $this->rmssitu;
	}

	/**
	* Set rmsidio
	*
	*Idioma
	*
	* @parámetro Integer $rmsidio
	* @return Rmsidio
	*/
	public function setRmsidio($rmsidio)
	{
	  $this->rmsidio = (Integer) $rmsidio;
	    return $this;
	}

	/**
	* Get rmsidio
	*
	* @return null|Integer
	*/
	public function getRmsidio()
	{
		return $this->rmsidio;
	}

	/**
	* Set rmsdesc
	*
	*Descripción
	*
	* @parámetro String $rmsdesc
	* @return Rmsdesc
	*/
	public function setRmsdesc($rmsdesc)
	{
	  $this->rmsdesc = (String) $rmsdesc;
	    return $this;
	}

	/**
	* Get rmsdesc
	*
	* @return null|String
	*/
	public function getRmsdesc()
	{
		return $this->rmsdesc;
	}

	/**
	* Set rmsusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rmsusuc
	* @return Rmsusuc
	*/
	public function setRmsusuc($rmsusuc)
	{
	  $this->rmsusuc = (String) $rmsusuc;
	    return $this;
	}

	/**
	* Get rmsusuc
	*
	* @return null|String
	*/
	public function getRmsusuc()
	{
		return $this->rmsusuc;
	}

	/**
	* Set rmsfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rmsfecc
	* @return Rmsfecc
	*/
	public function setRmsfecc($rmsfecc)
	{
	  $this->rmsfecc = (String) $rmsfecc;
	    return $this;
	}

	/**
	* Get rmsfecc
	*
	* @return null|Date
	*/
	public function getRmsfecc()
	{
		return $this->rmsfecc;
	}

	/**
	* Set rmsusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rmsusum
	* @return Rmsusum
	*/
	public function setRmsusum($rmsusum)
	{
	  $this->rmsusum = (String) $rmsusum;
	    return $this;
	}

	/**
	* Get rmsusum
	*
	* @return null|String
	*/
	public function getRmsusum()
	{
		return $this->rmsusum;
	}

	/**
	* Set rmsfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rmsfecm
	* @return Rmsfecm
	*/
	public function setRmsfecm($rmsfecm)
	{
	  $this->rmsfecm = (String) $rmsfecm;
	    return $this;
	}

	/**
	* Get rmsfecm
	*
	* @return null|Date
	*/
	public function getRmsfecm()
	{
		return $this->rmsfecm;
	}

	/**
	* Set rmstask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rmstask
	* @return Rmstask
	*/
	public function setRmstask($rmstask)
	{
	  $this->rmstask = (String) $rmstask;
	    return $this;
	}

	/**
	* Get rmstask
	*
	* @return null|String
	*/
	public function getRmstask()
	{
		return $this->rmstask;
	}

	/**
	* Set rmspara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rmspara
	* @return Rmspara
	*/
	public function setRmspara($rmspara)
	{
	  $this->rmspara = (Integer) $rmspara;
	    return $this;
	}

	/**
	* Get rmspara
	*
	* @return null|Integer
	*/
	public function getRmspara()
	{
		return $this->rmspara;
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

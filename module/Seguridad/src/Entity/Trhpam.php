<?php
 /**
 * Model of the Trhpam table
 *
 * It is used to convert the   Trhpam entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trhpam
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trhpam
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción : Histórico Parámetros del Sistema (Módulos)
		*/
		protected $rhmsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Acceso a Parámetros por Módulo
		*/
		protected $rapsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Secuencial del Módulo insertado
		*/
		protected $rmoseau;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Secuencial de Parámetros del Sistema (Cabecera)
		*/
		protected $rtbseau;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Comentario
		*/
		protected $rhmcome;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación
		*/
		protected $rhmsitu;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Proceso (Fecha y Hora)
		*/
		protected $rhmfepr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Identificación del computador
		*/
		protected $rhmidco;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de creación
		*/
		protected $rhmusuc;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de creación
		*/
		protected $rhmfecc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de modificación
		*/
		protected $rhmusum;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de modificación
		*/
		protected $rhmfecm;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Tipo de tarea ejecutada
		*/
		protected $rhmtask;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Bandera de borrado
		*/
		protected $rhmpara;

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
	* Name of the table: trhpam
	* 
	 */
	const TABLE="trhpam";

	/**
	*Primary key
*/
		 const PKEY = "rhmsecu";



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
		throw new \Exception('Class Entity: Trhpam Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trhpam. Invalid specified property: get'.$name);
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
	* Set rhmsecu
	*
	*Estos datos se ingresan en la Opción : Histórico Parámetros del Sistema (Módulos)
	*
	* @parámetro Integer $rhmsecu
	* @return Rhmsecu
	*/
	public function setRhmsecu($rhmsecu)
	{
	  $this->rhmsecu = (Integer) $rhmsecu;
	    return $this;
	}

	/**
	* Get rhmsecu
	*
	* @return null|Integer
	*/
	public function getRhmsecu()
	{
		return $this->rhmsecu;
	}

	/**
	* Set rapsecu
	*
	*Estos datos se ingresan en la Opción: Acceso a Parámetros por Módulo
	*
	* @parámetro Integer $rapsecu
	* @return Rapsecu
	*/
	public function setRapsecu($rapsecu)
	{
	  $this->rapsecu = (Integer) $rapsecu;
	    return $this;
	}

	/**
	* Get rapsecu
	*
	* @return null|Integer
	*/
	public function getRapsecu()
	{
		return $this->rapsecu;
	}

	/**
	* Set rmoseau
	*
	*Secuencial del Módulo insertado
	*
	* @parámetro Integer $rmoseau
	* @return Rmoseau
	*/
	public function setRmoseau($rmoseau)
	{
	  $this->rmoseau = (Integer) $rmoseau;
	    return $this;
	}

	/**
	* Get rmoseau
	*
	* @return null|Integer
	*/
	public function getRmoseau()
	{
		return $this->rmoseau;
	}

	/**
	* Set rtbseau
	*
	*Secuencial de Parámetros del Sistema (Cabecera)
	*
	* @parámetro Integer $rtbseau
	* @return Rtbseau
	*/
	public function setRtbseau($rtbseau)
	{
	  $this->rtbseau = (Integer) $rtbseau;
	    return $this;
	}

	/**
	* Get rtbseau
	*
	* @return null|Integer
	*/
	public function getRtbseau()
	{
		return $this->rtbseau;
	}

	/**
	* Set rhmcome
	*
	*Comentario
	*
	* @parámetro String $rhmcome
	* @return Rhmcome
	*/
	public function setRhmcome($rhmcome)
	{
	  $this->rhmcome = (String) $rhmcome;
	    return $this;
	}

	/**
	* Get rhmcome
	*
	* @return null|String
	*/
	public function getRhmcome()
	{
		return $this->rhmcome;
	}

	/**
	* Set rhmsitu
	*
	*Situación
	*
	* @parámetro Integer $rhmsitu
	* @return Rhmsitu
	*/
	public function setRhmsitu($rhmsitu)
	{
	  $this->rhmsitu = (Integer) $rhmsitu;
	    return $this;
	}

	/**
	* Get rhmsitu
	*
	* @return null|Integer
	*/
	public function getRhmsitu()
	{
		return $this->rhmsitu;
	}

	/**
	* Set rhmfepr
	*
	*Fecha de Proceso (Fecha y Hora)
	*
	* @parámetro Date $rhmfepr
	* @return Rhmfepr
	*/
	public function setRhmfepr($rhmfepr)
	{
	  $this->rhmfepr = (String) $rhmfepr;
	    return $this;
	}

	/**
	* Get rhmfepr
	*
	* @return null|Date
	*/
	public function getRhmfepr()
	{
		return $this->rhmfepr;
	}

	/**
	* Set rhmidco
	*
	*Identificación del computador
	*
	* @parámetro String $rhmidco
	* @return Rhmidco
	*/
	public function setRhmidco($rhmidco)
	{
	  $this->rhmidco = (String) $rhmidco;
	    return $this;
	}

	/**
	* Get rhmidco
	*
	* @return null|String
	*/
	public function getRhmidco()
	{
		return $this->rhmidco;
	}

	/**
	* Set rhmusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rhmusuc
	* @return Rhmusuc
	*/
	public function setRhmusuc($rhmusuc)
	{
	  $this->rhmusuc = (String) $rhmusuc;
	    return $this;
	}

	/**
	* Get rhmusuc
	*
	* @return null|String
	*/
	public function getRhmusuc()
	{
		return $this->rhmusuc;
	}

	/**
	* Set rhmfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rhmfecc
	* @return Rhmfecc
	*/
	public function setRhmfecc($rhmfecc)
	{
	  $this->rhmfecc = (String) $rhmfecc;
	    return $this;
	}

	/**
	* Get rhmfecc
	*
	* @return null|Date
	*/
	public function getRhmfecc()
	{
		return $this->rhmfecc;
	}

	/**
	* Set rhmusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rhmusum
	* @return Rhmusum
	*/
	public function setRhmusum($rhmusum)
	{
	  $this->rhmusum = (String) $rhmusum;
	    return $this;
	}

	/**
	* Get rhmusum
	*
	* @return null|String
	*/
	public function getRhmusum()
	{
		return $this->rhmusum;
	}

	/**
	* Set rhmfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rhmfecm
	* @return Rhmfecm
	*/
	public function setRhmfecm($rhmfecm)
	{
	  $this->rhmfecm = (String) $rhmfecm;
	    return $this;
	}

	/**
	* Get rhmfecm
	*
	* @return null|Date
	*/
	public function getRhmfecm()
	{
		return $this->rhmfecm;
	}

	/**
	* Set rhmtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rhmtask
	* @return Rhmtask
	*/
	public function setRhmtask($rhmtask)
	{
	  $this->rhmtask = (String) $rhmtask;
	    return $this;
	}

	/**
	* Get rhmtask
	*
	* @return null|String
	*/
	public function getRhmtask()
	{
		return $this->rhmtask;
	}

	/**
	* Set rhmpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rhmpara
	* @return Rhmpara
	*/
	public function setRhmpara($rhmpara)
	{
	  $this->rhmpara = (Integer) $rhmpara;
	    return $this;
	}

	/**
	* Get rhmpara
	*
	* @return null|Integer
	*/
	public function getRhmpara()
	{
		return $this->rhmpara;
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

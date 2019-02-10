<?php
 /**
 * Model of the Trappm table
 *
 * It is used to convert the   Trappm entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trappm
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trappm
{

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
		* Estos datos se ingresan en la Opción: Parámetros del Módulo
		*/
		protected $rtbsec1;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Módulos
		*/
		protected $rmosecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Comentario
		*/
		protected $rapcome;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Derecho de Creación del Parámetro
		*/
		protected $rapdecr;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Derecho de Lectura del Parámetro
		*/
		protected $rapdele;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Derecho de Actualización del Parámetro
		*/
		protected $rapdeac;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Derecho de Borrado del Parámetro
		*/
		protected $rapdebo;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación
		*/
		protected $rapsitu;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rapusuc;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rapfecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rapusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rapfecm;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Tipo de tarea ejecutada
		*/
		protected $raptask;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Bandera de borrado
		*/
		protected $rappara;

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
	* Name of the table: trappm
	* 
	 */
	const TABLE="trappm";

	/**
	*Primary key
*/
		 const PKEY = "rapsecu";



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
		throw new \Exception('Class Entity: Trappm Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trappm. Invalid specified property: get'.$name);
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
	* Set rtbsec1
	*
	*Estos datos se ingresan en la Opción: Parámetros del Módulo
	*
	* @parámetro Integer $rtbsec1
	* @return Rtbsec1
	*/
	public function setRtbsec1($rtbsec1)
	{
	  $this->rtbsec1 = (Integer) $rtbsec1;
	    return $this;
	}

	/**
	* Get rtbsec1
	*
	* @return null|Integer
	*/
	public function getRtbsec1()
	{
		return $this->rtbsec1;
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
	* Set rapcome
	*
	*Comentario
	*
	* @parámetro String $rapcome
	* @return Rapcome
	*/
	public function setRapcome($rapcome)
	{
	  $this->rapcome = (String) $rapcome;
	    return $this;
	}

	/**
	* Get rapcome
	*
	* @return null|String
	*/
	public function getRapcome()
	{
		return $this->rapcome;
	}

	/**
	* Set rapdecr
	*
	*Derecho de Creación del Parámetro
	*
	* @parámetro Integer $rapdecr
	* @return Rapdecr
	*/
	public function setRapdecr($rapdecr)
	{
	  $this->rapdecr = (Integer) $rapdecr;
	    return $this;
	}

	/**
	* Get rapdecr
	*
	* @return null|Integer
	*/
	public function getRapdecr()
	{
		return $this->rapdecr;
	}

	/**
	* Set rapdele
	*
	*Derecho de Lectura del Parámetro
	*
	* @parámetro Integer $rapdele
	* @return Rapdele
	*/
	public function setRapdele($rapdele)
	{
	  $this->rapdele = (Integer) $rapdele;
	    return $this;
	}

	/**
	* Get rapdele
	*
	* @return null|Integer
	*/
	public function getRapdele()
	{
		return $this->rapdele;
	}

	/**
	* Set rapdeac
	*
	*Derecho de Actualización del Parámetro
	*
	* @parámetro Integer $rapdeac
	* @return Rapdeac
	*/
	public function setRapdeac($rapdeac)
	{
	  $this->rapdeac = (Integer) $rapdeac;
	    return $this;
	}

	/**
	* Get rapdeac
	*
	* @return null|Integer
	*/
	public function getRapdeac()
	{
		return $this->rapdeac;
	}

	/**
	* Set rapdebo
	*
	*Derecho de Borrado del Parámetro
	*
	* @parámetro Integer $rapdebo
	* @return Rapdebo
	*/
	public function setRapdebo($rapdebo)
	{
	  $this->rapdebo = (Integer) $rapdebo;
	    return $this;
	}

	/**
	* Get rapdebo
	*
	* @return null|Integer
	*/
	public function getRapdebo()
	{
		return $this->rapdebo;
	}

	/**
	* Set rapsitu
	*
	*Situación
	*
	* @parámetro Integer $rapsitu
	* @return Rapsitu
	*/
	public function setRapsitu($rapsitu)
	{
	  $this->rapsitu = (Integer) $rapsitu;
	    return $this;
	}

	/**
	* Get rapsitu
	*
	* @return null|Integer
	*/
	public function getRapsitu()
	{
		return $this->rapsitu;
	}

	/**
	* Set rapusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rapusuc
	* @return Rapusuc
	*/
	public function setRapusuc($rapusuc)
	{
	  $this->rapusuc = (String) $rapusuc;
	    return $this;
	}

	/**
	* Get rapusuc
	*
	* @return null|String
	*/
	public function getRapusuc()
	{
		return $this->rapusuc;
	}

	/**
	* Set rapfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rapfecc
	* @return Rapfecc
	*/
	public function setRapfecc($rapfecc)
	{
	  $this->rapfecc = (String) $rapfecc;
	    return $this;
	}

	/**
	* Get rapfecc
	*
	* @return null|Date
	*/
	public function getRapfecc()
	{
		return $this->rapfecc;
	}

	/**
	* Set rapusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rapusum
	* @return Rapusum
	*/
	public function setRapusum($rapusum)
	{
	  $this->rapusum = (String) $rapusum;
	    return $this;
	}

	/**
	* Get rapusum
	*
	* @return null|String
	*/
	public function getRapusum()
	{
		return $this->rapusum;
	}

	/**
	* Set rapfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rapfecm
	* @return Rapfecm
	*/
	public function setRapfecm($rapfecm)
	{
	  $this->rapfecm = (String) $rapfecm;
	    return $this;
	}

	/**
	* Get rapfecm
	*
	* @return null|Date
	*/
	public function getRapfecm()
	{
		return $this->rapfecm;
	}

	/**
	* Set raptask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $raptask
	* @return Raptask
	*/
	public function setRaptask($raptask)
	{
	  $this->raptask = (String) $raptask;
	    return $this;
	}

	/**
	* Get raptask
	*
	* @return null|String
	*/
	public function getRaptask()
	{
		return $this->raptask;
	}

	/**
	* Set rappara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rappara
	* @return Rappara
	*/
	public function setRappara($rappara)
	{
	  $this->rappara = (Integer) $rappara;
	    return $this;
	}

	/**
	* Get rappara
	*
	* @return null|Integer
	*/
	public function getRappara()
	{
		return $this->rappara;
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

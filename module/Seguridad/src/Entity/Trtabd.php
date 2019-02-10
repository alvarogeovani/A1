<?php
 /**
 * Model of the Trtabd table
 *
 * It is used to convert the   Trtabd entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trtabd
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trtabd
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Parámetros del Módulo
		*/
		protected $rtbsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Parámetros del Módulo
		*/
		protected $rtbsec1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código del Parámetro
		*/
		protected $rtbiden;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Tabla Relacionada
		*/
		protected $rtbtare;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Específico
		*/
		protected $rtbespe;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Específica del Parámetro
		*/
		protected $rdesesp;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 1
		*/
		protected $rtbalf1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 2
		*/
		protected $rtbalf2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 3
		*/
		protected $rtbalf3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 4
		*/
		protected $rtbalf4;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 5
		*/
		protected $rtbalf5;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 6
		*/
		protected $rtbalf6;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 7
		*/
		protected $rtbalf7;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 8
		*/
		protected $rtbalf8;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 9
		*/
		protected $rtbalf9;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 10
		*/
		protected $rtbal10;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Dato Numérico 1
		*/
		protected $rtbnum1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Dato Numérico 2
		*/
		protected $rtbnum2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Dato Numérico 3
		*/
		protected $rtbnum3;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rtbusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rtbfecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rtbusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modifiación
		*/
		protected $rtbfecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rtbtask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rtbpara;

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
	* Name of the table: trtabd
	* 
	 */
	const TABLE="trtabd";

	/**
	*Primary key
*/
		 const PKEY = "rtbsecu";



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
		throw new \Exception('Class Entity: Trtabd Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trtabd. Invalid specified property: get'.$name);
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
	* Set rtbsecu
	*
	*Estos datos se ingresan en la Opción: Parámetros del Módulo
	*
	* @parámetro Integer $rtbsecu
	* @return Rtbsecu
	*/
	public function setRtbsecu($rtbsecu)
	{
	  $this->rtbsecu = (Integer) $rtbsecu;
	    return $this;
	}

	/**
	* Get rtbsecu
	*
	* @return null|Integer
	*/
	public function getRtbsecu()
	{
		return $this->rtbsecu;
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
	* Set rtbiden
	*
	*Código del Parámetro
	*
	* @parámetro String $rtbiden
	* @return Rtbiden
	*/
	public function setRtbiden($rtbiden)
	{
	  $this->rtbiden = (String) $rtbiden;
	    return $this;
	}

	/**
	* Get rtbiden
	*
	* @return null|String
	*/
	public function getRtbiden()
	{
		return $this->rtbiden;
	}

	/**
	* Set rtbtare
	*
	*Código de Tabla Relacionada
	*
	* @parámetro String $rtbtare
	* @return Rtbtare
	*/
	public function setRtbtare($rtbtare)
	{
	  $this->rtbtare = (String) $rtbtare;
	    return $this;
	}

	/**
	* Get rtbtare
	*
	* @return null|String
	*/
	public function getRtbtare()
	{
		return $this->rtbtare;
	}

	/**
	* Set rtbespe
	*
	*Código Específico
	*
	* @parámetro String $rtbespe
	* @return Rtbespe
	*/
	public function setRtbespe($rtbespe)
	{
	  $this->rtbespe = (String) $rtbespe;
	    return $this;
	}

	/**
	* Get rtbespe
	*
	* @return null|String
	*/
	public function getRtbespe()
	{
		return $this->rtbespe;
	}

	/**
	* Set rdesesp
	*
	*Descripción Específica del Parámetro
	*
	* @parámetro String $rdesesp
	* @return Rdesesp
	*/
	public function setRdesesp($rdesesp)
	{
	  $this->rdesesp = (String) $rdesesp;
	    return $this;
	}

	/**
	* Get rdesesp
	*
	* @return null|String
	*/
	public function getRdesesp()
	{
		return $this->rdesesp;
	}

	/**
	* Set rtbalf1
	*
	*Dato Alfanumérico 1
	*
	* @parámetro String $rtbalf1
	* @return Rtbalf1
	*/
	public function setRtbalf1($rtbalf1)
	{
	  $this->rtbalf1 = (String) $rtbalf1;
	    return $this;
	}

	/**
	* Get rtbalf1
	*
	* @return null|String
	*/
	public function getRtbalf1()
	{
		return $this->rtbalf1;
	}

	/**
	* Set rtbalf2
	*
	*Dato Alfanumérico 2
	*
	* @parámetro String $rtbalf2
	* @return Rtbalf2
	*/
	public function setRtbalf2($rtbalf2)
	{
	  $this->rtbalf2 = (String) $rtbalf2;
	    return $this;
	}

	/**
	* Get rtbalf2
	*
	* @return null|String
	*/
	public function getRtbalf2()
	{
		return $this->rtbalf2;
	}

	/**
	* Set rtbalf3
	*
	*Dato Alfanumérico 3
	*
	* @parámetro String $rtbalf3
	* @return Rtbalf3
	*/
	public function setRtbalf3($rtbalf3)
	{
	  $this->rtbalf3 = (String) $rtbalf3;
	    return $this;
	}

	/**
	* Get rtbalf3
	*
	* @return null|String
	*/
	public function getRtbalf3()
	{
		return $this->rtbalf3;
	}

	/**
	* Set rtbalf4
	*
	*Dato Alfanumérico 4
	*
	* @parámetro String $rtbalf4
	* @return Rtbalf4
	*/
	public function setRtbalf4($rtbalf4)
	{
	  $this->rtbalf4 = (String) $rtbalf4;
	    return $this;
	}

	/**
	* Get rtbalf4
	*
	* @return null|String
	*/
	public function getRtbalf4()
	{
		return $this->rtbalf4;
	}

	/**
	* Set rtbalf5
	*
	*Dato Alfanumérico 5
	*
	* @parámetro String $rtbalf5
	* @return Rtbalf5
	*/
	public function setRtbalf5($rtbalf5)
	{
	  $this->rtbalf5 = (String) $rtbalf5;
	    return $this;
	}

	/**
	* Get rtbalf5
	*
	* @return null|String
	*/
	public function getRtbalf5()
	{
		return $this->rtbalf5;
	}

	/**
	* Set rtbalf6
	*
	*Dato Alfanumérico 6
	*
	* @parámetro String $rtbalf6
	* @return Rtbalf6
	*/
	public function setRtbalf6($rtbalf6)
	{
	  $this->rtbalf6 = (String) $rtbalf6;
	    return $this;
	}

	/**
	* Get rtbalf6
	*
	* @return null|String
	*/
	public function getRtbalf6()
	{
		return $this->rtbalf6;
	}

	/**
	* Set rtbalf7
	*
	*Dato Alfanumérico 7
	*
	* @parámetro String $rtbalf7
	* @return Rtbalf7
	*/
	public function setRtbalf7($rtbalf7)
	{
	  $this->rtbalf7 = (String) $rtbalf7;
	    return $this;
	}

	/**
	* Get rtbalf7
	*
	* @return null|String
	*/
	public function getRtbalf7()
	{
		return $this->rtbalf7;
	}

	/**
	* Set rtbalf8
	*
	*Dato Alfanumérico 8
	*
	* @parámetro String $rtbalf8
	* @return Rtbalf8
	*/
	public function setRtbalf8($rtbalf8)
	{
	  $this->rtbalf8 = (String) $rtbalf8;
	    return $this;
	}

	/**
	* Get rtbalf8
	*
	* @return null|String
	*/
	public function getRtbalf8()
	{
		return $this->rtbalf8;
	}

	/**
	* Set rtbalf9
	*
	*Dato Alfanumérico 9
	*
	* @parámetro String $rtbalf9
	* @return Rtbalf9
	*/
	public function setRtbalf9($rtbalf9)
	{
	  $this->rtbalf9 = (String) $rtbalf9;
	    return $this;
	}

	/**
	* Get rtbalf9
	*
	* @return null|String
	*/
	public function getRtbalf9()
	{
		return $this->rtbalf9;
	}

	/**
	* Set rtbal10
	*
	*Dato Alfanumérico 10
	*
	* @parámetro String $rtbal10
	* @return Rtbal10
	*/
	public function setRtbal10($rtbal10)
	{
	  $this->rtbal10 = (String) $rtbal10;
	    return $this;
	}

	/**
	* Get rtbal10
	*
	* @return null|String
	*/
	public function getRtbal10()
	{
		return $this->rtbal10;
	}

	/**
	* Set rtbnum1
	*
	*Dato Numérico 1
	*
	* @parámetro Decimal $rtbnum1
	* @return Rtbnum1
	*/
	public function setRtbnum1($rtbnum1)
	{
	  $this->rtbnum1 = (Double) $rtbnum1;
	    return $this;
	}

	/**
	* Get rtbnum1
	*
	* @return null|Decimal
	*/
	public function getRtbnum1()
	{
		return $this->rtbnum1;
	}

	/**
	* Set rtbnum2
	*
	*Dato Numérico 2
	*
	* @parámetro Decimal $rtbnum2
	* @return Rtbnum2
	*/
	public function setRtbnum2($rtbnum2)
	{
	  $this->rtbnum2 = (Double) $rtbnum2;
	    return $this;
	}

	/**
	* Get rtbnum2
	*
	* @return null|Decimal
	*/
	public function getRtbnum2()
	{
		return $this->rtbnum2;
	}

	/**
	* Set rtbnum3
	*
	*Dato Numérico 3
	*
	* @parámetro Decimal $rtbnum3
	* @return Rtbnum3
	*/
	public function setRtbnum3($rtbnum3)
	{
	  $this->rtbnum3 = (Double) $rtbnum3;
	    return $this;
	}

	/**
	* Get rtbnum3
	*
	* @return null|Decimal
	*/
	public function getRtbnum3()
	{
		return $this->rtbnum3;
	}

	/**
	* Set rtbusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rtbusuc
	* @return Rtbusuc
	*/
	public function setRtbusuc($rtbusuc)
	{
	  $this->rtbusuc = (String) $rtbusuc;
	    return $this;
	}

	/**
	* Get rtbusuc
	*
	* @return null|String
	*/
	public function getRtbusuc()
	{
		return $this->rtbusuc;
	}

	/**
	* Set rtbfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rtbfecc
	* @return Rtbfecc
	*/
	public function setRtbfecc($rtbfecc)
	{
	  $this->rtbfecc = (String) $rtbfecc;
	    return $this;
	}

	/**
	* Get rtbfecc
	*
	* @return null|Date
	*/
	public function getRtbfecc()
	{
		return $this->rtbfecc;
	}

	/**
	* Set rtbusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rtbusum
	* @return Rtbusum
	*/
	public function setRtbusum($rtbusum)
	{
	  $this->rtbusum = (String) $rtbusum;
	    return $this;
	}

	/**
	* Get rtbusum
	*
	* @return null|String
	*/
	public function getRtbusum()
	{
		return $this->rtbusum;
	}

	/**
	* Set rtbfecm
	*
	*Fecha de modifiación
	*
	* @parámetro Date $rtbfecm
	* @return Rtbfecm
	*/
	public function setRtbfecm($rtbfecm)
	{
	  $this->rtbfecm = (String) $rtbfecm;
	    return $this;
	}

	/**
	* Get rtbfecm
	*
	* @return null|Date
	*/
	public function getRtbfecm()
	{
		return $this->rtbfecm;
	}

	/**
	* Set rtbtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rtbtask
	* @return Rtbtask
	*/
	public function setRtbtask($rtbtask)
	{
	  $this->rtbtask = (String) $rtbtask;
	    return $this;
	}

	/**
	* Get rtbtask
	*
	* @return null|String
	*/
	public function getRtbtask()
	{
		return $this->rtbtask;
	}

	/**
	* Set rtbpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rtbpara
	* @return Rtbpara
	*/
	public function setRtbpara($rtbpara)
	{
	  $this->rtbpara = (Integer) $rtbpara;
	    return $this;
	}

	/**
	* Get rtbpara
	*
	* @return null|Integer
	*/
	public function getRtbpara()
	{
		return $this->rtbpara;
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

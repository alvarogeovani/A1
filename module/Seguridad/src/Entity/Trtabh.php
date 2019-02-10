<?php
 /**
 * Model of the Trtabh table
 *
 * It is used to convert the   Trtabh entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trtabh
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trtabh
{

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
		* Descripción Dato Alfanumérico 1
		*/
		protected $ralfa01;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 2
		*/
		protected $ralfa02;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 3
		*/
		protected $ralfa03;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 4
		*/
		protected $ralfa04;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 5
		*/
		protected $ralfa05;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 6
		*/
		protected $ralfa06;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 7
		*/
		protected $ralfa07;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 8
		*/
		protected $ralfa08;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 9
		*/
		protected $ralfa09;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 10
		*/
		protected $ralfa10;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 11
		*/
		protected $ralfa11;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 12
		*/
		protected $ralfa12;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 13
		*/
		protected $ralfa13;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Acceso Público
		*/
		protected $rtbpubl;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Acceso WEB
		*/
		protected $rtbacwe;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rthusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rthfecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rthusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rthfecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rthtask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rthpara;

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
	* Name of the table: trtabh
	* 
	 */
	const TABLE="trtabh";

	/**
	*Primary key
*/
		 const PKEY = "rtbsec1";



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
		throw new \Exception('Class Entity: Trtabh Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trtabh. Invalid specified property: get'.$name);
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
	* Set ralfa01
	*
	*Descripción Dato Alfanumérico 1
	*
	* @parámetro String $ralfa01
	* @return Ralfa01
	*/
	public function setRalfa01($ralfa01)
	{
	  $this->ralfa01 = (String) $ralfa01;
	    return $this;
	}

	/**
	* Get ralfa01
	*
	* @return null|String
	*/
	public function getRalfa01()
	{
		return $this->ralfa01;
	}

	/**
	* Set ralfa02
	*
	*Descripción Dato Alfanumérico 2
	*
	* @parámetro String $ralfa02
	* @return Ralfa02
	*/
	public function setRalfa02($ralfa02)
	{
	  $this->ralfa02 = (String) $ralfa02;
	    return $this;
	}

	/**
	* Get ralfa02
	*
	* @return null|String
	*/
	public function getRalfa02()
	{
		return $this->ralfa02;
	}

	/**
	* Set ralfa03
	*
	*Descripción Dato Alfanumérico 3
	*
	* @parámetro String $ralfa03
	* @return Ralfa03
	*/
	public function setRalfa03($ralfa03)
	{
	  $this->ralfa03 = (String) $ralfa03;
	    return $this;
	}

	/**
	* Get ralfa03
	*
	* @return null|String
	*/
	public function getRalfa03()
	{
		return $this->ralfa03;
	}

	/**
	* Set ralfa04
	*
	*Descripción Dato Alfanumérico 4
	*
	* @parámetro String $ralfa04
	* @return Ralfa04
	*/
	public function setRalfa04($ralfa04)
	{
	  $this->ralfa04 = (String) $ralfa04;
	    return $this;
	}

	/**
	* Get ralfa04
	*
	* @return null|String
	*/
	public function getRalfa04()
	{
		return $this->ralfa04;
	}

	/**
	* Set ralfa05
	*
	*Descripción Dato Alfanumérico 5
	*
	* @parámetro String $ralfa05
	* @return Ralfa05
	*/
	public function setRalfa05($ralfa05)
	{
	  $this->ralfa05 = (String) $ralfa05;
	    return $this;
	}

	/**
	* Get ralfa05
	*
	* @return null|String
	*/
	public function getRalfa05()
	{
		return $this->ralfa05;
	}

	/**
	* Set ralfa06
	*
	*Descripción Dato Alfanumérico 6
	*
	* @parámetro String $ralfa06
	* @return Ralfa06
	*/
	public function setRalfa06($ralfa06)
	{
	  $this->ralfa06 = (String) $ralfa06;
	    return $this;
	}

	/**
	* Get ralfa06
	*
	* @return null|String
	*/
	public function getRalfa06()
	{
		return $this->ralfa06;
	}

	/**
	* Set ralfa07
	*
	*Descripción Dato Alfanumérico 7
	*
	* @parámetro String $ralfa07
	* @return Ralfa07
	*/
	public function setRalfa07($ralfa07)
	{
	  $this->ralfa07 = (String) $ralfa07;
	    return $this;
	}

	/**
	* Get ralfa07
	*
	* @return null|String
	*/
	public function getRalfa07()
	{
		return $this->ralfa07;
	}

	/**
	* Set ralfa08
	*
	*Descripción Dato Alfanumérico 8
	*
	* @parámetro String $ralfa08
	* @return Ralfa08
	*/
	public function setRalfa08($ralfa08)
	{
	  $this->ralfa08 = (String) $ralfa08;
	    return $this;
	}

	/**
	* Get ralfa08
	*
	* @return null|String
	*/
	public function getRalfa08()
	{
		return $this->ralfa08;
	}

	/**
	* Set ralfa09
	*
	*Descripción Dato Alfanumérico 9
	*
	* @parámetro String $ralfa09
	* @return Ralfa09
	*/
	public function setRalfa09($ralfa09)
	{
	  $this->ralfa09 = (String) $ralfa09;
	    return $this;
	}

	/**
	* Get ralfa09
	*
	* @return null|String
	*/
	public function getRalfa09()
	{
		return $this->ralfa09;
	}

	/**
	* Set ralfa10
	*
	*Descripción Dato Alfanumérico 10
	*
	* @parámetro String $ralfa10
	* @return Ralfa10
	*/
	public function setRalfa10($ralfa10)
	{
	  $this->ralfa10 = (String) $ralfa10;
	    return $this;
	}

	/**
	* Get ralfa10
	*
	* @return null|String
	*/
	public function getRalfa10()
	{
		return $this->ralfa10;
	}

	/**
	* Set ralfa11
	*
	*Descripción Dato Alfanumérico 11
	*
	* @parámetro String $ralfa11
	* @return Ralfa11
	*/
	public function setRalfa11($ralfa11)
	{
	  $this->ralfa11 = (String) $ralfa11;
	    return $this;
	}

	/**
	* Get ralfa11
	*
	* @return null|String
	*/
	public function getRalfa11()
	{
		return $this->ralfa11;
	}

	/**
	* Set ralfa12
	*
	*Descripción Dato Alfanumérico 12
	*
	* @parámetro String $ralfa12
	* @return Ralfa12
	*/
	public function setRalfa12($ralfa12)
	{
	  $this->ralfa12 = (String) $ralfa12;
	    return $this;
	}

	/**
	* Get ralfa12
	*
	* @return null|String
	*/
	public function getRalfa12()
	{
		return $this->ralfa12;
	}

	/**
	* Set ralfa13
	*
	*Descripción Dato Alfanumérico 13
	*
	* @parámetro String $ralfa13
	* @return Ralfa13
	*/
	public function setRalfa13($ralfa13)
	{
	  $this->ralfa13 = (String) $ralfa13;
	    return $this;
	}

	/**
	* Get ralfa13
	*
	* @return null|String
	*/
	public function getRalfa13()
	{
		return $this->ralfa13;
	}

	/**
	* Set rtbpubl
	*
	*Acceso Público
	*
	* @parámetro Integer $rtbpubl
	* @return Rtbpubl
	*/
	public function setRtbpubl($rtbpubl)
	{
	  $this->rtbpubl = (Integer) $rtbpubl;
	    return $this;
	}

	/**
	* Get rtbpubl
	*
	* @return null|Integer
	*/
	public function getRtbpubl()
	{
		return $this->rtbpubl;
	}

	/**
	* Set rtbacwe
	*
	*Acceso WEB
	*
	* @parámetro Integer $rtbacwe
	* @return Rtbacwe
	*/
	public function setRtbacwe($rtbacwe)
	{
	  $this->rtbacwe = (Integer) $rtbacwe;
	    return $this;
	}

	/**
	* Get rtbacwe
	*
	* @return null|Integer
	*/
	public function getRtbacwe()
	{
		return $this->rtbacwe;
	}

	/**
	* Set rthusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rthusuc
	* @return Rthusuc
	*/
	public function setRthusuc($rthusuc)
	{
	  $this->rthusuc = (String) $rthusuc;
	    return $this;
	}

	/**
	* Get rthusuc
	*
	* @return null|String
	*/
	public function getRthusuc()
	{
		return $this->rthusuc;
	}

	/**
	* Set rthfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rthfecc
	* @return Rthfecc
	*/
	public function setRthfecc($rthfecc)
	{
	  $this->rthfecc = (String) $rthfecc;
	    return $this;
	}

	/**
	* Get rthfecc
	*
	* @return null|Date
	*/
	public function getRthfecc()
	{
		return $this->rthfecc;
	}

	/**
	* Set rthusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rthusum
	* @return Rthusum
	*/
	public function setRthusum($rthusum)
	{
	  $this->rthusum = (String) $rthusum;
	    return $this;
	}

	/**
	* Get rthusum
	*
	* @return null|String
	*/
	public function getRthusum()
	{
		return $this->rthusum;
	}

	/**
	* Set rthfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rthfecm
	* @return Rthfecm
	*/
	public function setRthfecm($rthfecm)
	{
	  $this->rthfecm = (String) $rthfecm;
	    return $this;
	}

	/**
	* Get rthfecm
	*
	* @return null|Date
	*/
	public function getRthfecm()
	{
		return $this->rthfecm;
	}

	/**
	* Set rthtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rthtask
	* @return Rthtask
	*/
	public function setRthtask($rthtask)
	{
	  $this->rthtask = (String) $rthtask;
	    return $this;
	}

	/**
	* Get rthtask
	*
	* @return null|String
	*/
	public function getRthtask()
	{
		return $this->rthtask;
	}

	/**
	* Set rthpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rthpara
	* @return Rthpara
	*/
	public function setRthpara($rthpara)
	{
	  $this->rthpara = (Integer) $rthpara;
	    return $this;
	}

	/**
	* Get rthpara
	*
	* @return null|Integer
	*/
	public function getRthpara()
	{
		return $this->rthpara;
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

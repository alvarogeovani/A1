<?php
 /**
 * Model of the Trhpah table
 *
 * It is used to convert the   Trhpah entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trhpah
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trhpah
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Históricos Parámetros del Sistema (Cabecera)
		*/
		protected $rhhsecu;
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
		protected $rhhcopa;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Específico
		*/
		protected $rhhcoes;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Específica del Parámetro
		*/
		protected $rhhdees;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 1
		*/
		protected $rhhan01;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 2
		*/
		protected $rhhan02;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 3
		*/
		protected $rhhan03;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 4
		*/
		protected $rhhan04;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 5
		*/
		protected $rhhan05;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 6
		*/
		protected $rhhan06;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 7
		*/
		protected $rhhan07;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 8
		*/
		protected $rhhan08;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 9
		*/
		protected $rhhan09;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Alfanumérico 10
		*/
		protected $rhhan10;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Numérico 01
		*/
		protected $rhhnu01;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Numérico 02
		*/
		protected $rhhnu02;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Dato Numérico 03
		*/
		protected $rhhnu03;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Acceso Público
		*/
		protected $rhhacpu;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Acceso WEB
		*/
		protected $rhhacwe;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Proceso (Fecha y Hora)
		*/
		protected $rhhfepr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Identificación del computador
		*/
		protected $rhhidco;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rhhusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rhhfecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rhhusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rhhfecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rhhtask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rhhpara;

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
	* Name of the table: trhpah
	* 
	 */
	const TABLE="trhpah";

	/**
	*Primary key
*/
		 const PKEY = "rhhsecu";



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
		throw new \Exception('Class Entity: Trhpah Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trhpah. Invalid specified property: get'.$name);
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
	* Set rhhsecu
	*
	*Estos datos se ingresan en la Opción: Históricos Parámetros del Sistema (Cabecera)
	*
	* @parámetro Integer $rhhsecu
	* @return Rhhsecu
	*/
	public function setRhhsecu($rhhsecu)
	{
	  $this->rhhsecu = (Integer) $rhhsecu;
	    return $this;
	}

	/**
	* Get rhhsecu
	*
	* @return null|Integer
	*/
	public function getRhhsecu()
	{
		return $this->rhhsecu;
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
	* Set rhhcopa
	*
	*Código del Parámetro
	*
	* @parámetro String $rhhcopa
	* @return Rhhcopa
	*/
	public function setRhhcopa($rhhcopa)
	{
	  $this->rhhcopa = (String) $rhhcopa;
	    return $this;
	}

	/**
	* Get rhhcopa
	*
	* @return null|String
	*/
	public function getRhhcopa()
	{
		return $this->rhhcopa;
	}

	/**
	* Set rhhcoes
	*
	*Código Específico
	*
	* @parámetro String $rhhcoes
	* @return Rhhcoes
	*/
	public function setRhhcoes($rhhcoes)
	{
	  $this->rhhcoes = (String) $rhhcoes;
	    return $this;
	}

	/**
	* Get rhhcoes
	*
	* @return null|String
	*/
	public function getRhhcoes()
	{
		return $this->rhhcoes;
	}

	/**
	* Set rhhdees
	*
	*Descripción Específica del Parámetro
	*
	* @parámetro String $rhhdees
	* @return Rhhdees
	*/
	public function setRhhdees($rhhdees)
	{
	  $this->rhhdees = (String) $rhhdees;
	    return $this;
	}

	/**
	* Get rhhdees
	*
	* @return null|String
	*/
	public function getRhhdees()
	{
		return $this->rhhdees;
	}

	/**
	* Set rhhan01
	*
	*Descripción Dato Alfanumérico 1
	*
	* @parámetro String $rhhan01
	* @return Rhhan01
	*/
	public function setRhhan01($rhhan01)
	{
	  $this->rhhan01 = (String) $rhhan01;
	    return $this;
	}

	/**
	* Get rhhan01
	*
	* @return null|String
	*/
	public function getRhhan01()
	{
		return $this->rhhan01;
	}

	/**
	* Set rhhan02
	*
	*Descripción Dato Alfanumérico 2
	*
	* @parámetro String $rhhan02
	* @return Rhhan02
	*/
	public function setRhhan02($rhhan02)
	{
	  $this->rhhan02 = (String) $rhhan02;
	    return $this;
	}

	/**
	* Get rhhan02
	*
	* @return null|String
	*/
	public function getRhhan02()
	{
		return $this->rhhan02;
	}

	/**
	* Set rhhan03
	*
	*Descripción Dato Alfanumérico 3
	*
	* @parámetro String $rhhan03
	* @return Rhhan03
	*/
	public function setRhhan03($rhhan03)
	{
	  $this->rhhan03 = (String) $rhhan03;
	    return $this;
	}

	/**
	* Get rhhan03
	*
	* @return null|String
	*/
	public function getRhhan03()
	{
		return $this->rhhan03;
	}

	/**
	* Set rhhan04
	*
	*Descripción Dato Alfanumérico 4
	*
	* @parámetro String $rhhan04
	* @return Rhhan04
	*/
	public function setRhhan04($rhhan04)
	{
	  $this->rhhan04 = (String) $rhhan04;
	    return $this;
	}

	/**
	* Get rhhan04
	*
	* @return null|String
	*/
	public function getRhhan04()
	{
		return $this->rhhan04;
	}

	/**
	* Set rhhan05
	*
	*Descripción Dato Alfanumérico 5
	*
	* @parámetro String $rhhan05
	* @return Rhhan05
	*/
	public function setRhhan05($rhhan05)
	{
	  $this->rhhan05 = (String) $rhhan05;
	    return $this;
	}

	/**
	* Get rhhan05
	*
	* @return null|String
	*/
	public function getRhhan05()
	{
		return $this->rhhan05;
	}

	/**
	* Set rhhan06
	*
	*Descripción Dato Alfanumérico 6
	*
	* @parámetro String $rhhan06
	* @return Rhhan06
	*/
	public function setRhhan06($rhhan06)
	{
	  $this->rhhan06 = (String) $rhhan06;
	    return $this;
	}

	/**
	* Get rhhan06
	*
	* @return null|String
	*/
	public function getRhhan06()
	{
		return $this->rhhan06;
	}

	/**
	* Set rhhan07
	*
	*Descripción Dato Alfanumérico 7
	*
	* @parámetro String $rhhan07
	* @return Rhhan07
	*/
	public function setRhhan07($rhhan07)
	{
	  $this->rhhan07 = (String) $rhhan07;
	    return $this;
	}

	/**
	* Get rhhan07
	*
	* @return null|String
	*/
	public function getRhhan07()
	{
		return $this->rhhan07;
	}

	/**
	* Set rhhan08
	*
	*Descripción Dato Alfanumérico 8
	*
	* @parámetro String $rhhan08
	* @return Rhhan08
	*/
	public function setRhhan08($rhhan08)
	{
	  $this->rhhan08 = (String) $rhhan08;
	    return $this;
	}

	/**
	* Get rhhan08
	*
	* @return null|String
	*/
	public function getRhhan08()
	{
		return $this->rhhan08;
	}

	/**
	* Set rhhan09
	*
	*Descripción Dato Alfanumérico 9
	*
	* @parámetro String $rhhan09
	* @return Rhhan09
	*/
	public function setRhhan09($rhhan09)
	{
	  $this->rhhan09 = (String) $rhhan09;
	    return $this;
	}

	/**
	* Get rhhan09
	*
	* @return null|String
	*/
	public function getRhhan09()
	{
		return $this->rhhan09;
	}

	/**
	* Set rhhan10
	*
	*Descripción Dato Alfanumérico 10
	*
	* @parámetro String $rhhan10
	* @return Rhhan10
	*/
	public function setRhhan10($rhhan10)
	{
	  $this->rhhan10 = (String) $rhhan10;
	    return $this;
	}

	/**
	* Get rhhan10
	*
	* @return null|String
	*/
	public function getRhhan10()
	{
		return $this->rhhan10;
	}

	/**
	* Set rhhnu01
	*
	*Descripción Dato Numérico 01
	*
	* @parámetro String $rhhnu01
	* @return Rhhnu01
	*/
	public function setRhhnu01($rhhnu01)
	{
	  $this->rhhnu01 = (String) $rhhnu01;
	    return $this;
	}

	/**
	* Get rhhnu01
	*
	* @return null|String
	*/
	public function getRhhnu01()
	{
		return $this->rhhnu01;
	}

	/**
	* Set rhhnu02
	*
	*Descripción Dato Numérico 02
	*
	* @parámetro String $rhhnu02
	* @return Rhhnu02
	*/
	public function setRhhnu02($rhhnu02)
	{
	  $this->rhhnu02 = (String) $rhhnu02;
	    return $this;
	}

	/**
	* Get rhhnu02
	*
	* @return null|String
	*/
	public function getRhhnu02()
	{
		return $this->rhhnu02;
	}

	/**
	* Set rhhnu03
	*
	*Descripción Dato Numérico 03
	*
	* @parámetro String $rhhnu03
	* @return Rhhnu03
	*/
	public function setRhhnu03($rhhnu03)
	{
	  $this->rhhnu03 = (String) $rhhnu03;
	    return $this;
	}

	/**
	* Get rhhnu03
	*
	* @return null|String
	*/
	public function getRhhnu03()
	{
		return $this->rhhnu03;
	}

	/**
	* Set rhhacpu
	*
	*Acceso Público
	*
	* @parámetro Integer $rhhacpu
	* @return Rhhacpu
	*/
	public function setRhhacpu($rhhacpu)
	{
	  $this->rhhacpu = (Integer) $rhhacpu;
	    return $this;
	}

	/**
	* Get rhhacpu
	*
	* @return null|Integer
	*/
	public function getRhhacpu()
	{
		return $this->rhhacpu;
	}

	/**
	* Set rhhacwe
	*
	*Acceso WEB
	*
	* @parámetro Integer $rhhacwe
	* @return Rhhacwe
	*/
	public function setRhhacwe($rhhacwe)
	{
	  $this->rhhacwe = (Integer) $rhhacwe;
	    return $this;
	}

	/**
	* Get rhhacwe
	*
	* @return null|Integer
	*/
	public function getRhhacwe()
	{
		return $this->rhhacwe;
	}

	/**
	* Set rhhfepr
	*
	*Fecha de Proceso (Fecha y Hora)
	*
	* @parámetro Date $rhhfepr
	* @return Rhhfepr
	*/
	public function setRhhfepr($rhhfepr)
	{
	  $this->rhhfepr = (String) $rhhfepr;
	    return $this;
	}

	/**
	* Get rhhfepr
	*
	* @return null|Date
	*/
	public function getRhhfepr()
	{
		return $this->rhhfepr;
	}

	/**
	* Set rhhidco
	*
	*Identificación del computador
	*
	* @parámetro String $rhhidco
	* @return Rhhidco
	*/
	public function setRhhidco($rhhidco)
	{
	  $this->rhhidco = (String) $rhhidco;
	    return $this;
	}

	/**
	* Get rhhidco
	*
	* @return null|String
	*/
	public function getRhhidco()
	{
		return $this->rhhidco;
	}

	/**
	* Set rhhusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rhhusuc
	* @return Rhhusuc
	*/
	public function setRhhusuc($rhhusuc)
	{
	  $this->rhhusuc = (String) $rhhusuc;
	    return $this;
	}

	/**
	* Get rhhusuc
	*
	* @return null|String
	*/
	public function getRhhusuc()
	{
		return $this->rhhusuc;
	}

	/**
	* Set rhhfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rhhfecc
	* @return Rhhfecc
	*/
	public function setRhhfecc($rhhfecc)
	{
	  $this->rhhfecc = (String) $rhhfecc;
	    return $this;
	}

	/**
	* Get rhhfecc
	*
	* @return null|Date
	*/
	public function getRhhfecc()
	{
		return $this->rhhfecc;
	}

	/**
	* Set rhhusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rhhusum
	* @return Rhhusum
	*/
	public function setRhhusum($rhhusum)
	{
	  $this->rhhusum = (String) $rhhusum;
	    return $this;
	}

	/**
	* Get rhhusum
	*
	* @return null|String
	*/
	public function getRhhusum()
	{
		return $this->rhhusum;
	}

	/**
	* Set rhhfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rhhfecm
	* @return Rhhfecm
	*/
	public function setRhhfecm($rhhfecm)
	{
	  $this->rhhfecm = (String) $rhhfecm;
	    return $this;
	}

	/**
	* Get rhhfecm
	*
	* @return null|Date
	*/
	public function getRhhfecm()
	{
		return $this->rhhfecm;
	}

	/**
	* Set rhhtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rhhtask
	* @return Rhhtask
	*/
	public function setRhhtask($rhhtask)
	{
	  $this->rhhtask = (String) $rhhtask;
	    return $this;
	}

	/**
	* Get rhhtask
	*
	* @return null|String
	*/
	public function getRhhtask()
	{
		return $this->rhhtask;
	}

	/**
	* Set rhhpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rhhpara
	* @return Rhhpara
	*/
	public function setRhhpara($rhhpara)
	{
	  $this->rhhpara = (Integer) $rhhpara;
	    return $this;
	}

	/**
	* Get rhhpara
	*
	* @return null|Integer
	*/
	public function getRhhpara()
	{
		return $this->rhhpara;
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

<?php
 /**
 * Model of the Trhpad table
 *
 * It is used to convert the   Trhpad entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trhpad
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trhpad
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Histórico Parámetros del Sistema (Detalle)
		*/
		protected $rhdsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Parámetros del Módulo
		*/
		protected $rtbsecu;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Secuencial de TRTABH Parámetros del Sistema Cabecera
		*/
		protected $rtbseca;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código del Parámetro
		*/
		protected $rhdcopa;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Tabla Relacionada
		*/
		protected $rhdcota;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Específico
		*/
		protected $rhdcoes;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Específica del Parámetro
		*/
		protected $rhddees;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 1
		*/
		protected $rhdan01;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 2
		*/
		protected $rhdan02;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 3
		*/
		protected $rhdan03;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 4
		*/
		protected $rhdan04;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 5
		*/
		protected $rhdan05;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 6
		*/
		protected $rhdan06;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 7
		*/
		protected $rhdan07;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 8
		*/
		protected $rhdan08;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 9
		*/
		protected $rhdan09;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dato Alfanumérico 10
		*/
		protected $rhdan10;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Dato Numérico 1
		*/
		protected $rhdnu01;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Dato Numérico 2
		*/
		protected $rhdnu02;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Dato Numérico 3
		*/
		protected $rhdnu03;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Proceso (Fecha y Hora)
		*/
		protected $rhdfepr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Identificación del computador
		*/
		protected $rhdidco;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rhdusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rhdfecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rhdusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rhdfecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rhdtask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rhdpara;

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
	* Name of the table: trhpad
	* 
	 */
	const TABLE="trhpad";

	/**
	*Primary key
*/
		 const PKEY = "rhdsecu";



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
		throw new \Exception('Class Entity: Trhpad Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trhpad. Invalid specified property: get'.$name);
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
	* Set rhdsecu
	*
	*Estos datos se ingresan en la Opción: Histórico Parámetros del Sistema (Detalle)
	*
	* @parámetro Integer $rhdsecu
	* @return Rhdsecu
	*/
	public function setRhdsecu($rhdsecu)
	{
	  $this->rhdsecu = (Integer) $rhdsecu;
	    return $this;
	}

	/**
	* Get rhdsecu
	*
	* @return null|Integer
	*/
	public function getRhdsecu()
	{
		return $this->rhdsecu;
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
	* Set rtbseca
	*
	*Secuencial de TRTABH Parámetros del Sistema Cabecera
	*
	* @parámetro Decimal $rtbseca
	* @return Rtbseca
	*/
	public function setRtbseca($rtbseca)
	{
	  $this->rtbseca = (Double) $rtbseca;
	    return $this;
	}

	/**
	* Get rtbseca
	*
	* @return null|Decimal
	*/
	public function getRtbseca()
	{
		return $this->rtbseca;
	}

	/**
	* Set rhdcopa
	*
	*Código del Parámetro
	*
	* @parámetro String $rhdcopa
	* @return Rhdcopa
	*/
	public function setRhdcopa($rhdcopa)
	{
	  $this->rhdcopa = (String) $rhdcopa;
	    return $this;
	}

	/**
	* Get rhdcopa
	*
	* @return null|String
	*/
	public function getRhdcopa()
	{
		return $this->rhdcopa;
	}

	/**
	* Set rhdcota
	*
	*Código de Tabla Relacionada
	*
	* @parámetro String $rhdcota
	* @return Rhdcota
	*/
	public function setRhdcota($rhdcota)
	{
	  $this->rhdcota = (String) $rhdcota;
	    return $this;
	}

	/**
	* Get rhdcota
	*
	* @return null|String
	*/
	public function getRhdcota()
	{
		return $this->rhdcota;
	}

	/**
	* Set rhdcoes
	*
	*Código Específico
	*
	* @parámetro String $rhdcoes
	* @return Rhdcoes
	*/
	public function setRhdcoes($rhdcoes)
	{
	  $this->rhdcoes = (String) $rhdcoes;
	    return $this;
	}

	/**
	* Get rhdcoes
	*
	* @return null|String
	*/
	public function getRhdcoes()
	{
		return $this->rhdcoes;
	}

	/**
	* Set rhddees
	*
	*Descripción Específica del Parámetro
	*
	* @parámetro String $rhddees
	* @return Rhddees
	*/
	public function setRhddees($rhddees)
	{
	  $this->rhddees = (String) $rhddees;
	    return $this;
	}

	/**
	* Get rhddees
	*
	* @return null|String
	*/
	public function getRhddees()
	{
		return $this->rhddees;
	}

	/**
	* Set rhdan01
	*
	*Dato Alfanumérico 1
	*
	* @parámetro String $rhdan01
	* @return Rhdan01
	*/
	public function setRhdan01($rhdan01)
	{
	  $this->rhdan01 = (String) $rhdan01;
	    return $this;
	}

	/**
	* Get rhdan01
	*
	* @return null|String
	*/
	public function getRhdan01()
	{
		return $this->rhdan01;
	}

	/**
	* Set rhdan02
	*
	*Dato Alfanumérico 2
	*
	* @parámetro String $rhdan02
	* @return Rhdan02
	*/
	public function setRhdan02($rhdan02)
	{
	  $this->rhdan02 = (String) $rhdan02;
	    return $this;
	}

	/**
	* Get rhdan02
	*
	* @return null|String
	*/
	public function getRhdan02()
	{
		return $this->rhdan02;
	}

	/**
	* Set rhdan03
	*
	*Dato Alfanumérico 3
	*
	* @parámetro String $rhdan03
	* @return Rhdan03
	*/
	public function setRhdan03($rhdan03)
	{
	  $this->rhdan03 = (String) $rhdan03;
	    return $this;
	}

	/**
	* Get rhdan03
	*
	* @return null|String
	*/
	public function getRhdan03()
	{
		return $this->rhdan03;
	}

	/**
	* Set rhdan04
	*
	*Dato Alfanumérico 4
	*
	* @parámetro String $rhdan04
	* @return Rhdan04
	*/
	public function setRhdan04($rhdan04)
	{
	  $this->rhdan04 = (String) $rhdan04;
	    return $this;
	}

	/**
	* Get rhdan04
	*
	* @return null|String
	*/
	public function getRhdan04()
	{
		return $this->rhdan04;
	}

	/**
	* Set rhdan05
	*
	*Dato Alfanumérico 5
	*
	* @parámetro String $rhdan05
	* @return Rhdan05
	*/
	public function setRhdan05($rhdan05)
	{
	  $this->rhdan05 = (String) $rhdan05;
	    return $this;
	}

	/**
	* Get rhdan05
	*
	* @return null|String
	*/
	public function getRhdan05()
	{
		return $this->rhdan05;
	}

	/**
	* Set rhdan06
	*
	*Dato Alfanumérico 6
	*
	* @parámetro String $rhdan06
	* @return Rhdan06
	*/
	public function setRhdan06($rhdan06)
	{
	  $this->rhdan06 = (String) $rhdan06;
	    return $this;
	}

	/**
	* Get rhdan06
	*
	* @return null|String
	*/
	public function getRhdan06()
	{
		return $this->rhdan06;
	}

	/**
	* Set rhdan07
	*
	*Dato Alfanumérico 7
	*
	* @parámetro String $rhdan07
	* @return Rhdan07
	*/
	public function setRhdan07($rhdan07)
	{
	  $this->rhdan07 = (String) $rhdan07;
	    return $this;
	}

	/**
	* Get rhdan07
	*
	* @return null|String
	*/
	public function getRhdan07()
	{
		return $this->rhdan07;
	}

	/**
	* Set rhdan08
	*
	*Dato Alfanumérico 8
	*
	* @parámetro String $rhdan08
	* @return Rhdan08
	*/
	public function setRhdan08($rhdan08)
	{
	  $this->rhdan08 = (String) $rhdan08;
	    return $this;
	}

	/**
	* Get rhdan08
	*
	* @return null|String
	*/
	public function getRhdan08()
	{
		return $this->rhdan08;
	}

	/**
	* Set rhdan09
	*
	*Dato Alfanumérico 9
	*
	* @parámetro String $rhdan09
	* @return Rhdan09
	*/
	public function setRhdan09($rhdan09)
	{
	  $this->rhdan09 = (String) $rhdan09;
	    return $this;
	}

	/**
	* Get rhdan09
	*
	* @return null|String
	*/
	public function getRhdan09()
	{
		return $this->rhdan09;
	}

	/**
	* Set rhdan10
	*
	*Dato Alfanumérico 10
	*
	* @parámetro String $rhdan10
	* @return Rhdan10
	*/
	public function setRhdan10($rhdan10)
	{
	  $this->rhdan10 = (String) $rhdan10;
	    return $this;
	}

	/**
	* Get rhdan10
	*
	* @return null|String
	*/
	public function getRhdan10()
	{
		return $this->rhdan10;
	}

	/**
	* Set rhdnu01
	*
	*Dato Numérico 1
	*
	* @parámetro Decimal $rhdnu01
	* @return Rhdnu01
	*/
	public function setRhdnu01($rhdnu01)
	{
	  $this->rhdnu01 = (Double) $rhdnu01;
	    return $this;
	}

	/**
	* Get rhdnu01
	*
	* @return null|Decimal
	*/
	public function getRhdnu01()
	{
		return $this->rhdnu01;
	}

	/**
	* Set rhdnu02
	*
	*Dato Numérico 2
	*
	* @parámetro Decimal $rhdnu02
	* @return Rhdnu02
	*/
	public function setRhdnu02($rhdnu02)
	{
	  $this->rhdnu02 = (Double) $rhdnu02;
	    return $this;
	}

	/**
	* Get rhdnu02
	*
	* @return null|Decimal
	*/
	public function getRhdnu02()
	{
		return $this->rhdnu02;
	}

	/**
	* Set rhdnu03
	*
	*Dato Numérico 3
	*
	* @parámetro Decimal $rhdnu03
	* @return Rhdnu03
	*/
	public function setRhdnu03($rhdnu03)
	{
	  $this->rhdnu03 = (Double) $rhdnu03;
	    return $this;
	}

	/**
	* Get rhdnu03
	*
	* @return null|Decimal
	*/
	public function getRhdnu03()
	{
		return $this->rhdnu03;
	}

	/**
	* Set rhdfepr
	*
	*Fecha de Proceso (Fecha y Hora)
	*
	* @parámetro Date $rhdfepr
	* @return Rhdfepr
	*/
	public function setRhdfepr($rhdfepr)
	{
	  $this->rhdfepr = (String) $rhdfepr;
	    return $this;
	}

	/**
	* Get rhdfepr
	*
	* @return null|Date
	*/
	public function getRhdfepr()
	{
		return $this->rhdfepr;
	}

	/**
	* Set rhdidco
	*
	*Identificación del computador
	*
	* @parámetro String $rhdidco
	* @return Rhdidco
	*/
	public function setRhdidco($rhdidco)
	{
	  $this->rhdidco = (String) $rhdidco;
	    return $this;
	}

	/**
	* Get rhdidco
	*
	* @return null|String
	*/
	public function getRhdidco()
	{
		return $this->rhdidco;
	}

	/**
	* Set rhdusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rhdusuc
	* @return Rhdusuc
	*/
	public function setRhdusuc($rhdusuc)
	{
	  $this->rhdusuc = (String) $rhdusuc;
	    return $this;
	}

	/**
	* Get rhdusuc
	*
	* @return null|String
	*/
	public function getRhdusuc()
	{
		return $this->rhdusuc;
	}

	/**
	* Set rhdfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rhdfecc
	* @return Rhdfecc
	*/
	public function setRhdfecc($rhdfecc)
	{
	  $this->rhdfecc = (String) $rhdfecc;
	    return $this;
	}

	/**
	* Get rhdfecc
	*
	* @return null|Date
	*/
	public function getRhdfecc()
	{
		return $this->rhdfecc;
	}

	/**
	* Set rhdusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rhdusum
	* @return Rhdusum
	*/
	public function setRhdusum($rhdusum)
	{
	  $this->rhdusum = (String) $rhdusum;
	    return $this;
	}

	/**
	* Get rhdusum
	*
	* @return null|String
	*/
	public function getRhdusum()
	{
		return $this->rhdusum;
	}

	/**
	* Set rhdfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rhdfecm
	* @return Rhdfecm
	*/
	public function setRhdfecm($rhdfecm)
	{
	  $this->rhdfecm = (String) $rhdfecm;
	    return $this;
	}

	/**
	* Get rhdfecm
	*
	* @return null|Date
	*/
	public function getRhdfecm()
	{
		return $this->rhdfecm;
	}

	/**
	* Set rhdtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rhdtask
	* @return Rhdtask
	*/
	public function setRhdtask($rhdtask)
	{
	  $this->rhdtask = (String) $rhdtask;
	    return $this;
	}

	/**
	* Get rhdtask
	*
	* @return null|String
	*/
	public function getRhdtask()
	{
		return $this->rhdtask;
	}

	/**
	* Set rhdpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rhdpara
	* @return Rhdpara
	*/
	public function setRhdpara($rhdpara)
	{
	  $this->rhdpara = (Integer) $rhdpara;
	    return $this;
	}

	/**
	* Get rhdpara
	*
	* @return null|Integer
	*/
	public function getRhdpara()
	{
		return $this->rhdpara;
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

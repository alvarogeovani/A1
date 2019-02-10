<?php
 /**
 * Model of the Ttcidi table
 *
 * It is used to convert the   Ttcidi entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttcidi
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttcidi
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Cierre Diario
		*/
		protected $tcisecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la opción : Maestro de Puntos de Emisión
		*/
		protected $tpmsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Puntos de Venta
		*/
		protected $tpvsecu;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Ejercicio Económico
		*/
		protected $tcieano;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Periodo Contable
		*/
		protected $tcienum;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Ordinal
		*/
		protected $tcieord;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Descripción del Periodo de Facturación
		*/
		protected $tciedes;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Inicial del Periodo de Facturación
		*/
		protected $tciefei;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Final del Periodo de Facturación
		*/
		protected $tciefef;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Día del Trabajo de Facturación
		*/
		protected $tciedia;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación del Punto de Venta de Facturación
		*/
		protected $tpvsitu;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación del Cierre Diario de Facturación
		*/
		protected $tcisitu;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tciusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tcifecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tciusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tcifecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tcitask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tcipara;

	/**
	* Form fields 
	* @var array 
	 */
	Private $fields = Array();

	/**
	* Schema name 
	* 
	 */
	const   SCHEMA ="facturacion";

	/**
	* Name of the table: ttcidi
	* 
	 */
	const TABLE="ttcidi";

	/**
	*Primary key
*/
		 const PKEY = "tcisecu";



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
		throw new \Exception('Class Entity: Ttcidi Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttcidi. Invalid specified property: get'.$name);
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
	* Set tcisecu
	*
	*Estos datos se ingresan en la Opción: Cierre Diario
	*
	* @parámetro Integer $tcisecu
	* @return Tcisecu
	*/
	public function setTcisecu($tcisecu)
	{
	  $this->tcisecu = (Integer) $tcisecu;
	    return $this;
	}

	/**
	* Get tcisecu
	*
	* @return null|Integer
	*/
	public function getTcisecu()
	{
		return $this->tcisecu;
	}

	/**
	* Set tpmsecu
	*
	*Estos datos se ingresan en la opción : Maestro de Puntos de Emisión
	*
	* @parámetro Integer $tpmsecu
	* @return Tpmsecu
	*/
	public function setTpmsecu($tpmsecu)
	{
	  $this->tpmsecu = (Integer) $tpmsecu;
	    return $this;
	}

	/**
	* Get tpmsecu
	*
	* @return null|Integer
	*/
	public function getTpmsecu()
	{
		return $this->tpmsecu;
	}

	/**
	* Set tpvsecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Puntos de Venta
	*
	* @parámetro Integer $tpvsecu
	* @return Tpvsecu
	*/
	public function setTpvsecu($tpvsecu)
	{
	  $this->tpvsecu = (Integer) $tpvsecu;
	    return $this;
	}

	/**
	* Get tpvsecu
	*
	* @return null|Integer
	*/
	public function getTpvsecu()
	{
		return $this->tpvsecu;
	}

	/**
	* Set tcieano
	*
	*Ejercicio Económico
	*
	* @parámetro Decimal $tcieano
	* @return Tcieano
	*/
	public function setTcieano($tcieano)
	{
	  $this->tcieano = (Double) $tcieano;
	    return $this;
	}

	/**
	* Get tcieano
	*
	* @return null|Decimal
	*/
	public function getTcieano()
	{
		return $this->tcieano;
	}

	/**
	* Set tcienum
	*
	*Periodo Contable
	*
	* @parámetro Decimal $tcienum
	* @return Tcienum
	*/
	public function setTcienum($tcienum)
	{
	  $this->tcienum = (Double) $tcienum;
	    return $this;
	}

	/**
	* Get tcienum
	*
	* @return null|Decimal
	*/
	public function getTcienum()
	{
		return $this->tcienum;
	}

	/**
	* Set tcieord
	*
	*Ordinal
	*
	* @parámetro Decimal $tcieord
	* @return Tcieord
	*/
	public function setTcieord($tcieord)
	{
	  $this->tcieord = (Double) $tcieord;
	    return $this;
	}

	/**
	* Get tcieord
	*
	* @return null|Decimal
	*/
	public function getTcieord()
	{
		return $this->tcieord;
	}

	/**
	* Set tciedes
	*
	*Descripción del Periodo de Facturación
	*
	* @parámetro String $tciedes
	* @return Tciedes
	*/
	public function setTciedes($tciedes)
	{
	  $this->tciedes = (String) $tciedes;
	    return $this;
	}

	/**
	* Get tciedes
	*
	* @return null|String
	*/
	public function getTciedes()
	{
		return $this->tciedes;
	}

	/**
	* Set tciefei
	*
	*Fecha Inicial del Periodo de Facturación
	*
	* @parámetro Date $tciefei
	* @return Tciefei
	*/
	public function setTciefei($tciefei)
	{
	  $this->tciefei = (String) $tciefei;
	    return $this;
	}

	/**
	* Get tciefei
	*
	* @return null|Date
	*/
	public function getTciefei()
	{
		return $this->tciefei;
	}

	/**
	* Set tciefef
	*
	*Fecha Final del Periodo de Facturación
	*
	* @parámetro Date $tciefef
	* @return Tciefef
	*/
	public function setTciefef($tciefef)
	{
	  $this->tciefef = (String) $tciefef;
	    return $this;
	}

	/**
	* Get tciefef
	*
	* @return null|Date
	*/
	public function getTciefef()
	{
		return $this->tciefef;
	}

	/**
	* Set tciedia
	*
	*Fecha Día del Trabajo de Facturación
	*
	* @parámetro Date $tciedia
	* @return Tciedia
	*/
	public function setTciedia($tciedia)
	{
	  $this->tciedia = (String) $tciedia;
	    return $this;
	}

	/**
	* Get tciedia
	*
	* @return null|Date
	*/
	public function getTciedia()
	{
		return $this->tciedia;
	}

	/**
	* Set tpvsitu
	*
	*Situación del Punto de Venta de Facturación
	*
	* @parámetro Integer $tpvsitu
	* @return Tpvsitu
	*/
	public function setTpvsitu($tpvsitu)
	{
	  $this->tpvsitu = (Integer) $tpvsitu;
	    return $this;
	}

	/**
	* Get tpvsitu
	*
	* @return null|Integer
	*/
	public function getTpvsitu()
	{
		return $this->tpvsitu;
	}

	/**
	* Set tcisitu
	*
	*Situación del Cierre Diario de Facturación
	*
	* @parámetro Integer $tcisitu
	* @return Tcisitu
	*/
	public function setTcisitu($tcisitu)
	{
	  $this->tcisitu = (Integer) $tcisitu;
	    return $this;
	}

	/**
	* Get tcisitu
	*
	* @return null|Integer
	*/
	public function getTcisitu()
	{
		return $this->tcisitu;
	}

	/**
	* Set tciusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tciusuc
	* @return Tciusuc
	*/
	public function setTciusuc($tciusuc)
	{
	  $this->tciusuc = (String) $tciusuc;
	    return $this;
	}

	/**
	* Get tciusuc
	*
	* @return null|String
	*/
	public function getTciusuc()
	{
		return $this->tciusuc;
	}

	/**
	* Set tcifecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tcifecc
	* @return Tcifecc
	*/
	public function setTcifecc($tcifecc)
	{
	  $this->tcifecc = (String) $tcifecc;
	    return $this;
	}

	/**
	* Get tcifecc
	*
	* @return null|Date
	*/
	public function getTcifecc()
	{
		return $this->tcifecc;
	}

	/**
	* Set tciusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tciusum
	* @return Tciusum
	*/
	public function setTciusum($tciusum)
	{
	  $this->tciusum = (String) $tciusum;
	    return $this;
	}

	/**
	* Get tciusum
	*
	* @return null|String
	*/
	public function getTciusum()
	{
		return $this->tciusum;
	}

	/**
	* Set tcifecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tcifecm
	* @return Tcifecm
	*/
	public function setTcifecm($tcifecm)
	{
	  $this->tcifecm = (String) $tcifecm;
	    return $this;
	}

	/**
	* Get tcifecm
	*
	* @return null|Date
	*/
	public function getTcifecm()
	{
		return $this->tcifecm;
	}

	/**
	* Set tcitask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tcitask
	* @return Tcitask
	*/
	public function setTcitask($tcitask)
	{
	  $this->tcitask = (String) $tcitask;
	    return $this;
	}

	/**
	* Get tcitask
	*
	* @return null|String
	*/
	public function getTcitask()
	{
		return $this->tcitask;
	}

	/**
	* Set tcipara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tcipara
	* @return Tcipara
	*/
	public function setTcipara($tcipara)
	{
	  $this->tcipara = (Integer) $tcipara;
	    return $this;
	}

	/**
	* Get tcipara
	*
	* @return null|Integer
	*/
	public function getTcipara()
	{
		return $this->tcipara;
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

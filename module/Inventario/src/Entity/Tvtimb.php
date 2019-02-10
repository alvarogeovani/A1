<?php
 /**
 * Model of the Tvtimb table
 *
 * It is used to convert the   Tvtimb entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvtimb
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvtimb
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Tipos de Movimientos de Bodega
		*/
		protected $vtmsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Plan de Cuentas Contable
		*/
		protected $bctsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Clase de Movimiento
		*/
		protected $vtmclas;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código Tipo de Movimiento
		*/
		protected $vtmtipo;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Descripción del Movimiento
		*/
		protected $vtmdesc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Movimiento Ingreso Pre-Valorizado
		*/
		protected $vtmflg1;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Interviene en Proceso de Costeo
		*/
		protected $vtmflg2;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Altera Costo Promedio
		*/
		protected $vtmflg3;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Salida por Gestión de Venta
		*/
		protected $vtmflg4;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Auxiliar 1
		*/
		protected $vtmcau1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Tipo de Auxiliar 1
		*/
		protected $vtmaux1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 1
		*/
		protected $vtmref1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Auxiliar 2
		*/
		protected $vtmcau2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Tipo de Auxiliar 2
		*/
		protected $vtmaux2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 2
		*/
		protected $vtmref2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Auxiliar 3
		*/
		protected $vtmcau3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Tipo de Auxiliar 3
		*/
		protected $vtmaux3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 3
		*/
		protected $vtmref3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Bandera 1
		*/
		protected $vtmfla1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Bandera 2
		*/
		protected $vtmfla2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Bandera 3
		*/
		protected $vtmfla3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre del Proceso de Valoración
		*/
		protected $vtmnopv;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vtmusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vtmfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vtmusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vtmfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vtmtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Banera de borrado
		*/
		protected $vtmpara;

	/**
	* Form fields 
	* @var array 
	 */
	Private $fields = Array();

	/**
	* Schema name 
	* 
	 */
	const   SCHEMA ="inventario";

	/**
	* Name of the table: tvtimb
	* 
	 */
	const TABLE="tvtimb";

	/**
	*Primary key
*/
		 const PKEY = "vtmsecu";



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
		throw new \Exception('Class Entity: Tvtimb Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvtimb. Invalid specified property: get'.$name);
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
	* Set vtmsecu
	*
	*Estos datos se ingresan en la Opción: Tipos de Movimientos de Bodega
	*
	* @parámetro Integer $vtmsecu
	* @return Vtmsecu
	*/
	public function setVtmsecu($vtmsecu)
	{
	  $this->vtmsecu = (Integer) $vtmsecu;
	    return $this;
	}

	/**
	* Get vtmsecu
	*
	* @return null|Integer
	*/
	public function getVtmsecu()
	{
		return $this->vtmsecu;
	}

	/**
	* Set bctsecu
	*
	*Estos datos se ingresan en la Opción: Plan de Cuentas Contable
	*
	* @parámetro Integer $bctsecu
	* @return Bctsecu
	*/
	public function setBctsecu($bctsecu)
	{
	  $this->bctsecu = (Integer) $bctsecu;
	    return $this;
	}

	/**
	* Get bctsecu
	*
	* @return null|Integer
	*/
	public function getBctsecu()
	{
		return $this->bctsecu;
	}

	/**
	* Set vtmclas
	*
	*Clase de Movimiento
	*
	* @parámetro Integer $vtmclas
	* @return Vtmclas
	*/
	public function setVtmclas($vtmclas)
	{
	  $this->vtmclas = (Integer) $vtmclas;
	    return $this;
	}

	/**
	* Get vtmclas
	*
	* @return null|Integer
	*/
	public function getVtmclas()
	{
		return $this->vtmclas;
	}

	/**
	* Set vtmtipo
	*
	*Código Tipo de Movimiento
	*
	* @parámetro String $vtmtipo
	* @return Vtmtipo
	*/
	public function setVtmtipo($vtmtipo)
	{
	  $this->vtmtipo = (String) $vtmtipo;
	    return $this;
	}

	/**
	* Get vtmtipo
	*
	* @return null|String
	*/
	public function getVtmtipo()
	{
		return $this->vtmtipo;
	}

	/**
	* Set vtmdesc
	*
	*Descripción del Movimiento
	*
	* @parámetro String $vtmdesc
	* @return Vtmdesc
	*/
	public function setVtmdesc($vtmdesc)
	{
	  $this->vtmdesc = (String) $vtmdesc;
	    return $this;
	}

	/**
	* Get vtmdesc
	*
	* @return null|String
	*/
	public function getVtmdesc()
	{
		return $this->vtmdesc;
	}

	/**
	* Set vtmflg1
	*
	*Movimiento Ingreso Pre-Valorizado
	*
	* @parámetro Integer $vtmflg1
	* @return Vtmflg1
	*/
	public function setVtmflg1($vtmflg1)
	{
	  $this->vtmflg1 = (Integer) $vtmflg1;
	    return $this;
	}

	/**
	* Get vtmflg1
	*
	* @return null|Integer
	*/
	public function getVtmflg1()
	{
		return $this->vtmflg1;
	}

	/**
	* Set vtmflg2
	*
	*Interviene en Proceso de Costeo
	*
	* @parámetro Integer $vtmflg2
	* @return Vtmflg2
	*/
	public function setVtmflg2($vtmflg2)
	{
	  $this->vtmflg2 = (Integer) $vtmflg2;
	    return $this;
	}

	/**
	* Get vtmflg2
	*
	* @return null|Integer
	*/
	public function getVtmflg2()
	{
		return $this->vtmflg2;
	}

	/**
	* Set vtmflg3
	*
	*Altera Costo Promedio
	*
	* @parámetro Integer $vtmflg3
	* @return Vtmflg3
	*/
	public function setVtmflg3($vtmflg3)
	{
	  $this->vtmflg3 = (Integer) $vtmflg3;
	    return $this;
	}

	/**
	* Get vtmflg3
	*
	* @return null|Integer
	*/
	public function getVtmflg3()
	{
		return $this->vtmflg3;
	}

	/**
	* Set vtmflg4
	*
	*Salida por Gestión de Venta
	*
	* @parámetro Integer $vtmflg4
	* @return Vtmflg4
	*/
	public function setVtmflg4($vtmflg4)
	{
	  $this->vtmflg4 = (Integer) $vtmflg4;
	    return $this;
	}

	/**
	* Get vtmflg4
	*
	* @return null|Integer
	*/
	public function getVtmflg4()
	{
		return $this->vtmflg4;
	}

	/**
	* Set vtmcau1
	*
	*Código de Auxiliar 1
	*
	* @parámetro String $vtmcau1
	* @return Vtmcau1
	*/
	public function setVtmcau1($vtmcau1)
	{
	  $this->vtmcau1 = (String) $vtmcau1;
	    return $this;
	}

	/**
	* Get vtmcau1
	*
	* @return null|String
	*/
	public function getVtmcau1()
	{
		return $this->vtmcau1;
	}

	/**
	* Set vtmaux1
	*
	*Código Tipo de Auxiliar 1
	*
	* @parámetro String $vtmaux1
	* @return Vtmaux1
	*/
	public function setVtmaux1($vtmaux1)
	{
	  $this->vtmaux1 = (String) $vtmaux1;
	    return $this;
	}

	/**
	* Get vtmaux1
	*
	* @return null|String
	*/
	public function getVtmaux1()
	{
		return $this->vtmaux1;
	}

	/**
	* Set vtmref1
	*
	*Referencia 1
	*
	* @parámetro String $vtmref1
	* @return Vtmref1
	*/
	public function setVtmref1($vtmref1)
	{
	  $this->vtmref1 = (String) $vtmref1;
	    return $this;
	}

	/**
	* Get vtmref1
	*
	* @return null|String
	*/
	public function getVtmref1()
	{
		return $this->vtmref1;
	}

	/**
	* Set vtmcau2
	*
	*Código de Auxiliar 2
	*
	* @parámetro String $vtmcau2
	* @return Vtmcau2
	*/
	public function setVtmcau2($vtmcau2)
	{
	  $this->vtmcau2 = (String) $vtmcau2;
	    return $this;
	}

	/**
	* Get vtmcau2
	*
	* @return null|String
	*/
	public function getVtmcau2()
	{
		return $this->vtmcau2;
	}

	/**
	* Set vtmaux2
	*
	*Código Tipo de Auxiliar 2
	*
	* @parámetro String $vtmaux2
	* @return Vtmaux2
	*/
	public function setVtmaux2($vtmaux2)
	{
	  $this->vtmaux2 = (String) $vtmaux2;
	    return $this;
	}

	/**
	* Get vtmaux2
	*
	* @return null|String
	*/
	public function getVtmaux2()
	{
		return $this->vtmaux2;
	}

	/**
	* Set vtmref2
	*
	*Referencia 2
	*
	* @parámetro String $vtmref2
	* @return Vtmref2
	*/
	public function setVtmref2($vtmref2)
	{
	  $this->vtmref2 = (String) $vtmref2;
	    return $this;
	}

	/**
	* Get vtmref2
	*
	* @return null|String
	*/
	public function getVtmref2()
	{
		return $this->vtmref2;
	}

	/**
	* Set vtmcau3
	*
	*Código de Auxiliar 3
	*
	* @parámetro String $vtmcau3
	* @return Vtmcau3
	*/
	public function setVtmcau3($vtmcau3)
	{
	  $this->vtmcau3 = (String) $vtmcau3;
	    return $this;
	}

	/**
	* Get vtmcau3
	*
	* @return null|String
	*/
	public function getVtmcau3()
	{
		return $this->vtmcau3;
	}

	/**
	* Set vtmaux3
	*
	*Código Tipo de Auxiliar 3
	*
	* @parámetro String $vtmaux3
	* @return Vtmaux3
	*/
	public function setVtmaux3($vtmaux3)
	{
	  $this->vtmaux3 = (String) $vtmaux3;
	    return $this;
	}

	/**
	* Get vtmaux3
	*
	* @return null|String
	*/
	public function getVtmaux3()
	{
		return $this->vtmaux3;
	}

	/**
	* Set vtmref3
	*
	*Referencia 3
	*
	* @parámetro String $vtmref3
	* @return Vtmref3
	*/
	public function setVtmref3($vtmref3)
	{
	  $this->vtmref3 = (String) $vtmref3;
	    return $this;
	}

	/**
	* Get vtmref3
	*
	* @return null|String
	*/
	public function getVtmref3()
	{
		return $this->vtmref3;
	}

	/**
	* Set vtmfla1
	*
	*Bandera 1
	*
	* @parámetro String $vtmfla1
	* @return Vtmfla1
	*/
	public function setVtmfla1($vtmfla1)
	{
	  $this->vtmfla1 = (String) $vtmfla1;
	    return $this;
	}

	/**
	* Get vtmfla1
	*
	* @return null|String
	*/
	public function getVtmfla1()
	{
		return $this->vtmfla1;
	}

	/**
	* Set vtmfla2
	*
	*Bandera 2
	*
	* @parámetro String $vtmfla2
	* @return Vtmfla2
	*/
	public function setVtmfla2($vtmfla2)
	{
	  $this->vtmfla2 = (String) $vtmfla2;
	    return $this;
	}

	/**
	* Get vtmfla2
	*
	* @return null|String
	*/
	public function getVtmfla2()
	{
		return $this->vtmfla2;
	}

	/**
	* Set vtmfla3
	*
	*Bandera 3
	*
	* @parámetro String $vtmfla3
	* @return Vtmfla3
	*/
	public function setVtmfla3($vtmfla3)
	{
	  $this->vtmfla3 = (String) $vtmfla3;
	    return $this;
	}

	/**
	* Get vtmfla3
	*
	* @return null|String
	*/
	public function getVtmfla3()
	{
		return $this->vtmfla3;
	}

	/**
	* Set vtmnopv
	*
	*Nombre del Proceso de Valoración
	*
	* @parámetro String $vtmnopv
	* @return Vtmnopv
	*/
	public function setVtmnopv($vtmnopv)
	{
	  $this->vtmnopv = (String) $vtmnopv;
	    return $this;
	}

	/**
	* Get vtmnopv
	*
	* @return null|String
	*/
	public function getVtmnopv()
	{
		return $this->vtmnopv;
	}

	/**
	* Set vtmusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vtmusuc
	* @return Vtmusuc
	*/
	public function setVtmusuc($vtmusuc)
	{
	  $this->vtmusuc = (String) $vtmusuc;
	    return $this;
	}

	/**
	* Get vtmusuc
	*
	* @return null|String
	*/
	public function getVtmusuc()
	{
		return $this->vtmusuc;
	}

	/**
	* Set vtmfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vtmfecc
	* @return Vtmfecc
	*/
	public function setVtmfecc($vtmfecc)
	{
	  $this->vtmfecc = (String) $vtmfecc;
	    return $this;
	}

	/**
	* Get vtmfecc
	*
	* @return null|Date
	*/
	public function getVtmfecc()
	{
		return $this->vtmfecc;
	}

	/**
	* Set vtmusum
	*
	*Usuario de modificación
	*
	* @parámetro String $vtmusum
	* @return Vtmusum
	*/
	public function setVtmusum($vtmusum)
	{
	  $this->vtmusum = (String) $vtmusum;
	    return $this;
	}

	/**
	* Get vtmusum
	*
	* @return null|String
	*/
	public function getVtmusum()
	{
		return $this->vtmusum;
	}

	/**
	* Set vtmfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vtmfecm
	* @return Vtmfecm
	*/
	public function setVtmfecm($vtmfecm)
	{
	  $this->vtmfecm = (String) $vtmfecm;
	    return $this;
	}

	/**
	* Get vtmfecm
	*
	* @return null|Date
	*/
	public function getVtmfecm()
	{
		return $this->vtmfecm;
	}

	/**
	* Set vtmtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vtmtask
	* @return Vtmtask
	*/
	public function setVtmtask($vtmtask)
	{
	  $this->vtmtask = (String) $vtmtask;
	    return $this;
	}

	/**
	* Get vtmtask
	*
	* @return null|String
	*/
	public function getVtmtask()
	{
		return $this->vtmtask;
	}

	/**
	* Set vtmpara
	*
	*Banera de borrado
	*
	* @parámetro Integer $vtmpara
	* @return Vtmpara
	*/
	public function setVtmpara($vtmpara)
	{
	  $this->vtmpara = (Integer) $vtmpara;
	    return $this;
	}

	/**
	* Get vtmpara
	*
	* @return null|Integer
	*/
	public function getVtmpara()
	{
		return $this->vtmpara;
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

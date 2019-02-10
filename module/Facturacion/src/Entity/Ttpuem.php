<?php
 /**
 * Model of the Ttpuem table
 *
 * It is used to convert the   Ttpuem entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttpuem
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttpuem
{

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
		* @var String
		* Required field
		* Field visible in the form
		* Código del Punto de Emisión
		*/
		protected $tpmcodi;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nombre del Punto de Emisión
		*/
		protected $tpmnomb;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Factura
		*/
		protected $tpmfact;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Nota de Venta
		*/
		protected $tpmnove;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Nota de Crédito de Factura
		*/
		protected $tpmncrf;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Nota de Crédito de Nota de Venta
		*/
		protected $tpmncrn;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Nota de Débito de Factura
		*/
		protected $tpmndef;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Nota de Débito de Nota de Venta
		*/
		protected $tpmnden;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Número de Retención en Compras
		*/
		protected $tpmnrec;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Número de Retención en Ventas
		*/
		protected $tpmnrev;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Guía de Remisión de Factura
		*/
		protected $tpmguif;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Guía de Remisión de Nota de Venta
		*/
		protected $tpmguin;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Nota de Crédito por Devolución de Nota de Venta
		*/
		protected $tpmncdn;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Número de Pedido
		*/
		protected $tpmpedi;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Nota de Crédito por Devolución de Factura
		*/
		protected $tpmncdf;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Número de Orden por Distribuidor
		*/
		protected $tpmnord;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Correlativo de Movimiento de Caja
		*/
		protected $tpmmovc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Serie del Punto de Emisión
		*/
		protected $tpmnuse;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor de la Venta Mínima
		*/
		protected $tpmvavm;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación
		*/
		protected $tpmsitu;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tpmusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tpmfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tpmusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tpmfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tpmtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tpmpara;

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
	* Name of the table: ttpuem
	* 
	 */
	const TABLE="ttpuem";

	/**
	*Primary key
*/
		 const PKEY = "tpmsecu";



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
		throw new \Exception('Class Entity: Ttpuem Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttpuem. Invalid specified property: get'.$name);
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
	* Set tpmcodi
	*
	*Código del Punto de Emisión
	*
	* @parámetro String $tpmcodi
	* @return Tpmcodi
	*/
	public function setTpmcodi($tpmcodi)
	{
	  $this->tpmcodi = (String) $tpmcodi;
	    return $this;
	}

	/**
	* Get tpmcodi
	*
	* @return null|String
	*/
	public function getTpmcodi()
	{
		return $this->tpmcodi;
	}

	/**
	* Set tpmnomb
	*
	*Nombre del Punto de Emisión
	*
	* @parámetro String $tpmnomb
	* @return Tpmnomb
	*/
	public function setTpmnomb($tpmnomb)
	{
	  $this->tpmnomb = (String) $tpmnomb;
	    return $this;
	}

	/**
	* Get tpmnomb
	*
	* @return null|String
	*/
	public function getTpmnomb()
	{
		return $this->tpmnomb;
	}

	/**
	* Set tpmfact
	*
	*Número de Factura
	*
	* @parámetro Decimal $tpmfact
	* @return Tpmfact
	*/
	public function setTpmfact($tpmfact)
	{
	  $this->tpmfact = (Double) $tpmfact;
	    return $this;
	}

	/**
	* Get tpmfact
	*
	* @return null|Decimal
	*/
	public function getTpmfact()
	{
		return $this->tpmfact;
	}

	/**
	* Set tpmnove
	*
	*Número de Nota de Venta
	*
	* @parámetro Decimal $tpmnove
	* @return Tpmnove
	*/
	public function setTpmnove($tpmnove)
	{
	  $this->tpmnove = (Double) $tpmnove;
	    return $this;
	}

	/**
	* Get tpmnove
	*
	* @return null|Decimal
	*/
	public function getTpmnove()
	{
		return $this->tpmnove;
	}

	/**
	* Set tpmncrf
	*
	*Nota de Crédito de Factura
	*
	* @parámetro Decimal $tpmncrf
	* @return Tpmncrf
	*/
	public function setTpmncrf($tpmncrf)
	{
	  $this->tpmncrf = (Double) $tpmncrf;
	    return $this;
	}

	/**
	* Get tpmncrf
	*
	* @return null|Decimal
	*/
	public function getTpmncrf()
	{
		return $this->tpmncrf;
	}

	/**
	* Set tpmncrn
	*
	*Nota de Crédito de Nota de Venta
	*
	* @parámetro Decimal $tpmncrn
	* @return Tpmncrn
	*/
	public function setTpmncrn($tpmncrn)
	{
	  $this->tpmncrn = (Double) $tpmncrn;
	    return $this;
	}

	/**
	* Get tpmncrn
	*
	* @return null|Decimal
	*/
	public function getTpmncrn()
	{
		return $this->tpmncrn;
	}

	/**
	* Set tpmndef
	*
	*Nota de Débito de Factura
	*
	* @parámetro Integer $tpmndef
	* @return Tpmndef
	*/
	public function setTpmndef($tpmndef)
	{
	  $this->tpmndef = (Integer) $tpmndef;
	    return $this;
	}

	/**
	* Get tpmndef
	*
	* @return null|Integer
	*/
	public function getTpmndef()
	{
		return $this->tpmndef;
	}

	/**
	* Set tpmnden
	*
	*Nota de Débito de Nota de Venta
	*
	* @parámetro Integer $tpmnden
	* @return Tpmnden
	*/
	public function setTpmnden($tpmnden)
	{
	  $this->tpmnden = (Integer) $tpmnden;
	    return $this;
	}

	/**
	* Get tpmnden
	*
	* @return null|Integer
	*/
	public function getTpmnden()
	{
		return $this->tpmnden;
	}

	/**
	* Set tpmnrec
	*
	*Número de Retención en Compras
	*
	* @parámetro Integer $tpmnrec
	* @return Tpmnrec
	*/
	public function setTpmnrec($tpmnrec)
	{
	  $this->tpmnrec = (Integer) $tpmnrec;
	    return $this;
	}

	/**
	* Get tpmnrec
	*
	* @return null|Integer
	*/
	public function getTpmnrec()
	{
		return $this->tpmnrec;
	}

	/**
	* Set tpmnrev
	*
	*Número de Retención en Ventas
	*
	* @parámetro Integer $tpmnrev
	* @return Tpmnrev
	*/
	public function setTpmnrev($tpmnrev)
	{
	  $this->tpmnrev = (Integer) $tpmnrev;
	    return $this;
	}

	/**
	* Get tpmnrev
	*
	* @return null|Integer
	*/
	public function getTpmnrev()
	{
		return $this->tpmnrev;
	}

	/**
	* Set tpmguif
	*
	*Guía de Remisión de Factura
	*
	* @parámetro Integer $tpmguif
	* @return Tpmguif
	*/
	public function setTpmguif($tpmguif)
	{
	  $this->tpmguif = (Integer) $tpmguif;
	    return $this;
	}

	/**
	* Get tpmguif
	*
	* @return null|Integer
	*/
	public function getTpmguif()
	{
		return $this->tpmguif;
	}

	/**
	* Set tpmguin
	*
	*Guía de Remisión de Nota de Venta
	*
	* @parámetro Integer $tpmguin
	* @return Tpmguin
	*/
	public function setTpmguin($tpmguin)
	{
	  $this->tpmguin = (Integer) $tpmguin;
	    return $this;
	}

	/**
	* Get tpmguin
	*
	* @return null|Integer
	*/
	public function getTpmguin()
	{
		return $this->tpmguin;
	}

	/**
	* Set tpmncdn
	*
	*Nota de Crédito por Devolución de Nota de Venta
	*
	* @parámetro Integer $tpmncdn
	* @return Tpmncdn
	*/
	public function setTpmncdn($tpmncdn)
	{
	  $this->tpmncdn = (Integer) $tpmncdn;
	    return $this;
	}

	/**
	* Get tpmncdn
	*
	* @return null|Integer
	*/
	public function getTpmncdn()
	{
		return $this->tpmncdn;
	}

	/**
	* Set tpmpedi
	*
	*Número de Pedido
	*
	* @parámetro Integer $tpmpedi
	* @return Tpmpedi
	*/
	public function setTpmpedi($tpmpedi)
	{
	  $this->tpmpedi = (Integer) $tpmpedi;
	    return $this;
	}

	/**
	* Get tpmpedi
	*
	* @return null|Integer
	*/
	public function getTpmpedi()
	{
		return $this->tpmpedi;
	}

	/**
	* Set tpmncdf
	*
	*Nota de Crédito por Devolución de Factura
	*
	* @parámetro Integer $tpmncdf
	* @return Tpmncdf
	*/
	public function setTpmncdf($tpmncdf)
	{
	  $this->tpmncdf = (Integer) $tpmncdf;
	    return $this;
	}

	/**
	* Get tpmncdf
	*
	* @return null|Integer
	*/
	public function getTpmncdf()
	{
		return $this->tpmncdf;
	}

	/**
	* Set tpmnord
	*
	*Número de Orden por Distribuidor
	*
	* @parámetro Integer $tpmnord
	* @return Tpmnord
	*/
	public function setTpmnord($tpmnord)
	{
	  $this->tpmnord = (Integer) $tpmnord;
	    return $this;
	}

	/**
	* Get tpmnord
	*
	* @return null|Integer
	*/
	public function getTpmnord()
	{
		return $this->tpmnord;
	}

	/**
	* Set tpmmovc
	*
	*Correlativo de Movimiento de Caja
	*
	* @parámetro Integer $tpmmovc
	* @return Tpmmovc
	*/
	public function setTpmmovc($tpmmovc)
	{
	  $this->tpmmovc = (Integer) $tpmmovc;
	    return $this;
	}

	/**
	* Get tpmmovc
	*
	* @return null|Integer
	*/
	public function getTpmmovc()
	{
		return $this->tpmmovc;
	}

	/**
	* Set tpmnuse
	*
	*Número de Serie del Punto de Emisión
	*
	* @parámetro String $tpmnuse
	* @return Tpmnuse
	*/
	public function setTpmnuse($tpmnuse)
	{
	  $this->tpmnuse = (String) $tpmnuse;
	    return $this;
	}

	/**
	* Get tpmnuse
	*
	* @return null|String
	*/
	public function getTpmnuse()
	{
		return $this->tpmnuse;
	}

	/**
	* Set tpmvavm
	*
	*Valor de la Venta Mínima
	*
	* @parámetro Decimal $tpmvavm
	* @return Tpmvavm
	*/
	public function setTpmvavm($tpmvavm)
	{
	  $this->tpmvavm = (Double) $tpmvavm;
	    return $this;
	}

	/**
	* Get tpmvavm
	*
	* @return null|Decimal
	*/
	public function getTpmvavm()
	{
		return $this->tpmvavm;
	}

	/**
	* Set tpmsitu
	*
	*Situación
	*
	* @parámetro Integer $tpmsitu
	* @return Tpmsitu
	*/
	public function setTpmsitu($tpmsitu)
	{
	  $this->tpmsitu = (Integer) $tpmsitu;
	    return $this;
	}

	/**
	* Get tpmsitu
	*
	* @return null|Integer
	*/
	public function getTpmsitu()
	{
		return $this->tpmsitu;
	}

	/**
	* Set tpmusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tpmusuc
	* @return Tpmusuc
	*/
	public function setTpmusuc($tpmusuc)
	{
	  $this->tpmusuc = (String) $tpmusuc;
	    return $this;
	}

	/**
	* Get tpmusuc
	*
	* @return null|String
	*/
	public function getTpmusuc()
	{
		return $this->tpmusuc;
	}

	/**
	* Set tpmfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tpmfecc
	* @return Tpmfecc
	*/
	public function setTpmfecc($tpmfecc)
	{
	  $this->tpmfecc = (String) $tpmfecc;
	    return $this;
	}

	/**
	* Get tpmfecc
	*
	* @return null|Date
	*/
	public function getTpmfecc()
	{
		return $this->tpmfecc;
	}

	/**
	* Set tpmusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tpmusum
	* @return Tpmusum
	*/
	public function setTpmusum($tpmusum)
	{
	  $this->tpmusum = (String) $tpmusum;
	    return $this;
	}

	/**
	* Get tpmusum
	*
	* @return null|String
	*/
	public function getTpmusum()
	{
		return $this->tpmusum;
	}

	/**
	* Set tpmfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tpmfecm
	* @return Tpmfecm
	*/
	public function setTpmfecm($tpmfecm)
	{
	  $this->tpmfecm = (String) $tpmfecm;
	    return $this;
	}

	/**
	* Get tpmfecm
	*
	* @return null|Date
	*/
	public function getTpmfecm()
	{
		return $this->tpmfecm;
	}

	/**
	* Set tpmtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tpmtask
	* @return Tpmtask
	*/
	public function setTpmtask($tpmtask)
	{
	  $this->tpmtask = (String) $tpmtask;
	    return $this;
	}

	/**
	* Get tpmtask
	*
	* @return null|String
	*/
	public function getTpmtask()
	{
		return $this->tpmtask;
	}

	/**
	* Set tpmpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tpmpara
	* @return Tpmpara
	*/
	public function setTpmpara($tpmpara)
	{
	  $this->tpmpara = (Integer) $tpmpara;
	    return $this;
	}

	/**
	* Get tpmpara
	*
	* @return null|Integer
	*/
	public function getTpmpara()
	{
		return $this->tpmpara;
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

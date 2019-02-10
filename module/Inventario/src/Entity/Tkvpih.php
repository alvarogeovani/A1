<?php
 /**
 * Model of the Tkvpih table
 *
 * It is used to convert the   Tkvpih entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tkvpih
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tkvpih
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Trabajar con Compras Importadas
		*/
		protected $kvpsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Proveedores
		*/
		protected $pprsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Registrar Ordenes de Compras
		*/
		protected $kvhsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Registrar Monedas
		*/
		protected $bmosecu;
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
		* Estos datos se ingresan en la Opción: Formas de Pago
		*/
		protected $tcpsecu;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Transportistas
		*/
		protected $ptrsecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Número de Póliza
		*/
		protected $kvpinro;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Documento Externo
		*/
		protected $kvpinie;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Documento Comercial
		*/
		protected $kvpdoco;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Guía de Remisión
		*/
		protected $kvpnugr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Forma de Entrega
		*/
		protected $kvpfoen;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Agencia de Aduanas
		*/
		protected $kvpagad;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Llegada
		*/
		protected $kvpfec1;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Proceso
		*/
		protected $kvpfec2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 1
		*/
		protected $kvpref1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 2
		*/
		protected $kvpref2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 3
		*/
		protected $kvpref3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número Orden de Compra
		*/
		protected $kvhcnro;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación de la Importación
		*/
		protected $kvpsitu;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $kvpusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $kvpfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $kvpusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $kvpfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $kvptask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandeja de borrado
		*/
		protected $kvppara;

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
	* Name of the table: tkvpih
	* 
	 */
	const TABLE="tkvpih";

	/**
	*Primary key
*/
		 const PKEY = "kvpsecu";



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
		throw new \Exception('Class Entity: Tkvpih Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tkvpih. Invalid specified property: get'.$name);
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
	* Set kvpsecu
	*
	*Estos datos se ingresan en la Opción: Trabajar con Compras Importadas
	*
	* @parámetro Integer $kvpsecu
	* @return Kvpsecu
	*/
	public function setKvpsecu($kvpsecu)
	{
	  $this->kvpsecu = (Integer) $kvpsecu;
	    return $this;
	}

	/**
	* Get kvpsecu
	*
	* @return null|Integer
	*/
	public function getKvpsecu()
	{
		return $this->kvpsecu;
	}

	/**
	* Set pprsecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Proveedores
	*
	* @parámetro Integer $pprsecu
	* @return Pprsecu
	*/
	public function setPprsecu($pprsecu)
	{
	  $this->pprsecu = (Integer) $pprsecu;
	    return $this;
	}

	/**
	* Get pprsecu
	*
	* @return null|Integer
	*/
	public function getPprsecu()
	{
		return $this->pprsecu;
	}

	/**
	* Set kvhsecu
	*
	*Estos datos se ingresan en la Opción: Registrar Ordenes de Compras
	*
	* @parámetro Integer $kvhsecu
	* @return Kvhsecu
	*/
	public function setKvhsecu($kvhsecu)
	{
	  $this->kvhsecu = (Integer) $kvhsecu;
	    return $this;
	}

	/**
	* Get kvhsecu
	*
	* @return null|Integer
	*/
	public function getKvhsecu()
	{
		return $this->kvhsecu;
	}

	/**
	* Set bmosecu
	*
	*Estos datos se ingresan en la Opción: Registrar Monedas
	*
	* @parámetro Integer $bmosecu
	* @return Bmosecu
	*/
	public function setBmosecu($bmosecu)
	{
	  $this->bmosecu = (Integer) $bmosecu;
	    return $this;
	}

	/**
	* Get bmosecu
	*
	* @return null|Integer
	*/
	public function getBmosecu()
	{
		return $this->bmosecu;
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
	* Set tcpsecu
	*
	*Estos datos se ingresan en la Opción: Formas de Pago
	*
	* @parámetro Integer $tcpsecu
	* @return Tcpsecu
	*/
	public function setTcpsecu($tcpsecu)
	{
	  $this->tcpsecu = (Integer) $tcpsecu;
	    return $this;
	}

	/**
	* Get tcpsecu
	*
	* @return null|Integer
	*/
	public function getTcpsecu()
	{
		return $this->tcpsecu;
	}

	/**
	* Set ptrsecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Transportistas
	*
	* @parámetro Integer $ptrsecu
	* @return Ptrsecu
	*/
	public function setPtrsecu($ptrsecu)
	{
	  $this->ptrsecu = (Integer) $ptrsecu;
	    return $this;
	}

	/**
	* Get ptrsecu
	*
	* @return null|Integer
	*/
	public function getPtrsecu()
	{
		return $this->ptrsecu;
	}

	/**
	* Set kvpinro
	*
	*Número de Póliza
	*
	* @parámetro String $kvpinro
	* @return Kvpinro
	*/
	public function setKvpinro($kvpinro)
	{
	  $this->kvpinro = (String) $kvpinro;
	    return $this;
	}

	/**
	* Get kvpinro
	*
	* @return null|String
	*/
	public function getKvpinro()
	{
		return $this->kvpinro;
	}

	/**
	* Set kvpinie
	*
	*Número de Documento Externo
	*
	* @parámetro String $kvpinie
	* @return Kvpinie
	*/
	public function setKvpinie($kvpinie)
	{
	  $this->kvpinie = (String) $kvpinie;
	    return $this;
	}

	/**
	* Get kvpinie
	*
	* @return null|String
	*/
	public function getKvpinie()
	{
		return $this->kvpinie;
	}

	/**
	* Set kvpdoco
	*
	*Número de Documento Comercial
	*
	* @parámetro String $kvpdoco
	* @return Kvpdoco
	*/
	public function setKvpdoco($kvpdoco)
	{
	  $this->kvpdoco = (String) $kvpdoco;
	    return $this;
	}

	/**
	* Get kvpdoco
	*
	* @return null|String
	*/
	public function getKvpdoco()
	{
		return $this->kvpdoco;
	}

	/**
	* Set kvpnugr
	*
	*Número de Guía de Remisión
	*
	* @parámetro String $kvpnugr
	* @return Kvpnugr
	*/
	public function setKvpnugr($kvpnugr)
	{
	  $this->kvpnugr = (String) $kvpnugr;
	    return $this;
	}

	/**
	* Get kvpnugr
	*
	* @return null|String
	*/
	public function getKvpnugr()
	{
		return $this->kvpnugr;
	}

	/**
	* Set kvpfoen
	*
	*Forma de Entrega
	*
	* @parámetro Decimal $kvpfoen
	* @return Kvpfoen
	*/
	public function setKvpfoen($kvpfoen)
	{
	  $this->kvpfoen = (Double) $kvpfoen;
	    return $this;
	}

	/**
	* Get kvpfoen
	*
	* @return null|Decimal
	*/
	public function getKvpfoen()
	{
		return $this->kvpfoen;
	}

	/**
	* Set kvpagad
	*
	*Agencia de Aduanas
	*
	* @parámetro String $kvpagad
	* @return Kvpagad
	*/
	public function setKvpagad($kvpagad)
	{
	  $this->kvpagad = (String) $kvpagad;
	    return $this;
	}

	/**
	* Get kvpagad
	*
	* @return null|String
	*/
	public function getKvpagad()
	{
		return $this->kvpagad;
	}

	/**
	* Set kvpfec1
	*
	*Fecha de Llegada
	*
	* @parámetro Date $kvpfec1
	* @return Kvpfec1
	*/
	public function setKvpfec1($kvpfec1)
	{
	  $this->kvpfec1 = (String) $kvpfec1;
	    return $this;
	}

	/**
	* Get kvpfec1
	*
	* @return null|Date
	*/
	public function getKvpfec1()
	{
		return $this->kvpfec1;
	}

	/**
	* Set kvpfec2
	*
	*Fecha de Proceso
	*
	* @parámetro Date $kvpfec2
	* @return Kvpfec2
	*/
	public function setKvpfec2($kvpfec2)
	{
	  $this->kvpfec2 = (String) $kvpfec2;
	    return $this;
	}

	/**
	* Get kvpfec2
	*
	* @return null|Date
	*/
	public function getKvpfec2()
	{
		return $this->kvpfec2;
	}

	/**
	* Set kvpref1
	*
	*Referencia 1
	*
	* @parámetro String $kvpref1
	* @return Kvpref1
	*/
	public function setKvpref1($kvpref1)
	{
	  $this->kvpref1 = (String) $kvpref1;
	    return $this;
	}

	/**
	* Get kvpref1
	*
	* @return null|String
	*/
	public function getKvpref1()
	{
		return $this->kvpref1;
	}

	/**
	* Set kvpref2
	*
	*Referencia 2
	*
	* @parámetro String $kvpref2
	* @return Kvpref2
	*/
	public function setKvpref2($kvpref2)
	{
	  $this->kvpref2 = (String) $kvpref2;
	    return $this;
	}

	/**
	* Get kvpref2
	*
	* @return null|String
	*/
	public function getKvpref2()
	{
		return $this->kvpref2;
	}

	/**
	* Set kvpref3
	*
	*Referencia 3
	*
	* @parámetro String $kvpref3
	* @return Kvpref3
	*/
	public function setKvpref3($kvpref3)
	{
	  $this->kvpref3 = (String) $kvpref3;
	    return $this;
	}

	/**
	* Get kvpref3
	*
	* @return null|String
	*/
	public function getKvpref3()
	{
		return $this->kvpref3;
	}

	/**
	* Set kvhcnro
	*
	*Número Orden de Compra
	*
	* @parámetro String $kvhcnro
	* @return Kvhcnro
	*/
	public function setKvhcnro($kvhcnro)
	{
	  $this->kvhcnro = (String) $kvhcnro;
	    return $this;
	}

	/**
	* Get kvhcnro
	*
	* @return null|String
	*/
	public function getKvhcnro()
	{
		return $this->kvhcnro;
	}

	/**
	* Set kvpsitu
	*
	*Situación de la Importación
	*
	* @parámetro Integer $kvpsitu
	* @return Kvpsitu
	*/
	public function setKvpsitu($kvpsitu)
	{
	  $this->kvpsitu = (Integer) $kvpsitu;
	    return $this;
	}

	/**
	* Get kvpsitu
	*
	* @return null|Integer
	*/
	public function getKvpsitu()
	{
		return $this->kvpsitu;
	}

	/**
	* Set kvpusuc
	*
	*Usuario de creación
	*
	* @parámetro String $kvpusuc
	* @return Kvpusuc
	*/
	public function setKvpusuc($kvpusuc)
	{
	  $this->kvpusuc = (String) $kvpusuc;
	    return $this;
	}

	/**
	* Get kvpusuc
	*
	* @return null|String
	*/
	public function getKvpusuc()
	{
		return $this->kvpusuc;
	}

	/**
	* Set kvpfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $kvpfecc
	* @return Kvpfecc
	*/
	public function setKvpfecc($kvpfecc)
	{
	  $this->kvpfecc = (String) $kvpfecc;
	    return $this;
	}

	/**
	* Get kvpfecc
	*
	* @return null|Date
	*/
	public function getKvpfecc()
	{
		return $this->kvpfecc;
	}

	/**
	* Set kvpusum
	*
	*Usuario de modificación
	*
	* @parámetro String $kvpusum
	* @return Kvpusum
	*/
	public function setKvpusum($kvpusum)
	{
	  $this->kvpusum = (String) $kvpusum;
	    return $this;
	}

	/**
	* Get kvpusum
	*
	* @return null|String
	*/
	public function getKvpusum()
	{
		return $this->kvpusum;
	}

	/**
	* Set kvpfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $kvpfecm
	* @return Kvpfecm
	*/
	public function setKvpfecm($kvpfecm)
	{
	  $this->kvpfecm = (String) $kvpfecm;
	    return $this;
	}

	/**
	* Get kvpfecm
	*
	* @return null|Date
	*/
	public function getKvpfecm()
	{
		return $this->kvpfecm;
	}

	/**
	* Set kvptask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $kvptask
	* @return Kvptask
	*/
	public function setKvptask($kvptask)
	{
	  $this->kvptask = (String) $kvptask;
	    return $this;
	}

	/**
	* Get kvptask
	*
	* @return null|String
	*/
	public function getKvptask()
	{
		return $this->kvptask;
	}

	/**
	* Set kvppara
	*
	*Bandeja de borrado
	*
	* @parámetro Integer $kvppara
	* @return Kvppara
	*/
	public function setKvppara($kvppara)
	{
	  $this->kvppara = (Integer) $kvppara;
	    return $this;
	}

	/**
	* Get kvppara
	*
	* @return null|Integer
	*/
	public function getKvppara()
	{
		return $this->kvppara;
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

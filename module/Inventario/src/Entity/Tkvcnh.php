<?php
 /**
 * Model of the Tkvcnh table
 *
 * It is used to convert the   Tkvcnh entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tkvcnh
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tkvcnh
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Registro de Ordenes de Compra Nacionales General (Cabecera)
		*/
		protected $kvcsecu;
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
		* Estos datos se ingresan en la Opción: Tipos de Movimientos de Bodega
		*/
		protected $vtmsecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número Orden de Compra
		*/
		protected $kvhcnro;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número Guía de Remisión
		*/
		protected $kvcnugr;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Entrega
		*/
		protected $kvcfeen;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Factura del Proveedor
		*/
		protected $kvcnufa;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Proveedor
		*/
		protected $pprocve;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Centro de Costo
		*/
		protected $bcdccve;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Compra con Impuesto (Moneda  Nacional)
		*/
		protected $kvcnvva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta que aplica 0% del IVA (Moneda Nacional)
		*/
		protected $kvcncpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Compra sin Impuesto (Moneda  Nacional)
		*/
		protected $kvcnvvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 1 (Moneda  Nacional)
		*/
		protected $kvcnds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda  Nacional)
		*/
		protected $kvcniva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda  Nacional)
		*/
		protected $kvcnim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda  Nacional)
		*/
		protected $kvcnim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio Compra (Moneda  Nacional)
		*/
		protected $kvcnpvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Compra con Impuesto (Moneda Extranjera)
		*/
		protected $kvcevva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta que aplica 0% del IVA (Moneda Extranjera)
		*/
		protected $kvcecpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Compra sin Impuesto (Moneda Extranjera)
		*/
		protected $kvcevvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Total Valor Descuento 1 (Moneda Extranjera)
		*/
		protected $kvceds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda Extranjera)
		*/
		protected $kvceiva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda Extranjera)
		*/
		protected $kvceim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda Extranjera)
		*/
		protected $kvceim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio Compra (Moneda Extranjera)
		*/
		protected $kvcepvt;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Forma de Entrega
		*/
		protected $kvcfoen;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Libre 1
		*/
		protected $kvccli1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Libre 2
		*/
		protected $kvccli2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Libre 3
		*/
		protected $kvccli3;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $kvcusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $kvcfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $kvcusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $kvcfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $kvctask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $kvcpara;

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
	* Name of the table: tkvcnh
	* 
	 */
	const TABLE="tkvcnh";

	/**
	*Primary key
*/
		 const PKEY = "kvcsecu";



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
		throw new \Exception('Class Entity: Tkvcnh Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tkvcnh. Invalid specified property: get'.$name);
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
	* Set kvcsecu
	*
	*Estos datos se ingresan en la Opción: Registro de Ordenes de Compra Nacionales General (Cabecera)
	*
	* @parámetro Integer $kvcsecu
	* @return Kvcsecu
	*/
	public function setKvcsecu($kvcsecu)
	{
	  $this->kvcsecu = (Integer) $kvcsecu;
	    return $this;
	}

	/**
	* Get kvcsecu
	*
	* @return null|Integer
	*/
	public function getKvcsecu()
	{
		return $this->kvcsecu;
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
	* Set kvcnugr
	*
	*Número Guía de Remisión
	*
	* @parámetro String $kvcnugr
	* @return Kvcnugr
	*/
	public function setKvcnugr($kvcnugr)
	{
	  $this->kvcnugr = (String) $kvcnugr;
	    return $this;
	}

	/**
	* Get kvcnugr
	*
	* @return null|String
	*/
	public function getKvcnugr()
	{
		return $this->kvcnugr;
	}

	/**
	* Set kvcfeen
	*
	*Fecha de Entrega
	*
	* @parámetro Date $kvcfeen
	* @return Kvcfeen
	*/
	public function setKvcfeen($kvcfeen)
	{
	  $this->kvcfeen = (String) $kvcfeen;
	    return $this;
	}

	/**
	* Get kvcfeen
	*
	* @return null|Date
	*/
	public function getKvcfeen()
	{
		return $this->kvcfeen;
	}

	/**
	* Set kvcnufa
	*
	*Número de Factura del Proveedor
	*
	* @parámetro String $kvcnufa
	* @return Kvcnufa
	*/
	public function setKvcnufa($kvcnufa)
	{
	  $this->kvcnufa = (String) $kvcnufa;
	    return $this;
	}

	/**
	* Get kvcnufa
	*
	* @return null|String
	*/
	public function getKvcnufa()
	{
		return $this->kvcnufa;
	}

	/**
	* Set pprocve
	*
	*Código de Proveedor
	*
	* @parámetro String $pprocve
	* @return Pprocve
	*/
	public function setPprocve($pprocve)
	{
	  $this->pprocve = (String) $pprocve;
	    return $this;
	}

	/**
	* Get pprocve
	*
	* @return null|String
	*/
	public function getPprocve()
	{
		return $this->pprocve;
	}

	/**
	* Set bcdccve
	*
	*Código Centro de Costo
	*
	* @parámetro String $bcdccve
	* @return Bcdccve
	*/
	public function setBcdccve($bcdccve)
	{
	  $this->bcdccve = (String) $bcdccve;
	    return $this;
	}

	/**
	* Get bcdccve
	*
	* @return null|String
	*/
	public function getBcdccve()
	{
		return $this->bcdccve;
	}

	/**
	* Set kvcnvva
	*
	*Valor Total Compra con Impuesto (Moneda  Nacional)
	*
	* @parámetro Decimal $kvcnvva
	* @return Kvcnvva
	*/
	public function setKvcnvva($kvcnvva)
	{
	  $this->kvcnvva = (Double) $kvcnvva;
	    return $this;
	}

	/**
	* Get kvcnvva
	*
	* @return null|Decimal
	*/
	public function getKvcnvva()
	{
		return $this->kvcnvva;
	}

	/**
	* Set kvcncpi
	*
	*Valor Total - Venta que aplica 0% del IVA (Moneda Nacional)
	*
	* @parámetro Decimal $kvcncpi
	* @return Kvcncpi
	*/
	public function setKvcncpi($kvcncpi)
	{
	  $this->kvcncpi = (Double) $kvcncpi;
	    return $this;
	}

	/**
	* Get kvcncpi
	*
	* @return null|Decimal
	*/
	public function getKvcncpi()
	{
		return $this->kvcncpi;
	}

	/**
	* Set kvcnvvi
	*
	*Valor Total Compra sin Impuesto (Moneda  Nacional)
	*
	* @parámetro Decimal $kvcnvvi
	* @return Kvcnvvi
	*/
	public function setKvcnvvi($kvcnvvi)
	{
	  $this->kvcnvvi = (Double) $kvcnvvi;
	    return $this;
	}

	/**
	* Get kvcnvvi
	*
	* @return null|Decimal
	*/
	public function getKvcnvvi()
	{
		return $this->kvcnvvi;
	}

	/**
	* Set kvcnds1
	*
	*Valor Total Descuento 1 (Moneda  Nacional)
	*
	* @parámetro Decimal $kvcnds1
	* @return Kvcnds1
	*/
	public function setKvcnds1($kvcnds1)
	{
	  $this->kvcnds1 = (Double) $kvcnds1;
	    return $this;
	}

	/**
	* Get kvcnds1
	*
	* @return null|Decimal
	*/
	public function getKvcnds1()
	{
		return $this->kvcnds1;
	}

	/**
	* Set kvcniva
	*
	*Valor Total Impuesto 1 (Moneda  Nacional)
	*
	* @parámetro Decimal $kvcniva
	* @return Kvcniva
	*/
	public function setKvcniva($kvcniva)
	{
	  $this->kvcniva = (Double) $kvcniva;
	    return $this;
	}

	/**
	* Get kvcniva
	*
	* @return null|Decimal
	*/
	public function getKvcniva()
	{
		return $this->kvcniva;
	}

	/**
	* Set kvcnim2
	*
	*Valor Total Impuesto 2 (Moneda  Nacional)
	*
	* @parámetro Decimal $kvcnim2
	* @return Kvcnim2
	*/
	public function setKvcnim2($kvcnim2)
	{
	  $this->kvcnim2 = (Double) $kvcnim2;
	    return $this;
	}

	/**
	* Get kvcnim2
	*
	* @return null|Decimal
	*/
	public function getKvcnim2()
	{
		return $this->kvcnim2;
	}

	/**
	* Set kvcnim3
	*
	*Valor Total Impuesto 3 (Moneda  Nacional)
	*
	* @parámetro Decimal $kvcnim3
	* @return Kvcnim3
	*/
	public function setKvcnim3($kvcnim3)
	{
	  $this->kvcnim3 = (Double) $kvcnim3;
	    return $this;
	}

	/**
	* Get kvcnim3
	*
	* @return null|Decimal
	*/
	public function getKvcnim3()
	{
		return $this->kvcnim3;
	}

	/**
	* Set kvcnpvt
	*
	*Valor Total Precio Compra (Moneda  Nacional)
	*
	* @parámetro Decimal $kvcnpvt
	* @return Kvcnpvt
	*/
	public function setKvcnpvt($kvcnpvt)
	{
	  $this->kvcnpvt = (Double) $kvcnpvt;
	    return $this;
	}

	/**
	* Get kvcnpvt
	*
	* @return null|Decimal
	*/
	public function getKvcnpvt()
	{
		return $this->kvcnpvt;
	}

	/**
	* Set kvcevva
	*
	*Valor Total Compra con Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $kvcevva
	* @return Kvcevva
	*/
	public function setKvcevva($kvcevva)
	{
	  $this->kvcevva = (Double) $kvcevva;
	    return $this;
	}

	/**
	* Get kvcevva
	*
	* @return null|Decimal
	*/
	public function getKvcevva()
	{
		return $this->kvcevva;
	}

	/**
	* Set kvcecpi
	*
	*Valor Total - Venta que aplica 0% del IVA (Moneda Extranjera)
	*
	* @parámetro Decimal $kvcecpi
	* @return Kvcecpi
	*/
	public function setKvcecpi($kvcecpi)
	{
	  $this->kvcecpi = (Double) $kvcecpi;
	    return $this;
	}

	/**
	* Get kvcecpi
	*
	* @return null|Decimal
	*/
	public function getKvcecpi()
	{
		return $this->kvcecpi;
	}

	/**
	* Set kvcevvi
	*
	*Valor Total Compra sin Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $kvcevvi
	* @return Kvcevvi
	*/
	public function setKvcevvi($kvcevvi)
	{
	  $this->kvcevvi = (Double) $kvcevvi;
	    return $this;
	}

	/**
	* Get kvcevvi
	*
	* @return null|Decimal
	*/
	public function getKvcevvi()
	{
		return $this->kvcevvi;
	}

	/**
	* Set kvceds1
	*
	*Total Valor Descuento 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $kvceds1
	* @return Kvceds1
	*/
	public function setKvceds1($kvceds1)
	{
	  $this->kvceds1 = (Double) $kvceds1;
	    return $this;
	}

	/**
	* Get kvceds1
	*
	* @return null|Decimal
	*/
	public function getKvceds1()
	{
		return $this->kvceds1;
	}

	/**
	* Set kvceiva
	*
	*Valor Total Impuesto 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $kvceiva
	* @return Kvceiva
	*/
	public function setKvceiva($kvceiva)
	{
	  $this->kvceiva = (Double) $kvceiva;
	    return $this;
	}

	/**
	* Get kvceiva
	*
	* @return null|Decimal
	*/
	public function getKvceiva()
	{
		return $this->kvceiva;
	}

	/**
	* Set kvceim2
	*
	*Valor Total Impuesto 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $kvceim2
	* @return Kvceim2
	*/
	public function setKvceim2($kvceim2)
	{
	  $this->kvceim2 = (Double) $kvceim2;
	    return $this;
	}

	/**
	* Get kvceim2
	*
	* @return null|Decimal
	*/
	public function getKvceim2()
	{
		return $this->kvceim2;
	}

	/**
	* Set kvceim3
	*
	*Valor Total Impuesto 3 (Moneda Extranjera)
	*
	* @parámetro Decimal $kvceim3
	* @return Kvceim3
	*/
	public function setKvceim3($kvceim3)
	{
	  $this->kvceim3 = (Double) $kvceim3;
	    return $this;
	}

	/**
	* Get kvceim3
	*
	* @return null|Decimal
	*/
	public function getKvceim3()
	{
		return $this->kvceim3;
	}

	/**
	* Set kvcepvt
	*
	*Valor Total Precio Compra (Moneda Extranjera)
	*
	* @parámetro Decimal $kvcepvt
	* @return Kvcepvt
	*/
	public function setKvcepvt($kvcepvt)
	{
	  $this->kvcepvt = (Double) $kvcepvt;
	    return $this;
	}

	/**
	* Get kvcepvt
	*
	* @return null|Decimal
	*/
	public function getKvcepvt()
	{
		return $this->kvcepvt;
	}

	/**
	* Set kvcfoen
	*
	*Forma de Entrega
	*
	* @parámetro Integer $kvcfoen
	* @return Kvcfoen
	*/
	public function setKvcfoen($kvcfoen)
	{
	  $this->kvcfoen = (Integer) $kvcfoen;
	    return $this;
	}

	/**
	* Get kvcfoen
	*
	* @return null|Integer
	*/
	public function getKvcfoen()
	{
		return $this->kvcfoen;
	}

	/**
	* Set kvccli1
	*
	*Libre 1
	*
	* @parámetro String $kvccli1
	* @return Kvccli1
	*/
	public function setKvccli1($kvccli1)
	{
	  $this->kvccli1 = (String) $kvccli1;
	    return $this;
	}

	/**
	* Get kvccli1
	*
	* @return null|String
	*/
	public function getKvccli1()
	{
		return $this->kvccli1;
	}

	/**
	* Set kvccli2
	*
	*Libre 2
	*
	* @parámetro String $kvccli2
	* @return Kvccli2
	*/
	public function setKvccli2($kvccli2)
	{
	  $this->kvccli2 = (String) $kvccli2;
	    return $this;
	}

	/**
	* Get kvccli2
	*
	* @return null|String
	*/
	public function getKvccli2()
	{
		return $this->kvccli2;
	}

	/**
	* Set kvccli3
	*
	*Libre 3
	*
	* @parámetro String $kvccli3
	* @return Kvccli3
	*/
	public function setKvccli3($kvccli3)
	{
	  $this->kvccli3 = (String) $kvccli3;
	    return $this;
	}

	/**
	* Get kvccli3
	*
	* @return null|String
	*/
	public function getKvccli3()
	{
		return $this->kvccli3;
	}

	/**
	* Set kvcusuc
	*
	*Usuario de creación
	*
	* @parámetro String $kvcusuc
	* @return Kvcusuc
	*/
	public function setKvcusuc($kvcusuc)
	{
	  $this->kvcusuc = (String) $kvcusuc;
	    return $this;
	}

	/**
	* Get kvcusuc
	*
	* @return null|String
	*/
	public function getKvcusuc()
	{
		return $this->kvcusuc;
	}

	/**
	* Set kvcfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $kvcfecc
	* @return Kvcfecc
	*/
	public function setKvcfecc($kvcfecc)
	{
	  $this->kvcfecc = (String) $kvcfecc;
	    return $this;
	}

	/**
	* Get kvcfecc
	*
	* @return null|Date
	*/
	public function getKvcfecc()
	{
		return $this->kvcfecc;
	}

	/**
	* Set kvcusum
	*
	*Usuario de modificación
	*
	* @parámetro String $kvcusum
	* @return Kvcusum
	*/
	public function setKvcusum($kvcusum)
	{
	  $this->kvcusum = (String) $kvcusum;
	    return $this;
	}

	/**
	* Get kvcusum
	*
	* @return null|String
	*/
	public function getKvcusum()
	{
		return $this->kvcusum;
	}

	/**
	* Set kvcfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $kvcfecm
	* @return Kvcfecm
	*/
	public function setKvcfecm($kvcfecm)
	{
	  $this->kvcfecm = (String) $kvcfecm;
	    return $this;
	}

	/**
	* Get kvcfecm
	*
	* @return null|Date
	*/
	public function getKvcfecm()
	{
		return $this->kvcfecm;
	}

	/**
	* Set kvctask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $kvctask
	* @return Kvctask
	*/
	public function setKvctask($kvctask)
	{
	  $this->kvctask = (String) $kvctask;
	    return $this;
	}

	/**
	* Get kvctask
	*
	* @return null|String
	*/
	public function getKvctask()
	{
		return $this->kvctask;
	}

	/**
	* Set kvcpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $kvcpara
	* @return Kvcpara
	*/
	public function setKvcpara($kvcpara)
	{
	  $this->kvcpara = (Integer) $kvcpara;
	    return $this;
	}

	/**
	* Get kvcpara
	*
	* @return null|Integer
	*/
	public function getKvcpara()
	{
		return $this->kvcpara;
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

<?php
 /**
 * Model of the Ttpedd table
 *
 * It is used to convert the   Ttpedd entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttpedd
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttpedd
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Facturación Normal
		*/
		protected $tpdsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Artículos
		*/
		protected $varsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Facturación Normal
		*/
		protected $tphsecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código Punto de Venta
		*/
		protected $tpvcodi;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Número de Pedido
		*/
		protected $tphnume;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Controla Stock
		*/
		protected $varstoc;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Pedido
		*/
		protected $tpdfecp;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Hora de Pedido
		*/
		protected $tpdhorp;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad (Inf. Bodega)
		*/
		protected $tpdcant;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Mueve Inventarios
		*/
		protected $tldfvta;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Precio Unitario, asignado en la Lista de Precios
		*/
		protected $tldunit;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de Moneda
		*/
		protected $bmondes;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Peso total del Artículo
		*/
		protected $tpdpeso;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Existe Artículo en Stock S/N
		*/
		protected $tpdbaex;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Puntos total del Artículo
		*/
		protected $tpdrpdo;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Precio unitario multiplicado por la Cantidad
		*/
		protected $tpdtunc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Guarda el valor de la venta afecta + la venta inafecta antes de aplicar el descuento Cabecera
		*/
		protected $tpdstpa;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor del Descuento Detalle, Precio unitario Real multiplicado por el porcentaje de detalle (sumado, escalonado)
		*/
		protected $tpddesd;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor del Descuento Cabecera, Precio Unitario restado el primer valor de descuento detalle - el porcentaje de descuento cabecera (escalonado con el detalle y sumado o escalonado en detalle)
		*/
		protected $tpddesc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Precio Unitario Real, es decir el Precio Unitario restado todos los descuentos.
		*/
		protected $tpdpunr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Guarda el Sub-total suma del Valor Afecta y Valor Inafecta antes de sumar el IVA  y  restado todos los descuentos (Detalle y Cabecera)
		*/
		protected $tpdsubt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta con Impuesto (Moneda Nacional)
		*/
		protected $tpdnvva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta con 0% del IVA (Moneda Nacional)
		*/
		protected $tpdncpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta sin Impuesto (Moneda Nacional)
		*/
		protected $tpdnvvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 1 (Moneda Nacional)
		*/
		protected $tpdnds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 2 (Moneda Nacional)
		*/
		protected $tpdnds2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda Nacional)
		*/
		protected $tpdniva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda Nacional)
		*/
		protected $tpdnim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda Nacional)
		*/
		protected $tpdnim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio Venta (Moneda Nacional)
		*/
		protected $tpdnpvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta con Impuesto (Moneda Extranjera)
		*/
		protected $tpdevva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta con 0% del IVA (Moneda Extranjera)
		*/
		protected $tpdecpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta sin Impuesto (Moneda Extranjera)
		*/
		protected $tpdevvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 1 (Moneda Extranjera)
		*/
		protected $tpdeds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Total Valor Descuento 2 (Moneda Extranjera)
		*/
		protected $tpdeds2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda Extranjera)
		*/
		protected $tpdeiva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda Extranjera)
		*/
		protected $tpdeim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda Extranjera)
		*/
		protected $tpdeim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio Venta (Moneda Extranjera)
		*/
		protected $tpdepvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad Devuelta
		*/
		protected $tpdcan1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad a Devolver
		*/
		protected $tpdcan2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Porcentaje de Descuento
		*/
		protected $tpdref1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 2 Libre
		*/
		protected $tpdref2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Lote
		*/
		protected $vslllot;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Serie
		*/
		protected $varseri;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad
		*/
		protected $tpdcan3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observación por Artículo
		*/
		protected $tpdobse;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Guarda el detalle de los descuentos que se aplicaron
		*/
		protected $tpdobsi;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tpdusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tpdfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tpdusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tpdfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tpdtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tpdpara;

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
	* Name of the table: ttpedd
	* 
	 */
	const TABLE="ttpedd";

	/**
	*Primary key
*/
		 const PKEY = "tpdsecu";



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
		throw new \Exception('Class Entity: Ttpedd Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttpedd. Invalid specified property: get'.$name);
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
	* Set tpdsecu
	*
	*Estos datos se ingresan en la Opción: Facturación Normal
	*
	* @parámetro Integer $tpdsecu
	* @return Tpdsecu
	*/
	public function setTpdsecu($tpdsecu)
	{
	  $this->tpdsecu = (Integer) $tpdsecu;
	    return $this;
	}

	/**
	* Get tpdsecu
	*
	* @return null|Integer
	*/
	public function getTpdsecu()
	{
		return $this->tpdsecu;
	}

	/**
	* Set varsecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Artículos
	*
	* @parámetro Integer $varsecu
	* @return Varsecu
	*/
	public function setVarsecu($varsecu)
	{
	  $this->varsecu = (Integer) $varsecu;
	    return $this;
	}

	/**
	* Get varsecu
	*
	* @return null|Integer
	*/
	public function getVarsecu()
	{
		return $this->varsecu;
	}

	/**
	* Set tphsecu
	*
	*Estos datos se ingresan en la Opción: Facturación Normal
	*
	* @parámetro Integer $tphsecu
	* @return Tphsecu
	*/
	public function setTphsecu($tphsecu)
	{
	  $this->tphsecu = (Integer) $tphsecu;
	    return $this;
	}

	/**
	* Get tphsecu
	*
	* @return null|Integer
	*/
	public function getTphsecu()
	{
		return $this->tphsecu;
	}

	/**
	* Set tpvcodi
	*
	*Código Punto de Venta
	*
	* @parámetro String $tpvcodi
	* @return Tpvcodi
	*/
	public function setTpvcodi($tpvcodi)
	{
	  $this->tpvcodi = (String) $tpvcodi;
	    return $this;
	}

	/**
	* Get tpvcodi
	*
	* @return null|String
	*/
	public function getTpvcodi()
	{
		return $this->tpvcodi;
	}

	/**
	* Set tphnume
	*
	*Número de Pedido
	*
	* @parámetro Decimal $tphnume
	* @return Tphnume
	*/
	public function setTphnume($tphnume)
	{
	  $this->tphnume = (Double) $tphnume;
	    return $this;
	}

	/**
	* Get tphnume
	*
	* @return null|Decimal
	*/
	public function getTphnume()
	{
		return $this->tphnume;
	}

	/**
	* Set varstoc
	*
	*Controla Stock
	*
	* @parámetro Integer $varstoc
	* @return Varstoc
	*/
	public function setVarstoc($varstoc)
	{
	  $this->varstoc = (Integer) $varstoc;
	    return $this;
	}

	/**
	* Get varstoc
	*
	* @return null|Integer
	*/
	public function getVarstoc()
	{
		return $this->varstoc;
	}

	/**
	* Set tpdfecp
	*
	*Fecha de Pedido
	*
	* @parámetro Date $tpdfecp
	* @return Tpdfecp
	*/
	public function setTpdfecp($tpdfecp)
	{
	  $this->tpdfecp = (String) $tpdfecp;
	    return $this;
	}

	/**
	* Get tpdfecp
	*
	* @return null|Date
	*/
	public function getTpdfecp()
	{
		return $this->tpdfecp;
	}

	/**
	* Set tpdhorp
	*
	*Hora de Pedido
	*
	* @parámetro String $tpdhorp
	* @return Tpdhorp
	*/
	public function setTpdhorp($tpdhorp)
	{
	  $this->tpdhorp = (String) $tpdhorp;
	    return $this;
	}

	/**
	* Get tpdhorp
	*
	* @return null|String
	*/
	public function getTpdhorp()
	{
		return $this->tpdhorp;
	}

	/**
	* Set tpdcant
	*
	*Cantidad (Inf. Bodega)
	*
	* @parámetro Decimal $tpdcant
	* @return Tpdcant
	*/
	public function setTpdcant($tpdcant)
	{
	  $this->tpdcant = (Double) $tpdcant;
	    return $this;
	}

	/**
	* Get tpdcant
	*
	* @return null|Decimal
	*/
	public function getTpdcant()
	{
		return $this->tpdcant;
	}

	/**
	* Set tldfvta
	*
	*Mueve Inventarios
	*
	* @parámetro Decimal $tldfvta
	* @return Tldfvta
	*/
	public function setTldfvta($tldfvta)
	{
	  $this->tldfvta = (Double) $tldfvta;
	    return $this;
	}

	/**
	* Get tldfvta
	*
	* @return null|Decimal
	*/
	public function getTldfvta()
	{
		return $this->tldfvta;
	}

	/**
	* Set tldunit
	*
	*Precio Unitario, asignado en la Lista de Precios
	*
	* @parámetro Decimal $tldunit
	* @return Tldunit
	*/
	public function setTldunit($tldunit)
	{
	  $this->tldunit = (Double) $tldunit;
	    return $this;
	}

	/**
	* Get tldunit
	*
	* @return null|Decimal
	*/
	public function getTldunit()
	{
		return $this->tldunit;
	}

	/**
	* Set bmondes
	*
	*Descripción de Moneda
	*
	* @parámetro String $bmondes
	* @return Bmondes
	*/
	public function setBmondes($bmondes)
	{
	  $this->bmondes = (String) $bmondes;
	    return $this;
	}

	/**
	* Get bmondes
	*
	* @return null|String
	*/
	public function getBmondes()
	{
		return $this->bmondes;
	}

	/**
	* Set tpdpeso
	*
	*Peso total del Artículo
	*
	* @parámetro Decimal $tpdpeso
	* @return Tpdpeso
	*/
	public function setTpdpeso($tpdpeso)
	{
	  $this->tpdpeso = (Double) $tpdpeso;
	    return $this;
	}

	/**
	* Get tpdpeso
	*
	* @return null|Decimal
	*/
	public function getTpdpeso()
	{
		return $this->tpdpeso;
	}

	/**
	* Set tpdbaex
	*
	*Existe Artículo en Stock S/N
	*
	* @parámetro Integer $tpdbaex
	* @return Tpdbaex
	*/
	public function setTpdbaex($tpdbaex)
	{
	  $this->tpdbaex = (Integer) $tpdbaex;
	    return $this;
	}

	/**
	* Get tpdbaex
	*
	* @return null|Integer
	*/
	public function getTpdbaex()
	{
		return $this->tpdbaex;
	}

	/**
	* Set tpdrpdo
	*
	*Puntos total del Artículo
	*
	* @parámetro Decimal $tpdrpdo
	* @return Tpdrpdo
	*/
	public function setTpdrpdo($tpdrpdo)
	{
	  $this->tpdrpdo = (Double) $tpdrpdo;
	    return $this;
	}

	/**
	* Get tpdrpdo
	*
	* @return null|Decimal
	*/
	public function getTpdrpdo()
	{
		return $this->tpdrpdo;
	}

	/**
	* Set tpdtunc
	*
	*Precio unitario multiplicado por la Cantidad
	*
	* @parámetro Decimal $tpdtunc
	* @return Tpdtunc
	*/
	public function setTpdtunc($tpdtunc)
	{
	  $this->tpdtunc = (Double) $tpdtunc;
	    return $this;
	}

	/**
	* Get tpdtunc
	*
	* @return null|Decimal
	*/
	public function getTpdtunc()
	{
		return $this->tpdtunc;
	}

	/**
	* Set tpdstpa
	*
	*Guarda el valor de la venta afecta + la venta inafecta antes de aplicar el descuento Cabecera
	*
	* @parámetro Decimal $tpdstpa
	* @return Tpdstpa
	*/
	public function setTpdstpa($tpdstpa)
	{
	  $this->tpdstpa = (Double) $tpdstpa;
	    return $this;
	}

	/**
	* Get tpdstpa
	*
	* @return null|Decimal
	*/
	public function getTpdstpa()
	{
		return $this->tpdstpa;
	}

	/**
	* Set tpddesd
	*
	*Valor del Descuento Detalle, Precio unitario Real multiplicado por el porcentaje de detalle (sumado, escalonado)
	*
	* @parámetro Decimal $tpddesd
	* @return Tpddesd
	*/
	public function setTpddesd($tpddesd)
	{
	  $this->tpddesd = (Double) $tpddesd;
	    return $this;
	}

	/**
	* Get tpddesd
	*
	* @return null|Decimal
	*/
	public function getTpddesd()
	{
		return $this->tpddesd;
	}

	/**
	* Set tpddesc
	*
	*Valor del Descuento Cabecera, Precio Unitario restado el primer valor de descuento detalle - el porcentaje de descuento cabecera (escalonado con el detalle y sumado o escalonado en detalle)
	*
	* @parámetro Decimal $tpddesc
	* @return Tpddesc
	*/
	public function setTpddesc($tpddesc)
	{
	  $this->tpddesc = (Double) $tpddesc;
	    return $this;
	}

	/**
	* Get tpddesc
	*
	* @return null|Decimal
	*/
	public function getTpddesc()
	{
		return $this->tpddesc;
	}

	/**
	* Set tpdpunr
	*
	*Precio Unitario Real, es decir el Precio Unitario restado todos los descuentos.
	*
	* @parámetro Decimal $tpdpunr
	* @return Tpdpunr
	*/
	public function setTpdpunr($tpdpunr)
	{
	  $this->tpdpunr = (Double) $tpdpunr;
	    return $this;
	}

	/**
	* Get tpdpunr
	*
	* @return null|Decimal
	*/
	public function getTpdpunr()
	{
		return $this->tpdpunr;
	}

	/**
	* Set tpdsubt
	*
	*Guarda el Sub-total suma del Valor Afecta y Valor Inafecta antes de sumar el IVA  y  restado todos los descuentos (Detalle y Cabecera)
	*
	* @parámetro Decimal $tpdsubt
	* @return Tpdsubt
	*/
	public function setTpdsubt($tpdsubt)
	{
	  $this->tpdsubt = (Double) $tpdsubt;
	    return $this;
	}

	/**
	* Get tpdsubt
	*
	* @return null|Decimal
	*/
	public function getTpdsubt()
	{
		return $this->tpdsubt;
	}

	/**
	* Set tpdnvva
	*
	*Valor Total Venta con Impuesto (Moneda Nacional)
	*
	* @parámetro Decimal $tpdnvva
	* @return Tpdnvva
	*/
	public function setTpdnvva($tpdnvva)
	{
	  $this->tpdnvva = (Double) $tpdnvva;
	    return $this;
	}

	/**
	* Get tpdnvva
	*
	* @return null|Decimal
	*/
	public function getTpdnvva()
	{
		return $this->tpdnvva;
	}

	/**
	* Set tpdncpi
	*
	*Valor Total Venta con 0% del IVA (Moneda Nacional)
	*
	* @parámetro Decimal $tpdncpi
	* @return Tpdncpi
	*/
	public function setTpdncpi($tpdncpi)
	{
	  $this->tpdncpi = (Double) $tpdncpi;
	    return $this;
	}

	/**
	* Get tpdncpi
	*
	* @return null|Decimal
	*/
	public function getTpdncpi()
	{
		return $this->tpdncpi;
	}

	/**
	* Set tpdnvvi
	*
	*Valor Total Venta sin Impuesto (Moneda Nacional)
	*
	* @parámetro Decimal $tpdnvvi
	* @return Tpdnvvi
	*/
	public function setTpdnvvi($tpdnvvi)
	{
	  $this->tpdnvvi = (Double) $tpdnvvi;
	    return $this;
	}

	/**
	* Get tpdnvvi
	*
	* @return null|Decimal
	*/
	public function getTpdnvvi()
	{
		return $this->tpdnvvi;
	}

	/**
	* Set tpdnds1
	*
	*Valor Total Descuento 1 (Moneda Nacional)
	*
	* @parámetro Decimal $tpdnds1
	* @return Tpdnds1
	*/
	public function setTpdnds1($tpdnds1)
	{
	  $this->tpdnds1 = (Double) $tpdnds1;
	    return $this;
	}

	/**
	* Get tpdnds1
	*
	* @return null|Decimal
	*/
	public function getTpdnds1()
	{
		return $this->tpdnds1;
	}

	/**
	* Set tpdnds2
	*
	*Valor Total Descuento 2 (Moneda Nacional)
	*
	* @parámetro Decimal $tpdnds2
	* @return Tpdnds2
	*/
	public function setTpdnds2($tpdnds2)
	{
	  $this->tpdnds2 = (Double) $tpdnds2;
	    return $this;
	}

	/**
	* Get tpdnds2
	*
	* @return null|Decimal
	*/
	public function getTpdnds2()
	{
		return $this->tpdnds2;
	}

	/**
	* Set tpdniva
	*
	*Valor Total Impuesto 1 (Moneda Nacional)
	*
	* @parámetro Decimal $tpdniva
	* @return Tpdniva
	*/
	public function setTpdniva($tpdniva)
	{
	  $this->tpdniva = (Double) $tpdniva;
	    return $this;
	}

	/**
	* Get tpdniva
	*
	* @return null|Decimal
	*/
	public function getTpdniva()
	{
		return $this->tpdniva;
	}

	/**
	* Set tpdnim2
	*
	*Valor Total Impuesto 2 (Moneda Nacional)
	*
	* @parámetro Decimal $tpdnim2
	* @return Tpdnim2
	*/
	public function setTpdnim2($tpdnim2)
	{
	  $this->tpdnim2 = (Double) $tpdnim2;
	    return $this;
	}

	/**
	* Get tpdnim2
	*
	* @return null|Decimal
	*/
	public function getTpdnim2()
	{
		return $this->tpdnim2;
	}

	/**
	* Set tpdnim3
	*
	*Valor Total Impuesto 3 (Moneda Nacional)
	*
	* @parámetro Decimal $tpdnim3
	* @return Tpdnim3
	*/
	public function setTpdnim3($tpdnim3)
	{
	  $this->tpdnim3 = (Double) $tpdnim3;
	    return $this;
	}

	/**
	* Get tpdnim3
	*
	* @return null|Decimal
	*/
	public function getTpdnim3()
	{
		return $this->tpdnim3;
	}

	/**
	* Set tpdnpvt
	*
	*Valor Total Precio Venta (Moneda Nacional)
	*
	* @parámetro Decimal $tpdnpvt
	* @return Tpdnpvt
	*/
	public function setTpdnpvt($tpdnpvt)
	{
	  $this->tpdnpvt = (Double) $tpdnpvt;
	    return $this;
	}

	/**
	* Get tpdnpvt
	*
	* @return null|Decimal
	*/
	public function getTpdnpvt()
	{
		return $this->tpdnpvt;
	}

	/**
	* Set tpdevva
	*
	*Valor Total Venta con Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tpdevva
	* @return Tpdevva
	*/
	public function setTpdevva($tpdevva)
	{
	  $this->tpdevva = (Double) $tpdevva;
	    return $this;
	}

	/**
	* Get tpdevva
	*
	* @return null|Decimal
	*/
	public function getTpdevva()
	{
		return $this->tpdevva;
	}

	/**
	* Set tpdecpi
	*
	*Valor Total Venta con 0% del IVA (Moneda Extranjera)
	*
	* @parámetro Decimal $tpdecpi
	* @return Tpdecpi
	*/
	public function setTpdecpi($tpdecpi)
	{
	  $this->tpdecpi = (Double) $tpdecpi;
	    return $this;
	}

	/**
	* Get tpdecpi
	*
	* @return null|Decimal
	*/
	public function getTpdecpi()
	{
		return $this->tpdecpi;
	}

	/**
	* Set tpdevvi
	*
	*Valor Total Venta sin Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tpdevvi
	* @return Tpdevvi
	*/
	public function setTpdevvi($tpdevvi)
	{
	  $this->tpdevvi = (Double) $tpdevvi;
	    return $this;
	}

	/**
	* Get tpdevvi
	*
	* @return null|Decimal
	*/
	public function getTpdevvi()
	{
		return $this->tpdevvi;
	}

	/**
	* Set tpdeds1
	*
	*Valor Total Descuento 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tpdeds1
	* @return Tpdeds1
	*/
	public function setTpdeds1($tpdeds1)
	{
	  $this->tpdeds1 = (Double) $tpdeds1;
	    return $this;
	}

	/**
	* Get tpdeds1
	*
	* @return null|Decimal
	*/
	public function getTpdeds1()
	{
		return $this->tpdeds1;
	}

	/**
	* Set tpdeds2
	*
	*Valor Total Total Valor Descuento 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $tpdeds2
	* @return Tpdeds2
	*/
	public function setTpdeds2($tpdeds2)
	{
	  $this->tpdeds2 = (Double) $tpdeds2;
	    return $this;
	}

	/**
	* Get tpdeds2
	*
	* @return null|Decimal
	*/
	public function getTpdeds2()
	{
		return $this->tpdeds2;
	}

	/**
	* Set tpdeiva
	*
	*Valor Total Impuesto 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tpdeiva
	* @return Tpdeiva
	*/
	public function setTpdeiva($tpdeiva)
	{
	  $this->tpdeiva = (Double) $tpdeiva;
	    return $this;
	}

	/**
	* Get tpdeiva
	*
	* @return null|Decimal
	*/
	public function getTpdeiva()
	{
		return $this->tpdeiva;
	}

	/**
	* Set tpdeim2
	*
	*Valor Total Impuesto 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $tpdeim2
	* @return Tpdeim2
	*/
	public function setTpdeim2($tpdeim2)
	{
	  $this->tpdeim2 = (Double) $tpdeim2;
	    return $this;
	}

	/**
	* Get tpdeim2
	*
	* @return null|Decimal
	*/
	public function getTpdeim2()
	{
		return $this->tpdeim2;
	}

	/**
	* Set tpdeim3
	*
	*Valor Total Impuesto 3 (Moneda Extranjera)
	*
	* @parámetro Decimal $tpdeim3
	* @return Tpdeim3
	*/
	public function setTpdeim3($tpdeim3)
	{
	  $this->tpdeim3 = (Double) $tpdeim3;
	    return $this;
	}

	/**
	* Get tpdeim3
	*
	* @return null|Decimal
	*/
	public function getTpdeim3()
	{
		return $this->tpdeim3;
	}

	/**
	* Set tpdepvt
	*
	*Valor Total Precio Venta (Moneda Extranjera)
	*
	* @parámetro Decimal $tpdepvt
	* @return Tpdepvt
	*/
	public function setTpdepvt($tpdepvt)
	{
	  $this->tpdepvt = (Double) $tpdepvt;
	    return $this;
	}

	/**
	* Get tpdepvt
	*
	* @return null|Decimal
	*/
	public function getTpdepvt()
	{
		return $this->tpdepvt;
	}

	/**
	* Set tpdcan1
	*
	*Cantidad Devuelta
	*
	* @parámetro Decimal $tpdcan1
	* @return Tpdcan1
	*/
	public function setTpdcan1($tpdcan1)
	{
	  $this->tpdcan1 = (Double) $tpdcan1;
	    return $this;
	}

	/**
	* Get tpdcan1
	*
	* @return null|Decimal
	*/
	public function getTpdcan1()
	{
		return $this->tpdcan1;
	}

	/**
	* Set tpdcan2
	*
	*Cantidad a Devolver
	*
	* @parámetro Decimal $tpdcan2
	* @return Tpdcan2
	*/
	public function setTpdcan2($tpdcan2)
	{
	  $this->tpdcan2 = (Double) $tpdcan2;
	    return $this;
	}

	/**
	* Get tpdcan2
	*
	* @return null|Decimal
	*/
	public function getTpdcan2()
	{
		return $this->tpdcan2;
	}

	/**
	* Set tpdref1
	*
	*Porcentaje de Descuento
	*
	* @parámetro Decimal $tpdref1
	* @return Tpdref1
	*/
	public function setTpdref1($tpdref1)
	{
	  $this->tpdref1 = (Double) $tpdref1;
	    return $this;
	}

	/**
	* Get tpdref1
	*
	* @return null|Decimal
	*/
	public function getTpdref1()
	{
		return $this->tpdref1;
	}

	/**
	* Set tpdref2
	*
	*Referencia 2 Libre
	*
	* @parámetro String $tpdref2
	* @return Tpdref2
	*/
	public function setTpdref2($tpdref2)
	{
	  $this->tpdref2 = (String) $tpdref2;
	    return $this;
	}

	/**
	* Get tpdref2
	*
	* @return null|String
	*/
	public function getTpdref2()
	{
		return $this->tpdref2;
	}

	/**
	* Set vslllot
	*
	*Número de Lote
	*
	* @parámetro String $vslllot
	* @return Vslllot
	*/
	public function setVslllot($vslllot)
	{
	  $this->vslllot = (String) $vslllot;
	    return $this;
	}

	/**
	* Get vslllot
	*
	* @return null|String
	*/
	public function getVslllot()
	{
		return $this->vslllot;
	}

	/**
	* Set varseri
	*
	*Número de Serie
	*
	* @parámetro String $varseri
	* @return Varseri
	*/
	public function setVarseri($varseri)
	{
	  $this->varseri = (String) $varseri;
	    return $this;
	}

	/**
	* Get varseri
	*
	* @return null|String
	*/
	public function getVarseri()
	{
		return $this->varseri;
	}

	/**
	* Set tpdcan3
	*
	*Cantidad
	*
	* @parámetro Decimal $tpdcan3
	* @return Tpdcan3
	*/
	public function setTpdcan3($tpdcan3)
	{
	  $this->tpdcan3 = (Double) $tpdcan3;
	    return $this;
	}

	/**
	* Get tpdcan3
	*
	* @return null|Decimal
	*/
	public function getTpdcan3()
	{
		return $this->tpdcan3;
	}

	/**
	* Set tpdobse
	*
	*Observación por Artículo
	*
	* @parámetro String $tpdobse
	* @return Tpdobse
	*/
	public function setTpdobse($tpdobse)
	{
	  $this->tpdobse = (String) $tpdobse;
	    return $this;
	}

	/**
	* Get tpdobse
	*
	* @return null|String
	*/
	public function getTpdobse()
	{
		return $this->tpdobse;
	}

	/**
	* Set tpdobsi
	*
	*Guarda el detalle de los descuentos que se aplicaron
	*
	* @parámetro String $tpdobsi
	* @return Tpdobsi
	*/
	public function setTpdobsi($tpdobsi)
	{
	  $this->tpdobsi = (String) $tpdobsi;
	    return $this;
	}

	/**
	* Get tpdobsi
	*
	* @return null|String
	*/
	public function getTpdobsi()
	{
		return $this->tpdobsi;
	}

	/**
	* Set tpdusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tpdusuc
	* @return Tpdusuc
	*/
	public function setTpdusuc($tpdusuc)
	{
	  $this->tpdusuc = (String) $tpdusuc;
	    return $this;
	}

	/**
	* Get tpdusuc
	*
	* @return null|String
	*/
	public function getTpdusuc()
	{
		return $this->tpdusuc;
	}

	/**
	* Set tpdfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tpdfecc
	* @return Tpdfecc
	*/
	public function setTpdfecc($tpdfecc)
	{
	  $this->tpdfecc = (String) $tpdfecc;
	    return $this;
	}

	/**
	* Get tpdfecc
	*
	* @return null|Date
	*/
	public function getTpdfecc()
	{
		return $this->tpdfecc;
	}

	/**
	* Set tpdusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tpdusum
	* @return Tpdusum
	*/
	public function setTpdusum($tpdusum)
	{
	  $this->tpdusum = (String) $tpdusum;
	    return $this;
	}

	/**
	* Get tpdusum
	*
	* @return null|String
	*/
	public function getTpdusum()
	{
		return $this->tpdusum;
	}

	/**
	* Set tpdfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tpdfecm
	* @return Tpdfecm
	*/
	public function setTpdfecm($tpdfecm)
	{
	  $this->tpdfecm = (String) $tpdfecm;
	    return $this;
	}

	/**
	* Get tpdfecm
	*
	* @return null|Date
	*/
	public function getTpdfecm()
	{
		return $this->tpdfecm;
	}

	/**
	* Set tpdtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tpdtask
	* @return Tpdtask
	*/
	public function setTpdtask($tpdtask)
	{
	  $this->tpdtask = (String) $tpdtask;
	    return $this;
	}

	/**
	* Get tpdtask
	*
	* @return null|String
	*/
	public function getTpdtask()
	{
		return $this->tpdtask;
	}

	/**
	* Set tpdpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tpdpara
	* @return Tpdpara
	*/
	public function setTpdpara($tpdpara)
	{
	  $this->tpdpara = (Integer) $tpdpara;
	    return $this;
	}

	/**
	* Get tpdpara
	*
	* @return null|Integer
	*/
	public function getTpdpara()
	{
		return $this->tpdpara;
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

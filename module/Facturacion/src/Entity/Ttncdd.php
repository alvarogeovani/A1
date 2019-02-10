<?php
 /**
 * Model of the Ttncdd table
 *
 * It is used to convert the   Ttncdd entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttncdd
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttncdd
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Realizar Notas de Crédito por Devolución
		*/
		protected $tncsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Realizar Notas de Crédito por Devolución
		*/
		protected $tnhsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Artículos
		*/
		protected $varsecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Punto de Venta
		*/
		protected $tpvcodi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número Nota de Crédito
		*/
		protected $tnhnume;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Comprobante (Inf. Bodega)
		*/
		protected $tncvale;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Comprobante (Inf. Bodega)
		*/
		protected $tncfecv;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Distribuidor
		*/
		protected $tdiscdi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de Venta (Inf. Bodega)
		*/
		protected $tnctvta;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de la Nueva Lista  de Precios
		*/
		protected $tlpcodi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad (Inf. Bodega)
		*/
		protected $tnccant;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Mueve Inventarios (Inf. Bodega)
		*/
		protected $tncfvta;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Precio Unitario, asignado en la Lista de Precios
		*/
		protected $tldunit;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Código de Moneda
		*/
		protected $bmoncve;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Zona de Distribuidor
		*/
		protected $tdiszon;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Puntos total del Artículo
		*/
		protected $tncrpdo;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Guarda el valor de la venta afecta + la venta inafecta antes de aplicar el descuento Cabecera
		*/
		protected $tncstpa;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Guarda el Sub-total suma del Valor Afecta y Valor Inafecta antes de sumar el IVA  y  restado todos los descuentos (Detalle y Cabecera)
		*/
		protected $tncsubt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta con Impuesto (Moneda Nacional)
		*/
		protected $tncnvva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta 0 Porciento de IVA (Moneda  Nacional)
		*/
		protected $tncncpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta sin Impuesto (Moneda Nacional)
		*/
		protected $tncnvvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 1 (Moneda Nacional)
		*/
		protected $tncnds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 2 (Moneda Nacional)
		*/
		protected $tncnds2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda Nacional)
		*/
		protected $tncniva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda Nacional)
		*/
		protected $tncnim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda Nacional)
		*/
		protected $tncnim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio Venta (Moneda Nacional)
		*/
		protected $tncnpvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta con Impuesto (Moneda Extranjera)
		*/
		protected $tncevva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta 0 Porciento de IVA (Moneda  Extranjera)
		*/
		protected $tncecpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta sin Impuesto (Moneda Extranjera)
		*/
		protected $tncevvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 1 (Moneda Extranjera)
		*/
		protected $tnceds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 2 (Moneda Extranjera)
		*/
		protected $tnceds2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda Extranjera)
		*/
		protected $tnceiva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda Extranjera)
		*/
		protected $tnceim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda Extranjera)
		*/
		protected $tnceim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio Venta (Moneda Extranjera)
		*/
		protected $tncepvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Referencia Libre 1
		*/
		protected $tncref1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Referencia Libre 2
		*/
		protected $tncref2;
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
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tncusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tncfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tncusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tncfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tnctask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tncpara;

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
	* Name of the table: ttncdd
	* 
	 */
	const TABLE="ttncdd";

	/**
	*Primary key
*/
		 const PKEY = "tncsecu";



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
		throw new \Exception('Class Entity: Ttncdd Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttncdd. Invalid specified property: get'.$name);
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
	* Set tncsecu
	*
	*Estos datos se ingresan en la Opción: Realizar Notas de Crédito por Devolución
	*
	* @parámetro Integer $tncsecu
	* @return Tncsecu
	*/
	public function setTncsecu($tncsecu)
	{
	  $this->tncsecu = (Integer) $tncsecu;
	    return $this;
	}

	/**
	* Get tncsecu
	*
	* @return null|Integer
	*/
	public function getTncsecu()
	{
		return $this->tncsecu;
	}

	/**
	* Set tnhsecu
	*
	*Estos datos se ingresan en la Opción: Realizar Notas de Crédito por Devolución
	*
	* @parámetro Integer $tnhsecu
	* @return Tnhsecu
	*/
	public function setTnhsecu($tnhsecu)
	{
	  $this->tnhsecu = (Integer) $tnhsecu;
	    return $this;
	}

	/**
	* Get tnhsecu
	*
	* @return null|Integer
	*/
	public function getTnhsecu()
	{
		return $this->tnhsecu;
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
	* Set tnhnume
	*
	*Número Nota de Crédito
	*
	* @parámetro Decimal $tnhnume
	* @return Tnhnume
	*/
	public function setTnhnume($tnhnume)
	{
	  $this->tnhnume = (Double) $tnhnume;
	    return $this;
	}

	/**
	* Get tnhnume
	*
	* @return null|Decimal
	*/
	public function getTnhnume()
	{
		return $this->tnhnume;
	}

	/**
	* Set tncvale
	*
	*Número de Comprobante (Inf. Bodega)
	*
	* @parámetro Decimal $tncvale
	* @return Tncvale
	*/
	public function setTncvale($tncvale)
	{
	  $this->tncvale = (Double) $tncvale;
	    return $this;
	}

	/**
	* Get tncvale
	*
	* @return null|Decimal
	*/
	public function getTncvale()
	{
		return $this->tncvale;
	}

	/**
	* Set tncfecv
	*
	*Fecha de Comprobante (Inf. Bodega)
	*
	* @parámetro Date $tncfecv
	* @return Tncfecv
	*/
	public function setTncfecv($tncfecv)
	{
	  $this->tncfecv = (String) $tncfecv;
	    return $this;
	}

	/**
	* Get tncfecv
	*
	* @return null|Date
	*/
	public function getTncfecv()
	{
		return $this->tncfecv;
	}

	/**
	* Set tdiscdi
	*
	*Código de Distribuidor
	*
	* @parámetro String $tdiscdi
	* @return Tdiscdi
	*/
	public function setTdiscdi($tdiscdi)
	{
	  $this->tdiscdi = (String) $tdiscdi;
	    return $this;
	}

	/**
	* Get tdiscdi
	*
	* @return null|String
	*/
	public function getTdiscdi()
	{
		return $this->tdiscdi;
	}

	/**
	* Set tnctvta
	*
	*Tipo de Venta (Inf. Bodega)
	*
	* @parámetro String $tnctvta
	* @return Tnctvta
	*/
	public function setTnctvta($tnctvta)
	{
	  $this->tnctvta = (String) $tnctvta;
	    return $this;
	}

	/**
	* Get tnctvta
	*
	* @return null|String
	*/
	public function getTnctvta()
	{
		return $this->tnctvta;
	}

	/**
	* Set tlpcodi
	*
	*Código de la Nueva Lista  de Precios
	*
	* @parámetro String $tlpcodi
	* @return Tlpcodi
	*/
	public function setTlpcodi($tlpcodi)
	{
	  $this->tlpcodi = (String) $tlpcodi;
	    return $this;
	}

	/**
	* Get tlpcodi
	*
	* @return null|String
	*/
	public function getTlpcodi()
	{
		return $this->tlpcodi;
	}

	/**
	* Set tnccant
	*
	*Cantidad (Inf. Bodega)
	*
	* @parámetro Decimal $tnccant
	* @return Tnccant
	*/
	public function setTnccant($tnccant)
	{
	  $this->tnccant = (Double) $tnccant;
	    return $this;
	}

	/**
	* Get tnccant
	*
	* @return null|Decimal
	*/
	public function getTnccant()
	{
		return $this->tnccant;
	}

	/**
	* Set tncfvta
	*
	*Mueve Inventarios (Inf. Bodega)
	*
	* @parámetro Decimal $tncfvta
	* @return Tncfvta
	*/
	public function setTncfvta($tncfvta)
	{
	  $this->tncfvta = (Double) $tncfvta;
	    return $this;
	}

	/**
	* Get tncfvta
	*
	* @return null|Decimal
	*/
	public function getTncfvta()
	{
		return $this->tncfvta;
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
	* Set bmoncve
	*
	*Código de Moneda
	*
	* @parámetro Decimal $bmoncve
	* @return Bmoncve
	*/
	public function setBmoncve($bmoncve)
	{
	  $this->bmoncve = (Double) $bmoncve;
	    return $this;
	}

	/**
	* Get bmoncve
	*
	* @return null|Decimal
	*/
	public function getBmoncve()
	{
		return $this->bmoncve;
	}

	/**
	* Set tdiszon
	*
	*Zona de Distribuidor
	*
	* @parámetro Integer $tdiszon
	* @return Tdiszon
	*/
	public function setTdiszon($tdiszon)
	{
	  $this->tdiszon = (Integer) $tdiszon;
	    return $this;
	}

	/**
	* Get tdiszon
	*
	* @return null|Integer
	*/
	public function getTdiszon()
	{
		return $this->tdiszon;
	}

	/**
	* Set tncrpdo
	*
	*Puntos total del Artículo
	*
	* @parámetro Decimal $tncrpdo
	* @return Tncrpdo
	*/
	public function setTncrpdo($tncrpdo)
	{
	  $this->tncrpdo = (Double) $tncrpdo;
	    return $this;
	}

	/**
	* Get tncrpdo
	*
	* @return null|Decimal
	*/
	public function getTncrpdo()
	{
		return $this->tncrpdo;
	}

	/**
	* Set tncstpa
	*
	*Guarda el valor de la venta afecta + la venta inafecta antes de aplicar el descuento Cabecera
	*
	* @parámetro Decimal $tncstpa
	* @return Tncstpa
	*/
	public function setTncstpa($tncstpa)
	{
	  $this->tncstpa = (Double) $tncstpa;
	    return $this;
	}

	/**
	* Get tncstpa
	*
	* @return null|Decimal
	*/
	public function getTncstpa()
	{
		return $this->tncstpa;
	}

	/**
	* Set tncsubt
	*
	*Guarda el Sub-total suma del Valor Afecta y Valor Inafecta antes de sumar el IVA  y  restado todos los descuentos (Detalle y Cabecera)
	*
	* @parámetro Decimal $tncsubt
	* @return Tncsubt
	*/
	public function setTncsubt($tncsubt)
	{
	  $this->tncsubt = (Double) $tncsubt;
	    return $this;
	}

	/**
	* Get tncsubt
	*
	* @return null|Decimal
	*/
	public function getTncsubt()
	{
		return $this->tncsubt;
	}

	/**
	* Set tncnvva
	*
	*Valor Total Venta con Impuesto (Moneda Nacional)
	*
	* @parámetro Decimal $tncnvva
	* @return Tncnvva
	*/
	public function setTncnvva($tncnvva)
	{
	  $this->tncnvva = (Double) $tncnvva;
	    return $this;
	}

	/**
	* Get tncnvva
	*
	* @return null|Decimal
	*/
	public function getTncnvva()
	{
		return $this->tncnvva;
	}

	/**
	* Set tncncpi
	*
	*Valor Total Venta 0 Porciento de IVA (Moneda  Nacional)
	*
	* @parámetro Decimal $tncncpi
	* @return Tncncpi
	*/
	public function setTncncpi($tncncpi)
	{
	  $this->tncncpi = (Double) $tncncpi;
	    return $this;
	}

	/**
	* Get tncncpi
	*
	* @return null|Decimal
	*/
	public function getTncncpi()
	{
		return $this->tncncpi;
	}

	/**
	* Set tncnvvi
	*
	*Valor Total Venta sin Impuesto (Moneda Nacional)
	*
	* @parámetro Decimal $tncnvvi
	* @return Tncnvvi
	*/
	public function setTncnvvi($tncnvvi)
	{
	  $this->tncnvvi = (Double) $tncnvvi;
	    return $this;
	}

	/**
	* Get tncnvvi
	*
	* @return null|Decimal
	*/
	public function getTncnvvi()
	{
		return $this->tncnvvi;
	}

	/**
	* Set tncnds1
	*
	*Valor Total Descuento 1 (Moneda Nacional)
	*
	* @parámetro Decimal $tncnds1
	* @return Tncnds1
	*/
	public function setTncnds1($tncnds1)
	{
	  $this->tncnds1 = (Double) $tncnds1;
	    return $this;
	}

	/**
	* Get tncnds1
	*
	* @return null|Decimal
	*/
	public function getTncnds1()
	{
		return $this->tncnds1;
	}

	/**
	* Set tncnds2
	*
	*Valor Total Descuento 2 (Moneda Nacional)
	*
	* @parámetro Decimal $tncnds2
	* @return Tncnds2
	*/
	public function setTncnds2($tncnds2)
	{
	  $this->tncnds2 = (Double) $tncnds2;
	    return $this;
	}

	/**
	* Get tncnds2
	*
	* @return null|Decimal
	*/
	public function getTncnds2()
	{
		return $this->tncnds2;
	}

	/**
	* Set tncniva
	*
	*Valor Total Impuesto 1 (Moneda Nacional)
	*
	* @parámetro Decimal $tncniva
	* @return Tncniva
	*/
	public function setTncniva($tncniva)
	{
	  $this->tncniva = (Double) $tncniva;
	    return $this;
	}

	/**
	* Get tncniva
	*
	* @return null|Decimal
	*/
	public function getTncniva()
	{
		return $this->tncniva;
	}

	/**
	* Set tncnim2
	*
	*Valor Total Impuesto 2 (Moneda Nacional)
	*
	* @parámetro Decimal $tncnim2
	* @return Tncnim2
	*/
	public function setTncnim2($tncnim2)
	{
	  $this->tncnim2 = (Double) $tncnim2;
	    return $this;
	}

	/**
	* Get tncnim2
	*
	* @return null|Decimal
	*/
	public function getTncnim2()
	{
		return $this->tncnim2;
	}

	/**
	* Set tncnim3
	*
	*Valor Total Impuesto 3 (Moneda Nacional)
	*
	* @parámetro Decimal $tncnim3
	* @return Tncnim3
	*/
	public function setTncnim3($tncnim3)
	{
	  $this->tncnim3 = (Double) $tncnim3;
	    return $this;
	}

	/**
	* Get tncnim3
	*
	* @return null|Decimal
	*/
	public function getTncnim3()
	{
		return $this->tncnim3;
	}

	/**
	* Set tncnpvt
	*
	*Valor Total Precio Venta (Moneda Nacional)
	*
	* @parámetro Decimal $tncnpvt
	* @return Tncnpvt
	*/
	public function setTncnpvt($tncnpvt)
	{
	  $this->tncnpvt = (Double) $tncnpvt;
	    return $this;
	}

	/**
	* Get tncnpvt
	*
	* @return null|Decimal
	*/
	public function getTncnpvt()
	{
		return $this->tncnpvt;
	}

	/**
	* Set tncevva
	*
	*Valor Total Venta con Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tncevva
	* @return Tncevva
	*/
	public function setTncevva($tncevva)
	{
	  $this->tncevva = (Double) $tncevva;
	    return $this;
	}

	/**
	* Get tncevva
	*
	* @return null|Decimal
	*/
	public function getTncevva()
	{
		return $this->tncevva;
	}

	/**
	* Set tncecpi
	*
	*Valor Total Venta 0 Porciento de IVA (Moneda  Extranjera)
	*
	* @parámetro Decimal $tncecpi
	* @return Tncecpi
	*/
	public function setTncecpi($tncecpi)
	{
	  $this->tncecpi = (Double) $tncecpi;
	    return $this;
	}

	/**
	* Get tncecpi
	*
	* @return null|Decimal
	*/
	public function getTncecpi()
	{
		return $this->tncecpi;
	}

	/**
	* Set tncevvi
	*
	*Valor Total Venta sin Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tncevvi
	* @return Tncevvi
	*/
	public function setTncevvi($tncevvi)
	{
	  $this->tncevvi = (Double) $tncevvi;
	    return $this;
	}

	/**
	* Get tncevvi
	*
	* @return null|Decimal
	*/
	public function getTncevvi()
	{
		return $this->tncevvi;
	}

	/**
	* Set tnceds1
	*
	*Valor Total Descuento 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tnceds1
	* @return Tnceds1
	*/
	public function setTnceds1($tnceds1)
	{
	  $this->tnceds1 = (Double) $tnceds1;
	    return $this;
	}

	/**
	* Get tnceds1
	*
	* @return null|Decimal
	*/
	public function getTnceds1()
	{
		return $this->tnceds1;
	}

	/**
	* Set tnceds2
	*
	*Valor Total Descuento 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $tnceds2
	* @return Tnceds2
	*/
	public function setTnceds2($tnceds2)
	{
	  $this->tnceds2 = (Double) $tnceds2;
	    return $this;
	}

	/**
	* Get tnceds2
	*
	* @return null|Decimal
	*/
	public function getTnceds2()
	{
		return $this->tnceds2;
	}

	/**
	* Set tnceiva
	*
	*Valor Total Impuesto 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tnceiva
	* @return Tnceiva
	*/
	public function setTnceiva($tnceiva)
	{
	  $this->tnceiva = (Double) $tnceiva;
	    return $this;
	}

	/**
	* Get tnceiva
	*
	* @return null|Decimal
	*/
	public function getTnceiva()
	{
		return $this->tnceiva;
	}

	/**
	* Set tnceim2
	*
	*Valor Total Impuesto 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $tnceim2
	* @return Tnceim2
	*/
	public function setTnceim2($tnceim2)
	{
	  $this->tnceim2 = (Double) $tnceim2;
	    return $this;
	}

	/**
	* Get tnceim2
	*
	* @return null|Decimal
	*/
	public function getTnceim2()
	{
		return $this->tnceim2;
	}

	/**
	* Set tnceim3
	*
	*Valor Total Impuesto 3 (Moneda Extranjera)
	*
	* @parámetro Decimal $tnceim3
	* @return Tnceim3
	*/
	public function setTnceim3($tnceim3)
	{
	  $this->tnceim3 = (Double) $tnceim3;
	    return $this;
	}

	/**
	* Get tnceim3
	*
	* @return null|Decimal
	*/
	public function getTnceim3()
	{
		return $this->tnceim3;
	}

	/**
	* Set tncepvt
	*
	*Valor Total Precio Venta (Moneda Extranjera)
	*
	* @parámetro Decimal $tncepvt
	* @return Tncepvt
	*/
	public function setTncepvt($tncepvt)
	{
	  $this->tncepvt = (Double) $tncepvt;
	    return $this;
	}

	/**
	* Get tncepvt
	*
	* @return null|Decimal
	*/
	public function getTncepvt()
	{
		return $this->tncepvt;
	}

	/**
	* Set tncref1
	*
	*Referencia Libre 1
	*
	* @parámetro Decimal $tncref1
	* @return Tncref1
	*/
	public function setTncref1($tncref1)
	{
	  $this->tncref1 = (Double) $tncref1;
	    return $this;
	}

	/**
	* Get tncref1
	*
	* @return null|Decimal
	*/
	public function getTncref1()
	{
		return $this->tncref1;
	}

	/**
	* Set tncref2
	*
	*Referencia Libre 2
	*
	* @parámetro Decimal $tncref2
	* @return Tncref2
	*/
	public function setTncref2($tncref2)
	{
	  $this->tncref2 = (Double) $tncref2;
	    return $this;
	}

	/**
	* Get tncref2
	*
	* @return null|Decimal
	*/
	public function getTncref2()
	{
		return $this->tncref2;
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
	* Set tncusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tncusuc
	* @return Tncusuc
	*/
	public function setTncusuc($tncusuc)
	{
	  $this->tncusuc = (String) $tncusuc;
	    return $this;
	}

	/**
	* Get tncusuc
	*
	* @return null|String
	*/
	public function getTncusuc()
	{
		return $this->tncusuc;
	}

	/**
	* Set tncfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tncfecc
	* @return Tncfecc
	*/
	public function setTncfecc($tncfecc)
	{
	  $this->tncfecc = (String) $tncfecc;
	    return $this;
	}

	/**
	* Get tncfecc
	*
	* @return null|Date
	*/
	public function getTncfecc()
	{
		return $this->tncfecc;
	}

	/**
	* Set tncusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tncusum
	* @return Tncusum
	*/
	public function setTncusum($tncusum)
	{
	  $this->tncusum = (String) $tncusum;
	    return $this;
	}

	/**
	* Get tncusum
	*
	* @return null|String
	*/
	public function getTncusum()
	{
		return $this->tncusum;
	}

	/**
	* Set tncfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tncfecm
	* @return Tncfecm
	*/
	public function setTncfecm($tncfecm)
	{
	  $this->tncfecm = (String) $tncfecm;
	    return $this;
	}

	/**
	* Get tncfecm
	*
	* @return null|Date
	*/
	public function getTncfecm()
	{
		return $this->tncfecm;
	}

	/**
	* Set tnctask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tnctask
	* @return Tnctask
	*/
	public function setTnctask($tnctask)
	{
	  $this->tnctask = (String) $tnctask;
	    return $this;
	}

	/**
	* Get tnctask
	*
	* @return null|String
	*/
	public function getTnctask()
	{
		return $this->tnctask;
	}

	/**
	* Set tncpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tncpara
	* @return Tncpara
	*/
	public function setTncpara($tncpara)
	{
	  $this->tncpara = (Integer) $tncpara;
	    return $this;
	}

	/**
	* Get tncpara
	*
	* @return null|Integer
	*/
	public function getTncpara()
	{
		return $this->tncpara;
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

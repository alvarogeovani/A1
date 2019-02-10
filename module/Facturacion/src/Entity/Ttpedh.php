<?php
 /**
 * Model of the Ttpedh table
 *
 * It is used to convert the   Ttpedh entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttpedh
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttpedh
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Facturación Normal
		*/
		protected $tphsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Ejecutivos de Ventas
		*/
		protected $tagsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Puntos de Venta
		*/
		protected $tpvsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Periodos Contables
		*/
		protected $bpesec1;
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
		* Clave Primaria de la Base de Datos: Formas de Pago por Distribuidor
		*/
		protected $tfpsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Tipos de Documentos Comerciales
		*/
		protected $tbdsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Tipos de Cambios
		*/
		protected $bmosec1;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Tarifas de Envío
		*/
		protected $lthsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Distribuidores
		*/
		protected $tdisecu;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Número de Pedido
		*/
		protected $tphnume;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Orden por Distribuidor
		*/
		protected $tphnuor;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Cambio de Distribuidor
		*/
		protected $tphcadi;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código PK (Secuencial) del Nuevo Distribuidor
		*/
		protected $tphndse;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nuevo Código de Distribuidor
		*/
		protected $tphnuco;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de facturación en el caso de migración
		*/
		protected $tphfemi;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Pedido
		*/
		protected $tphfecp;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Hora de Pedido
		*/
		protected $tphhorp;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de Documento Comercial
		*/
		protected $tbdtipo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción del Documento Comercial
		*/
		protected $tbddesc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Documento (Inf. Facturación)
		*/
		protected $tphfano;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Facturación (Inf. Facturación)
		*/
		protected $tphfecf;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Anulación
		*/
		protected $tphfeca;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Hora de Facturación (Inf. Facturación)
		*/
		protected $tphhorf;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Facturado por Usuario del sistema (Inf. Facturación)
		*/
		protected $tphusaf;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Numero de Guía (Inf. Guía)
		*/
		protected $tphguia;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Guía (Inf. Guía)
		*/
		protected $tphfecg;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Hora de Guía (Inf. Guía)
		*/
		protected $tphhorg;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Guiado por (Inf. Guía)
		*/
		protected $tphusag;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación de la Guía de Remisión (Inf. Guía)
		*/
		protected $tphsigr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Comprobante (Inf. Bodega)
		*/
		protected $tphvale;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Comprobante (Inf. Bodega)
		*/
		protected $tphfecv;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Secuencial de la Lista de Precios (Inf. Bodega)
		*/
		protected $tlpsec2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de la Nueva Lista  de Precios
		*/
		protected $tlpcodi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de la Nueva  Lista de Precios
		*/
		protected $tlpdesc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Envío
		*/
		protected $tphtien;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Motivo de Traslado (Inf. Guía)
		*/
		protected $tphmose;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Motivo de Traslado (Inf. Guía)
		*/
		protected $tphmode;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dirección de Destino (Inf. Guía)
		*/
		protected $tphdide;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Distrito de Destino (Inf. Guía)
		*/
		protected $tphdsde;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Provincia de Destino (Inf. Guía)
		*/
		protected $tphprde;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Departamento de Destino (Inf. Guía)
		*/
		protected $tphdede;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* País de Destino (Inf. Guía)
		*/
		protected $tphpade;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono de Destino (Inf. Guía)
		*/
		protected $tphtede;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Ciudad de Destino  (Inf. Guía)
		*/
		protected $tphciud;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Origen del Pedido
		*/
		protected $tphorig;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación del Pedido
		*/
		protected $tphsitu;
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
		* Nombre/ Razón Social del Distribuidor
		*/
		protected $tdisnom;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Venta
		*/
		protected $tphtvta;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Zona de Venta
		*/
		protected $tphcozo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Zona de Venta
		*/
		protected $tphzona;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Peso del Pedido por Factura
		*/
		protected $tphpefv;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Peso del Pedido por Número de Orden
		*/
		protected $tphpeno;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Total Relación Puntos-Moneda Nacional
		*/
		protected $tphrpdo;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Precio Unitario multiplicado por la Cantidad
		*/
		protected $tphtunc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Guarda el valor de la venta afecta + la venta inafecta antes de aplicar el descuento Cabecera
		*/
		protected $tphstpa;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor del descuento por Cabecera
		*/
		protected $tphvdsc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Guarda el Sub-total suma del Valor Afecta y Valor Inafecta antes de sumar el IVA  y  restado todos los descuentos (Detalle y Cabecera)
		*/
		protected $tphsubt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta con Impuesto (Moneda  Nacional)
		*/
		protected $tphnvva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta 0 Porciento de IVA (Moneda  Nacional)
		*/
		protected $tphncpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta sin Impuesto (Moneda  Nacional)
		*/
		protected $tphnvvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 1 (Moneda  Nacional)
		*/
		protected $tphnds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 2 (Moneda  Nacional)
		*/
		protected $tphnds2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda  Nacional)
		*/
		protected $tphniva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda  Nacional)
		*/
		protected $tphnim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda  Nacional)
		*/
		protected $tphnim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio Venta (Moneda  Nacional)
		*/
		protected $tphnpvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta con Impuesto (Moneda Extranjera)
		*/
		protected $tphevva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta 0 Porciento de IVA (Moneda  Extranjera)
		*/
		protected $tphecpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta sin Impuesto (Moneda Extranjera)
		*/
		protected $tphevvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Total Valor Descuento 1 (Moneda Extranjera)
		*/
		protected $tpheds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Total Valor Descuento 2 (Moneda Extranjera)
		*/
		protected $tpheds2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda Extranjera)
		*/
		protected $tpheiva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda Extranjera)
		*/
		protected $tpheim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda Extranjera)
		*/
		protected $tpheim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio Venta (Moneda Extranjera)
		*/
		protected $tphepvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Tipo de Cambio
		*/
		protected $tphtcam;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Concepto de Venta
		*/
		protected $tphrubr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Calle Principal de la Dirección del Distribuidor
		*/
		protected $tdicapr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nomenclatura y Número
		*/
		protected $tdinonu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Calle Secundaria de la Dirección del Distribuidor
		*/
		protected $tdicase;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Distrito de Distribuidor
		*/
		protected $tdisdis;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Provincia del Distribuidor
		*/
		protected $tdispro;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* RUC del Distribuidor
		*/
		protected $tdisruc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo Documento de Identidad del Distribuidor
		*/
		protected $tditide;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número Documento de Identidad
		*/
		protected $tdinide;
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
		* Código de Moneda
		*/
		protected $bmoncve;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de Moneda
		*/
		protected $bmondes;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Autorización de Límite de Crédito
		*/
		protected $tphaldc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Autorización de Documentos Vencidos
		*/
		protected $tphadov;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Autorización de Donaciones
		*/
		protected $tphadon;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Orden de Compra
		*/
		protected $tphref1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Transportista
		*/
		protected $tphref2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 3 - Libre
		*/
		protected $tphref3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 4 - Libre
		*/
		protected $tphref4;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Secuencia PK de Bodega TVBODE
		*/
		protected $vbosec1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre Bodega
		*/
		protected $vbonomb;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observación Factura
		*/
		protected $tphobsf;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Guarda información adicional como el descuento de cabecera que se aplica.
		*/
		protected $tphobsi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observación Guía  de Remisión
		*/
		protected $tphobsg;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación de la Retención
		*/
		protected $tphsirt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor total de la Retención
		*/
		protected $tphvart;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Considerado en Cierre Diario
		*/
		protected $tphcocd;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Día de Trabajo
		*/
		protected $tphditr;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Vigencia de Pedido
		*/
		protected $tphvipe;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Vigencia de Cotización
		*/
		protected $tphvico;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cantidad de letras
		*/
		protected $tphclet;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tphusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tphfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tphusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tphfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tphtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tphpara;

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
	* Name of the table: ttpedh
	* 
	 */
	const TABLE="ttpedh";

	/**
	*Primary key
*/
		 const PKEY = "tphsecu";



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
		throw new \Exception('Class Entity: Ttpedh Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttpedh. Invalid specified property: get'.$name);
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
	* Set tagsecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Ejecutivos de Ventas
	*
	* @parámetro Integer $tagsecu
	* @return Tagsecu
	*/
	public function setTagsecu($tagsecu)
	{
	  $this->tagsecu = (Integer) $tagsecu;
	    return $this;
	}

	/**
	* Get tagsecu
	*
	* @return null|Integer
	*/
	public function getTagsecu()
	{
		return $this->tagsecu;
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
	* Set bpesec1
	*
	*Estos datos se ingresan en la Opción: Periodos Contables
	*
	* @parámetro Integer $bpesec1
	* @return Bpesec1
	*/
	public function setBpesec1($bpesec1)
	{
	  $this->bpesec1 = (Integer) $bpesec1;
	    return $this;
	}

	/**
	* Get bpesec1
	*
	* @return null|Integer
	*/
	public function getBpesec1()
	{
		return $this->bpesec1;
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
	* Set tfpsecu
	*
	*Clave Primaria de la Base de Datos: Formas de Pago por Distribuidor
	*
	* @parámetro Integer $tfpsecu
	* @return Tfpsecu
	*/
	public function setTfpsecu($tfpsecu)
	{
	  $this->tfpsecu = (Integer) $tfpsecu;
	    return $this;
	}

	/**
	* Get tfpsecu
	*
	* @return null|Integer
	*/
	public function getTfpsecu()
	{
		return $this->tfpsecu;
	}

	/**
	* Set tbdsecu
	*
	*Estos datos se ingresan en la Opción: Tipos de Documentos Comerciales
	*
	* @parámetro Integer $tbdsecu
	* @return Tbdsecu
	*/
	public function setTbdsecu($tbdsecu)
	{
	  $this->tbdsecu = (Integer) $tbdsecu;
	    return $this;
	}

	/**
	* Get tbdsecu
	*
	* @return null|Integer
	*/
	public function getTbdsecu()
	{
		return $this->tbdsecu;
	}

	/**
	* Set bmosec1
	*
	*Estos datos se ingresan en la Opción: Tipos de Cambios
	*
	* @parámetro Integer $bmosec1
	* @return Bmosec1
	*/
	public function setBmosec1($bmosec1)
	{
	  $this->bmosec1 = (Integer) $bmosec1;
	    return $this;
	}

	/**
	* Get bmosec1
	*
	* @return null|Integer
	*/
	public function getBmosec1()
	{
		return $this->bmosec1;
	}

	/**
	* Set lthsecu
	*
	*Estos datos se ingresan en la Opción: Tarifas de Envío
	*
	* @parámetro Integer $lthsecu
	* @return Lthsecu
	*/
	public function setLthsecu($lthsecu)
	{
	  $this->lthsecu = (Integer) $lthsecu;
	    return $this;
	}

	/**
	* Get lthsecu
	*
	* @return null|Integer
	*/
	public function getLthsecu()
	{
		return $this->lthsecu;
	}

	/**
	* Set tdisecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Distribuidores
	*
	* @parámetro Integer $tdisecu
	* @return Tdisecu
	*/
	public function setTdisecu($tdisecu)
	{
	  $this->tdisecu = (Integer) $tdisecu;
	    return $this;
	}

	/**
	* Get tdisecu
	*
	* @return null|Integer
	*/
	public function getTdisecu()
	{
		return $this->tdisecu;
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
	* Set tphnuor
	*
	*Número de Orden por Distribuidor
	*
	* @parámetro Decimal $tphnuor
	* @return Tphnuor
	*/
	public function setTphnuor($tphnuor)
	{
	  $this->tphnuor = (Double) $tphnuor;
	    return $this;
	}

	/**
	* Get tphnuor
	*
	* @return null|Decimal
	*/
	public function getTphnuor()
	{
		return $this->tphnuor;
	}

	/**
	* Set tphcadi
	*
	*Cambio de Distribuidor
	*
	* @parámetro Integer $tphcadi
	* @return Tphcadi
	*/
	public function setTphcadi($tphcadi)
	{
	  $this->tphcadi = (Integer) $tphcadi;
	    return $this;
	}

	/**
	* Get tphcadi
	*
	* @return null|Integer
	*/
	public function getTphcadi()
	{
		return $this->tphcadi;
	}

	/**
	* Set tphndse
	*
	*Código PK (Secuencial) del Nuevo Distribuidor
	*
	* @parámetro Integer $tphndse
	* @return Tphndse
	*/
	public function setTphndse($tphndse)
	{
	  $this->tphndse = (Integer) $tphndse;
	    return $this;
	}

	/**
	* Get tphndse
	*
	* @return null|Integer
	*/
	public function getTphndse()
	{
		return $this->tphndse;
	}

	/**
	* Set tphnuco
	*
	*Nuevo Código de Distribuidor
	*
	* @parámetro String $tphnuco
	* @return Tphnuco
	*/
	public function setTphnuco($tphnuco)
	{
	  $this->tphnuco = (String) $tphnuco;
	    return $this;
	}

	/**
	* Get tphnuco
	*
	* @return null|String
	*/
	public function getTphnuco()
	{
		return $this->tphnuco;
	}

	/**
	* Set tphfemi
	*
	*Fecha de facturación en el caso de migración
	*
	* @parámetro Date $tphfemi
	* @return Tphfemi
	*/
	public function setTphfemi($tphfemi)
	{
	  $this->tphfemi = (String) $tphfemi;
	    return $this;
	}

	/**
	* Get tphfemi
	*
	* @return null|Date
	*/
	public function getTphfemi()
	{
		return $this->tphfemi;
	}

	/**
	* Set tphfecp
	*
	*Fecha de Pedido
	*
	* @parámetro Date $tphfecp
	* @return Tphfecp
	*/
	public function setTphfecp($tphfecp)
	{
	  $this->tphfecp = (String) $tphfecp;
	    return $this;
	}

	/**
	* Get tphfecp
	*
	* @return null|Date
	*/
	public function getTphfecp()
	{
		return $this->tphfecp;
	}

	/**
	* Set tphhorp
	*
	*Hora de Pedido
	*
	* @parámetro String $tphhorp
	* @return Tphhorp
	*/
	public function setTphhorp($tphhorp)
	{
	  $this->tphhorp = (String) $tphhorp;
	    return $this;
	}

	/**
	* Get tphhorp
	*
	* @return null|String
	*/
	public function getTphhorp()
	{
		return $this->tphhorp;
	}

	/**
	* Set tbdtipo
	*
	*Tipo de Documento Comercial
	*
	* @parámetro String $tbdtipo
	* @return Tbdtipo
	*/
	public function setTbdtipo($tbdtipo)
	{
	  $this->tbdtipo = (String) $tbdtipo;
	    return $this;
	}

	/**
	* Get tbdtipo
	*
	* @return null|String
	*/
	public function getTbdtipo()
	{
		return $this->tbdtipo;
	}

	/**
	* Set tbddesc
	*
	*Descripción del Documento Comercial
	*
	* @parámetro String $tbddesc
	* @return Tbddesc
	*/
	public function setTbddesc($tbddesc)
	{
	  $this->tbddesc = (String) $tbddesc;
	    return $this;
	}

	/**
	* Get tbddesc
	*
	* @return null|String
	*/
	public function getTbddesc()
	{
		return $this->tbddesc;
	}

	/**
	* Set tphfano
	*
	*Número de Documento (Inf. Facturación)
	*
	* @parámetro Decimal $tphfano
	* @return Tphfano
	*/
	public function setTphfano($tphfano)
	{
	  $this->tphfano = (Double) $tphfano;
	    return $this;
	}

	/**
	* Get tphfano
	*
	* @return null|Decimal
	*/
	public function getTphfano()
	{
		return $this->tphfano;
	}

	/**
	* Set tphfecf
	*
	*Fecha de Facturación (Inf. Facturación)
	*
	* @parámetro Date $tphfecf
	* @return Tphfecf
	*/
	public function setTphfecf($tphfecf)
	{
	  $this->tphfecf = (String) $tphfecf;
	    return $this;
	}

	/**
	* Get tphfecf
	*
	* @return null|Date
	*/
	public function getTphfecf()
	{
		return $this->tphfecf;
	}

	/**
	* Set tphfeca
	*
	*Fecha de Anulación
	*
	* @parámetro Date $tphfeca
	* @return Tphfeca
	*/
	public function setTphfeca($tphfeca)
	{
	  $this->tphfeca = (String) $tphfeca;
	    return $this;
	}

	/**
	* Get tphfeca
	*
	* @return null|Date
	*/
	public function getTphfeca()
	{
		return $this->tphfeca;
	}

	/**
	* Set tphhorf
	*
	*Hora de Facturación (Inf. Facturación)
	*
	* @parámetro String $tphhorf
	* @return Tphhorf
	*/
	public function setTphhorf($tphhorf)
	{
	  $this->tphhorf = (String) $tphhorf;
	    return $this;
	}

	/**
	* Get tphhorf
	*
	* @return null|String
	*/
	public function getTphhorf()
	{
		return $this->tphhorf;
	}

	/**
	* Set tphusaf
	*
	*Facturado por Usuario del sistema (Inf. Facturación)
	*
	* @parámetro String $tphusaf
	* @return Tphusaf
	*/
	public function setTphusaf($tphusaf)
	{
	  $this->tphusaf = (String) $tphusaf;
	    return $this;
	}

	/**
	* Get tphusaf
	*
	* @return null|String
	*/
	public function getTphusaf()
	{
		return $this->tphusaf;
	}

	/**
	* Set tphguia
	*
	*Numero de Guía (Inf. Guía)
	*
	* @parámetro Decimal $tphguia
	* @return Tphguia
	*/
	public function setTphguia($tphguia)
	{
	  $this->tphguia = (Double) $tphguia;
	    return $this;
	}

	/**
	* Get tphguia
	*
	* @return null|Decimal
	*/
	public function getTphguia()
	{
		return $this->tphguia;
	}

	/**
	* Set tphfecg
	*
	*Fecha de Guía (Inf. Guía)
	*
	* @parámetro Date $tphfecg
	* @return Tphfecg
	*/
	public function setTphfecg($tphfecg)
	{
	  $this->tphfecg = (String) $tphfecg;
	    return $this;
	}

	/**
	* Get tphfecg
	*
	* @return null|Date
	*/
	public function getTphfecg()
	{
		return $this->tphfecg;
	}

	/**
	* Set tphhorg
	*
	*Hora de Guía (Inf. Guía)
	*
	* @parámetro String $tphhorg
	* @return Tphhorg
	*/
	public function setTphhorg($tphhorg)
	{
	  $this->tphhorg = (String) $tphhorg;
	    return $this;
	}

	/**
	* Get tphhorg
	*
	* @return null|String
	*/
	public function getTphhorg()
	{
		return $this->tphhorg;
	}

	/**
	* Set tphusag
	*
	*Guiado por (Inf. Guía)
	*
	* @parámetro String $tphusag
	* @return Tphusag
	*/
	public function setTphusag($tphusag)
	{
	  $this->tphusag = (String) $tphusag;
	    return $this;
	}

	/**
	* Get tphusag
	*
	* @return null|String
	*/
	public function getTphusag()
	{
		return $this->tphusag;
	}

	/**
	* Set tphsigr
	*
	*Situación de la Guía de Remisión (Inf. Guía)
	*
	* @parámetro Integer $tphsigr
	* @return Tphsigr
	*/
	public function setTphsigr($tphsigr)
	{
	  $this->tphsigr = (Integer) $tphsigr;
	    return $this;
	}

	/**
	* Get tphsigr
	*
	* @return null|Integer
	*/
	public function getTphsigr()
	{
		return $this->tphsigr;
	}

	/**
	* Set tphvale
	*
	*Número de Comprobante (Inf. Bodega)
	*
	* @parámetro Decimal $tphvale
	* @return Tphvale
	*/
	public function setTphvale($tphvale)
	{
	  $this->tphvale = (Double) $tphvale;
	    return $this;
	}

	/**
	* Get tphvale
	*
	* @return null|Decimal
	*/
	public function getTphvale()
	{
		return $this->tphvale;
	}

	/**
	* Set tphfecv
	*
	*Fecha de Comprobante (Inf. Bodega)
	*
	* @parámetro Date $tphfecv
	* @return Tphfecv
	*/
	public function setTphfecv($tphfecv)
	{
	  $this->tphfecv = (String) $tphfecv;
	    return $this;
	}

	/**
	* Get tphfecv
	*
	* @return null|Date
	*/
	public function getTphfecv()
	{
		return $this->tphfecv;
	}

	/**
	* Set tlpsec2
	*
	*Secuencial de la Lista de Precios (Inf. Bodega)
	*
	* @parámetro Integer $tlpsec2
	* @return Tlpsec2
	*/
	public function setTlpsec2($tlpsec2)
	{
	  $this->tlpsec2 = (Integer) $tlpsec2;
	    return $this;
	}

	/**
	* Get tlpsec2
	*
	* @return null|Integer
	*/
	public function getTlpsec2()
	{
		return $this->tlpsec2;
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
	* Set tlpdesc
	*
	*Descripción de la Nueva  Lista de Precios
	*
	* @parámetro String $tlpdesc
	* @return Tlpdesc
	*/
	public function setTlpdesc($tlpdesc)
	{
	  $this->tlpdesc = (String) $tlpdesc;
	    return $this;
	}

	/**
	* Get tlpdesc
	*
	* @return null|String
	*/
	public function getTlpdesc()
	{
		return $this->tlpdesc;
	}

	/**
	* Set tphtien
	*
	*Tipo de Envío
	*
	* @parámetro Integer $tphtien
	* @return Tphtien
	*/
	public function setTphtien($tphtien)
	{
	  $this->tphtien = (Integer) $tphtien;
	    return $this;
	}

	/**
	* Get tphtien
	*
	* @return null|Integer
	*/
	public function getTphtien()
	{
		return $this->tphtien;
	}

	/**
	* Set tphmose
	*
	*Código Motivo de Traslado (Inf. Guía)
	*
	* @parámetro Integer $tphmose
	* @return Tphmose
	*/
	public function setTphmose($tphmose)
	{
	  $this->tphmose = (Integer) $tphmose;
	    return $this;
	}

	/**
	* Get tphmose
	*
	* @return null|Integer
	*/
	public function getTphmose()
	{
		return $this->tphmose;
	}

	/**
	* Set tphmode
	*
	*Descripción Motivo de Traslado (Inf. Guía)
	*
	* @parámetro String $tphmode
	* @return Tphmode
	*/
	public function setTphmode($tphmode)
	{
	  $this->tphmode = (String) $tphmode;
	    return $this;
	}

	/**
	* Get tphmode
	*
	* @return null|String
	*/
	public function getTphmode()
	{
		return $this->tphmode;
	}

	/**
	* Set tphdide
	*
	*Dirección de Destino (Inf. Guía)
	*
	* @parámetro String $tphdide
	* @return Tphdide
	*/
	public function setTphdide($tphdide)
	{
	  $this->tphdide = (String) $tphdide;
	    return $this;
	}

	/**
	* Get tphdide
	*
	* @return null|String
	*/
	public function getTphdide()
	{
		return $this->tphdide;
	}

	/**
	* Set tphdsde
	*
	*Distrito de Destino (Inf. Guía)
	*
	* @parámetro String $tphdsde
	* @return Tphdsde
	*/
	public function setTphdsde($tphdsde)
	{
	  $this->tphdsde = (String) $tphdsde;
	    return $this;
	}

	/**
	* Get tphdsde
	*
	* @return null|String
	*/
	public function getTphdsde()
	{
		return $this->tphdsde;
	}

	/**
	* Set tphprde
	*
	*Provincia de Destino (Inf. Guía)
	*
	* @parámetro String $tphprde
	* @return Tphprde
	*/
	public function setTphprde($tphprde)
	{
	  $this->tphprde = (String) $tphprde;
	    return $this;
	}

	/**
	* Get tphprde
	*
	* @return null|String
	*/
	public function getTphprde()
	{
		return $this->tphprde;
	}

	/**
	* Set tphdede
	*
	*Departamento de Destino (Inf. Guía)
	*
	* @parámetro String $tphdede
	* @return Tphdede
	*/
	public function setTphdede($tphdede)
	{
	  $this->tphdede = (String) $tphdede;
	    return $this;
	}

	/**
	* Get tphdede
	*
	* @return null|String
	*/
	public function getTphdede()
	{
		return $this->tphdede;
	}

	/**
	* Set tphpade
	*
	*País de Destino (Inf. Guía)
	*
	* @parámetro String $tphpade
	* @return Tphpade
	*/
	public function setTphpade($tphpade)
	{
	  $this->tphpade = (String) $tphpade;
	    return $this;
	}

	/**
	* Get tphpade
	*
	* @return null|String
	*/
	public function getTphpade()
	{
		return $this->tphpade;
	}

	/**
	* Set tphtede
	*
	*Teléfono de Destino (Inf. Guía)
	*
	* @parámetro String $tphtede
	* @return Tphtede
	*/
	public function setTphtede($tphtede)
	{
	  $this->tphtede = (String) $tphtede;
	    return $this;
	}

	/**
	* Get tphtede
	*
	* @return null|String
	*/
	public function getTphtede()
	{
		return $this->tphtede;
	}

	/**
	* Set tphciud
	*
	*Ciudad de Destino  (Inf. Guía)
	*
	* @parámetro String $tphciud
	* @return Tphciud
	*/
	public function setTphciud($tphciud)
	{
	  $this->tphciud = (String) $tphciud;
	    return $this;
	}

	/**
	* Get tphciud
	*
	* @return null|String
	*/
	public function getTphciud()
	{
		return $this->tphciud;
	}

	/**
	* Set tphorig
	*
	*Origen del Pedido
	*
	* @parámetro Integer $tphorig
	* @return Tphorig
	*/
	public function setTphorig($tphorig)
	{
	  $this->tphorig = (Integer) $tphorig;
	    return $this;
	}

	/**
	* Get tphorig
	*
	* @return null|Integer
	*/
	public function getTphorig()
	{
		return $this->tphorig;
	}

	/**
	* Set tphsitu
	*
	*Situación del Pedido
	*
	* @parámetro Integer $tphsitu
	* @return Tphsitu
	*/
	public function setTphsitu($tphsitu)
	{
	  $this->tphsitu = (Integer) $tphsitu;
	    return $this;
	}

	/**
	* Get tphsitu
	*
	* @return null|Integer
	*/
	public function getTphsitu()
	{
		return $this->tphsitu;
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
	* Set tdisnom
	*
	*Nombre/ Razón Social del Distribuidor
	*
	* @parámetro String $tdisnom
	* @return Tdisnom
	*/
	public function setTdisnom($tdisnom)
	{
	  $this->tdisnom = (String) $tdisnom;
	    return $this;
	}

	/**
	* Get tdisnom
	*
	* @return null|String
	*/
	public function getTdisnom()
	{
		return $this->tdisnom;
	}

	/**
	* Set tphtvta
	*
	*Tipo de Venta
	*
	* @parámetro Integer $tphtvta
	* @return Tphtvta
	*/
	public function setTphtvta($tphtvta)
	{
	  $this->tphtvta = (Integer) $tphtvta;
	    return $this;
	}

	/**
	* Get tphtvta
	*
	* @return null|Integer
	*/
	public function getTphtvta()
	{
		return $this->tphtvta;
	}

	/**
	* Set tphcozo
	*
	*Código Zona de Venta
	*
	* @parámetro String $tphcozo
	* @return Tphcozo
	*/
	public function setTphcozo($tphcozo)
	{
	  $this->tphcozo = (String) $tphcozo;
	    return $this;
	}

	/**
	* Get tphcozo
	*
	* @return null|String
	*/
	public function getTphcozo()
	{
		return $this->tphcozo;
	}

	/**
	* Set tphzona
	*
	*Zona de Venta
	*
	* @parámetro String $tphzona
	* @return Tphzona
	*/
	public function setTphzona($tphzona)
	{
	  $this->tphzona = (String) $tphzona;
	    return $this;
	}

	/**
	* Get tphzona
	*
	* @return null|String
	*/
	public function getTphzona()
	{
		return $this->tphzona;
	}

	/**
	* Set tphpefv
	*
	*Peso del Pedido por Factura
	*
	* @parámetro Decimal $tphpefv
	* @return Tphpefv
	*/
	public function setTphpefv($tphpefv)
	{
	  $this->tphpefv = (Double) $tphpefv;
	    return $this;
	}

	/**
	* Get tphpefv
	*
	* @return null|Decimal
	*/
	public function getTphpefv()
	{
		return $this->tphpefv;
	}

	/**
	* Set tphpeno
	*
	*Peso del Pedido por Número de Orden
	*
	* @parámetro Decimal $tphpeno
	* @return Tphpeno
	*/
	public function setTphpeno($tphpeno)
	{
	  $this->tphpeno = (Double) $tphpeno;
	    return $this;
	}

	/**
	* Get tphpeno
	*
	* @return null|Decimal
	*/
	public function getTphpeno()
	{
		return $this->tphpeno;
	}

	/**
	* Set tphrpdo
	*
	*Total Relación Puntos-Moneda Nacional
	*
	* @parámetro Decimal $tphrpdo
	* @return Tphrpdo
	*/
	public function setTphrpdo($tphrpdo)
	{
	  $this->tphrpdo = (Double) $tphrpdo;
	    return $this;
	}

	/**
	* Get tphrpdo
	*
	* @return null|Decimal
	*/
	public function getTphrpdo()
	{
		return $this->tphrpdo;
	}

	/**
	* Set tphtunc
	*
	*Precio Unitario multiplicado por la Cantidad
	*
	* @parámetro Decimal $tphtunc
	* @return Tphtunc
	*/
	public function setTphtunc($tphtunc)
	{
	  $this->tphtunc = (Double) $tphtunc;
	    return $this;
	}

	/**
	* Get tphtunc
	*
	* @return null|Decimal
	*/
	public function getTphtunc()
	{
		return $this->tphtunc;
	}

	/**
	* Set tphstpa
	*
	*Guarda el valor de la venta afecta + la venta inafecta antes de aplicar el descuento Cabecera
	*
	* @parámetro Decimal $tphstpa
	* @return Tphstpa
	*/
	public function setTphstpa($tphstpa)
	{
	  $this->tphstpa = (Double) $tphstpa;
	    return $this;
	}

	/**
	* Get tphstpa
	*
	* @return null|Decimal
	*/
	public function getTphstpa()
	{
		return $this->tphstpa;
	}

	/**
	* Set tphvdsc
	*
	*Valor del descuento por Cabecera
	*
	* @parámetro Decimal $tphvdsc
	* @return Tphvdsc
	*/
	public function setTphvdsc($tphvdsc)
	{
	  $this->tphvdsc = (Double) $tphvdsc;
	    return $this;
	}

	/**
	* Get tphvdsc
	*
	* @return null|Decimal
	*/
	public function getTphvdsc()
	{
		return $this->tphvdsc;
	}

	/**
	* Set tphsubt
	*
	*Guarda el Sub-total suma del Valor Afecta y Valor Inafecta antes de sumar el IVA  y  restado todos los descuentos (Detalle y Cabecera)
	*
	* @parámetro Decimal $tphsubt
	* @return Tphsubt
	*/
	public function setTphsubt($tphsubt)
	{
	  $this->tphsubt = (Double) $tphsubt;
	    return $this;
	}

	/**
	* Get tphsubt
	*
	* @return null|Decimal
	*/
	public function getTphsubt()
	{
		return $this->tphsubt;
	}

	/**
	* Set tphnvva
	*
	*Valor Total Venta con Impuesto (Moneda  Nacional)
	*
	* @parámetro Decimal $tphnvva
	* @return Tphnvva
	*/
	public function setTphnvva($tphnvva)
	{
	  $this->tphnvva = (Double) $tphnvva;
	    return $this;
	}

	/**
	* Get tphnvva
	*
	* @return null|Decimal
	*/
	public function getTphnvva()
	{
		return $this->tphnvva;
	}

	/**
	* Set tphncpi
	*
	*Valor Total Venta 0 Porciento de IVA (Moneda  Nacional)
	*
	* @parámetro Decimal $tphncpi
	* @return Tphncpi
	*/
	public function setTphncpi($tphncpi)
	{
	  $this->tphncpi = (Double) $tphncpi;
	    return $this;
	}

	/**
	* Get tphncpi
	*
	* @return null|Decimal
	*/
	public function getTphncpi()
	{
		return $this->tphncpi;
	}

	/**
	* Set tphnvvi
	*
	*Valor Total Venta sin Impuesto (Moneda  Nacional)
	*
	* @parámetro Decimal $tphnvvi
	* @return Tphnvvi
	*/
	public function setTphnvvi($tphnvvi)
	{
	  $this->tphnvvi = (Double) $tphnvvi;
	    return $this;
	}

	/**
	* Get tphnvvi
	*
	* @return null|Decimal
	*/
	public function getTphnvvi()
	{
		return $this->tphnvvi;
	}

	/**
	* Set tphnds1
	*
	*Valor Total Descuento 1 (Moneda  Nacional)
	*
	* @parámetro Decimal $tphnds1
	* @return Tphnds1
	*/
	public function setTphnds1($tphnds1)
	{
	  $this->tphnds1 = (Double) $tphnds1;
	    return $this;
	}

	/**
	* Get tphnds1
	*
	* @return null|Decimal
	*/
	public function getTphnds1()
	{
		return $this->tphnds1;
	}

	/**
	* Set tphnds2
	*
	*Valor Total Descuento 2 (Moneda  Nacional)
	*
	* @parámetro Decimal $tphnds2
	* @return Tphnds2
	*/
	public function setTphnds2($tphnds2)
	{
	  $this->tphnds2 = (Double) $tphnds2;
	    return $this;
	}

	/**
	* Get tphnds2
	*
	* @return null|Decimal
	*/
	public function getTphnds2()
	{
		return $this->tphnds2;
	}

	/**
	* Set tphniva
	*
	*Valor Total Impuesto 1 (Moneda  Nacional)
	*
	* @parámetro Decimal $tphniva
	* @return Tphniva
	*/
	public function setTphniva($tphniva)
	{
	  $this->tphniva = (Double) $tphniva;
	    return $this;
	}

	/**
	* Get tphniva
	*
	* @return null|Decimal
	*/
	public function getTphniva()
	{
		return $this->tphniva;
	}

	/**
	* Set tphnim2
	*
	*Valor Total Impuesto 2 (Moneda  Nacional)
	*
	* @parámetro Decimal $tphnim2
	* @return Tphnim2
	*/
	public function setTphnim2($tphnim2)
	{
	  $this->tphnim2 = (Double) $tphnim2;
	    return $this;
	}

	/**
	* Get tphnim2
	*
	* @return null|Decimal
	*/
	public function getTphnim2()
	{
		return $this->tphnim2;
	}

	/**
	* Set tphnim3
	*
	*Valor Total Impuesto 3 (Moneda  Nacional)
	*
	* @parámetro Decimal $tphnim3
	* @return Tphnim3
	*/
	public function setTphnim3($tphnim3)
	{
	  $this->tphnim3 = (Double) $tphnim3;
	    return $this;
	}

	/**
	* Get tphnim3
	*
	* @return null|Decimal
	*/
	public function getTphnim3()
	{
		return $this->tphnim3;
	}

	/**
	* Set tphnpvt
	*
	*Valor Total Precio Venta (Moneda  Nacional)
	*
	* @parámetro Decimal $tphnpvt
	* @return Tphnpvt
	*/
	public function setTphnpvt($tphnpvt)
	{
	  $this->tphnpvt = (Double) $tphnpvt;
	    return $this;
	}

	/**
	* Get tphnpvt
	*
	* @return null|Decimal
	*/
	public function getTphnpvt()
	{
		return $this->tphnpvt;
	}

	/**
	* Set tphevva
	*
	*Valor Total Venta con Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tphevva
	* @return Tphevva
	*/
	public function setTphevva($tphevva)
	{
	  $this->tphevva = (Double) $tphevva;
	    return $this;
	}

	/**
	* Get tphevva
	*
	* @return null|Decimal
	*/
	public function getTphevva()
	{
		return $this->tphevva;
	}

	/**
	* Set tphecpi
	*
	*Valor Total Venta 0 Porciento de IVA (Moneda  Extranjera)
	*
	* @parámetro Decimal $tphecpi
	* @return Tphecpi
	*/
	public function setTphecpi($tphecpi)
	{
	  $this->tphecpi = (Double) $tphecpi;
	    return $this;
	}

	/**
	* Get tphecpi
	*
	* @return null|Decimal
	*/
	public function getTphecpi()
	{
		return $this->tphecpi;
	}

	/**
	* Set tphevvi
	*
	*Valor Total Venta sin Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tphevvi
	* @return Tphevvi
	*/
	public function setTphevvi($tphevvi)
	{
	  $this->tphevvi = (Double) $tphevvi;
	    return $this;
	}

	/**
	* Get tphevvi
	*
	* @return null|Decimal
	*/
	public function getTphevvi()
	{
		return $this->tphevvi;
	}

	/**
	* Set tpheds1
	*
	*Total Valor Descuento 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tpheds1
	* @return Tpheds1
	*/
	public function setTpheds1($tpheds1)
	{
	  $this->tpheds1 = (Double) $tpheds1;
	    return $this;
	}

	/**
	* Get tpheds1
	*
	* @return null|Decimal
	*/
	public function getTpheds1()
	{
		return $this->tpheds1;
	}

	/**
	* Set tpheds2
	*
	*Total Valor Descuento 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $tpheds2
	* @return Tpheds2
	*/
	public function setTpheds2($tpheds2)
	{
	  $this->tpheds2 = (Double) $tpheds2;
	    return $this;
	}

	/**
	* Get tpheds2
	*
	* @return null|Decimal
	*/
	public function getTpheds2()
	{
		return $this->tpheds2;
	}

	/**
	* Set tpheiva
	*
	*Valor Total Impuesto 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tpheiva
	* @return Tpheiva
	*/
	public function setTpheiva($tpheiva)
	{
	  $this->tpheiva = (Double) $tpheiva;
	    return $this;
	}

	/**
	* Get tpheiva
	*
	* @return null|Decimal
	*/
	public function getTpheiva()
	{
		return $this->tpheiva;
	}

	/**
	* Set tpheim2
	*
	*Valor Total Impuesto 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $tpheim2
	* @return Tpheim2
	*/
	public function setTpheim2($tpheim2)
	{
	  $this->tpheim2 = (Double) $tpheim2;
	    return $this;
	}

	/**
	* Get tpheim2
	*
	* @return null|Decimal
	*/
	public function getTpheim2()
	{
		return $this->tpheim2;
	}

	/**
	* Set tpheim3
	*
	*Valor Total Impuesto 3 (Moneda Extranjera)
	*
	* @parámetro Decimal $tpheim3
	* @return Tpheim3
	*/
	public function setTpheim3($tpheim3)
	{
	  $this->tpheim3 = (Double) $tpheim3;
	    return $this;
	}

	/**
	* Get tpheim3
	*
	* @return null|Decimal
	*/
	public function getTpheim3()
	{
		return $this->tpheim3;
	}

	/**
	* Set tphepvt
	*
	*Valor Total Precio Venta (Moneda Extranjera)
	*
	* @parámetro Decimal $tphepvt
	* @return Tphepvt
	*/
	public function setTphepvt($tphepvt)
	{
	  $this->tphepvt = (Double) $tphepvt;
	    return $this;
	}

	/**
	* Get tphepvt
	*
	* @return null|Decimal
	*/
	public function getTphepvt()
	{
		return $this->tphepvt;
	}

	/**
	* Set tphtcam
	*
	*Tipo de Cambio
	*
	* @parámetro Decimal $tphtcam
	* @return Tphtcam
	*/
	public function setTphtcam($tphtcam)
	{
	  $this->tphtcam = (Double) $tphtcam;
	    return $this;
	}

	/**
	* Get tphtcam
	*
	* @return null|Decimal
	*/
	public function getTphtcam()
	{
		return $this->tphtcam;
	}

	/**
	* Set tphrubr
	*
	*Concepto de Venta
	*
	* @parámetro Integer $tphrubr
	* @return Tphrubr
	*/
	public function setTphrubr($tphrubr)
	{
	  $this->tphrubr = (Integer) $tphrubr;
	    return $this;
	}

	/**
	* Get tphrubr
	*
	* @return null|Integer
	*/
	public function getTphrubr()
	{
		return $this->tphrubr;
	}

	/**
	* Set tdicapr
	*
	*Calle Principal de la Dirección del Distribuidor
	*
	* @parámetro String $tdicapr
	* @return Tdicapr
	*/
	public function setTdicapr($tdicapr)
	{
	  $this->tdicapr = (String) $tdicapr;
	    return $this;
	}

	/**
	* Get tdicapr
	*
	* @return null|String
	*/
	public function getTdicapr()
	{
		return $this->tdicapr;
	}

	/**
	* Set tdinonu
	*
	*Nomenclatura y Número
	*
	* @parámetro String $tdinonu
	* @return Tdinonu
	*/
	public function setTdinonu($tdinonu)
	{
	  $this->tdinonu = (String) $tdinonu;
	    return $this;
	}

	/**
	* Get tdinonu
	*
	* @return null|String
	*/
	public function getTdinonu()
	{
		return $this->tdinonu;
	}

	/**
	* Set tdicase
	*
	*Calle Secundaria de la Dirección del Distribuidor
	*
	* @parámetro String $tdicase
	* @return Tdicase
	*/
	public function setTdicase($tdicase)
	{
	  $this->tdicase = (String) $tdicase;
	    return $this;
	}

	/**
	* Get tdicase
	*
	* @return null|String
	*/
	public function getTdicase()
	{
		return $this->tdicase;
	}

	/**
	* Set tdisdis
	*
	*Distrito de Distribuidor
	*
	* @parámetro String $tdisdis
	* @return Tdisdis
	*/
	public function setTdisdis($tdisdis)
	{
	  $this->tdisdis = (String) $tdisdis;
	    return $this;
	}

	/**
	* Get tdisdis
	*
	* @return null|String
	*/
	public function getTdisdis()
	{
		return $this->tdisdis;
	}

	/**
	* Set tdispro
	*
	*Provincia del Distribuidor
	*
	* @parámetro String $tdispro
	* @return Tdispro
	*/
	public function setTdispro($tdispro)
	{
	  $this->tdispro = (String) $tdispro;
	    return $this;
	}

	/**
	* Get tdispro
	*
	* @return null|String
	*/
	public function getTdispro()
	{
		return $this->tdispro;
	}

	/**
	* Set tdisruc
	*
	*RUC del Distribuidor
	*
	* @parámetro String $tdisruc
	* @return Tdisruc
	*/
	public function setTdisruc($tdisruc)
	{
	  $this->tdisruc = (String) $tdisruc;
	    return $this;
	}

	/**
	* Get tdisruc
	*
	* @return null|String
	*/
	public function getTdisruc()
	{
		return $this->tdisruc;
	}

	/**
	* Set tditide
	*
	*Tipo Documento de Identidad del Distribuidor
	*
	* @parámetro String $tditide
	* @return Tditide
	*/
	public function setTditide($tditide)
	{
	  $this->tditide = (String) $tditide;
	    return $this;
	}

	/**
	* Get tditide
	*
	* @return null|String
	*/
	public function getTditide()
	{
		return $this->tditide;
	}

	/**
	* Set tdinide
	*
	*Número Documento de Identidad
	*
	* @parámetro String $tdinide
	* @return Tdinide
	*/
	public function setTdinide($tdinide)
	{
	  $this->tdinide = (String) $tdinide;
	    return $this;
	}

	/**
	* Get tdinide
	*
	* @return null|String
	*/
	public function getTdinide()
	{
		return $this->tdinide;
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
	* Set tphaldc
	*
	*Autorización de Límite de Crédito
	*
	* @parámetro String $tphaldc
	* @return Tphaldc
	*/
	public function setTphaldc($tphaldc)
	{
	  $this->tphaldc = (String) $tphaldc;
	    return $this;
	}

	/**
	* Get tphaldc
	*
	* @return null|String
	*/
	public function getTphaldc()
	{
		return $this->tphaldc;
	}

	/**
	* Set tphadov
	*
	*Autorización de Documentos Vencidos
	*
	* @parámetro String $tphadov
	* @return Tphadov
	*/
	public function setTphadov($tphadov)
	{
	  $this->tphadov = (String) $tphadov;
	    return $this;
	}

	/**
	* Get tphadov
	*
	* @return null|String
	*/
	public function getTphadov()
	{
		return $this->tphadov;
	}

	/**
	* Set tphadon
	*
	*Autorización de Donaciones
	*
	* @parámetro String $tphadon
	* @return Tphadon
	*/
	public function setTphadon($tphadon)
	{
	  $this->tphadon = (String) $tphadon;
	    return $this;
	}

	/**
	* Get tphadon
	*
	* @return null|String
	*/
	public function getTphadon()
	{
		return $this->tphadon;
	}

	/**
	* Set tphref1
	*
	*Orden de Compra
	*
	* @parámetro String $tphref1
	* @return Tphref1
	*/
	public function setTphref1($tphref1)
	{
	  $this->tphref1 = (String) $tphref1;
	    return $this;
	}

	/**
	* Get tphref1
	*
	* @return null|String
	*/
	public function getTphref1()
	{
		return $this->tphref1;
	}

	/**
	* Set tphref2
	*
	*Código de Transportista
	*
	* @parámetro String $tphref2
	* @return Tphref2
	*/
	public function setTphref2($tphref2)
	{
	  $this->tphref2 = (String) $tphref2;
	    return $this;
	}

	/**
	* Get tphref2
	*
	* @return null|String
	*/
	public function getTphref2()
	{
		return $this->tphref2;
	}

	/**
	* Set tphref3
	*
	*Referencia 3 - Libre
	*
	* @parámetro String $tphref3
	* @return Tphref3
	*/
	public function setTphref3($tphref3)
	{
	  $this->tphref3 = (String) $tphref3;
	    return $this;
	}

	/**
	* Get tphref3
	*
	* @return null|String
	*/
	public function getTphref3()
	{
		return $this->tphref3;
	}

	/**
	* Set tphref4
	*
	*Referencia 4 - Libre
	*
	* @parámetro String $tphref4
	* @return Tphref4
	*/
	public function setTphref4($tphref4)
	{
	  $this->tphref4 = (String) $tphref4;
	    return $this;
	}

	/**
	* Get tphref4
	*
	* @return null|String
	*/
	public function getTphref4()
	{
		return $this->tphref4;
	}

	/**
	* Set vbosec1
	*
	*Secuencia PK de Bodega TVBODE
	*
	* @parámetro Integer $vbosec1
	* @return Vbosec1
	*/
	public function setVbosec1($vbosec1)
	{
	  $this->vbosec1 = (Integer) $vbosec1;
	    return $this;
	}

	/**
	* Get vbosec1
	*
	* @return null|Integer
	*/
	public function getVbosec1()
	{
		return $this->vbosec1;
	}

	/**
	* Set vbonomb
	*
	*Nombre Bodega
	*
	* @parámetro String $vbonomb
	* @return Vbonomb
	*/
	public function setVbonomb($vbonomb)
	{
	  $this->vbonomb = (String) $vbonomb;
	    return $this;
	}

	/**
	* Get vbonomb
	*
	* @return null|String
	*/
	public function getVbonomb()
	{
		return $this->vbonomb;
	}

	/**
	* Set tphobsf
	*
	*Observación Factura
	*
	* @parámetro String $tphobsf
	* @return Tphobsf
	*/
	public function setTphobsf($tphobsf)
	{
	  $this->tphobsf = (String) $tphobsf;
	    return $this;
	}

	/**
	* Get tphobsf
	*
	* @return null|String
	*/
	public function getTphobsf()
	{
		return $this->tphobsf;
	}

	/**
	* Set tphobsi
	*
	*Guarda información adicional como el descuento de cabecera que se aplica.
	*
	* @parámetro String $tphobsi
	* @return Tphobsi
	*/
	public function setTphobsi($tphobsi)
	{
	  $this->tphobsi = (String) $tphobsi;
	    return $this;
	}

	/**
	* Get tphobsi
	*
	* @return null|String
	*/
	public function getTphobsi()
	{
		return $this->tphobsi;
	}

	/**
	* Set tphobsg
	*
	*Observación Guía  de Remisión
	*
	* @parámetro String $tphobsg
	* @return Tphobsg
	*/
	public function setTphobsg($tphobsg)
	{
	  $this->tphobsg = (String) $tphobsg;
	    return $this;
	}

	/**
	* Get tphobsg
	*
	* @return null|String
	*/
	public function getTphobsg()
	{
		return $this->tphobsg;
	}

	/**
	* Set tphsirt
	*
	*Situación de la Retención
	*
	* @parámetro Integer $tphsirt
	* @return Tphsirt
	*/
	public function setTphsirt($tphsirt)
	{
	  $this->tphsirt = (Integer) $tphsirt;
	    return $this;
	}

	/**
	* Get tphsirt
	*
	* @return null|Integer
	*/
	public function getTphsirt()
	{
		return $this->tphsirt;
	}

	/**
	* Set tphvart
	*
	*Valor total de la Retención
	*
	* @parámetro Decimal $tphvart
	* @return Tphvart
	*/
	public function setTphvart($tphvart)
	{
	  $this->tphvart = (Double) $tphvart;
	    return $this;
	}

	/**
	* Get tphvart
	*
	* @return null|Decimal
	*/
	public function getTphvart()
	{
		return $this->tphvart;
	}

	/**
	* Set tphcocd
	*
	*Considerado en Cierre Diario
	*
	* @parámetro Integer $tphcocd
	* @return Tphcocd
	*/
	public function setTphcocd($tphcocd)
	{
	  $this->tphcocd = (Integer) $tphcocd;
	    return $this;
	}

	/**
	* Get tphcocd
	*
	* @return null|Integer
	*/
	public function getTphcocd()
	{
		return $this->tphcocd;
	}

	/**
	* Set tphditr
	*
	*Día de Trabajo
	*
	* @parámetro Date $tphditr
	* @return Tphditr
	*/
	public function setTphditr($tphditr)
	{
	  $this->tphditr = (String) $tphditr;
	    return $this;
	}

	/**
	* Get tphditr
	*
	* @return null|Date
	*/
	public function getTphditr()
	{
		return $this->tphditr;
	}

	/**
	* Set tphvipe
	*
	*Fecha de Vigencia de Pedido
	*
	* @parámetro Date $tphvipe
	* @return Tphvipe
	*/
	public function setTphvipe($tphvipe)
	{
	  $this->tphvipe = (String) $tphvipe;
	    return $this;
	}

	/**
	* Get tphvipe
	*
	* @return null|Date
	*/
	public function getTphvipe()
	{
		return $this->tphvipe;
	}

	/**
	* Set tphvico
	*
	*Fecha de Vigencia de Cotización
	*
	* @parámetro Date $tphvico
	* @return Tphvico
	*/
	public function setTphvico($tphvico)
	{
	  $this->tphvico = (String) $tphvico;
	    return $this;
	}

	/**
	* Get tphvico
	*
	* @return null|Date
	*/
	public function getTphvico()
	{
		return $this->tphvico;
	}

	/**
	* Set tphclet
	*
	*Cantidad de letras
	*
	* @parámetro String $tphclet
	* @return Tphclet
	*/
	public function setTphclet($tphclet)
	{
	  $this->tphclet = (String) $tphclet;
	    return $this;
	}

	/**
	* Get tphclet
	*
	* @return null|String
	*/
	public function getTphclet()
	{
		return $this->tphclet;
	}

	/**
	* Set tphusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tphusuc
	* @return Tphusuc
	*/
	public function setTphusuc($tphusuc)
	{
	  $this->tphusuc = (String) $tphusuc;
	    return $this;
	}

	/**
	* Get tphusuc
	*
	* @return null|String
	*/
	public function getTphusuc()
	{
		return $this->tphusuc;
	}

	/**
	* Set tphfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tphfecc
	* @return Tphfecc
	*/
	public function setTphfecc($tphfecc)
	{
	  $this->tphfecc = (String) $tphfecc;
	    return $this;
	}

	/**
	* Get tphfecc
	*
	* @return null|Date
	*/
	public function getTphfecc()
	{
		return $this->tphfecc;
	}

	/**
	* Set tphusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tphusum
	* @return Tphusum
	*/
	public function setTphusum($tphusum)
	{
	  $this->tphusum = (String) $tphusum;
	    return $this;
	}

	/**
	* Get tphusum
	*
	* @return null|String
	*/
	public function getTphusum()
	{
		return $this->tphusum;
	}

	/**
	* Set tphfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tphfecm
	* @return Tphfecm
	*/
	public function setTphfecm($tphfecm)
	{
	  $this->tphfecm = (String) $tphfecm;
	    return $this;
	}

	/**
	* Get tphfecm
	*
	* @return null|Date
	*/
	public function getTphfecm()
	{
		return $this->tphfecm;
	}

	/**
	* Set tphtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tphtask
	* @return Tphtask
	*/
	public function setTphtask($tphtask)
	{
	  $this->tphtask = (String) $tphtask;
	    return $this;
	}

	/**
	* Get tphtask
	*
	* @return null|String
	*/
	public function getTphtask()
	{
		return $this->tphtask;
	}

	/**
	* Set tphpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tphpara
	* @return Tphpara
	*/
	public function setTphpara($tphpara)
	{
	  $this->tphpara = (Integer) $tphpara;
	    return $this;
	}

	/**
	* Get tphpara
	*
	* @return null|Integer
	*/
	public function getTphpara()
	{
		return $this->tphpara;
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

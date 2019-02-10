<?php
 /**
 * Model of the Ttfvah table
 *
 * It is used to convert the   Ttfvah entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttfvah
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttfvah
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Facturación Varios
		*/
		protected $tfvsecu;
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
		* Estos datos se ingresan en la Opción: Periodos Contables
		*/
		protected $bpesec1;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Distribuidores
		*/
		protected $tdisecu;
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
		* Estos datos se ingresan en la Opción: Tarifas de Envío
		*/
		protected $lthsecu;
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
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Migración
		*/
		protected $tfvfemi;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Número de Nota
		*/
		protected $tfvcorr;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Nota
		*/
		protected $tfvfecf;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación de la Nota
		*/
		protected $tfvsitu;
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
		* Código Punto de Venta
		*/
		protected $tpvcodi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Pedido
		*/
		protected $tfvnume;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Pedido
		*/
		protected $tfvfech;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Anulación
		*/
		protected $tfvfean;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código  de Vendedor
		*/
		protected $tagecve;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Zona de Distribuidor
		*/
		protected $tfvcozo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Zona de Distribuidor
		*/
		protected $tfvzona;
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
		* Situación del Distribuidor Facturación
		*/
		protected $tdissit;
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
		* RUC del Distribuidor
		*/
		protected $tdisruc;
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
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Tipo de Cambio
		*/
		protected $tfvtcam;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Guía
		*/
		protected $tfvguia;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Guía
		*/
		protected $tfvfecg;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación Guía de Remisión
		*/
		protected $tfvsigr;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Motivo de Traslado
		*/
		protected $tfvmose;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Motivo de Traslado
		*/
		protected $tfvmode;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dirección de Destino
		*/
		protected $tfvdide;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Distrito de Destino
		*/
		protected $tfvdsde;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Provincia de Destino
		*/
		protected $tfvprde;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Departamento Destino
		*/
		protected $tfvdede;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* País de Destino
		*/
		protected $tfvpade;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Ciudad de Destino
		*/
		protected $tfvciud;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono de Destino
		*/
		protected $tfvtede;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Precio Unitario multiplicado por la Cantidad
		*/
		protected $tfvtunc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Guarda el valor de la venta afecta + la venta inafecta antes de aplicar el descuento Cabecera
		*/
		protected $tfvstpa;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor del descuento por Cabecera
		*/
		protected $tfvdesc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Guarda el Sub-total suma del Valor Afecta y Valor Inafecta antes de sumar el IVA  y  restado todos los descuentos (Detalle y Cabecera)
		*/
		protected $tfvsubt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta con Impuesto (Moneda Nacional)
		*/
		protected $tfvnvva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta que aplica 0% del IVA (Moneda Nacional)
		*/
		protected $tfvncpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta sin Impuesto (Moneda  Nacional)
		*/
		protected $tfvnvvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Descuento 1 (Moneda Nacional)
		*/
		protected $tfvnds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 1 (Moneda Nacional)
		*/
		protected $tfvniva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 2 (Moneda Nacional)
		*/
		protected $tfvnice;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 3 (Moneda Nacional)
		*/
		protected $tfvnim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Precio de Venta (Moneda Nacional)
		*/
		protected $tfvnpvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta con Impuesto (Moneda Extranjera)
		*/
		protected $tfvevva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta que aplica 0% del IVA (Moneda Extranjera)
		*/
		protected $tfvecpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta con Impuesto (Moneda Extranjera)
		*/
		protected $tfvevvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Descuento 1 (Moneda Extranjera)
		*/
		protected $tfveds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 1 (Moneda Extranjera)
		*/
		protected $tfveiva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 2 (Moneda Extranjera)
		*/
		protected $tfveice;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 3 (Moneda Nacional)
		*/
		protected $tfveim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Precio de Venta (Moneda Extranjera)
		*/
		protected $tfvepvt;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Forma de Pago
		*/
		protected $tcpacve;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de Referencia
		*/
		protected $tfvreft;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Referencia
		*/
		protected $tfvrefn;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Secuencial de la Lista de Precios
		*/
		protected $tfvselp;
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
		* Código PK (Secuencial) de Bodega
		*/
		protected $tfvsebo;
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
		* Observación a la Factura
		*/
		protected $tfvobsf;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observación a la Nota
		*/
		protected $tfvobsn;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observación de g
		*/
		protected $tfvobsg;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación del Asiento Contable
		*/
		protected $tfvsirt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor total de la Retención
		*/
		protected $tfvvart;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Considerado en Cierre Diario
		*/
		protected $tfvcocd;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Centro de Costo
		*/
		protected $bcdccve;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Día de Trabajo
		*/
		protected $tfvditr;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Entrega
		*/
		protected $tfvtien;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cantidad de letras
		*/
		protected $tfvclet;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tfvusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tfvfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tfvusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tfvfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tfvtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tfvpara;

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
	* Name of the table: ttfvah
	* 
	 */
	const TABLE="ttfvah";

	/**
	*Primary key
*/
		 const PKEY = "tfvsecu";



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
		throw new \Exception('Class Entity: Ttfvah Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttfvah. Invalid specified property: get'.$name);
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
	* Set tfvsecu
	*
	*Estos datos se ingresan en la Opción: Facturación Varios
	*
	* @parámetro Integer $tfvsecu
	* @return Tfvsecu
	*/
	public function setTfvsecu($tfvsecu)
	{
	  $this->tfvsecu = (Integer) $tfvsecu;
	    return $this;
	}

	/**
	* Get tfvsecu
	*
	* @return null|Integer
	*/
	public function getTfvsecu()
	{
		return $this->tfvsecu;
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
	* Set tfvfemi
	*
	*Fecha de Migración
	*
	* @parámetro Date $tfvfemi
	* @return Tfvfemi
	*/
	public function setTfvfemi($tfvfemi)
	{
	  $this->tfvfemi = (String) $tfvfemi;
	    return $this;
	}

	/**
	* Get tfvfemi
	*
	* @return null|Date
	*/
	public function getTfvfemi()
	{
		return $this->tfvfemi;
	}

	/**
	* Set tfvcorr
	*
	*Número de Nota
	*
	* @parámetro Decimal $tfvcorr
	* @return Tfvcorr
	*/
	public function setTfvcorr($tfvcorr)
	{
	  $this->tfvcorr = (Double) $tfvcorr;
	    return $this;
	}

	/**
	* Get tfvcorr
	*
	* @return null|Decimal
	*/
	public function getTfvcorr()
	{
		return $this->tfvcorr;
	}

	/**
	* Set tfvfecf
	*
	*Fecha de Nota
	*
	* @parámetro Date $tfvfecf
	* @return Tfvfecf
	*/
	public function setTfvfecf($tfvfecf)
	{
	  $this->tfvfecf = (String) $tfvfecf;
	    return $this;
	}

	/**
	* Get tfvfecf
	*
	* @return null|Date
	*/
	public function getTfvfecf()
	{
		return $this->tfvfecf;
	}

	/**
	* Set tfvsitu
	*
	*Situación de la Nota
	*
	* @parámetro Integer $tfvsitu
	* @return Tfvsitu
	*/
	public function setTfvsitu($tfvsitu)
	{
	  $this->tfvsitu = (Integer) $tfvsitu;
	    return $this;
	}

	/**
	* Get tfvsitu
	*
	* @return null|Integer
	*/
	public function getTfvsitu()
	{
		return $this->tfvsitu;
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
	* Set tfvnume
	*
	*Número de Pedido
	*
	* @parámetro Decimal $tfvnume
	* @return Tfvnume
	*/
	public function setTfvnume($tfvnume)
	{
	  $this->tfvnume = (Double) $tfvnume;
	    return $this;
	}

	/**
	* Get tfvnume
	*
	* @return null|Decimal
	*/
	public function getTfvnume()
	{
		return $this->tfvnume;
	}

	/**
	* Set tfvfech
	*
	*Fecha de Pedido
	*
	* @parámetro Date $tfvfech
	* @return Tfvfech
	*/
	public function setTfvfech($tfvfech)
	{
	  $this->tfvfech = (String) $tfvfech;
	    return $this;
	}

	/**
	* Get tfvfech
	*
	* @return null|Date
	*/
	public function getTfvfech()
	{
		return $this->tfvfech;
	}

	/**
	* Set tfvfean
	*
	*Fecha de Anulación
	*
	* @parámetro Date $tfvfean
	* @return Tfvfean
	*/
	public function setTfvfean($tfvfean)
	{
	  $this->tfvfean = (String) $tfvfean;
	    return $this;
	}

	/**
	* Get tfvfean
	*
	* @return null|Date
	*/
	public function getTfvfean()
	{
		return $this->tfvfean;
	}

	/**
	* Set tagecve
	*
	*Código  de Vendedor
	*
	* @parámetro String $tagecve
	* @return Tagecve
	*/
	public function setTagecve($tagecve)
	{
	  $this->tagecve = (String) $tagecve;
	    return $this;
	}

	/**
	* Get tagecve
	*
	* @return null|String
	*/
	public function getTagecve()
	{
		return $this->tagecve;
	}

	/**
	* Set tfvcozo
	*
	*Código de Zona de Distribuidor
	*
	* @parámetro String $tfvcozo
	* @return Tfvcozo
	*/
	public function setTfvcozo($tfvcozo)
	{
	  $this->tfvcozo = (String) $tfvcozo;
	    return $this;
	}

	/**
	* Get tfvcozo
	*
	* @return null|String
	*/
	public function getTfvcozo()
	{
		return $this->tfvcozo;
	}

	/**
	* Set tfvzona
	*
	*Descripción Zona de Distribuidor
	*
	* @parámetro String $tfvzona
	* @return Tfvzona
	*/
	public function setTfvzona($tfvzona)
	{
	  $this->tfvzona = (String) $tfvzona;
	    return $this;
	}

	/**
	* Get tfvzona
	*
	* @return null|String
	*/
	public function getTfvzona()
	{
		return $this->tfvzona;
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
	* Set tdissit
	*
	*Situación del Distribuidor Facturación
	*
	* @parámetro Integer $tdissit
	* @return Tdissit
	*/
	public function setTdissit($tdissit)
	{
	  $this->tdissit = (Integer) $tdissit;
	    return $this;
	}

	/**
	* Get tdissit
	*
	* @return null|Integer
	*/
	public function getTdissit()
	{
		return $this->tdissit;
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
	* Set tfvtcam
	*
	*Tipo de Cambio
	*
	* @parámetro Decimal $tfvtcam
	* @return Tfvtcam
	*/
	public function setTfvtcam($tfvtcam)
	{
	  $this->tfvtcam = (Double) $tfvtcam;
	    return $this;
	}

	/**
	* Get tfvtcam
	*
	* @return null|Decimal
	*/
	public function getTfvtcam()
	{
		return $this->tfvtcam;
	}

	/**
	* Set tfvguia
	*
	*Número de Guía
	*
	* @parámetro Decimal $tfvguia
	* @return Tfvguia
	*/
	public function setTfvguia($tfvguia)
	{
	  $this->tfvguia = (Double) $tfvguia;
	    return $this;
	}

	/**
	* Get tfvguia
	*
	* @return null|Decimal
	*/
	public function getTfvguia()
	{
		return $this->tfvguia;
	}

	/**
	* Set tfvfecg
	*
	*Fecha de Guía
	*
	* @parámetro Date $tfvfecg
	* @return Tfvfecg
	*/
	public function setTfvfecg($tfvfecg)
	{
	  $this->tfvfecg = (String) $tfvfecg;
	    return $this;
	}

	/**
	* Get tfvfecg
	*
	* @return null|Date
	*/
	public function getTfvfecg()
	{
		return $this->tfvfecg;
	}

	/**
	* Set tfvsigr
	*
	*Situación Guía de Remisión
	*
	* @parámetro Integer $tfvsigr
	* @return Tfvsigr
	*/
	public function setTfvsigr($tfvsigr)
	{
	  $this->tfvsigr = (Integer) $tfvsigr;
	    return $this;
	}

	/**
	* Get tfvsigr
	*
	* @return null|Integer
	*/
	public function getTfvsigr()
	{
		return $this->tfvsigr;
	}

	/**
	* Set tfvmose
	*
	*Código Motivo de Traslado
	*
	* @parámetro Integer $tfvmose
	* @return Tfvmose
	*/
	public function setTfvmose($tfvmose)
	{
	  $this->tfvmose = (Integer) $tfvmose;
	    return $this;
	}

	/**
	* Get tfvmose
	*
	* @return null|Integer
	*/
	public function getTfvmose()
	{
		return $this->tfvmose;
	}

	/**
	* Set tfvmode
	*
	*Descripción Motivo de Traslado
	*
	* @parámetro String $tfvmode
	* @return Tfvmode
	*/
	public function setTfvmode($tfvmode)
	{
	  $this->tfvmode = (String) $tfvmode;
	    return $this;
	}

	/**
	* Get tfvmode
	*
	* @return null|String
	*/
	public function getTfvmode()
	{
		return $this->tfvmode;
	}

	/**
	* Set tfvdide
	*
	*Dirección de Destino
	*
	* @parámetro String $tfvdide
	* @return Tfvdide
	*/
	public function setTfvdide($tfvdide)
	{
	  $this->tfvdide = (String) $tfvdide;
	    return $this;
	}

	/**
	* Get tfvdide
	*
	* @return null|String
	*/
	public function getTfvdide()
	{
		return $this->tfvdide;
	}

	/**
	* Set tfvdsde
	*
	*Distrito de Destino
	*
	* @parámetro String $tfvdsde
	* @return Tfvdsde
	*/
	public function setTfvdsde($tfvdsde)
	{
	  $this->tfvdsde = (String) $tfvdsde;
	    return $this;
	}

	/**
	* Get tfvdsde
	*
	* @return null|String
	*/
	public function getTfvdsde()
	{
		return $this->tfvdsde;
	}

	/**
	* Set tfvprde
	*
	*Provincia de Destino
	*
	* @parámetro String $tfvprde
	* @return Tfvprde
	*/
	public function setTfvprde($tfvprde)
	{
	  $this->tfvprde = (String) $tfvprde;
	    return $this;
	}

	/**
	* Get tfvprde
	*
	* @return null|String
	*/
	public function getTfvprde()
	{
		return $this->tfvprde;
	}

	/**
	* Set tfvdede
	*
	*Departamento Destino
	*
	* @parámetro String $tfvdede
	* @return Tfvdede
	*/
	public function setTfvdede($tfvdede)
	{
	  $this->tfvdede = (String) $tfvdede;
	    return $this;
	}

	/**
	* Get tfvdede
	*
	* @return null|String
	*/
	public function getTfvdede()
	{
		return $this->tfvdede;
	}

	/**
	* Set tfvpade
	*
	*País de Destino
	*
	* @parámetro String $tfvpade
	* @return Tfvpade
	*/
	public function setTfvpade($tfvpade)
	{
	  $this->tfvpade = (String) $tfvpade;
	    return $this;
	}

	/**
	* Get tfvpade
	*
	* @return null|String
	*/
	public function getTfvpade()
	{
		return $this->tfvpade;
	}

	/**
	* Set tfvciud
	*
	*Ciudad de Destino
	*
	* @parámetro String $tfvciud
	* @return Tfvciud
	*/
	public function setTfvciud($tfvciud)
	{
	  $this->tfvciud = (String) $tfvciud;
	    return $this;
	}

	/**
	* Get tfvciud
	*
	* @return null|String
	*/
	public function getTfvciud()
	{
		return $this->tfvciud;
	}

	/**
	* Set tfvtede
	*
	*Teléfono de Destino
	*
	* @parámetro String $tfvtede
	* @return Tfvtede
	*/
	public function setTfvtede($tfvtede)
	{
	  $this->tfvtede = (String) $tfvtede;
	    return $this;
	}

	/**
	* Get tfvtede
	*
	* @return null|String
	*/
	public function getTfvtede()
	{
		return $this->tfvtede;
	}

	/**
	* Set tfvtunc
	*
	*Precio Unitario multiplicado por la Cantidad
	*
	* @parámetro Decimal $tfvtunc
	* @return Tfvtunc
	*/
	public function setTfvtunc($tfvtunc)
	{
	  $this->tfvtunc = (Double) $tfvtunc;
	    return $this;
	}

	/**
	* Get tfvtunc
	*
	* @return null|Decimal
	*/
	public function getTfvtunc()
	{
		return $this->tfvtunc;
	}

	/**
	* Set tfvstpa
	*
	*Guarda el valor de la venta afecta + la venta inafecta antes de aplicar el descuento Cabecera
	*
	* @parámetro Decimal $tfvstpa
	* @return Tfvstpa
	*/
	public function setTfvstpa($tfvstpa)
	{
	  $this->tfvstpa = (Double) $tfvstpa;
	    return $this;
	}

	/**
	* Get tfvstpa
	*
	* @return null|Decimal
	*/
	public function getTfvstpa()
	{
		return $this->tfvstpa;
	}

	/**
	* Set tfvdesc
	*
	*Valor del descuento por Cabecera
	*
	* @parámetro Decimal $tfvdesc
	* @return Tfvdesc
	*/
	public function setTfvdesc($tfvdesc)
	{
	  $this->tfvdesc = (Double) $tfvdesc;
	    return $this;
	}

	/**
	* Get tfvdesc
	*
	* @return null|Decimal
	*/
	public function getTfvdesc()
	{
		return $this->tfvdesc;
	}

	/**
	* Set tfvsubt
	*
	*Guarda el Sub-total suma del Valor Afecta y Valor Inafecta antes de sumar el IVA  y  restado todos los descuentos (Detalle y Cabecera)
	*
	* @parámetro Decimal $tfvsubt
	* @return Tfvsubt
	*/
	public function setTfvsubt($tfvsubt)
	{
	  $this->tfvsubt = (Double) $tfvsubt;
	    return $this;
	}

	/**
	* Get tfvsubt
	*
	* @return null|Decimal
	*/
	public function getTfvsubt()
	{
		return $this->tfvsubt;
	}

	/**
	* Set tfvnvva
	*
	*Valor Total - Venta con Impuesto (Moneda Nacional)
	*
	* @parámetro Decimal $tfvnvva
	* @return Tfvnvva
	*/
	public function setTfvnvva($tfvnvva)
	{
	  $this->tfvnvva = (Double) $tfvnvva;
	    return $this;
	}

	/**
	* Get tfvnvva
	*
	* @return null|Decimal
	*/
	public function getTfvnvva()
	{
		return $this->tfvnvva;
	}

	/**
	* Set tfvncpi
	*
	*Valor Total - Venta que aplica 0% del IVA (Moneda Nacional)
	*
	* @parámetro Decimal $tfvncpi
	* @return Tfvncpi
	*/
	public function setTfvncpi($tfvncpi)
	{
	  $this->tfvncpi = (Double) $tfvncpi;
	    return $this;
	}

	/**
	* Get tfvncpi
	*
	* @return null|Decimal
	*/
	public function getTfvncpi()
	{
		return $this->tfvncpi;
	}

	/**
	* Set tfvnvvi
	*
	*Valor Total - Venta sin Impuesto (Moneda  Nacional)
	*
	* @parámetro Decimal $tfvnvvi
	* @return Tfvnvvi
	*/
	public function setTfvnvvi($tfvnvvi)
	{
	  $this->tfvnvvi = (Double) $tfvnvvi;
	    return $this;
	}

	/**
	* Get tfvnvvi
	*
	* @return null|Decimal
	*/
	public function getTfvnvvi()
	{
		return $this->tfvnvvi;
	}

	/**
	* Set tfvnds1
	*
	*Valor Total - Descuento 1 (Moneda Nacional)
	*
	* @parámetro Decimal $tfvnds1
	* @return Tfvnds1
	*/
	public function setTfvnds1($tfvnds1)
	{
	  $this->tfvnds1 = (Double) $tfvnds1;
	    return $this;
	}

	/**
	* Get tfvnds1
	*
	* @return null|Decimal
	*/
	public function getTfvnds1()
	{
		return $this->tfvnds1;
	}

	/**
	* Set tfvniva
	*
	*Valor Total - Impuesto 1 (Moneda Nacional)
	*
	* @parámetro Decimal $tfvniva
	* @return Tfvniva
	*/
	public function setTfvniva($tfvniva)
	{
	  $this->tfvniva = (Double) $tfvniva;
	    return $this;
	}

	/**
	* Get tfvniva
	*
	* @return null|Decimal
	*/
	public function getTfvniva()
	{
		return $this->tfvniva;
	}

	/**
	* Set tfvnice
	*
	*Valor Total - Impuesto 2 (Moneda Nacional)
	*
	* @parámetro Decimal $tfvnice
	* @return Tfvnice
	*/
	public function setTfvnice($tfvnice)
	{
	  $this->tfvnice = (Double) $tfvnice;
	    return $this;
	}

	/**
	* Get tfvnice
	*
	* @return null|Decimal
	*/
	public function getTfvnice()
	{
		return $this->tfvnice;
	}

	/**
	* Set tfvnim3
	*
	*Valor Total - Impuesto 3 (Moneda Nacional)
	*
	* @parámetro Decimal $tfvnim3
	* @return Tfvnim3
	*/
	public function setTfvnim3($tfvnim3)
	{
	  $this->tfvnim3 = (Double) $tfvnim3;
	    return $this;
	}

	/**
	* Get tfvnim3
	*
	* @return null|Decimal
	*/
	public function getTfvnim3()
	{
		return $this->tfvnim3;
	}

	/**
	* Set tfvnpvt
	*
	*Valor Total - Precio de Venta (Moneda Nacional)
	*
	* @parámetro Decimal $tfvnpvt
	* @return Tfvnpvt
	*/
	public function setTfvnpvt($tfvnpvt)
	{
	  $this->tfvnpvt = (Double) $tfvnpvt;
	    return $this;
	}

	/**
	* Get tfvnpvt
	*
	* @return null|Decimal
	*/
	public function getTfvnpvt()
	{
		return $this->tfvnpvt;
	}

	/**
	* Set tfvevva
	*
	*Valor Total - Venta con Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tfvevva
	* @return Tfvevva
	*/
	public function setTfvevva($tfvevva)
	{
	  $this->tfvevva = (Double) $tfvevva;
	    return $this;
	}

	/**
	* Get tfvevva
	*
	* @return null|Decimal
	*/
	public function getTfvevva()
	{
		return $this->tfvevva;
	}

	/**
	* Set tfvecpi
	*
	*Valor Total - Venta que aplica 0% del IVA (Moneda Extranjera)
	*
	* @parámetro Decimal $tfvecpi
	* @return Tfvecpi
	*/
	public function setTfvecpi($tfvecpi)
	{
	  $this->tfvecpi = (Double) $tfvecpi;
	    return $this;
	}

	/**
	* Get tfvecpi
	*
	* @return null|Decimal
	*/
	public function getTfvecpi()
	{
		return $this->tfvecpi;
	}

	/**
	* Set tfvevvi
	*
	*Valor Total - Venta con Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tfvevvi
	* @return Tfvevvi
	*/
	public function setTfvevvi($tfvevvi)
	{
	  $this->tfvevvi = (Double) $tfvevvi;
	    return $this;
	}

	/**
	* Get tfvevvi
	*
	* @return null|Decimal
	*/
	public function getTfvevvi()
	{
		return $this->tfvevvi;
	}

	/**
	* Set tfveds1
	*
	*Valor Total - Descuento 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tfveds1
	* @return Tfveds1
	*/
	public function setTfveds1($tfveds1)
	{
	  $this->tfveds1 = (Double) $tfveds1;
	    return $this;
	}

	/**
	* Get tfveds1
	*
	* @return null|Decimal
	*/
	public function getTfveds1()
	{
		return $this->tfveds1;
	}

	/**
	* Set tfveiva
	*
	*Valor Total - Impuesto 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tfveiva
	* @return Tfveiva
	*/
	public function setTfveiva($tfveiva)
	{
	  $this->tfveiva = (Double) $tfveiva;
	    return $this;
	}

	/**
	* Get tfveiva
	*
	* @return null|Decimal
	*/
	public function getTfveiva()
	{
		return $this->tfveiva;
	}

	/**
	* Set tfveice
	*
	*Valor Total - Impuesto 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $tfveice
	* @return Tfveice
	*/
	public function setTfveice($tfveice)
	{
	  $this->tfveice = (Double) $tfveice;
	    return $this;
	}

	/**
	* Get tfveice
	*
	* @return null|Decimal
	*/
	public function getTfveice()
	{
		return $this->tfveice;
	}

	/**
	* Set tfveim3
	*
	*Valor Total - Impuesto 3 (Moneda Nacional)
	*
	* @parámetro Decimal $tfveim3
	* @return Tfveim3
	*/
	public function setTfveim3($tfveim3)
	{
	  $this->tfveim3 = (Double) $tfveim3;
	    return $this;
	}

	/**
	* Get tfveim3
	*
	* @return null|Decimal
	*/
	public function getTfveim3()
	{
		return $this->tfveim3;
	}

	/**
	* Set tfvepvt
	*
	*Valor Total - Precio de Venta (Moneda Extranjera)
	*
	* @parámetro Decimal $tfvepvt
	* @return Tfvepvt
	*/
	public function setTfvepvt($tfvepvt)
	{
	  $this->tfvepvt = (Double) $tfvepvt;
	    return $this;
	}

	/**
	* Get tfvepvt
	*
	* @return null|Decimal
	*/
	public function getTfvepvt()
	{
		return $this->tfvepvt;
	}

	/**
	* Set tcpacve
	*
	*Código Forma de Pago
	*
	* @parámetro String $tcpacve
	* @return Tcpacve
	*/
	public function setTcpacve($tcpacve)
	{
	  $this->tcpacve = (String) $tcpacve;
	    return $this;
	}

	/**
	* Get tcpacve
	*
	* @return null|String
	*/
	public function getTcpacve()
	{
		return $this->tcpacve;
	}

	/**
	* Set tfvreft
	*
	*Tipo de Referencia
	*
	* @parámetro String $tfvreft
	* @return Tfvreft
	*/
	public function setTfvreft($tfvreft)
	{
	  $this->tfvreft = (String) $tfvreft;
	    return $this;
	}

	/**
	* Get tfvreft
	*
	* @return null|String
	*/
	public function getTfvreft()
	{
		return $this->tfvreft;
	}

	/**
	* Set tfvrefn
	*
	*Número de Referencia
	*
	* @parámetro String $tfvrefn
	* @return Tfvrefn
	*/
	public function setTfvrefn($tfvrefn)
	{
	  $this->tfvrefn = (String) $tfvrefn;
	    return $this;
	}

	/**
	* Get tfvrefn
	*
	* @return null|String
	*/
	public function getTfvrefn()
	{
		return $this->tfvrefn;
	}

	/**
	* Set tfvselp
	*
	*Secuencial de la Lista de Precios
	*
	* @parámetro Integer $tfvselp
	* @return Tfvselp
	*/
	public function setTfvselp($tfvselp)
	{
	  $this->tfvselp = (Integer) $tfvselp;
	    return $this;
	}

	/**
	* Get tfvselp
	*
	* @return null|Integer
	*/
	public function getTfvselp()
	{
		return $this->tfvselp;
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
	* Set tfvsebo
	*
	*Código PK (Secuencial) de Bodega
	*
	* @parámetro Integer $tfvsebo
	* @return Tfvsebo
	*/
	public function setTfvsebo($tfvsebo)
	{
	  $this->tfvsebo = (Integer) $tfvsebo;
	    return $this;
	}

	/**
	* Get tfvsebo
	*
	* @return null|Integer
	*/
	public function getTfvsebo()
	{
		return $this->tfvsebo;
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
	* Set tfvobsf
	*
	*Observación a la Factura
	*
	* @parámetro String $tfvobsf
	* @return Tfvobsf
	*/
	public function setTfvobsf($tfvobsf)
	{
	  $this->tfvobsf = (String) $tfvobsf;
	    return $this;
	}

	/**
	* Get tfvobsf
	*
	* @return null|String
	*/
	public function getTfvobsf()
	{
		return $this->tfvobsf;
	}

	/**
	* Set tfvobsn
	*
	*Observación a la Nota
	*
	* @parámetro String $tfvobsn
	* @return Tfvobsn
	*/
	public function setTfvobsn($tfvobsn)
	{
	  $this->tfvobsn = (String) $tfvobsn;
	    return $this;
	}

	/**
	* Get tfvobsn
	*
	* @return null|String
	*/
	public function getTfvobsn()
	{
		return $this->tfvobsn;
	}

	/**
	* Set tfvobsg
	*
	*Observación de g
	*
	* @parámetro String $tfvobsg
	* @return Tfvobsg
	*/
	public function setTfvobsg($tfvobsg)
	{
	  $this->tfvobsg = (String) $tfvobsg;
	    return $this;
	}

	/**
	* Get tfvobsg
	*
	* @return null|String
	*/
	public function getTfvobsg()
	{
		return $this->tfvobsg;
	}

	/**
	* Set tfvsirt
	*
	*Situación del Asiento Contable
	*
	* @parámetro Integer $tfvsirt
	* @return Tfvsirt
	*/
	public function setTfvsirt($tfvsirt)
	{
	  $this->tfvsirt = (Integer) $tfvsirt;
	    return $this;
	}

	/**
	* Get tfvsirt
	*
	* @return null|Integer
	*/
	public function getTfvsirt()
	{
		return $this->tfvsirt;
	}

	/**
	* Set tfvvart
	*
	*Valor total de la Retención
	*
	* @parámetro Decimal $tfvvart
	* @return Tfvvart
	*/
	public function setTfvvart($tfvvart)
	{
	  $this->tfvvart = (Double) $tfvvart;
	    return $this;
	}

	/**
	* Get tfvvart
	*
	* @return null|Decimal
	*/
	public function getTfvvart()
	{
		return $this->tfvvart;
	}

	/**
	* Set tfvcocd
	*
	*Considerado en Cierre Diario
	*
	* @parámetro Integer $tfvcocd
	* @return Tfvcocd
	*/
	public function setTfvcocd($tfvcocd)
	{
	  $this->tfvcocd = (Integer) $tfvcocd;
	    return $this;
	}

	/**
	* Get tfvcocd
	*
	* @return null|Integer
	*/
	public function getTfvcocd()
	{
		return $this->tfvcocd;
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
	* Set tfvditr
	*
	*Día de Trabajo
	*
	* @parámetro Date $tfvditr
	* @return Tfvditr
	*/
	public function setTfvditr($tfvditr)
	{
	  $this->tfvditr = (String) $tfvditr;
	    return $this;
	}

	/**
	* Get tfvditr
	*
	* @return null|Date
	*/
	public function getTfvditr()
	{
		return $this->tfvditr;
	}

	/**
	* Set tfvtien
	*
	*Tipo de Entrega
	*
	* @parámetro Integer $tfvtien
	* @return Tfvtien
	*/
	public function setTfvtien($tfvtien)
	{
	  $this->tfvtien = (Integer) $tfvtien;
	    return $this;
	}

	/**
	* Get tfvtien
	*
	* @return null|Integer
	*/
	public function getTfvtien()
	{
		return $this->tfvtien;
	}

	/**
	* Set tfvclet
	*
	*Cantidad de letras
	*
	* @parámetro String $tfvclet
	* @return Tfvclet
	*/
	public function setTfvclet($tfvclet)
	{
	  $this->tfvclet = (String) $tfvclet;
	    return $this;
	}

	/**
	* Get tfvclet
	*
	* @return null|String
	*/
	public function getTfvclet()
	{
		return $this->tfvclet;
	}

	/**
	* Set tfvusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tfvusuc
	* @return Tfvusuc
	*/
	public function setTfvusuc($tfvusuc)
	{
	  $this->tfvusuc = (String) $tfvusuc;
	    return $this;
	}

	/**
	* Get tfvusuc
	*
	* @return null|String
	*/
	public function getTfvusuc()
	{
		return $this->tfvusuc;
	}

	/**
	* Set tfvfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tfvfecc
	* @return Tfvfecc
	*/
	public function setTfvfecc($tfvfecc)
	{
	  $this->tfvfecc = (String) $tfvfecc;
	    return $this;
	}

	/**
	* Get tfvfecc
	*
	* @return null|Date
	*/
	public function getTfvfecc()
	{
		return $this->tfvfecc;
	}

	/**
	* Set tfvusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tfvusum
	* @return Tfvusum
	*/
	public function setTfvusum($tfvusum)
	{
	  $this->tfvusum = (String) $tfvusum;
	    return $this;
	}

	/**
	* Get tfvusum
	*
	* @return null|String
	*/
	public function getTfvusum()
	{
		return $this->tfvusum;
	}

	/**
	* Set tfvfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tfvfecm
	* @return Tfvfecm
	*/
	public function setTfvfecm($tfvfecm)
	{
	  $this->tfvfecm = (String) $tfvfecm;
	    return $this;
	}

	/**
	* Get tfvfecm
	*
	* @return null|Date
	*/
	public function getTfvfecm()
	{
		return $this->tfvfecm;
	}

	/**
	* Set tfvtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tfvtask
	* @return Tfvtask
	*/
	public function setTfvtask($tfvtask)
	{
	  $this->tfvtask = (String) $tfvtask;
	    return $this;
	}

	/**
	* Get tfvtask
	*
	* @return null|String
	*/
	public function getTfvtask()
	{
		return $this->tfvtask;
	}

	/**
	* Set tfvpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tfvpara
	* @return Tfvpara
	*/
	public function setTfvpara($tfvpara)
	{
	  $this->tfvpara = (Integer) $tfvpara;
	    return $this;
	}

	/**
	* Get tfvpara
	*
	* @return null|Integer
	*/
	public function getTfvpara()
	{
		return $this->tfvpara;
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

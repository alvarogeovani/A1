<?php
 /**
 * Model of the Ttmovc table
 *
 * It is used to convert the   Ttmovc entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttmovc
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttmovc
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TTMOVC
		*/
		protected $tmcsecu;
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
		* Estos datos se ingresan en la Opción: Maestro de Puntos de Venta
		*/
		protected $tpvsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Facturación Varios
		*/
		protected $tfvsecu;
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
		* Número de Documento
		*/
		protected $tmcndoc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Número de Movimiento de Caja
		*/
		protected $tmccorr;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Documento
		*/
		protected $tmcfech;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Forma de Pago
		*/
		protected $tcpacve;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor de Origen
		*/
		protected $tmcvalo;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Tipo de Cambio
		*/
		protected $tmctcam;
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
		* Peso del Pedido por Factura
		*/
		protected $tphpefv;
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
		* Guarda el valor de la venta afecta + la venta inafecta antes de aplicar el descuento Cabecera
		*/
		protected $tphstpa;
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
		* Total Valor Descuento 1 (Moneda Extranjera)
		*/
		protected $nrheds1;
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
		* Valor Total Moneda Nacional
		*/
		protected $tmcvaln;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Moneda Extranjera
		*/
		protected $tmcvale;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda  Nacional)
		*/
		protected $nrhniva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda  Nacional)
		*/
		protected $nrhnim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda  Nacional)
		*/
		protected $nrhnim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio Venta (Moneda  Nacional)
		*/
		protected $nrhnpvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda Extranjera)
		*/
		protected $nrheiva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda Extranjera)
		*/
		protected $nrheim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda Extranjera)
		*/
		protected $nrheim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio Venta (Moneda Extranjera)
		*/
		protected $nrhepvt;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de Documento Referencial
		*/
		protected $tmcreft;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Documento Referencial
		*/
		protected $tmcrefd;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Autorización
		*/
		protected $tmcauto;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Asiento
		*/
		protected $tmcasto;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tmcusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tmcfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tmcusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tmcfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tmctask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tmcpara;

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
	* Name of the table: ttmovc
	* 
	 */
	const TABLE="ttmovc";

	/**
	*Primary key
*/
		 const PKEY = "tmcsecu";



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
		throw new \Exception('Class Entity: Ttmovc Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttmovc. Invalid specified property: get'.$name);
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
	* Set tmcsecu
	*
	*Clave Primaria de la Base de Datos: TTMOVC
	*
	* @parámetro Integer $tmcsecu
	* @return Tmcsecu
	*/
	public function setTmcsecu($tmcsecu)
	{
	  $this->tmcsecu = (Integer) $tmcsecu;
	    return $this;
	}

	/**
	* Get tmcsecu
	*
	* @return null|Integer
	*/
	public function getTmcsecu()
	{
		return $this->tmcsecu;
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
	* Set tmcndoc
	*
	*Número de Documento
	*
	* @parámetro Integer $tmcndoc
	* @return Tmcndoc
	*/
	public function setTmcndoc($tmcndoc)
	{
	  $this->tmcndoc = (Integer) $tmcndoc;
	    return $this;
	}

	/**
	* Get tmcndoc
	*
	* @return null|Integer
	*/
	public function getTmcndoc()
	{
		return $this->tmcndoc;
	}

	/**
	* Set tmccorr
	*
	*Número de Movimiento de Caja
	*
	* @parámetro Integer $tmccorr
	* @return Tmccorr
	*/
	public function setTmccorr($tmccorr)
	{
	  $this->tmccorr = (Integer) $tmccorr;
	    return $this;
	}

	/**
	* Get tmccorr
	*
	* @return null|Integer
	*/
	public function getTmccorr()
	{
		return $this->tmccorr;
	}

	/**
	* Set tmcfech
	*
	*Fecha de Documento
	*
	* @parámetro Date $tmcfech
	* @return Tmcfech
	*/
	public function setTmcfech($tmcfech)
	{
	  $this->tmcfech = (String) $tmcfech;
	    return $this;
	}

	/**
	* Get tmcfech
	*
	* @return null|Date
	*/
	public function getTmcfech()
	{
		return $this->tmcfech;
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
	* Set tmcvalo
	*
	*Valor de Origen
	*
	* @parámetro Decimal $tmcvalo
	* @return Tmcvalo
	*/
	public function setTmcvalo($tmcvalo)
	{
	  $this->tmcvalo = (Double) $tmcvalo;
	    return $this;
	}

	/**
	* Get tmcvalo
	*
	* @return null|Decimal
	*/
	public function getTmcvalo()
	{
		return $this->tmcvalo;
	}

	/**
	* Set tmctcam
	*
	*Tipo de Cambio
	*
	* @parámetro Decimal $tmctcam
	* @return Tmctcam
	*/
	public function setTmctcam($tmctcam)
	{
	  $this->tmctcam = (Double) $tmctcam;
	    return $this;
	}

	/**
	* Get tmctcam
	*
	* @return null|Decimal
	*/
	public function getTmctcam()
	{
		return $this->tmctcam;
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
	* Set nrheds1
	*
	*Total Valor Descuento 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $nrheds1
	* @return Nrheds1
	*/
	public function setNrheds1($nrheds1)
	{
	  $this->nrheds1 = (Double) $nrheds1;
	    return $this;
	}

	/**
	* Get nrheds1
	*
	* @return null|Decimal
	*/
	public function getNrheds1()
	{
		return $this->nrheds1;
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
	* Set tmcvaln
	*
	*Valor Total Moneda Nacional
	*
	* @parámetro Decimal $tmcvaln
	* @return Tmcvaln
	*/
	public function setTmcvaln($tmcvaln)
	{
	  $this->tmcvaln = (Double) $tmcvaln;
	    return $this;
	}

	/**
	* Get tmcvaln
	*
	* @return null|Decimal
	*/
	public function getTmcvaln()
	{
		return $this->tmcvaln;
	}

	/**
	* Set tmcvale
	*
	*Valor Total Moneda Extranjera
	*
	* @parámetro Decimal $tmcvale
	* @return Tmcvale
	*/
	public function setTmcvale($tmcvale)
	{
	  $this->tmcvale = (Double) $tmcvale;
	    return $this;
	}

	/**
	* Get tmcvale
	*
	* @return null|Decimal
	*/
	public function getTmcvale()
	{
		return $this->tmcvale;
	}

	/**
	* Set nrhniva
	*
	*Valor Total Impuesto 1 (Moneda  Nacional)
	*
	* @parámetro Decimal $nrhniva
	* @return Nrhniva
	*/
	public function setNrhniva($nrhniva)
	{
	  $this->nrhniva = (Double) $nrhniva;
	    return $this;
	}

	/**
	* Get nrhniva
	*
	* @return null|Decimal
	*/
	public function getNrhniva()
	{
		return $this->nrhniva;
	}

	/**
	* Set nrhnim2
	*
	*Valor Total Impuesto 2 (Moneda  Nacional)
	*
	* @parámetro Decimal $nrhnim2
	* @return Nrhnim2
	*/
	public function setNrhnim2($nrhnim2)
	{
	  $this->nrhnim2 = (Double) $nrhnim2;
	    return $this;
	}

	/**
	* Get nrhnim2
	*
	* @return null|Decimal
	*/
	public function getNrhnim2()
	{
		return $this->nrhnim2;
	}

	/**
	* Set nrhnim3
	*
	*Valor Total Impuesto 3 (Moneda  Nacional)
	*
	* @parámetro Decimal $nrhnim3
	* @return Nrhnim3
	*/
	public function setNrhnim3($nrhnim3)
	{
	  $this->nrhnim3 = (Double) $nrhnim3;
	    return $this;
	}

	/**
	* Get nrhnim3
	*
	* @return null|Decimal
	*/
	public function getNrhnim3()
	{
		return $this->nrhnim3;
	}

	/**
	* Set nrhnpvt
	*
	*Valor Total Precio Venta (Moneda  Nacional)
	*
	* @parámetro Decimal $nrhnpvt
	* @return Nrhnpvt
	*/
	public function setNrhnpvt($nrhnpvt)
	{
	  $this->nrhnpvt = (Double) $nrhnpvt;
	    return $this;
	}

	/**
	* Get nrhnpvt
	*
	* @return null|Decimal
	*/
	public function getNrhnpvt()
	{
		return $this->nrhnpvt;
	}

	/**
	* Set nrheiva
	*
	*Valor Total Impuesto 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $nrheiva
	* @return Nrheiva
	*/
	public function setNrheiva($nrheiva)
	{
	  $this->nrheiva = (Double) $nrheiva;
	    return $this;
	}

	/**
	* Get nrheiva
	*
	* @return null|Decimal
	*/
	public function getNrheiva()
	{
		return $this->nrheiva;
	}

	/**
	* Set nrheim2
	*
	*Valor Total Impuesto 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $nrheim2
	* @return Nrheim2
	*/
	public function setNrheim2($nrheim2)
	{
	  $this->nrheim2 = (Double) $nrheim2;
	    return $this;
	}

	/**
	* Get nrheim2
	*
	* @return null|Decimal
	*/
	public function getNrheim2()
	{
		return $this->nrheim2;
	}

	/**
	* Set nrheim3
	*
	*Valor Total Impuesto 3 (Moneda Extranjera)
	*
	* @parámetro Decimal $nrheim3
	* @return Nrheim3
	*/
	public function setNrheim3($nrheim3)
	{
	  $this->nrheim3 = (Double) $nrheim3;
	    return $this;
	}

	/**
	* Get nrheim3
	*
	* @return null|Decimal
	*/
	public function getNrheim3()
	{
		return $this->nrheim3;
	}

	/**
	* Set nrhepvt
	*
	*Valor Total Precio Venta (Moneda Extranjera)
	*
	* @parámetro Decimal $nrhepvt
	* @return Nrhepvt
	*/
	public function setNrhepvt($nrhepvt)
	{
	  $this->nrhepvt = (Double) $nrhepvt;
	    return $this;
	}

	/**
	* Get nrhepvt
	*
	* @return null|Decimal
	*/
	public function getNrhepvt()
	{
		return $this->nrhepvt;
	}

	/**
	* Set tmcreft
	*
	*Tipo de Documento Referencial
	*
	* @parámetro String $tmcreft
	* @return Tmcreft
	*/
	public function setTmcreft($tmcreft)
	{
	  $this->tmcreft = (String) $tmcreft;
	    return $this;
	}

	/**
	* Get tmcreft
	*
	* @return null|String
	*/
	public function getTmcreft()
	{
		return $this->tmcreft;
	}

	/**
	* Set tmcrefd
	*
	*Número de Documento Referencial
	*
	* @parámetro String $tmcrefd
	* @return Tmcrefd
	*/
	public function setTmcrefd($tmcrefd)
	{
	  $this->tmcrefd = (String) $tmcrefd;
	    return $this;
	}

	/**
	* Get tmcrefd
	*
	* @return null|String
	*/
	public function getTmcrefd()
	{
		return $this->tmcrefd;
	}

	/**
	* Set tmcauto
	*
	*Autorización
	*
	* @parámetro String $tmcauto
	* @return Tmcauto
	*/
	public function setTmcauto($tmcauto)
	{
	  $this->tmcauto = (String) $tmcauto;
	    return $this;
	}

	/**
	* Get tmcauto
	*
	* @return null|String
	*/
	public function getTmcauto()
	{
		return $this->tmcauto;
	}

	/**
	* Set tmcasto
	*
	*Número de Asiento
	*
	* @parámetro String $tmcasto
	* @return Tmcasto
	*/
	public function setTmcasto($tmcasto)
	{
	  $this->tmcasto = (String) $tmcasto;
	    return $this;
	}

	/**
	* Get tmcasto
	*
	* @return null|String
	*/
	public function getTmcasto()
	{
		return $this->tmcasto;
	}

	/**
	* Set tmcusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tmcusuc
	* @return Tmcusuc
	*/
	public function setTmcusuc($tmcusuc)
	{
	  $this->tmcusuc = (String) $tmcusuc;
	    return $this;
	}

	/**
	* Get tmcusuc
	*
	* @return null|String
	*/
	public function getTmcusuc()
	{
		return $this->tmcusuc;
	}

	/**
	* Set tmcfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tmcfecc
	* @return Tmcfecc
	*/
	public function setTmcfecc($tmcfecc)
	{
	  $this->tmcfecc = (String) $tmcfecc;
	    return $this;
	}

	/**
	* Get tmcfecc
	*
	* @return null|Date
	*/
	public function getTmcfecc()
	{
		return $this->tmcfecc;
	}

	/**
	* Set tmcusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tmcusum
	* @return Tmcusum
	*/
	public function setTmcusum($tmcusum)
	{
	  $this->tmcusum = (String) $tmcusum;
	    return $this;
	}

	/**
	* Get tmcusum
	*
	* @return null|String
	*/
	public function getTmcusum()
	{
		return $this->tmcusum;
	}

	/**
	* Set tmcfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tmcfecm
	* @return Tmcfecm
	*/
	public function setTmcfecm($tmcfecm)
	{
	  $this->tmcfecm = (String) $tmcfecm;
	    return $this;
	}

	/**
	* Get tmcfecm
	*
	* @return null|Date
	*/
	public function getTmcfecm()
	{
		return $this->tmcfecm;
	}

	/**
	* Set tmctask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tmctask
	* @return Tmctask
	*/
	public function setTmctask($tmctask)
	{
	  $this->tmctask = (String) $tmctask;
	    return $this;
	}

	/**
	* Get tmctask
	*
	* @return null|String
	*/
	public function getTmctask()
	{
		return $this->tmctask;
	}

	/**
	* Set tmcpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tmcpara
	* @return Tmcpara
	*/
	public function setTmcpara($tmcpara)
	{
	  $this->tmcpara = (Integer) $tmcpara;
	    return $this;
	}

	/**
	* Get tmcpara
	*
	* @return null|Integer
	*/
	public function getTmcpara()
	{
		return $this->tmcpara;
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

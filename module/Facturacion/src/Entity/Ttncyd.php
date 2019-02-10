<?php
 /**
 * Model of the Ttncyd table
 *
 * It is used to convert the   Ttncyd entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttncyd
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttncyd
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Notas de Crédito y Débito
		*/
		protected $tcdsecu;
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
		* Estos datos se ingresan en la Opción: Centros de Costos
		*/
		protected $bcdsecu;
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
		* Estos datos se ingresan en la Opción: Facturación Normal
		*/
		protected $tphsecu;
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
		* Estos datos se ingresan en la Opción: Registrar Monedas
		*/
		protected $bmosecu;
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
		* Optional field
		* Field visible in the form
		* Tipo de Documento Comercial
		*/
		protected $tbdtipo;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Describe el motivo de la Nota de C o D
		*/
		protected $tcddesc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Nota de Crédito o Débito
		*/
		protected $tcdcorr;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de la Nota de C ó D
		*/
		protected $tcdfecn;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Documento del Documento de Referencia
		*/
		protected $tcdtdre;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número del Documento de Referencia
		*/
		protected $tcdnudr;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Anulación
		*/
		protected $tcdfean;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación de la Nota
		*/
		protected $tcdsitu;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Tipo de Cambio Venta 1
		*/
		protected $bmontv11;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre/ Razón Social del Distribuidor
		*/
		protected $tdisnom;
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
		* Valor Total - Venta con Impuesto (Moneda Nacional)
		*/
		protected $tcdnvva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta 0 Porciento de IVA (Moneda  Nacional)
		*/
		protected $tcdncpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta sin Impuesto (Moneda  Nacional)
		*/
		protected $tcdnvvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Descuento 1 (Moneda Nacional)
		*/
		protected $tcdnds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 1 (Moneda Nacional)
		*/
		protected $tcdniva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Precio de Venta (Moneda Nacional)
		*/
		protected $tcdnpvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta con Impuesto (Moneda Extranjera)
		*/
		protected $tcdevva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta 0 Porciento de IVA (Moneda  Extranjera)
		*/
		protected $tcdecpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta con Impuesto (Moneda Extranjera)
		*/
		protected $tcdevvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Descuento 1 (Moneda Extranjera)
		*/
		protected $tcdeds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 1 (Moneda Extranjera)
		*/
		protected $tcdeiva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Precio de Venta (Moneda Extranjera)
		*/
		protected $tcdepvt;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cantidad en Letras
		*/
		protected $tcdclet;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Concepto de la Nota
		*/
		protected $tcdconn;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Detalle de la Nota
		*/
		protected $tcddetn;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observación de la Nota
		*/
		protected $tcdobsn;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Considerado en Cierre Diario s/n
		*/
		protected $tcdcocd;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Día de Trabajo
		*/
		protected $tcdditr;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Clase de Cuenta
		*/
		protected $tcddcta;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Tipo Documento de Aplicación
		*/
		protected $tcdtdap;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Serie Documento de Aplicación
		*/
		protected $tcdsdap;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número Documento de Aplicación
		*/
		protected $tcdndap;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tcdusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tcdfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tcdusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tcdfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tcdtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tcdpara;

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
	* Name of the table: ttncyd
	* 
	 */
	const TABLE="ttncyd";

	/**
	*Primary key
*/
		 const PKEY = "tcdsecu";



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
		throw new \Exception('Class Entity: Ttncyd Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttncyd. Invalid specified property: get'.$name);
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
	* Set tcdsecu
	*
	*Estos datos se ingresan en la Opción: Notas de Crédito y Débito
	*
	* @parámetro Integer $tcdsecu
	* @return Tcdsecu
	*/
	public function setTcdsecu($tcdsecu)
	{
	  $this->tcdsecu = (Integer) $tcdsecu;
	    return $this;
	}

	/**
	* Get tcdsecu
	*
	* @return null|Integer
	*/
	public function getTcdsecu()
	{
		return $this->tcdsecu;
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
	* Set bcdsecu
	*
	*Estos datos se ingresan en la Opción: Centros de Costos
	*
	* @parámetro Integer $bcdsecu
	* @return Bcdsecu
	*/
	public function setBcdsecu($bcdsecu)
	{
	  $this->bcdsecu = (Integer) $bcdsecu;
	    return $this;
	}

	/**
	* Get bcdsecu
	*
	* @return null|Integer
	*/
	public function getBcdsecu()
	{
		return $this->bcdsecu;
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
	* Set tcddesc
	*
	*Describe el motivo de la Nota de C o D
	*
	* @parámetro Integer $tcddesc
	* @return Tcddesc
	*/
	public function setTcddesc($tcddesc)
	{
	  $this->tcddesc = (Integer) $tcddesc;
	    return $this;
	}

	/**
	* Get tcddesc
	*
	* @return null|Integer
	*/
	public function getTcddesc()
	{
		return $this->tcddesc;
	}

	/**
	* Set tcdcorr
	*
	*Número de Nota de Crédito o Débito
	*
	* @parámetro String $tcdcorr
	* @return Tcdcorr
	*/
	public function setTcdcorr($tcdcorr)
	{
	  $this->tcdcorr = (String) $tcdcorr;
	    return $this;
	}

	/**
	* Get tcdcorr
	*
	* @return null|String
	*/
	public function getTcdcorr()
	{
		return $this->tcdcorr;
	}

	/**
	* Set tcdfecn
	*
	*Fecha de la Nota de C ó D
	*
	* @parámetro Date $tcdfecn
	* @return Tcdfecn
	*/
	public function setTcdfecn($tcdfecn)
	{
	  $this->tcdfecn = (String) $tcdfecn;
	    return $this;
	}

	/**
	* Get tcdfecn
	*
	* @return null|Date
	*/
	public function getTcdfecn()
	{
		return $this->tcdfecn;
	}

	/**
	* Set tcdtdre
	*
	*Tipo de Documento del Documento de Referencia
	*
	* @parámetro Integer $tcdtdre
	* @return Tcdtdre
	*/
	public function setTcdtdre($tcdtdre)
	{
	  $this->tcdtdre = (Integer) $tcdtdre;
	    return $this;
	}

	/**
	* Get tcdtdre
	*
	* @return null|Integer
	*/
	public function getTcdtdre()
	{
		return $this->tcdtdre;
	}

	/**
	* Set tcdnudr
	*
	*Número del Documento de Referencia
	*
	* @parámetro String $tcdnudr
	* @return Tcdnudr
	*/
	public function setTcdnudr($tcdnudr)
	{
	  $this->tcdnudr = (String) $tcdnudr;
	    return $this;
	}

	/**
	* Get tcdnudr
	*
	* @return null|String
	*/
	public function getTcdnudr()
	{
		return $this->tcdnudr;
	}

	/**
	* Set tcdfean
	*
	*Fecha de Anulación
	*
	* @parámetro Date $tcdfean
	* @return Tcdfean
	*/
	public function setTcdfean($tcdfean)
	{
	  $this->tcdfean = (String) $tcdfean;
	    return $this;
	}

	/**
	* Get tcdfean
	*
	* @return null|Date
	*/
	public function getTcdfean()
	{
		return $this->tcdfean;
	}

	/**
	* Set tcdsitu
	*
	*Situación de la Nota
	*
	* @parámetro Integer $tcdsitu
	* @return Tcdsitu
	*/
	public function setTcdsitu($tcdsitu)
	{
	  $this->tcdsitu = (Integer) $tcdsitu;
	    return $this;
	}

	/**
	* Get tcdsitu
	*
	* @return null|Integer
	*/
	public function getTcdsitu()
	{
		return $this->tcdsitu;
	}

	/**
	* Set bmontv11
	*
	*Tipo de Cambio Venta 1
	*
	* @parámetro Decimal $bmontv11
	* @return Bmontv11
	*/
	public function setBmontv11($bmontv11)
	{
	  $this->bmontv11 = (Double) $bmontv11;
	    return $this;
	}

	/**
	* Get bmontv11
	*
	* @return null|Decimal
	*/
	public function getBmontv11()
	{
		return $this->bmontv11;
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
	* Set tcdnvva
	*
	*Valor Total - Venta con Impuesto (Moneda Nacional)
	*
	* @parámetro Decimal $tcdnvva
	* @return Tcdnvva
	*/
	public function setTcdnvva($tcdnvva)
	{
	  $this->tcdnvva = (Double) $tcdnvva;
	    return $this;
	}

	/**
	* Get tcdnvva
	*
	* @return null|Decimal
	*/
	public function getTcdnvva()
	{
		return $this->tcdnvva;
	}

	/**
	* Set tcdncpi
	*
	*Valor Total Venta 0 Porciento de IVA (Moneda  Nacional)
	*
	* @parámetro Decimal $tcdncpi
	* @return Tcdncpi
	*/
	public function setTcdncpi($tcdncpi)
	{
	  $this->tcdncpi = (Double) $tcdncpi;
	    return $this;
	}

	/**
	* Get tcdncpi
	*
	* @return null|Decimal
	*/
	public function getTcdncpi()
	{
		return $this->tcdncpi;
	}

	/**
	* Set tcdnvvi
	*
	*Valor Total - Venta sin Impuesto (Moneda  Nacional)
	*
	* @parámetro Decimal $tcdnvvi
	* @return Tcdnvvi
	*/
	public function setTcdnvvi($tcdnvvi)
	{
	  $this->tcdnvvi = (Double) $tcdnvvi;
	    return $this;
	}

	/**
	* Get tcdnvvi
	*
	* @return null|Decimal
	*/
	public function getTcdnvvi()
	{
		return $this->tcdnvvi;
	}

	/**
	* Set tcdnds1
	*
	*Valor Total - Descuento 1 (Moneda Nacional)
	*
	* @parámetro Decimal $tcdnds1
	* @return Tcdnds1
	*/
	public function setTcdnds1($tcdnds1)
	{
	  $this->tcdnds1 = (Double) $tcdnds1;
	    return $this;
	}

	/**
	* Get tcdnds1
	*
	* @return null|Decimal
	*/
	public function getTcdnds1()
	{
		return $this->tcdnds1;
	}

	/**
	* Set tcdniva
	*
	*Valor Total - Impuesto 1 (Moneda Nacional)
	*
	* @parámetro Decimal $tcdniva
	* @return Tcdniva
	*/
	public function setTcdniva($tcdniva)
	{
	  $this->tcdniva = (Double) $tcdniva;
	    return $this;
	}

	/**
	* Get tcdniva
	*
	* @return null|Decimal
	*/
	public function getTcdniva()
	{
		return $this->tcdniva;
	}

	/**
	* Set tcdnpvt
	*
	*Valor Total - Precio de Venta (Moneda Nacional)
	*
	* @parámetro Decimal $tcdnpvt
	* @return Tcdnpvt
	*/
	public function setTcdnpvt($tcdnpvt)
	{
	  $this->tcdnpvt = (Double) $tcdnpvt;
	    return $this;
	}

	/**
	* Get tcdnpvt
	*
	* @return null|Decimal
	*/
	public function getTcdnpvt()
	{
		return $this->tcdnpvt;
	}

	/**
	* Set tcdevva
	*
	*Valor Total - Venta con Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tcdevva
	* @return Tcdevva
	*/
	public function setTcdevva($tcdevva)
	{
	  $this->tcdevva = (Double) $tcdevva;
	    return $this;
	}

	/**
	* Get tcdevva
	*
	* @return null|Decimal
	*/
	public function getTcdevva()
	{
		return $this->tcdevva;
	}

	/**
	* Set tcdecpi
	*
	*Valor Total Venta 0 Porciento de IVA (Moneda  Extranjera)
	*
	* @parámetro Decimal $tcdecpi
	* @return Tcdecpi
	*/
	public function setTcdecpi($tcdecpi)
	{
	  $this->tcdecpi = (Double) $tcdecpi;
	    return $this;
	}

	/**
	* Get tcdecpi
	*
	* @return null|Decimal
	*/
	public function getTcdecpi()
	{
		return $this->tcdecpi;
	}

	/**
	* Set tcdevvi
	*
	*Valor Total - Venta con Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tcdevvi
	* @return Tcdevvi
	*/
	public function setTcdevvi($tcdevvi)
	{
	  $this->tcdevvi = (Double) $tcdevvi;
	    return $this;
	}

	/**
	* Get tcdevvi
	*
	* @return null|Decimal
	*/
	public function getTcdevvi()
	{
		return $this->tcdevvi;
	}

	/**
	* Set tcdeds1
	*
	*Valor Total - Descuento 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tcdeds1
	* @return Tcdeds1
	*/
	public function setTcdeds1($tcdeds1)
	{
	  $this->tcdeds1 = (Double) $tcdeds1;
	    return $this;
	}

	/**
	* Get tcdeds1
	*
	* @return null|Decimal
	*/
	public function getTcdeds1()
	{
		return $this->tcdeds1;
	}

	/**
	* Set tcdeiva
	*
	*Valor Total - Impuesto 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tcdeiva
	* @return Tcdeiva
	*/
	public function setTcdeiva($tcdeiva)
	{
	  $this->tcdeiva = (Double) $tcdeiva;
	    return $this;
	}

	/**
	* Get tcdeiva
	*
	* @return null|Decimal
	*/
	public function getTcdeiva()
	{
		return $this->tcdeiva;
	}

	/**
	* Set tcdepvt
	*
	*Valor Total - Precio de Venta (Moneda Extranjera)
	*
	* @parámetro Decimal $tcdepvt
	* @return Tcdepvt
	*/
	public function setTcdepvt($tcdepvt)
	{
	  $this->tcdepvt = (Double) $tcdepvt;
	    return $this;
	}

	/**
	* Get tcdepvt
	*
	* @return null|Decimal
	*/
	public function getTcdepvt()
	{
		return $this->tcdepvt;
	}

	/**
	* Set tcdclet
	*
	*Cantidad en Letras
	*
	* @parámetro String $tcdclet
	* @return Tcdclet
	*/
	public function setTcdclet($tcdclet)
	{
	  $this->tcdclet = (String) $tcdclet;
	    return $this;
	}

	/**
	* Get tcdclet
	*
	* @return null|String
	*/
	public function getTcdclet()
	{
		return $this->tcdclet;
	}

	/**
	* Set tcdconn
	*
	*Concepto de la Nota
	*
	* @parámetro String $tcdconn
	* @return Tcdconn
	*/
	public function setTcdconn($tcdconn)
	{
	  $this->tcdconn = (String) $tcdconn;
	    return $this;
	}

	/**
	* Get tcdconn
	*
	* @return null|String
	*/
	public function getTcdconn()
	{
		return $this->tcdconn;
	}

	/**
	* Set tcddetn
	*
	*Detalle de la Nota
	*
	* @parámetro String $tcddetn
	* @return Tcddetn
	*/
	public function setTcddetn($tcddetn)
	{
	  $this->tcddetn = (String) $tcddetn;
	    return $this;
	}

	/**
	* Get tcddetn
	*
	* @return null|String
	*/
	public function getTcddetn()
	{
		return $this->tcddetn;
	}

	/**
	* Set tcdobsn
	*
	*Observación de la Nota
	*
	* @parámetro String $tcdobsn
	* @return Tcdobsn
	*/
	public function setTcdobsn($tcdobsn)
	{
	  $this->tcdobsn = (String) $tcdobsn;
	    return $this;
	}

	/**
	* Get tcdobsn
	*
	* @return null|String
	*/
	public function getTcdobsn()
	{
		return $this->tcdobsn;
	}

	/**
	* Set tcdcocd
	*
	*Considerado en Cierre Diario s/n
	*
	* @parámetro Integer $tcdcocd
	* @return Tcdcocd
	*/
	public function setTcdcocd($tcdcocd)
	{
	  $this->tcdcocd = (Integer) $tcdcocd;
	    return $this;
	}

	/**
	* Get tcdcocd
	*
	* @return null|Integer
	*/
	public function getTcdcocd()
	{
		return $this->tcdcocd;
	}

	/**
	* Set tcdditr
	*
	*Día de Trabajo
	*
	* @parámetro Date $tcdditr
	* @return Tcdditr
	*/
	public function setTcdditr($tcdditr)
	{
	  $this->tcdditr = (String) $tcdditr;
	    return $this;
	}

	/**
	* Get tcdditr
	*
	* @return null|Date
	*/
	public function getTcdditr()
	{
		return $this->tcdditr;
	}

	/**
	* Set tcddcta
	*
	*Código Clase de Cuenta
	*
	* @parámetro Integer $tcddcta
	* @return Tcddcta
	*/
	public function setTcddcta($tcddcta)
	{
	  $this->tcddcta = (Integer) $tcddcta;
	    return $this;
	}

	/**
	* Get tcddcta
	*
	* @return null|Integer
	*/
	public function getTcddcta()
	{
		return $this->tcddcta;
	}

	/**
	* Set tcdtdap
	*
	*Código Tipo Documento de Aplicación
	*
	* @parámetro String $tcdtdap
	* @return Tcdtdap
	*/
	public function setTcdtdap($tcdtdap)
	{
	  $this->tcdtdap = (String) $tcdtdap;
	    return $this;
	}

	/**
	* Get tcdtdap
	*
	* @return null|String
	*/
	public function getTcdtdap()
	{
		return $this->tcdtdap;
	}

	/**
	* Set tcdsdap
	*
	*Serie Documento de Aplicación
	*
	* @parámetro Decimal $tcdsdap
	* @return Tcdsdap
	*/
	public function setTcdsdap($tcdsdap)
	{
	  $this->tcdsdap = (Double) $tcdsdap;
	    return $this;
	}

	/**
	* Get tcdsdap
	*
	* @return null|Decimal
	*/
	public function getTcdsdap()
	{
		return $this->tcdsdap;
	}

	/**
	* Set tcdndap
	*
	*Número Documento de Aplicación
	*
	* @parámetro Decimal $tcdndap
	* @return Tcdndap
	*/
	public function setTcdndap($tcdndap)
	{
	  $this->tcdndap = (Double) $tcdndap;
	    return $this;
	}

	/**
	* Get tcdndap
	*
	* @return null|Decimal
	*/
	public function getTcdndap()
	{
		return $this->tcdndap;
	}

	/**
	* Set tcdusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tcdusuc
	* @return Tcdusuc
	*/
	public function setTcdusuc($tcdusuc)
	{
	  $this->tcdusuc = (String) $tcdusuc;
	    return $this;
	}

	/**
	* Get tcdusuc
	*
	* @return null|String
	*/
	public function getTcdusuc()
	{
		return $this->tcdusuc;
	}

	/**
	* Set tcdfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tcdfecc
	* @return Tcdfecc
	*/
	public function setTcdfecc($tcdfecc)
	{
	  $this->tcdfecc = (String) $tcdfecc;
	    return $this;
	}

	/**
	* Get tcdfecc
	*
	* @return null|Date
	*/
	public function getTcdfecc()
	{
		return $this->tcdfecc;
	}

	/**
	* Set tcdusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tcdusum
	* @return Tcdusum
	*/
	public function setTcdusum($tcdusum)
	{
	  $this->tcdusum = (String) $tcdusum;
	    return $this;
	}

	/**
	* Get tcdusum
	*
	* @return null|String
	*/
	public function getTcdusum()
	{
		return $this->tcdusum;
	}

	/**
	* Set tcdfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tcdfecm
	* @return Tcdfecm
	*/
	public function setTcdfecm($tcdfecm)
	{
	  $this->tcdfecm = (String) $tcdfecm;
	    return $this;
	}

	/**
	* Get tcdfecm
	*
	* @return null|Date
	*/
	public function getTcdfecm()
	{
		return $this->tcdfecm;
	}

	/**
	* Set tcdtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tcdtask
	* @return Tcdtask
	*/
	public function setTcdtask($tcdtask)
	{
	  $this->tcdtask = (String) $tcdtask;
	    return $this;
	}

	/**
	* Get tcdtask
	*
	* @return null|String
	*/
	public function getTcdtask()
	{
		return $this->tcdtask;
	}

	/**
	* Set tcdpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tcdpara
	* @return Tcdpara
	*/
	public function setTcdpara($tcdpara)
	{
	  $this->tcdpara = (Integer) $tcdpara;
	    return $this;
	}

	/**
	* Get tcdpara
	*
	* @return null|Integer
	*/
	public function getTcdpara()
	{
		return $this->tcdpara;
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

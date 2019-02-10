<?php
 /**
 * Model of the Ttncdh table
 *
 * It is used to convert the   Ttncdh entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttncdh
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttncdh
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Realizar Notas de Crédito por Devolución
		*/
		protected $tnhsecu;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Código de la Nueva Lista  de Precios
		*/
		protected $tlpcodi;
		/**
		* @var Decimal
		* Required field
		* Field hidden in the form or handled internally
		* Número Nota de Crédito
		*/
		protected $tnhnume;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Nota de Crédito
		*/
		protected $tnhfecp;
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
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Anulación
		*/
		protected $tnhfeca;
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
		* Número de Documento
		*/
		protected $tnhfanv;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Origen de Pedido
		*/
		protected $tnhorin;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación
		*/
		protected $tnhsitu;
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
		* Tipo de Venta
		*/
		protected $tnhtvta;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Zona de Distribuidor
		*/
		protected $tnhcozo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción Zona de Distribuidor
		*/
		protected $tnhzona;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Total Relación Puntos-Moneda Nacional
		*/
		protected $tnhrpdo;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Total Sub Total Parcial -Moneda Nacional
		*/
		protected $tnhstpa;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Total Sub Total-Moneda Nacional
		*/
		protected $tnhsubt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta con Impuesto (Moneda Nacional)
		*/
		protected $tnhnvva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta con  0 Porciento de IVA (Moneda  Nacional)
		*/
		protected $tnhncpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta sin Impuesto (Moneda Nacional)
		*/
		protected $tnhnvvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 1 (Moneda Nacional)
		*/
		protected $tnhnds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 2 (Moneda Nacional)
		*/
		protected $tnhnds2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda Nacional)
		*/
		protected $tnhniva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda Nacional)
		*/
		protected $tnhnim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda Nacional)
		*/
		protected $tnhnim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio de Venta (Moneda Nacional)
		*/
		protected $tnhnpvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta con Impuesto (Moneda Extranjera)
		*/
		protected $tnhevva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta 0 Porciento de IVA (Moneda  Extranjera)
		*/
		protected $tnhecpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta sin Impuesto (Moneda Extranjera)
		*/
		protected $tnhevvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 1 (Moneda Extranjera)
		*/
		protected $tnheds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Descuento 2 (Moneda Extranjera)
		*/
		protected $tnheds2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 1 (Moneda Extranjera)
		*/
		protected $tnheiva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 2 (Moneda Extranjera)
		*/
		protected $tnheim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Impuesto 3 (Moneda Extranjera)
		*/
		protected $tnheim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Precio de Venta (Moneda Extranjera)
		*/
		protected $tnhepvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Tipo de Cambio
		*/
		protected $tnhtcam;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Concepto de Venta
		*/
		protected $tnhrubr;
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
		* Distrito de Distribuidor
		*/
		protected $tdisdis;
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
		* @var Integer
		* Optional field
		* Field visible in the form
		* Considerado en Cierre Diario
		*/
		protected $tnhcocd;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cantidad de letras
		*/
		protected $tnhclet;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tnhusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tnhfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tnhusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tnhfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tnhtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tnhpara;

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
	* Name of the table: ttncdh
	* 
	 */
	const TABLE="ttncdh";

	/**
	*Primary key
*/
		 const PKEY = "tnhsecu";



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
		throw new \Exception('Class Entity: Ttncdh Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttncdh. Invalid specified property: get'.$name);
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
	* Set tnhfecp
	*
	*Fecha Nota de Crédito
	*
	* @parámetro Date $tnhfecp
	* @return Tnhfecp
	*/
	public function setTnhfecp($tnhfecp)
	{
	  $this->tnhfecp = (String) $tnhfecp;
	    return $this;
	}

	/**
	* Get tnhfecp
	*
	* @return null|Date
	*/
	public function getTnhfecp()
	{
		return $this->tnhfecp;
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
	* Set tnhfeca
	*
	*Fecha de Anulación
	*
	* @parámetro Date $tnhfeca
	* @return Tnhfeca
	*/
	public function setTnhfeca($tnhfeca)
	{
	  $this->tnhfeca = (String) $tnhfeca;
	    return $this;
	}

	/**
	* Get tnhfeca
	*
	* @return null|Date
	*/
	public function getTnhfeca()
	{
		return $this->tnhfeca;
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
	* Set tnhfanv
	*
	*Número de Documento
	*
	* @parámetro Decimal $tnhfanv
	* @return Tnhfanv
	*/
	public function setTnhfanv($tnhfanv)
	{
	  $this->tnhfanv = (Double) $tnhfanv;
	    return $this;
	}

	/**
	* Get tnhfanv
	*
	* @return null|Decimal
	*/
	public function getTnhfanv()
	{
		return $this->tnhfanv;
	}

	/**
	* Set tnhorin
	*
	*Origen de Pedido
	*
	* @parámetro String $tnhorin
	* @return Tnhorin
	*/
	public function setTnhorin($tnhorin)
	{
	  $this->tnhorin = (String) $tnhorin;
	    return $this;
	}

	/**
	* Get tnhorin
	*
	* @return null|String
	*/
	public function getTnhorin()
	{
		return $this->tnhorin;
	}

	/**
	* Set tnhsitu
	*
	*Situación
	*
	* @parámetro Integer $tnhsitu
	* @return Tnhsitu
	*/
	public function setTnhsitu($tnhsitu)
	{
	  $this->tnhsitu = (Integer) $tnhsitu;
	    return $this;
	}

	/**
	* Get tnhsitu
	*
	* @return null|Integer
	*/
	public function getTnhsitu()
	{
		return $this->tnhsitu;
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
	* Set tnhtvta
	*
	*Tipo de Venta
	*
	* @parámetro String $tnhtvta
	* @return Tnhtvta
	*/
	public function setTnhtvta($tnhtvta)
	{
	  $this->tnhtvta = (String) $tnhtvta;
	    return $this;
	}

	/**
	* Get tnhtvta
	*
	* @return null|String
	*/
	public function getTnhtvta()
	{
		return $this->tnhtvta;
	}

	/**
	* Set tnhcozo
	*
	*Código de Zona de Distribuidor
	*
	* @parámetro String $tnhcozo
	* @return Tnhcozo
	*/
	public function setTnhcozo($tnhcozo)
	{
	  $this->tnhcozo = (String) $tnhcozo;
	    return $this;
	}

	/**
	* Get tnhcozo
	*
	* @return null|String
	*/
	public function getTnhcozo()
	{
		return $this->tnhcozo;
	}

	/**
	* Set tnhzona
	*
	*Descripción Zona de Distribuidor
	*
	* @parámetro String $tnhzona
	* @return Tnhzona
	*/
	public function setTnhzona($tnhzona)
	{
	  $this->tnhzona = (String) $tnhzona;
	    return $this;
	}

	/**
	* Get tnhzona
	*
	* @return null|String
	*/
	public function getTnhzona()
	{
		return $this->tnhzona;
	}

	/**
	* Set tnhrpdo
	*
	*Total Relación Puntos-Moneda Nacional
	*
	* @parámetro Decimal $tnhrpdo
	* @return Tnhrpdo
	*/
	public function setTnhrpdo($tnhrpdo)
	{
	  $this->tnhrpdo = (Double) $tnhrpdo;
	    return $this;
	}

	/**
	* Get tnhrpdo
	*
	* @return null|Decimal
	*/
	public function getTnhrpdo()
	{
		return $this->tnhrpdo;
	}

	/**
	* Set tnhstpa
	*
	*Total Sub Total Parcial -Moneda Nacional
	*
	* @parámetro Decimal $tnhstpa
	* @return Tnhstpa
	*/
	public function setTnhstpa($tnhstpa)
	{
	  $this->tnhstpa = (Double) $tnhstpa;
	    return $this;
	}

	/**
	* Get tnhstpa
	*
	* @return null|Decimal
	*/
	public function getTnhstpa()
	{
		return $this->tnhstpa;
	}

	/**
	* Set tnhsubt
	*
	*Total Sub Total-Moneda Nacional
	*
	* @parámetro Decimal $tnhsubt
	* @return Tnhsubt
	*/
	public function setTnhsubt($tnhsubt)
	{
	  $this->tnhsubt = (Double) $tnhsubt;
	    return $this;
	}

	/**
	* Get tnhsubt
	*
	* @return null|Decimal
	*/
	public function getTnhsubt()
	{
		return $this->tnhsubt;
	}

	/**
	* Set tnhnvva
	*
	*Valor Total Venta con Impuesto (Moneda Nacional)
	*
	* @parámetro Decimal $tnhnvva
	* @return Tnhnvva
	*/
	public function setTnhnvva($tnhnvva)
	{
	  $this->tnhnvva = (Double) $tnhnvva;
	    return $this;
	}

	/**
	* Get tnhnvva
	*
	* @return null|Decimal
	*/
	public function getTnhnvva()
	{
		return $this->tnhnvva;
	}

	/**
	* Set tnhncpi
	*
	*Valor Total Venta con  0 Porciento de IVA (Moneda  Nacional)
	*
	* @parámetro Decimal $tnhncpi
	* @return Tnhncpi
	*/
	public function setTnhncpi($tnhncpi)
	{
	  $this->tnhncpi = (Double) $tnhncpi;
	    return $this;
	}

	/**
	* Get tnhncpi
	*
	* @return null|Decimal
	*/
	public function getTnhncpi()
	{
		return $this->tnhncpi;
	}

	/**
	* Set tnhnvvi
	*
	*Valor Total Venta sin Impuesto (Moneda Nacional)
	*
	* @parámetro Decimal $tnhnvvi
	* @return Tnhnvvi
	*/
	public function setTnhnvvi($tnhnvvi)
	{
	  $this->tnhnvvi = (Double) $tnhnvvi;
	    return $this;
	}

	/**
	* Get tnhnvvi
	*
	* @return null|Decimal
	*/
	public function getTnhnvvi()
	{
		return $this->tnhnvvi;
	}

	/**
	* Set tnhnds1
	*
	*Valor Total Descuento 1 (Moneda Nacional)
	*
	* @parámetro Decimal $tnhnds1
	* @return Tnhnds1
	*/
	public function setTnhnds1($tnhnds1)
	{
	  $this->tnhnds1 = (Double) $tnhnds1;
	    return $this;
	}

	/**
	* Get tnhnds1
	*
	* @return null|Decimal
	*/
	public function getTnhnds1()
	{
		return $this->tnhnds1;
	}

	/**
	* Set tnhnds2
	*
	*Valor Total Descuento 2 (Moneda Nacional)
	*
	* @parámetro Decimal $tnhnds2
	* @return Tnhnds2
	*/
	public function setTnhnds2($tnhnds2)
	{
	  $this->tnhnds2 = (Double) $tnhnds2;
	    return $this;
	}

	/**
	* Get tnhnds2
	*
	* @return null|Decimal
	*/
	public function getTnhnds2()
	{
		return $this->tnhnds2;
	}

	/**
	* Set tnhniva
	*
	*Valor Total Impuesto 1 (Moneda Nacional)
	*
	* @parámetro Decimal $tnhniva
	* @return Tnhniva
	*/
	public function setTnhniva($tnhniva)
	{
	  $this->tnhniva = (Double) $tnhniva;
	    return $this;
	}

	/**
	* Get tnhniva
	*
	* @return null|Decimal
	*/
	public function getTnhniva()
	{
		return $this->tnhniva;
	}

	/**
	* Set tnhnim2
	*
	*Valor Total Impuesto 2 (Moneda Nacional)
	*
	* @parámetro Decimal $tnhnim2
	* @return Tnhnim2
	*/
	public function setTnhnim2($tnhnim2)
	{
	  $this->tnhnim2 = (Double) $tnhnim2;
	    return $this;
	}

	/**
	* Get tnhnim2
	*
	* @return null|Decimal
	*/
	public function getTnhnim2()
	{
		return $this->tnhnim2;
	}

	/**
	* Set tnhnim3
	*
	*Valor Total Impuesto 3 (Moneda Nacional)
	*
	* @parámetro Decimal $tnhnim3
	* @return Tnhnim3
	*/
	public function setTnhnim3($tnhnim3)
	{
	  $this->tnhnim3 = (Double) $tnhnim3;
	    return $this;
	}

	/**
	* Get tnhnim3
	*
	* @return null|Decimal
	*/
	public function getTnhnim3()
	{
		return $this->tnhnim3;
	}

	/**
	* Set tnhnpvt
	*
	*Valor Total Precio de Venta (Moneda Nacional)
	*
	* @parámetro Decimal $tnhnpvt
	* @return Tnhnpvt
	*/
	public function setTnhnpvt($tnhnpvt)
	{
	  $this->tnhnpvt = (Double) $tnhnpvt;
	    return $this;
	}

	/**
	* Get tnhnpvt
	*
	* @return null|Decimal
	*/
	public function getTnhnpvt()
	{
		return $this->tnhnpvt;
	}

	/**
	* Set tnhevva
	*
	*Valor Total Venta con Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tnhevva
	* @return Tnhevva
	*/
	public function setTnhevva($tnhevva)
	{
	  $this->tnhevva = (Double) $tnhevva;
	    return $this;
	}

	/**
	* Get tnhevva
	*
	* @return null|Decimal
	*/
	public function getTnhevva()
	{
		return $this->tnhevva;
	}

	/**
	* Set tnhecpi
	*
	*Valor Total Venta 0 Porciento de IVA (Moneda  Extranjera)
	*
	* @parámetro Decimal $tnhecpi
	* @return Tnhecpi
	*/
	public function setTnhecpi($tnhecpi)
	{
	  $this->tnhecpi = (Double) $tnhecpi;
	    return $this;
	}

	/**
	* Get tnhecpi
	*
	* @return null|Decimal
	*/
	public function getTnhecpi()
	{
		return $this->tnhecpi;
	}

	/**
	* Set tnhevvi
	*
	*Valor Total Venta sin Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tnhevvi
	* @return Tnhevvi
	*/
	public function setTnhevvi($tnhevvi)
	{
	  $this->tnhevvi = (Double) $tnhevvi;
	    return $this;
	}

	/**
	* Get tnhevvi
	*
	* @return null|Decimal
	*/
	public function getTnhevvi()
	{
		return $this->tnhevvi;
	}

	/**
	* Set tnheds1
	*
	*Valor Total Descuento 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tnheds1
	* @return Tnheds1
	*/
	public function setTnheds1($tnheds1)
	{
	  $this->tnheds1 = (Double) $tnheds1;
	    return $this;
	}

	/**
	* Get tnheds1
	*
	* @return null|Decimal
	*/
	public function getTnheds1()
	{
		return $this->tnheds1;
	}

	/**
	* Set tnheds2
	*
	*Valor Total Descuento 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $tnheds2
	* @return Tnheds2
	*/
	public function setTnheds2($tnheds2)
	{
	  $this->tnheds2 = (Double) $tnheds2;
	    return $this;
	}

	/**
	* Get tnheds2
	*
	* @return null|Decimal
	*/
	public function getTnheds2()
	{
		return $this->tnheds2;
	}

	/**
	* Set tnheiva
	*
	*Valor Total Impuesto 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tnheiva
	* @return Tnheiva
	*/
	public function setTnheiva($tnheiva)
	{
	  $this->tnheiva = (Double) $tnheiva;
	    return $this;
	}

	/**
	* Get tnheiva
	*
	* @return null|Decimal
	*/
	public function getTnheiva()
	{
		return $this->tnheiva;
	}

	/**
	* Set tnheim2
	*
	*Valor Total Impuesto 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $tnheim2
	* @return Tnheim2
	*/
	public function setTnheim2($tnheim2)
	{
	  $this->tnheim2 = (Double) $tnheim2;
	    return $this;
	}

	/**
	* Get tnheim2
	*
	* @return null|Decimal
	*/
	public function getTnheim2()
	{
		return $this->tnheim2;
	}

	/**
	* Set tnheim3
	*
	*Valor Total Impuesto 3 (Moneda Extranjera)
	*
	* @parámetro Decimal $tnheim3
	* @return Tnheim3
	*/
	public function setTnheim3($tnheim3)
	{
	  $this->tnheim3 = (Double) $tnheim3;
	    return $this;
	}

	/**
	* Get tnheim3
	*
	* @return null|Decimal
	*/
	public function getTnheim3()
	{
		return $this->tnheim3;
	}

	/**
	* Set tnhepvt
	*
	*Valor Total Precio de Venta (Moneda Extranjera)
	*
	* @parámetro Decimal $tnhepvt
	* @return Tnhepvt
	*/
	public function setTnhepvt($tnhepvt)
	{
	  $this->tnhepvt = (Double) $tnhepvt;
	    return $this;
	}

	/**
	* Get tnhepvt
	*
	* @return null|Decimal
	*/
	public function getTnhepvt()
	{
		return $this->tnhepvt;
	}

	/**
	* Set tnhtcam
	*
	*Tipo de Cambio
	*
	* @parámetro Decimal $tnhtcam
	* @return Tnhtcam
	*/
	public function setTnhtcam($tnhtcam)
	{
	  $this->tnhtcam = (Double) $tnhtcam;
	    return $this;
	}

	/**
	* Get tnhtcam
	*
	* @return null|Decimal
	*/
	public function getTnhtcam()
	{
		return $this->tnhtcam;
	}

	/**
	* Set tnhrubr
	*
	*Concepto de Venta
	*
	* @parámetro Integer $tnhrubr
	* @return Tnhrubr
	*/
	public function setTnhrubr($tnhrubr)
	{
	  $this->tnhrubr = (Integer) $tnhrubr;
	    return $this;
	}

	/**
	* Get tnhrubr
	*
	* @return null|Integer
	*/
	public function getTnhrubr()
	{
		return $this->tnhrubr;
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
	* Set tnhcocd
	*
	*Considerado en Cierre Diario
	*
	* @parámetro Integer $tnhcocd
	* @return Tnhcocd
	*/
	public function setTnhcocd($tnhcocd)
	{
	  $this->tnhcocd = (Integer) $tnhcocd;
	    return $this;
	}

	/**
	* Get tnhcocd
	*
	* @return null|Integer
	*/
	public function getTnhcocd()
	{
		return $this->tnhcocd;
	}

	/**
	* Set tnhclet
	*
	*Cantidad de letras
	*
	* @parámetro String $tnhclet
	* @return Tnhclet
	*/
	public function setTnhclet($tnhclet)
	{
	  $this->tnhclet = (String) $tnhclet;
	    return $this;
	}

	/**
	* Get tnhclet
	*
	* @return null|String
	*/
	public function getTnhclet()
	{
		return $this->tnhclet;
	}

	/**
	* Set tnhusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tnhusuc
	* @return Tnhusuc
	*/
	public function setTnhusuc($tnhusuc)
	{
	  $this->tnhusuc = (String) $tnhusuc;
	    return $this;
	}

	/**
	* Get tnhusuc
	*
	* @return null|String
	*/
	public function getTnhusuc()
	{
		return $this->tnhusuc;
	}

	/**
	* Set tnhfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tnhfecc
	* @return Tnhfecc
	*/
	public function setTnhfecc($tnhfecc)
	{
	  $this->tnhfecc = (String) $tnhfecc;
	    return $this;
	}

	/**
	* Get tnhfecc
	*
	* @return null|Date
	*/
	public function getTnhfecc()
	{
		return $this->tnhfecc;
	}

	/**
	* Set tnhusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tnhusum
	* @return Tnhusum
	*/
	public function setTnhusum($tnhusum)
	{
	  $this->tnhusum = (String) $tnhusum;
	    return $this;
	}

	/**
	* Get tnhusum
	*
	* @return null|String
	*/
	public function getTnhusum()
	{
		return $this->tnhusum;
	}

	/**
	* Set tnhfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tnhfecm
	* @return Tnhfecm
	*/
	public function setTnhfecm($tnhfecm)
	{
	  $this->tnhfecm = (String) $tnhfecm;
	    return $this;
	}

	/**
	* Get tnhfecm
	*
	* @return null|Date
	*/
	public function getTnhfecm()
	{
		return $this->tnhfecm;
	}

	/**
	* Set tnhtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tnhtask
	* @return Tnhtask
	*/
	public function setTnhtask($tnhtask)
	{
	  $this->tnhtask = (String) $tnhtask;
	    return $this;
	}

	/**
	* Get tnhtask
	*
	* @return null|String
	*/
	public function getTnhtask()
	{
		return $this->tnhtask;
	}

	/**
	* Set tnhpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tnhpara
	* @return Tnhpara
	*/
	public function setTnhpara($tnhpara)
	{
	  $this->tnhpara = (Integer) $tnhpara;
	    return $this;
	}

	/**
	* Get tnhpara
	*
	* @return null|Integer
	*/
	public function getTnhpara()
	{
		return $this->tnhpara;
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

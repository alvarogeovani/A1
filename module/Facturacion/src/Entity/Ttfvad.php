<?php
 /**
 * Model of the Ttfvad table
 *
 * It is used to convert the   Ttfvad entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttfvad
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttfvad
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Facturación Varios
		*/
		protected $tfdsecu;
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
		* Estos datos se ingresan en la Opción: Maestro de Artículos
		*/
		protected $varsecu;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad
		*/
		protected $tfdcant;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Factura
		*/
		protected $tfdcorr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Punto de Venta
		*/
		protected $tpvcodi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de Documento Comercial
		*/
		protected $tbdtipo;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Pedido
		*/
		protected $tfdnume;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Código de Moneda
		*/
		protected $bmoncve;
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
		* Detalle de la Venta
		*/
		protected $tfdglos;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Precio unitario multiplicado por la Cantidad
		*/
		protected $tfdtunc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Guarda el valor de la venta afecta + la venta inafecta antes de aplicar el descuento Cabecera
		*/
		protected $tfdstpa;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor del Descuento Detalle, Precio unitario Real multiplicado por el porcentaje de detalle (sumado, escalonado)
		*/
		protected $tfddesd;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor del Descuento Cabecera, Precio Unitario restado el primer valor de descuento detalle - el porcentaje de descuento cabecera (escalonado con el detalle y sumado o escalonado en detalle)
		*/
		protected $tfddesc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Precio Unitario Real, es decir el Precio Unitario restado todos los descuentos.
		*/
		protected $tfdpunr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Guarda el Sub-total suma del Valor Afecta y Valor Inafecta antes de sumar el IVA  y  restado todos los descuentos (Detalle y Cabecera)
		*/
		protected $tfdsubt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta con Impuesto (Moneda Nacional)
		*/
		protected $tfdnvva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta aplica 0% del IVA (Moneda Nacional)
		*/
		protected $tfdncpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta sin Impuesto (Moneda Nacional)
		*/
		protected $tfdnvvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Descuento 1(Moneda Nacional)
		*/
		protected $tfdnds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Descuento 2(Moneda Nacional)
		*/
		protected $tfdnds2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 1 (Moneda Nacional)
		*/
		protected $tfdniva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 2 (Moneda Nacional)
		*/
		protected $tfdnice;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 3 (Moneda Nacional)
		*/
		protected $tfdnim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Precio de Venta (Moneda Nacional)
		*/
		protected $tfdnpvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta con Impuesto (Moneda Extranjera)
		*/
		protected $tfdevva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta aplica 0% del IVA (Moneda Extranjera)
		*/
		protected $tfdecpi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Venta con Impuesto (Moneda Extranjera)
		*/
		protected $tfdevvi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Descuento 1(Moneda Extranjera)
		*/
		protected $tfdeds1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Descuento 2 (Moneda Extranjera)
		*/
		protected $tfdeds2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 1 (Moneda Extranjera)
		*/
		protected $tfdeiva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 2 (Moneda Extranjera)
		*/
		protected $tfdeice;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Impuesto 3 (Moneda Extranjera)
		*/
		protected $tfdeim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total - Precio de Venta (Moneda Extranjera)
		*/
		protected $tfdepvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Secuencia de Lista
		*/
		protected $tfdlsec;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Clase de Cuenta
		*/
		protected $tfddcta;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo Documento de Aplicación
		*/
		protected $tfdtdap;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Serie Documento de Aplicación
		*/
		protected $tfdsdap;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número Documento de  Aplicación
		*/
		protected $tfdndap;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Guarda información de los descuentos de detalle aplicados.
		*/
		protected $tfdobsf;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Información de los descuentos de cabecera aplicados a la factura.
		*/
		protected $tfdobsi;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tfdusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tfdfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tfdusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tfdfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tfdtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tfdpara;

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
	* Name of the table: ttfvad
	* 
	 */
	const TABLE="ttfvad";

	/**
	*Primary key
*/
		 const PKEY = "tfdsecu";



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
		throw new \Exception('Class Entity: Ttfvad Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttfvad. Invalid specified property: get'.$name);
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
	* Set tfdsecu
	*
	*Estos datos se ingresan en la Opción: Facturación Varios
	*
	* @parámetro Integer $tfdsecu
	* @return Tfdsecu
	*/
	public function setTfdsecu($tfdsecu)
	{
	  $this->tfdsecu = (Integer) $tfdsecu;
	    return $this;
	}

	/**
	* Get tfdsecu
	*
	* @return null|Integer
	*/
	public function getTfdsecu()
	{
		return $this->tfdsecu;
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
	* Set tfdcant
	*
	*Cantidad
	*
	* @parámetro Decimal $tfdcant
	* @return Tfdcant
	*/
	public function setTfdcant($tfdcant)
	{
	  $this->tfdcant = (Double) $tfdcant;
	    return $this;
	}

	/**
	* Get tfdcant
	*
	* @return null|Decimal
	*/
	public function getTfdcant()
	{
		return $this->tfdcant;
	}

	/**
	* Set tfdcorr
	*
	*Número de Factura
	*
	* @parámetro Decimal $tfdcorr
	* @return Tfdcorr
	*/
	public function setTfdcorr($tfdcorr)
	{
	  $this->tfdcorr = (Double) $tfdcorr;
	    return $this;
	}

	/**
	* Get tfdcorr
	*
	* @return null|Decimal
	*/
	public function getTfdcorr()
	{
		return $this->tfdcorr;
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
	* Set tfdnume
	*
	*Número de Pedido
	*
	* @parámetro Decimal $tfdnume
	* @return Tfdnume
	*/
	public function setTfdnume($tfdnume)
	{
	  $this->tfdnume = (Double) $tfdnume;
	    return $this;
	}

	/**
	* Get tfdnume
	*
	* @return null|Decimal
	*/
	public function getTfdnume()
	{
		return $this->tfdnume;
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
	* Set tfdglos
	*
	*Detalle de la Venta
	*
	* @parámetro String $tfdglos
	* @return Tfdglos
	*/
	public function setTfdglos($tfdglos)
	{
	  $this->tfdglos = (String) $tfdglos;
	    return $this;
	}

	/**
	* Get tfdglos
	*
	* @return null|String
	*/
	public function getTfdglos()
	{
		return $this->tfdglos;
	}

	/**
	* Set tfdtunc
	*
	*Precio unitario multiplicado por la Cantidad
	*
	* @parámetro Decimal $tfdtunc
	* @return Tfdtunc
	*/
	public function setTfdtunc($tfdtunc)
	{
	  $this->tfdtunc = (Double) $tfdtunc;
	    return $this;
	}

	/**
	* Get tfdtunc
	*
	* @return null|Decimal
	*/
	public function getTfdtunc()
	{
		return $this->tfdtunc;
	}

	/**
	* Set tfdstpa
	*
	*Guarda el valor de la venta afecta + la venta inafecta antes de aplicar el descuento Cabecera
	*
	* @parámetro Decimal $tfdstpa
	* @return Tfdstpa
	*/
	public function setTfdstpa($tfdstpa)
	{
	  $this->tfdstpa = (Double) $tfdstpa;
	    return $this;
	}

	/**
	* Get tfdstpa
	*
	* @return null|Decimal
	*/
	public function getTfdstpa()
	{
		return $this->tfdstpa;
	}

	/**
	* Set tfddesd
	*
	*Valor del Descuento Detalle, Precio unitario Real multiplicado por el porcentaje de detalle (sumado, escalonado)
	*
	* @parámetro Decimal $tfddesd
	* @return Tfddesd
	*/
	public function setTfddesd($tfddesd)
	{
	  $this->tfddesd = (Double) $tfddesd;
	    return $this;
	}

	/**
	* Get tfddesd
	*
	* @return null|Decimal
	*/
	public function getTfddesd()
	{
		return $this->tfddesd;
	}

	/**
	* Set tfddesc
	*
	*Valor del Descuento Cabecera, Precio Unitario restado el primer valor de descuento detalle - el porcentaje de descuento cabecera (escalonado con el detalle y sumado o escalonado en detalle)
	*
	* @parámetro Decimal $tfddesc
	* @return Tfddesc
	*/
	public function setTfddesc($tfddesc)
	{
	  $this->tfddesc = (Double) $tfddesc;
	    return $this;
	}

	/**
	* Get tfddesc
	*
	* @return null|Decimal
	*/
	public function getTfddesc()
	{
		return $this->tfddesc;
	}

	/**
	* Set tfdpunr
	*
	*Precio Unitario Real, es decir el Precio Unitario restado todos los descuentos.
	*
	* @parámetro Decimal $tfdpunr
	* @return Tfdpunr
	*/
	public function setTfdpunr($tfdpunr)
	{
	  $this->tfdpunr = (Double) $tfdpunr;
	    return $this;
	}

	/**
	* Get tfdpunr
	*
	* @return null|Decimal
	*/
	public function getTfdpunr()
	{
		return $this->tfdpunr;
	}

	/**
	* Set tfdsubt
	*
	*Guarda el Sub-total suma del Valor Afecta y Valor Inafecta antes de sumar el IVA  y  restado todos los descuentos (Detalle y Cabecera)
	*
	* @parámetro Decimal $tfdsubt
	* @return Tfdsubt
	*/
	public function setTfdsubt($tfdsubt)
	{
	  $this->tfdsubt = (Double) $tfdsubt;
	    return $this;
	}

	/**
	* Get tfdsubt
	*
	* @return null|Decimal
	*/
	public function getTfdsubt()
	{
		return $this->tfdsubt;
	}

	/**
	* Set tfdnvva
	*
	*Valor Total - Venta con Impuesto (Moneda Nacional)
	*
	* @parámetro Decimal $tfdnvva
	* @return Tfdnvva
	*/
	public function setTfdnvva($tfdnvva)
	{
	  $this->tfdnvva = (Double) $tfdnvva;
	    return $this;
	}

	/**
	* Get tfdnvva
	*
	* @return null|Decimal
	*/
	public function getTfdnvva()
	{
		return $this->tfdnvva;
	}

	/**
	* Set tfdncpi
	*
	*Valor Total - Venta aplica 0% del IVA (Moneda Nacional)
	*
	* @parámetro Decimal $tfdncpi
	* @return Tfdncpi
	*/
	public function setTfdncpi($tfdncpi)
	{
	  $this->tfdncpi = (Double) $tfdncpi;
	    return $this;
	}

	/**
	* Get tfdncpi
	*
	* @return null|Decimal
	*/
	public function getTfdncpi()
	{
		return $this->tfdncpi;
	}

	/**
	* Set tfdnvvi
	*
	*Valor Total - Venta sin Impuesto (Moneda Nacional)
	*
	* @parámetro Decimal $tfdnvvi
	* @return Tfdnvvi
	*/
	public function setTfdnvvi($tfdnvvi)
	{
	  $this->tfdnvvi = (Double) $tfdnvvi;
	    return $this;
	}

	/**
	* Get tfdnvvi
	*
	* @return null|Decimal
	*/
	public function getTfdnvvi()
	{
		return $this->tfdnvvi;
	}

	/**
	* Set tfdnds1
	*
	*Valor Total - Descuento 1(Moneda Nacional)
	*
	* @parámetro Decimal $tfdnds1
	* @return Tfdnds1
	*/
	public function setTfdnds1($tfdnds1)
	{
	  $this->tfdnds1 = (Double) $tfdnds1;
	    return $this;
	}

	/**
	* Get tfdnds1
	*
	* @return null|Decimal
	*/
	public function getTfdnds1()
	{
		return $this->tfdnds1;
	}

	/**
	* Set tfdnds2
	*
	*Valor Total - Descuento 2(Moneda Nacional)
	*
	* @parámetro Decimal $tfdnds2
	* @return Tfdnds2
	*/
	public function setTfdnds2($tfdnds2)
	{
	  $this->tfdnds2 = (Double) $tfdnds2;
	    return $this;
	}

	/**
	* Get tfdnds2
	*
	* @return null|Decimal
	*/
	public function getTfdnds2()
	{
		return $this->tfdnds2;
	}

	/**
	* Set tfdniva
	*
	*Valor Total - Impuesto 1 (Moneda Nacional)
	*
	* @parámetro Decimal $tfdniva
	* @return Tfdniva
	*/
	public function setTfdniva($tfdniva)
	{
	  $this->tfdniva = (Double) $tfdniva;
	    return $this;
	}

	/**
	* Get tfdniva
	*
	* @return null|Decimal
	*/
	public function getTfdniva()
	{
		return $this->tfdniva;
	}

	/**
	* Set tfdnice
	*
	*Valor Total - Impuesto 2 (Moneda Nacional)
	*
	* @parámetro Decimal $tfdnice
	* @return Tfdnice
	*/
	public function setTfdnice($tfdnice)
	{
	  $this->tfdnice = (Double) $tfdnice;
	    return $this;
	}

	/**
	* Get tfdnice
	*
	* @return null|Decimal
	*/
	public function getTfdnice()
	{
		return $this->tfdnice;
	}

	/**
	* Set tfdnim3
	*
	*Valor Total - Impuesto 3 (Moneda Nacional)
	*
	* @parámetro Decimal $tfdnim3
	* @return Tfdnim3
	*/
	public function setTfdnim3($tfdnim3)
	{
	  $this->tfdnim3 = (Double) $tfdnim3;
	    return $this;
	}

	/**
	* Get tfdnim3
	*
	* @return null|Decimal
	*/
	public function getTfdnim3()
	{
		return $this->tfdnim3;
	}

	/**
	* Set tfdnpvt
	*
	*Valor Total - Precio de Venta (Moneda Nacional)
	*
	* @parámetro Decimal $tfdnpvt
	* @return Tfdnpvt
	*/
	public function setTfdnpvt($tfdnpvt)
	{
	  $this->tfdnpvt = (Double) $tfdnpvt;
	    return $this;
	}

	/**
	* Get tfdnpvt
	*
	* @return null|Decimal
	*/
	public function getTfdnpvt()
	{
		return $this->tfdnpvt;
	}

	/**
	* Set tfdevva
	*
	*Valor Total - Venta con Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tfdevva
	* @return Tfdevva
	*/
	public function setTfdevva($tfdevva)
	{
	  $this->tfdevva = (Double) $tfdevva;
	    return $this;
	}

	/**
	* Get tfdevva
	*
	* @return null|Decimal
	*/
	public function getTfdevva()
	{
		return $this->tfdevva;
	}

	/**
	* Set tfdecpi
	*
	*Valor Total - Venta aplica 0% del IVA (Moneda Extranjera)
	*
	* @parámetro Decimal $tfdecpi
	* @return Tfdecpi
	*/
	public function setTfdecpi($tfdecpi)
	{
	  $this->tfdecpi = (Double) $tfdecpi;
	    return $this;
	}

	/**
	* Get tfdecpi
	*
	* @return null|Decimal
	*/
	public function getTfdecpi()
	{
		return $this->tfdecpi;
	}

	/**
	* Set tfdevvi
	*
	*Valor Total - Venta con Impuesto (Moneda Extranjera)
	*
	* @parámetro Decimal $tfdevvi
	* @return Tfdevvi
	*/
	public function setTfdevvi($tfdevvi)
	{
	  $this->tfdevvi = (Double) $tfdevvi;
	    return $this;
	}

	/**
	* Get tfdevvi
	*
	* @return null|Decimal
	*/
	public function getTfdevvi()
	{
		return $this->tfdevvi;
	}

	/**
	* Set tfdeds1
	*
	*Valor Total - Descuento 1(Moneda Extranjera)
	*
	* @parámetro Decimal $tfdeds1
	* @return Tfdeds1
	*/
	public function setTfdeds1($tfdeds1)
	{
	  $this->tfdeds1 = (Double) $tfdeds1;
	    return $this;
	}

	/**
	* Get tfdeds1
	*
	* @return null|Decimal
	*/
	public function getTfdeds1()
	{
		return $this->tfdeds1;
	}

	/**
	* Set tfdeds2
	*
	*Valor Total - Descuento 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $tfdeds2
	* @return Tfdeds2
	*/
	public function setTfdeds2($tfdeds2)
	{
	  $this->tfdeds2 = (Double) $tfdeds2;
	    return $this;
	}

	/**
	* Get tfdeds2
	*
	* @return null|Decimal
	*/
	public function getTfdeds2()
	{
		return $this->tfdeds2;
	}

	/**
	* Set tfdeiva
	*
	*Valor Total - Impuesto 1 (Moneda Extranjera)
	*
	* @parámetro Decimal $tfdeiva
	* @return Tfdeiva
	*/
	public function setTfdeiva($tfdeiva)
	{
	  $this->tfdeiva = (Double) $tfdeiva;
	    return $this;
	}

	/**
	* Get tfdeiva
	*
	* @return null|Decimal
	*/
	public function getTfdeiva()
	{
		return $this->tfdeiva;
	}

	/**
	* Set tfdeice
	*
	*Valor Total - Impuesto 2 (Moneda Extranjera)
	*
	* @parámetro Decimal $tfdeice
	* @return Tfdeice
	*/
	public function setTfdeice($tfdeice)
	{
	  $this->tfdeice = (Double) $tfdeice;
	    return $this;
	}

	/**
	* Get tfdeice
	*
	* @return null|Decimal
	*/
	public function getTfdeice()
	{
		return $this->tfdeice;
	}

	/**
	* Set tfdeim3
	*
	*Valor Total - Impuesto 3 (Moneda Extranjera)
	*
	* @parámetro Decimal $tfdeim3
	* @return Tfdeim3
	*/
	public function setTfdeim3($tfdeim3)
	{
	  $this->tfdeim3 = (Double) $tfdeim3;
	    return $this;
	}

	/**
	* Get tfdeim3
	*
	* @return null|Decimal
	*/
	public function getTfdeim3()
	{
		return $this->tfdeim3;
	}

	/**
	* Set tfdepvt
	*
	*Valor Total - Precio de Venta (Moneda Extranjera)
	*
	* @parámetro Decimal $tfdepvt
	* @return Tfdepvt
	*/
	public function setTfdepvt($tfdepvt)
	{
	  $this->tfdepvt = (Double) $tfdepvt;
	    return $this;
	}

	/**
	* Get tfdepvt
	*
	* @return null|Decimal
	*/
	public function getTfdepvt()
	{
		return $this->tfdepvt;
	}

	/**
	* Set tfdlsec
	*
	*Secuencia de Lista
	*
	* @parámetro Decimal $tfdlsec
	* @return Tfdlsec
	*/
	public function setTfdlsec($tfdlsec)
	{
	  $this->tfdlsec = (Double) $tfdlsec;
	    return $this;
	}

	/**
	* Get tfdlsec
	*
	* @return null|Decimal
	*/
	public function getTfdlsec()
	{
		return $this->tfdlsec;
	}

	/**
	* Set tfddcta
	*
	*Código Clase de Cuenta
	*
	* @parámetro Integer $tfddcta
	* @return Tfddcta
	*/
	public function setTfddcta($tfddcta)
	{
	  $this->tfddcta = (Integer) $tfddcta;
	    return $this;
	}

	/**
	* Get tfddcta
	*
	* @return null|Integer
	*/
	public function getTfddcta()
	{
		return $this->tfddcta;
	}

	/**
	* Set tfdtdap
	*
	*Tipo Documento de Aplicación
	*
	* @parámetro String $tfdtdap
	* @return Tfdtdap
	*/
	public function setTfdtdap($tfdtdap)
	{
	  $this->tfdtdap = (String) $tfdtdap;
	    return $this;
	}

	/**
	* Get tfdtdap
	*
	* @return null|String
	*/
	public function getTfdtdap()
	{
		return $this->tfdtdap;
	}

	/**
	* Set tfdsdap
	*
	*Serie Documento de Aplicación
	*
	* @parámetro Decimal $tfdsdap
	* @return Tfdsdap
	*/
	public function setTfdsdap($tfdsdap)
	{
	  $this->tfdsdap = (Double) $tfdsdap;
	    return $this;
	}

	/**
	* Get tfdsdap
	*
	* @return null|Decimal
	*/
	public function getTfdsdap()
	{
		return $this->tfdsdap;
	}

	/**
	* Set tfdndap
	*
	*Número Documento de  Aplicación
	*
	* @parámetro Decimal $tfdndap
	* @return Tfdndap
	*/
	public function setTfdndap($tfdndap)
	{
	  $this->tfdndap = (Double) $tfdndap;
	    return $this;
	}

	/**
	* Get tfdndap
	*
	* @return null|Decimal
	*/
	public function getTfdndap()
	{
		return $this->tfdndap;
	}

	/**
	* Set tfdobsf
	*
	*Guarda información de los descuentos de detalle aplicados.
	*
	* @parámetro String $tfdobsf
	* @return Tfdobsf
	*/
	public function setTfdobsf($tfdobsf)
	{
	  $this->tfdobsf = (String) $tfdobsf;
	    return $this;
	}

	/**
	* Get tfdobsf
	*
	* @return null|String
	*/
	public function getTfdobsf()
	{
		return $this->tfdobsf;
	}

	/**
	* Set tfdobsi
	*
	*Información de los descuentos de cabecera aplicados a la factura.
	*
	* @parámetro String $tfdobsi
	* @return Tfdobsi
	*/
	public function setTfdobsi($tfdobsi)
	{
	  $this->tfdobsi = (String) $tfdobsi;
	    return $this;
	}

	/**
	* Get tfdobsi
	*
	* @return null|String
	*/
	public function getTfdobsi()
	{
		return $this->tfdobsi;
	}

	/**
	* Set tfdusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tfdusuc
	* @return Tfdusuc
	*/
	public function setTfdusuc($tfdusuc)
	{
	  $this->tfdusuc = (String) $tfdusuc;
	    return $this;
	}

	/**
	* Get tfdusuc
	*
	* @return null|String
	*/
	public function getTfdusuc()
	{
		return $this->tfdusuc;
	}

	/**
	* Set tfdfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tfdfecc
	* @return Tfdfecc
	*/
	public function setTfdfecc($tfdfecc)
	{
	  $this->tfdfecc = (String) $tfdfecc;
	    return $this;
	}

	/**
	* Get tfdfecc
	*
	* @return null|Date
	*/
	public function getTfdfecc()
	{
		return $this->tfdfecc;
	}

	/**
	* Set tfdusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tfdusum
	* @return Tfdusum
	*/
	public function setTfdusum($tfdusum)
	{
	  $this->tfdusum = (String) $tfdusum;
	    return $this;
	}

	/**
	* Get tfdusum
	*
	* @return null|String
	*/
	public function getTfdusum()
	{
		return $this->tfdusum;
	}

	/**
	* Set tfdfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tfdfecm
	* @return Tfdfecm
	*/
	public function setTfdfecm($tfdfecm)
	{
	  $this->tfdfecm = (String) $tfdfecm;
	    return $this;
	}

	/**
	* Get tfdfecm
	*
	* @return null|Date
	*/
	public function getTfdfecm()
	{
		return $this->tfdfecm;
	}

	/**
	* Set tfdtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tfdtask
	* @return Tfdtask
	*/
	public function setTfdtask($tfdtask)
	{
	  $this->tfdtask = (String) $tfdtask;
	    return $this;
	}

	/**
	* Get tfdtask
	*
	* @return null|String
	*/
	public function getTfdtask()
	{
		return $this->tfdtask;
	}

	/**
	* Set tfdpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tfdpara
	* @return Tfdpara
	*/
	public function setTfdpara($tfdpara)
	{
	  $this->tfdpara = (Integer) $tfdpara;
	    return $this;
	}

	/**
	* Get tfdpara
	*
	* @return null|Integer
	*/
	public function getTfdpara()
	{
		return $this->tfdpara;
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

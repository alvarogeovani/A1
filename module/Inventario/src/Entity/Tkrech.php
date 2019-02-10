<?php
 /**
 * Model of the Tkrech table
 *
 * It is used to convert the   Tkrech entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tkrech
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tkrech
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Registrar Ordenes de Compras
		*/
		protected $krhsecu;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Ejercicio Económico
		*/
		protected $krhejer;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Periodo Contable
		*/
		protected $krhperi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Documento
		*/
		protected $krhndoc;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Documento
		*/
		protected $krhfech;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro de Cuentas por Pagar
		*/
		protected $krhrcxp;
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
		* Nombre del Proveedor
		*/
		protected $srhonom;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* RUC del Proveedor
		*/
		protected $srhoruc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Artículo Comprado
		*/
		protected $krharti;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Tipo Cambio
		*/
		protected $krhtcam;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor de la Venta  con Impuesto
		*/
		protected $krhvalv;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Venta con Impuesto
		*/
		protected $krhcval;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Venta con Impuesto
		*/
		protected $krhmval;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Valor con impuesto
		*/
		protected $krhvali;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Venta sin Impuesto
		*/
		protected $krhcvai;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Venta sin Impuesto
		*/
		protected $krhmvai;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Descuento
		*/
		protected $krhdsct;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Descuento
		*/
		protected $krhcdsc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Descuento
		*/
		protected $krhmdsc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Impuesto 1
		*/
		protected $krhimp1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Impuesto 1
		*/
		protected $krhcim1;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Impuesto 1
		*/
		protected $krhmim1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Impuesto 2
		*/
		protected $krhimp2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Impuesto 2
		*/
		protected $krhcim2;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Impuesto 2
		*/
		protected $krhmim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Impuesto 3
		*/
		protected $krhimp3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Impuesto 3
		*/
		protected $krhcim3;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Impuesto 3
		*/
		protected $krhmim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Impuesto 4
		*/
		protected $krhimp4;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Impuesto 4
		*/
		protected $krhcim4;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Impuesto 4
		*/
		protected $krhmim4;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Precio de Venta
		*/
		protected $krhpvta;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Precio de Venta
		*/
		protected $krhcpvt;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Precio de Venta
		*/
		protected $krhmpvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Retención 1
		*/
		protected $krhret1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Retención 1
		*/
		protected $krhcre1;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Retención 1
		*/
		protected $krhmre1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Retención 2
		*/
		protected $krhret2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Retención 2
		*/
		protected $krhcre2;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Retención 2
		*/
		protected $krhmre2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Concepto Contable
		*/
		protected $krhconc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Asiento
		*/
		protected $krhasto;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Centro de Costo
		*/
		protected $bcdccve;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Tipo de Actividad
		*/
		protected $btatipo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Tipo de Gasto
		*/
		protected $btgtipo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo Documento Referencial
		*/
		protected $krhtref;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número Documento Referencial
		*/
		protected $krhnref;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Vencimiento
		*/
		protected $krhfeve;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* No Domiciliado
		*/
		protected $krhndom;
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
		* Situación del Registro de Compras
		*/
		protected $krhsitu;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Referencia
		*/
		protected $krhfref;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $krhusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $krhfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $krhusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $krhfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $krhtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $krhpara;

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
	* Name of the table: tkrech
	* 
	 */
	const TABLE="tkrech";

	/**
	*Primary key
*/
		 const PKEY = "krhsecu";



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
		throw new \Exception('Class Entity: Tkrech Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tkrech. Invalid specified property: get'.$name);
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
	* Set krhsecu
	*
	*Estos datos se ingresan en la Opción: Registrar Ordenes de Compras
	*
	* @parámetro Integer $krhsecu
	* @return Krhsecu
	*/
	public function setKrhsecu($krhsecu)
	{
	  $this->krhsecu = (Integer) $krhsecu;
	    return $this;
	}

	/**
	* Get krhsecu
	*
	* @return null|Integer
	*/
	public function getKrhsecu()
	{
		return $this->krhsecu;
	}

	/**
	* Set krhejer
	*
	*Ejercicio Económico
	*
	* @parámetro Decimal $krhejer
	* @return Krhejer
	*/
	public function setKrhejer($krhejer)
	{
	  $this->krhejer = (Double) $krhejer;
	    return $this;
	}

	/**
	* Get krhejer
	*
	* @return null|Decimal
	*/
	public function getKrhejer()
	{
		return $this->krhejer;
	}

	/**
	* Set krhperi
	*
	*Periodo Contable
	*
	* @parámetro Decimal $krhperi
	* @return Krhperi
	*/
	public function setKrhperi($krhperi)
	{
	  $this->krhperi = (Double) $krhperi;
	    return $this;
	}

	/**
	* Get krhperi
	*
	* @return null|Decimal
	*/
	public function getKrhperi()
	{
		return $this->krhperi;
	}

	/**
	* Set krhndoc
	*
	*Número de Documento
	*
	* @parámetro String $krhndoc
	* @return Krhndoc
	*/
	public function setKrhndoc($krhndoc)
	{
	  $this->krhndoc = (String) $krhndoc;
	    return $this;
	}

	/**
	* Get krhndoc
	*
	* @return null|String
	*/
	public function getKrhndoc()
	{
		return $this->krhndoc;
	}

	/**
	* Set krhfech
	*
	*Fecha de Documento
	*
	* @parámetro Date $krhfech
	* @return Krhfech
	*/
	public function setKrhfech($krhfech)
	{
	  $this->krhfech = (String) $krhfech;
	    return $this;
	}

	/**
	* Get krhfech
	*
	* @return null|Date
	*/
	public function getKrhfech()
	{
		return $this->krhfech;
	}

	/**
	* Set krhrcxp
	*
	*Registro de Cuentas por Pagar
	*
	* @parámetro String $krhrcxp
	* @return Krhrcxp
	*/
	public function setKrhrcxp($krhrcxp)
	{
	  $this->krhrcxp = (String) $krhrcxp;
	    return $this;
	}

	/**
	* Get krhrcxp
	*
	* @return null|String
	*/
	public function getKrhrcxp()
	{
		return $this->krhrcxp;
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
	* Set srhonom
	*
	*Nombre del Proveedor
	*
	* @parámetro String $srhonom
	* @return Srhonom
	*/
	public function setSrhonom($srhonom)
	{
	  $this->srhonom = (String) $srhonom;
	    return $this;
	}

	/**
	* Get srhonom
	*
	* @return null|String
	*/
	public function getSrhonom()
	{
		return $this->srhonom;
	}

	/**
	* Set srhoruc
	*
	*RUC del Proveedor
	*
	* @parámetro String $srhoruc
	* @return Srhoruc
	*/
	public function setSrhoruc($srhoruc)
	{
	  $this->srhoruc = (String) $srhoruc;
	    return $this;
	}

	/**
	* Get srhoruc
	*
	* @return null|String
	*/
	public function getSrhoruc()
	{
		return $this->srhoruc;
	}

	/**
	* Set krharti
	*
	*Artículo Comprado
	*
	* @parámetro String $krharti
	* @return Krharti
	*/
	public function setKrharti($krharti)
	{
	  $this->krharti = (String) $krharti;
	    return $this;
	}

	/**
	* Get krharti
	*
	* @return null|String
	*/
	public function getKrharti()
	{
		return $this->krharti;
	}

	/**
	* Set krhtcam
	*
	*Tipo Cambio
	*
	* @parámetro Decimal $krhtcam
	* @return Krhtcam
	*/
	public function setKrhtcam($krhtcam)
	{
	  $this->krhtcam = (Double) $krhtcam;
	    return $this;
	}

	/**
	* Get krhtcam
	*
	* @return null|Decimal
	*/
	public function getKrhtcam()
	{
		return $this->krhtcam;
	}

	/**
	* Set krhvalv
	*
	*Valor de la Venta  con Impuesto
	*
	* @parámetro Decimal $krhvalv
	* @return Krhvalv
	*/
	public function setKrhvalv($krhvalv)
	{
	  $this->krhvalv = (Double) $krhvalv;
	    return $this;
	}

	/**
	* Get krhvalv
	*
	* @return null|Decimal
	*/
	public function getKrhvalv()
	{
		return $this->krhvalv;
	}

	/**
	* Set krhcval
	*
	*Cuenta Contable Venta con Impuesto
	*
	* @parámetro String $krhcval
	* @return Krhcval
	*/
	public function setKrhcval($krhcval)
	{
	  $this->krhcval = (String) $krhcval;
	    return $this;
	}

	/**
	* Get krhcval
	*
	* @return null|String
	*/
	public function getKrhcval()
	{
		return $this->krhcval;
	}

	/**
	* Set krhmval
	*
	*Tipo de Movimiento Venta con Impuesto
	*
	* @parámetro Integer $krhmval
	* @return Krhmval
	*/
	public function setKrhmval($krhmval)
	{
	  $this->krhmval = (Integer) $krhmval;
	    return $this;
	}

	/**
	* Get krhmval
	*
	* @return null|Integer
	*/
	public function getKrhmval()
	{
		return $this->krhmval;
	}

	/**
	* Set krhvali
	*
	*Valor con impuesto
	*
	* @parámetro String $krhvali
	* @return Krhvali
	*/
	public function setKrhvali($krhvali)
	{
	  $this->krhvali = (String) $krhvali;
	    return $this;
	}

	/**
	* Get krhvali
	*
	* @return null|String
	*/
	public function getKrhvali()
	{
		return $this->krhvali;
	}

	/**
	* Set krhcvai
	*
	*Cuenta Contable Venta sin Impuesto
	*
	* @parámetro String $krhcvai
	* @return Krhcvai
	*/
	public function setKrhcvai($krhcvai)
	{
	  $this->krhcvai = (String) $krhcvai;
	    return $this;
	}

	/**
	* Get krhcvai
	*
	* @return null|String
	*/
	public function getKrhcvai()
	{
		return $this->krhcvai;
	}

	/**
	* Set krhmvai
	*
	*Tipo de Movimiento Venta sin Impuesto
	*
	* @parámetro Integer $krhmvai
	* @return Krhmvai
	*/
	public function setKrhmvai($krhmvai)
	{
	  $this->krhmvai = (Integer) $krhmvai;
	    return $this;
	}

	/**
	* Get krhmvai
	*
	* @return null|Integer
	*/
	public function getKrhmvai()
	{
		return $this->krhmvai;
	}

	/**
	* Set krhdsct
	*
	*Descuento
	*
	* @parámetro Decimal $krhdsct
	* @return Krhdsct
	*/
	public function setKrhdsct($krhdsct)
	{
	  $this->krhdsct = (Double) $krhdsct;
	    return $this;
	}

	/**
	* Get krhdsct
	*
	* @return null|Decimal
	*/
	public function getKrhdsct()
	{
		return $this->krhdsct;
	}

	/**
	* Set krhcdsc
	*
	*Cuenta Contable Descuento
	*
	* @parámetro String $krhcdsc
	* @return Krhcdsc
	*/
	public function setKrhcdsc($krhcdsc)
	{
	  $this->krhcdsc = (String) $krhcdsc;
	    return $this;
	}

	/**
	* Get krhcdsc
	*
	* @return null|String
	*/
	public function getKrhcdsc()
	{
		return $this->krhcdsc;
	}

	/**
	* Set krhmdsc
	*
	*Tipo de Movimiento Descuento
	*
	* @parámetro Integer $krhmdsc
	* @return Krhmdsc
	*/
	public function setKrhmdsc($krhmdsc)
	{
	  $this->krhmdsc = (Integer) $krhmdsc;
	    return $this;
	}

	/**
	* Get krhmdsc
	*
	* @return null|Integer
	*/
	public function getKrhmdsc()
	{
		return $this->krhmdsc;
	}

	/**
	* Set krhimp1
	*
	*Impuesto 1
	*
	* @parámetro Decimal $krhimp1
	* @return Krhimp1
	*/
	public function setKrhimp1($krhimp1)
	{
	  $this->krhimp1 = (Double) $krhimp1;
	    return $this;
	}

	/**
	* Get krhimp1
	*
	* @return null|Decimal
	*/
	public function getKrhimp1()
	{
		return $this->krhimp1;
	}

	/**
	* Set krhcim1
	*
	*Cuenta Contable Impuesto 1
	*
	* @parámetro String $krhcim1
	* @return Krhcim1
	*/
	public function setKrhcim1($krhcim1)
	{
	  $this->krhcim1 = (String) $krhcim1;
	    return $this;
	}

	/**
	* Get krhcim1
	*
	* @return null|String
	*/
	public function getKrhcim1()
	{
		return $this->krhcim1;
	}

	/**
	* Set krhmim1
	*
	*Tipo de Movimiento Impuesto 1
	*
	* @parámetro Integer $krhmim1
	* @return Krhmim1
	*/
	public function setKrhmim1($krhmim1)
	{
	  $this->krhmim1 = (Integer) $krhmim1;
	    return $this;
	}

	/**
	* Get krhmim1
	*
	* @return null|Integer
	*/
	public function getKrhmim1()
	{
		return $this->krhmim1;
	}

	/**
	* Set krhimp2
	*
	*Impuesto 2
	*
	* @parámetro Decimal $krhimp2
	* @return Krhimp2
	*/
	public function setKrhimp2($krhimp2)
	{
	  $this->krhimp2 = (Double) $krhimp2;
	    return $this;
	}

	/**
	* Get krhimp2
	*
	* @return null|Decimal
	*/
	public function getKrhimp2()
	{
		return $this->krhimp2;
	}

	/**
	* Set krhcim2
	*
	*Cuenta Contable Impuesto 2
	*
	* @parámetro String $krhcim2
	* @return Krhcim2
	*/
	public function setKrhcim2($krhcim2)
	{
	  $this->krhcim2 = (String) $krhcim2;
	    return $this;
	}

	/**
	* Get krhcim2
	*
	* @return null|String
	*/
	public function getKrhcim2()
	{
		return $this->krhcim2;
	}

	/**
	* Set krhmim2
	*
	*Tipo de Movimiento Impuesto 2
	*
	* @parámetro Integer $krhmim2
	* @return Krhmim2
	*/
	public function setKrhmim2($krhmim2)
	{
	  $this->krhmim2 = (Integer) $krhmim2;
	    return $this;
	}

	/**
	* Get krhmim2
	*
	* @return null|Integer
	*/
	public function getKrhmim2()
	{
		return $this->krhmim2;
	}

	/**
	* Set krhimp3
	*
	*Impuesto 3
	*
	* @parámetro Decimal $krhimp3
	* @return Krhimp3
	*/
	public function setKrhimp3($krhimp3)
	{
	  $this->krhimp3 = (Double) $krhimp3;
	    return $this;
	}

	/**
	* Get krhimp3
	*
	* @return null|Decimal
	*/
	public function getKrhimp3()
	{
		return $this->krhimp3;
	}

	/**
	* Set krhcim3
	*
	*Cuenta Contable Impuesto 3
	*
	* @parámetro String $krhcim3
	* @return Krhcim3
	*/
	public function setKrhcim3($krhcim3)
	{
	  $this->krhcim3 = (String) $krhcim3;
	    return $this;
	}

	/**
	* Get krhcim3
	*
	* @return null|String
	*/
	public function getKrhcim3()
	{
		return $this->krhcim3;
	}

	/**
	* Set krhmim3
	*
	*Tipo de Movimiento Impuesto 3
	*
	* @parámetro Integer $krhmim3
	* @return Krhmim3
	*/
	public function setKrhmim3($krhmim3)
	{
	  $this->krhmim3 = (Integer) $krhmim3;
	    return $this;
	}

	/**
	* Get krhmim3
	*
	* @return null|Integer
	*/
	public function getKrhmim3()
	{
		return $this->krhmim3;
	}

	/**
	* Set krhimp4
	*
	*Impuesto 4
	*
	* @parámetro Decimal $krhimp4
	* @return Krhimp4
	*/
	public function setKrhimp4($krhimp4)
	{
	  $this->krhimp4 = (Double) $krhimp4;
	    return $this;
	}

	/**
	* Get krhimp4
	*
	* @return null|Decimal
	*/
	public function getKrhimp4()
	{
		return $this->krhimp4;
	}

	/**
	* Set krhcim4
	*
	*Cuenta Contable Impuesto 4
	*
	* @parámetro String $krhcim4
	* @return Krhcim4
	*/
	public function setKrhcim4($krhcim4)
	{
	  $this->krhcim4 = (String) $krhcim4;
	    return $this;
	}

	/**
	* Get krhcim4
	*
	* @return null|String
	*/
	public function getKrhcim4()
	{
		return $this->krhcim4;
	}

	/**
	* Set krhmim4
	*
	*Tipo de Movimiento Impuesto 4
	*
	* @parámetro Integer $krhmim4
	* @return Krhmim4
	*/
	public function setKrhmim4($krhmim4)
	{
	  $this->krhmim4 = (Integer) $krhmim4;
	    return $this;
	}

	/**
	* Get krhmim4
	*
	* @return null|Integer
	*/
	public function getKrhmim4()
	{
		return $this->krhmim4;
	}

	/**
	* Set krhpvta
	*
	*Precio de Venta
	*
	* @parámetro Decimal $krhpvta
	* @return Krhpvta
	*/
	public function setKrhpvta($krhpvta)
	{
	  $this->krhpvta = (Double) $krhpvta;
	    return $this;
	}

	/**
	* Get krhpvta
	*
	* @return null|Decimal
	*/
	public function getKrhpvta()
	{
		return $this->krhpvta;
	}

	/**
	* Set krhcpvt
	*
	*Cuenta Contable Precio de Venta
	*
	* @parámetro String $krhcpvt
	* @return Krhcpvt
	*/
	public function setKrhcpvt($krhcpvt)
	{
	  $this->krhcpvt = (String) $krhcpvt;
	    return $this;
	}

	/**
	* Get krhcpvt
	*
	* @return null|String
	*/
	public function getKrhcpvt()
	{
		return $this->krhcpvt;
	}

	/**
	* Set krhmpvt
	*
	*Tipo de Movimiento Precio de Venta
	*
	* @parámetro Integer $krhmpvt
	* @return Krhmpvt
	*/
	public function setKrhmpvt($krhmpvt)
	{
	  $this->krhmpvt = (Integer) $krhmpvt;
	    return $this;
	}

	/**
	* Get krhmpvt
	*
	* @return null|Integer
	*/
	public function getKrhmpvt()
	{
		return $this->krhmpvt;
	}

	/**
	* Set krhret1
	*
	*Retención 1
	*
	* @parámetro Decimal $krhret1
	* @return Krhret1
	*/
	public function setKrhret1($krhret1)
	{
	  $this->krhret1 = (Double) $krhret1;
	    return $this;
	}

	/**
	* Get krhret1
	*
	* @return null|Decimal
	*/
	public function getKrhret1()
	{
		return $this->krhret1;
	}

	/**
	* Set krhcre1
	*
	*Cuenta Contable Retención 1
	*
	* @parámetro String $krhcre1
	* @return Krhcre1
	*/
	public function setKrhcre1($krhcre1)
	{
	  $this->krhcre1 = (String) $krhcre1;
	    return $this;
	}

	/**
	* Get krhcre1
	*
	* @return null|String
	*/
	public function getKrhcre1()
	{
		return $this->krhcre1;
	}

	/**
	* Set krhmre1
	*
	*Tipo de Movimiento Retención 1
	*
	* @parámetro Integer $krhmre1
	* @return Krhmre1
	*/
	public function setKrhmre1($krhmre1)
	{
	  $this->krhmre1 = (Integer) $krhmre1;
	    return $this;
	}

	/**
	* Get krhmre1
	*
	* @return null|Integer
	*/
	public function getKrhmre1()
	{
		return $this->krhmre1;
	}

	/**
	* Set krhret2
	*
	*Retención 2
	*
	* @parámetro Decimal $krhret2
	* @return Krhret2
	*/
	public function setKrhret2($krhret2)
	{
	  $this->krhret2 = (Double) $krhret2;
	    return $this;
	}

	/**
	* Get krhret2
	*
	* @return null|Decimal
	*/
	public function getKrhret2()
	{
		return $this->krhret2;
	}

	/**
	* Set krhcre2
	*
	*Cuenta Contable Retención 2
	*
	* @parámetro String $krhcre2
	* @return Krhcre2
	*/
	public function setKrhcre2($krhcre2)
	{
	  $this->krhcre2 = (String) $krhcre2;
	    return $this;
	}

	/**
	* Get krhcre2
	*
	* @return null|String
	*/
	public function getKrhcre2()
	{
		return $this->krhcre2;
	}

	/**
	* Set krhmre2
	*
	*Tipo de Movimiento Retención 2
	*
	* @parámetro Integer $krhmre2
	* @return Krhmre2
	*/
	public function setKrhmre2($krhmre2)
	{
	  $this->krhmre2 = (Integer) $krhmre2;
	    return $this;
	}

	/**
	* Get krhmre2
	*
	* @return null|Integer
	*/
	public function getKrhmre2()
	{
		return $this->krhmre2;
	}

	/**
	* Set krhconc
	*
	*Concepto Contable
	*
	* @parámetro Decimal $krhconc
	* @return Krhconc
	*/
	public function setKrhconc($krhconc)
	{
	  $this->krhconc = (Double) $krhconc;
	    return $this;
	}

	/**
	* Get krhconc
	*
	* @return null|Decimal
	*/
	public function getKrhconc()
	{
		return $this->krhconc;
	}

	/**
	* Set krhasto
	*
	*Número de Asiento
	*
	* @parámetro String $krhasto
	* @return Krhasto
	*/
	public function setKrhasto($krhasto)
	{
	  $this->krhasto = (String) $krhasto;
	    return $this;
	}

	/**
	* Get krhasto
	*
	* @return null|String
	*/
	public function getKrhasto()
	{
		return $this->krhasto;
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
	* Set btatipo
	*
	*Código Tipo de Actividad
	*
	* @parámetro String $btatipo
	* @return Btatipo
	*/
	public function setBtatipo($btatipo)
	{
	  $this->btatipo = (String) $btatipo;
	    return $this;
	}

	/**
	* Get btatipo
	*
	* @return null|String
	*/
	public function getBtatipo()
	{
		return $this->btatipo;
	}

	/**
	* Set btgtipo
	*
	*Código Tipo de Gasto
	*
	* @parámetro String $btgtipo
	* @return Btgtipo
	*/
	public function setBtgtipo($btgtipo)
	{
	  $this->btgtipo = (String) $btgtipo;
	    return $this;
	}

	/**
	* Get btgtipo
	*
	* @return null|String
	*/
	public function getBtgtipo()
	{
		return $this->btgtipo;
	}

	/**
	* Set krhtref
	*
	*Tipo Documento Referencial
	*
	* @parámetro String $krhtref
	* @return Krhtref
	*/
	public function setKrhtref($krhtref)
	{
	  $this->krhtref = (String) $krhtref;
	    return $this;
	}

	/**
	* Get krhtref
	*
	* @return null|String
	*/
	public function getKrhtref()
	{
		return $this->krhtref;
	}

	/**
	* Set krhnref
	*
	*Número Documento Referencial
	*
	* @parámetro String $krhnref
	* @return Krhnref
	*/
	public function setKrhnref($krhnref)
	{
	  $this->krhnref = (String) $krhnref;
	    return $this;
	}

	/**
	* Get krhnref
	*
	* @return null|String
	*/
	public function getKrhnref()
	{
		return $this->krhnref;
	}

	/**
	* Set krhfeve
	*
	*Fecha de Vencimiento
	*
	* @parámetro Date $krhfeve
	* @return Krhfeve
	*/
	public function setKrhfeve($krhfeve)
	{
	  $this->krhfeve = (String) $krhfeve;
	    return $this;
	}

	/**
	* Get krhfeve
	*
	* @return null|Date
	*/
	public function getKrhfeve()
	{
		return $this->krhfeve;
	}

	/**
	* Set krhndom
	*
	*No Domiciliado
	*
	* @parámetro Integer $krhndom
	* @return Krhndom
	*/
	public function setKrhndom($krhndom)
	{
	  $this->krhndom = (Integer) $krhndom;
	    return $this;
	}

	/**
	* Get krhndom
	*
	* @return null|Integer
	*/
	public function getKrhndom()
	{
		return $this->krhndom;
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
	* Set krhsitu
	*
	*Situación del Registro de Compras
	*
	* @parámetro String $krhsitu
	* @return Krhsitu
	*/
	public function setKrhsitu($krhsitu)
	{
	  $this->krhsitu = (String) $krhsitu;
	    return $this;
	}

	/**
	* Get krhsitu
	*
	* @return null|String
	*/
	public function getKrhsitu()
	{
		return $this->krhsitu;
	}

	/**
	* Set krhfref
	*
	*Fecha de Referencia
	*
	* @parámetro Date $krhfref
	* @return Krhfref
	*/
	public function setKrhfref($krhfref)
	{
	  $this->krhfref = (String) $krhfref;
	    return $this;
	}

	/**
	* Get krhfref
	*
	* @return null|Date
	*/
	public function getKrhfref()
	{
		return $this->krhfref;
	}

	/**
	* Set krhusuc
	*
	*Usuario de creación
	*
	* @parámetro String $krhusuc
	* @return Krhusuc
	*/
	public function setKrhusuc($krhusuc)
	{
	  $this->krhusuc = (String) $krhusuc;
	    return $this;
	}

	/**
	* Get krhusuc
	*
	* @return null|String
	*/
	public function getKrhusuc()
	{
		return $this->krhusuc;
	}

	/**
	* Set krhfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $krhfecc
	* @return Krhfecc
	*/
	public function setKrhfecc($krhfecc)
	{
	  $this->krhfecc = (String) $krhfecc;
	    return $this;
	}

	/**
	* Get krhfecc
	*
	* @return null|Date
	*/
	public function getKrhfecc()
	{
		return $this->krhfecc;
	}

	/**
	* Set krhusum
	*
	*Usuario de modificación
	*
	* @parámetro String $krhusum
	* @return Krhusum
	*/
	public function setKrhusum($krhusum)
	{
	  $this->krhusum = (String) $krhusum;
	    return $this;
	}

	/**
	* Get krhusum
	*
	* @return null|String
	*/
	public function getKrhusum()
	{
		return $this->krhusum;
	}

	/**
	* Set krhfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $krhfecm
	* @return Krhfecm
	*/
	public function setKrhfecm($krhfecm)
	{
	  $this->krhfecm = (String) $krhfecm;
	    return $this;
	}

	/**
	* Get krhfecm
	*
	* @return null|Date
	*/
	public function getKrhfecm()
	{
		return $this->krhfecm;
	}

	/**
	* Set krhtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $krhtask
	* @return Krhtask
	*/
	public function setKrhtask($krhtask)
	{
	  $this->krhtask = (String) $krhtask;
	    return $this;
	}

	/**
	* Get krhtask
	*
	* @return null|String
	*/
	public function getKrhtask()
	{
		return $this->krhtask;
	}

	/**
	* Set krhpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $krhpara
	* @return Krhpara
	*/
	public function setKrhpara($krhpara)
	{
	  $this->krhpara = (Integer) $krhpara;
	    return $this;
	}

	/**
	* Get krhpara
	*
	* @return null|Integer
	*/
	public function getKrhpara()
	{
		return $this->krhpara;
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

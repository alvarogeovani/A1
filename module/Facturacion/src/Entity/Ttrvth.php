<?php
 /**
 * Model of the Ttrvth table
 *
 * It is used to convert the   Ttrvth entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttrvth
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttrvth
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en el Proceso de: Facturación
		*/
		protected $trvsecu;
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
		* Estos datos se ingresan en la Opción: Facturación Normal
		*/
		protected $tphsecu;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Secuencial auxiliar de Notas de Crédito por devolución
		*/
		protected $trvsncd;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Secuencial auxiliar de Notas de Crédito o Débito
		*/
		protected $trvscyd;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Ejercicio Económico
		*/
		protected $bperano;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Periodo Contable
		*/
		protected $bpernum;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de Documento Comercial
		*/
		protected $tbdtipo;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Número de Documento
		*/
		protected $trvndoc;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Documento
		*/
		protected $trvfech;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre/ Razón Social del Distribuidor
		*/
		protected $tdisnom;
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
		* Tipo de Cambio
		*/
		protected $trvtcam;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor de la Venta con Impuesto
		*/
		protected $trvvalv;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Venta con Impuesto
		*/
		protected $trvcval;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Venta con Impuesto
		*/
		protected $trvmval;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor de la Venta sin Impuesto
		*/
		protected $trvvali;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Venta sin Impuesto
		*/
		protected $trvcvai;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo Movimiento Venta sin Impuesto
		*/
		protected $trvmvai;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Descuento
		*/
		protected $trvdsct;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable de Descuento
		*/
		protected $trvcdsc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Descuento
		*/
		protected $trvmdsc;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Impuesto 1
		*/
		protected $trvviva;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable de Impuesto 1
		*/
		protected $trvciva;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Impuesto 1
		*/
		protected $trvmiva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Impuesto 2
		*/
		protected $trvimp2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable de Impuesto 2
		*/
		protected $trvcim2;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Impuesto 2
		*/
		protected $trvmim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Impuesto 3
		*/
		protected $trvimp3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable de Impuesto 3
		*/
		protected $trvcim3;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Impuesto 3
		*/
		protected $trvmim3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Retención1
		*/
		protected $trvret1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable de Retención 1
		*/
		protected $trvcre1;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Retención 1
		*/
		protected $trvmre1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Retención 2
		*/
		protected $trvret2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Retención 2
		*/
		protected $trvcre2;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Retención 2
		*/
		protected $trvmre2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Precio de Venta
		*/
		protected $trvpvta;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cuenta Contable Precio Venta
		*/
		protected $trvcpvt;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Movimiento Precio Venta
		*/
		protected $trvmpvt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Concepto Contable
		*/
		protected $trvconc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de Documento Referencial
		*/
		protected $trvtref;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Documento Referencial
		*/
		protected $trvnref;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Asiento
		*/
		protected $trvasto;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Retención Grabada
		*/
		protected $trvgrab;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Proceso
		*/
		protected $trvfpro;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Hora de Proceso
		*/
		protected $trvhpro;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Vencimiento
		*/
		protected $trvfeve;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* No Domiciliado
		*/
		protected $trvndom;
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
		* RUC del Distribuidor
		*/
		protected $tdisruc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Situación del Registro de Ventas
		*/
		protected $trvsitu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Centro de Costo
		*/
		protected $bcdccve;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Pedido (N=Normal,V=Varios)
		*/
		protected $trvtipe;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $trvusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $trvfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $trvusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $trvfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $trvtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $trvpara;

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
	* Name of the table: ttrvth
	* 
	 */
	const TABLE="ttrvth";

	/**
	*Primary key
*/
		 const PKEY = "trvsecu";



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
		throw new \Exception('Class Entity: Ttrvth Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttrvth. Invalid specified property: get'.$name);
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
	* Set trvsecu
	*
	*Estos datos se ingresan en el Proceso de: Facturación
	*
	* @parámetro Integer $trvsecu
	* @return Trvsecu
	*/
	public function setTrvsecu($trvsecu)
	{
	  $this->trvsecu = (Integer) $trvsecu;
	    return $this;
	}

	/**
	* Get trvsecu
	*
	* @return null|Integer
	*/
	public function getTrvsecu()
	{
		return $this->trvsecu;
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
	* Set trvsncd
	*
	*Secuencial auxiliar de Notas de Crédito por devolución
	*
	* @parámetro Integer $trvsncd
	* @return Trvsncd
	*/
	public function setTrvsncd($trvsncd)
	{
	  $this->trvsncd = (Integer) $trvsncd;
	    return $this;
	}

	/**
	* Get trvsncd
	*
	* @return null|Integer
	*/
	public function getTrvsncd()
	{
		return $this->trvsncd;
	}

	/**
	* Set trvscyd
	*
	*Secuencial auxiliar de Notas de Crédito o Débito
	*
	* @parámetro Integer $trvscyd
	* @return Trvscyd
	*/
	public function setTrvscyd($trvscyd)
	{
	  $this->trvscyd = (Integer) $trvscyd;
	    return $this;
	}

	/**
	* Get trvscyd
	*
	* @return null|Integer
	*/
	public function getTrvscyd()
	{
		return $this->trvscyd;
	}

	/**
	* Set bperano
	*
	*Ejercicio Económico
	*
	* @parámetro Integer $bperano
	* @return Bperano
	*/
	public function setBperano($bperano)
	{
	  $this->bperano = (Integer) $bperano;
	    return $this;
	}

	/**
	* Get bperano
	*
	* @return null|Integer
	*/
	public function getBperano()
	{
		return $this->bperano;
	}

	/**
	* Set bpernum
	*
	*Periodo Contable
	*
	* @parámetro Integer $bpernum
	* @return Bpernum
	*/
	public function setBpernum($bpernum)
	{
	  $this->bpernum = (Integer) $bpernum;
	    return $this;
	}

	/**
	* Get bpernum
	*
	* @return null|Integer
	*/
	public function getBpernum()
	{
		return $this->bpernum;
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
	* Set trvndoc
	*
	*Número de Documento
	*
	* @parámetro String $trvndoc
	* @return Trvndoc
	*/
	public function setTrvndoc($trvndoc)
	{
	  $this->trvndoc = (String) $trvndoc;
	    return $this;
	}

	/**
	* Get trvndoc
	*
	* @return null|String
	*/
	public function getTrvndoc()
	{
		return $this->trvndoc;
	}

	/**
	* Set trvfech
	*
	*Fecha de Documento
	*
	* @parámetro Date $trvfech
	* @return Trvfech
	*/
	public function setTrvfech($trvfech)
	{
	  $this->trvfech = (String) $trvfech;
	    return $this;
	}

	/**
	* Get trvfech
	*
	* @return null|Date
	*/
	public function getTrvfech()
	{
		return $this->trvfech;
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
	* Set trvtcam
	*
	*Tipo de Cambio
	*
	* @parámetro Decimal $trvtcam
	* @return Trvtcam
	*/
	public function setTrvtcam($trvtcam)
	{
	  $this->trvtcam = (Double) $trvtcam;
	    return $this;
	}

	/**
	* Get trvtcam
	*
	* @return null|Decimal
	*/
	public function getTrvtcam()
	{
		return $this->trvtcam;
	}

	/**
	* Set trvvalv
	*
	*Valor de la Venta con Impuesto
	*
	* @parámetro Decimal $trvvalv
	* @return Trvvalv
	*/
	public function setTrvvalv($trvvalv)
	{
	  $this->trvvalv = (Double) $trvvalv;
	    return $this;
	}

	/**
	* Get trvvalv
	*
	* @return null|Decimal
	*/
	public function getTrvvalv()
	{
		return $this->trvvalv;
	}

	/**
	* Set trvcval
	*
	*Cuenta Contable Venta con Impuesto
	*
	* @parámetro String $trvcval
	* @return Trvcval
	*/
	public function setTrvcval($trvcval)
	{
	  $this->trvcval = (String) $trvcval;
	    return $this;
	}

	/**
	* Get trvcval
	*
	* @return null|String
	*/
	public function getTrvcval()
	{
		return $this->trvcval;
	}

	/**
	* Set trvmval
	*
	*Tipo de Movimiento Venta con Impuesto
	*
	* @parámetro Integer $trvmval
	* @return Trvmval
	*/
	public function setTrvmval($trvmval)
	{
	  $this->trvmval = (Integer) $trvmval;
	    return $this;
	}

	/**
	* Get trvmval
	*
	* @return null|Integer
	*/
	public function getTrvmval()
	{
		return $this->trvmval;
	}

	/**
	* Set trvvali
	*
	*Valor de la Venta sin Impuesto
	*
	* @parámetro Decimal $trvvali
	* @return Trvvali
	*/
	public function setTrvvali($trvvali)
	{
	  $this->trvvali = (Double) $trvvali;
	    return $this;
	}

	/**
	* Get trvvali
	*
	* @return null|Decimal
	*/
	public function getTrvvali()
	{
		return $this->trvvali;
	}

	/**
	* Set trvcvai
	*
	*Cuenta Contable Venta sin Impuesto
	*
	* @parámetro String $trvcvai
	* @return Trvcvai
	*/
	public function setTrvcvai($trvcvai)
	{
	  $this->trvcvai = (String) $trvcvai;
	    return $this;
	}

	/**
	* Get trvcvai
	*
	* @return null|String
	*/
	public function getTrvcvai()
	{
		return $this->trvcvai;
	}

	/**
	* Set trvmvai
	*
	*Tipo Movimiento Venta sin Impuesto
	*
	* @parámetro Integer $trvmvai
	* @return Trvmvai
	*/
	public function setTrvmvai($trvmvai)
	{
	  $this->trvmvai = (Integer) $trvmvai;
	    return $this;
	}

	/**
	* Get trvmvai
	*
	* @return null|Integer
	*/
	public function getTrvmvai()
	{
		return $this->trvmvai;
	}

	/**
	* Set trvdsct
	*
	*Descuento
	*
	* @parámetro Decimal $trvdsct
	* @return Trvdsct
	*/
	public function setTrvdsct($trvdsct)
	{
	  $this->trvdsct = (Double) $trvdsct;
	    return $this;
	}

	/**
	* Get trvdsct
	*
	* @return null|Decimal
	*/
	public function getTrvdsct()
	{
		return $this->trvdsct;
	}

	/**
	* Set trvcdsc
	*
	*Cuenta Contable de Descuento
	*
	* @parámetro String $trvcdsc
	* @return Trvcdsc
	*/
	public function setTrvcdsc($trvcdsc)
	{
	  $this->trvcdsc = (String) $trvcdsc;
	    return $this;
	}

	/**
	* Get trvcdsc
	*
	* @return null|String
	*/
	public function getTrvcdsc()
	{
		return $this->trvcdsc;
	}

	/**
	* Set trvmdsc
	*
	*Tipo de Movimiento Descuento
	*
	* @parámetro Integer $trvmdsc
	* @return Trvmdsc
	*/
	public function setTrvmdsc($trvmdsc)
	{
	  $this->trvmdsc = (Integer) $trvmdsc;
	    return $this;
	}

	/**
	* Get trvmdsc
	*
	* @return null|Integer
	*/
	public function getTrvmdsc()
	{
		return $this->trvmdsc;
	}

	/**
	* Set trvviva
	*
	*Impuesto 1
	*
	* @parámetro Decimal $trvviva
	* @return Trvviva
	*/
	public function setTrvviva($trvviva)
	{
	  $this->trvviva = (Double) $trvviva;
	    return $this;
	}

	/**
	* Get trvviva
	*
	* @return null|Decimal
	*/
	public function getTrvviva()
	{
		return $this->trvviva;
	}

	/**
	* Set trvciva
	*
	*Cuenta Contable de Impuesto 1
	*
	* @parámetro String $trvciva
	* @return Trvciva
	*/
	public function setTrvciva($trvciva)
	{
	  $this->trvciva = (String) $trvciva;
	    return $this;
	}

	/**
	* Get trvciva
	*
	* @return null|String
	*/
	public function getTrvciva()
	{
		return $this->trvciva;
	}

	/**
	* Set trvmiva
	*
	*Tipo de Movimiento Impuesto 1
	*
	* @parámetro Integer $trvmiva
	* @return Trvmiva
	*/
	public function setTrvmiva($trvmiva)
	{
	  $this->trvmiva = (Integer) $trvmiva;
	    return $this;
	}

	/**
	* Get trvmiva
	*
	* @return null|Integer
	*/
	public function getTrvmiva()
	{
		return $this->trvmiva;
	}

	/**
	* Set trvimp2
	*
	*Impuesto 2
	*
	* @parámetro Decimal $trvimp2
	* @return Trvimp2
	*/
	public function setTrvimp2($trvimp2)
	{
	  $this->trvimp2 = (Double) $trvimp2;
	    return $this;
	}

	/**
	* Get trvimp2
	*
	* @return null|Decimal
	*/
	public function getTrvimp2()
	{
		return $this->trvimp2;
	}

	/**
	* Set trvcim2
	*
	*Cuenta Contable de Impuesto 2
	*
	* @parámetro String $trvcim2
	* @return Trvcim2
	*/
	public function setTrvcim2($trvcim2)
	{
	  $this->trvcim2 = (String) $trvcim2;
	    return $this;
	}

	/**
	* Get trvcim2
	*
	* @return null|String
	*/
	public function getTrvcim2()
	{
		return $this->trvcim2;
	}

	/**
	* Set trvmim2
	*
	*Tipo de Movimiento Impuesto 2
	*
	* @parámetro Integer $trvmim2
	* @return Trvmim2
	*/
	public function setTrvmim2($trvmim2)
	{
	  $this->trvmim2 = (Integer) $trvmim2;
	    return $this;
	}

	/**
	* Get trvmim2
	*
	* @return null|Integer
	*/
	public function getTrvmim2()
	{
		return $this->trvmim2;
	}

	/**
	* Set trvimp3
	*
	*Impuesto 3
	*
	* @parámetro Decimal $trvimp3
	* @return Trvimp3
	*/
	public function setTrvimp3($trvimp3)
	{
	  $this->trvimp3 = (Double) $trvimp3;
	    return $this;
	}

	/**
	* Get trvimp3
	*
	* @return null|Decimal
	*/
	public function getTrvimp3()
	{
		return $this->trvimp3;
	}

	/**
	* Set trvcim3
	*
	*Cuenta Contable de Impuesto 3
	*
	* @parámetro String $trvcim3
	* @return Trvcim3
	*/
	public function setTrvcim3($trvcim3)
	{
	  $this->trvcim3 = (String) $trvcim3;
	    return $this;
	}

	/**
	* Get trvcim3
	*
	* @return null|String
	*/
	public function getTrvcim3()
	{
		return $this->trvcim3;
	}

	/**
	* Set trvmim3
	*
	*Tipo de Movimiento Impuesto 3
	*
	* @parámetro Integer $trvmim3
	* @return Trvmim3
	*/
	public function setTrvmim3($trvmim3)
	{
	  $this->trvmim3 = (Integer) $trvmim3;
	    return $this;
	}

	/**
	* Get trvmim3
	*
	* @return null|Integer
	*/
	public function getTrvmim3()
	{
		return $this->trvmim3;
	}

	/**
	* Set trvret1
	*
	*Retención1
	*
	* @parámetro Decimal $trvret1
	* @return Trvret1
	*/
	public function setTrvret1($trvret1)
	{
	  $this->trvret1 = (Double) $trvret1;
	    return $this;
	}

	/**
	* Get trvret1
	*
	* @return null|Decimal
	*/
	public function getTrvret1()
	{
		return $this->trvret1;
	}

	/**
	* Set trvcre1
	*
	*Cuenta Contable de Retención 1
	*
	* @parámetro String $trvcre1
	* @return Trvcre1
	*/
	public function setTrvcre1($trvcre1)
	{
	  $this->trvcre1 = (String) $trvcre1;
	    return $this;
	}

	/**
	* Get trvcre1
	*
	* @return null|String
	*/
	public function getTrvcre1()
	{
		return $this->trvcre1;
	}

	/**
	* Set trvmre1
	*
	*Tipo de Movimiento Retención 1
	*
	* @parámetro Integer $trvmre1
	* @return Trvmre1
	*/
	public function setTrvmre1($trvmre1)
	{
	  $this->trvmre1 = (Integer) $trvmre1;
	    return $this;
	}

	/**
	* Get trvmre1
	*
	* @return null|Integer
	*/
	public function getTrvmre1()
	{
		return $this->trvmre1;
	}

	/**
	* Set trvret2
	*
	*Retención 2
	*
	* @parámetro Decimal $trvret2
	* @return Trvret2
	*/
	public function setTrvret2($trvret2)
	{
	  $this->trvret2 = (Double) $trvret2;
	    return $this;
	}

	/**
	* Get trvret2
	*
	* @return null|Decimal
	*/
	public function getTrvret2()
	{
		return $this->trvret2;
	}

	/**
	* Set trvcre2
	*
	*Cuenta Contable Retención 2
	*
	* @parámetro String $trvcre2
	* @return Trvcre2
	*/
	public function setTrvcre2($trvcre2)
	{
	  $this->trvcre2 = (String) $trvcre2;
	    return $this;
	}

	/**
	* Get trvcre2
	*
	* @return null|String
	*/
	public function getTrvcre2()
	{
		return $this->trvcre2;
	}

	/**
	* Set trvmre2
	*
	*Tipo de Movimiento Retención 2
	*
	* @parámetro Integer $trvmre2
	* @return Trvmre2
	*/
	public function setTrvmre2($trvmre2)
	{
	  $this->trvmre2 = (Integer) $trvmre2;
	    return $this;
	}

	/**
	* Get trvmre2
	*
	* @return null|Integer
	*/
	public function getTrvmre2()
	{
		return $this->trvmre2;
	}

	/**
	* Set trvpvta
	*
	*Precio de Venta
	*
	* @parámetro Decimal $trvpvta
	* @return Trvpvta
	*/
	public function setTrvpvta($trvpvta)
	{
	  $this->trvpvta = (Double) $trvpvta;
	    return $this;
	}

	/**
	* Get trvpvta
	*
	* @return null|Decimal
	*/
	public function getTrvpvta()
	{
		return $this->trvpvta;
	}

	/**
	* Set trvcpvt
	*
	*Cuenta Contable Precio Venta
	*
	* @parámetro String $trvcpvt
	* @return Trvcpvt
	*/
	public function setTrvcpvt($trvcpvt)
	{
	  $this->trvcpvt = (String) $trvcpvt;
	    return $this;
	}

	/**
	* Get trvcpvt
	*
	* @return null|String
	*/
	public function getTrvcpvt()
	{
		return $this->trvcpvt;
	}

	/**
	* Set trvmpvt
	*
	*Tipo de Movimiento Precio Venta
	*
	* @parámetro Integer $trvmpvt
	* @return Trvmpvt
	*/
	public function setTrvmpvt($trvmpvt)
	{
	  $this->trvmpvt = (Integer) $trvmpvt;
	    return $this;
	}

	/**
	* Get trvmpvt
	*
	* @return null|Integer
	*/
	public function getTrvmpvt()
	{
		return $this->trvmpvt;
	}

	/**
	* Set trvconc
	*
	*Concepto Contable
	*
	* @parámetro Decimal $trvconc
	* @return Trvconc
	*/
	public function setTrvconc($trvconc)
	{
	  $this->trvconc = (Double) $trvconc;
	    return $this;
	}

	/**
	* Get trvconc
	*
	* @return null|Decimal
	*/
	public function getTrvconc()
	{
		return $this->trvconc;
	}

	/**
	* Set trvtref
	*
	*Tipo de Documento Referencial
	*
	* @parámetro String $trvtref
	* @return Trvtref
	*/
	public function setTrvtref($trvtref)
	{
	  $this->trvtref = (String) $trvtref;
	    return $this;
	}

	/**
	* Get trvtref
	*
	* @return null|String
	*/
	public function getTrvtref()
	{
		return $this->trvtref;
	}

	/**
	* Set trvnref
	*
	*Número de Documento Referencial
	*
	* @parámetro String $trvnref
	* @return Trvnref
	*/
	public function setTrvnref($trvnref)
	{
	  $this->trvnref = (String) $trvnref;
	    return $this;
	}

	/**
	* Get trvnref
	*
	* @return null|String
	*/
	public function getTrvnref()
	{
		return $this->trvnref;
	}

	/**
	* Set trvasto
	*
	*Número de Asiento
	*
	* @parámetro String $trvasto
	* @return Trvasto
	*/
	public function setTrvasto($trvasto)
	{
	  $this->trvasto = (String) $trvasto;
	    return $this;
	}

	/**
	* Get trvasto
	*
	* @return null|String
	*/
	public function getTrvasto()
	{
		return $this->trvasto;
	}

	/**
	* Set trvgrab
	*
	*Retención Grabada
	*
	* @parámetro Integer $trvgrab
	* @return Trvgrab
	*/
	public function setTrvgrab($trvgrab)
	{
	  $this->trvgrab = (Integer) $trvgrab;
	    return $this;
	}

	/**
	* Get trvgrab
	*
	* @return null|Integer
	*/
	public function getTrvgrab()
	{
		return $this->trvgrab;
	}

	/**
	* Set trvfpro
	*
	*Fecha de Proceso
	*
	* @parámetro Date $trvfpro
	* @return Trvfpro
	*/
	public function setTrvfpro($trvfpro)
	{
	  $this->trvfpro = (String) $trvfpro;
	    return $this;
	}

	/**
	* Get trvfpro
	*
	* @return null|Date
	*/
	public function getTrvfpro()
	{
		return $this->trvfpro;
	}

	/**
	* Set trvhpro
	*
	*Hora de Proceso
	*
	* @parámetro String $trvhpro
	* @return Trvhpro
	*/
	public function setTrvhpro($trvhpro)
	{
	  $this->trvhpro = (String) $trvhpro;
	    return $this;
	}

	/**
	* Get trvhpro
	*
	* @return null|String
	*/
	public function getTrvhpro()
	{
		return $this->trvhpro;
	}

	/**
	* Set trvfeve
	*
	*Fecha Vencimiento
	*
	* @parámetro Date $trvfeve
	* @return Trvfeve
	*/
	public function setTrvfeve($trvfeve)
	{
	  $this->trvfeve = (String) $trvfeve;
	    return $this;
	}

	/**
	* Get trvfeve
	*
	* @return null|Date
	*/
	public function getTrvfeve()
	{
		return $this->trvfeve;
	}

	/**
	* Set trvndom
	*
	*No Domiciliado
	*
	* @parámetro Integer $trvndom
	* @return Trvndom
	*/
	public function setTrvndom($trvndom)
	{
	  $this->trvndom = (Integer) $trvndom;
	    return $this;
	}

	/**
	* Get trvndom
	*
	* @return null|Integer
	*/
	public function getTrvndom()
	{
		return $this->trvndom;
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
	* Set trvsitu
	*
	*Situación del Registro de Ventas
	*
	* @parámetro String $trvsitu
	* @return Trvsitu
	*/
	public function setTrvsitu($trvsitu)
	{
	  $this->trvsitu = (String) $trvsitu;
	    return $this;
	}

	/**
	* Get trvsitu
	*
	* @return null|String
	*/
	public function getTrvsitu()
	{
		return $this->trvsitu;
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
	* Set trvtipe
	*
	*Tipo de Pedido (N=Normal,V=Varios)
	*
	* @parámetro Integer $trvtipe
	* @return Trvtipe
	*/
	public function setTrvtipe($trvtipe)
	{
	  $this->trvtipe = (Integer) $trvtipe;
	    return $this;
	}

	/**
	* Get trvtipe
	*
	* @return null|Integer
	*/
	public function getTrvtipe()
	{
		return $this->trvtipe;
	}

	/**
	* Set trvusuc
	*
	*Usuario de creación
	*
	* @parámetro String $trvusuc
	* @return Trvusuc
	*/
	public function setTrvusuc($trvusuc)
	{
	  $this->trvusuc = (String) $trvusuc;
	    return $this;
	}

	/**
	* Get trvusuc
	*
	* @return null|String
	*/
	public function getTrvusuc()
	{
		return $this->trvusuc;
	}

	/**
	* Set trvfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $trvfecc
	* @return Trvfecc
	*/
	public function setTrvfecc($trvfecc)
	{
	  $this->trvfecc = (String) $trvfecc;
	    return $this;
	}

	/**
	* Get trvfecc
	*
	* @return null|Date
	*/
	public function getTrvfecc()
	{
		return $this->trvfecc;
	}

	/**
	* Set trvusum
	*
	*Usuario de modificación
	*
	* @parámetro String $trvusum
	* @return Trvusum
	*/
	public function setTrvusum($trvusum)
	{
	  $this->trvusum = (String) $trvusum;
	    return $this;
	}

	/**
	* Get trvusum
	*
	* @return null|String
	*/
	public function getTrvusum()
	{
		return $this->trvusum;
	}

	/**
	* Set trvfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $trvfecm
	* @return Trvfecm
	*/
	public function setTrvfecm($trvfecm)
	{
	  $this->trvfecm = (String) $trvfecm;
	    return $this;
	}

	/**
	* Get trvfecm
	*
	* @return null|Date
	*/
	public function getTrvfecm()
	{
		return $this->trvfecm;
	}

	/**
	* Set trvtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $trvtask
	* @return Trvtask
	*/
	public function setTrvtask($trvtask)
	{
	  $this->trvtask = (String) $trvtask;
	    return $this;
	}

	/**
	* Get trvtask
	*
	* @return null|String
	*/
	public function getTrvtask()
	{
		return $this->trvtask;
	}

	/**
	* Set trvpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $trvpara
	* @return Trvpara
	*/
	public function setTrvpara($trvpara)
	{
	  $this->trvpara = (Integer) $trvpara;
	    return $this;
	}

	/**
	* Get trvpara
	*
	* @return null|Integer
	*/
	public function getTrvpara()
	{
		return $this->trvpara;
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

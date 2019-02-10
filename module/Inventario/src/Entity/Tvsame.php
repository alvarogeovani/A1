<?php
 /**
 * Model of the Tvsame table
 *
 * It is used to convert the   Tvsame entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvsame
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvsame
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TVSAME
		*/
		protected $vsesecu;
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
		* Estos datos se ingresan en la Opción: Plan de Cuentas Contable
		*/
		protected $bctsecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código de Cuenta Contable
		*/
		protected $bctacod;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Ejercicio Económico
		*/
		protected $bperano;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Periodo Contable
		*/
		protected $bpernum;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Enero
		*/
		protected $vsecene;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Febrero
		*/
		protected $vsecfeb;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Marzo
		*/
		protected $vsecmar;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Abril
		*/
		protected $vsecabr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Mayo
		*/
		protected $vsecmay;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Junio
		*/
		protected $vsecjun;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Julio
		*/
		protected $vsecjul;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Agosto
		*/
		protected $vsecago;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Septiembre
		*/
		protected $vsecsep;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Octubre
		*/
		protected $vsecoct;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Noviembre
		*/
		protected $vsecnov;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Diciembre
		*/
		protected $vsecdic;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Cierre 1
		*/
		protected $vsecci1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Cierre 2
		*/
		protected $vsecci2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Enero
		*/
		protected $vseaene;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Febrero
		*/
		protected $vseafeb;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Marzo
		*/
		protected $vseamar;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Abril
		*/
		protected $vseaabr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Mayo
		*/
		protected $vseamay;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Junio
		*/
		protected $vseajun;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Julio
		*/
		protected $vseajul;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Agosto
		*/
		protected $vseaago;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Septiembre
		*/
		protected $vseasep;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Octubre
		*/
		protected $vseaoct;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Noviembre
		*/
		protected $vseanov;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Diciembre
		*/
		protected $vseadic;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Cierre 1
		*/
		protected $vseaci1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Cierre 2
		*/
		protected $vseaci2;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vseusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vsefecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vseusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vsefecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vsetask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $vsepara;

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
	* Name of the table: tvsame
	* 
	 */
	const TABLE="tvsame";

	/**
	*Primary key
*/
		 const PKEY = "vsesecu";



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
		throw new \Exception('Class Entity: Tvsame Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvsame. Invalid specified property: get'.$name);
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
	* Set vsesecu
	*
	*Clave Primaria de la Base de Datos: TVSAME
	*
	* @parámetro Integer $vsesecu
	* @return Vsesecu
	*/
	public function setVsesecu($vsesecu)
	{
	  $this->vsesecu = (Integer) $vsesecu;
	    return $this;
	}

	/**
	* Get vsesecu
	*
	* @return null|Integer
	*/
	public function getVsesecu()
	{
		return $this->vsesecu;
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
	* Set bctsecu
	*
	*Estos datos se ingresan en la Opción: Plan de Cuentas Contable
	*
	* @parámetro Integer $bctsecu
	* @return Bctsecu
	*/
	public function setBctsecu($bctsecu)
	{
	  $this->bctsecu = (Integer) $bctsecu;
	    return $this;
	}

	/**
	* Get bctsecu
	*
	* @return null|Integer
	*/
	public function getBctsecu()
	{
		return $this->bctsecu;
	}

	/**
	* Set bctacod
	*
	*Código de Cuenta Contable
	*
	* @parámetro String $bctacod
	* @return Bctacod
	*/
	public function setBctacod($bctacod)
	{
	  $this->bctacod = (String) $bctacod;
	    return $this;
	}

	/**
	* Get bctacod
	*
	* @return null|String
	*/
	public function getBctacod()
	{
		return $this->bctacod;
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
	* Set vsecene
	*
	*Débitos Enero
	*
	* @parámetro Decimal $vsecene
	* @return Vsecene
	*/
	public function setVsecene($vsecene)
	{
	  $this->vsecene = (Double) $vsecene;
	    return $this;
	}

	/**
	* Get vsecene
	*
	* @return null|Decimal
	*/
	public function getVsecene()
	{
		return $this->vsecene;
	}

	/**
	* Set vsecfeb
	*
	*Débitos Febrero
	*
	* @parámetro Decimal $vsecfeb
	* @return Vsecfeb
	*/
	public function setVsecfeb($vsecfeb)
	{
	  $this->vsecfeb = (Double) $vsecfeb;
	    return $this;
	}

	/**
	* Get vsecfeb
	*
	* @return null|Decimal
	*/
	public function getVsecfeb()
	{
		return $this->vsecfeb;
	}

	/**
	* Set vsecmar
	*
	*Débitos Marzo
	*
	* @parámetro Decimal $vsecmar
	* @return Vsecmar
	*/
	public function setVsecmar($vsecmar)
	{
	  $this->vsecmar = (Double) $vsecmar;
	    return $this;
	}

	/**
	* Get vsecmar
	*
	* @return null|Decimal
	*/
	public function getVsecmar()
	{
		return $this->vsecmar;
	}

	/**
	* Set vsecabr
	*
	*Débitos Abril
	*
	* @parámetro Decimal $vsecabr
	* @return Vsecabr
	*/
	public function setVsecabr($vsecabr)
	{
	  $this->vsecabr = (Double) $vsecabr;
	    return $this;
	}

	/**
	* Get vsecabr
	*
	* @return null|Decimal
	*/
	public function getVsecabr()
	{
		return $this->vsecabr;
	}

	/**
	* Set vsecmay
	*
	*Débitos Mayo
	*
	* @parámetro Decimal $vsecmay
	* @return Vsecmay
	*/
	public function setVsecmay($vsecmay)
	{
	  $this->vsecmay = (Double) $vsecmay;
	    return $this;
	}

	/**
	* Get vsecmay
	*
	* @return null|Decimal
	*/
	public function getVsecmay()
	{
		return $this->vsecmay;
	}

	/**
	* Set vsecjun
	*
	*Débitos Junio
	*
	* @parámetro Decimal $vsecjun
	* @return Vsecjun
	*/
	public function setVsecjun($vsecjun)
	{
	  $this->vsecjun = (Double) $vsecjun;
	    return $this;
	}

	/**
	* Get vsecjun
	*
	* @return null|Decimal
	*/
	public function getVsecjun()
	{
		return $this->vsecjun;
	}

	/**
	* Set vsecjul
	*
	*Débitos Julio
	*
	* @parámetro Decimal $vsecjul
	* @return Vsecjul
	*/
	public function setVsecjul($vsecjul)
	{
	  $this->vsecjul = (Double) $vsecjul;
	    return $this;
	}

	/**
	* Get vsecjul
	*
	* @return null|Decimal
	*/
	public function getVsecjul()
	{
		return $this->vsecjul;
	}

	/**
	* Set vsecago
	*
	*Débitos Agosto
	*
	* @parámetro Decimal $vsecago
	* @return Vsecago
	*/
	public function setVsecago($vsecago)
	{
	  $this->vsecago = (Double) $vsecago;
	    return $this;
	}

	/**
	* Get vsecago
	*
	* @return null|Decimal
	*/
	public function getVsecago()
	{
		return $this->vsecago;
	}

	/**
	* Set vsecsep
	*
	*Débitos Septiembre
	*
	* @parámetro Decimal $vsecsep
	* @return Vsecsep
	*/
	public function setVsecsep($vsecsep)
	{
	  $this->vsecsep = (Double) $vsecsep;
	    return $this;
	}

	/**
	* Get vsecsep
	*
	* @return null|Decimal
	*/
	public function getVsecsep()
	{
		return $this->vsecsep;
	}

	/**
	* Set vsecoct
	*
	*Débitos Octubre
	*
	* @parámetro Decimal $vsecoct
	* @return Vsecoct
	*/
	public function setVsecoct($vsecoct)
	{
	  $this->vsecoct = (Double) $vsecoct;
	    return $this;
	}

	/**
	* Get vsecoct
	*
	* @return null|Decimal
	*/
	public function getVsecoct()
	{
		return $this->vsecoct;
	}

	/**
	* Set vsecnov
	*
	*Débitos Noviembre
	*
	* @parámetro Decimal $vsecnov
	* @return Vsecnov
	*/
	public function setVsecnov($vsecnov)
	{
	  $this->vsecnov = (Double) $vsecnov;
	    return $this;
	}

	/**
	* Get vsecnov
	*
	* @return null|Decimal
	*/
	public function getVsecnov()
	{
		return $this->vsecnov;
	}

	/**
	* Set vsecdic
	*
	*Débitos Diciembre
	*
	* @parámetro Decimal $vsecdic
	* @return Vsecdic
	*/
	public function setVsecdic($vsecdic)
	{
	  $this->vsecdic = (Double) $vsecdic;
	    return $this;
	}

	/**
	* Get vsecdic
	*
	* @return null|Decimal
	*/
	public function getVsecdic()
	{
		return $this->vsecdic;
	}

	/**
	* Set vsecci1
	*
	*Débitos Cierre 1
	*
	* @parámetro Decimal $vsecci1
	* @return Vsecci1
	*/
	public function setVsecci1($vsecci1)
	{
	  $this->vsecci1 = (Double) $vsecci1;
	    return $this;
	}

	/**
	* Get vsecci1
	*
	* @return null|Decimal
	*/
	public function getVsecci1()
	{
		return $this->vsecci1;
	}

	/**
	* Set vsecci2
	*
	*Débitos Cierre 2
	*
	* @parámetro Decimal $vsecci2
	* @return Vsecci2
	*/
	public function setVsecci2($vsecci2)
	{
	  $this->vsecci2 = (Double) $vsecci2;
	    return $this;
	}

	/**
	* Get vsecci2
	*
	* @return null|Decimal
	*/
	public function getVsecci2()
	{
		return $this->vsecci2;
	}

	/**
	* Set vseaene
	*
	*Créditos Enero
	*
	* @parámetro Decimal $vseaene
	* @return Vseaene
	*/
	public function setVseaene($vseaene)
	{
	  $this->vseaene = (Double) $vseaene;
	    return $this;
	}

	/**
	* Get vseaene
	*
	* @return null|Decimal
	*/
	public function getVseaene()
	{
		return $this->vseaene;
	}

	/**
	* Set vseafeb
	*
	*Créditos Febrero
	*
	* @parámetro Decimal $vseafeb
	* @return Vseafeb
	*/
	public function setVseafeb($vseafeb)
	{
	  $this->vseafeb = (Double) $vseafeb;
	    return $this;
	}

	/**
	* Get vseafeb
	*
	* @return null|Decimal
	*/
	public function getVseafeb()
	{
		return $this->vseafeb;
	}

	/**
	* Set vseamar
	*
	*Créditos Marzo
	*
	* @parámetro Decimal $vseamar
	* @return Vseamar
	*/
	public function setVseamar($vseamar)
	{
	  $this->vseamar = (Double) $vseamar;
	    return $this;
	}

	/**
	* Get vseamar
	*
	* @return null|Decimal
	*/
	public function getVseamar()
	{
		return $this->vseamar;
	}

	/**
	* Set vseaabr
	*
	*Créditos Abril
	*
	* @parámetro Decimal $vseaabr
	* @return Vseaabr
	*/
	public function setVseaabr($vseaabr)
	{
	  $this->vseaabr = (Double) $vseaabr;
	    return $this;
	}

	/**
	* Get vseaabr
	*
	* @return null|Decimal
	*/
	public function getVseaabr()
	{
		return $this->vseaabr;
	}

	/**
	* Set vseamay
	*
	*Créditos Mayo
	*
	* @parámetro Decimal $vseamay
	* @return Vseamay
	*/
	public function setVseamay($vseamay)
	{
	  $this->vseamay = (Double) $vseamay;
	    return $this;
	}

	/**
	* Get vseamay
	*
	* @return null|Decimal
	*/
	public function getVseamay()
	{
		return $this->vseamay;
	}

	/**
	* Set vseajun
	*
	*Créditos Junio
	*
	* @parámetro Decimal $vseajun
	* @return Vseajun
	*/
	public function setVseajun($vseajun)
	{
	  $this->vseajun = (Double) $vseajun;
	    return $this;
	}

	/**
	* Get vseajun
	*
	* @return null|Decimal
	*/
	public function getVseajun()
	{
		return $this->vseajun;
	}

	/**
	* Set vseajul
	*
	*Créditos Julio
	*
	* @parámetro Decimal $vseajul
	* @return Vseajul
	*/
	public function setVseajul($vseajul)
	{
	  $this->vseajul = (Double) $vseajul;
	    return $this;
	}

	/**
	* Get vseajul
	*
	* @return null|Decimal
	*/
	public function getVseajul()
	{
		return $this->vseajul;
	}

	/**
	* Set vseaago
	*
	*Créditos Agosto
	*
	* @parámetro Decimal $vseaago
	* @return Vseaago
	*/
	public function setVseaago($vseaago)
	{
	  $this->vseaago = (Double) $vseaago;
	    return $this;
	}

	/**
	* Get vseaago
	*
	* @return null|Decimal
	*/
	public function getVseaago()
	{
		return $this->vseaago;
	}

	/**
	* Set vseasep
	*
	*Créditos Septiembre
	*
	* @parámetro Decimal $vseasep
	* @return Vseasep
	*/
	public function setVseasep($vseasep)
	{
	  $this->vseasep = (Double) $vseasep;
	    return $this;
	}

	/**
	* Get vseasep
	*
	* @return null|Decimal
	*/
	public function getVseasep()
	{
		return $this->vseasep;
	}

	/**
	* Set vseaoct
	*
	*Créditos Octubre
	*
	* @parámetro Decimal $vseaoct
	* @return Vseaoct
	*/
	public function setVseaoct($vseaoct)
	{
	  $this->vseaoct = (Double) $vseaoct;
	    return $this;
	}

	/**
	* Get vseaoct
	*
	* @return null|Decimal
	*/
	public function getVseaoct()
	{
		return $this->vseaoct;
	}

	/**
	* Set vseanov
	*
	*Créditos Noviembre
	*
	* @parámetro Decimal $vseanov
	* @return Vseanov
	*/
	public function setVseanov($vseanov)
	{
	  $this->vseanov = (Double) $vseanov;
	    return $this;
	}

	/**
	* Get vseanov
	*
	* @return null|Decimal
	*/
	public function getVseanov()
	{
		return $this->vseanov;
	}

	/**
	* Set vseadic
	*
	*Créditos Diciembre
	*
	* @parámetro Decimal $vseadic
	* @return Vseadic
	*/
	public function setVseadic($vseadic)
	{
	  $this->vseadic = (Double) $vseadic;
	    return $this;
	}

	/**
	* Get vseadic
	*
	* @return null|Decimal
	*/
	public function getVseadic()
	{
		return $this->vseadic;
	}

	/**
	* Set vseaci1
	*
	*Créditos Cierre 1
	*
	* @parámetro Decimal $vseaci1
	* @return Vseaci1
	*/
	public function setVseaci1($vseaci1)
	{
	  $this->vseaci1 = (Double) $vseaci1;
	    return $this;
	}

	/**
	* Get vseaci1
	*
	* @return null|Decimal
	*/
	public function getVseaci1()
	{
		return $this->vseaci1;
	}

	/**
	* Set vseaci2
	*
	*Créditos Cierre 2
	*
	* @parámetro Decimal $vseaci2
	* @return Vseaci2
	*/
	public function setVseaci2($vseaci2)
	{
	  $this->vseaci2 = (Double) $vseaci2;
	    return $this;
	}

	/**
	* Get vseaci2
	*
	* @return null|Decimal
	*/
	public function getVseaci2()
	{
		return $this->vseaci2;
	}

	/**
	* Set vseusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vseusuc
	* @return Vseusuc
	*/
	public function setVseusuc($vseusuc)
	{
	  $this->vseusuc = (String) $vseusuc;
	    return $this;
	}

	/**
	* Get vseusuc
	*
	* @return null|String
	*/
	public function getVseusuc()
	{
		return $this->vseusuc;
	}

	/**
	* Set vsefecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vsefecc
	* @return Vsefecc
	*/
	public function setVsefecc($vsefecc)
	{
	  $this->vsefecc = (String) $vsefecc;
	    return $this;
	}

	/**
	* Get vsefecc
	*
	* @return null|Date
	*/
	public function getVsefecc()
	{
		return $this->vsefecc;
	}

	/**
	* Set vseusum
	*
	*Usuario de modificación
	*
	* @parámetro String $vseusum
	* @return Vseusum
	*/
	public function setVseusum($vseusum)
	{
	  $this->vseusum = (String) $vseusum;
	    return $this;
	}

	/**
	* Get vseusum
	*
	* @return null|String
	*/
	public function getVseusum()
	{
		return $this->vseusum;
	}

	/**
	* Set vsefecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vsefecm
	* @return Vsefecm
	*/
	public function setVsefecm($vsefecm)
	{
	  $this->vsefecm = (String) $vsefecm;
	    return $this;
	}

	/**
	* Get vsefecm
	*
	* @return null|Date
	*/
	public function getVsefecm()
	{
		return $this->vsefecm;
	}

	/**
	* Set vsetask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vsetask
	* @return Vsetask
	*/
	public function setVsetask($vsetask)
	{
	  $this->vsetask = (String) $vsetask;
	    return $this;
	}

	/**
	* Get vsetask
	*
	* @return null|String
	*/
	public function getVsetask()
	{
		return $this->vsetask;
	}

	/**
	* Set vsepara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $vsepara
	* @return Vsepara
	*/
	public function setVsepara($vsepara)
	{
	  $this->vsepara = (Integer) $vsepara;
	    return $this;
	}

	/**
	* Get vsepara
	*
	* @return null|Integer
	*/
	public function getVsepara()
	{
		return $this->vsepara;
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

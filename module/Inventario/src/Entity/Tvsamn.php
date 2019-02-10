<?php
 /**
 * Model of the Tvsamn table
 *
 * It is used to convert the   Tvsamn entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvsamn
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvsamn
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TVSAMN
		*/
		protected $vsnsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Plan de Cuentas Contable
		*/
		protected $bctsecu;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Periodos Contables
		*/
		protected $bpesec1;
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
		* Required field
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
		protected $vsncene;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Febrero
		*/
		protected $vsncfeb;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Marzo
		*/
		protected $vsncmar;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Abril
		*/
		protected $vsncabr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Mayo
		*/
		protected $vsncmay;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Junio
		*/
		protected $vsncjun;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Julio
		*/
		protected $vsncjul;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Agosto
		*/
		protected $vsncago;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Septiembre
		*/
		protected $vsncsep;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Octubre
		*/
		protected $vsncoct;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Noviembre
		*/
		protected $vsncnov;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Diciembre
		*/
		protected $vsncdic;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Cierre 1
		*/
		protected $vsncci1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Débitos Cierre 2
		*/
		protected $vsncci2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Enero
		*/
		protected $vsnaene;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Febrero
		*/
		protected $vsnafeb;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Marzo
		*/
		protected $vsnamar;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Abril
		*/
		protected $vsnaabr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Mayo
		*/
		protected $vsnamay;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Junio
		*/
		protected $vsnajun;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Julio
		*/
		protected $vsnajul;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Agosto
		*/
		protected $vsnaago;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Septiembre
		*/
		protected $vsnasep;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Octubre
		*/
		protected $vsnaoct;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Noviembre
		*/
		protected $vsnanov;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Diciembre
		*/
		protected $vsnadic;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Cierre 1
		*/
		protected $vsnaci1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Créditos Cierre 2
		*/
		protected $vsnaci2;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vsnusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vsnfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vsnusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vsnfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vsntask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Banera de borrado
		*/
		protected $vsnpara;

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
	* Name of the table: tvsamn
	* 
	 */
	const TABLE="tvsamn";

	/**
	*Primary key
*/
		 const PKEY = "vsnsecu";



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
		throw new \Exception('Class Entity: Tvsamn Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvsamn. Invalid specified property: get'.$name);
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
	* Set vsnsecu
	*
	*Clave Primaria de la Base de Datos: TVSAMN
	*
	* @parámetro Integer $vsnsecu
	* @return Vsnsecu
	*/
	public function setVsnsecu($vsnsecu)
	{
	  $this->vsnsecu = (Integer) $vsnsecu;
	    return $this;
	}

	/**
	* Get vsnsecu
	*
	* @return null|Integer
	*/
	public function getVsnsecu()
	{
		return $this->vsnsecu;
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
	* Set vsncene
	*
	*Débitos Enero
	*
	* @parámetro Decimal $vsncene
	* @return Vsncene
	*/
	public function setVsncene($vsncene)
	{
	  $this->vsncene = (Double) $vsncene;
	    return $this;
	}

	/**
	* Get vsncene
	*
	* @return null|Decimal
	*/
	public function getVsncene()
	{
		return $this->vsncene;
	}

	/**
	* Set vsncfeb
	*
	*Débitos Febrero
	*
	* @parámetro Decimal $vsncfeb
	* @return Vsncfeb
	*/
	public function setVsncfeb($vsncfeb)
	{
	  $this->vsncfeb = (Double) $vsncfeb;
	    return $this;
	}

	/**
	* Get vsncfeb
	*
	* @return null|Decimal
	*/
	public function getVsncfeb()
	{
		return $this->vsncfeb;
	}

	/**
	* Set vsncmar
	*
	*Débitos Marzo
	*
	* @parámetro Decimal $vsncmar
	* @return Vsncmar
	*/
	public function setVsncmar($vsncmar)
	{
	  $this->vsncmar = (Double) $vsncmar;
	    return $this;
	}

	/**
	* Get vsncmar
	*
	* @return null|Decimal
	*/
	public function getVsncmar()
	{
		return $this->vsncmar;
	}

	/**
	* Set vsncabr
	*
	*Débitos Abril
	*
	* @parámetro Decimal $vsncabr
	* @return Vsncabr
	*/
	public function setVsncabr($vsncabr)
	{
	  $this->vsncabr = (Double) $vsncabr;
	    return $this;
	}

	/**
	* Get vsncabr
	*
	* @return null|Decimal
	*/
	public function getVsncabr()
	{
		return $this->vsncabr;
	}

	/**
	* Set vsncmay
	*
	*Débitos Mayo
	*
	* @parámetro Decimal $vsncmay
	* @return Vsncmay
	*/
	public function setVsncmay($vsncmay)
	{
	  $this->vsncmay = (Double) $vsncmay;
	    return $this;
	}

	/**
	* Get vsncmay
	*
	* @return null|Decimal
	*/
	public function getVsncmay()
	{
		return $this->vsncmay;
	}

	/**
	* Set vsncjun
	*
	*Débitos Junio
	*
	* @parámetro Decimal $vsncjun
	* @return Vsncjun
	*/
	public function setVsncjun($vsncjun)
	{
	  $this->vsncjun = (Double) $vsncjun;
	    return $this;
	}

	/**
	* Get vsncjun
	*
	* @return null|Decimal
	*/
	public function getVsncjun()
	{
		return $this->vsncjun;
	}

	/**
	* Set vsncjul
	*
	*Débitos Julio
	*
	* @parámetro Decimal $vsncjul
	* @return Vsncjul
	*/
	public function setVsncjul($vsncjul)
	{
	  $this->vsncjul = (Double) $vsncjul;
	    return $this;
	}

	/**
	* Get vsncjul
	*
	* @return null|Decimal
	*/
	public function getVsncjul()
	{
		return $this->vsncjul;
	}

	/**
	* Set vsncago
	*
	*Débitos Agosto
	*
	* @parámetro Decimal $vsncago
	* @return Vsncago
	*/
	public function setVsncago($vsncago)
	{
	  $this->vsncago = (Double) $vsncago;
	    return $this;
	}

	/**
	* Get vsncago
	*
	* @return null|Decimal
	*/
	public function getVsncago()
	{
		return $this->vsncago;
	}

	/**
	* Set vsncsep
	*
	*Débitos Septiembre
	*
	* @parámetro Decimal $vsncsep
	* @return Vsncsep
	*/
	public function setVsncsep($vsncsep)
	{
	  $this->vsncsep = (Double) $vsncsep;
	    return $this;
	}

	/**
	* Get vsncsep
	*
	* @return null|Decimal
	*/
	public function getVsncsep()
	{
		return $this->vsncsep;
	}

	/**
	* Set vsncoct
	*
	*Débitos Octubre
	*
	* @parámetro Decimal $vsncoct
	* @return Vsncoct
	*/
	public function setVsncoct($vsncoct)
	{
	  $this->vsncoct = (Double) $vsncoct;
	    return $this;
	}

	/**
	* Get vsncoct
	*
	* @return null|Decimal
	*/
	public function getVsncoct()
	{
		return $this->vsncoct;
	}

	/**
	* Set vsncnov
	*
	*Débitos Noviembre
	*
	* @parámetro Decimal $vsncnov
	* @return Vsncnov
	*/
	public function setVsncnov($vsncnov)
	{
	  $this->vsncnov = (Double) $vsncnov;
	    return $this;
	}

	/**
	* Get vsncnov
	*
	* @return null|Decimal
	*/
	public function getVsncnov()
	{
		return $this->vsncnov;
	}

	/**
	* Set vsncdic
	*
	*Débitos Diciembre
	*
	* @parámetro Decimal $vsncdic
	* @return Vsncdic
	*/
	public function setVsncdic($vsncdic)
	{
	  $this->vsncdic = (Double) $vsncdic;
	    return $this;
	}

	/**
	* Get vsncdic
	*
	* @return null|Decimal
	*/
	public function getVsncdic()
	{
		return $this->vsncdic;
	}

	/**
	* Set vsncci1
	*
	*Débitos Cierre 1
	*
	* @parámetro Decimal $vsncci1
	* @return Vsncci1
	*/
	public function setVsncci1($vsncci1)
	{
	  $this->vsncci1 = (Double) $vsncci1;
	    return $this;
	}

	/**
	* Get vsncci1
	*
	* @return null|Decimal
	*/
	public function getVsncci1()
	{
		return $this->vsncci1;
	}

	/**
	* Set vsncci2
	*
	*Débitos Cierre 2
	*
	* @parámetro Decimal $vsncci2
	* @return Vsncci2
	*/
	public function setVsncci2($vsncci2)
	{
	  $this->vsncci2 = (Double) $vsncci2;
	    return $this;
	}

	/**
	* Get vsncci2
	*
	* @return null|Decimal
	*/
	public function getVsncci2()
	{
		return $this->vsncci2;
	}

	/**
	* Set vsnaene
	*
	*Créditos Enero
	*
	* @parámetro Decimal $vsnaene
	* @return Vsnaene
	*/
	public function setVsnaene($vsnaene)
	{
	  $this->vsnaene = (Double) $vsnaene;
	    return $this;
	}

	/**
	* Get vsnaene
	*
	* @return null|Decimal
	*/
	public function getVsnaene()
	{
		return $this->vsnaene;
	}

	/**
	* Set vsnafeb
	*
	*Créditos Febrero
	*
	* @parámetro Decimal $vsnafeb
	* @return Vsnafeb
	*/
	public function setVsnafeb($vsnafeb)
	{
	  $this->vsnafeb = (Double) $vsnafeb;
	    return $this;
	}

	/**
	* Get vsnafeb
	*
	* @return null|Decimal
	*/
	public function getVsnafeb()
	{
		return $this->vsnafeb;
	}

	/**
	* Set vsnamar
	*
	*Créditos Marzo
	*
	* @parámetro Decimal $vsnamar
	* @return Vsnamar
	*/
	public function setVsnamar($vsnamar)
	{
	  $this->vsnamar = (Double) $vsnamar;
	    return $this;
	}

	/**
	* Get vsnamar
	*
	* @return null|Decimal
	*/
	public function getVsnamar()
	{
		return $this->vsnamar;
	}

	/**
	* Set vsnaabr
	*
	*Créditos Abril
	*
	* @parámetro Decimal $vsnaabr
	* @return Vsnaabr
	*/
	public function setVsnaabr($vsnaabr)
	{
	  $this->vsnaabr = (Double) $vsnaabr;
	    return $this;
	}

	/**
	* Get vsnaabr
	*
	* @return null|Decimal
	*/
	public function getVsnaabr()
	{
		return $this->vsnaabr;
	}

	/**
	* Set vsnamay
	*
	*Créditos Mayo
	*
	* @parámetro Decimal $vsnamay
	* @return Vsnamay
	*/
	public function setVsnamay($vsnamay)
	{
	  $this->vsnamay = (Double) $vsnamay;
	    return $this;
	}

	/**
	* Get vsnamay
	*
	* @return null|Decimal
	*/
	public function getVsnamay()
	{
		return $this->vsnamay;
	}

	/**
	* Set vsnajun
	*
	*Créditos Junio
	*
	* @parámetro Decimal $vsnajun
	* @return Vsnajun
	*/
	public function setVsnajun($vsnajun)
	{
	  $this->vsnajun = (Double) $vsnajun;
	    return $this;
	}

	/**
	* Get vsnajun
	*
	* @return null|Decimal
	*/
	public function getVsnajun()
	{
		return $this->vsnajun;
	}

	/**
	* Set vsnajul
	*
	*Créditos Julio
	*
	* @parámetro Decimal $vsnajul
	* @return Vsnajul
	*/
	public function setVsnajul($vsnajul)
	{
	  $this->vsnajul = (Double) $vsnajul;
	    return $this;
	}

	/**
	* Get vsnajul
	*
	* @return null|Decimal
	*/
	public function getVsnajul()
	{
		return $this->vsnajul;
	}

	/**
	* Set vsnaago
	*
	*Créditos Agosto
	*
	* @parámetro Decimal $vsnaago
	* @return Vsnaago
	*/
	public function setVsnaago($vsnaago)
	{
	  $this->vsnaago = (Double) $vsnaago;
	    return $this;
	}

	/**
	* Get vsnaago
	*
	* @return null|Decimal
	*/
	public function getVsnaago()
	{
		return $this->vsnaago;
	}

	/**
	* Set vsnasep
	*
	*Créditos Septiembre
	*
	* @parámetro Decimal $vsnasep
	* @return Vsnasep
	*/
	public function setVsnasep($vsnasep)
	{
	  $this->vsnasep = (Double) $vsnasep;
	    return $this;
	}

	/**
	* Get vsnasep
	*
	* @return null|Decimal
	*/
	public function getVsnasep()
	{
		return $this->vsnasep;
	}

	/**
	* Set vsnaoct
	*
	*Créditos Octubre
	*
	* @parámetro Decimal $vsnaoct
	* @return Vsnaoct
	*/
	public function setVsnaoct($vsnaoct)
	{
	  $this->vsnaoct = (Double) $vsnaoct;
	    return $this;
	}

	/**
	* Get vsnaoct
	*
	* @return null|Decimal
	*/
	public function getVsnaoct()
	{
		return $this->vsnaoct;
	}

	/**
	* Set vsnanov
	*
	*Créditos Noviembre
	*
	* @parámetro Decimal $vsnanov
	* @return Vsnanov
	*/
	public function setVsnanov($vsnanov)
	{
	  $this->vsnanov = (Double) $vsnanov;
	    return $this;
	}

	/**
	* Get vsnanov
	*
	* @return null|Decimal
	*/
	public function getVsnanov()
	{
		return $this->vsnanov;
	}

	/**
	* Set vsnadic
	*
	*Créditos Diciembre
	*
	* @parámetro Decimal $vsnadic
	* @return Vsnadic
	*/
	public function setVsnadic($vsnadic)
	{
	  $this->vsnadic = (Double) $vsnadic;
	    return $this;
	}

	/**
	* Get vsnadic
	*
	* @return null|Decimal
	*/
	public function getVsnadic()
	{
		return $this->vsnadic;
	}

	/**
	* Set vsnaci1
	*
	*Créditos Cierre 1
	*
	* @parámetro Decimal $vsnaci1
	* @return Vsnaci1
	*/
	public function setVsnaci1($vsnaci1)
	{
	  $this->vsnaci1 = (Double) $vsnaci1;
	    return $this;
	}

	/**
	* Get vsnaci1
	*
	* @return null|Decimal
	*/
	public function getVsnaci1()
	{
		return $this->vsnaci1;
	}

	/**
	* Set vsnaci2
	*
	*Créditos Cierre 2
	*
	* @parámetro Decimal $vsnaci2
	* @return Vsnaci2
	*/
	public function setVsnaci2($vsnaci2)
	{
	  $this->vsnaci2 = (Double) $vsnaci2;
	    return $this;
	}

	/**
	* Get vsnaci2
	*
	* @return null|Decimal
	*/
	public function getVsnaci2()
	{
		return $this->vsnaci2;
	}

	/**
	* Set vsnusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vsnusuc
	* @return Vsnusuc
	*/
	public function setVsnusuc($vsnusuc)
	{
	  $this->vsnusuc = (String) $vsnusuc;
	    return $this;
	}

	/**
	* Get vsnusuc
	*
	* @return null|String
	*/
	public function getVsnusuc()
	{
		return $this->vsnusuc;
	}

	/**
	* Set vsnfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vsnfecc
	* @return Vsnfecc
	*/
	public function setVsnfecc($vsnfecc)
	{
	  $this->vsnfecc = (String) $vsnfecc;
	    return $this;
	}

	/**
	* Get vsnfecc
	*
	* @return null|Date
	*/
	public function getVsnfecc()
	{
		return $this->vsnfecc;
	}

	/**
	* Set vsnusum
	*
	*Usuario de modificación
	*
	* @parámetro String $vsnusum
	* @return Vsnusum
	*/
	public function setVsnusum($vsnusum)
	{
	  $this->vsnusum = (String) $vsnusum;
	    return $this;
	}

	/**
	* Get vsnusum
	*
	* @return null|String
	*/
	public function getVsnusum()
	{
		return $this->vsnusum;
	}

	/**
	* Set vsnfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vsnfecm
	* @return Vsnfecm
	*/
	public function setVsnfecm($vsnfecm)
	{
	  $this->vsnfecm = (String) $vsnfecm;
	    return $this;
	}

	/**
	* Get vsnfecm
	*
	* @return null|Date
	*/
	public function getVsnfecm()
	{
		return $this->vsnfecm;
	}

	/**
	* Set vsntask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vsntask
	* @return Vsntask
	*/
	public function setVsntask($vsntask)
	{
	  $this->vsntask = (String) $vsntask;
	    return $this;
	}

	/**
	* Get vsntask
	*
	* @return null|String
	*/
	public function getVsntask()
	{
		return $this->vsntask;
	}

	/**
	* Set vsnpara
	*
	*Banera de borrado
	*
	* @parámetro Integer $vsnpara
	* @return Vsnpara
	*/
	public function setVsnpara($vsnpara)
	{
	  $this->vsnpara = (Integer) $vsnpara;
	    return $this;
	}

	/**
	* Get vsnpara
	*
	* @return null|Integer
	*/
	public function getVsnpara()
	{
		return $this->vsnpara;
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

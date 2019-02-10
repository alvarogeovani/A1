<?php
 /**
 * Model of the Tvscal table
 *
 * It is used to convert the   Tvscal entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvscal
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvscal
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TVSCAL
		*/
		protected $vsbsecu;
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
		* Estos datos se ingresan en la Opción: Maestro de Artículos
		*/
		protected $varsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Bodegas
		*/
		protected $vbosecu;
		/**
		* @var Integer
		* Optional field
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
		* Saldo de Apertura
		*/
		protected $vsblape;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Enero
		*/
		protected $vsblene;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Febrero
		*/
		protected $vsblfeb;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Marzo
		*/
		protected $vsblmar;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Abril
		*/
		protected $vsblabr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Mayo
		*/
		protected $vsblmay;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Junio
		*/
		protected $vsbljun;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Julio
		*/
		protected $vsbljul;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Agosto
		*/
		protected $vsblago;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Septiembre
		*/
		protected $vsblsep;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Octubre
		*/
		protected $vsbloct;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Noviembre
		*/
		protected $vsblnov;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Diciembre
		*/
		protected $vsbldic;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vsbusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vsbfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vsbusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vsbfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vsbtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $vsbpara;

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
	* Name of the table: tvscal
	* 
	 */
	const TABLE="tvscal";

	/**
	*Primary key
*/
		 const PKEY = "vsbsecu";



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
		throw new \Exception('Class Entity: Tvscal Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvscal. Invalid specified property: get'.$name);
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
	* Set vsbsecu
	*
	*Clave Primaria de la Base de Datos: TVSCAL
	*
	* @parámetro Integer $vsbsecu
	* @return Vsbsecu
	*/
	public function setVsbsecu($vsbsecu)
	{
	  $this->vsbsecu = (Integer) $vsbsecu;
	    return $this;
	}

	/**
	* Get vsbsecu
	*
	* @return null|Integer
	*/
	public function getVsbsecu()
	{
		return $this->vsbsecu;
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
	* Set vbosecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Bodegas
	*
	* @parámetro Integer $vbosecu
	* @return Vbosecu
	*/
	public function setVbosecu($vbosecu)
	{
	  $this->vbosecu = (Integer) $vbosecu;
	    return $this;
	}

	/**
	* Get vbosecu
	*
	* @return null|Integer
	*/
	public function getVbosecu()
	{
		return $this->vbosecu;
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
	* Set vsblape
	*
	*Saldo de Apertura
	*
	* @parámetro Decimal $vsblape
	* @return Vsblape
	*/
	public function setVsblape($vsblape)
	{
	  $this->vsblape = (Double) $vsblape;
	    return $this;
	}

	/**
	* Get vsblape
	*
	* @return null|Decimal
	*/
	public function getVsblape()
	{
		return $this->vsblape;
	}

	/**
	* Set vsblene
	*
	*Saldo Enero
	*
	* @parámetro Decimal $vsblene
	* @return Vsblene
	*/
	public function setVsblene($vsblene)
	{
	  $this->vsblene = (Double) $vsblene;
	    return $this;
	}

	/**
	* Get vsblene
	*
	* @return null|Decimal
	*/
	public function getVsblene()
	{
		return $this->vsblene;
	}

	/**
	* Set vsblfeb
	*
	*Saldo Febrero
	*
	* @parámetro Decimal $vsblfeb
	* @return Vsblfeb
	*/
	public function setVsblfeb($vsblfeb)
	{
	  $this->vsblfeb = (Double) $vsblfeb;
	    return $this;
	}

	/**
	* Get vsblfeb
	*
	* @return null|Decimal
	*/
	public function getVsblfeb()
	{
		return $this->vsblfeb;
	}

	/**
	* Set vsblmar
	*
	*Saldo Marzo
	*
	* @parámetro Decimal $vsblmar
	* @return Vsblmar
	*/
	public function setVsblmar($vsblmar)
	{
	  $this->vsblmar = (Double) $vsblmar;
	    return $this;
	}

	/**
	* Get vsblmar
	*
	* @return null|Decimal
	*/
	public function getVsblmar()
	{
		return $this->vsblmar;
	}

	/**
	* Set vsblabr
	*
	*Saldo Abril
	*
	* @parámetro Decimal $vsblabr
	* @return Vsblabr
	*/
	public function setVsblabr($vsblabr)
	{
	  $this->vsblabr = (Double) $vsblabr;
	    return $this;
	}

	/**
	* Get vsblabr
	*
	* @return null|Decimal
	*/
	public function getVsblabr()
	{
		return $this->vsblabr;
	}

	/**
	* Set vsblmay
	*
	*Saldo Mayo
	*
	* @parámetro Decimal $vsblmay
	* @return Vsblmay
	*/
	public function setVsblmay($vsblmay)
	{
	  $this->vsblmay = (Double) $vsblmay;
	    return $this;
	}

	/**
	* Get vsblmay
	*
	* @return null|Decimal
	*/
	public function getVsblmay()
	{
		return $this->vsblmay;
	}

	/**
	* Set vsbljun
	*
	*Saldo Junio
	*
	* @parámetro Decimal $vsbljun
	* @return Vsbljun
	*/
	public function setVsbljun($vsbljun)
	{
	  $this->vsbljun = (Double) $vsbljun;
	    return $this;
	}

	/**
	* Get vsbljun
	*
	* @return null|Decimal
	*/
	public function getVsbljun()
	{
		return $this->vsbljun;
	}

	/**
	* Set vsbljul
	*
	*Saldo Julio
	*
	* @parámetro Decimal $vsbljul
	* @return Vsbljul
	*/
	public function setVsbljul($vsbljul)
	{
	  $this->vsbljul = (Double) $vsbljul;
	    return $this;
	}

	/**
	* Get vsbljul
	*
	* @return null|Decimal
	*/
	public function getVsbljul()
	{
		return $this->vsbljul;
	}

	/**
	* Set vsblago
	*
	*Saldo Agosto
	*
	* @parámetro Decimal $vsblago
	* @return Vsblago
	*/
	public function setVsblago($vsblago)
	{
	  $this->vsblago = (Double) $vsblago;
	    return $this;
	}

	/**
	* Get vsblago
	*
	* @return null|Decimal
	*/
	public function getVsblago()
	{
		return $this->vsblago;
	}

	/**
	* Set vsblsep
	*
	*Saldo Septiembre
	*
	* @parámetro Decimal $vsblsep
	* @return Vsblsep
	*/
	public function setVsblsep($vsblsep)
	{
	  $this->vsblsep = (Double) $vsblsep;
	    return $this;
	}

	/**
	* Get vsblsep
	*
	* @return null|Decimal
	*/
	public function getVsblsep()
	{
		return $this->vsblsep;
	}

	/**
	* Set vsbloct
	*
	*Saldo Octubre
	*
	* @parámetro Decimal $vsbloct
	* @return Vsbloct
	*/
	public function setVsbloct($vsbloct)
	{
	  $this->vsbloct = (Double) $vsbloct;
	    return $this;
	}

	/**
	* Get vsbloct
	*
	* @return null|Decimal
	*/
	public function getVsbloct()
	{
		return $this->vsbloct;
	}

	/**
	* Set vsblnov
	*
	*Saldo Noviembre
	*
	* @parámetro Decimal $vsblnov
	* @return Vsblnov
	*/
	public function setVsblnov($vsblnov)
	{
	  $this->vsblnov = (Double) $vsblnov;
	    return $this;
	}

	/**
	* Get vsblnov
	*
	* @return null|Decimal
	*/
	public function getVsblnov()
	{
		return $this->vsblnov;
	}

	/**
	* Set vsbldic
	*
	*Saldo Diciembre
	*
	* @parámetro Decimal $vsbldic
	* @return Vsbldic
	*/
	public function setVsbldic($vsbldic)
	{
	  $this->vsbldic = (Double) $vsbldic;
	    return $this;
	}

	/**
	* Get vsbldic
	*
	* @return null|Decimal
	*/
	public function getVsbldic()
	{
		return $this->vsbldic;
	}

	/**
	* Set vsbusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vsbusuc
	* @return Vsbusuc
	*/
	public function setVsbusuc($vsbusuc)
	{
	  $this->vsbusuc = (String) $vsbusuc;
	    return $this;
	}

	/**
	* Get vsbusuc
	*
	* @return null|String
	*/
	public function getVsbusuc()
	{
		return $this->vsbusuc;
	}

	/**
	* Set vsbfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vsbfecc
	* @return Vsbfecc
	*/
	public function setVsbfecc($vsbfecc)
	{
	  $this->vsbfecc = (String) $vsbfecc;
	    return $this;
	}

	/**
	* Get vsbfecc
	*
	* @return null|Date
	*/
	public function getVsbfecc()
	{
		return $this->vsbfecc;
	}

	/**
	* Set vsbusum
	*
	*Usuario de modificación
	*
	* @parámetro String $vsbusum
	* @return Vsbusum
	*/
	public function setVsbusum($vsbusum)
	{
	  $this->vsbusum = (String) $vsbusum;
	    return $this;
	}

	/**
	* Get vsbusum
	*
	* @return null|String
	*/
	public function getVsbusum()
	{
		return $this->vsbusum;
	}

	/**
	* Set vsbfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vsbfecm
	* @return Vsbfecm
	*/
	public function setVsbfecm($vsbfecm)
	{
	  $this->vsbfecm = (String) $vsbfecm;
	    return $this;
	}

	/**
	* Get vsbfecm
	*
	* @return null|Date
	*/
	public function getVsbfecm()
	{
		return $this->vsbfecm;
	}

	/**
	* Set vsbtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vsbtask
	* @return Vsbtask
	*/
	public function setVsbtask($vsbtask)
	{
	  $this->vsbtask = (String) $vsbtask;
	    return $this;
	}

	/**
	* Get vsbtask
	*
	* @return null|String
	*/
	public function getVsbtask()
	{
		return $this->vsbtask;
	}

	/**
	* Set vsbpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $vsbpara
	* @return Vsbpara
	*/
	public function setVsbpara($vsbpara)
	{
	  $this->vsbpara = (Integer) $vsbpara;
	    return $this;
	}

	/**
	* Get vsbpara
	*
	* @return null|Integer
	*/
	public function getVsbpara()
	{
		return $this->vsbpara;
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

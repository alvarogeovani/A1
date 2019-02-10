<?php
 /**
 * Model of the Tvscar table
 *
 * It is used to convert the   Tvscar entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvscar
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvscar
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TVSCAR
		*/
		protected $vscsecu;
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
		* Estos datos se ingresan en la Opción: Periodos Contables
		*/
		protected $bpesec1;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Ejercicio Económico
		*/
		protected $bperano;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Apertura
		*/
		protected $vscrape;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Enero
		*/
		protected $vscrene;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Febrero
		*/
		protected $vscrfeb;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Marzo
		*/
		protected $vscrmar;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Abril
		*/
		protected $vscrabr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Mayo
		*/
		protected $vscrmay;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Junio
		*/
		protected $vscrjun;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Julio
		*/
		protected $vscrjul;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Agosto
		*/
		protected $vscrago;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Septiembre
		*/
		protected $vscrsep;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Octubre
		*/
		protected $vscroct;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Noviembre
		*/
		protected $vscrnov;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Diciembre
		*/
		protected $vscrdic;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo de Apertura (Moneda Nacional)
		*/
		protected $vscnape;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Enero (Moneda Nacional)
		*/
		protected $vscnene;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Febrero (Moneda Nacional)
		*/
		protected $vscnfeb;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Marzo (Moneda Nacional)
		*/
		protected $vscnmar;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Abril (Moneda Nacional)
		*/
		protected $vscnabr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Mayo (Moneda Nacional)
		*/
		protected $vscnmay;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Junio (Moneda Nacional)
		*/
		protected $vscnjun;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Julio (Moneda Nacional)
		*/
		protected $vscnjul;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Agosto (Moneda Nacional)
		*/
		protected $vscnago;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Septiembre (Moneda Nacional)
		*/
		protected $vscnsep;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Octubre (Moneda Nacional)
		*/
		protected $vscnoct;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Noviembre(Moneda Nacional)
		*/
		protected $vscnnov;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Diciembre (Moneda Nacional)
		*/
		protected $vscndic;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo de Cierre (Moneda Nacional)
		*/
		protected $vscncie;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo de Apertura (Moneda Extranjera)
		*/
		protected $vsceape;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Enero (Moneda Extranjera)
		*/
		protected $vsceene;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Febrero (Moneda Extranjera)
		*/
		protected $vscefeb;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Marzo (Moneda Extranjera)
		*/
		protected $vscemar;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Abril (Moneda Extranjera)
		*/
		protected $vsceabr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Mayo (Moneda Extranjera)
		*/
		protected $vscemay;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Junio (Moneda Extranjera)
		*/
		protected $vscejun;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Julio (Moneda Extranjera)
		*/
		protected $vscejul;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Agosto (Moneda Extranjera)
		*/
		protected $vsceago;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Septiembre (Moneda Extranjera)
		*/
		protected $vscesep;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Octubre (Moneda Extranjera)
		*/
		protected $vsceoct;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Noviembre (Moneda Extranjera)
		*/
		protected $vscenov;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Diciembre (Moneda Extranjera)
		*/
		protected $vscedic;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo de Cierre (Moneda Extranjera)
		*/
		protected $vscecie;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vscusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vscfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vscusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vscfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vsctask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $vscpara;

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
	* Name of the table: tvscar
	* 
	 */
	const TABLE="tvscar";

	/**
	*Primary key
*/
		 const PKEY = "vscsecu";



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
		throw new \Exception('Class Entity: Tvscar Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvscar. Invalid specified property: get'.$name);
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
	* Set vscsecu
	*
	*Clave Primaria de la Base de Datos: TVSCAR
	*
	* @parámetro Integer $vscsecu
	* @return Vscsecu
	*/
	public function setVscsecu($vscsecu)
	{
	  $this->vscsecu = (Integer) $vscsecu;
	    return $this;
	}

	/**
	* Get vscsecu
	*
	* @return null|Integer
	*/
	public function getVscsecu()
	{
		return $this->vscsecu;
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
	* Set vscrape
	*
	*Saldo Apertura
	*
	* @parámetro Decimal $vscrape
	* @return Vscrape
	*/
	public function setVscrape($vscrape)
	{
	  $this->vscrape = (Double) $vscrape;
	    return $this;
	}

	/**
	* Get vscrape
	*
	* @return null|Decimal
	*/
	public function getVscrape()
	{
		return $this->vscrape;
	}

	/**
	* Set vscrene
	*
	*Saldo Enero
	*
	* @parámetro Decimal $vscrene
	* @return Vscrene
	*/
	public function setVscrene($vscrene)
	{
	  $this->vscrene = (Double) $vscrene;
	    return $this;
	}

	/**
	* Get vscrene
	*
	* @return null|Decimal
	*/
	public function getVscrene()
	{
		return $this->vscrene;
	}

	/**
	* Set vscrfeb
	*
	*Saldo Febrero
	*
	* @parámetro Decimal $vscrfeb
	* @return Vscrfeb
	*/
	public function setVscrfeb($vscrfeb)
	{
	  $this->vscrfeb = (Double) $vscrfeb;
	    return $this;
	}

	/**
	* Get vscrfeb
	*
	* @return null|Decimal
	*/
	public function getVscrfeb()
	{
		return $this->vscrfeb;
	}

	/**
	* Set vscrmar
	*
	*Saldo Marzo
	*
	* @parámetro Decimal $vscrmar
	* @return Vscrmar
	*/
	public function setVscrmar($vscrmar)
	{
	  $this->vscrmar = (Double) $vscrmar;
	    return $this;
	}

	/**
	* Get vscrmar
	*
	* @return null|Decimal
	*/
	public function getVscrmar()
	{
		return $this->vscrmar;
	}

	/**
	* Set vscrabr
	*
	*Saldo Abril
	*
	* @parámetro Decimal $vscrabr
	* @return Vscrabr
	*/
	public function setVscrabr($vscrabr)
	{
	  $this->vscrabr = (Double) $vscrabr;
	    return $this;
	}

	/**
	* Get vscrabr
	*
	* @return null|Decimal
	*/
	public function getVscrabr()
	{
		return $this->vscrabr;
	}

	/**
	* Set vscrmay
	*
	*Saldo Mayo
	*
	* @parámetro Decimal $vscrmay
	* @return Vscrmay
	*/
	public function setVscrmay($vscrmay)
	{
	  $this->vscrmay = (Double) $vscrmay;
	    return $this;
	}

	/**
	* Get vscrmay
	*
	* @return null|Decimal
	*/
	public function getVscrmay()
	{
		return $this->vscrmay;
	}

	/**
	* Set vscrjun
	*
	*Saldo Junio
	*
	* @parámetro Decimal $vscrjun
	* @return Vscrjun
	*/
	public function setVscrjun($vscrjun)
	{
	  $this->vscrjun = (Double) $vscrjun;
	    return $this;
	}

	/**
	* Get vscrjun
	*
	* @return null|Decimal
	*/
	public function getVscrjun()
	{
		return $this->vscrjun;
	}

	/**
	* Set vscrjul
	*
	*Saldo Julio
	*
	* @parámetro Decimal $vscrjul
	* @return Vscrjul
	*/
	public function setVscrjul($vscrjul)
	{
	  $this->vscrjul = (Double) $vscrjul;
	    return $this;
	}

	/**
	* Get vscrjul
	*
	* @return null|Decimal
	*/
	public function getVscrjul()
	{
		return $this->vscrjul;
	}

	/**
	* Set vscrago
	*
	*Saldo Agosto
	*
	* @parámetro Decimal $vscrago
	* @return Vscrago
	*/
	public function setVscrago($vscrago)
	{
	  $this->vscrago = (Double) $vscrago;
	    return $this;
	}

	/**
	* Get vscrago
	*
	* @return null|Decimal
	*/
	public function getVscrago()
	{
		return $this->vscrago;
	}

	/**
	* Set vscrsep
	*
	*Saldo Septiembre
	*
	* @parámetro Decimal $vscrsep
	* @return Vscrsep
	*/
	public function setVscrsep($vscrsep)
	{
	  $this->vscrsep = (Double) $vscrsep;
	    return $this;
	}

	/**
	* Get vscrsep
	*
	* @return null|Decimal
	*/
	public function getVscrsep()
	{
		return $this->vscrsep;
	}

	/**
	* Set vscroct
	*
	*Saldo Octubre
	*
	* @parámetro Decimal $vscroct
	* @return Vscroct
	*/
	public function setVscroct($vscroct)
	{
	  $this->vscroct = (Double) $vscroct;
	    return $this;
	}

	/**
	* Get vscroct
	*
	* @return null|Decimal
	*/
	public function getVscroct()
	{
		return $this->vscroct;
	}

	/**
	* Set vscrnov
	*
	*Saldo Noviembre
	*
	* @parámetro Decimal $vscrnov
	* @return Vscrnov
	*/
	public function setVscrnov($vscrnov)
	{
	  $this->vscrnov = (Double) $vscrnov;
	    return $this;
	}

	/**
	* Get vscrnov
	*
	* @return null|Decimal
	*/
	public function getVscrnov()
	{
		return $this->vscrnov;
	}

	/**
	* Set vscrdic
	*
	*Saldo Diciembre
	*
	* @parámetro Decimal $vscrdic
	* @return Vscrdic
	*/
	public function setVscrdic($vscrdic)
	{
	  $this->vscrdic = (Double) $vscrdic;
	    return $this;
	}

	/**
	* Get vscrdic
	*
	* @return null|Decimal
	*/
	public function getVscrdic()
	{
		return $this->vscrdic;
	}

	/**
	* Set vscnape
	*
	*Costo de Apertura (Moneda Nacional)
	*
	* @parámetro Decimal $vscnape
	* @return Vscnape
	*/
	public function setVscnape($vscnape)
	{
	  $this->vscnape = (Double) $vscnape;
	    return $this;
	}

	/**
	* Get vscnape
	*
	* @return null|Decimal
	*/
	public function getVscnape()
	{
		return $this->vscnape;
	}

	/**
	* Set vscnene
	*
	*Costo Enero (Moneda Nacional)
	*
	* @parámetro Decimal $vscnene
	* @return Vscnene
	*/
	public function setVscnene($vscnene)
	{
	  $this->vscnene = (Double) $vscnene;
	    return $this;
	}

	/**
	* Get vscnene
	*
	* @return null|Decimal
	*/
	public function getVscnene()
	{
		return $this->vscnene;
	}

	/**
	* Set vscnfeb
	*
	*Costo Febrero (Moneda Nacional)
	*
	* @parámetro Decimal $vscnfeb
	* @return Vscnfeb
	*/
	public function setVscnfeb($vscnfeb)
	{
	  $this->vscnfeb = (Double) $vscnfeb;
	    return $this;
	}

	/**
	* Get vscnfeb
	*
	* @return null|Decimal
	*/
	public function getVscnfeb()
	{
		return $this->vscnfeb;
	}

	/**
	* Set vscnmar
	*
	*Costo Marzo (Moneda Nacional)
	*
	* @parámetro Decimal $vscnmar
	* @return Vscnmar
	*/
	public function setVscnmar($vscnmar)
	{
	  $this->vscnmar = (Double) $vscnmar;
	    return $this;
	}

	/**
	* Get vscnmar
	*
	* @return null|Decimal
	*/
	public function getVscnmar()
	{
		return $this->vscnmar;
	}

	/**
	* Set vscnabr
	*
	*Costo Abril (Moneda Nacional)
	*
	* @parámetro Decimal $vscnabr
	* @return Vscnabr
	*/
	public function setVscnabr($vscnabr)
	{
	  $this->vscnabr = (Double) $vscnabr;
	    return $this;
	}

	/**
	* Get vscnabr
	*
	* @return null|Decimal
	*/
	public function getVscnabr()
	{
		return $this->vscnabr;
	}

	/**
	* Set vscnmay
	*
	*Costo Mayo (Moneda Nacional)
	*
	* @parámetro Decimal $vscnmay
	* @return Vscnmay
	*/
	public function setVscnmay($vscnmay)
	{
	  $this->vscnmay = (Double) $vscnmay;
	    return $this;
	}

	/**
	* Get vscnmay
	*
	* @return null|Decimal
	*/
	public function getVscnmay()
	{
		return $this->vscnmay;
	}

	/**
	* Set vscnjun
	*
	*Costo Junio (Moneda Nacional)
	*
	* @parámetro Decimal $vscnjun
	* @return Vscnjun
	*/
	public function setVscnjun($vscnjun)
	{
	  $this->vscnjun = (Double) $vscnjun;
	    return $this;
	}

	/**
	* Get vscnjun
	*
	* @return null|Decimal
	*/
	public function getVscnjun()
	{
		return $this->vscnjun;
	}

	/**
	* Set vscnjul
	*
	*Costo Julio (Moneda Nacional)
	*
	* @parámetro Decimal $vscnjul
	* @return Vscnjul
	*/
	public function setVscnjul($vscnjul)
	{
	  $this->vscnjul = (Double) $vscnjul;
	    return $this;
	}

	/**
	* Get vscnjul
	*
	* @return null|Decimal
	*/
	public function getVscnjul()
	{
		return $this->vscnjul;
	}

	/**
	* Set vscnago
	*
	*Costo Agosto (Moneda Nacional)
	*
	* @parámetro Decimal $vscnago
	* @return Vscnago
	*/
	public function setVscnago($vscnago)
	{
	  $this->vscnago = (Double) $vscnago;
	    return $this;
	}

	/**
	* Get vscnago
	*
	* @return null|Decimal
	*/
	public function getVscnago()
	{
		return $this->vscnago;
	}

	/**
	* Set vscnsep
	*
	*Costo Septiembre (Moneda Nacional)
	*
	* @parámetro Decimal $vscnsep
	* @return Vscnsep
	*/
	public function setVscnsep($vscnsep)
	{
	  $this->vscnsep = (Double) $vscnsep;
	    return $this;
	}

	/**
	* Get vscnsep
	*
	* @return null|Decimal
	*/
	public function getVscnsep()
	{
		return $this->vscnsep;
	}

	/**
	* Set vscnoct
	*
	*Costo Octubre (Moneda Nacional)
	*
	* @parámetro Decimal $vscnoct
	* @return Vscnoct
	*/
	public function setVscnoct($vscnoct)
	{
	  $this->vscnoct = (Double) $vscnoct;
	    return $this;
	}

	/**
	* Get vscnoct
	*
	* @return null|Decimal
	*/
	public function getVscnoct()
	{
		return $this->vscnoct;
	}

	/**
	* Set vscnnov
	*
	*Costo Noviembre(Moneda Nacional)
	*
	* @parámetro Decimal $vscnnov
	* @return Vscnnov
	*/
	public function setVscnnov($vscnnov)
	{
	  $this->vscnnov = (Double) $vscnnov;
	    return $this;
	}

	/**
	* Get vscnnov
	*
	* @return null|Decimal
	*/
	public function getVscnnov()
	{
		return $this->vscnnov;
	}

	/**
	* Set vscndic
	*
	*Costo Diciembre (Moneda Nacional)
	*
	* @parámetro Decimal $vscndic
	* @return Vscndic
	*/
	public function setVscndic($vscndic)
	{
	  $this->vscndic = (Double) $vscndic;
	    return $this;
	}

	/**
	* Get vscndic
	*
	* @return null|Decimal
	*/
	public function getVscndic()
	{
		return $this->vscndic;
	}

	/**
	* Set vscncie
	*
	*Costo de Cierre (Moneda Nacional)
	*
	* @parámetro Decimal $vscncie
	* @return Vscncie
	*/
	public function setVscncie($vscncie)
	{
	  $this->vscncie = (Double) $vscncie;
	    return $this;
	}

	/**
	* Get vscncie
	*
	* @return null|Decimal
	*/
	public function getVscncie()
	{
		return $this->vscncie;
	}

	/**
	* Set vsceape
	*
	*Costo de Apertura (Moneda Extranjera)
	*
	* @parámetro Decimal $vsceape
	* @return Vsceape
	*/
	public function setVsceape($vsceape)
	{
	  $this->vsceape = (Double) $vsceape;
	    return $this;
	}

	/**
	* Get vsceape
	*
	* @return null|Decimal
	*/
	public function getVsceape()
	{
		return $this->vsceape;
	}

	/**
	* Set vsceene
	*
	*Costo Enero (Moneda Extranjera)
	*
	* @parámetro Decimal $vsceene
	* @return Vsceene
	*/
	public function setVsceene($vsceene)
	{
	  $this->vsceene = (Double) $vsceene;
	    return $this;
	}

	/**
	* Get vsceene
	*
	* @return null|Decimal
	*/
	public function getVsceene()
	{
		return $this->vsceene;
	}

	/**
	* Set vscefeb
	*
	*Costo Febrero (Moneda Extranjera)
	*
	* @parámetro Decimal $vscefeb
	* @return Vscefeb
	*/
	public function setVscefeb($vscefeb)
	{
	  $this->vscefeb = (Double) $vscefeb;
	    return $this;
	}

	/**
	* Get vscefeb
	*
	* @return null|Decimal
	*/
	public function getVscefeb()
	{
		return $this->vscefeb;
	}

	/**
	* Set vscemar
	*
	*Costo Marzo (Moneda Extranjera)
	*
	* @parámetro Decimal $vscemar
	* @return Vscemar
	*/
	public function setVscemar($vscemar)
	{
	  $this->vscemar = (Double) $vscemar;
	    return $this;
	}

	/**
	* Get vscemar
	*
	* @return null|Decimal
	*/
	public function getVscemar()
	{
		return $this->vscemar;
	}

	/**
	* Set vsceabr
	*
	*Costo Abril (Moneda Extranjera)
	*
	* @parámetro Decimal $vsceabr
	* @return Vsceabr
	*/
	public function setVsceabr($vsceabr)
	{
	  $this->vsceabr = (Double) $vsceabr;
	    return $this;
	}

	/**
	* Get vsceabr
	*
	* @return null|Decimal
	*/
	public function getVsceabr()
	{
		return $this->vsceabr;
	}

	/**
	* Set vscemay
	*
	*Costo Mayo (Moneda Extranjera)
	*
	* @parámetro Decimal $vscemay
	* @return Vscemay
	*/
	public function setVscemay($vscemay)
	{
	  $this->vscemay = (Double) $vscemay;
	    return $this;
	}

	/**
	* Get vscemay
	*
	* @return null|Decimal
	*/
	public function getVscemay()
	{
		return $this->vscemay;
	}

	/**
	* Set vscejun
	*
	*Costo Junio (Moneda Extranjera)
	*
	* @parámetro Decimal $vscejun
	* @return Vscejun
	*/
	public function setVscejun($vscejun)
	{
	  $this->vscejun = (Double) $vscejun;
	    return $this;
	}

	/**
	* Get vscejun
	*
	* @return null|Decimal
	*/
	public function getVscejun()
	{
		return $this->vscejun;
	}

	/**
	* Set vscejul
	*
	*Costo Julio (Moneda Extranjera)
	*
	* @parámetro Decimal $vscejul
	* @return Vscejul
	*/
	public function setVscejul($vscejul)
	{
	  $this->vscejul = (Double) $vscejul;
	    return $this;
	}

	/**
	* Get vscejul
	*
	* @return null|Decimal
	*/
	public function getVscejul()
	{
		return $this->vscejul;
	}

	/**
	* Set vsceago
	*
	*Costo Agosto (Moneda Extranjera)
	*
	* @parámetro Decimal $vsceago
	* @return Vsceago
	*/
	public function setVsceago($vsceago)
	{
	  $this->vsceago = (Double) $vsceago;
	    return $this;
	}

	/**
	* Get vsceago
	*
	* @return null|Decimal
	*/
	public function getVsceago()
	{
		return $this->vsceago;
	}

	/**
	* Set vscesep
	*
	*Costo Septiembre (Moneda Extranjera)
	*
	* @parámetro Decimal $vscesep
	* @return Vscesep
	*/
	public function setVscesep($vscesep)
	{
	  $this->vscesep = (Double) $vscesep;
	    return $this;
	}

	/**
	* Get vscesep
	*
	* @return null|Decimal
	*/
	public function getVscesep()
	{
		return $this->vscesep;
	}

	/**
	* Set vsceoct
	*
	*Costo Octubre (Moneda Extranjera)
	*
	* @parámetro Decimal $vsceoct
	* @return Vsceoct
	*/
	public function setVsceoct($vsceoct)
	{
	  $this->vsceoct = (Double) $vsceoct;
	    return $this;
	}

	/**
	* Get vsceoct
	*
	* @return null|Decimal
	*/
	public function getVsceoct()
	{
		return $this->vsceoct;
	}

	/**
	* Set vscenov
	*
	*Costo Noviembre (Moneda Extranjera)
	*
	* @parámetro Decimal $vscenov
	* @return Vscenov
	*/
	public function setVscenov($vscenov)
	{
	  $this->vscenov = (Double) $vscenov;
	    return $this;
	}

	/**
	* Get vscenov
	*
	* @return null|Decimal
	*/
	public function getVscenov()
	{
		return $this->vscenov;
	}

	/**
	* Set vscedic
	*
	*Costo Diciembre (Moneda Extranjera)
	*
	* @parámetro Decimal $vscedic
	* @return Vscedic
	*/
	public function setVscedic($vscedic)
	{
	  $this->vscedic = (Double) $vscedic;
	    return $this;
	}

	/**
	* Get vscedic
	*
	* @return null|Decimal
	*/
	public function getVscedic()
	{
		return $this->vscedic;
	}

	/**
	* Set vscecie
	*
	*Costo de Cierre (Moneda Extranjera)
	*
	* @parámetro Decimal $vscecie
	* @return Vscecie
	*/
	public function setVscecie($vscecie)
	{
	  $this->vscecie = (Double) $vscecie;
	    return $this;
	}

	/**
	* Get vscecie
	*
	* @return null|Decimal
	*/
	public function getVscecie()
	{
		return $this->vscecie;
	}

	/**
	* Set vscusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vscusuc
	* @return Vscusuc
	*/
	public function setVscusuc($vscusuc)
	{
	  $this->vscusuc = (String) $vscusuc;
	    return $this;
	}

	/**
	* Get vscusuc
	*
	* @return null|String
	*/
	public function getVscusuc()
	{
		return $this->vscusuc;
	}

	/**
	* Set vscfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vscfecc
	* @return Vscfecc
	*/
	public function setVscfecc($vscfecc)
	{
	  $this->vscfecc = (String) $vscfecc;
	    return $this;
	}

	/**
	* Get vscfecc
	*
	* @return null|Date
	*/
	public function getVscfecc()
	{
		return $this->vscfecc;
	}

	/**
	* Set vscusum
	*
	*Usuario de modificación
	*
	* @parámetro String $vscusum
	* @return Vscusum
	*/
	public function setVscusum($vscusum)
	{
	  $this->vscusum = (String) $vscusum;
	    return $this;
	}

	/**
	* Get vscusum
	*
	* @return null|String
	*/
	public function getVscusum()
	{
		return $this->vscusum;
	}

	/**
	* Set vscfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vscfecm
	* @return Vscfecm
	*/
	public function setVscfecm($vscfecm)
	{
	  $this->vscfecm = (String) $vscfecm;
	    return $this;
	}

	/**
	* Get vscfecm
	*
	* @return null|Date
	*/
	public function getVscfecm()
	{
		return $this->vscfecm;
	}

	/**
	* Set vsctask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vsctask
	* @return Vsctask
	*/
	public function setVsctask($vsctask)
	{
	  $this->vsctask = (String) $vsctask;
	    return $this;
	}

	/**
	* Get vsctask
	*
	* @return null|String
	*/
	public function getVsctask()
	{
		return $this->vsctask;
	}

	/**
	* Set vscpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $vscpara
	* @return Vscpara
	*/
	public function setVscpara($vscpara)
	{
	  $this->vscpara = (Integer) $vscpara;
	    return $this;
	}

	/**
	* Get vscpara
	*
	* @return null|Integer
	*/
	public function getVscpara()
	{
		return $this->vscpara;
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

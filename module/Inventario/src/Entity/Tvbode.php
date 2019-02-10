<?php
 /**
 * Model of the Tvbode table
 *
 * It is used to convert the   Tvbode entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvbode
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvbode
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Bodegas
		*/
		protected $vbosecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de Bodega
		*/
		protected $vbotibo;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nombre Bodega
		*/
		protected $vbonomb;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Responsable de Bodega
		*/
		protected $mmcsec1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* País
		*/
		protected $vbopais;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Provincia
		*/
		protected $vboprov;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Ciudad
		*/
		protected $vbociud;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono 1
		*/
		protected $vbotel1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono 2
		*/
		protected $vbotel2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono 3
		*/
		protected $vbotel3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Correo Electrónico
		*/
		protected $vbocoel;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre Responsable de la Bodega
		*/
		protected $vboresp;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Interviene en valorización
		*/
		protected $vbovalo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Situación de la Bodega
		*/
		protected $vbositu;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Ingresos
		*/
		protected $vboingr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Salidas
		*/
		protected $vbosali;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Transferencias
		*/
		protected $vbotran;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Calle Principal
		*/
		protected $vbocapr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nomenclatura y Número
		*/
		protected $vbononu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Calle Secundaria
		*/
		protected $vbocase;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vbousuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vbofecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vbousum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vbofecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vbotask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $vbopara;

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
	* Name of the table: tvbode
	* 
	 */
	const TABLE="tvbode";

	/**
	*Primary key
*/
		 const PKEY = "vbosecu";



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
		throw new \Exception('Class Entity: Tvbode Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvbode. Invalid specified property: get'.$name);
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
	* Set vbotibo
	*
	*Tipo de Bodega
	*
	* @parámetro Integer $vbotibo
	* @return Vbotibo
	*/
	public function setVbotibo($vbotibo)
	{
	  $this->vbotibo = (Integer) $vbotibo;
	    return $this;
	}

	/**
	* Get vbotibo
	*
	* @return null|Integer
	*/
	public function getVbotibo()
	{
		return $this->vbotibo;
	}

	/**
	* Set vbonomb
	*
	*Nombre Bodega
	*
	* @parámetro String $vbonomb
	* @return Vbonomb
	*/
	public function setVbonomb($vbonomb)
	{
	  $this->vbonomb = (String) $vbonomb;
	    return $this;
	}

	/**
	* Get vbonomb
	*
	* @return null|String
	*/
	public function getVbonomb()
	{
		return $this->vbonomb;
	}

	/**
	* Set mmcsec1
	*
	*Código Responsable de Bodega
	*
	* @parámetro Integer $mmcsec1
	* @return Mmcsec1
	*/
	public function setMmcsec1($mmcsec1)
	{
	  $this->mmcsec1 = (Integer) $mmcsec1;
	    return $this;
	}

	/**
	* Get mmcsec1
	*
	* @return null|Integer
	*/
	public function getMmcsec1()
	{
		return $this->mmcsec1;
	}

	/**
	* Set vbopais
	*
	*País
	*
	* @parámetro String $vbopais
	* @return Vbopais
	*/
	public function setVbopais($vbopais)
	{
	  $this->vbopais = (String) $vbopais;
	    return $this;
	}

	/**
	* Get vbopais
	*
	* @return null|String
	*/
	public function getVbopais()
	{
		return $this->vbopais;
	}

	/**
	* Set vboprov
	*
	*Provincia
	*
	* @parámetro String $vboprov
	* @return Vboprov
	*/
	public function setVboprov($vboprov)
	{
	  $this->vboprov = (String) $vboprov;
	    return $this;
	}

	/**
	* Get vboprov
	*
	* @return null|String
	*/
	public function getVboprov()
	{
		return $this->vboprov;
	}

	/**
	* Set vbociud
	*
	*Ciudad
	*
	* @parámetro String $vbociud
	* @return Vbociud
	*/
	public function setVbociud($vbociud)
	{
	  $this->vbociud = (String) $vbociud;
	    return $this;
	}

	/**
	* Get vbociud
	*
	* @return null|String
	*/
	public function getVbociud()
	{
		return $this->vbociud;
	}

	/**
	* Set vbotel1
	*
	*Teléfono 1
	*
	* @parámetro String $vbotel1
	* @return Vbotel1
	*/
	public function setVbotel1($vbotel1)
	{
	  $this->vbotel1 = (String) $vbotel1;
	    return $this;
	}

	/**
	* Get vbotel1
	*
	* @return null|String
	*/
	public function getVbotel1()
	{
		return $this->vbotel1;
	}

	/**
	* Set vbotel2
	*
	*Teléfono 2
	*
	* @parámetro String $vbotel2
	* @return Vbotel2
	*/
	public function setVbotel2($vbotel2)
	{
	  $this->vbotel2 = (String) $vbotel2;
	    return $this;
	}

	/**
	* Get vbotel2
	*
	* @return null|String
	*/
	public function getVbotel2()
	{
		return $this->vbotel2;
	}

	/**
	* Set vbotel3
	*
	*Teléfono 3
	*
	* @parámetro String $vbotel3
	* @return Vbotel3
	*/
	public function setVbotel3($vbotel3)
	{
	  $this->vbotel3 = (String) $vbotel3;
	    return $this;
	}

	/**
	* Get vbotel3
	*
	* @return null|String
	*/
	public function getVbotel3()
	{
		return $this->vbotel3;
	}

	/**
	* Set vbocoel
	*
	*Correo Electrónico
	*
	* @parámetro String $vbocoel
	* @return Vbocoel
	*/
	public function setVbocoel($vbocoel)
	{
	  $this->vbocoel = (String) $vbocoel;
	    return $this;
	}

	/**
	* Get vbocoel
	*
	* @return null|String
	*/
	public function getVbocoel()
	{
		return $this->vbocoel;
	}

	/**
	* Set vboresp
	*
	*Nombre Responsable de la Bodega
	*
	* @parámetro String $vboresp
	* @return Vboresp
	*/
	public function setVboresp($vboresp)
	{
	  $this->vboresp = (String) $vboresp;
	    return $this;
	}

	/**
	* Get vboresp
	*
	* @return null|String
	*/
	public function getVboresp()
	{
		return $this->vboresp;
	}

	/**
	* Set vbovalo
	*
	*Interviene en valorización
	*
	* @parámetro Integer $vbovalo
	* @return Vbovalo
	*/
	public function setVbovalo($vbovalo)
	{
	  $this->vbovalo = (Integer) $vbovalo;
	    return $this;
	}

	/**
	* Get vbovalo
	*
	* @return null|Integer
	*/
	public function getVbovalo()
	{
		return $this->vbovalo;
	}

	/**
	* Set vbositu
	*
	*Situación de la Bodega
	*
	* @parámetro String $vbositu
	* @return Vbositu
	*/
	public function setVbositu($vbositu)
	{
	  $this->vbositu = (String) $vbositu;
	    return $this;
	}

	/**
	* Get vbositu
	*
	* @return null|String
	*/
	public function getVbositu()
	{
		return $this->vbositu;
	}

	/**
	* Set vboingr
	*
	*Número de Ingresos
	*
	* @parámetro Decimal $vboingr
	* @return Vboingr
	*/
	public function setVboingr($vboingr)
	{
	  $this->vboingr = (Double) $vboingr;
	    return $this;
	}

	/**
	* Get vboingr
	*
	* @return null|Decimal
	*/
	public function getVboingr()
	{
		return $this->vboingr;
	}

	/**
	* Set vbosali
	*
	*Número de Salidas
	*
	* @parámetro Decimal $vbosali
	* @return Vbosali
	*/
	public function setVbosali($vbosali)
	{
	  $this->vbosali = (Double) $vbosali;
	    return $this;
	}

	/**
	* Get vbosali
	*
	* @return null|Decimal
	*/
	public function getVbosali()
	{
		return $this->vbosali;
	}

	/**
	* Set vbotran
	*
	*Número de Transferencias
	*
	* @parámetro Decimal $vbotran
	* @return Vbotran
	*/
	public function setVbotran($vbotran)
	{
	  $this->vbotran = (Double) $vbotran;
	    return $this;
	}

	/**
	* Get vbotran
	*
	* @return null|Decimal
	*/
	public function getVbotran()
	{
		return $this->vbotran;
	}

	/**
	* Set vbocapr
	*
	*Calle Principal
	*
	* @parámetro String $vbocapr
	* @return Vbocapr
	*/
	public function setVbocapr($vbocapr)
	{
	  $this->vbocapr = (String) $vbocapr;
	    return $this;
	}

	/**
	* Get vbocapr
	*
	* @return null|String
	*/
	public function getVbocapr()
	{
		return $this->vbocapr;
	}

	/**
	* Set vbononu
	*
	*Nomenclatura y Número
	*
	* @parámetro String $vbononu
	* @return Vbononu
	*/
	public function setVbononu($vbononu)
	{
	  $this->vbononu = (String) $vbononu;
	    return $this;
	}

	/**
	* Get vbononu
	*
	* @return null|String
	*/
	public function getVbononu()
	{
		return $this->vbononu;
	}

	/**
	* Set vbocase
	*
	*Calle Secundaria
	*
	* @parámetro String $vbocase
	* @return Vbocase
	*/
	public function setVbocase($vbocase)
	{
	  $this->vbocase = (String) $vbocase;
	    return $this;
	}

	/**
	* Get vbocase
	*
	* @return null|String
	*/
	public function getVbocase()
	{
		return $this->vbocase;
	}

	/**
	* Set vbousuc
	*
	*Usuario de creación
	*
	* @parámetro String $vbousuc
	* @return Vbousuc
	*/
	public function setVbousuc($vbousuc)
	{
	  $this->vbousuc = (String) $vbousuc;
	    return $this;
	}

	/**
	* Get vbousuc
	*
	* @return null|String
	*/
	public function getVbousuc()
	{
		return $this->vbousuc;
	}

	/**
	* Set vbofecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vbofecc
	* @return Vbofecc
	*/
	public function setVbofecc($vbofecc)
	{
	  $this->vbofecc = (String) $vbofecc;
	    return $this;
	}

	/**
	* Get vbofecc
	*
	* @return null|Date
	*/
	public function getVbofecc()
	{
		return $this->vbofecc;
	}

	/**
	* Set vbousum
	*
	*Usuario de modificación
	*
	* @parámetro String $vbousum
	* @return Vbousum
	*/
	public function setVbousum($vbousum)
	{
	  $this->vbousum = (String) $vbousum;
	    return $this;
	}

	/**
	* Get vbousum
	*
	* @return null|String
	*/
	public function getVbousum()
	{
		return $this->vbousum;
	}

	/**
	* Set vbofecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vbofecm
	* @return Vbofecm
	*/
	public function setVbofecm($vbofecm)
	{
	  $this->vbofecm = (String) $vbofecm;
	    return $this;
	}

	/**
	* Get vbofecm
	*
	* @return null|Date
	*/
	public function getVbofecm()
	{
		return $this->vbofecm;
	}

	/**
	* Set vbotask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vbotask
	* @return Vbotask
	*/
	public function setVbotask($vbotask)
	{
	  $this->vbotask = (String) $vbotask;
	    return $this;
	}

	/**
	* Get vbotask
	*
	* @return null|String
	*/
	public function getVbotask()
	{
		return $this->vbotask;
	}

	/**
	* Set vbopara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $vbopara
	* @return Vbopara
	*/
	public function setVbopara($vbopara)
	{
	  $this->vbopara = (Integer) $vbopara;
	    return $this;
	}

	/**
	* Get vbopara
	*
	* @return null|Integer
	*/
	public function getVbopara()
	{
		return $this->vbopara;
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

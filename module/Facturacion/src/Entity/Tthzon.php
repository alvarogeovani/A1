<?php
 /**
 * Model of the Tthzon table
 *
 * It is used to convert the   Tthzon entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tthzon
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Tthzon
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TTHZON
		*/
		protected $thmsecu;
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
		* Optional field
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
		* @var String
		* Required field
		* Field visible in the form
		* Código de Zona
		*/
		protected $thmcozo;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Descripción de Zona
		*/
		protected $thmzona;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad total del Artículo
		*/
		protected $thmcvto;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta Moneda Nacional
		*/
		protected $thmvnto;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Costo Moneda Nacional
		*/
		protected $thmcnto;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta Moneda Extranjera
		*/
		protected $thmveto;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Costo Moneda Extranjera
		*/
		protected $thmceto;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Pedido
		*/
		protected $thmtipe;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $thmusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $thmfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $thmusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $thmfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejcutada
		*/
		protected $thmtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $thmpara;

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
	* Name of the table: tthzon
	* 
	 */
	const TABLE="tthzon";

	/**
	*Primary key
*/
		 const PKEY = "thmsecu";



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
		throw new \Exception('Class Entity: Tthzon Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tthzon. Invalid specified property: get'.$name);
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
	* Set thmsecu
	*
	*Clave Primaria de la Base de Datos: TTHZON
	*
	* @parámetro Integer $thmsecu
	* @return Thmsecu
	*/
	public function setThmsecu($thmsecu)
	{
	  $this->thmsecu = (Integer) $thmsecu;
	    return $this;
	}

	/**
	* Get thmsecu
	*
	* @return null|Integer
	*/
	public function getThmsecu()
	{
		return $this->thmsecu;
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
	* Set thmcozo
	*
	*Código de Zona
	*
	* @parámetro String $thmcozo
	* @return Thmcozo
	*/
	public function setThmcozo($thmcozo)
	{
	  $this->thmcozo = (String) $thmcozo;
	    return $this;
	}

	/**
	* Get thmcozo
	*
	* @return null|String
	*/
	public function getThmcozo()
	{
		return $this->thmcozo;
	}

	/**
	* Set thmzona
	*
	*Descripción de Zona
	*
	* @parámetro String $thmzona
	* @return Thmzona
	*/
	public function setThmzona($thmzona)
	{
	  $this->thmzona = (String) $thmzona;
	    return $this;
	}

	/**
	* Get thmzona
	*
	* @return null|String
	*/
	public function getThmzona()
	{
		return $this->thmzona;
	}

	/**
	* Set thmcvto
	*
	*Cantidad total del Artículo
	*
	* @parámetro Decimal $thmcvto
	* @return Thmcvto
	*/
	public function setThmcvto($thmcvto)
	{
	  $this->thmcvto = (Double) $thmcvto;
	    return $this;
	}

	/**
	* Get thmcvto
	*
	* @return null|Decimal
	*/
	public function getThmcvto()
	{
		return $this->thmcvto;
	}

	/**
	* Set thmvnto
	*
	*Valor Total Venta Moneda Nacional
	*
	* @parámetro Decimal $thmvnto
	* @return Thmvnto
	*/
	public function setThmvnto($thmvnto)
	{
	  $this->thmvnto = (Double) $thmvnto;
	    return $this;
	}

	/**
	* Get thmvnto
	*
	* @return null|Decimal
	*/
	public function getThmvnto()
	{
		return $this->thmvnto;
	}

	/**
	* Set thmcnto
	*
	*Valor Total Costo Moneda Nacional
	*
	* @parámetro Decimal $thmcnto
	* @return Thmcnto
	*/
	public function setThmcnto($thmcnto)
	{
	  $this->thmcnto = (Double) $thmcnto;
	    return $this;
	}

	/**
	* Get thmcnto
	*
	* @return null|Decimal
	*/
	public function getThmcnto()
	{
		return $this->thmcnto;
	}

	/**
	* Set thmveto
	*
	*Valor Total Venta Moneda Extranjera
	*
	* @parámetro Decimal $thmveto
	* @return Thmveto
	*/
	public function setThmveto($thmveto)
	{
	  $this->thmveto = (Double) $thmveto;
	    return $this;
	}

	/**
	* Get thmveto
	*
	* @return null|Decimal
	*/
	public function getThmveto()
	{
		return $this->thmveto;
	}

	/**
	* Set thmceto
	*
	*Valor Total Costo Moneda Extranjera
	*
	* @parámetro Decimal $thmceto
	* @return Thmceto
	*/
	public function setThmceto($thmceto)
	{
	  $this->thmceto = (Double) $thmceto;
	    return $this;
	}

	/**
	* Get thmceto
	*
	* @return null|Decimal
	*/
	public function getThmceto()
	{
		return $this->thmceto;
	}

	/**
	* Set thmtipe
	*
	*Tipo de Pedido
	*
	* @parámetro Integer $thmtipe
	* @return Thmtipe
	*/
	public function setThmtipe($thmtipe)
	{
	  $this->thmtipe = (Integer) $thmtipe;
	    return $this;
	}

	/**
	* Get thmtipe
	*
	* @return null|Integer
	*/
	public function getThmtipe()
	{
		return $this->thmtipe;
	}

	/**
	* Set thmusuc
	*
	*Usuario de creación
	*
	* @parámetro String $thmusuc
	* @return Thmusuc
	*/
	public function setThmusuc($thmusuc)
	{
	  $this->thmusuc = (String) $thmusuc;
	    return $this;
	}

	/**
	* Get thmusuc
	*
	* @return null|String
	*/
	public function getThmusuc()
	{
		return $this->thmusuc;
	}

	/**
	* Set thmfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $thmfecc
	* @return Thmfecc
	*/
	public function setThmfecc($thmfecc)
	{
	  $this->thmfecc = (String) $thmfecc;
	    return $this;
	}

	/**
	* Get thmfecc
	*
	* @return null|Date
	*/
	public function getThmfecc()
	{
		return $this->thmfecc;
	}

	/**
	* Set thmusum
	*
	*Usuario de modificación
	*
	* @parámetro String $thmusum
	* @return Thmusum
	*/
	public function setThmusum($thmusum)
	{
	  $this->thmusum = (String) $thmusum;
	    return $this;
	}

	/**
	* Get thmusum
	*
	* @return null|String
	*/
	public function getThmusum()
	{
		return $this->thmusum;
	}

	/**
	* Set thmfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $thmfecm
	* @return Thmfecm
	*/
	public function setThmfecm($thmfecm)
	{
	  $this->thmfecm = (String) $thmfecm;
	    return $this;
	}

	/**
	* Get thmfecm
	*
	* @return null|Date
	*/
	public function getThmfecm()
	{
		return $this->thmfecm;
	}

	/**
	* Set thmtask
	*
	*Tipo de tarea ejcutada
	*
	* @parámetro String $thmtask
	* @return Thmtask
	*/
	public function setThmtask($thmtask)
	{
	  $this->thmtask = (String) $thmtask;
	    return $this;
	}

	/**
	* Get thmtask
	*
	* @return null|String
	*/
	public function getThmtask()
	{
		return $this->thmtask;
	}

	/**
	* Set thmpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $thmpara
	* @return Thmpara
	*/
	public function setThmpara($thmpara)
	{
	  $this->thmpara = (Integer) $thmpara;
	    return $this;
	}

	/**
	* Get thmpara
	*
	* @return null|Integer
	*/
	public function getThmpara()
	{
		return $this->thmpara;
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

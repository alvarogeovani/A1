<?php
 /**
 * Model of the Ttlprh table
 *
 * It is used to convert the   Ttlprh entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttlprh
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttlprh
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Listas de Precios
		*/
		protected $tlpsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Registrar Monedas
		*/
		protected $bmosecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de la Nueva Lista  de Precios
		*/
		protected $tlpcodi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de la Nueva  Lista de Precios
		*/
		protected $tlpdesc;
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
		* Porcentaje de Descuento
		*/
		protected $tlppdsc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Considera Comisión en Venta
		*/
		protected $tlpdeta;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tlpusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tlpfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tlpusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tlpfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tlptask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tlppara;

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
	* Name of the table: ttlprh
	* 
	 */
	const TABLE="ttlprh";

	/**
	*Primary key
*/
		 const PKEY = "tlpsecu";



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
		throw new \Exception('Class Entity: Ttlprh Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttlprh. Invalid specified property: get'.$name);
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
	* Set tlpsecu
	*
	*Estos datos se ingresan en la Opción: Listas de Precios
	*
	* @parámetro Integer $tlpsecu
	* @return Tlpsecu
	*/
	public function setTlpsecu($tlpsecu)
	{
	  $this->tlpsecu = (Integer) $tlpsecu;
	    return $this;
	}

	/**
	* Get tlpsecu
	*
	* @return null|Integer
	*/
	public function getTlpsecu()
	{
		return $this->tlpsecu;
	}

	/**
	* Set bmosecu
	*
	*Estos datos se ingresan en la Opción: Registrar Monedas
	*
	* @parámetro Integer $bmosecu
	* @return Bmosecu
	*/
	public function setBmosecu($bmosecu)
	{
	  $this->bmosecu = (Integer) $bmosecu;
	    return $this;
	}

	/**
	* Get bmosecu
	*
	* @return null|Integer
	*/
	public function getBmosecu()
	{
		return $this->bmosecu;
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
	* Set tlpdesc
	*
	*Descripción de la Nueva  Lista de Precios
	*
	* @parámetro String $tlpdesc
	* @return Tlpdesc
	*/
	public function setTlpdesc($tlpdesc)
	{
	  $this->tlpdesc = (String) $tlpdesc;
	    return $this;
	}

	/**
	* Get tlpdesc
	*
	* @return null|String
	*/
	public function getTlpdesc()
	{
		return $this->tlpdesc;
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
	* Set tlppdsc
	*
	*Porcentaje de Descuento
	*
	* @parámetro Decimal $tlppdsc
	* @return Tlppdsc
	*/
	public function setTlppdsc($tlppdsc)
	{
	  $this->tlppdsc = (Double) $tlppdsc;
	    return $this;
	}

	/**
	* Get tlppdsc
	*
	* @return null|Decimal
	*/
	public function getTlppdsc()
	{
		return $this->tlppdsc;
	}

	/**
	* Set tlpdeta
	*
	*Considera Comisión en Venta
	*
	* @parámetro Integer $tlpdeta
	* @return Tlpdeta
	*/
	public function setTlpdeta($tlpdeta)
	{
	  $this->tlpdeta = (Integer) $tlpdeta;
	    return $this;
	}

	/**
	* Get tlpdeta
	*
	* @return null|Integer
	*/
	public function getTlpdeta()
	{
		return $this->tlpdeta;
	}

	/**
	* Set tlpusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tlpusuc
	* @return Tlpusuc
	*/
	public function setTlpusuc($tlpusuc)
	{
	  $this->tlpusuc = (String) $tlpusuc;
	    return $this;
	}

	/**
	* Get tlpusuc
	*
	* @return null|String
	*/
	public function getTlpusuc()
	{
		return $this->tlpusuc;
	}

	/**
	* Set tlpfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tlpfecc
	* @return Tlpfecc
	*/
	public function setTlpfecc($tlpfecc)
	{
	  $this->tlpfecc = (String) $tlpfecc;
	    return $this;
	}

	/**
	* Get tlpfecc
	*
	* @return null|Date
	*/
	public function getTlpfecc()
	{
		return $this->tlpfecc;
	}

	/**
	* Set tlpusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tlpusum
	* @return Tlpusum
	*/
	public function setTlpusum($tlpusum)
	{
	  $this->tlpusum = (String) $tlpusum;
	    return $this;
	}

	/**
	* Get tlpusum
	*
	* @return null|String
	*/
	public function getTlpusum()
	{
		return $this->tlpusum;
	}

	/**
	* Set tlpfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tlpfecm
	* @return Tlpfecm
	*/
	public function setTlpfecm($tlpfecm)
	{
	  $this->tlpfecm = (String) $tlpfecm;
	    return $this;
	}

	/**
	* Get tlpfecm
	*
	* @return null|Date
	*/
	public function getTlpfecm()
	{
		return $this->tlpfecm;
	}

	/**
	* Set tlptask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tlptask
	* @return Tlptask
	*/
	public function setTlptask($tlptask)
	{
	  $this->tlptask = (String) $tlptask;
	    return $this;
	}

	/**
	* Get tlptask
	*
	* @return null|String
	*/
	public function getTlptask()
	{
		return $this->tlptask;
	}

	/**
	* Set tlppara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tlppara
	* @return Tlppara
	*/
	public function setTlppara($tlppara)
	{
	  $this->tlppara = (Integer) $tlppara;
	    return $this;
	}

	/**
	* Get tlppara
	*
	* @return null|Integer
	*/
	public function getTlppara()
	{
		return $this->tlppara;
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

<?php
 /**
 * Model of the Ttfpdi table
 *
 * It is used to convert the   Ttfpdi entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttfpdi
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttfpdi
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: Formas de Pago por Distribuidor
		*/
		protected $tfpsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Formas de Pago
		*/
		protected $tcpsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Distribuidores
		*/
		protected $tdisecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Formas del Flujo de Dinero
		*/
		protected $tfpfldi;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tfpusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tfpfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tfpusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tfpfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tfptask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tfppara;

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
	* Name of the table: ttfpdi
	* 
	 */
	const TABLE="ttfpdi";

	/**
	*Primary key
*/
		 const PKEY = "tfpsecu";



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
		throw new \Exception('Class Entity: Ttfpdi Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttfpdi. Invalid specified property: get'.$name);
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
	* Set tfpsecu
	*
	*Clave Primaria de la Base de Datos: Formas de Pago por Distribuidor
	*
	* @parámetro Integer $tfpsecu
	* @return Tfpsecu
	*/
	public function setTfpsecu($tfpsecu)
	{
	  $this->tfpsecu = (Integer) $tfpsecu;
	    return $this;
	}

	/**
	* Get tfpsecu
	*
	* @return null|Integer
	*/
	public function getTfpsecu()
	{
		return $this->tfpsecu;
	}

	/**
	* Set tcpsecu
	*
	*Estos datos se ingresan en la Opción: Formas de Pago
	*
	* @parámetro Integer $tcpsecu
	* @return Tcpsecu
	*/
	public function setTcpsecu($tcpsecu)
	{
	  $this->tcpsecu = (Integer) $tcpsecu;
	    return $this;
	}

	/**
	* Get tcpsecu
	*
	* @return null|Integer
	*/
	public function getTcpsecu()
	{
		return $this->tcpsecu;
	}

	/**
	* Set tdisecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Distribuidores
	*
	* @parámetro Integer $tdisecu
	* @return Tdisecu
	*/
	public function setTdisecu($tdisecu)
	{
	  $this->tdisecu = (Integer) $tdisecu;
	    return $this;
	}

	/**
	* Get tdisecu
	*
	* @return null|Integer
	*/
	public function getTdisecu()
	{
		return $this->tdisecu;
	}

	/**
	* Set tfpfldi
	*
	*Formas del Flujo de Dinero
	*
	* @parámetro Integer $tfpfldi
	* @return Tfpfldi
	*/
	public function setTfpfldi($tfpfldi)
	{
	  $this->tfpfldi = (Integer) $tfpfldi;
	    return $this;
	}

	/**
	* Get tfpfldi
	*
	* @return null|Integer
	*/
	public function getTfpfldi()
	{
		return $this->tfpfldi;
	}

	/**
	* Set tfpusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tfpusuc
	* @return Tfpusuc
	*/
	public function setTfpusuc($tfpusuc)
	{
	  $this->tfpusuc = (String) $tfpusuc;
	    return $this;
	}

	/**
	* Get tfpusuc
	*
	* @return null|String
	*/
	public function getTfpusuc()
	{
		return $this->tfpusuc;
	}

	/**
	* Set tfpfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tfpfecc
	* @return Tfpfecc
	*/
	public function setTfpfecc($tfpfecc)
	{
	  $this->tfpfecc = (String) $tfpfecc;
	    return $this;
	}

	/**
	* Get tfpfecc
	*
	* @return null|Date
	*/
	public function getTfpfecc()
	{
		return $this->tfpfecc;
	}

	/**
	* Set tfpusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tfpusum
	* @return Tfpusum
	*/
	public function setTfpusum($tfpusum)
	{
	  $this->tfpusum = (String) $tfpusum;
	    return $this;
	}

	/**
	* Get tfpusum
	*
	* @return null|String
	*/
	public function getTfpusum()
	{
		return $this->tfpusum;
	}

	/**
	* Set tfpfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tfpfecm
	* @return Tfpfecm
	*/
	public function setTfpfecm($tfpfecm)
	{
	  $this->tfpfecm = (String) $tfpfecm;
	    return $this;
	}

	/**
	* Get tfpfecm
	*
	* @return null|Date
	*/
	public function getTfpfecm()
	{
		return $this->tfpfecm;
	}

	/**
	* Set tfptask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tfptask
	* @return Tfptask
	*/
	public function setTfptask($tfptask)
	{
	  $this->tfptask = (String) $tfptask;
	    return $this;
	}

	/**
	* Get tfptask
	*
	* @return null|String
	*/
	public function getTfptask()
	{
		return $this->tfptask;
	}

	/**
	* Set tfppara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tfppara
	* @return Tfppara
	*/
	public function setTfppara($tfppara)
	{
	  $this->tfppara = (Integer) $tfppara;
	    return $this;
	}

	/**
	* Get tfppara
	*
	* @return null|Integer
	*/
	public function getTfppara()
	{
		return $this->tfppara;
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

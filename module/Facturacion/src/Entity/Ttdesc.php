<?php
 /**
 * Model of the Ttdesc table
 *
 * It is used to convert the   Ttdesc entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttdesc
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttdesc
{

		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Secuencial para utilizar como clave primaria
		*/
		protected $tdssecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opción: Maestro de Puntos de Venta
		*/
		protected $tpvsecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Combinación de las variables
		*/
		protected $tdscomb;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de operación Suma o Escalonado, para aplicar los descuentos
		*/
		protected $tdstiop;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Formula para aplicar el descuento
		*/
		protected $tdsfoap;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Lote del artículo que se aplica el descuento
		*/
		protected $tdsloar;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Rango para saber la venta mínima para aplicar el descuento
		*/
		protected $tdsrang;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tdsusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tdsfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tdsusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tdsfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tdstask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tdspara;

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
	* Name of the table: ttdesc
	* 
	 */
	const TABLE="ttdesc";

	/**
	*Primary key
*/
		 const PKEY = "tdssecu";



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
		throw new \Exception('Class Entity: Ttdesc Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttdesc. Invalid specified property: get'.$name);
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
	* Set tdssecu
	*
	*Secuencial para utilizar como clave primaria
	*
	* @parámetro Integer $tdssecu
	* @return Tdssecu
	*/
	public function setTdssecu($tdssecu)
	{
	  $this->tdssecu = (Integer) $tdssecu;
	    return $this;
	}

	/**
	* Get tdssecu
	*
	* @return null|Integer
	*/
	public function getTdssecu()
	{
		return $this->tdssecu;
	}

	/**
	* Set tpvsecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Puntos de Venta
	*
	* @parámetro Integer $tpvsecu
	* @return Tpvsecu
	*/
	public function setTpvsecu($tpvsecu)
	{
	  $this->tpvsecu = (Integer) $tpvsecu;
	    return $this;
	}

	/**
	* Get tpvsecu
	*
	* @return null|Integer
	*/
	public function getTpvsecu()
	{
		return $this->tpvsecu;
	}

	/**
	* Set tdscomb
	*
	*Combinación de las variables
	*
	* @parámetro String $tdscomb
	* @return Tdscomb
	*/
	public function setTdscomb($tdscomb)
	{
	  $this->tdscomb = (String) $tdscomb;
	    return $this;
	}

	/**
	* Get tdscomb
	*
	* @return null|String
	*/
	public function getTdscomb()
	{
		return $this->tdscomb;
	}

	/**
	* Set tdstiop
	*
	*Tipo de operación Suma o Escalonado, para aplicar los descuentos
	*
	* @parámetro Integer $tdstiop
	* @return Tdstiop
	*/
	public function setTdstiop($tdstiop)
	{
	  $this->tdstiop = (Integer) $tdstiop;
	    return $this;
	}

	/**
	* Get tdstiop
	*
	* @return null|Integer
	*/
	public function getTdstiop()
	{
		return $this->tdstiop;
	}

	/**
	* Set tdsfoap
	*
	*Formula para aplicar el descuento
	*
	* @parámetro String $tdsfoap
	* @return Tdsfoap
	*/
	public function setTdsfoap($tdsfoap)
	{
	  $this->tdsfoap = (String) $tdsfoap;
	    return $this;
	}

	/**
	* Get tdsfoap
	*
	* @return null|String
	*/
	public function getTdsfoap()
	{
		return $this->tdsfoap;
	}

	/**
	* Set tdsloar
	*
	*Lote del artículo que se aplica el descuento
	*
	* @parámetro String $tdsloar
	* @return Tdsloar
	*/
	public function setTdsloar($tdsloar)
	{
	  $this->tdsloar = (String) $tdsloar;
	    return $this;
	}

	/**
	* Get tdsloar
	*
	* @return null|String
	*/
	public function getTdsloar()
	{
		return $this->tdsloar;
	}

	/**
	* Set tdsrang
	*
	*Rango para saber la venta mínima para aplicar el descuento
	*
	* @parámetro Decimal $tdsrang
	* @return Tdsrang
	*/
	public function setTdsrang($tdsrang)
	{
	  $this->tdsrang = (Double) $tdsrang;
	    return $this;
	}

	/**
	* Get tdsrang
	*
	* @return null|Decimal
	*/
	public function getTdsrang()
	{
		return $this->tdsrang;
	}

	/**
	* Set tdsusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tdsusuc
	* @return Tdsusuc
	*/
	public function setTdsusuc($tdsusuc)
	{
	  $this->tdsusuc = (String) $tdsusuc;
	    return $this;
	}

	/**
	* Get tdsusuc
	*
	* @return null|String
	*/
	public function getTdsusuc()
	{
		return $this->tdsusuc;
	}

	/**
	* Set tdsfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tdsfecc
	* @return Tdsfecc
	*/
	public function setTdsfecc($tdsfecc)
	{
	  $this->tdsfecc = (String) $tdsfecc;
	    return $this;
	}

	/**
	* Get tdsfecc
	*
	* @return null|Date
	*/
	public function getTdsfecc()
	{
		return $this->tdsfecc;
	}

	/**
	* Set tdsusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tdsusum
	* @return Tdsusum
	*/
	public function setTdsusum($tdsusum)
	{
	  $this->tdsusum = (String) $tdsusum;
	    return $this;
	}

	/**
	* Get tdsusum
	*
	* @return null|String
	*/
	public function getTdsusum()
	{
		return $this->tdsusum;
	}

	/**
	* Set tdsfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tdsfecm
	* @return Tdsfecm
	*/
	public function setTdsfecm($tdsfecm)
	{
	  $this->tdsfecm = (String) $tdsfecm;
	    return $this;
	}

	/**
	* Get tdsfecm
	*
	* @return null|Date
	*/
	public function getTdsfecm()
	{
		return $this->tdsfecm;
	}

	/**
	* Set tdstask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tdstask
	* @return Tdstask
	*/
	public function setTdstask($tdstask)
	{
	  $this->tdstask = (String) $tdstask;
	    return $this;
	}

	/**
	* Get tdstask
	*
	* @return null|String
	*/
	public function getTdstask()
	{
		return $this->tdstask;
	}

	/**
	* Set tdspara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tdspara
	* @return Tdspara
	*/
	public function setTdspara($tdspara)
	{
	  $this->tdspara = (Integer) $tdspara;
	    return $this;
	}

	/**
	* Get tdspara
	*
	* @return null|Integer
	*/
	public function getTdspara()
	{
		return $this->tdspara;
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

<?php
 /**
 * Model of the Tkrecd table
 *
 * It is used to convert the   Tkrecd entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tkrecd
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tkrecd
{

		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Registrar Ordenes de Compras
		*/
		protected $krdsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Registrar Ordenes de Compras
		*/
		protected $krhsecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Registro de Cuentas por Pagar
		*/
		protected $krhrcxp;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Codigo de Cuenta Contable
		*/
		protected $bctacod;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Codigo Centro de Costo
		*/
		protected $bcdccve;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Valor
		*/
		protected $krddimp;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de Creacion
		*/
		protected $krdusuc;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de Creacion
		*/
		protected $krdfecc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de Modificacion
		*/
		protected $krdusum;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Modificacion
		*/
		protected $krdfecm;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Tipo de Tarea Ejecutada
		*/
		protected $krdtask;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Bandera de Borrado
		*/
		protected $krdpara;

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
	* Name of the table: tkrecd
	* 
	 */
	const TABLE="tkrecd";

	/**
	*Primary key
*/
		 const PKEY = "krdsecu";



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
		throw new \Exception('Class Entity: Tkrecd Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tkrecd. Invalid specified property: get'.$name);
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
	* Set krdsecu
	*
	*Estos datos se ingresan en la Opcion: Registrar Ordenes de Compras
	*
	* @parámetro Integer $krdsecu
	* @return Krdsecu
	*/
	public function setKrdsecu($krdsecu)
	{
	  $this->krdsecu = (Integer) $krdsecu;
	    return $this;
	}

	/**
	* Get krdsecu
	*
	* @return null|Integer
	*/
	public function getKrdsecu()
	{
		return $this->krdsecu;
	}

	/**
	* Set krhsecu
	*
	*Estos datos se ingresan en la Opcion: Registrar Ordenes de Compras
	*
	* @parámetro Integer $krhsecu
	* @return Krhsecu
	*/
	public function setKrhsecu($krhsecu)
	{
	  $this->krhsecu = (Integer) $krhsecu;
	    return $this;
	}

	/**
	* Get krhsecu
	*
	* @return null|Integer
	*/
	public function getKrhsecu()
	{
		return $this->krhsecu;
	}

	/**
	* Set krhrcxp
	*
	*Registro de Cuentas por Pagar
	*
	* @parámetro String $krhrcxp
	* @return Krhrcxp
	*/
	public function setKrhrcxp($krhrcxp)
	{
	  $this->krhrcxp = (String) $krhrcxp;
	    return $this;
	}

	/**
	* Get krhrcxp
	*
	* @return null|String
	*/
	public function getKrhrcxp()
	{
		return $this->krhrcxp;
	}

	/**
	* Set bctacod
	*
	*Codigo de Cuenta Contable
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
	* Set bcdccve
	*
	*Codigo Centro de Costo
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
	* Set krddimp
	*
	*Valor
	*
	* @parámetro Decimal $krddimp
	* @return Krddimp
	*/
	public function setKrddimp($krddimp)
	{
	  $this->krddimp = (Double) $krddimp;
	    return $this;
	}

	/**
	* Get krddimp
	*
	* @return null|Decimal
	*/
	public function getKrddimp()
	{
		return $this->krddimp;
	}

	/**
	* Set krdusuc
	*
	*Usuario de Creacion
	*
	* @parámetro String $krdusuc
	* @return Krdusuc
	*/
	public function setKrdusuc($krdusuc)
	{
	  $this->krdusuc = (String) $krdusuc;
	    return $this;
	}

	/**
	* Get krdusuc
	*
	* @return null|String
	*/
	public function getKrdusuc()
	{
		return $this->krdusuc;
	}

	/**
	* Set krdfecc
	*
	*Fecha de Creacion
	*
	* @parámetro Date $krdfecc
	* @return Krdfecc
	*/
	public function setKrdfecc($krdfecc)
	{
	  $this->krdfecc = (String) $krdfecc;
	    return $this;
	}

	/**
	* Get krdfecc
	*
	* @return null|Date
	*/
	public function getKrdfecc()
	{
		return $this->krdfecc;
	}

	/**
	* Set krdusum
	*
	*Usuario de Modificacion
	*
	* @parámetro String $krdusum
	* @return Krdusum
	*/
	public function setKrdusum($krdusum)
	{
	  $this->krdusum = (String) $krdusum;
	    return $this;
	}

	/**
	* Get krdusum
	*
	* @return null|String
	*/
	public function getKrdusum()
	{
		return $this->krdusum;
	}

	/**
	* Set krdfecm
	*
	*Fecha de Modificacion
	*
	* @parámetro Date $krdfecm
	* @return Krdfecm
	*/
	public function setKrdfecm($krdfecm)
	{
	  $this->krdfecm = (String) $krdfecm;
	    return $this;
	}

	/**
	* Get krdfecm
	*
	* @return null|Date
	*/
	public function getKrdfecm()
	{
		return $this->krdfecm;
	}

	/**
	* Set krdtask
	*
	*Tipo de Tarea Ejecutada
	*
	* @parámetro String $krdtask
	* @return Krdtask
	*/
	public function setKrdtask($krdtask)
	{
	  $this->krdtask = (String) $krdtask;
	    return $this;
	}

	/**
	* Get krdtask
	*
	* @return null|String
	*/
	public function getKrdtask()
	{
		return $this->krdtask;
	}

	/**
	* Set krdpara
	*
	*Bandera de Borrado
	*
	* @parámetro Integer $krdpara
	* @return Krdpara
	*/
	public function setKrdpara($krdpara)
	{
	  $this->krdpara = (Integer) $krdpara;
	    return $this;
	}

	/**
	* Get krdpara
	*
	* @return null|Integer
	*/
	public function getKrdpara()
	{
		return $this->krdpara;
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

<?php
 /**
 * Model of the Tvsend table
 *
 * It is used to convert the   Tvsend entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvsend
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvsend
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* 
		*/
		protected $vsvsecu;
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
		* Estos datos se ingresan en la Opción: Facturación Normal
		*/
		protected $tphsecu;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Entrega
		*/
		protected $vsvfeen;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Número de Entrega
		*/
		protected $vsvnuen;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad Registrada en la Factura
		*/
		protected $vsvcafa;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad Entregada
		*/
		protected $vsvcaen;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad Pendiente
		*/
		protected $vsvcape;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Peso de la Factura
		*/
		protected $vsvpefa;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Peso Total por Comprobante de Entrega
		*/
		protected $vsvpeen;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Peso pendiente
		*/
		protected $vsvpepe;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación de la Entrega
		*/
		protected $vsvsitu;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vsvusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vsvfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vsvusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vsvfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vsvtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $vsvpara;

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
	* Name of the table: tvsend
	* 
	 */
	const TABLE="tvsend";

	/**
	*Primary key
*/
		 const PKEY = "vsvsecu";



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
		throw new \Exception('Class Entity: Tvsend Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvsend. Invalid specified property: get'.$name);
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
	* Set vsvsecu
	*
	*
	*
	* @parámetro Integer $vsvsecu
	* @return Vsvsecu
	*/
	public function setVsvsecu($vsvsecu)
	{
	  $this->vsvsecu = (Integer) $vsvsecu;
	    return $this;
	}

	/**
	* Get vsvsecu
	*
	* @return null|Integer
	*/
	public function getVsvsecu()
	{
		return $this->vsvsecu;
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
	* Set tphsecu
	*
	*Estos datos se ingresan en la Opción: Facturación Normal
	*
	* @parámetro Integer $tphsecu
	* @return Tphsecu
	*/
	public function setTphsecu($tphsecu)
	{
	  $this->tphsecu = (Integer) $tphsecu;
	    return $this;
	}

	/**
	* Get tphsecu
	*
	* @return null|Integer
	*/
	public function getTphsecu()
	{
		return $this->tphsecu;
	}

	/**
	* Set vsvfeen
	*
	*Fecha de Entrega
	*
	* @parámetro Date $vsvfeen
	* @return Vsvfeen
	*/
	public function setVsvfeen($vsvfeen)
	{
	  $this->vsvfeen = (String) $vsvfeen;
	    return $this;
	}

	/**
	* Get vsvfeen
	*
	* @return null|Date
	*/
	public function getVsvfeen()
	{
		return $this->vsvfeen;
	}

	/**
	* Set vsvnuen
	*
	*Número de Entrega
	*
	* @parámetro Integer $vsvnuen
	* @return Vsvnuen
	*/
	public function setVsvnuen($vsvnuen)
	{
	  $this->vsvnuen = (Integer) $vsvnuen;
	    return $this;
	}

	/**
	* Get vsvnuen
	*
	* @return null|Integer
	*/
	public function getVsvnuen()
	{
		return $this->vsvnuen;
	}

	/**
	* Set vsvcafa
	*
	*Cantidad Registrada en la Factura
	*
	* @parámetro Decimal $vsvcafa
	* @return Vsvcafa
	*/
	public function setVsvcafa($vsvcafa)
	{
	  $this->vsvcafa = (Double) $vsvcafa;
	    return $this;
	}

	/**
	* Get vsvcafa
	*
	* @return null|Decimal
	*/
	public function getVsvcafa()
	{
		return $this->vsvcafa;
	}

	/**
	* Set vsvcaen
	*
	*Cantidad Entregada
	*
	* @parámetro Decimal $vsvcaen
	* @return Vsvcaen
	*/
	public function setVsvcaen($vsvcaen)
	{
	  $this->vsvcaen = (Double) $vsvcaen;
	    return $this;
	}

	/**
	* Get vsvcaen
	*
	* @return null|Decimal
	*/
	public function getVsvcaen()
	{
		return $this->vsvcaen;
	}

	/**
	* Set vsvcape
	*
	*Cantidad Pendiente
	*
	* @parámetro Decimal $vsvcape
	* @return Vsvcape
	*/
	public function setVsvcape($vsvcape)
	{
	  $this->vsvcape = (Double) $vsvcape;
	    return $this;
	}

	/**
	* Get vsvcape
	*
	* @return null|Decimal
	*/
	public function getVsvcape()
	{
		return $this->vsvcape;
	}

	/**
	* Set vsvpefa
	*
	*Peso de la Factura
	*
	* @parámetro Decimal $vsvpefa
	* @return Vsvpefa
	*/
	public function setVsvpefa($vsvpefa)
	{
	  $this->vsvpefa = (Double) $vsvpefa;
	    return $this;
	}

	/**
	* Get vsvpefa
	*
	* @return null|Decimal
	*/
	public function getVsvpefa()
	{
		return $this->vsvpefa;
	}

	/**
	* Set vsvpeen
	*
	*Peso Total por Comprobante de Entrega
	*
	* @parámetro Decimal $vsvpeen
	* @return Vsvpeen
	*/
	public function setVsvpeen($vsvpeen)
	{
	  $this->vsvpeen = (Double) $vsvpeen;
	    return $this;
	}

	/**
	* Get vsvpeen
	*
	* @return null|Decimal
	*/
	public function getVsvpeen()
	{
		return $this->vsvpeen;
	}

	/**
	* Set vsvpepe
	*
	*Peso pendiente
	*
	* @parámetro Decimal $vsvpepe
	* @return Vsvpepe
	*/
	public function setVsvpepe($vsvpepe)
	{
	  $this->vsvpepe = (Double) $vsvpepe;
	    return $this;
	}

	/**
	* Get vsvpepe
	*
	* @return null|Decimal
	*/
	public function getVsvpepe()
	{
		return $this->vsvpepe;
	}

	/**
	* Set vsvsitu
	*
	*Situación de la Entrega
	*
	* @parámetro Integer $vsvsitu
	* @return Vsvsitu
	*/
	public function setVsvsitu($vsvsitu)
	{
	  $this->vsvsitu = (Integer) $vsvsitu;
	    return $this;
	}

	/**
	* Get vsvsitu
	*
	* @return null|Integer
	*/
	public function getVsvsitu()
	{
		return $this->vsvsitu;
	}

	/**
	* Set vsvusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vsvusuc
	* @return Vsvusuc
	*/
	public function setVsvusuc($vsvusuc)
	{
	  $this->vsvusuc = (String) $vsvusuc;
	    return $this;
	}

	/**
	* Get vsvusuc
	*
	* @return null|String
	*/
	public function getVsvusuc()
	{
		return $this->vsvusuc;
	}

	/**
	* Set vsvfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vsvfecc
	* @return Vsvfecc
	*/
	public function setVsvfecc($vsvfecc)
	{
	  $this->vsvfecc = (String) $vsvfecc;
	    return $this;
	}

	/**
	* Get vsvfecc
	*
	* @return null|Date
	*/
	public function getVsvfecc()
	{
		return $this->vsvfecc;
	}

	/**
	* Set vsvusum
	*
	*Usuario de modificación
	*
	* @parámetro String $vsvusum
	* @return Vsvusum
	*/
	public function setVsvusum($vsvusum)
	{
	  $this->vsvusum = (String) $vsvusum;
	    return $this;
	}

	/**
	* Get vsvusum
	*
	* @return null|String
	*/
	public function getVsvusum()
	{
		return $this->vsvusum;
	}

	/**
	* Set vsvfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vsvfecm
	* @return Vsvfecm
	*/
	public function setVsvfecm($vsvfecm)
	{
	  $this->vsvfecm = (String) $vsvfecm;
	    return $this;
	}

	/**
	* Get vsvfecm
	*
	* @return null|Date
	*/
	public function getVsvfecm()
	{
		return $this->vsvfecm;
	}

	/**
	* Set vsvtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vsvtask
	* @return Vsvtask
	*/
	public function setVsvtask($vsvtask)
	{
	  $this->vsvtask = (String) $vsvtask;
	    return $this;
	}

	/**
	* Get vsvtask
	*
	* @return null|String
	*/
	public function getVsvtask()
	{
		return $this->vsvtask;
	}

	/**
	* Set vsvpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $vsvpara
	* @return Vsvpara
	*/
	public function setVsvpara($vsvpara)
	{
	  $this->vsvpara = (Integer) $vsvpara;
	    return $this;
	}

	/**
	* Get vsvpara
	*
	* @return null|Integer
	*/
	public function getVsvpara()
	{
		return $this->vsvpara;
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

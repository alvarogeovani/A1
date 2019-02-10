<?php
 /**
 * Model of the Tvsall table
 *
 * It is used to convert the   Tvsall entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvsall
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvsall
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TVSALL
		*/
		protected $vslsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TVSALM
		*/
		protected $vsasecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Número de Lote
		*/
		protected $vslllot;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Creación
		*/
		protected $vsllfcr;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Vencimiento
		*/
		protected $vsllvto;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo Actual
		*/
		protected $vsllact;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Stock Comprometido
		*/
		protected $vsllcom;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Temporal de Saldos Actual y Comprometido
		*/
		protected $vslltem;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Auxiliar usado en Asignación de Lotes, para poder relacionar la canidad existente y restar de la que ya se asigna lote
		*/
		protected $vmdseca;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vslusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vslfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vslusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vslfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vsltask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $vslpara;

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
	* Name of the table: tvsall
	* 
	 */
	const TABLE="tvsall";

	/**
	*Primary key
*/
		 const PKEY = "vslsecu";



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
		throw new \Exception('Class Entity: Tvsall Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvsall. Invalid specified property: get'.$name);
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
	* Set vslsecu
	*
	*Clave Primaria de la Base de Datos: TVSALL
	*
	* @parámetro Integer $vslsecu
	* @return Vslsecu
	*/
	public function setVslsecu($vslsecu)
	{
	  $this->vslsecu = (Integer) $vslsecu;
	    return $this;
	}

	/**
	* Get vslsecu
	*
	* @return null|Integer
	*/
	public function getVslsecu()
	{
		return $this->vslsecu;
	}

	/**
	* Set vsasecu
	*
	*Clave Primaria de la Base de Datos: TVSALM
	*
	* @parámetro Integer $vsasecu
	* @return Vsasecu
	*/
	public function setVsasecu($vsasecu)
	{
	  $this->vsasecu = (Integer) $vsasecu;
	    return $this;
	}

	/**
	* Get vsasecu
	*
	* @return null|Integer
	*/
	public function getVsasecu()
	{
		return $this->vsasecu;
	}

	/**
	* Set vslllot
	*
	*Número de Lote
	*
	* @parámetro String $vslllot
	* @return Vslllot
	*/
	public function setVslllot($vslllot)
	{
	  $this->vslllot = (String) $vslllot;
	    return $this;
	}

	/**
	* Get vslllot
	*
	* @return null|String
	*/
	public function getVslllot()
	{
		return $this->vslllot;
	}

	/**
	* Set vsllfcr
	*
	*Fecha de Creación
	*
	* @parámetro Date $vsllfcr
	* @return Vsllfcr
	*/
	public function setVsllfcr($vsllfcr)
	{
	  $this->vsllfcr = (String) $vsllfcr;
	    return $this;
	}

	/**
	* Get vsllfcr
	*
	* @return null|Date
	*/
	public function getVsllfcr()
	{
		return $this->vsllfcr;
	}

	/**
	* Set vsllvto
	*
	*Fecha de Vencimiento
	*
	* @parámetro Date $vsllvto
	* @return Vsllvto
	*/
	public function setVsllvto($vsllvto)
	{
	  $this->vsllvto = (String) $vsllvto;
	    return $this;
	}

	/**
	* Get vsllvto
	*
	* @return null|Date
	*/
	public function getVsllvto()
	{
		return $this->vsllvto;
	}

	/**
	* Set vsllact
	*
	*Saldo Actual
	*
	* @parámetro Decimal $vsllact
	* @return Vsllact
	*/
	public function setVsllact($vsllact)
	{
	  $this->vsllact = (Double) $vsllact;
	    return $this;
	}

	/**
	* Get vsllact
	*
	* @return null|Decimal
	*/
	public function getVsllact()
	{
		return $this->vsllact;
	}

	/**
	* Set vsllcom
	*
	*Stock Comprometido
	*
	* @parámetro Decimal $vsllcom
	* @return Vsllcom
	*/
	public function setVsllcom($vsllcom)
	{
	  $this->vsllcom = (Double) $vsllcom;
	    return $this;
	}

	/**
	* Get vsllcom
	*
	* @return null|Decimal
	*/
	public function getVsllcom()
	{
		return $this->vsllcom;
	}

	/**
	* Set vslltem
	*
	*Temporal de Saldos Actual y Comprometido
	*
	* @parámetro Decimal $vslltem
	* @return Vslltem
	*/
	public function setVslltem($vslltem)
	{
	  $this->vslltem = (Double) $vslltem;
	    return $this;
	}

	/**
	* Get vslltem
	*
	* @return null|Decimal
	*/
	public function getVslltem()
	{
		return $this->vslltem;
	}

	/**
	* Set vmdseca
	*
	*Auxiliar usado en Asignación de Lotes, para poder relacionar la canidad existente y restar de la que ya se asigna lote
	*
	* @parámetro Integer $vmdseca
	* @return Vmdseca
	*/
	public function setVmdseca($vmdseca)
	{
	  $this->vmdseca = (Integer) $vmdseca;
	    return $this;
	}

	/**
	* Get vmdseca
	*
	* @return null|Integer
	*/
	public function getVmdseca()
	{
		return $this->vmdseca;
	}

	/**
	* Set vslusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vslusuc
	* @return Vslusuc
	*/
	public function setVslusuc($vslusuc)
	{
	  $this->vslusuc = (String) $vslusuc;
	    return $this;
	}

	/**
	* Get vslusuc
	*
	* @return null|String
	*/
	public function getVslusuc()
	{
		return $this->vslusuc;
	}

	/**
	* Set vslfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vslfecc
	* @return Vslfecc
	*/
	public function setVslfecc($vslfecc)
	{
	  $this->vslfecc = (String) $vslfecc;
	    return $this;
	}

	/**
	* Get vslfecc
	*
	* @return null|Date
	*/
	public function getVslfecc()
	{
		return $this->vslfecc;
	}

	/**
	* Set vslusum
	*
	*Usuario de modificación
	*
	* @parámetro String $vslusum
	* @return Vslusum
	*/
	public function setVslusum($vslusum)
	{
	  $this->vslusum = (String) $vslusum;
	    return $this;
	}

	/**
	* Get vslusum
	*
	* @return null|String
	*/
	public function getVslusum()
	{
		return $this->vslusum;
	}

	/**
	* Set vslfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vslfecm
	* @return Vslfecm
	*/
	public function setVslfecm($vslfecm)
	{
	  $this->vslfecm = (String) $vslfecm;
	    return $this;
	}

	/**
	* Get vslfecm
	*
	* @return null|Date
	*/
	public function getVslfecm()
	{
		return $this->vslfecm;
	}

	/**
	* Set vsltask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vsltask
	* @return Vsltask
	*/
	public function setVsltask($vsltask)
	{
	  $this->vsltask = (String) $vsltask;
	    return $this;
	}

	/**
	* Get vsltask
	*
	* @return null|String
	*/
	public function getVsltask()
	{
		return $this->vsltask;
	}

	/**
	* Set vslpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $vslpara
	* @return Vslpara
	*/
	public function setVslpara($vslpara)
	{
	  $this->vslpara = (Integer) $vslpara;
	    return $this;
	}

	/**
	* Get vslpara
	*
	* @return null|Integer
	*/
	public function getVslpara()
	{
		return $this->vslpara;
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

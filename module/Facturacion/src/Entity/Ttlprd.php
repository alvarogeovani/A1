<?php
 /**
 * Model of the Ttlprd table
 *
 * It is used to convert the   Ttlprd entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttlprd
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttlprd
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Listas de Precios
		*/
		protected $tldsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Opción: Maestro de Activos Fijos
		*/
		protected $fmasecu;
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
		* Estos datos se ingresan en la Opción: Maestro de Artículos
		*/
		protected $varsecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código de la Nueva Lista  de Precios
		*/
		protected $tlpcodi;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Mueve Inventarios
		*/
		protected $tldfvta;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Precio Unitario, asignado en la Lista de Precios
		*/
		protected $tldunit;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Porcentaje de Impuesto 1
		*/
		protected $tldtiva;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Porcentaje de Impuesto 2
		*/
		protected $tldtim2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Porcentaje de Impuesto 3
		*/
		protected $tldtim3;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Contempla Múltiplos
		*/
		protected $tldcomi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor del Múltiplo
		*/
		protected $tldmult;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Porcentaje tasa ICE
		*/
		protected $tldtice;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tldusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tldfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tldusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tldfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tldtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tldpara;

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
	* Name of the table: ttlprd
	* 
	 */
	const TABLE="ttlprd";

	/**
	*Primary key
*/
		 const PKEY = "tldsecu";



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
		throw new \Exception('Class Entity: Ttlprd Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttlprd. Invalid specified property: get'.$name);
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
	* Set tldsecu
	*
	*Estos datos se ingresan en la Opción: Listas de Precios
	*
	* @parámetro Integer $tldsecu
	* @return Tldsecu
	*/
	public function setTldsecu($tldsecu)
	{
	  $this->tldsecu = (Integer) $tldsecu;
	    return $this;
	}

	/**
	* Get tldsecu
	*
	* @return null|Integer
	*/
	public function getTldsecu()
	{
		return $this->tldsecu;
	}

	/**
	* Set fmasecu
	*
	*Opción: Maestro de Activos Fijos
	*
	* @parámetro Integer $fmasecu
	* @return Fmasecu
	*/
	public function setFmasecu($fmasecu)
	{
	  $this->fmasecu = (Integer) $fmasecu;
	    return $this;
	}

	/**
	* Get fmasecu
	*
	* @return null|Integer
	*/
	public function getFmasecu()
	{
		return $this->fmasecu;
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
	* Set tldfvta
	*
	*Mueve Inventarios
	*
	* @parámetro Decimal $tldfvta
	* @return Tldfvta
	*/
	public function setTldfvta($tldfvta)
	{
	  $this->tldfvta = (Double) $tldfvta;
	    return $this;
	}

	/**
	* Get tldfvta
	*
	* @return null|Decimal
	*/
	public function getTldfvta()
	{
		return $this->tldfvta;
	}

	/**
	* Set tldunit
	*
	*Precio Unitario, asignado en la Lista de Precios
	*
	* @parámetro Decimal $tldunit
	* @return Tldunit
	*/
	public function setTldunit($tldunit)
	{
	  $this->tldunit = (Double) $tldunit;
	    return $this;
	}

	/**
	* Get tldunit
	*
	* @return null|Decimal
	*/
	public function getTldunit()
	{
		return $this->tldunit;
	}

	/**
	* Set tldtiva
	*
	*Porcentaje de Impuesto 1
	*
	* @parámetro Decimal $tldtiva
	* @return Tldtiva
	*/
	public function setTldtiva($tldtiva)
	{
	  $this->tldtiva = (Double) $tldtiva;
	    return $this;
	}

	/**
	* Get tldtiva
	*
	* @return null|Decimal
	*/
	public function getTldtiva()
	{
		return $this->tldtiva;
	}

	/**
	* Set tldtim2
	*
	*Porcentaje de Impuesto 2
	*
	* @parámetro Decimal $tldtim2
	* @return Tldtim2
	*/
	public function setTldtim2($tldtim2)
	{
	  $this->tldtim2 = (Double) $tldtim2;
	    return $this;
	}

	/**
	* Get tldtim2
	*
	* @return null|Decimal
	*/
	public function getTldtim2()
	{
		return $this->tldtim2;
	}

	/**
	* Set tldtim3
	*
	*Porcentaje de Impuesto 3
	*
	* @parámetro Decimal $tldtim3
	* @return Tldtim3
	*/
	public function setTldtim3($tldtim3)
	{
	  $this->tldtim3 = (Double) $tldtim3;
	    return $this;
	}

	/**
	* Get tldtim3
	*
	* @return null|Decimal
	*/
	public function getTldtim3()
	{
		return $this->tldtim3;
	}

	/**
	* Set tldcomi
	*
	*Contempla Múltiplos
	*
	* @parámetro Integer $tldcomi
	* @return Tldcomi
	*/
	public function setTldcomi($tldcomi)
	{
	  $this->tldcomi = (Integer) $tldcomi;
	    return $this;
	}

	/**
	* Get tldcomi
	*
	* @return null|Integer
	*/
	public function getTldcomi()
	{
		return $this->tldcomi;
	}

	/**
	* Set tldmult
	*
	*Valor del Múltiplo
	*
	* @parámetro Decimal $tldmult
	* @return Tldmult
	*/
	public function setTldmult($tldmult)
	{
	  $this->tldmult = (Double) $tldmult;
	    return $this;
	}

	/**
	* Get tldmult
	*
	* @return null|Decimal
	*/
	public function getTldmult()
	{
		return $this->tldmult;
	}

	/**
	* Set tldtice
	*
	*Porcentaje tasa ICE
	*
	* @parámetro Decimal $tldtice
	* @return Tldtice
	*/
	public function setTldtice($tldtice)
	{
	  $this->tldtice = (Double) $tldtice;
	    return $this;
	}

	/**
	* Get tldtice
	*
	* @return null|Decimal
	*/
	public function getTldtice()
	{
		return $this->tldtice;
	}

	/**
	* Set tldusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tldusuc
	* @return Tldusuc
	*/
	public function setTldusuc($tldusuc)
	{
	  $this->tldusuc = (String) $tldusuc;
	    return $this;
	}

	/**
	* Get tldusuc
	*
	* @return null|String
	*/
	public function getTldusuc()
	{
		return $this->tldusuc;
	}

	/**
	* Set tldfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tldfecc
	* @return Tldfecc
	*/
	public function setTldfecc($tldfecc)
	{
	  $this->tldfecc = (String) $tldfecc;
	    return $this;
	}

	/**
	* Get tldfecc
	*
	* @return null|Date
	*/
	public function getTldfecc()
	{
		return $this->tldfecc;
	}

	/**
	* Set tldusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tldusum
	* @return Tldusum
	*/
	public function setTldusum($tldusum)
	{
	  $this->tldusum = (String) $tldusum;
	    return $this;
	}

	/**
	* Get tldusum
	*
	* @return null|String
	*/
	public function getTldusum()
	{
		return $this->tldusum;
	}

	/**
	* Set tldfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tldfecm
	* @return Tldfecm
	*/
	public function setTldfecm($tldfecm)
	{
	  $this->tldfecm = (String) $tldfecm;
	    return $this;
	}

	/**
	* Get tldfecm
	*
	* @return null|Date
	*/
	public function getTldfecm()
	{
		return $this->tldfecm;
	}

	/**
	* Set tldtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tldtask
	* @return Tldtask
	*/
	public function setTldtask($tldtask)
	{
	  $this->tldtask = (String) $tldtask;
	    return $this;
	}

	/**
	* Get tldtask
	*
	* @return null|String
	*/
	public function getTldtask()
	{
		return $this->tldtask;
	}

	/**
	* Set tldpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tldpara
	* @return Tldpara
	*/
	public function setTldpara($tldpara)
	{
	  $this->tldpara = (Integer) $tldpara;
	    return $this;
	}

	/**
	* Get tldpara
	*
	* @return null|Integer
	*/
	public function getTldpara()
	{
		return $this->tldpara;
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

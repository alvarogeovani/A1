<?php
 /**
 * Model of the Tvdnar table
 *
 * It is used to convert the   Tvdnar entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvdnar
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvdnar
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Estructura Códigos de Artículos
		*/
		protected $veasecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Línea de Artículos
		*/
		protected $vartlin;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de Artículo
		*/
		protected $varttip;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Nivel del Código de Artículo
		*/
		protected $vearniv;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Controla la estructura del código Automático o no
		*/
		protected $veacont;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Auxiliar, guarda el secuencial de tabla de Etiquetas
		*/
		protected $rmeseau;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre del Campo
		*/
		protected $veacamp;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Descripción del Nivel Código de Artículo
		*/
		protected $veardes;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Secuencial de Parámetros del Nivel de Estructura
		*/
		protected $veasepa;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Posición Inicial del Nivel
		*/
		protected $vearpin;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Longitud del Nivel
		*/
		protected $vearlon;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Posición Final del Nivel
		*/
		protected $vearpfi;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $veausuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $veafecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $veausum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $veafecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $veatask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $veapara;

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
	* Name of the table: tvdnar
	* 
	 */
	const TABLE="tvdnar";

	/**
	*Primary key
*/
		 const PKEY = "veasecu";



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
		throw new \Exception('Class Entity: Tvdnar Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvdnar. Invalid specified property: get'.$name);
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
	* Set veasecu
	*
	*Estos datos se ingresan en la Opción: Estructura Códigos de Artículos
	*
	* @parámetro Integer $veasecu
	* @return Veasecu
	*/
	public function setVeasecu($veasecu)
	{
	  $this->veasecu = (Integer) $veasecu;
	    return $this;
	}

	/**
	* Get veasecu
	*
	* @return null|Integer
	*/
	public function getVeasecu()
	{
		return $this->veasecu;
	}

	/**
	* Set vartlin
	*
	*Línea de Artículos
	*
	* @parámetro Integer $vartlin
	* @return Vartlin
	*/
	public function setVartlin($vartlin)
	{
	  $this->vartlin = (Integer) $vartlin;
	    return $this;
	}

	/**
	* Get vartlin
	*
	* @return null|Integer
	*/
	public function getVartlin()
	{
		return $this->vartlin;
	}

	/**
	* Set varttip
	*
	*Tipo de Artículo
	*
	* @parámetro Integer $varttip
	* @return Varttip
	*/
	public function setVarttip($varttip)
	{
	  $this->varttip = (Integer) $varttip;
	    return $this;
	}

	/**
	* Get varttip
	*
	* @return null|Integer
	*/
	public function getVarttip()
	{
		return $this->varttip;
	}

	/**
	* Set vearniv
	*
	*Nivel del Código de Artículo
	*
	* @parámetro Decimal $vearniv
	* @return Vearniv
	*/
	public function setVearniv($vearniv)
	{
	  $this->vearniv = (Double) $vearniv;
	    return $this;
	}

	/**
	* Get vearniv
	*
	* @return null|Decimal
	*/
	public function getVearniv()
	{
		return $this->vearniv;
	}

	/**
	* Set veacont
	*
	*Controla la estructura del código Automático o no
	*
	* @parámetro Integer $veacont
	* @return Veacont
	*/
	public function setVeacont($veacont)
	{
	  $this->veacont = (Integer) $veacont;
	    return $this;
	}

	/**
	* Get veacont
	*
	* @return null|Integer
	*/
	public function getVeacont()
	{
		return $this->veacont;
	}

	/**
	* Set rmeseau
	*
	*Auxiliar, guarda el secuencial de tabla de Etiquetas
	*
	* @parámetro Integer $rmeseau
	* @return Rmeseau
	*/
	public function setRmeseau($rmeseau)
	{
	  $this->rmeseau = (Integer) $rmeseau;
	    return $this;
	}

	/**
	* Get rmeseau
	*
	* @return null|Integer
	*/
	public function getRmeseau()
	{
		return $this->rmeseau;
	}

	/**
	* Set veacamp
	*
	*Nombre del Campo
	*
	* @parámetro String $veacamp
	* @return Veacamp
	*/
	public function setVeacamp($veacamp)
	{
	  $this->veacamp = (String) $veacamp;
	    return $this;
	}

	/**
	* Get veacamp
	*
	* @return null|String
	*/
	public function getVeacamp()
	{
		return $this->veacamp;
	}

	/**
	* Set veardes
	*
	*Descripción del Nivel Código de Artículo
	*
	* @parámetro String $veardes
	* @return Veardes
	*/
	public function setVeardes($veardes)
	{
	  $this->veardes = (String) $veardes;
	    return $this;
	}

	/**
	* Get veardes
	*
	* @return null|String
	*/
	public function getVeardes()
	{
		return $this->veardes;
	}

	/**
	* Set veasepa
	*
	*Secuencial de Parámetros del Nivel de Estructura
	*
	* @parámetro Integer $veasepa
	* @return Veasepa
	*/
	public function setVeasepa($veasepa)
	{
	  $this->veasepa = (Integer) $veasepa;
	    return $this;
	}

	/**
	* Get veasepa
	*
	* @return null|Integer
	*/
	public function getVeasepa()
	{
		return $this->veasepa;
	}

	/**
	* Set vearpin
	*
	*Posición Inicial del Nivel
	*
	* @parámetro Decimal $vearpin
	* @return Vearpin
	*/
	public function setVearpin($vearpin)
	{
	  $this->vearpin = (Double) $vearpin;
	    return $this;
	}

	/**
	* Get vearpin
	*
	* @return null|Decimal
	*/
	public function getVearpin()
	{
		return $this->vearpin;
	}

	/**
	* Set vearlon
	*
	*Longitud del Nivel
	*
	* @parámetro Decimal $vearlon
	* @return Vearlon
	*/
	public function setVearlon($vearlon)
	{
	  $this->vearlon = (Double) $vearlon;
	    return $this;
	}

	/**
	* Get vearlon
	*
	* @return null|Decimal
	*/
	public function getVearlon()
	{
		return $this->vearlon;
	}

	/**
	* Set vearpfi
	*
	*Posición Final del Nivel
	*
	* @parámetro Decimal $vearpfi
	* @return Vearpfi
	*/
	public function setVearpfi($vearpfi)
	{
	  $this->vearpfi = (Double) $vearpfi;
	    return $this;
	}

	/**
	* Get vearpfi
	*
	* @return null|Decimal
	*/
	public function getVearpfi()
	{
		return $this->vearpfi;
	}

	/**
	* Set veausuc
	*
	*Usuario de creación
	*
	* @parámetro String $veausuc
	* @return Veausuc
	*/
	public function setVeausuc($veausuc)
	{
	  $this->veausuc = (String) $veausuc;
	    return $this;
	}

	/**
	* Get veausuc
	*
	* @return null|String
	*/
	public function getVeausuc()
	{
		return $this->veausuc;
	}

	/**
	* Set veafecc
	*
	*Fecha de creación
	*
	* @parámetro Date $veafecc
	* @return Veafecc
	*/
	public function setVeafecc($veafecc)
	{
	  $this->veafecc = (String) $veafecc;
	    return $this;
	}

	/**
	* Get veafecc
	*
	* @return null|Date
	*/
	public function getVeafecc()
	{
		return $this->veafecc;
	}

	/**
	* Set veausum
	*
	*Usuario de modificación
	*
	* @parámetro String $veausum
	* @return Veausum
	*/
	public function setVeausum($veausum)
	{
	  $this->veausum = (String) $veausum;
	    return $this;
	}

	/**
	* Get veausum
	*
	* @return null|String
	*/
	public function getVeausum()
	{
		return $this->veausum;
	}

	/**
	* Set veafecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $veafecm
	* @return Veafecm
	*/
	public function setVeafecm($veafecm)
	{
	  $this->veafecm = (String) $veafecm;
	    return $this;
	}

	/**
	* Get veafecm
	*
	* @return null|Date
	*/
	public function getVeafecm()
	{
		return $this->veafecm;
	}

	/**
	* Set veatask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $veatask
	* @return Veatask
	*/
	public function setVeatask($veatask)
	{
	  $this->veatask = (String) $veatask;
	    return $this;
	}

	/**
	* Get veatask
	*
	* @return null|String
	*/
	public function getVeatask()
	{
		return $this->veatask;
	}

	/**
	* Set veapara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $veapara
	* @return Veapara
	*/
	public function setVeapara($veapara)
	{
	  $this->veapara = (Integer) $veapara;
	    return $this;
	}

	/**
	* Get veapara
	*
	* @return null|Integer
	*/
	public function getVeapara()
	{
		return $this->veapara;
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

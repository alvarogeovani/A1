<?php
 /**
 * Model of the Trmset table
 *
 * It is used to convert the   Trmset entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trmset
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trmset
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Mensajes de Etiquetas
		*/
		protected $rmesecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Módulos
		*/
		protected $rmosecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opción: Maestro de Menúes y Opciones
		*/
		protected $rnosecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código del Mensaje
		*/
		protected $varca01;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Texto de la Etiqueta
		*/
		protected $rmetext;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Comentario
		*/
		protected $rmecome;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Alias del texto del label
		*/
		protected $rmealia;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Controla si el label y el texto son visibles o no
		*/
		protected $rmecavi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Parámetros extras
		*/
		protected $rmepaex;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Valor predeterminado
		*/
		protected $rmevapr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Identifica si la etiqueta es para Formulario o para Reporte
		*/
		protected $rmetipo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Información Filtro de Reportes
		*/
		protected $rmeubic;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rmeusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rmefecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rmeusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rmefecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rmetask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rmepara;

	/**
	* Form fields 
	* @var array 
	 */
	Private $fields = Array();

	/**
	* Schema name 
	* 
	 */
	const   SCHEMA ="seguridad";

	/**
	* Name of the table: trmset
	* 
	 */
	const TABLE="trmset";

	/**
	*Primary key
*/
		 const PKEY = "rmesecu";



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
		throw new \Exception('Class Entity: Trmset Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trmset. Invalid specified property: get'.$name);
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
	* Set rmesecu
	*
	*Estos datos se ingresan en la Opción: Mensajes de Etiquetas
	*
	* @parámetro Integer $rmesecu
	* @return Rmesecu
	*/
	public function setRmesecu($rmesecu)
	{
	  $this->rmesecu = (Integer) $rmesecu;
	    return $this;
	}

	/**
	* Get rmesecu
	*
	* @return null|Integer
	*/
	public function getRmesecu()
	{
		return $this->rmesecu;
	}

	/**
	* Set rmosecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Módulos
	*
	* @parámetro Integer $rmosecu
	* @return Rmosecu
	*/
	public function setRmosecu($rmosecu)
	{
	  $this->rmosecu = (Integer) $rmosecu;
	    return $this;
	}

	/**
	* Get rmosecu
	*
	* @return null|Integer
	*/
	public function getRmosecu()
	{
		return $this->rmosecu;
	}

	/**
	* Set rnosecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Menúes y Opciones
	*
	* @parámetro Integer $rnosecu
	* @return Rnosecu
	*/
	public function setRnosecu($rnosecu)
	{
	  $this->rnosecu = (Integer) $rnosecu;
	    return $this;
	}

	/**
	* Get rnosecu
	*
	* @return null|Integer
	*/
	public function getRnosecu()
	{
		return $this->rnosecu;
	}

	/**
	* Set varca01
	*
	*Código del Mensaje
	*
	* @parámetro String $varca01
	* @return Varca01
	*/
	public function setVarca01($varca01)
	{
	  $this->varca01 = (String) $varca01;
	    return $this;
	}

	/**
	* Get varca01
	*
	* @return null|String
	*/
	public function getVarca01()
	{
		return $this->varca01;
	}

	/**
	* Set rmetext
	*
	*Texto de la Etiqueta
	*
	* @parámetro String $rmetext
	* @return Rmetext
	*/
	public function setRmetext($rmetext)
	{
	  $this->rmetext = (String) $rmetext;
	    return $this;
	}

	/**
	* Get rmetext
	*
	* @return null|String
	*/
	public function getRmetext()
	{
		return $this->rmetext;
	}

	/**
	* Set rmecome
	*
	*Comentario
	*
	* @parámetro String $rmecome
	* @return Rmecome
	*/
	public function setRmecome($rmecome)
	{
	  $this->rmecome = (String) $rmecome;
	    return $this;
	}

	/**
	* Get rmecome
	*
	* @return null|String
	*/
	public function getRmecome()
	{
		return $this->rmecome;
	}

	/**
	* Set rmealia
	*
	*Alias del texto del label
	*
	* @parámetro String $rmealia
	* @return Rmealia
	*/
	public function setRmealia($rmealia)
	{
	  $this->rmealia = (String) $rmealia;
	    return $this;
	}

	/**
	* Get rmealia
	*
	* @return null|String
	*/
	public function getRmealia()
	{
		return $this->rmealia;
	}

	/**
	* Set rmecavi
	*
	*Controla si el label y el texto son visibles o no
	*
	* @parámetro Integer $rmecavi
	* @return Rmecavi
	*/
	public function setRmecavi($rmecavi)
	{
	  $this->rmecavi = (Integer) $rmecavi;
	    return $this;
	}

	/**
	* Get rmecavi
	*
	* @return null|Integer
	*/
	public function getRmecavi()
	{
		return $this->rmecavi;
	}

	/**
	* Set rmepaex
	*
	*Parámetros extras
	*
	* @parámetro String $rmepaex
	* @return Rmepaex
	*/
	public function setRmepaex($rmepaex)
	{
	  $this->rmepaex = (String) $rmepaex;
	    return $this;
	}

	/**
	* Get rmepaex
	*
	* @return null|String
	*/
	public function getRmepaex()
	{
		return $this->rmepaex;
	}

	/**
	* Set rmevapr
	*
	*Valor predeterminado
	*
	* @parámetro String $rmevapr
	* @return Rmevapr
	*/
	public function setRmevapr($rmevapr)
	{
	  $this->rmevapr = (String) $rmevapr;
	    return $this;
	}

	/**
	* Get rmevapr
	*
	* @return null|String
	*/
	public function getRmevapr()
	{
		return $this->rmevapr;
	}

	/**
	* Set rmetipo
	*
	*Identifica si la etiqueta es para Formulario o para Reporte
	*
	* @parámetro Decimal $rmetipo
	* @return Rmetipo
	*/
	public function setRmetipo($rmetipo)
	{
	  $this->rmetipo = (Double) $rmetipo;
	    return $this;
	}

	/**
	* Get rmetipo
	*
	* @return null|Decimal
	*/
	public function getRmetipo()
	{
		return $this->rmetipo;
	}

	/**
	* Set rmeubic
	*
	*Información Filtro de Reportes
	*
	* @parámetro String $rmeubic
	* @return Rmeubic
	*/
	public function setRmeubic($rmeubic)
	{
	  $this->rmeubic = (String) $rmeubic;
	    return $this;
	}

	/**
	* Get rmeubic
	*
	* @return null|String
	*/
	public function getRmeubic()
	{
		return $this->rmeubic;
	}

	/**
	* Set rmeusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rmeusuc
	* @return Rmeusuc
	*/
	public function setRmeusuc($rmeusuc)
	{
	  $this->rmeusuc = (String) $rmeusuc;
	    return $this;
	}

	/**
	* Get rmeusuc
	*
	* @return null|String
	*/
	public function getRmeusuc()
	{
		return $this->rmeusuc;
	}

	/**
	* Set rmefecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rmefecc
	* @return Rmefecc
	*/
	public function setRmefecc($rmefecc)
	{
	  $this->rmefecc = (String) $rmefecc;
	    return $this;
	}

	/**
	* Get rmefecc
	*
	* @return null|Date
	*/
	public function getRmefecc()
	{
		return $this->rmefecc;
	}

	/**
	* Set rmeusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rmeusum
	* @return Rmeusum
	*/
	public function setRmeusum($rmeusum)
	{
	  $this->rmeusum = (String) $rmeusum;
	    return $this;
	}

	/**
	* Get rmeusum
	*
	* @return null|String
	*/
	public function getRmeusum()
	{
		return $this->rmeusum;
	}

	/**
	* Set rmefecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rmefecm
	* @return Rmefecm
	*/
	public function setRmefecm($rmefecm)
	{
	  $this->rmefecm = (String) $rmefecm;
	    return $this;
	}

	/**
	* Get rmefecm
	*
	* @return null|Date
	*/
	public function getRmefecm()
	{
		return $this->rmefecm;
	}

	/**
	* Set rmetask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rmetask
	* @return Rmetask
	*/
	public function setRmetask($rmetask)
	{
	  $this->rmetask = (String) $rmetask;
	    return $this;
	}

	/**
	* Get rmetask
	*
	* @return null|String
	*/
	public function getRmetask()
	{
		return $this->rmetask;
	}

	/**
	* Set rmepara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rmepara
	* @return Rmepara
	*/
	public function setRmepara($rmepara)
	{
	  $this->rmepara = (Integer) $rmepara;
	    return $this;
	}

	/**
	* Get rmepara
	*
	* @return null|Integer
	*/
	public function getRmepara()
	{
		return $this->rmepara;
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

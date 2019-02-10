<?php
 /**
 * Model of the Tropch table
 *
 * It is used to convert the   Tropch entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tropch
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Tropch
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Menúes y Opciones
		*/
		protected $rnosecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Módulos
		*/
		protected $rmosecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código del Nodo de cada Opción de Menú
		*/
		protected $rcodopc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nodo raíz de donde nace la Opción de Menú
		*/
		protected $rnodopc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nombre que despliega al Usuario en el Menú
		*/
		protected $rnomopc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre personalizado, tiene prioridad al momento de desplegar el menú al Usuario.
		*/
		protected $rnoalias;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Orden de despliegue
		*/
		protected $rordopc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nombre físico del archivo HTML
		*/
		protected $rforopc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nivel de la Opción
		*/
		protected $rnivopc;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Ultimo Nivel
		*/
		protected $rultopc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de la opción
		*/
		protected $rdesopc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación de la Opción
		*/
		protected $rnopsit;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Parámetros extras para cada opción.
		*/
		protected $rnopaex;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rulusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rulfecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rulusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rulfecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea realizada
		*/
		protected $rultask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rulpara;

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
	* Name of the table: tropch
	* 
	 */
	const TABLE="tropch";

	/**
	*Primary key
*/
		 const PKEY = "rnosecu";



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
		throw new \Exception('Class Entity: Tropch Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tropch. Invalid specified property: get'.$name);
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
	* Set rcodopc
	*
	*Código del Nodo de cada Opción de Menú
	*
	* @parámetro String $rcodopc
	* @return Rcodopc
	*/
	public function setRcodopc($rcodopc)
	{
	  $this->rcodopc = (String) $rcodopc;
	    return $this;
	}

	/**
	* Get rcodopc
	*
	* @return null|String
	*/
	public function getRcodopc()
	{
		return $this->rcodopc;
	}

	/**
	* Set rnodopc
	*
	*Nodo raíz de donde nace la Opción de Menú
	*
	* @parámetro String $rnodopc
	* @return Rnodopc
	*/
	public function setRnodopc($rnodopc)
	{
	  $this->rnodopc = (String) $rnodopc;
	    return $this;
	}

	/**
	* Get rnodopc
	*
	* @return null|String
	*/
	public function getRnodopc()
	{
		return $this->rnodopc;
	}

	/**
	* Set rnomopc
	*
	*Nombre que despliega al Usuario en el Menú
	*
	* @parámetro String $rnomopc
	* @return Rnomopc
	*/
	public function setRnomopc($rnomopc)
	{
	  $this->rnomopc = (String) $rnomopc;
	    return $this;
	}

	/**
	* Get rnomopc
	*
	* @return null|String
	*/
	public function getRnomopc()
	{
		return $this->rnomopc;
	}

	/**
	* Set rnoalias
	*
	*Nombre personalizado, tiene prioridad al momento de desplegar el menú al Usuario.
	*
	* @parámetro String $rnoalias
	* @return Rnoalias
	*/
	public function setRnoalias($rnoalias)
	{
	  $this->rnoalias = (String) $rnoalias;
	    return $this;
	}

	/**
	* Get rnoalias
	*
	* @return null|String
	*/
	public function getRnoalias()
	{
		return $this->rnoalias;
	}

	/**
	* Set rordopc
	*
	*Orden de despliegue
	*
	* @parámetro Integer $rordopc
	* @return Rordopc
	*/
	public function setRordopc($rordopc)
	{
	  $this->rordopc = (Integer) $rordopc;
	    return $this;
	}

	/**
	* Get rordopc
	*
	* @return null|Integer
	*/
	public function getRordopc()
	{
		return $this->rordopc;
	}

	/**
	* Set rforopc
	*
	*Nombre físico del archivo HTML
	*
	* @parámetro String $rforopc
	* @return Rforopc
	*/
	public function setRforopc($rforopc)
	{
	  $this->rforopc = (String) $rforopc;
	    return $this;
	}

	/**
	* Get rforopc
	*
	* @return null|String
	*/
	public function getRforopc()
	{
		return $this->rforopc;
	}

	/**
	* Set rnivopc
	*
	*Nivel de la Opción
	*
	* @parámetro String $rnivopc
	* @return Rnivopc
	*/
	public function setRnivopc($rnivopc)
	{
	  $this->rnivopc = (String) $rnivopc;
	    return $this;
	}

	/**
	* Get rnivopc
	*
	* @return null|String
	*/
	public function getRnivopc()
	{
		return $this->rnivopc;
	}

	/**
	* Set rultopc
	*
	*Ultimo Nivel
	*
	* @parámetro Integer $rultopc
	* @return Rultopc
	*/
	public function setRultopc($rultopc)
	{
	  $this->rultopc = (Integer) $rultopc;
	    return $this;
	}

	/**
	* Get rultopc
	*
	* @return null|Integer
	*/
	public function getRultopc()
	{
		return $this->rultopc;
	}

	/**
	* Set rdesopc
	*
	*Descripción de la opción
	*
	* @parámetro String $rdesopc
	* @return Rdesopc
	*/
	public function setRdesopc($rdesopc)
	{
	  $this->rdesopc = (String) $rdesopc;
	    return $this;
	}

	/**
	* Get rdesopc
	*
	* @return null|String
	*/
	public function getRdesopc()
	{
		return $this->rdesopc;
	}

	/**
	* Set rnopsit
	*
	*Situación de la Opción
	*
	* @parámetro Integer $rnopsit
	* @return Rnopsit
	*/
	public function setRnopsit($rnopsit)
	{
	  $this->rnopsit = (Integer) $rnopsit;
	    return $this;
	}

	/**
	* Get rnopsit
	*
	* @return null|Integer
	*/
	public function getRnopsit()
	{
		return $this->rnopsit;
	}

	/**
	* Set rnopaex
	*
	*Parámetros extras para cada opción.
	*
	* @parámetro String $rnopaex
	* @return Rnopaex
	*/
	public function setRnopaex($rnopaex)
	{
	  $this->rnopaex = (String) $rnopaex;
	    return $this;
	}

	/**
	* Get rnopaex
	*
	* @return null|String
	*/
	public function getRnopaex()
	{
		return $this->rnopaex;
	}

	/**
	* Set rulusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rulusuc
	* @return Rulusuc
	*/
	public function setRulusuc($rulusuc)
	{
	  $this->rulusuc = (String) $rulusuc;
	    return $this;
	}

	/**
	* Get rulusuc
	*
	* @return null|String
	*/
	public function getRulusuc()
	{
		return $this->rulusuc;
	}

	/**
	* Set rulfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rulfecc
	* @return Rulfecc
	*/
	public function setRulfecc($rulfecc)
	{
	  $this->rulfecc = (String) $rulfecc;
	    return $this;
	}

	/**
	* Get rulfecc
	*
	* @return null|Date
	*/
	public function getRulfecc()
	{
		return $this->rulfecc;
	}

	/**
	* Set rulusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rulusum
	* @return Rulusum
	*/
	public function setRulusum($rulusum)
	{
	  $this->rulusum = (String) $rulusum;
	    return $this;
	}

	/**
	* Get rulusum
	*
	* @return null|String
	*/
	public function getRulusum()
	{
		return $this->rulusum;
	}

	/**
	* Set rulfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rulfecm
	* @return Rulfecm
	*/
	public function setRulfecm($rulfecm)
	{
	  $this->rulfecm = (String) $rulfecm;
	    return $this;
	}

	/**
	* Get rulfecm
	*
	* @return null|Date
	*/
	public function getRulfecm()
	{
		return $this->rulfecm;
	}

	/**
	* Set rultask
	*
	*Tipo de tarea realizada
	*
	* @parámetro String $rultask
	* @return Rultask
	*/
	public function setRultask($rultask)
	{
	  $this->rultask = (String) $rultask;
	    return $this;
	}

	/**
	* Get rultask
	*
	* @return null|String
	*/
	public function getRultask()
	{
		return $this->rultask;
	}

	/**
	* Set rulpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rulpara
	* @return Rulpara
	*/
	public function setRulpara($rulpara)
	{
	  $this->rulpara = (Integer) $rulpara;
	    return $this;
	}

	/**
	* Get rulpara
	*
	* @return null|Integer
	*/
	public function getRulpara()
	{
		return $this->rulpara;
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

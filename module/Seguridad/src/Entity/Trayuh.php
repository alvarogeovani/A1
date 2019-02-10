<?php
 /**
 * Model of the Trayuh table
 *
 * It is used to convert the   Trayuh entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trayuh
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trayuh
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos Datos se ingresan en la opción: Ayuda del Sistema (Cabecera)
		*/
		protected $rahsecu;
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
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Proceso
		*/
		protected $rahfepr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción del Producto
		*/
		protected $rahcoay;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Título de Ayuda 1
		*/
		protected $rahtda1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de Ayuda 1
		*/
		protected $rahdda1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Path y Nombre de Video 1
		*/
		protected $rahpnv1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Título de Ayuda 2
		*/
		protected $rahtda2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de Ayuda 2
		*/
		protected $rahdda2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Path y Nombre de Video 2
		*/
		protected $rahpnv2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Título de Ayuda 3
		*/
		protected $rahtda3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de Ayuda 3
		*/
		protected $rahdda3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Path y Nombre de Video 3
		*/
		protected $rahpnv3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Título de Ayuda 4
		*/
		protected $rahtda4;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de Ayuda 4
		*/
		protected $rahdda4;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Path y Nombre de Video 4
		*/
		protected $rahpnv4;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Título de Ayuda 5
		*/
		protected $rahtda5;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de Ayuda 5
		*/
		protected $rahdda5;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Path y Nombre de Video 5
		*/
		protected $rahpnv5;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Ayuda relacionada
		*/
		protected $rahayre;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rahusuc;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rahfecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rahusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rahfecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $rahtask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rahpara;

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
	* Name of the table: trayuh
	* 
	 */
	const TABLE="trayuh";

	/**
	*Primary key
*/
		 const PKEY = "rahsecu";



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
		throw new \Exception('Class Entity: Trayuh Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trayuh. Invalid specified property: get'.$name);
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
	* Set rahsecu
	*
	*Estos Datos se ingresan en la opción: Ayuda del Sistema (Cabecera)
	*
	* @parámetro Integer $rahsecu
	* @return Rahsecu
	*/
	public function setRahsecu($rahsecu)
	{
	  $this->rahsecu = (Integer) $rahsecu;
	    return $this;
	}

	/**
	* Get rahsecu
	*
	* @return null|Integer
	*/
	public function getRahsecu()
	{
		return $this->rahsecu;
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
	* Set rahfepr
	*
	*Fecha de Proceso
	*
	* @parámetro Date $rahfepr
	* @return Rahfepr
	*/
	public function setRahfepr($rahfepr)
	{
	  $this->rahfepr = (String) $rahfepr;
	    return $this;
	}

	/**
	* Get rahfepr
	*
	* @return null|Date
	*/
	public function getRahfepr()
	{
		return $this->rahfepr;
	}

	/**
	* Set rahcoay
	*
	*Descripción del Producto
	*
	* @parámetro String $rahcoay
	* @return Rahcoay
	*/
	public function setRahcoay($rahcoay)
	{
	  $this->rahcoay = (String) $rahcoay;
	    return $this;
	}

	/**
	* Get rahcoay
	*
	* @return null|String
	*/
	public function getRahcoay()
	{
		return $this->rahcoay;
	}

	/**
	* Set rahtda1
	*
	*Título de Ayuda 1
	*
	* @parámetro String $rahtda1
	* @return Rahtda1
	*/
	public function setRahtda1($rahtda1)
	{
	  $this->rahtda1 = (String) $rahtda1;
	    return $this;
	}

	/**
	* Get rahtda1
	*
	* @return null|String
	*/
	public function getRahtda1()
	{
		return $this->rahtda1;
	}

	/**
	* Set rahdda1
	*
	*Descripción de Ayuda 1
	*
	* @parámetro String $rahdda1
	* @return Rahdda1
	*/
	public function setRahdda1($rahdda1)
	{
	  $this->rahdda1 = (String) $rahdda1;
	    return $this;
	}

	/**
	* Get rahdda1
	*
	* @return null|String
	*/
	public function getRahdda1()
	{
		return $this->rahdda1;
	}

	/**
	* Set rahpnv1
	*
	*Path y Nombre de Video 1
	*
	* @parámetro String $rahpnv1
	* @return Rahpnv1
	*/
	public function setRahpnv1($rahpnv1)
	{
	  $this->rahpnv1 = (String) $rahpnv1;
	    return $this;
	}

	/**
	* Get rahpnv1
	*
	* @return null|String
	*/
	public function getRahpnv1()
	{
		return $this->rahpnv1;
	}

	/**
	* Set rahtda2
	*
	*Título de Ayuda 2
	*
	* @parámetro String $rahtda2
	* @return Rahtda2
	*/
	public function setRahtda2($rahtda2)
	{
	  $this->rahtda2 = (String) $rahtda2;
	    return $this;
	}

	/**
	* Get rahtda2
	*
	* @return null|String
	*/
	public function getRahtda2()
	{
		return $this->rahtda2;
	}

	/**
	* Set rahdda2
	*
	*Descripción de Ayuda 2
	*
	* @parámetro String $rahdda2
	* @return Rahdda2
	*/
	public function setRahdda2($rahdda2)
	{
	  $this->rahdda2 = (String) $rahdda2;
	    return $this;
	}

	/**
	* Get rahdda2
	*
	* @return null|String
	*/
	public function getRahdda2()
	{
		return $this->rahdda2;
	}

	/**
	* Set rahpnv2
	*
	*Path y Nombre de Video 2
	*
	* @parámetro String $rahpnv2
	* @return Rahpnv2
	*/
	public function setRahpnv2($rahpnv2)
	{
	  $this->rahpnv2 = (String) $rahpnv2;
	    return $this;
	}

	/**
	* Get rahpnv2
	*
	* @return null|String
	*/
	public function getRahpnv2()
	{
		return $this->rahpnv2;
	}

	/**
	* Set rahtda3
	*
	*Título de Ayuda 3
	*
	* @parámetro String $rahtda3
	* @return Rahtda3
	*/
	public function setRahtda3($rahtda3)
	{
	  $this->rahtda3 = (String) $rahtda3;
	    return $this;
	}

	/**
	* Get rahtda3
	*
	* @return null|String
	*/
	public function getRahtda3()
	{
		return $this->rahtda3;
	}

	/**
	* Set rahdda3
	*
	*Descripción de Ayuda 3
	*
	* @parámetro String $rahdda3
	* @return Rahdda3
	*/
	public function setRahdda3($rahdda3)
	{
	  $this->rahdda3 = (String) $rahdda3;
	    return $this;
	}

	/**
	* Get rahdda3
	*
	* @return null|String
	*/
	public function getRahdda3()
	{
		return $this->rahdda3;
	}

	/**
	* Set rahpnv3
	*
	*Path y Nombre de Video 3
	*
	* @parámetro String $rahpnv3
	* @return Rahpnv3
	*/
	public function setRahpnv3($rahpnv3)
	{
	  $this->rahpnv3 = (String) $rahpnv3;
	    return $this;
	}

	/**
	* Get rahpnv3
	*
	* @return null|String
	*/
	public function getRahpnv3()
	{
		return $this->rahpnv3;
	}

	/**
	* Set rahtda4
	*
	*Título de Ayuda 4
	*
	* @parámetro String $rahtda4
	* @return Rahtda4
	*/
	public function setRahtda4($rahtda4)
	{
	  $this->rahtda4 = (String) $rahtda4;
	    return $this;
	}

	/**
	* Get rahtda4
	*
	* @return null|String
	*/
	public function getRahtda4()
	{
		return $this->rahtda4;
	}

	/**
	* Set rahdda4
	*
	*Descripción de Ayuda 4
	*
	* @parámetro String $rahdda4
	* @return Rahdda4
	*/
	public function setRahdda4($rahdda4)
	{
	  $this->rahdda4 = (String) $rahdda4;
	    return $this;
	}

	/**
	* Get rahdda4
	*
	* @return null|String
	*/
	public function getRahdda4()
	{
		return $this->rahdda4;
	}

	/**
	* Set rahpnv4
	*
	*Path y Nombre de Video 4
	*
	* @parámetro String $rahpnv4
	* @return Rahpnv4
	*/
	public function setRahpnv4($rahpnv4)
	{
	  $this->rahpnv4 = (String) $rahpnv4;
	    return $this;
	}

	/**
	* Get rahpnv4
	*
	* @return null|String
	*/
	public function getRahpnv4()
	{
		return $this->rahpnv4;
	}

	/**
	* Set rahtda5
	*
	*Título de Ayuda 5
	*
	* @parámetro String $rahtda5
	* @return Rahtda5
	*/
	public function setRahtda5($rahtda5)
	{
	  $this->rahtda5 = (String) $rahtda5;
	    return $this;
	}

	/**
	* Get rahtda5
	*
	* @return null|String
	*/
	public function getRahtda5()
	{
		return $this->rahtda5;
	}

	/**
	* Set rahdda5
	*
	*Descripción de Ayuda 5
	*
	* @parámetro String $rahdda5
	* @return Rahdda5
	*/
	public function setRahdda5($rahdda5)
	{
	  $this->rahdda5 = (String) $rahdda5;
	    return $this;
	}

	/**
	* Get rahdda5
	*
	* @return null|String
	*/
	public function getRahdda5()
	{
		return $this->rahdda5;
	}

	/**
	* Set rahpnv5
	*
	*Path y Nombre de Video 5
	*
	* @parámetro String $rahpnv5
	* @return Rahpnv5
	*/
	public function setRahpnv5($rahpnv5)
	{
	  $this->rahpnv5 = (String) $rahpnv5;
	    return $this;
	}

	/**
	* Get rahpnv5
	*
	* @return null|String
	*/
	public function getRahpnv5()
	{
		return $this->rahpnv5;
	}

	/**
	* Set rahayre
	*
	*Ayuda relacionada
	*
	* @parámetro String $rahayre
	* @return Rahayre
	*/
	public function setRahayre($rahayre)
	{
	  $this->rahayre = (String) $rahayre;
	    return $this;
	}

	/**
	* Get rahayre
	*
	* @return null|String
	*/
	public function getRahayre()
	{
		return $this->rahayre;
	}

	/**
	* Set rahusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rahusuc
	* @return Rahusuc
	*/
	public function setRahusuc($rahusuc)
	{
	  $this->rahusuc = (String) $rahusuc;
	    return $this;
	}

	/**
	* Get rahusuc
	*
	* @return null|String
	*/
	public function getRahusuc()
	{
		return $this->rahusuc;
	}

	/**
	* Set rahfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rahfecc
	* @return Rahfecc
	*/
	public function setRahfecc($rahfecc)
	{
	  $this->rahfecc = (String) $rahfecc;
	    return $this;
	}

	/**
	* Get rahfecc
	*
	* @return null|Date
	*/
	public function getRahfecc()
	{
		return $this->rahfecc;
	}

	/**
	* Set rahusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rahusum
	* @return Rahusum
	*/
	public function setRahusum($rahusum)
	{
	  $this->rahusum = (String) $rahusum;
	    return $this;
	}

	/**
	* Get rahusum
	*
	* @return null|String
	*/
	public function getRahusum()
	{
		return $this->rahusum;
	}

	/**
	* Set rahfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rahfecm
	* @return Rahfecm
	*/
	public function setRahfecm($rahfecm)
	{
	  $this->rahfecm = (String) $rahfecm;
	    return $this;
	}

	/**
	* Get rahfecm
	*
	* @return null|Date
	*/
	public function getRahfecm()
	{
		return $this->rahfecm;
	}

	/**
	* Set rahtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rahtask
	* @return Rahtask
	*/
	public function setRahtask($rahtask)
	{
	  $this->rahtask = (String) $rahtask;
	    return $this;
	}

	/**
	* Get rahtask
	*
	* @return null|String
	*/
	public function getRahtask()
	{
		return $this->rahtask;
	}

	/**
	* Set rahpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rahpara
	* @return Rahpara
	*/
	public function setRahpara($rahpara)
	{
	  $this->rahpara = (Integer) $rahpara;
	    return $this;
	}

	/**
	* Get rahpara
	*
	* @return null|Integer
	*/
	public function getRahpara()
	{
		return $this->rahpara;
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

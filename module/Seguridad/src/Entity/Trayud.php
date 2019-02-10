<?php
 /**
 * Model of the Trayud table
 *
 * It is used to convert the   Trayud entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trayud
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trayud
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos Datos se ingresan en la opción: Ayuda del Sistema (Detalle)
		*/
		protected $radsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos Datos se ingresan en la opción: Ayuda del Sistema (Cabecera)
		*/
		protected $rahsecu;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de proceso
		*/
		protected $radfepr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de empresa que procesa
		*/
		protected $radceqp;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre de Empresa que procesa
		*/
		protected $radneqp;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cédula de usuario que procesa
		*/
		protected $radcuqp;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre de usuario que procesa
		*/
		protected $radnuqp;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Título de ayuda 1
		*/
		protected $radtda1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de ayuda 1
		*/
		protected $raddda1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Título de ayuda 2
		*/
		protected $radtda2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción de ayuda 2
		*/
		protected $raddda2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Título de Ayuda 3
		*/
		protected $radtda3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripión de Ayuda 3
		*/
		protected $raddda3;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Origen de la Ayuda (Combo:RRORIAYU de Parámetros)
		*/
		protected $radoray;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Acceso Público (Si/No)
		*/
		protected $radacpu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Diagnóstico
		*/
		protected $raddiag;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Acción tomada 1
		*/
		protected $radact1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Acción tomada 2
		*/
		protected $radact2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Situación (Combo: RRSITMAN de Parámetros)
		*/
		protected $radsima;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Responsable del Cliente
		*/
		protected $radrecl;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Atención del Cliente
		*/
		protected $radatcl;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de Creación
		*/
		protected $radusuc;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de creación
		*/
		protected $radfecc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de modificación
		*/
		protected $radusum;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de modificación
		*/
		protected $radfecm;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Tipo de tarea ejecutada
		*/
		protected $radtask;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Bandera de borrado
		*/
		protected $radpara;

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
	* Name of the table: trayud
	* 
	 */
	const TABLE="trayud";

	/**
	*Primary key
*/
		 const PKEY = "radsecu";



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
		throw new \Exception('Class Entity: Trayud Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trayud. Invalid specified property: get'.$name);
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
	* Set radsecu
	*
	*Estos Datos se ingresan en la opción: Ayuda del Sistema (Detalle)
	*
	* @parámetro Integer $radsecu
	* @return Radsecu
	*/
	public function setRadsecu($radsecu)
	{
	  $this->radsecu = (Integer) $radsecu;
	    return $this;
	}

	/**
	* Get radsecu
	*
	* @return null|Integer
	*/
	public function getRadsecu()
	{
		return $this->radsecu;
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
	* Set radfepr
	*
	*Fecha de proceso
	*
	* @parámetro Date $radfepr
	* @return Radfepr
	*/
	public function setRadfepr($radfepr)
	{
	  $this->radfepr = (String) $radfepr;
	    return $this;
	}

	/**
	* Get radfepr
	*
	* @return null|Date
	*/
	public function getRadfepr()
	{
		return $this->radfepr;
	}

	/**
	* Set radceqp
	*
	*Código de empresa que procesa
	*
	* @parámetro String $radceqp
	* @return Radceqp
	*/
	public function setRadceqp($radceqp)
	{
	  $this->radceqp = (String) $radceqp;
	    return $this;
	}

	/**
	* Get radceqp
	*
	* @return null|String
	*/
	public function getRadceqp()
	{
		return $this->radceqp;
	}

	/**
	* Set radneqp
	*
	*Nombre de Empresa que procesa
	*
	* @parámetro String $radneqp
	* @return Radneqp
	*/
	public function setRadneqp($radneqp)
	{
	  $this->radneqp = (String) $radneqp;
	    return $this;
	}

	/**
	* Get radneqp
	*
	* @return null|String
	*/
	public function getRadneqp()
	{
		return $this->radneqp;
	}

	/**
	* Set radcuqp
	*
	*Cédula de usuario que procesa
	*
	* @parámetro String $radcuqp
	* @return Radcuqp
	*/
	public function setRadcuqp($radcuqp)
	{
	  $this->radcuqp = (String) $radcuqp;
	    return $this;
	}

	/**
	* Get radcuqp
	*
	* @return null|String
	*/
	public function getRadcuqp()
	{
		return $this->radcuqp;
	}

	/**
	* Set radnuqp
	*
	*Nombre de usuario que procesa
	*
	* @parámetro String $radnuqp
	* @return Radnuqp
	*/
	public function setRadnuqp($radnuqp)
	{
	  $this->radnuqp = (String) $radnuqp;
	    return $this;
	}

	/**
	* Get radnuqp
	*
	* @return null|String
	*/
	public function getRadnuqp()
	{
		return $this->radnuqp;
	}

	/**
	* Set radtda1
	*
	*Título de ayuda 1
	*
	* @parámetro String $radtda1
	* @return Radtda1
	*/
	public function setRadtda1($radtda1)
	{
	  $this->radtda1 = (String) $radtda1;
	    return $this;
	}

	/**
	* Get radtda1
	*
	* @return null|String
	*/
	public function getRadtda1()
	{
		return $this->radtda1;
	}

	/**
	* Set raddda1
	*
	*Descripción de ayuda 1
	*
	* @parámetro String $raddda1
	* @return Raddda1
	*/
	public function setRaddda1($raddda1)
	{
	  $this->raddda1 = (String) $raddda1;
	    return $this;
	}

	/**
	* Get raddda1
	*
	* @return null|String
	*/
	public function getRaddda1()
	{
		return $this->raddda1;
	}

	/**
	* Set radtda2
	*
	*Título de ayuda 2
	*
	* @parámetro String $radtda2
	* @return Radtda2
	*/
	public function setRadtda2($radtda2)
	{
	  $this->radtda2 = (String) $radtda2;
	    return $this;
	}

	/**
	* Get radtda2
	*
	* @return null|String
	*/
	public function getRadtda2()
	{
		return $this->radtda2;
	}

	/**
	* Set raddda2
	*
	*Descripción de ayuda 2
	*
	* @parámetro String $raddda2
	* @return Raddda2
	*/
	public function setRaddda2($raddda2)
	{
	  $this->raddda2 = (String) $raddda2;
	    return $this;
	}

	/**
	* Get raddda2
	*
	* @return null|String
	*/
	public function getRaddda2()
	{
		return $this->raddda2;
	}

	/**
	* Set radtda3
	*
	*Título de Ayuda 3
	*
	* @parámetro String $radtda3
	* @return Radtda3
	*/
	public function setRadtda3($radtda3)
	{
	  $this->radtda3 = (String) $radtda3;
	    return $this;
	}

	/**
	* Get radtda3
	*
	* @return null|String
	*/
	public function getRadtda3()
	{
		return $this->radtda3;
	}

	/**
	* Set raddda3
	*
	*Descripión de Ayuda 3
	*
	* @parámetro String $raddda3
	* @return Raddda3
	*/
	public function setRaddda3($raddda3)
	{
	  $this->raddda3 = (String) $raddda3;
	    return $this;
	}

	/**
	* Get raddda3
	*
	* @return null|String
	*/
	public function getRaddda3()
	{
		return $this->raddda3;
	}

	/**
	* Set radoray
	*
	*Origen de la Ayuda (Combo:RRORIAYU de Parámetros)
	*
	* @parámetro Integer $radoray
	* @return Radoray
	*/
	public function setRadoray($radoray)
	{
	  $this->radoray = (Integer) $radoray;
	    return $this;
	}

	/**
	* Get radoray
	*
	* @return null|Integer
	*/
	public function getRadoray()
	{
		return $this->radoray;
	}

	/**
	* Set radacpu
	*
	*Acceso Público (Si/No)
	*
	* @parámetro Integer $radacpu
	* @return Radacpu
	*/
	public function setRadacpu($radacpu)
	{
	  $this->radacpu = (Integer) $radacpu;
	    return $this;
	}

	/**
	* Get radacpu
	*
	* @return null|Integer
	*/
	public function getRadacpu()
	{
		return $this->radacpu;
	}

	/**
	* Set raddiag
	*
	*Diagnóstico
	*
	* @parámetro String $raddiag
	* @return Raddiag
	*/
	public function setRaddiag($raddiag)
	{
	  $this->raddiag = (String) $raddiag;
	    return $this;
	}

	/**
	* Get raddiag
	*
	* @return null|String
	*/
	public function getRaddiag()
	{
		return $this->raddiag;
	}

	/**
	* Set radact1
	*
	*Acción tomada 1
	*
	* @parámetro String $radact1
	* @return Radact1
	*/
	public function setRadact1($radact1)
	{
	  $this->radact1 = (String) $radact1;
	    return $this;
	}

	/**
	* Get radact1
	*
	* @return null|String
	*/
	public function getRadact1()
	{
		return $this->radact1;
	}

	/**
	* Set radact2
	*
	*Acción tomada 2
	*
	* @parámetro String $radact2
	* @return Radact2
	*/
	public function setRadact2($radact2)
	{
	  $this->radact2 = (String) $radact2;
	    return $this;
	}

	/**
	* Get radact2
	*
	* @return null|String
	*/
	public function getRadact2()
	{
		return $this->radact2;
	}

	/**
	* Set radsima
	*
	*Situación (Combo: RRSITMAN de Parámetros)
	*
	* @parámetro Decimal $radsima
	* @return Radsima
	*/
	public function setRadsima($radsima)
	{
	  $this->radsima = (Double) $radsima;
	    return $this;
	}

	/**
	* Get radsima
	*
	* @return null|Decimal
	*/
	public function getRadsima()
	{
		return $this->radsima;
	}

	/**
	* Set radrecl
	*
	*Responsable del Cliente
	*
	* @parámetro String $radrecl
	* @return Radrecl
	*/
	public function setRadrecl($radrecl)
	{
	  $this->radrecl = (String) $radrecl;
	    return $this;
	}

	/**
	* Get radrecl
	*
	* @return null|String
	*/
	public function getRadrecl()
	{
		return $this->radrecl;
	}

	/**
	* Set radatcl
	*
	*Atención del Cliente
	*
	* @parámetro String $radatcl
	* @return Radatcl
	*/
	public function setRadatcl($radatcl)
	{
	  $this->radatcl = (String) $radatcl;
	    return $this;
	}

	/**
	* Get radatcl
	*
	* @return null|String
	*/
	public function getRadatcl()
	{
		return $this->radatcl;
	}

	/**
	* Set radusuc
	*
	*Usuario de Creación
	*
	* @parámetro String $radusuc
	* @return Radusuc
	*/
	public function setRadusuc($radusuc)
	{
	  $this->radusuc = (String) $radusuc;
	    return $this;
	}

	/**
	* Get radusuc
	*
	* @return null|String
	*/
	public function getRadusuc()
	{
		return $this->radusuc;
	}

	/**
	* Set radfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $radfecc
	* @return Radfecc
	*/
	public function setRadfecc($radfecc)
	{
	  $this->radfecc = (String) $radfecc;
	    return $this;
	}

	/**
	* Get radfecc
	*
	* @return null|Date
	*/
	public function getRadfecc()
	{
		return $this->radfecc;
	}

	/**
	* Set radusum
	*
	*Usuario de modificación
	*
	* @parámetro String $radusum
	* @return Radusum
	*/
	public function setRadusum($radusum)
	{
	  $this->radusum = (String) $radusum;
	    return $this;
	}

	/**
	* Get radusum
	*
	* @return null|String
	*/
	public function getRadusum()
	{
		return $this->radusum;
	}

	/**
	* Set radfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $radfecm
	* @return Radfecm
	*/
	public function setRadfecm($radfecm)
	{
	  $this->radfecm = (String) $radfecm;
	    return $this;
	}

	/**
	* Get radfecm
	*
	* @return null|Date
	*/
	public function getRadfecm()
	{
		return $this->radfecm;
	}

	/**
	* Set radtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $radtask
	* @return Radtask
	*/
	public function setRadtask($radtask)
	{
	  $this->radtask = (String) $radtask;
	    return $this;
	}

	/**
	* Get radtask
	*
	* @return null|String
	*/
	public function getRadtask()
	{
		return $this->radtask;
	}

	/**
	* Set radpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $radpara
	* @return Radpara
	*/
	public function setRadpara($radpara)
	{
	  $this->radpara = (Integer) $radpara;
	    return $this;
	}

	/**
	* Get radpara
	*
	* @return null|Integer
	*/
	public function getRadpara()
	{
		return $this->radpara;
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

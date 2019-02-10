<?php
 /**
 * Model of the Trcias table
 *
 * It is used to convert the   Trcias entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trcias
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trcias
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Empresa
		*/
		protected $bcisecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Opción: Maestro de Colaboradores
		*/
		protected $mmcsecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código de Empresa
		*/
		protected $bciacve;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nombre ó Razón Social de la Empresa
		*/
		protected $bcianom;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Dirección de la Empresa
		*/
		protected $bciadir;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Postal de la Empresa
		*/
		protected $bciacpo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Ciudad de la Empresa
		*/
		protected $bciciud;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Distrito de la Empresa
		*/
		protected $bciadis;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Provincia de la Empresa
		*/
		protected $bciapro;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Departamento de la Empresa
		*/
		protected $bciadpt;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* País de la Empresa
		*/
		protected $bciapai;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* RUC de la Empresa
		*/
		protected $bciaruc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 1 de la Empresa
		*/
		protected $bciarf1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 2 de la Empresa
		*/
		protected $bciarf2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 3 de la Empresa
		*/
		protected $bciarf3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 4 de la Empresa
		*/
		protected $bciarf4;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 5 de la Empresa
		*/
		protected $bciarf5;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 6 de la Empresa
		*/
		protected $bciarf6;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 7 de la Empresa
		*/
		protected $bciarf7;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 8 de la Empresa
		*/
		protected $bciarf8;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 9 de la Empresa
		*/
		protected $bciarf9;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Giro o Actividad de la Empresa
		*/
		protected $bciagir;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre ODBC-DSN
		*/
		protected $bciadsn;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación de la Empresa
		*/
		protected $bciasit;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $bciusuc;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $bcifecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $bciusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $bcifecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $bcitask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $bcipara;

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
	* Name of the table: trcias
	* 
	 */
	const TABLE="trcias";

	/**
	*Primary key
*/
		 const PKEY = "bcisecu";



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
		throw new \Exception('Class Entity: Trcias Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trcias. Invalid specified property: get'.$name);
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
	* Set bcisecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Empresa
	*
	* @parámetro Integer $bcisecu
	* @return Bcisecu
	*/
	public function setBcisecu($bcisecu)
	{
	  $this->bcisecu = (Integer) $bcisecu;
	    return $this;
	}

	/**
	* Get bcisecu
	*
	* @return null|Integer
	*/
	public function getBcisecu()
	{
		return $this->bcisecu;
	}

	/**
	* Set mmcsecu
	*
	*Opción: Maestro de Colaboradores
	*
	* @parámetro Integer $mmcsecu
	* @return Mmcsecu
	*/
	public function setMmcsecu($mmcsecu)
	{
	  $this->mmcsecu = (Integer) $mmcsecu;
	    return $this;
	}

	/**
	* Get mmcsecu
	*
	* @return null|Integer
	*/
	public function getMmcsecu()
	{
		return $this->mmcsecu;
	}

	/**
	* Set bciacve
	*
	*Código de Empresa
	*
	* @parámetro String $bciacve
	* @return Bciacve
	*/
	public function setBciacve($bciacve)
	{
	  $this->bciacve = (String) $bciacve;
	    return $this;
	}

	/**
	* Get bciacve
	*
	* @return null|String
	*/
	public function getBciacve()
	{
		return $this->bciacve;
	}

	/**
	* Set bcianom
	*
	*Nombre ó Razón Social de la Empresa
	*
	* @parámetro String $bcianom
	* @return Bcianom
	*/
	public function setBcianom($bcianom)
	{
	  $this->bcianom = (String) $bcianom;
	    return $this;
	}

	/**
	* Get bcianom
	*
	* @return null|String
	*/
	public function getBcianom()
	{
		return $this->bcianom;
	}

	/**
	* Set bciadir
	*
	*Dirección de la Empresa
	*
	* @parámetro String $bciadir
	* @return Bciadir
	*/
	public function setBciadir($bciadir)
	{
	  $this->bciadir = (String) $bciadir;
	    return $this;
	}

	/**
	* Get bciadir
	*
	* @return null|String
	*/
	public function getBciadir()
	{
		return $this->bciadir;
	}

	/**
	* Set bciacpo
	*
	*Código Postal de la Empresa
	*
	* @parámetro String $bciacpo
	* @return Bciacpo
	*/
	public function setBciacpo($bciacpo)
	{
	  $this->bciacpo = (String) $bciacpo;
	    return $this;
	}

	/**
	* Get bciacpo
	*
	* @return null|String
	*/
	public function getBciacpo()
	{
		return $this->bciacpo;
	}

	/**
	* Set bciciud
	*
	*Ciudad de la Empresa
	*
	* @parámetro String $bciciud
	* @return Bciciud
	*/
	public function setBciciud($bciciud)
	{
	  $this->bciciud = (String) $bciciud;
	    return $this;
	}

	/**
	* Get bciciud
	*
	* @return null|String
	*/
	public function getBciciud()
	{
		return $this->bciciud;
	}

	/**
	* Set bciadis
	*
	*Distrito de la Empresa
	*
	* @parámetro String $bciadis
	* @return Bciadis
	*/
	public function setBciadis($bciadis)
	{
	  $this->bciadis = (String) $bciadis;
	    return $this;
	}

	/**
	* Get bciadis
	*
	* @return null|String
	*/
	public function getBciadis()
	{
		return $this->bciadis;
	}

	/**
	* Set bciapro
	*
	*Provincia de la Empresa
	*
	* @parámetro String $bciapro
	* @return Bciapro
	*/
	public function setBciapro($bciapro)
	{
	  $this->bciapro = (String) $bciapro;
	    return $this;
	}

	/**
	* Get bciapro
	*
	* @return null|String
	*/
	public function getBciapro()
	{
		return $this->bciapro;
	}

	/**
	* Set bciadpt
	*
	*Departamento de la Empresa
	*
	* @parámetro String $bciadpt
	* @return Bciadpt
	*/
	public function setBciadpt($bciadpt)
	{
	  $this->bciadpt = (String) $bciadpt;
	    return $this;
	}

	/**
	* Get bciadpt
	*
	* @return null|String
	*/
	public function getBciadpt()
	{
		return $this->bciadpt;
	}

	/**
	* Set bciapai
	*
	*País de la Empresa
	*
	* @parámetro String $bciapai
	* @return Bciapai
	*/
	public function setBciapai($bciapai)
	{
	  $this->bciapai = (String) $bciapai;
	    return $this;
	}

	/**
	* Get bciapai
	*
	* @return null|String
	*/
	public function getBciapai()
	{
		return $this->bciapai;
	}

	/**
	* Set bciaruc
	*
	*RUC de la Empresa
	*
	* @parámetro String $bciaruc
	* @return Bciaruc
	*/
	public function setBciaruc($bciaruc)
	{
	  $this->bciaruc = (String) $bciaruc;
	    return $this;
	}

	/**
	* Get bciaruc
	*
	* @return null|String
	*/
	public function getBciaruc()
	{
		return $this->bciaruc;
	}

	/**
	* Set bciarf1
	*
	*Registro Fiscal 1 de la Empresa
	*
	* @parámetro String $bciarf1
	* @return Bciarf1
	*/
	public function setBciarf1($bciarf1)
	{
	  $this->bciarf1 = (String) $bciarf1;
	    return $this;
	}

	/**
	* Get bciarf1
	*
	* @return null|String
	*/
	public function getBciarf1()
	{
		return $this->bciarf1;
	}

	/**
	* Set bciarf2
	*
	*Registro Fiscal 2 de la Empresa
	*
	* @parámetro String $bciarf2
	* @return Bciarf2
	*/
	public function setBciarf2($bciarf2)
	{
	  $this->bciarf2 = (String) $bciarf2;
	    return $this;
	}

	/**
	* Get bciarf2
	*
	* @return null|String
	*/
	public function getBciarf2()
	{
		return $this->bciarf2;
	}

	/**
	* Set bciarf3
	*
	*Registro Fiscal 3 de la Empresa
	*
	* @parámetro String $bciarf3
	* @return Bciarf3
	*/
	public function setBciarf3($bciarf3)
	{
	  $this->bciarf3 = (String) $bciarf3;
	    return $this;
	}

	/**
	* Get bciarf3
	*
	* @return null|String
	*/
	public function getBciarf3()
	{
		return $this->bciarf3;
	}

	/**
	* Set bciarf4
	*
	*Registro Fiscal 4 de la Empresa
	*
	* @parámetro String $bciarf4
	* @return Bciarf4
	*/
	public function setBciarf4($bciarf4)
	{
	  $this->bciarf4 = (String) $bciarf4;
	    return $this;
	}

	/**
	* Get bciarf4
	*
	* @return null|String
	*/
	public function getBciarf4()
	{
		return $this->bciarf4;
	}

	/**
	* Set bciarf5
	*
	*Registro Fiscal 5 de la Empresa
	*
	* @parámetro String $bciarf5
	* @return Bciarf5
	*/
	public function setBciarf5($bciarf5)
	{
	  $this->bciarf5 = (String) $bciarf5;
	    return $this;
	}

	/**
	* Get bciarf5
	*
	* @return null|String
	*/
	public function getBciarf5()
	{
		return $this->bciarf5;
	}

	/**
	* Set bciarf6
	*
	*Registro Fiscal 6 de la Empresa
	*
	* @parámetro String $bciarf6
	* @return Bciarf6
	*/
	public function setBciarf6($bciarf6)
	{
	  $this->bciarf6 = (String) $bciarf6;
	    return $this;
	}

	/**
	* Get bciarf6
	*
	* @return null|String
	*/
	public function getBciarf6()
	{
		return $this->bciarf6;
	}

	/**
	* Set bciarf7
	*
	*Registro Fiscal 7 de la Empresa
	*
	* @parámetro String $bciarf7
	* @return Bciarf7
	*/
	public function setBciarf7($bciarf7)
	{
	  $this->bciarf7 = (String) $bciarf7;
	    return $this;
	}

	/**
	* Get bciarf7
	*
	* @return null|String
	*/
	public function getBciarf7()
	{
		return $this->bciarf7;
	}

	/**
	* Set bciarf8
	*
	*Registro Fiscal 8 de la Empresa
	*
	* @parámetro String $bciarf8
	* @return Bciarf8
	*/
	public function setBciarf8($bciarf8)
	{
	  $this->bciarf8 = (String) $bciarf8;
	    return $this;
	}

	/**
	* Get bciarf8
	*
	* @return null|String
	*/
	public function getBciarf8()
	{
		return $this->bciarf8;
	}

	/**
	* Set bciarf9
	*
	*Registro Fiscal 9 de la Empresa
	*
	* @parámetro String $bciarf9
	* @return Bciarf9
	*/
	public function setBciarf9($bciarf9)
	{
	  $this->bciarf9 = (String) $bciarf9;
	    return $this;
	}

	/**
	* Get bciarf9
	*
	* @return null|String
	*/
	public function getBciarf9()
	{
		return $this->bciarf9;
	}

	/**
	* Set bciagir
	*
	*Giro o Actividad de la Empresa
	*
	* @parámetro String $bciagir
	* @return Bciagir
	*/
	public function setBciagir($bciagir)
	{
	  $this->bciagir = (String) $bciagir;
	    return $this;
	}

	/**
	* Get bciagir
	*
	* @return null|String
	*/
	public function getBciagir()
	{
		return $this->bciagir;
	}

	/**
	* Set bciadsn
	*
	*Nombre ODBC-DSN
	*
	* @parámetro String $bciadsn
	* @return Bciadsn
	*/
	public function setBciadsn($bciadsn)
	{
	  $this->bciadsn = (String) $bciadsn;
	    return $this;
	}

	/**
	* Get bciadsn
	*
	* @return null|String
	*/
	public function getBciadsn()
	{
		return $this->bciadsn;
	}

	/**
	* Set bciasit
	*
	*Situación de la Empresa
	*
	* @parámetro Integer $bciasit
	* @return Bciasit
	*/
	public function setBciasit($bciasit)
	{
	  $this->bciasit = (Integer) $bciasit;
	    return $this;
	}

	/**
	* Get bciasit
	*
	* @return null|Integer
	*/
	public function getBciasit()
	{
		return $this->bciasit;
	}

	/**
	* Set bciusuc
	*
	*Usuario de creación
	*
	* @parámetro String $bciusuc
	* @return Bciusuc
	*/
	public function setBciusuc($bciusuc)
	{
	  $this->bciusuc = (String) $bciusuc;
	    return $this;
	}

	/**
	* Get bciusuc
	*
	* @return null|String
	*/
	public function getBciusuc()
	{
		return $this->bciusuc;
	}

	/**
	* Set bcifecc
	*
	*Fecha de creación
	*
	* @parámetro Date $bcifecc
	* @return Bcifecc
	*/
	public function setBcifecc($bcifecc)
	{
	  $this->bcifecc = (String) $bcifecc;
	    return $this;
	}

	/**
	* Get bcifecc
	*
	* @return null|Date
	*/
	public function getBcifecc()
	{
		return $this->bcifecc;
	}

	/**
	* Set bciusum
	*
	*Usuario de modificación
	*
	* @parámetro String $bciusum
	* @return Bciusum
	*/
	public function setBciusum($bciusum)
	{
	  $this->bciusum = (String) $bciusum;
	    return $this;
	}

	/**
	* Get bciusum
	*
	* @return null|String
	*/
	public function getBciusum()
	{
		return $this->bciusum;
	}

	/**
	* Set bcifecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $bcifecm
	* @return Bcifecm
	*/
	public function setBcifecm($bcifecm)
	{
	  $this->bcifecm = (String) $bcifecm;
	    return $this;
	}

	/**
	* Get bcifecm
	*
	* @return null|Date
	*/
	public function getBcifecm()
	{
		return $this->bcifecm;
	}

	/**
	* Set bcitask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $bcitask
	* @return Bcitask
	*/
	public function setBcitask($bcitask)
	{
	  $this->bcitask = (String) $bcitask;
	    return $this;
	}

	/**
	* Get bcitask
	*
	* @return null|String
	*/
	public function getBcitask()
	{
		return $this->bcitask;
	}

	/**
	* Set bcipara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $bcipara
	* @return Bcipara
	*/
	public function setBcipara($bcipara)
	{
	  $this->bcipara = (Integer) $bcipara;
	    return $this;
	}

	/**
	* Get bcipara
	*
	* @return null|Integer
	*/
	public function getBcipara()
	{
		return $this->bcipara;
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

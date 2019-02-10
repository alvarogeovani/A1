<?php
 /**
 * Model of the Ttauto table
 *
 * It is used to convert the   Ttauto entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttauto
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttauto
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Realizar Autorizaciones
		*/
		protected $tausecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Facturación Normal
		*/
		protected $tphsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Distribuidores
		*/
		protected $tdisecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario quien autoriza
		*/
		protected $tauuser;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de proceso
		*/
		protected $taufecp;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Situación del Distribuidor Facturación Inicial
		*/
		protected $tauesti;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Situación del Distribuidor Facturación Final
		*/
		protected $tauestf;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observación
		*/
		protected $tauobse;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Distribuidor Final
		*/
		protected $tdisec2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de creación
		*/
		protected $tauusuc;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de creación
		*/
		protected $taufecc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de modificación
		*/
		protected $tauusum;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de modificación
		*/
		protected $taufecm;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de tarea ejecutada
		*/
		protected $tautask;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Bandera de borrado
		*/
		protected $taupara;

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
	* Name of the table: ttauto
	* 
	 */
	const TABLE="ttauto";

	/**
	*Primary key
*/
		 const PKEY = "tausecu";



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
		throw new \Exception('Class Entity: Ttauto Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttauto. Invalid specified property: get'.$name);
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
	* Set tausecu
	*
	*Estos datos se ingresan en la Opción: Realizar Autorizaciones
	*
	* @parámetro Integer $tausecu
	* @return Tausecu
	*/
	public function setTausecu($tausecu)
	{
	  $this->tausecu = (Integer) $tausecu;
	    return $this;
	}

	/**
	* Get tausecu
	*
	* @return null|Integer
	*/
	public function getTausecu()
	{
		return $this->tausecu;
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
	* Set tdisecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Distribuidores
	*
	* @parámetro Integer $tdisecu
	* @return Tdisecu
	*/
	public function setTdisecu($tdisecu)
	{
	  $this->tdisecu = (Integer) $tdisecu;
	    return $this;
	}

	/**
	* Get tdisecu
	*
	* @return null|Integer
	*/
	public function getTdisecu()
	{
		return $this->tdisecu;
	}

	/**
	* Set tauuser
	*
	*Usuario quien autoriza
	*
	* @parámetro String $tauuser
	* @return Tauuser
	*/
	public function setTauuser($tauuser)
	{
	  $this->tauuser = (String) $tauuser;
	    return $this;
	}

	/**
	* Get tauuser
	*
	* @return null|String
	*/
	public function getTauuser()
	{
		return $this->tauuser;
	}

	/**
	* Set taufecp
	*
	*Fecha de proceso
	*
	* @parámetro Date $taufecp
	* @return Taufecp
	*/
	public function setTaufecp($taufecp)
	{
	  $this->taufecp = (String) $taufecp;
	    return $this;
	}

	/**
	* Get taufecp
	*
	* @return null|Date
	*/
	public function getTaufecp()
	{
		return $this->taufecp;
	}

	/**
	* Set tauesti
	*
	*Situación del Distribuidor Facturación Inicial
	*
	* @parámetro String $tauesti
	* @return Tauesti
	*/
	public function setTauesti($tauesti)
	{
	  $this->tauesti = (String) $tauesti;
	    return $this;
	}

	/**
	* Get tauesti
	*
	* @return null|String
	*/
	public function getTauesti()
	{
		return $this->tauesti;
	}

	/**
	* Set tauestf
	*
	*Situación del Distribuidor Facturación Final
	*
	* @parámetro String $tauestf
	* @return Tauestf
	*/
	public function setTauestf($tauestf)
	{
	  $this->tauestf = (String) $tauestf;
	    return $this;
	}

	/**
	* Get tauestf
	*
	* @return null|String
	*/
	public function getTauestf()
	{
		return $this->tauestf;
	}

	/**
	* Set tauobse
	*
	*Observación
	*
	* @parámetro String $tauobse
	* @return Tauobse
	*/
	public function setTauobse($tauobse)
	{
	  $this->tauobse = (String) $tauobse;
	    return $this;
	}

	/**
	* Get tauobse
	*
	* @return null|String
	*/
	public function getTauobse()
	{
		return $this->tauobse;
	}

	/**
	* Set tdisec2
	*
	*Distribuidor Final
	*
	* @parámetro Integer $tdisec2
	* @return Tdisec2
	*/
	public function setTdisec2($tdisec2)
	{
	  $this->tdisec2 = (Integer) $tdisec2;
	    return $this;
	}

	/**
	* Get tdisec2
	*
	* @return null|Integer
	*/
	public function getTdisec2()
	{
		return $this->tdisec2;
	}

	/**
	* Set tauusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tauusuc
	* @return Tauusuc
	*/
	public function setTauusuc($tauusuc)
	{
	  $this->tauusuc = (String) $tauusuc;
	    return $this;
	}

	/**
	* Get tauusuc
	*
	* @return null|String
	*/
	public function getTauusuc()
	{
		return $this->tauusuc;
	}

	/**
	* Set taufecc
	*
	*Fecha de creación
	*
	* @parámetro Date $taufecc
	* @return Taufecc
	*/
	public function setTaufecc($taufecc)
	{
	  $this->taufecc = (String) $taufecc;
	    return $this;
	}

	/**
	* Get taufecc
	*
	* @return null|Date
	*/
	public function getTaufecc()
	{
		return $this->taufecc;
	}

	/**
	* Set tauusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tauusum
	* @return Tauusum
	*/
	public function setTauusum($tauusum)
	{
	  $this->tauusum = (String) $tauusum;
	    return $this;
	}

	/**
	* Get tauusum
	*
	* @return null|String
	*/
	public function getTauusum()
	{
		return $this->tauusum;
	}

	/**
	* Set taufecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $taufecm
	* @return Taufecm
	*/
	public function setTaufecm($taufecm)
	{
	  $this->taufecm = (String) $taufecm;
	    return $this;
	}

	/**
	* Get taufecm
	*
	* @return null|Date
	*/
	public function getTaufecm()
	{
		return $this->taufecm;
	}

	/**
	* Set tautask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tautask
	* @return Tautask
	*/
	public function setTautask($tautask)
	{
	  $this->tautask = (String) $tautask;
	    return $this;
	}

	/**
	* Get tautask
	*
	* @return null|String
	*/
	public function getTautask()
	{
		return $this->tautask;
	}

	/**
	* Set taupara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $taupara
	* @return Taupara
	*/
	public function setTaupara($taupara)
	{
	  $this->taupara = (Integer) $taupara;
	    return $this;
	}

	/**
	* Get taupara
	*
	* @return null|Integer
	*/
	public function getTaupara()
	{
		return $this->taupara;
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

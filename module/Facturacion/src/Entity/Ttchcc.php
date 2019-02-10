<?php
 /**
 * Model of the Ttchcc table
 *
 * It is used to convert the   Ttchcc entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttchcc
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttchcc
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Registrar Cheques Recibidos
		*/
		protected $ttcsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Registrar Bancos
		*/
		protected $bbcsecu;
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
		* Estos datos se ingresan en la Opción: Facturación Varios
		*/
		protected $tfvsecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código de Banco
		*/
		protected $ttchbco;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Número de cheque
		*/
		protected $ttchnro;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Código de Distribuidor
		*/
		protected $ttchcli;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nombre/ Razón Social del Distribuidor
		*/
		protected $tdisnom;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha
		*/
		protected $ttchfec;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Código de Moneda
		*/
		protected $bmoncve;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor
		*/
		protected $ttchimp;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Tipo de Cambio
		*/
		protected $ttchtca;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $ttcusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $ttcfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $ttcusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $ttcfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $ttctask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $ttcpara;

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
	* Name of the table: ttchcc
	* 
	 */
	const TABLE="ttchcc";

	/**
	*Primary key
*/
		 const PKEY = "ttcsecu";



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
		throw new \Exception('Class Entity: Ttchcc Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttchcc. Invalid specified property: get'.$name);
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
	* Set ttcsecu
	*
	*Estos datos se ingresan en la Opción: Registrar Cheques Recibidos
	*
	* @parámetro Integer $ttcsecu
	* @return Ttcsecu
	*/
	public function setTtcsecu($ttcsecu)
	{
	  $this->ttcsecu = (Integer) $ttcsecu;
	    return $this;
	}

	/**
	* Get ttcsecu
	*
	* @return null|Integer
	*/
	public function getTtcsecu()
	{
		return $this->ttcsecu;
	}

	/**
	* Set bbcsecu
	*
	*Estos datos se ingresan en la Opción: Registrar Bancos
	*
	* @parámetro Integer $bbcsecu
	* @return Bbcsecu
	*/
	public function setBbcsecu($bbcsecu)
	{
	  $this->bbcsecu = (Integer) $bbcsecu;
	    return $this;
	}

	/**
	* Get bbcsecu
	*
	* @return null|Integer
	*/
	public function getBbcsecu()
	{
		return $this->bbcsecu;
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
	* Set tfvsecu
	*
	*Estos datos se ingresan en la Opción: Facturación Varios
	*
	* @parámetro Integer $tfvsecu
	* @return Tfvsecu
	*/
	public function setTfvsecu($tfvsecu)
	{
	  $this->tfvsecu = (Integer) $tfvsecu;
	    return $this;
	}

	/**
	* Get tfvsecu
	*
	* @return null|Integer
	*/
	public function getTfvsecu()
	{
		return $this->tfvsecu;
	}

	/**
	* Set ttchbco
	*
	*Código de Banco
	*
	* @parámetro String $ttchbco
	* @return Ttchbco
	*/
	public function setTtchbco($ttchbco)
	{
	  $this->ttchbco = (String) $ttchbco;
	    return $this;
	}

	/**
	* Get ttchbco
	*
	* @return null|String
	*/
	public function getTtchbco()
	{
		return $this->ttchbco;
	}

	/**
	* Set ttchnro
	*
	*Número de cheque
	*
	* @parámetro String $ttchnro
	* @return Ttchnro
	*/
	public function setTtchnro($ttchnro)
	{
	  $this->ttchnro = (String) $ttchnro;
	    return $this;
	}

	/**
	* Get ttchnro
	*
	* @return null|String
	*/
	public function getTtchnro()
	{
		return $this->ttchnro;
	}

	/**
	* Set ttchcli
	*
	*Código de Distribuidor
	*
	* @parámetro Integer $ttchcli
	* @return Ttchcli
	*/
	public function setTtchcli($ttchcli)
	{
	  $this->ttchcli = (Integer) $ttchcli;
	    return $this;
	}

	/**
	* Get ttchcli
	*
	* @return null|Integer
	*/
	public function getTtchcli()
	{
		return $this->ttchcli;
	}

	/**
	* Set tdisnom
	*
	*Nombre/ Razón Social del Distribuidor
	*
	* @parámetro String $tdisnom
	* @return Tdisnom
	*/
	public function setTdisnom($tdisnom)
	{
	  $this->tdisnom = (String) $tdisnom;
	    return $this;
	}

	/**
	* Get tdisnom
	*
	* @return null|String
	*/
	public function getTdisnom()
	{
		return $this->tdisnom;
	}

	/**
	* Set ttchfec
	*
	*Fecha
	*
	* @parámetro Date $ttchfec
	* @return Ttchfec
	*/
	public function setTtchfec($ttchfec)
	{
	  $this->ttchfec = (String) $ttchfec;
	    return $this;
	}

	/**
	* Get ttchfec
	*
	* @return null|Date
	*/
	public function getTtchfec()
	{
		return $this->ttchfec;
	}

	/**
	* Set bmoncve
	*
	*Código de Moneda
	*
	* @parámetro Decimal $bmoncve
	* @return Bmoncve
	*/
	public function setBmoncve($bmoncve)
	{
	  $this->bmoncve = (Double) $bmoncve;
	    return $this;
	}

	/**
	* Get bmoncve
	*
	* @return null|Decimal
	*/
	public function getBmoncve()
	{
		return $this->bmoncve;
	}

	/**
	* Set ttchimp
	*
	*Valor
	*
	* @parámetro Decimal $ttchimp
	* @return Ttchimp
	*/
	public function setTtchimp($ttchimp)
	{
	  $this->ttchimp = (Double) $ttchimp;
	    return $this;
	}

	/**
	* Get ttchimp
	*
	* @return null|Decimal
	*/
	public function getTtchimp()
	{
		return $this->ttchimp;
	}

	/**
	* Set ttchtca
	*
	*Tipo de Cambio
	*
	* @parámetro Decimal $ttchtca
	* @return Ttchtca
	*/
	public function setTtchtca($ttchtca)
	{
	  $this->ttchtca = (Double) $ttchtca;
	    return $this;
	}

	/**
	* Get ttchtca
	*
	* @return null|Decimal
	*/
	public function getTtchtca()
	{
		return $this->ttchtca;
	}

	/**
	* Set ttcusuc
	*
	*Usuario de creación
	*
	* @parámetro String $ttcusuc
	* @return Ttcusuc
	*/
	public function setTtcusuc($ttcusuc)
	{
	  $this->ttcusuc = (String) $ttcusuc;
	    return $this;
	}

	/**
	* Get ttcusuc
	*
	* @return null|String
	*/
	public function getTtcusuc()
	{
		return $this->ttcusuc;
	}

	/**
	* Set ttcfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $ttcfecc
	* @return Ttcfecc
	*/
	public function setTtcfecc($ttcfecc)
	{
	  $this->ttcfecc = (String) $ttcfecc;
	    return $this;
	}

	/**
	* Get ttcfecc
	*
	* @return null|Date
	*/
	public function getTtcfecc()
	{
		return $this->ttcfecc;
	}

	/**
	* Set ttcusum
	*
	*Usuario de modificación
	*
	* @parámetro String $ttcusum
	* @return Ttcusum
	*/
	public function setTtcusum($ttcusum)
	{
	  $this->ttcusum = (String) $ttcusum;
	    return $this;
	}

	/**
	* Get ttcusum
	*
	* @return null|String
	*/
	public function getTtcusum()
	{
		return $this->ttcusum;
	}

	/**
	* Set ttcfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $ttcfecm
	* @return Ttcfecm
	*/
	public function setTtcfecm($ttcfecm)
	{
	  $this->ttcfecm = (String) $ttcfecm;
	    return $this;
	}

	/**
	* Get ttcfecm
	*
	* @return null|Date
	*/
	public function getTtcfecm()
	{
		return $this->ttcfecm;
	}

	/**
	* Set ttctask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $ttctask
	* @return Ttctask
	*/
	public function setTtctask($ttctask)
	{
	  $this->ttctask = (String) $ttctask;
	    return $this;
	}

	/**
	* Get ttctask
	*
	* @return null|String
	*/
	public function getTtctask()
	{
		return $this->ttctask;
	}

	/**
	* Set ttcpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $ttcpara
	* @return Ttcpara
	*/
	public function setTtcpara($ttcpara)
	{
	  $this->ttcpara = (Integer) $ttcpara;
	    return $this;
	}

	/**
	* Get ttcpara
	*
	* @return null|Integer
	*/
	public function getTtcpara()
	{
		return $this->ttcpara;
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

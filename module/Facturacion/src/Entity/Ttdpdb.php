<?php
 /**
 * Model of the Ttdpdb table
 *
 * It is used to convert the   Ttdpdb entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttdpdb
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttdpdb
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la opción :DOCUMENTOS PREIMPRESOS DADOS DE BAJA
		*/
		protected $tdbsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Tipos de Documentos Comerciales
		*/
		protected $tbdsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la opción : Maestro de Puntos de Emisión
		*/
		protected $tpmsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Opción: Maestro de Colaboradores
		*/
		protected $mmcsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Tipos de Documentos
		*/
		protected $tbbsecu;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* RUC de la Empresa
		*/
		protected $bciaruc;
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
		* Cédula de Identidad del Colaborador
		*/
		protected $pplide1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* RUC del Colaborador
		*/
		protected $pplnruc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre Corrido del Colaborador
		*/
		protected $pplnomb;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Motivo de la Solicitud
		*/
		protected $tdbmoso;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de proceso
		*/
		protected $tbdfepr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Autorización del S.R.I.
		*/
		protected $apdnuau;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Estos datos se ingresan en la opción: Maestro de Puntos de Venta
		*/
		protected $tpvseau;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Serie del Establecimiento
		*/
		protected $tpvnset;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Serie del Punto de Emisión
		*/
		protected $tpmnuse;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de Documento Comercial
		*/
		protected $tbdtipo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código del SRI
		*/
		protected $tbddsri;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Número de Documento Inicial
		*/
		protected $tdbnuin;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Número de Documento Final
		*/
		protected $tdbnufi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Parámetros Adicionales
		*/
		protected $tdbpaad;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tdbusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tdbfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tdbusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tdbfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tdbtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tdbpara;

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
	* Name of the table: ttdpdb
	* 
	 */
	const TABLE="ttdpdb";

	/**
	*Primary key
*/
		 const PKEY = "tdbsecu";



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
		throw new \Exception('Class Entity: Ttdpdb Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttdpdb. Invalid specified property: get'.$name);
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
	* Set tdbsecu
	*
	*Estos datos se ingresan en la opción :DOCUMENTOS PREIMPRESOS DADOS DE BAJA
	*
	* @parámetro Integer $tdbsecu
	* @return Tdbsecu
	*/
	public function setTdbsecu($tdbsecu)
	{
	  $this->tdbsecu = (Integer) $tdbsecu;
	    return $this;
	}

	/**
	* Get tdbsecu
	*
	* @return null|Integer
	*/
	public function getTdbsecu()
	{
		return $this->tdbsecu;
	}

	/**
	* Set tbdsecu
	*
	*Estos datos se ingresan en la Opción: Tipos de Documentos Comerciales
	*
	* @parámetro Integer $tbdsecu
	* @return Tbdsecu
	*/
	public function setTbdsecu($tbdsecu)
	{
	  $this->tbdsecu = (Integer) $tbdsecu;
	    return $this;
	}

	/**
	* Get tbdsecu
	*
	* @return null|Integer
	*/
	public function getTbdsecu()
	{
		return $this->tbdsecu;
	}

	/**
	* Set tpmsecu
	*
	*Estos datos se ingresan en la opción : Maestro de Puntos de Emisión
	*
	* @parámetro Integer $tpmsecu
	* @return Tpmsecu
	*/
	public function setTpmsecu($tpmsecu)
	{
	  $this->tpmsecu = (Integer) $tpmsecu;
	    return $this;
	}

	/**
	* Get tpmsecu
	*
	* @return null|Integer
	*/
	public function getTpmsecu()
	{
		return $this->tpmsecu;
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
	* Set tbbsecu
	*
	*Estos datos se ingresan en la Opción: Tipos de Documentos
	*
	* @parámetro Integer $tbbsecu
	* @return Tbbsecu
	*/
	public function setTbbsecu($tbbsecu)
	{
	  $this->tbbsecu = (Integer) $tbbsecu;
	    return $this;
	}

	/**
	* Get tbbsecu
	*
	* @return null|Integer
	*/
	public function getTbbsecu()
	{
		return $this->tbbsecu;
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
	* Set pplide1
	*
	*Cédula de Identidad del Colaborador
	*
	* @parámetro String $pplide1
	* @return Pplide1
	*/
	public function setPplide1($pplide1)
	{
	  $this->pplide1 = (String) $pplide1;
	    return $this;
	}

	/**
	* Get pplide1
	*
	* @return null|String
	*/
	public function getPplide1()
	{
		return $this->pplide1;
	}

	/**
	* Set pplnruc
	*
	*RUC del Colaborador
	*
	* @parámetro String $pplnruc
	* @return Pplnruc
	*/
	public function setPplnruc($pplnruc)
	{
	  $this->pplnruc = (String) $pplnruc;
	    return $this;
	}

	/**
	* Get pplnruc
	*
	* @return null|String
	*/
	public function getPplnruc()
	{
		return $this->pplnruc;
	}

	/**
	* Set pplnomb
	*
	*Nombre Corrido del Colaborador
	*
	* @parámetro String $pplnomb
	* @return Pplnomb
	*/
	public function setPplnomb($pplnomb)
	{
	  $this->pplnomb = (String) $pplnomb;
	    return $this;
	}

	/**
	* Get pplnomb
	*
	* @return null|String
	*/
	public function getPplnomb()
	{
		return $this->pplnomb;
	}

	/**
	* Set tdbmoso
	*
	*Motivo de la Solicitud
	*
	* @parámetro Integer $tdbmoso
	* @return Tdbmoso
	*/
	public function setTdbmoso($tdbmoso)
	{
	  $this->tdbmoso = (Integer) $tdbmoso;
	    return $this;
	}

	/**
	* Get tdbmoso
	*
	* @return null|Integer
	*/
	public function getTdbmoso()
	{
		return $this->tdbmoso;
	}

	/**
	* Set tbdfepr
	*
	*Fecha de proceso
	*
	* @parámetro Date $tbdfepr
	* @return Tbdfepr
	*/
	public function setTbdfepr($tbdfepr)
	{
	  $this->tbdfepr = (String) $tbdfepr;
	    return $this;
	}

	/**
	* Get tbdfepr
	*
	* @return null|Date
	*/
	public function getTbdfepr()
	{
		return $this->tbdfepr;
	}

	/**
	* Set apdnuau
	*
	*Número de Autorización del S.R.I.
	*
	* @parámetro String $apdnuau
	* @return Apdnuau
	*/
	public function setApdnuau($apdnuau)
	{
	  $this->apdnuau = (String) $apdnuau;
	    return $this;
	}

	/**
	* Get apdnuau
	*
	* @return null|String
	*/
	public function getApdnuau()
	{
		return $this->apdnuau;
	}

	/**
	* Set tpvseau
	*
	*Estos datos se ingresan en la opción: Maestro de Puntos de Venta
	*
	* @parámetro Integer $tpvseau
	* @return Tpvseau
	*/
	public function setTpvseau($tpvseau)
	{
	  $this->tpvseau = (Integer) $tpvseau;
	    return $this;
	}

	/**
	* Get tpvseau
	*
	* @return null|Integer
	*/
	public function getTpvseau()
	{
		return $this->tpvseau;
	}

	/**
	* Set tpvnset
	*
	*Número de Serie del Establecimiento
	*
	* @parámetro String $tpvnset
	* @return Tpvnset
	*/
	public function setTpvnset($tpvnset)
	{
	  $this->tpvnset = (String) $tpvnset;
	    return $this;
	}

	/**
	* Get tpvnset
	*
	* @return null|String
	*/
	public function getTpvnset()
	{
		return $this->tpvnset;
	}

	/**
	* Set tpmnuse
	*
	*Número de Serie del Punto de Emisión
	*
	* @parámetro String $tpmnuse
	* @return Tpmnuse
	*/
	public function setTpmnuse($tpmnuse)
	{
	  $this->tpmnuse = (String) $tpmnuse;
	    return $this;
	}

	/**
	* Get tpmnuse
	*
	* @return null|String
	*/
	public function getTpmnuse()
	{
		return $this->tpmnuse;
	}

	/**
	* Set tbdtipo
	*
	*Tipo de Documento Comercial
	*
	* @parámetro String $tbdtipo
	* @return Tbdtipo
	*/
	public function setTbdtipo($tbdtipo)
	{
	  $this->tbdtipo = (String) $tbdtipo;
	    return $this;
	}

	/**
	* Get tbdtipo
	*
	* @return null|String
	*/
	public function getTbdtipo()
	{
		return $this->tbdtipo;
	}

	/**
	* Set tbddsri
	*
	*Código del SRI
	*
	* @parámetro String $tbddsri
	* @return Tbddsri
	*/
	public function setTbddsri($tbddsri)
	{
	  $this->tbddsri = (String) $tbddsri;
	    return $this;
	}

	/**
	* Get tbddsri
	*
	* @return null|String
	*/
	public function getTbddsri()
	{
		return $this->tbddsri;
	}

	/**
	* Set tdbnuin
	*
	*Número de Documento Inicial
	*
	* @parámetro Integer $tdbnuin
	* @return Tdbnuin
	*/
	public function setTdbnuin($tdbnuin)
	{
	  $this->tdbnuin = (Integer) $tdbnuin;
	    return $this;
	}

	/**
	* Get tdbnuin
	*
	* @return null|Integer
	*/
	public function getTdbnuin()
	{
		return $this->tdbnuin;
	}

	/**
	* Set tdbnufi
	*
	*Número de Documento Final
	*
	* @parámetro Integer $tdbnufi
	* @return Tdbnufi
	*/
	public function setTdbnufi($tdbnufi)
	{
	  $this->tdbnufi = (Integer) $tdbnufi;
	    return $this;
	}

	/**
	* Get tdbnufi
	*
	* @return null|Integer
	*/
	public function getTdbnufi()
	{
		return $this->tdbnufi;
	}

	/**
	* Set tdbpaad
	*
	*Parámetros Adicionales
	*
	* @parámetro String $tdbpaad
	* @return Tdbpaad
	*/
	public function setTdbpaad($tdbpaad)
	{
	  $this->tdbpaad = (String) $tdbpaad;
	    return $this;
	}

	/**
	* Get tdbpaad
	*
	* @return null|String
	*/
	public function getTdbpaad()
	{
		return $this->tdbpaad;
	}

	/**
	* Set tdbusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tdbusuc
	* @return Tdbusuc
	*/
	public function setTdbusuc($tdbusuc)
	{
	  $this->tdbusuc = (String) $tdbusuc;
	    return $this;
	}

	/**
	* Get tdbusuc
	*
	* @return null|String
	*/
	public function getTdbusuc()
	{
		return $this->tdbusuc;
	}

	/**
	* Set tdbfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tdbfecc
	* @return Tdbfecc
	*/
	public function setTdbfecc($tdbfecc)
	{
	  $this->tdbfecc = (String) $tdbfecc;
	    return $this;
	}

	/**
	* Get tdbfecc
	*
	* @return null|Date
	*/
	public function getTdbfecc()
	{
		return $this->tdbfecc;
	}

	/**
	* Set tdbusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tdbusum
	* @return Tdbusum
	*/
	public function setTdbusum($tdbusum)
	{
	  $this->tdbusum = (String) $tdbusum;
	    return $this;
	}

	/**
	* Get tdbusum
	*
	* @return null|String
	*/
	public function getTdbusum()
	{
		return $this->tdbusum;
	}

	/**
	* Set tdbfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tdbfecm
	* @return Tdbfecm
	*/
	public function setTdbfecm($tdbfecm)
	{
	  $this->tdbfecm = (String) $tdbfecm;
	    return $this;
	}

	/**
	* Get tdbfecm
	*
	* @return null|Date
	*/
	public function getTdbfecm()
	{
		return $this->tdbfecm;
	}

	/**
	* Set tdbtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tdbtask
	* @return Tdbtask
	*/
	public function setTdbtask($tdbtask)
	{
	  $this->tdbtask = (String) $tdbtask;
	    return $this;
	}

	/**
	* Get tdbtask
	*
	* @return null|String
	*/
	public function getTdbtask()
	{
		return $this->tdbtask;
	}

	/**
	* Set tdbpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tdbpara
	* @return Tdbpara
	*/
	public function setTdbpara($tdbpara)
	{
	  $this->tdbpara = (Integer) $tdbpara;
	    return $this;
	}

	/**
	* Get tdbpara
	*
	* @return null|Integer
	*/
	public function getTdbpara()
	{
		return $this->tdbpara;
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

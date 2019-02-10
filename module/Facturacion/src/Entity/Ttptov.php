<?php
 /**
 * Model of the Ttptov table
 *
 * It is used to convert the   Ttptov entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttptov
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttptov
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Puntos de Venta
		*/
		protected $tpvsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Registrar Monedas
		*/
		protected $bmosecu;
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
		* Estos datos se ingresan en la Opción: Maestro de Bodegas
		*/
		protected $vbosecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Centros de Costos
		*/
		protected $bcdsecu;
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
		* Código Punto de Venta
		*/
		protected $tpvcodi;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nombre del Punto Venta
		*/
		protected $tpvnomb;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Jefe de Punto de Venta
		*/
		protected $pplsepv;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* País
		*/
		protected $tpvpais;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Provincia
		*/
		protected $tpvprov;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Ciudad
		*/
		protected $tpvciud;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Calle Principal
		*/
		protected $tpvcapr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nomenclatura y Número
		*/
		protected $tpvnonu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Calle Secundaria
		*/
		protected $tpvcase;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono 1
		*/
		protected $tpvtel1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono 2
		*/
		protected $tpvtel2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono 3
		*/
		protected $tpvtel3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Correo Electrónico
		*/
		protected $tpvcoel;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Serie del Establecimiento
		*/
		protected $tpvnset;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Controla Stock
		*/
		protected $tpvstoc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación del Punto de Venta de Facturación
		*/
		protected $tpvsitu;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tpvusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tpvfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tpvusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tpvfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tpvtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tpvpara;

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
	* Name of the table: ttptov
	* 
	 */
	const TABLE="ttptov";

	/**
	*Primary key
*/
		 const PKEY = "tpvsecu";



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
		throw new \Exception('Class Entity: Ttptov Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttptov. Invalid specified property: get'.$name);
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
	* Set tpvsecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Puntos de Venta
	*
	* @parámetro Integer $tpvsecu
	* @return Tpvsecu
	*/
	public function setTpvsecu($tpvsecu)
	{
	  $this->tpvsecu = (Integer) $tpvsecu;
	    return $this;
	}

	/**
	* Get tpvsecu
	*
	* @return null|Integer
	*/
	public function getTpvsecu()
	{
		return $this->tpvsecu;
	}

	/**
	* Set bmosecu
	*
	*Estos datos se ingresan en la Opción: Registrar Monedas
	*
	* @parámetro Integer $bmosecu
	* @return Bmosecu
	*/
	public function setBmosecu($bmosecu)
	{
	  $this->bmosecu = (Integer) $bmosecu;
	    return $this;
	}

	/**
	* Get bmosecu
	*
	* @return null|Integer
	*/
	public function getBmosecu()
	{
		return $this->bmosecu;
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
	* Set vbosecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Bodegas
	*
	* @parámetro Integer $vbosecu
	* @return Vbosecu
	*/
	public function setVbosecu($vbosecu)
	{
	  $this->vbosecu = (Integer) $vbosecu;
	    return $this;
	}

	/**
	* Get vbosecu
	*
	* @return null|Integer
	*/
	public function getVbosecu()
	{
		return $this->vbosecu;
	}

	/**
	* Set bcdsecu
	*
	*Estos datos se ingresan en la Opción: Centros de Costos
	*
	* @parámetro Integer $bcdsecu
	* @return Bcdsecu
	*/
	public function setBcdsecu($bcdsecu)
	{
	  $this->bcdsecu = (Integer) $bcdsecu;
	    return $this;
	}

	/**
	* Get bcdsecu
	*
	* @return null|Integer
	*/
	public function getBcdsecu()
	{
		return $this->bcdsecu;
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
	* Set tpvcodi
	*
	*Código Punto de Venta
	*
	* @parámetro String $tpvcodi
	* @return Tpvcodi
	*/
	public function setTpvcodi($tpvcodi)
	{
	  $this->tpvcodi = (String) $tpvcodi;
	    return $this;
	}

	/**
	* Get tpvcodi
	*
	* @return null|String
	*/
	public function getTpvcodi()
	{
		return $this->tpvcodi;
	}

	/**
	* Set tpvnomb
	*
	*Nombre del Punto Venta
	*
	* @parámetro String $tpvnomb
	* @return Tpvnomb
	*/
	public function setTpvnomb($tpvnomb)
	{
	  $this->tpvnomb = (String) $tpvnomb;
	    return $this;
	}

	/**
	* Get tpvnomb
	*
	* @return null|String
	*/
	public function getTpvnomb()
	{
		return $this->tpvnomb;
	}

	/**
	* Set pplsepv
	*
	*Jefe de Punto de Venta
	*
	* @parámetro Integer $pplsepv
	* @return Pplsepv
	*/
	public function setPplsepv($pplsepv)
	{
	  $this->pplsepv = (Integer) $pplsepv;
	    return $this;
	}

	/**
	* Get pplsepv
	*
	* @return null|Integer
	*/
	public function getPplsepv()
	{
		return $this->pplsepv;
	}

	/**
	* Set tpvpais
	*
	*País
	*
	* @parámetro String $tpvpais
	* @return Tpvpais
	*/
	public function setTpvpais($tpvpais)
	{
	  $this->tpvpais = (String) $tpvpais;
	    return $this;
	}

	/**
	* Get tpvpais
	*
	* @return null|String
	*/
	public function getTpvpais()
	{
		return $this->tpvpais;
	}

	/**
	* Set tpvprov
	*
	*Provincia
	*
	* @parámetro String $tpvprov
	* @return Tpvprov
	*/
	public function setTpvprov($tpvprov)
	{
	  $this->tpvprov = (String) $tpvprov;
	    return $this;
	}

	/**
	* Get tpvprov
	*
	* @return null|String
	*/
	public function getTpvprov()
	{
		return $this->tpvprov;
	}

	/**
	* Set tpvciud
	*
	*Ciudad
	*
	* @parámetro String $tpvciud
	* @return Tpvciud
	*/
	public function setTpvciud($tpvciud)
	{
	  $this->tpvciud = (String) $tpvciud;
	    return $this;
	}

	/**
	* Get tpvciud
	*
	* @return null|String
	*/
	public function getTpvciud()
	{
		return $this->tpvciud;
	}

	/**
	* Set tpvcapr
	*
	*Calle Principal
	*
	* @parámetro String $tpvcapr
	* @return Tpvcapr
	*/
	public function setTpvcapr($tpvcapr)
	{
	  $this->tpvcapr = (String) $tpvcapr;
	    return $this;
	}

	/**
	* Get tpvcapr
	*
	* @return null|String
	*/
	public function getTpvcapr()
	{
		return $this->tpvcapr;
	}

	/**
	* Set tpvnonu
	*
	*Nomenclatura y Número
	*
	* @parámetro String $tpvnonu
	* @return Tpvnonu
	*/
	public function setTpvnonu($tpvnonu)
	{
	  $this->tpvnonu = (String) $tpvnonu;
	    return $this;
	}

	/**
	* Get tpvnonu
	*
	* @return null|String
	*/
	public function getTpvnonu()
	{
		return $this->tpvnonu;
	}

	/**
	* Set tpvcase
	*
	*Calle Secundaria
	*
	* @parámetro String $tpvcase
	* @return Tpvcase
	*/
	public function setTpvcase($tpvcase)
	{
	  $this->tpvcase = (String) $tpvcase;
	    return $this;
	}

	/**
	* Get tpvcase
	*
	* @return null|String
	*/
	public function getTpvcase()
	{
		return $this->tpvcase;
	}

	/**
	* Set tpvtel1
	*
	*Teléfono 1
	*
	* @parámetro String $tpvtel1
	* @return Tpvtel1
	*/
	public function setTpvtel1($tpvtel1)
	{
	  $this->tpvtel1 = (String) $tpvtel1;
	    return $this;
	}

	/**
	* Get tpvtel1
	*
	* @return null|String
	*/
	public function getTpvtel1()
	{
		return $this->tpvtel1;
	}

	/**
	* Set tpvtel2
	*
	*Teléfono 2
	*
	* @parámetro String $tpvtel2
	* @return Tpvtel2
	*/
	public function setTpvtel2($tpvtel2)
	{
	  $this->tpvtel2 = (String) $tpvtel2;
	    return $this;
	}

	/**
	* Get tpvtel2
	*
	* @return null|String
	*/
	public function getTpvtel2()
	{
		return $this->tpvtel2;
	}

	/**
	* Set tpvtel3
	*
	*Teléfono 3
	*
	* @parámetro String $tpvtel3
	* @return Tpvtel3
	*/
	public function setTpvtel3($tpvtel3)
	{
	  $this->tpvtel3 = (String) $tpvtel3;
	    return $this;
	}

	/**
	* Get tpvtel3
	*
	* @return null|String
	*/
	public function getTpvtel3()
	{
		return $this->tpvtel3;
	}

	/**
	* Set tpvcoel
	*
	*Correo Electrónico
	*
	* @parámetro String $tpvcoel
	* @return Tpvcoel
	*/
	public function setTpvcoel($tpvcoel)
	{
	  $this->tpvcoel = (String) $tpvcoel;
	    return $this;
	}

	/**
	* Get tpvcoel
	*
	* @return null|String
	*/
	public function getTpvcoel()
	{
		return $this->tpvcoel;
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
	* Set tpvstoc
	*
	*Controla Stock
	*
	* @parámetro Integer $tpvstoc
	* @return Tpvstoc
	*/
	public function setTpvstoc($tpvstoc)
	{
	  $this->tpvstoc = (Integer) $tpvstoc;
	    return $this;
	}

	/**
	* Get tpvstoc
	*
	* @return null|Integer
	*/
	public function getTpvstoc()
	{
		return $this->tpvstoc;
	}

	/**
	* Set tpvsitu
	*
	*Situación del Punto de Venta de Facturación
	*
	* @parámetro Integer $tpvsitu
	* @return Tpvsitu
	*/
	public function setTpvsitu($tpvsitu)
	{
	  $this->tpvsitu = (Integer) $tpvsitu;
	    return $this;
	}

	/**
	* Get tpvsitu
	*
	* @return null|Integer
	*/
	public function getTpvsitu()
	{
		return $this->tpvsitu;
	}

	/**
	* Set tpvusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tpvusuc
	* @return Tpvusuc
	*/
	public function setTpvusuc($tpvusuc)
	{
	  $this->tpvusuc = (String) $tpvusuc;
	    return $this;
	}

	/**
	* Get tpvusuc
	*
	* @return null|String
	*/
	public function getTpvusuc()
	{
		return $this->tpvusuc;
	}

	/**
	* Set tpvfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tpvfecc
	* @return Tpvfecc
	*/
	public function setTpvfecc($tpvfecc)
	{
	  $this->tpvfecc = (String) $tpvfecc;
	    return $this;
	}

	/**
	* Get tpvfecc
	*
	* @return null|Date
	*/
	public function getTpvfecc()
	{
		return $this->tpvfecc;
	}

	/**
	* Set tpvusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tpvusum
	* @return Tpvusum
	*/
	public function setTpvusum($tpvusum)
	{
	  $this->tpvusum = (String) $tpvusum;
	    return $this;
	}

	/**
	* Get tpvusum
	*
	* @return null|String
	*/
	public function getTpvusum()
	{
		return $this->tpvusum;
	}

	/**
	* Set tpvfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tpvfecm
	* @return Tpvfecm
	*/
	public function setTpvfecm($tpvfecm)
	{
	  $this->tpvfecm = (String) $tpvfecm;
	    return $this;
	}

	/**
	* Get tpvfecm
	*
	* @return null|Date
	*/
	public function getTpvfecm()
	{
		return $this->tpvfecm;
	}

	/**
	* Set tpvtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tpvtask
	* @return Tpvtask
	*/
	public function setTpvtask($tpvtask)
	{
	  $this->tpvtask = (String) $tpvtask;
	    return $this;
	}

	/**
	* Get tpvtask
	*
	* @return null|String
	*/
	public function getTpvtask()
	{
		return $this->tpvtask;
	}

	/**
	* Set tpvpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tpvpara
	* @return Tpvpara
	*/
	public function setTpvpara($tpvpara)
	{
	  $this->tpvpara = (Integer) $tpvpara;
	    return $this;
	}

	/**
	* Get tpvpara
	*
	* @return null|Integer
	*/
	public function getTpvpara()
	{
		return $this->tpvpara;
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

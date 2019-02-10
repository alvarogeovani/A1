<?php
 /**
 * Model of the Tvmovh table
 *
 * It is used to convert the   Tvmovh entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvmovh
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvmovh
{

		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Registrar Movimientos de Bodega
		*/
		protected $vmhsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Transferencias de Bodegas
		*/
		protected $vmtsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Tipos de Movimientos de Bodega
		*/
		protected $vtmsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Realizar Notas de Credito por Devolucion
		*/
		protected $tnhsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Maestro de Bodegas
		*/
		protected $vbosecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Facturacion Normal
		*/
		protected $tphsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Periodos Contables
		*/
		protected $bpesec1;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Registro de Ordenes de Compra Nacionales General (Cabecera)
		*/
		protected $kvcsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Trabajar con Compras Importadas
		*/
		protected $kvpsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Secuencial del Centro de Costos Asociado
		*/
		protected $bctseau;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Secuencial de la Orden de Compra Detalle Auxiliar, nesecario para la ejecucion del trigger TVMOVDPORCOMPRAS
		*/
		protected $kvdseca;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Clase de Movimiento
		*/
		protected $vmhcmov;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Numero Comprobante de Bodega
		*/
		protected $vmhcomp;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de Movimiento
		*/
		protected $vmhfech;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Codigo Tipo de Auxiliar 1
		*/
		protected $vmhcau1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Codigo de Auxiliar 1
		*/
		protected $vmhhre1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 1
		*/
		protected $vmhref1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Codigo Tipo de Auxiliar 2
		*/
		protected $vmhcau2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Codigo de Auxiliar 2
		*/
		protected $vmhhre2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 2
		*/
		protected $vmhref2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Codigo Tipo de Auxiliar 3
		*/
		protected $vmhcau3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Codigo de Auxiliar 3
		*/
		protected $vmhhre3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 3
		*/
		protected $vmhref3;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Situacion del Movimiento de Bodega
		*/
		protected $vmhsitu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de Registro
		*/
		protected $vmhuser;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de Anulacion
		*/
		protected $vmhusea;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Numero de Asiento contable
		*/
		protected $vmhasto;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de Creacion
		*/
		protected $vmhusuc;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de Creacion
		*/
		protected $vmhfecc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de Modificacion
		*/
		protected $vmhusum;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Modificacion
		*/
		protected $vmhfecm;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Tipo de Tarea Ejecutada
		*/
		protected $vmhtask;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Bandera de Borrado
		*/
		protected $vmhpara;

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
	* Name of the table: tvmovh
	* 
	 */
	const TABLE="tvmovh";

	/**
	*Primary key
*/
		 const PKEY = "vmhsecu";



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
		throw new \Exception('Class Entity: Tvmovh Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvmovh. Invalid specified property: get'.$name);
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
	* Set vmhsecu
	*
	*Estos datos se ingresan en la Opcion: Registrar Movimientos de Bodega
	*
	* @parámetro Integer $vmhsecu
	* @return Vmhsecu
	*/
	public function setVmhsecu($vmhsecu)
	{
	  $this->vmhsecu = (Integer) $vmhsecu;
	    return $this;
	}

	/**
	* Get vmhsecu
	*
	* @return null|Integer
	*/
	public function getVmhsecu()
	{
		return $this->vmhsecu;
	}

	/**
	* Set vmtsecu
	*
	*Estos datos se ingresan en la Opcion: Transferencias de Bodegas
	*
	* @parámetro Integer $vmtsecu
	* @return Vmtsecu
	*/
	public function setVmtsecu($vmtsecu)
	{
	  $this->vmtsecu = (Integer) $vmtsecu;
	    return $this;
	}

	/**
	* Get vmtsecu
	*
	* @return null|Integer
	*/
	public function getVmtsecu()
	{
		return $this->vmtsecu;
	}

	/**
	* Set vtmsecu
	*
	*Estos datos se ingresan en la Opcion: Tipos de Movimientos de Bodega
	*
	* @parámetro Integer $vtmsecu
	* @return Vtmsecu
	*/
	public function setVtmsecu($vtmsecu)
	{
	  $this->vtmsecu = (Integer) $vtmsecu;
	    return $this;
	}

	/**
	* Get vtmsecu
	*
	* @return null|Integer
	*/
	public function getVtmsecu()
	{
		return $this->vtmsecu;
	}

	/**
	* Set tnhsecu
	*
	*Estos datos se ingresan en la Opcion: Realizar Notas de Credito por Devolucion
	*
	* @parámetro Integer $tnhsecu
	* @return Tnhsecu
	*/
	public function setTnhsecu($tnhsecu)
	{
	  $this->tnhsecu = (Integer) $tnhsecu;
	    return $this;
	}

	/**
	* Get tnhsecu
	*
	* @return null|Integer
	*/
	public function getTnhsecu()
	{
		return $this->tnhsecu;
	}

	/**
	* Set vbosecu
	*
	*Estos datos se ingresan en la Opcion: Maestro de Bodegas
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
	* Set tphsecu
	*
	*Estos datos se ingresan en la Opcion: Facturacion Normal
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
	* Set bpesec1
	*
	*Estos datos se ingresan en la Opcion: Periodos Contables
	*
	* @parámetro Integer $bpesec1
	* @return Bpesec1
	*/
	public function setBpesec1($bpesec1)
	{
	  $this->bpesec1 = (Integer) $bpesec1;
	    return $this;
	}

	/**
	* Get bpesec1
	*
	* @return null|Integer
	*/
	public function getBpesec1()
	{
		return $this->bpesec1;
	}

	/**
	* Set kvcsecu
	*
	*Estos datos se ingresan en la Opcion: Registro de Ordenes de Compra Nacionales General (Cabecera)
	*
	* @parámetro Integer $kvcsecu
	* @return Kvcsecu
	*/
	public function setKvcsecu($kvcsecu)
	{
	  $this->kvcsecu = (Integer) $kvcsecu;
	    return $this;
	}

	/**
	* Get kvcsecu
	*
	* @return null|Integer
	*/
	public function getKvcsecu()
	{
		return $this->kvcsecu;
	}

	/**
	* Set kvpsecu
	*
	*Estos datos se ingresan en la Opcion: Trabajar con Compras Importadas
	*
	* @parámetro Integer $kvpsecu
	* @return Kvpsecu
	*/
	public function setKvpsecu($kvpsecu)
	{
	  $this->kvpsecu = (Integer) $kvpsecu;
	    return $this;
	}

	/**
	* Get kvpsecu
	*
	* @return null|Integer
	*/
	public function getKvpsecu()
	{
		return $this->kvpsecu;
	}

	/**
	* Set bctseau
	*
	*Secuencial del Centro de Costos Asociado
	*
	* @parámetro Integer $bctseau
	* @return Bctseau
	*/
	public function setBctseau($bctseau)
	{
	  $this->bctseau = (Integer) $bctseau;
	    return $this;
	}

	/**
	* Get bctseau
	*
	* @return null|Integer
	*/
	public function getBctseau()
	{
		return $this->bctseau;
	}

	/**
	* Set kvdseca
	*
	*Secuencial de la Orden de Compra Detalle Auxiliar, nesecario para la ejecucion del trigger TVMOVDPORCOMPRAS
	*
	* @parámetro Integer $kvdseca
	* @return Kvdseca
	*/
	public function setKvdseca($kvdseca)
	{
	  $this->kvdseca = (Integer) $kvdseca;
	    return $this;
	}

	/**
	* Get kvdseca
	*
	* @return null|Integer
	*/
	public function getKvdseca()
	{
		return $this->kvdseca;
	}

	/**
	* Set vmhcmov
	*
	*Clase de Movimiento
	*
	* @parámetro Integer $vmhcmov
	* @return Vmhcmov
	*/
	public function setVmhcmov($vmhcmov)
	{
	  $this->vmhcmov = (Integer) $vmhcmov;
	    return $this;
	}

	/**
	* Get vmhcmov
	*
	* @return null|Integer
	*/
	public function getVmhcmov()
	{
		return $this->vmhcmov;
	}

	/**
	* Set vmhcomp
	*
	*Numero Comprobante de Bodega
	*
	* @parámetro Decimal $vmhcomp
	* @return Vmhcomp
	*/
	public function setVmhcomp($vmhcomp)
	{
	  $this->vmhcomp = (Double) $vmhcomp;
	    return $this;
	}

	/**
	* Get vmhcomp
	*
	* @return null|Decimal
	*/
	public function getVmhcomp()
	{
		return $this->vmhcomp;
	}

	/**
	* Set vmhfech
	*
	*Fecha de Movimiento
	*
	* @parámetro Date $vmhfech
	* @return Vmhfech
	*/
	public function setVmhfech($vmhfech)
	{
	  $this->vmhfech = (String) $vmhfech;
	    return $this;
	}

	/**
	* Get vmhfech
	*
	* @return null|Date
	*/
	public function getVmhfech()
	{
		return $this->vmhfech;
	}

	/**
	* Set vmhcau1
	*
	*Codigo Tipo de Auxiliar 1
	*
	* @parámetro String $vmhcau1
	* @return Vmhcau1
	*/
	public function setVmhcau1($vmhcau1)
	{
	  $this->vmhcau1 = (String) $vmhcau1;
	    return $this;
	}

	/**
	* Get vmhcau1
	*
	* @return null|String
	*/
	public function getVmhcau1()
	{
		return $this->vmhcau1;
	}

	/**
	* Set vmhhre1
	*
	*Codigo de Auxiliar 1
	*
	* @parámetro String $vmhhre1
	* @return Vmhhre1
	*/
	public function setVmhhre1($vmhhre1)
	{
	  $this->vmhhre1 = (String) $vmhhre1;
	    return $this;
	}

	/**
	* Get vmhhre1
	*
	* @return null|String
	*/
	public function getVmhhre1()
	{
		return $this->vmhhre1;
	}

	/**
	* Set vmhref1
	*
	*Referencia 1
	*
	* @parámetro String $vmhref1
	* @return Vmhref1
	*/
	public function setVmhref1($vmhref1)
	{
	  $this->vmhref1 = (String) $vmhref1;
	    return $this;
	}

	/**
	* Get vmhref1
	*
	* @return null|String
	*/
	public function getVmhref1()
	{
		return $this->vmhref1;
	}

	/**
	* Set vmhcau2
	*
	*Codigo Tipo de Auxiliar 2
	*
	* @parámetro String $vmhcau2
	* @return Vmhcau2
	*/
	public function setVmhcau2($vmhcau2)
	{
	  $this->vmhcau2 = (String) $vmhcau2;
	    return $this;
	}

	/**
	* Get vmhcau2
	*
	* @return null|String
	*/
	public function getVmhcau2()
	{
		return $this->vmhcau2;
	}

	/**
	* Set vmhhre2
	*
	*Codigo de Auxiliar 2
	*
	* @parámetro String $vmhhre2
	* @return Vmhhre2
	*/
	public function setVmhhre2($vmhhre2)
	{
	  $this->vmhhre2 = (String) $vmhhre2;
	    return $this;
	}

	/**
	* Get vmhhre2
	*
	* @return null|String
	*/
	public function getVmhhre2()
	{
		return $this->vmhhre2;
	}

	/**
	* Set vmhref2
	*
	*Referencia 2
	*
	* @parámetro String $vmhref2
	* @return Vmhref2
	*/
	public function setVmhref2($vmhref2)
	{
	  $this->vmhref2 = (String) $vmhref2;
	    return $this;
	}

	/**
	* Get vmhref2
	*
	* @return null|String
	*/
	public function getVmhref2()
	{
		return $this->vmhref2;
	}

	/**
	* Set vmhcau3
	*
	*Codigo Tipo de Auxiliar 3
	*
	* @parámetro String $vmhcau3
	* @return Vmhcau3
	*/
	public function setVmhcau3($vmhcau3)
	{
	  $this->vmhcau3 = (String) $vmhcau3;
	    return $this;
	}

	/**
	* Get vmhcau3
	*
	* @return null|String
	*/
	public function getVmhcau3()
	{
		return $this->vmhcau3;
	}

	/**
	* Set vmhhre3
	*
	*Codigo de Auxiliar 3
	*
	* @parámetro String $vmhhre3
	* @return Vmhhre3
	*/
	public function setVmhhre3($vmhhre3)
	{
	  $this->vmhhre3 = (String) $vmhhre3;
	    return $this;
	}

	/**
	* Get vmhhre3
	*
	* @return null|String
	*/
	public function getVmhhre3()
	{
		return $this->vmhhre3;
	}

	/**
	* Set vmhref3
	*
	*Referencia 3
	*
	* @parámetro String $vmhref3
	* @return Vmhref3
	*/
	public function setVmhref3($vmhref3)
	{
	  $this->vmhref3 = (String) $vmhref3;
	    return $this;
	}

	/**
	* Get vmhref3
	*
	* @return null|String
	*/
	public function getVmhref3()
	{
		return $this->vmhref3;
	}

	/**
	* Set vmhsitu
	*
	*Situacion del Movimiento de Bodega
	*
	* @parámetro Integer $vmhsitu
	* @return Vmhsitu
	*/
	public function setVmhsitu($vmhsitu)
	{
	  $this->vmhsitu = (Integer) $vmhsitu;
	    return $this;
	}

	/**
	* Get vmhsitu
	*
	* @return null|Integer
	*/
	public function getVmhsitu()
	{
		return $this->vmhsitu;
	}

	/**
	* Set vmhuser
	*
	*Usuario de Registro
	*
	* @parámetro String $vmhuser
	* @return Vmhuser
	*/
	public function setVmhuser($vmhuser)
	{
	  $this->vmhuser = (String) $vmhuser;
	    return $this;
	}

	/**
	* Get vmhuser
	*
	* @return null|String
	*/
	public function getVmhuser()
	{
		return $this->vmhuser;
	}

	/**
	* Set vmhusea
	*
	*Usuario de Anulacion
	*
	* @parámetro String $vmhusea
	* @return Vmhusea
	*/
	public function setVmhusea($vmhusea)
	{
	  $this->vmhusea = (String) $vmhusea;
	    return $this;
	}

	/**
	* Get vmhusea
	*
	* @return null|String
	*/
	public function getVmhusea()
	{
		return $this->vmhusea;
	}

	/**
	* Set vmhasto
	*
	*Numero de Asiento contable
	*
	* @parámetro String $vmhasto
	* @return Vmhasto
	*/
	public function setVmhasto($vmhasto)
	{
	  $this->vmhasto = (String) $vmhasto;
	    return $this;
	}

	/**
	* Get vmhasto
	*
	* @return null|String
	*/
	public function getVmhasto()
	{
		return $this->vmhasto;
	}

	/**
	* Set vmhusuc
	*
	*Usuario de Creacion
	*
	* @parámetro String $vmhusuc
	* @return Vmhusuc
	*/
	public function setVmhusuc($vmhusuc)
	{
	  $this->vmhusuc = (String) $vmhusuc;
	    return $this;
	}

	/**
	* Get vmhusuc
	*
	* @return null|String
	*/
	public function getVmhusuc()
	{
		return $this->vmhusuc;
	}

	/**
	* Set vmhfecc
	*
	*Fecha de Creacion
	*
	* @parámetro Date $vmhfecc
	* @return Vmhfecc
	*/
	public function setVmhfecc($vmhfecc)
	{
	  $this->vmhfecc = (String) $vmhfecc;
	    return $this;
	}

	/**
	* Get vmhfecc
	*
	* @return null|Date
	*/
	public function getVmhfecc()
	{
		return $this->vmhfecc;
	}

	/**
	* Set vmhusum
	*
	*Usuario de Modificacion
	*
	* @parámetro String $vmhusum
	* @return Vmhusum
	*/
	public function setVmhusum($vmhusum)
	{
	  $this->vmhusum = (String) $vmhusum;
	    return $this;
	}

	/**
	* Get vmhusum
	*
	* @return null|String
	*/
	public function getVmhusum()
	{
		return $this->vmhusum;
	}

	/**
	* Set vmhfecm
	*
	*Fecha de Modificacion
	*
	* @parámetro Date $vmhfecm
	* @return Vmhfecm
	*/
	public function setVmhfecm($vmhfecm)
	{
	  $this->vmhfecm = (String) $vmhfecm;
	    return $this;
	}

	/**
	* Get vmhfecm
	*
	* @return null|Date
	*/
	public function getVmhfecm()
	{
		return $this->vmhfecm;
	}

	/**
	* Set vmhtask
	*
	*Tipo de Tarea Ejecutada
	*
	* @parámetro String $vmhtask
	* @return Vmhtask
	*/
	public function setVmhtask($vmhtask)
	{
	  $this->vmhtask = (String) $vmhtask;
	    return $this;
	}

	/**
	* Get vmhtask
	*
	* @return null|String
	*/
	public function getVmhtask()
	{
		return $this->vmhtask;
	}

	/**
	* Set vmhpara
	*
	*Bandera de Borrado
	*
	* @parámetro Integer $vmhpara
	* @return Vmhpara
	*/
	public function setVmhpara($vmhpara)
	{
	  $this->vmhpara = (Integer) $vmhpara;
	    return $this;
	}

	/**
	* Get vmhpara
	*
	* @return null|Integer
	*/
	public function getVmhpara()
	{
		return $this->vmhpara;
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

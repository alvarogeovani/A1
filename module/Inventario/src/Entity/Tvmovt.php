<?php
 /**
 * Model of the Tvmovt table
 *
 * It is used to convert the   Tvmovt entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvmovt
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvmovt
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Transferencias de Bodegas
		*/
		protected $vmtsecu;
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
		* Opción: Maestro de Colaboradores
		*/
		protected $mmcsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Transportistas
		*/
		protected $ptrsecu;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código de Bodega Origen
		*/
		protected $vmtbodo;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Ejercicio Económico
		*/
		protected $bperano;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Periodo Contable
		*/
		protected $bpernum;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Número de Transferencia
		*/
		protected $vmtcomp;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Movimiento
		*/
		protected $vmtfech;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 1
		*/
		protected $vmtref1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 2
		*/
		protected $vmtref2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia 3
		*/
		protected $vmtref3;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Secuencial PK Destino: Maestro de Bodega
		*/
		protected $vbosec2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Bodega Destino
		*/
		protected $vmtbodd;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Tipo de Transferencia
		*/
		protected $vmttipt;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Comprobante Salida Bodega Origen
		*/
		protected $vmtcoms;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Movimiento de Salida
		*/
		protected $vmtfecs;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Guía
		*/
		protected $vmtguia;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Guía
		*/
		protected $vmtfecg;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Número de Comprobante Ingreso Bodega Destino
		*/
		protected $vmtcomi;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Movimiento de Ingreso
		*/
		protected $vmtfeci;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Responsable de Bodega
		*/
		protected $mmcsec1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Solicitado por
		*/
		protected $vmtsoli;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Autorizado por
		*/
		protected $vmtauto;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Transportista
		*/
		protected $ptrcode;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observación de la Transferencia
		*/
		protected $vmtobse;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación del Movimiento de Transferencia
		*/
		protected $vmtsitu;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vmtusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vmtfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $vmtusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vmtfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vmttask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $vmtpara;

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
	* Name of the table: tvmovt
	* 
	 */
	const TABLE="tvmovt";

	/**
	*Primary key
*/
		 const PKEY = "vmtsecu";



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
		throw new \Exception('Class Entity: Tvmovt Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvmovt. Invalid specified property: get'.$name);
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
	* Set vmtsecu
	*
	*Estos datos se ingresan en la Opción: Transferencias de Bodegas
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
	* Set ptrsecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Transportistas
	*
	* @parámetro Integer $ptrsecu
	* @return Ptrsecu
	*/
	public function setPtrsecu($ptrsecu)
	{
	  $this->ptrsecu = (Integer) $ptrsecu;
	    return $this;
	}

	/**
	* Get ptrsecu
	*
	* @return null|Integer
	*/
	public function getPtrsecu()
	{
		return $this->ptrsecu;
	}

	/**
	* Set vmtbodo
	*
	*Código de Bodega Origen
	*
	* @parámetro String $vmtbodo
	* @return Vmtbodo
	*/
	public function setVmtbodo($vmtbodo)
	{
	  $this->vmtbodo = (String) $vmtbodo;
	    return $this;
	}

	/**
	* Get vmtbodo
	*
	* @return null|String
	*/
	public function getVmtbodo()
	{
		return $this->vmtbodo;
	}

	/**
	* Set bperano
	*
	*Ejercicio Económico
	*
	* @parámetro Integer $bperano
	* @return Bperano
	*/
	public function setBperano($bperano)
	{
	  $this->bperano = (Integer) $bperano;
	    return $this;
	}

	/**
	* Get bperano
	*
	* @return null|Integer
	*/
	public function getBperano()
	{
		return $this->bperano;
	}

	/**
	* Set bpernum
	*
	*Periodo Contable
	*
	* @parámetro Integer $bpernum
	* @return Bpernum
	*/
	public function setBpernum($bpernum)
	{
	  $this->bpernum = (Integer) $bpernum;
	    return $this;
	}

	/**
	* Get bpernum
	*
	* @return null|Integer
	*/
	public function getBpernum()
	{
		return $this->bpernum;
	}

	/**
	* Set vmtcomp
	*
	*Número de Transferencia
	*
	* @parámetro Decimal $vmtcomp
	* @return Vmtcomp
	*/
	public function setVmtcomp($vmtcomp)
	{
	  $this->vmtcomp = (Double) $vmtcomp;
	    return $this;
	}

	/**
	* Get vmtcomp
	*
	* @return null|Decimal
	*/
	public function getVmtcomp()
	{
		return $this->vmtcomp;
	}

	/**
	* Set vmtfech
	*
	*Fecha de Movimiento
	*
	* @parámetro Date $vmtfech
	* @return Vmtfech
	*/
	public function setVmtfech($vmtfech)
	{
	  $this->vmtfech = (String) $vmtfech;
	    return $this;
	}

	/**
	* Get vmtfech
	*
	* @return null|Date
	*/
	public function getVmtfech()
	{
		return $this->vmtfech;
	}

	/**
	* Set vmtref1
	*
	*Referencia 1
	*
	* @parámetro String $vmtref1
	* @return Vmtref1
	*/
	public function setVmtref1($vmtref1)
	{
	  $this->vmtref1 = (String) $vmtref1;
	    return $this;
	}

	/**
	* Get vmtref1
	*
	* @return null|String
	*/
	public function getVmtref1()
	{
		return $this->vmtref1;
	}

	/**
	* Set vmtref2
	*
	*Referencia 2
	*
	* @parámetro String $vmtref2
	* @return Vmtref2
	*/
	public function setVmtref2($vmtref2)
	{
	  $this->vmtref2 = (String) $vmtref2;
	    return $this;
	}

	/**
	* Get vmtref2
	*
	* @return null|String
	*/
	public function getVmtref2()
	{
		return $this->vmtref2;
	}

	/**
	* Set vmtref3
	*
	*Referencia 3
	*
	* @parámetro String $vmtref3
	* @return Vmtref3
	*/
	public function setVmtref3($vmtref3)
	{
	  $this->vmtref3 = (String) $vmtref3;
	    return $this;
	}

	/**
	* Get vmtref3
	*
	* @return null|String
	*/
	public function getVmtref3()
	{
		return $this->vmtref3;
	}

	/**
	* Set vbosec2
	*
	*Secuencial PK Destino: Maestro de Bodega
	*
	* @parámetro Integer $vbosec2
	* @return Vbosec2
	*/
	public function setVbosec2($vbosec2)
	{
	  $this->vbosec2 = (Integer) $vbosec2;
	    return $this;
	}

	/**
	* Get vbosec2
	*
	* @return null|Integer
	*/
	public function getVbosec2()
	{
		return $this->vbosec2;
	}

	/**
	* Set vmtbodd
	*
	*Código de Bodega Destino
	*
	* @parámetro String $vmtbodd
	* @return Vmtbodd
	*/
	public function setVmtbodd($vmtbodd)
	{
	  $this->vmtbodd = (String) $vmtbodd;
	    return $this;
	}

	/**
	* Get vmtbodd
	*
	* @return null|String
	*/
	public function getVmtbodd()
	{
		return $this->vmtbodd;
	}

	/**
	* Set vmttipt
	*
	*Código Tipo de Transferencia
	*
	* @parámetro Integer $vmttipt
	* @return Vmttipt
	*/
	public function setVmttipt($vmttipt)
	{
	  $this->vmttipt = (Integer) $vmttipt;
	    return $this;
	}

	/**
	* Get vmttipt
	*
	* @return null|Integer
	*/
	public function getVmttipt()
	{
		return $this->vmttipt;
	}

	/**
	* Set vmtcoms
	*
	*Número de Comprobante Salida Bodega Origen
	*
	* @parámetro Decimal $vmtcoms
	* @return Vmtcoms
	*/
	public function setVmtcoms($vmtcoms)
	{
	  $this->vmtcoms = (Double) $vmtcoms;
	    return $this;
	}

	/**
	* Get vmtcoms
	*
	* @return null|Decimal
	*/
	public function getVmtcoms()
	{
		return $this->vmtcoms;
	}

	/**
	* Set vmtfecs
	*
	*Fecha Movimiento de Salida
	*
	* @parámetro Date $vmtfecs
	* @return Vmtfecs
	*/
	public function setVmtfecs($vmtfecs)
	{
	  $this->vmtfecs = (String) $vmtfecs;
	    return $this;
	}

	/**
	* Get vmtfecs
	*
	* @return null|Date
	*/
	public function getVmtfecs()
	{
		return $this->vmtfecs;
	}

	/**
	* Set vmtguia
	*
	*Número de Guía
	*
	* @parámetro Decimal $vmtguia
	* @return Vmtguia
	*/
	public function setVmtguia($vmtguia)
	{
	  $this->vmtguia = (Double) $vmtguia;
	    return $this;
	}

	/**
	* Get vmtguia
	*
	* @return null|Decimal
	*/
	public function getVmtguia()
	{
		return $this->vmtguia;
	}

	/**
	* Set vmtfecg
	*
	*Fecha de Guía
	*
	* @parámetro Date $vmtfecg
	* @return Vmtfecg
	*/
	public function setVmtfecg($vmtfecg)
	{
	  $this->vmtfecg = (String) $vmtfecg;
	    return $this;
	}

	/**
	* Get vmtfecg
	*
	* @return null|Date
	*/
	public function getVmtfecg()
	{
		return $this->vmtfecg;
	}

	/**
	* Set vmtcomi
	*
	*Número de Comprobante Ingreso Bodega Destino
	*
	* @parámetro Decimal $vmtcomi
	* @return Vmtcomi
	*/
	public function setVmtcomi($vmtcomi)
	{
	  $this->vmtcomi = (Double) $vmtcomi;
	    return $this;
	}

	/**
	* Get vmtcomi
	*
	* @return null|Decimal
	*/
	public function getVmtcomi()
	{
		return $this->vmtcomi;
	}

	/**
	* Set vmtfeci
	*
	*Fecha Movimiento de Ingreso
	*
	* @parámetro Date $vmtfeci
	* @return Vmtfeci
	*/
	public function setVmtfeci($vmtfeci)
	{
	  $this->vmtfeci = (String) $vmtfeci;
	    return $this;
	}

	/**
	* Get vmtfeci
	*
	* @return null|Date
	*/
	public function getVmtfeci()
	{
		return $this->vmtfeci;
	}

	/**
	* Set mmcsec1
	*
	*Código Responsable de Bodega
	*
	* @parámetro Integer $mmcsec1
	* @return Mmcsec1
	*/
	public function setMmcsec1($mmcsec1)
	{
	  $this->mmcsec1 = (Integer) $mmcsec1;
	    return $this;
	}

	/**
	* Get mmcsec1
	*
	* @return null|Integer
	*/
	public function getMmcsec1()
	{
		return $this->mmcsec1;
	}

	/**
	* Set vmtsoli
	*
	*Solicitado por
	*
	* @parámetro String $vmtsoli
	* @return Vmtsoli
	*/
	public function setVmtsoli($vmtsoli)
	{
	  $this->vmtsoli = (String) $vmtsoli;
	    return $this;
	}

	/**
	* Get vmtsoli
	*
	* @return null|String
	*/
	public function getVmtsoli()
	{
		return $this->vmtsoli;
	}

	/**
	* Set vmtauto
	*
	*Autorizado por
	*
	* @parámetro String $vmtauto
	* @return Vmtauto
	*/
	public function setVmtauto($vmtauto)
	{
	  $this->vmtauto = (String) $vmtauto;
	    return $this;
	}

	/**
	* Get vmtauto
	*
	* @return null|String
	*/
	public function getVmtauto()
	{
		return $this->vmtauto;
	}

	/**
	* Set ptrcode
	*
	*Código de Transportista
	*
	* @parámetro String $ptrcode
	* @return Ptrcode
	*/
	public function setPtrcode($ptrcode)
	{
	  $this->ptrcode = (String) $ptrcode;
	    return $this;
	}

	/**
	* Get ptrcode
	*
	* @return null|String
	*/
	public function getPtrcode()
	{
		return $this->ptrcode;
	}

	/**
	* Set vmtobse
	*
	*Observación de la Transferencia
	*
	* @parámetro String $vmtobse
	* @return Vmtobse
	*/
	public function setVmtobse($vmtobse)
	{
	  $this->vmtobse = (String) $vmtobse;
	    return $this;
	}

	/**
	* Get vmtobse
	*
	* @return null|String
	*/
	public function getVmtobse()
	{
		return $this->vmtobse;
	}

	/**
	* Set vmtsitu
	*
	*Situación del Movimiento de Transferencia
	*
	* @parámetro Integer $vmtsitu
	* @return Vmtsitu
	*/
	public function setVmtsitu($vmtsitu)
	{
	  $this->vmtsitu = (Integer) $vmtsitu;
	    return $this;
	}

	/**
	* Get vmtsitu
	*
	* @return null|Integer
	*/
	public function getVmtsitu()
	{
		return $this->vmtsitu;
	}

	/**
	* Set vmtusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vmtusuc
	* @return Vmtusuc
	*/
	public function setVmtusuc($vmtusuc)
	{
	  $this->vmtusuc = (String) $vmtusuc;
	    return $this;
	}

	/**
	* Get vmtusuc
	*
	* @return null|String
	*/
	public function getVmtusuc()
	{
		return $this->vmtusuc;
	}

	/**
	* Set vmtfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vmtfecc
	* @return Vmtfecc
	*/
	public function setVmtfecc($vmtfecc)
	{
	  $this->vmtfecc = (String) $vmtfecc;
	    return $this;
	}

	/**
	* Get vmtfecc
	*
	* @return null|Date
	*/
	public function getVmtfecc()
	{
		return $this->vmtfecc;
	}

	/**
	* Set vmtusum
	*
	*Usuario de modificación
	*
	* @parámetro String $vmtusum
	* @return Vmtusum
	*/
	public function setVmtusum($vmtusum)
	{
	  $this->vmtusum = (String) $vmtusum;
	    return $this;
	}

	/**
	* Get vmtusum
	*
	* @return null|String
	*/
	public function getVmtusum()
	{
		return $this->vmtusum;
	}

	/**
	* Set vmtfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vmtfecm
	* @return Vmtfecm
	*/
	public function setVmtfecm($vmtfecm)
	{
	  $this->vmtfecm = (String) $vmtfecm;
	    return $this;
	}

	/**
	* Get vmtfecm
	*
	* @return null|Date
	*/
	public function getVmtfecm()
	{
		return $this->vmtfecm;
	}

	/**
	* Set vmttask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vmttask
	* @return Vmttask
	*/
	public function setVmttask($vmttask)
	{
	  $this->vmttask = (String) $vmttask;
	    return $this;
	}

	/**
	* Get vmttask
	*
	* @return null|String
	*/
	public function getVmttask()
	{
		return $this->vmttask;
	}

	/**
	* Set vmtpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $vmtpara
	* @return Vmtpara
	*/
	public function setVmtpara($vmtpara)
	{
	  $this->vmtpara = (Integer) $vmtpara;
	    return $this;
	}

	/**
	* Get vmtpara
	*
	* @return null|Integer
	*/
	public function getVmtpara()
	{
		return $this->vmtpara;
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

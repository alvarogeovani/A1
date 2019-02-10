<?php
 /**
 * Model of the Tvmovd table
 *
 * It is used to convert the   Tvmovd entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvmovd
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvmovd
{

		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Registrar Movimientos de Bodega
		*/
		protected $vmdsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Maestro de Articulos
		*/
		protected $varsecu;
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
		* Estos datos se ingresan en la Opcion: Tipos de Gastos
		*/
		protected $btgsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Centros de Costos
		*/
		protected $bcdsecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Tipos de Actividades
		*/
		protected $btasecu;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Tipos de Cambios
		*/
		protected $bmosec1;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opcion: Registrar Monedas
		*/
		protected $bmosecu;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de Movimiento
		*/
		protected $vmdfech;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Numero Comprobante de Bodega
		*/
		protected $vmhcomp;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Numero de Lote
		*/
		protected $vslllot;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Cantidad registrada
		*/
		protected $vmdcanr;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Costo de Registro Moneda Extranjera
		*/
		protected $vmdcuer;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Costo de Registro Moneda Nacional
		*/
		protected $vmdcunr;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Codigo de Moneda
		*/
		protected $bmoncve;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Tipo de Cambio
		*/
		protected $vmdtcam;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Costo Moneda de Origen
		*/
		protected $vmdcomo;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Tipo de cambio Moneda Origen
		*/
		protected $vmdtcmo;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Cantidad en Bodega
		*/
		protected $vmdcana;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Costo Bodega Moneda Extranjera
		*/
		protected $vmdcuea;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Costo Bodega Moneda Nacional
		*/
		protected $vmdcuna;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Costo Promedio Moneda Extranjera
		*/
		protected $vmdcoep;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Costo Promedio Moneda Nacional
		*/
		protected $vmdconp;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Total Costos Moneda Extranjera
		*/
		protected $vmdtoec;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Total Costo Moneda Nacional
		*/
		protected $vmdtotc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Referencia  Auxiliar  1
		*/
		protected $vmddre1;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Referencia  Auxiliar  2
		*/
		protected $vmddre2;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Referencia  Auxiliar  3
		*/
		protected $vmddre3;
		/**
		* @var Decimal
		* Required field
		* Field visible in the form
		* Cantidad Entregada (Valorizacion FIFO)
		*/
		protected $vmdvfca;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de Vencimiento (Valorizacion FIFO)
		*/
		protected $vmdfvto;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Referencia Auxiliar 4 (Valorizacion FIFO)
		*/
		protected $vmddre4;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de Creacion
		*/
		protected $vmdusuc;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de Creacion
		*/
		protected $vmdfecc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de Modificacion
		*/
		protected $vmdusum;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Modificacion
		*/
		protected $vmdfecm;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Tipo de Tarea Ejecutada
		*/
		protected $vmdtask;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Bandera de Borrado
		*/
		protected $vmdpara;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* completar...
		*/
		protected $vartmed;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* completar
		*/
		protected $vartcod;

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
	* Name of the table: tvmovd
	* 
	 */
	const TABLE="tvmovd";

	/**
	*Primary key
*/
		 const PKEY = "vmdsecu";



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
		throw new \Exception('Class Entity: Tvmovd Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvmovd. Invalid specified property: get'.$name);
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
	* Set vmdsecu
	*
	*Estos datos se ingresan en la Opcion: Registrar Movimientos de Bodega
	*
	* @parámetro Integer $vmdsecu
	* @return Vmdsecu
	*/
	public function setVmdsecu($vmdsecu)
	{
	  $this->vmdsecu = (Integer) $vmdsecu;
	    return $this;
	}

	/**
	* Get vmdsecu
	*
	* @return null|Integer
	*/
	public function getVmdsecu()
	{
		return $this->vmdsecu;
	}

	/**
	* Set varsecu
	*
	*Estos datos se ingresan en la Opcion: Maestro de Articulos
	*
	* @parámetro Integer $varsecu
	* @return Varsecu
	*/
	public function setVarsecu($varsecu)
	{
	  $this->varsecu = (Integer) $varsecu;
	    return $this;
	}

	/**
	* Get varsecu
	*
	* @return null|Integer
	*/
	public function getVarsecu()
	{
		return $this->varsecu;
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
	* Set btgsecu
	*
	*Estos datos se ingresan en la Opcion: Tipos de Gastos
	*
	* @parámetro Integer $btgsecu
	* @return Btgsecu
	*/
	public function setBtgsecu($btgsecu)
	{
	  $this->btgsecu = (Integer) $btgsecu;
	    return $this;
	}

	/**
	* Get btgsecu
	*
	* @return null|Integer
	*/
	public function getBtgsecu()
	{
		return $this->btgsecu;
	}

	/**
	* Set bcdsecu
	*
	*Estos datos se ingresan en la Opcion: Centros de Costos
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
	* Set btasecu
	*
	*Estos datos se ingresan en la Opcion: Tipos de Actividades
	*
	* @parámetro Integer $btasecu
	* @return Btasecu
	*/
	public function setBtasecu($btasecu)
	{
	  $this->btasecu = (Integer) $btasecu;
	    return $this;
	}

	/**
	* Get btasecu
	*
	* @return null|Integer
	*/
	public function getBtasecu()
	{
		return $this->btasecu;
	}

	/**
	* Set bmosec1
	*
	*Estos datos se ingresan en la Opcion: Tipos de Cambios
	*
	* @parámetro Integer $bmosec1
	* @return Bmosec1
	*/
	public function setBmosec1($bmosec1)
	{
	  $this->bmosec1 = (Integer) $bmosec1;
	    return $this;
	}

	/**
	* Get bmosec1
	*
	* @return null|Integer
	*/
	public function getBmosec1()
	{
		return $this->bmosec1;
	}

	/**
	* Set bmosecu
	*
	*Estos datos se ingresan en la Opcion: Registrar Monedas
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
	* Set vmdfech
	*
	*Fecha de Movimiento
	*
	* @parámetro Date $vmdfech
	* @return Vmdfech
	*/
	public function setVmdfech($vmdfech)
	{
	  $this->vmdfech = (String) $vmdfech;
	    return $this;
	}

	/**
	* Get vmdfech
	*
	* @return null|Date
	*/
	public function getVmdfech()
	{
		return $this->vmdfech;
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
	* Set vslllot
	*
	*Numero de Lote
	*
	* @parámetro String $vslllot
	* @return Vslllot
	*/
	public function setVslllot($vslllot)
	{
	  $this->vslllot = (String) $vslllot;
	    return $this;
	}

	/**
	* Get vslllot
	*
	* @return null|String
	*/
	public function getVslllot()
	{
		return $this->vslllot;
	}

	/**
	* Set vmdcanr
	*
	*Cantidad registrada
	*
	* @parámetro Decimal $vmdcanr
	* @return Vmdcanr
	*/
	public function setVmdcanr($vmdcanr)
	{
	  $this->vmdcanr = (Double) $vmdcanr;
	    return $this;
	}

	/**
	* Get vmdcanr
	*
	* @return null|Decimal
	*/
	public function getVmdcanr()
	{
		return $this->vmdcanr;
	}

	/**
	* Set vmdcuer
	*
	*Costo de Registro Moneda Extranjera
	*
	* @parámetro Decimal $vmdcuer
	* @return Vmdcuer
	*/
	public function setVmdcuer($vmdcuer)
	{
	  $this->vmdcuer = (Double) $vmdcuer;
	    return $this;
	}

	/**
	* Get vmdcuer
	*
	* @return null|Decimal
	*/
	public function getVmdcuer()
	{
		return $this->vmdcuer;
	}

	/**
	* Set vmdcunr
	*
	*Costo de Registro Moneda Nacional
	*
	* @parámetro Decimal $vmdcunr
	* @return Vmdcunr
	*/
	public function setVmdcunr($vmdcunr)
	{
	  $this->vmdcunr = (Double) $vmdcunr;
	    return $this;
	}

	/**
	* Get vmdcunr
	*
	* @return null|Decimal
	*/
	public function getVmdcunr()
	{
		return $this->vmdcunr;
	}

	/**
	* Set bmoncve
	*
	*Codigo de Moneda
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
	* Set vmdtcam
	*
	*Tipo de Cambio
	*
	* @parámetro Decimal $vmdtcam
	* @return Vmdtcam
	*/
	public function setVmdtcam($vmdtcam)
	{
	  $this->vmdtcam = (Double) $vmdtcam;
	    return $this;
	}

	/**
	* Get vmdtcam
	*
	* @return null|Decimal
	*/
	public function getVmdtcam()
	{
		return $this->vmdtcam;
	}

	/**
	* Set vmdcomo
	*
	*Costo Moneda de Origen
	*
	* @parámetro Decimal $vmdcomo
	* @return Vmdcomo
	*/
	public function setVmdcomo($vmdcomo)
	{
	  $this->vmdcomo = (Double) $vmdcomo;
	    return $this;
	}

	/**
	* Get vmdcomo
	*
	* @return null|Decimal
	*/
	public function getVmdcomo()
	{
		return $this->vmdcomo;
	}

	/**
	* Set vmdtcmo
	*
	*Tipo de cambio Moneda Origen
	*
	* @parámetro Decimal $vmdtcmo
	* @return Vmdtcmo
	*/
	public function setVmdtcmo($vmdtcmo)
	{
	  $this->vmdtcmo = (Double) $vmdtcmo;
	    return $this;
	}

	/**
	* Get vmdtcmo
	*
	* @return null|Decimal
	*/
	public function getVmdtcmo()
	{
		return $this->vmdtcmo;
	}

	/**
	* Set vmdcana
	*
	*Cantidad en Bodega
	*
	* @parámetro Decimal $vmdcana
	* @return Vmdcana
	*/
	public function setVmdcana($vmdcana)
	{
	  $this->vmdcana = (Double) $vmdcana;
	    return $this;
	}

	/**
	* Get vmdcana
	*
	* @return null|Decimal
	*/
	public function getVmdcana()
	{
		return $this->vmdcana;
	}

	/**
	* Set vmdcuea
	*
	*Costo Bodega Moneda Extranjera
	*
	* @parámetro Decimal $vmdcuea
	* @return Vmdcuea
	*/
	public function setVmdcuea($vmdcuea)
	{
	  $this->vmdcuea = (Double) $vmdcuea;
	    return $this;
	}

	/**
	* Get vmdcuea
	*
	* @return null|Decimal
	*/
	public function getVmdcuea()
	{
		return $this->vmdcuea;
	}

	/**
	* Set vmdcuna
	*
	*Costo Bodega Moneda Nacional
	*
	* @parámetro Decimal $vmdcuna
	* @return Vmdcuna
	*/
	public function setVmdcuna($vmdcuna)
	{
	  $this->vmdcuna = (Double) $vmdcuna;
	    return $this;
	}

	/**
	* Get vmdcuna
	*
	* @return null|Decimal
	*/
	public function getVmdcuna()
	{
		return $this->vmdcuna;
	}

	/**
	* Set vmdcoep
	*
	*Costo Promedio Moneda Extranjera
	*
	* @parámetro Decimal $vmdcoep
	* @return Vmdcoep
	*/
	public function setVmdcoep($vmdcoep)
	{
	  $this->vmdcoep = (Double) $vmdcoep;
	    return $this;
	}

	/**
	* Get vmdcoep
	*
	* @return null|Decimal
	*/
	public function getVmdcoep()
	{
		return $this->vmdcoep;
	}

	/**
	* Set vmdconp
	*
	*Costo Promedio Moneda Nacional
	*
	* @parámetro Decimal $vmdconp
	* @return Vmdconp
	*/
	public function setVmdconp($vmdconp)
	{
	  $this->vmdconp = (Double) $vmdconp;
	    return $this;
	}

	/**
	* Get vmdconp
	*
	* @return null|Decimal
	*/
	public function getVmdconp()
	{
		return $this->vmdconp;
	}

	/**
	* Set vmdtoec
	*
	*Total Costos Moneda Extranjera
	*
	* @parámetro Decimal $vmdtoec
	* @return Vmdtoec
	*/
	public function setVmdtoec($vmdtoec)
	{
	  $this->vmdtoec = (Double) $vmdtoec;
	    return $this;
	}

	/**
	* Get vmdtoec
	*
	* @return null|Decimal
	*/
	public function getVmdtoec()
	{
		return $this->vmdtoec;
	}

	/**
	* Set vmdtotc
	*
	*Total Costo Moneda Nacional
	*
	* @parámetro Decimal $vmdtotc
	* @return Vmdtotc
	*/
	public function setVmdtotc($vmdtotc)
	{
	  $this->vmdtotc = (Double) $vmdtotc;
	    return $this;
	}

	/**
	* Get vmdtotc
	*
	* @return null|Decimal
	*/
	public function getVmdtotc()
	{
		return $this->vmdtotc;
	}

	/**
	* Set vmddre1
	*
	*Referencia  Auxiliar  1
	*
	* @parámetro String $vmddre1
	* @return Vmddre1
	*/
	public function setVmddre1($vmddre1)
	{
	  $this->vmddre1 = (String) $vmddre1;
	    return $this;
	}

	/**
	* Get vmddre1
	*
	* @return null|String
	*/
	public function getVmddre1()
	{
		return $this->vmddre1;
	}

	/**
	* Set vmddre2
	*
	*Referencia  Auxiliar  2
	*
	* @parámetro String $vmddre2
	* @return Vmddre2
	*/
	public function setVmddre2($vmddre2)
	{
	  $this->vmddre2 = (String) $vmddre2;
	    return $this;
	}

	/**
	* Get vmddre2
	*
	* @return null|String
	*/
	public function getVmddre2()
	{
		return $this->vmddre2;
	}

	/**
	* Set vmddre3
	*
	*Referencia  Auxiliar  3
	*
	* @parámetro String $vmddre3
	* @return Vmddre3
	*/
	public function setVmddre3($vmddre3)
	{
	  $this->vmddre3 = (String) $vmddre3;
	    return $this;
	}

	/**
	* Get vmddre3
	*
	* @return null|String
	*/
	public function getVmddre3()
	{
		return $this->vmddre3;
	}

	/**
	* Set vmdvfca
	*
	*Cantidad Entregada (Valorizacion FIFO)
	*
	* @parámetro Decimal $vmdvfca
	* @return Vmdvfca
	*/
	public function setVmdvfca($vmdvfca)
	{
	  $this->vmdvfca = (Double) $vmdvfca;
	    return $this;
	}

	/**
	* Get vmdvfca
	*
	* @return null|Decimal
	*/
	public function getVmdvfca()
	{
		return $this->vmdvfca;
	}

	/**
	* Set vmdfvto
	*
	*Fecha de Vencimiento (Valorizacion FIFO)
	*
	* @parámetro Date $vmdfvto
	* @return Vmdfvto
	*/
	public function setVmdfvto($vmdfvto)
	{
	  $this->vmdfvto = (String) $vmdfvto;
	    return $this;
	}

	/**
	* Get vmdfvto
	*
	* @return null|Date
	*/
	public function getVmdfvto()
	{
		return $this->vmdfvto;
	}

	/**
	* Set vmddre4
	*
	*Referencia Auxiliar 4 (Valorizacion FIFO)
	*
	* @parámetro String $vmddre4
	* @return Vmddre4
	*/
	public function setVmddre4($vmddre4)
	{
	  $this->vmddre4 = (String) $vmddre4;
	    return $this;
	}

	/**
	* Get vmddre4
	*
	* @return null|String
	*/
	public function getVmddre4()
	{
		return $this->vmddre4;
	}

	/**
	* Set vmdusuc
	*
	*Usuario de Creacion
	*
	* @parámetro String $vmdusuc
	* @return Vmdusuc
	*/
	public function setVmdusuc($vmdusuc)
	{
	  $this->vmdusuc = (String) $vmdusuc;
	    return $this;
	}

	/**
	* Get vmdusuc
	*
	* @return null|String
	*/
	public function getVmdusuc()
	{
		return $this->vmdusuc;
	}

	/**
	* Set vmdfecc
	*
	*Fecha de Creacion
	*
	* @parámetro Date $vmdfecc
	* @return Vmdfecc
	*/
	public function setVmdfecc($vmdfecc)
	{
	  $this->vmdfecc = (String) $vmdfecc;
	    return $this;
	}

	/**
	* Get vmdfecc
	*
	* @return null|Date
	*/
	public function getVmdfecc()
	{
		return $this->vmdfecc;
	}

	/**
	* Set vmdusum
	*
	*Usuario de Modificacion
	*
	* @parámetro String $vmdusum
	* @return Vmdusum
	*/
	public function setVmdusum($vmdusum)
	{
	  $this->vmdusum = (String) $vmdusum;
	    return $this;
	}

	/**
	* Get vmdusum
	*
	* @return null|String
	*/
	public function getVmdusum()
	{
		return $this->vmdusum;
	}

	/**
	* Set vmdfecm
	*
	*Fecha de Modificacion
	*
	* @parámetro Date $vmdfecm
	* @return Vmdfecm
	*/
	public function setVmdfecm($vmdfecm)
	{
	  $this->vmdfecm = (String) $vmdfecm;
	    return $this;
	}

	/**
	* Get vmdfecm
	*
	* @return null|Date
	*/
	public function getVmdfecm()
	{
		return $this->vmdfecm;
	}

	/**
	* Set vmdtask
	*
	*Tipo de Tarea Ejecutada
	*
	* @parámetro String $vmdtask
	* @return Vmdtask
	*/
	public function setVmdtask($vmdtask)
	{
	  $this->vmdtask = (String) $vmdtask;
	    return $this;
	}

	/**
	* Get vmdtask
	*
	* @return null|String
	*/
	public function getVmdtask()
	{
		return $this->vmdtask;
	}

	/**
	* Set vmdpara
	*
	*Bandera de Borrado
	*
	* @parámetro Integer $vmdpara
	* @return Vmdpara
	*/
	public function setVmdpara($vmdpara)
	{
	  $this->vmdpara = (Integer) $vmdpara;
	    return $this;
	}

	/**
	* Get vmdpara
	*
	* @return null|Integer
	*/
	public function getVmdpara()
	{
		return $this->vmdpara;
	}

	/**
	* Set vartmed
	*
	*completar...
	*
	* @parámetro String $vartmed
	* @return Vartmed
	*/
	public function setVartmed($vartmed)
	{
	  $this->vartmed = (String) $vartmed;
	    return $this;
	}

	/**
	* Get vartmed
	*
	* @return null|String
	*/
	public function getVartmed()
	{
		return $this->vartmed;
	}

	/**
	* Set vartcod
	*
	*completar
	*
	* @parámetro String $vartcod
	* @return Vartcod
	*/
	public function setVartcod($vartcod)
	{
	  $this->vartcod = (String) $vartcod;
	    return $this;
	}

	/**
	* Get vartcod
	*
	* @return null|String
	*/
	public function getVartcod()
	{
		return $this->vartcod;
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

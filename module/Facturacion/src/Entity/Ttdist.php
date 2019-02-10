<?php
 /**
 * Model of the Ttdist table
 *
 * It is used to convert the   Ttdist entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttdist
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttdist
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Distribuidores
		*/
		protected $tdisecu;
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
		* Estos datos se ingresan en la Opción: Maestro de Ejecutivos de Ventas
		*/
		protected $tagsecu;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Código de Distribuidor
		*/
		protected $tdiscdi;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nominación del Distribuidor
		*/
		protected $tdisnmi;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nombre/ Razón Social del Distribuidor
		*/
		protected $tdisnom;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Sexo del Distribuidor
		*/
		protected $tdissex;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Nacimiento del Distribuidor
		*/
		protected $tdisfna;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Abreviatura ó Siglas del Distribuidor
		*/
		protected $tdisabr;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Estado Civil del Distribuidor
		*/
		protected $tdisesc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Cédula de Identidad del Distribuidor
		*/
		protected $tdisced;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Calle Principal de la Dirección del Distribuidor
		*/
		protected $tdicapr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nomenclatura y Número
		*/
		protected $tdinonu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Calle Secundaria de la Dirección del Distribuidor
		*/
		protected $tdicase;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Postal del Distribuidor
		*/
		protected $tdiscpo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Ciudad del Distribuidor
		*/
		protected $tdisciu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Distrito de Distribuidor
		*/
		protected $tdisdis;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Provincia del Distribuidor
		*/
		protected $tdispro;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Departamento del Distribuidor
		*/
		protected $tdisdpt;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* País del Distribuidor
		*/
		protected $tdispai;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono - Oficina 1 del Distribuidor
		*/
		protected $tdiste1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono - Oficina 2 del Distribuidor
		*/
		protected $tdiste2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono - Domicilio del Distribuidor
		*/
		protected $tdiste3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono Celular del Distribuidor
		*/
		protected $tdiste4;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* RUC del Distribuidor
		*/
		protected $tdisruc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 1 del Distribuidor
		*/
		protected $tdisrf1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 2 del Distribuidor
		*/
		protected $tdisrf2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Registro Fiscal 3 del Distribuidor
		*/
		protected $tdisrf3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observaciones 1
		*/
		protected $tdisob1;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Vendedor del Distribuidor
		*/
		protected $tagsec2;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Zona de Distribuidor
		*/
		protected $tdiszon;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación del Distribuidor Facturación
		*/
		protected $tdissit;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Limite de Crédito del Distribuidor (Inf. Crédito)
		*/
		protected $tdislcr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Saldo de Cuenta Corriente del Distribuidor (Inf. Crédito)
		*/
		protected $tdissal;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Porcentaje de Descuento del Distribuidor (Inf. Venta)
		*/
		protected $tdidsct;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre del Contacto del Distribuidor
		*/
		protected $tdicnom;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Puesto del Contacto del Distribuidor
		*/
		protected $tdicpue;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Dirección email del Contacto del Distribuidor
		*/
		protected $tdimail;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo Documento de Identidad del Distribuidor
		*/
		protected $tditide;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número Documento de Identidad
		*/
		protected $tdinide;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencia Personal Tabla de Parámetros
		*/
		protected $tdirefe;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Referencia Comercial Tabla de Parámetros s/n
		*/
		protected $tdirefc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Agrupación Territorial
		*/
		protected $tdiagrp;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Naturaleza del Distribuidor
		*/
		protected $tdinadi;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Distribuidor
		*/
		protected $tditipd;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación Crediticia
		*/
		protected $tdisscr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Equivalente
		*/
		protected $tdicoeq;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Última Venta
		*/
		protected $tdifeuv;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* 
		*/
		protected $attribute7687;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* 
		*/
		protected $attribute7686;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tdiusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tdifecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tdiusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tdifecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea de ejecutada
		*/
		protected $tditask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tdipara;

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
	* Name of the table: ttdist
	* 
	 */
	const TABLE="ttdist";

	/**
	*Primary key
*/
		 const PKEY = "tdisecu";



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
		throw new \Exception('Class Entity: Ttdist Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttdist. Invalid specified property: get'.$name);
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
	* Set tagsecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Ejecutivos de Ventas
	*
	* @parámetro Integer $tagsecu
	* @return Tagsecu
	*/
	public function setTagsecu($tagsecu)
	{
	  $this->tagsecu = (Integer) $tagsecu;
	    return $this;
	}

	/**
	* Get tagsecu
	*
	* @return null|Integer
	*/
	public function getTagsecu()
	{
		return $this->tagsecu;
	}

	/**
	* Set tdiscdi
	*
	*Código de Distribuidor
	*
	* @parámetro String $tdiscdi
	* @return Tdiscdi
	*/
	public function setTdiscdi($tdiscdi)
	{
	  $this->tdiscdi = (String) $tdiscdi;
	    return $this;
	}

	/**
	* Get tdiscdi
	*
	* @return null|String
	*/
	public function getTdiscdi()
	{
		return $this->tdiscdi;
	}

	/**
	* Set tdisnmi
	*
	*Nominación del Distribuidor
	*
	* @parámetro String $tdisnmi
	* @return Tdisnmi
	*/
	public function setTdisnmi($tdisnmi)
	{
	  $this->tdisnmi = (String) $tdisnmi;
	    return $this;
	}

	/**
	* Get tdisnmi
	*
	* @return null|String
	*/
	public function getTdisnmi()
	{
		return $this->tdisnmi;
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
	* Set tdissex
	*
	*Sexo del Distribuidor
	*
	* @parámetro Integer $tdissex
	* @return Tdissex
	*/
	public function setTdissex($tdissex)
	{
	  $this->tdissex = (Integer) $tdissex;
	    return $this;
	}

	/**
	* Get tdissex
	*
	* @return null|Integer
	*/
	public function getTdissex()
	{
		return $this->tdissex;
	}

	/**
	* Set tdisfna
	*
	*Fecha de Nacimiento del Distribuidor
	*
	* @parámetro Date $tdisfna
	* @return Tdisfna
	*/
	public function setTdisfna($tdisfna)
	{
	  $this->tdisfna = (String) $tdisfna;
	    return $this;
	}

	/**
	* Get tdisfna
	*
	* @return null|Date
	*/
	public function getTdisfna()
	{
		return $this->tdisfna;
	}

	/**
	* Set tdisabr
	*
	*Abreviatura ó Siglas del Distribuidor
	*
	* @parámetro String $tdisabr
	* @return Tdisabr
	*/
	public function setTdisabr($tdisabr)
	{
	  $this->tdisabr = (String) $tdisabr;
	    return $this;
	}

	/**
	* Get tdisabr
	*
	* @return null|String
	*/
	public function getTdisabr()
	{
		return $this->tdisabr;
	}

	/**
	* Set tdisesc
	*
	*Estado Civil del Distribuidor
	*
	* @parámetro Integer $tdisesc
	* @return Tdisesc
	*/
	public function setTdisesc($tdisesc)
	{
	  $this->tdisesc = (Integer) $tdisesc;
	    return $this;
	}

	/**
	* Get tdisesc
	*
	* @return null|Integer
	*/
	public function getTdisesc()
	{
		return $this->tdisesc;
	}

	/**
	* Set tdisced
	*
	*Cédula de Identidad del Distribuidor
	*
	* @parámetro String $tdisced
	* @return Tdisced
	*/
	public function setTdisced($tdisced)
	{
	  $this->tdisced = (String) $tdisced;
	    return $this;
	}

	/**
	* Get tdisced
	*
	* @return null|String
	*/
	public function getTdisced()
	{
		return $this->tdisced;
	}

	/**
	* Set tdicapr
	*
	*Calle Principal de la Dirección del Distribuidor
	*
	* @parámetro String $tdicapr
	* @return Tdicapr
	*/
	public function setTdicapr($tdicapr)
	{
	  $this->tdicapr = (String) $tdicapr;
	    return $this;
	}

	/**
	* Get tdicapr
	*
	* @return null|String
	*/
	public function getTdicapr()
	{
		return $this->tdicapr;
	}

	/**
	* Set tdinonu
	*
	*Nomenclatura y Número
	*
	* @parámetro String $tdinonu
	* @return Tdinonu
	*/
	public function setTdinonu($tdinonu)
	{
	  $this->tdinonu = (String) $tdinonu;
	    return $this;
	}

	/**
	* Get tdinonu
	*
	* @return null|String
	*/
	public function getTdinonu()
	{
		return $this->tdinonu;
	}

	/**
	* Set tdicase
	*
	*Calle Secundaria de la Dirección del Distribuidor
	*
	* @parámetro String $tdicase
	* @return Tdicase
	*/
	public function setTdicase($tdicase)
	{
	  $this->tdicase = (String) $tdicase;
	    return $this;
	}

	/**
	* Get tdicase
	*
	* @return null|String
	*/
	public function getTdicase()
	{
		return $this->tdicase;
	}

	/**
	* Set tdiscpo
	*
	*Código Postal del Distribuidor
	*
	* @parámetro String $tdiscpo
	* @return Tdiscpo
	*/
	public function setTdiscpo($tdiscpo)
	{
	  $this->tdiscpo = (String) $tdiscpo;
	    return $this;
	}

	/**
	* Get tdiscpo
	*
	* @return null|String
	*/
	public function getTdiscpo()
	{
		return $this->tdiscpo;
	}

	/**
	* Set tdisciu
	*
	*Ciudad del Distribuidor
	*
	* @parámetro String $tdisciu
	* @return Tdisciu
	*/
	public function setTdisciu($tdisciu)
	{
	  $this->tdisciu = (String) $tdisciu;
	    return $this;
	}

	/**
	* Get tdisciu
	*
	* @return null|String
	*/
	public function getTdisciu()
	{
		return $this->tdisciu;
	}

	/**
	* Set tdisdis
	*
	*Distrito de Distribuidor
	*
	* @parámetro String $tdisdis
	* @return Tdisdis
	*/
	public function setTdisdis($tdisdis)
	{
	  $this->tdisdis = (String) $tdisdis;
	    return $this;
	}

	/**
	* Get tdisdis
	*
	* @return null|String
	*/
	public function getTdisdis()
	{
		return $this->tdisdis;
	}

	/**
	* Set tdispro
	*
	*Provincia del Distribuidor
	*
	* @parámetro String $tdispro
	* @return Tdispro
	*/
	public function setTdispro($tdispro)
	{
	  $this->tdispro = (String) $tdispro;
	    return $this;
	}

	/**
	* Get tdispro
	*
	* @return null|String
	*/
	public function getTdispro()
	{
		return $this->tdispro;
	}

	/**
	* Set tdisdpt
	*
	*Departamento del Distribuidor
	*
	* @parámetro String $tdisdpt
	* @return Tdisdpt
	*/
	public function setTdisdpt($tdisdpt)
	{
	  $this->tdisdpt = (String) $tdisdpt;
	    return $this;
	}

	/**
	* Get tdisdpt
	*
	* @return null|String
	*/
	public function getTdisdpt()
	{
		return $this->tdisdpt;
	}

	/**
	* Set tdispai
	*
	*País del Distribuidor
	*
	* @parámetro String $tdispai
	* @return Tdispai
	*/
	public function setTdispai($tdispai)
	{
	  $this->tdispai = (String) $tdispai;
	    return $this;
	}

	/**
	* Get tdispai
	*
	* @return null|String
	*/
	public function getTdispai()
	{
		return $this->tdispai;
	}

	/**
	* Set tdiste1
	*
	*Teléfono - Oficina 1 del Distribuidor
	*
	* @parámetro String $tdiste1
	* @return Tdiste1
	*/
	public function setTdiste1($tdiste1)
	{
	  $this->tdiste1 = (String) $tdiste1;
	    return $this;
	}

	/**
	* Get tdiste1
	*
	* @return null|String
	*/
	public function getTdiste1()
	{
		return $this->tdiste1;
	}

	/**
	* Set tdiste2
	*
	*Teléfono - Oficina 2 del Distribuidor
	*
	* @parámetro String $tdiste2
	* @return Tdiste2
	*/
	public function setTdiste2($tdiste2)
	{
	  $this->tdiste2 = (String) $tdiste2;
	    return $this;
	}

	/**
	* Get tdiste2
	*
	* @return null|String
	*/
	public function getTdiste2()
	{
		return $this->tdiste2;
	}

	/**
	* Set tdiste3
	*
	*Teléfono - Domicilio del Distribuidor
	*
	* @parámetro String $tdiste3
	* @return Tdiste3
	*/
	public function setTdiste3($tdiste3)
	{
	  $this->tdiste3 = (String) $tdiste3;
	    return $this;
	}

	/**
	* Get tdiste3
	*
	* @return null|String
	*/
	public function getTdiste3()
	{
		return $this->tdiste3;
	}

	/**
	* Set tdiste4
	*
	*Teléfono Celular del Distribuidor
	*
	* @parámetro String $tdiste4
	* @return Tdiste4
	*/
	public function setTdiste4($tdiste4)
	{
	  $this->tdiste4 = (String) $tdiste4;
	    return $this;
	}

	/**
	* Get tdiste4
	*
	* @return null|String
	*/
	public function getTdiste4()
	{
		return $this->tdiste4;
	}

	/**
	* Set tdisruc
	*
	*RUC del Distribuidor
	*
	* @parámetro String $tdisruc
	* @return Tdisruc
	*/
	public function setTdisruc($tdisruc)
	{
	  $this->tdisruc = (String) $tdisruc;
	    return $this;
	}

	/**
	* Get tdisruc
	*
	* @return null|String
	*/
	public function getTdisruc()
	{
		return $this->tdisruc;
	}

	/**
	* Set tdisrf1
	*
	*Registro Fiscal 1 del Distribuidor
	*
	* @parámetro String $tdisrf1
	* @return Tdisrf1
	*/
	public function setTdisrf1($tdisrf1)
	{
	  $this->tdisrf1 = (String) $tdisrf1;
	    return $this;
	}

	/**
	* Get tdisrf1
	*
	* @return null|String
	*/
	public function getTdisrf1()
	{
		return $this->tdisrf1;
	}

	/**
	* Set tdisrf2
	*
	*Registro Fiscal 2 del Distribuidor
	*
	* @parámetro String $tdisrf2
	* @return Tdisrf2
	*/
	public function setTdisrf2($tdisrf2)
	{
	  $this->tdisrf2 = (String) $tdisrf2;
	    return $this;
	}

	/**
	* Get tdisrf2
	*
	* @return null|String
	*/
	public function getTdisrf2()
	{
		return $this->tdisrf2;
	}

	/**
	* Set tdisrf3
	*
	*Registro Fiscal 3 del Distribuidor
	*
	* @parámetro String $tdisrf3
	* @return Tdisrf3
	*/
	public function setTdisrf3($tdisrf3)
	{
	  $this->tdisrf3 = (String) $tdisrf3;
	    return $this;
	}

	/**
	* Get tdisrf3
	*
	* @return null|String
	*/
	public function getTdisrf3()
	{
		return $this->tdisrf3;
	}

	/**
	* Set tdisob1
	*
	*Observaciones 1
	*
	* @parámetro String $tdisob1
	* @return Tdisob1
	*/
	public function setTdisob1($tdisob1)
	{
	  $this->tdisob1 = (String) $tdisob1;
	    return $this;
	}

	/**
	* Get tdisob1
	*
	* @return null|String
	*/
	public function getTdisob1()
	{
		return $this->tdisob1;
	}

	/**
	* Set tagsec2
	*
	*Código Vendedor del Distribuidor
	*
	* @parámetro Integer $tagsec2
	* @return Tagsec2
	*/
	public function setTagsec2($tagsec2)
	{
	  $this->tagsec2 = (Integer) $tagsec2;
	    return $this;
	}

	/**
	* Get tagsec2
	*
	* @return null|Integer
	*/
	public function getTagsec2()
	{
		return $this->tagsec2;
	}

	/**
	* Set tdiszon
	*
	*Zona de Distribuidor
	*
	* @parámetro Integer $tdiszon
	* @return Tdiszon
	*/
	public function setTdiszon($tdiszon)
	{
	  $this->tdiszon = (Integer) $tdiszon;
	    return $this;
	}

	/**
	* Get tdiszon
	*
	* @return null|Integer
	*/
	public function getTdiszon()
	{
		return $this->tdiszon;
	}

	/**
	* Set tdissit
	*
	*Situación del Distribuidor Facturación
	*
	* @parámetro Integer $tdissit
	* @return Tdissit
	*/
	public function setTdissit($tdissit)
	{
	  $this->tdissit = (Integer) $tdissit;
	    return $this;
	}

	/**
	* Get tdissit
	*
	* @return null|Integer
	*/
	public function getTdissit()
	{
		return $this->tdissit;
	}

	/**
	* Set tdislcr
	*
	*Limite de Crédito del Distribuidor (Inf. Crédito)
	*
	* @parámetro Decimal $tdislcr
	* @return Tdislcr
	*/
	public function setTdislcr($tdislcr)
	{
	  $this->tdislcr = (Double) $tdislcr;
	    return $this;
	}

	/**
	* Get tdislcr
	*
	* @return null|Decimal
	*/
	public function getTdislcr()
	{
		return $this->tdislcr;
	}

	/**
	* Set tdissal
	*
	*Saldo de Cuenta Corriente del Distribuidor (Inf. Crédito)
	*
	* @parámetro Decimal $tdissal
	* @return Tdissal
	*/
	public function setTdissal($tdissal)
	{
	  $this->tdissal = (Double) $tdissal;
	    return $this;
	}

	/**
	* Get tdissal
	*
	* @return null|Decimal
	*/
	public function getTdissal()
	{
		return $this->tdissal;
	}

	/**
	* Set tdidsct
	*
	*Porcentaje de Descuento del Distribuidor (Inf. Venta)
	*
	* @parámetro Decimal $tdidsct
	* @return Tdidsct
	*/
	public function setTdidsct($tdidsct)
	{
	  $this->tdidsct = (Double) $tdidsct;
	    return $this;
	}

	/**
	* Get tdidsct
	*
	* @return null|Decimal
	*/
	public function getTdidsct()
	{
		return $this->tdidsct;
	}

	/**
	* Set tdicnom
	*
	*Nombre del Contacto del Distribuidor
	*
	* @parámetro String $tdicnom
	* @return Tdicnom
	*/
	public function setTdicnom($tdicnom)
	{
	  $this->tdicnom = (String) $tdicnom;
	    return $this;
	}

	/**
	* Get tdicnom
	*
	* @return null|String
	*/
	public function getTdicnom()
	{
		return $this->tdicnom;
	}

	/**
	* Set tdicpue
	*
	*Puesto del Contacto del Distribuidor
	*
	* @parámetro String $tdicpue
	* @return Tdicpue
	*/
	public function setTdicpue($tdicpue)
	{
	  $this->tdicpue = (String) $tdicpue;
	    return $this;
	}

	/**
	* Get tdicpue
	*
	* @return null|String
	*/
	public function getTdicpue()
	{
		return $this->tdicpue;
	}

	/**
	* Set tdimail
	*
	*Dirección email del Contacto del Distribuidor
	*
	* @parámetro String $tdimail
	* @return Tdimail
	*/
	public function setTdimail($tdimail)
	{
	  $this->tdimail = (String) $tdimail;
	    return $this;
	}

	/**
	* Get tdimail
	*
	* @return null|String
	*/
	public function getTdimail()
	{
		return $this->tdimail;
	}

	/**
	* Set tditide
	*
	*Tipo Documento de Identidad del Distribuidor
	*
	* @parámetro String $tditide
	* @return Tditide
	*/
	public function setTditide($tditide)
	{
	  $this->tditide = (String) $tditide;
	    return $this;
	}

	/**
	* Get tditide
	*
	* @return null|String
	*/
	public function getTditide()
	{
		return $this->tditide;
	}

	/**
	* Set tdinide
	*
	*Número Documento de Identidad
	*
	* @parámetro String $tdinide
	* @return Tdinide
	*/
	public function setTdinide($tdinide)
	{
	  $this->tdinide = (String) $tdinide;
	    return $this;
	}

	/**
	* Get tdinide
	*
	* @return null|String
	*/
	public function getTdinide()
	{
		return $this->tdinide;
	}

	/**
	* Set tdirefe
	*
	*Referencia Personal Tabla de Parámetros
	*
	* @parámetro String $tdirefe
	* @return Tdirefe
	*/
	public function setTdirefe($tdirefe)
	{
	  $this->tdirefe = (String) $tdirefe;
	    return $this;
	}

	/**
	* Get tdirefe
	*
	* @return null|String
	*/
	public function getTdirefe()
	{
		return $this->tdirefe;
	}

	/**
	* Set tdirefc
	*
	*Referencia Comercial Tabla de Parámetros s/n
	*
	* @parámetro Integer $tdirefc
	* @return Tdirefc
	*/
	public function setTdirefc($tdirefc)
	{
	  $this->tdirefc = (Integer) $tdirefc;
	    return $this;
	}

	/**
	* Get tdirefc
	*
	* @return null|Integer
	*/
	public function getTdirefc()
	{
		return $this->tdirefc;
	}

	/**
	* Set tdiagrp
	*
	*Agrupación Territorial
	*
	* @parámetro Integer $tdiagrp
	* @return Tdiagrp
	*/
	public function setTdiagrp($tdiagrp)
	{
	  $this->tdiagrp = (Integer) $tdiagrp;
	    return $this;
	}

	/**
	* Get tdiagrp
	*
	* @return null|Integer
	*/
	public function getTdiagrp()
	{
		return $this->tdiagrp;
	}

	/**
	* Set tdinadi
	*
	*Naturaleza del Distribuidor
	*
	* @parámetro Integer $tdinadi
	* @return Tdinadi
	*/
	public function setTdinadi($tdinadi)
	{
	  $this->tdinadi = (Integer) $tdinadi;
	    return $this;
	}

	/**
	* Get tdinadi
	*
	* @return null|Integer
	*/
	public function getTdinadi()
	{
		return $this->tdinadi;
	}

	/**
	* Set tditipd
	*
	*Tipo de Distribuidor
	*
	* @parámetro Integer $tditipd
	* @return Tditipd
	*/
	public function setTditipd($tditipd)
	{
	  $this->tditipd = (Integer) $tditipd;
	    return $this;
	}

	/**
	* Get tditipd
	*
	* @return null|Integer
	*/
	public function getTditipd()
	{
		return $this->tditipd;
	}

	/**
	* Set tdisscr
	*
	*Situación Crediticia
	*
	* @parámetro Integer $tdisscr
	* @return Tdisscr
	*/
	public function setTdisscr($tdisscr)
	{
	  $this->tdisscr = (Integer) $tdisscr;
	    return $this;
	}

	/**
	* Get tdisscr
	*
	* @return null|Integer
	*/
	public function getTdisscr()
	{
		return $this->tdisscr;
	}

	/**
	* Set tdicoeq
	*
	*Código Equivalente
	*
	* @parámetro String $tdicoeq
	* @return Tdicoeq
	*/
	public function setTdicoeq($tdicoeq)
	{
	  $this->tdicoeq = (String) $tdicoeq;
	    return $this;
	}

	/**
	* Get tdicoeq
	*
	* @return null|String
	*/
	public function getTdicoeq()
	{
		return $this->tdicoeq;
	}

	/**
	* Set tdifeuv
	*
	*Fecha Última Venta
	*
	* @parámetro Date $tdifeuv
	* @return Tdifeuv
	*/
	public function setTdifeuv($tdifeuv)
	{
	  $this->tdifeuv = (String) $tdifeuv;
	    return $this;
	}

	/**
	* Get tdifeuv
	*
	* @return null|Date
	*/
	public function getTdifeuv()
	{
		return $this->tdifeuv;
	}

	/**
	* Set attribute7687
	*
	*
	*
	* @parámetro String $attribute7687
	* @return Attribute7687
	*/
	public function setAttribute7687($attribute7687)
	{
	  $this->attribute7687 = (String) $attribute7687;
	    return $this;
	}

	/**
	* Get attribute7687
	*
	* @return null|String
	*/
	public function getAttribute7687()
	{
		return $this->attribute7687;
	}

	/**
	* Set attribute7686
	*
	*
	*
	* @parámetro String $attribute7686
	* @return Attribute7686
	*/
	public function setAttribute7686($attribute7686)
	{
	  $this->attribute7686 = (String) $attribute7686;
	    return $this;
	}

	/**
	* Get attribute7686
	*
	* @return null|String
	*/
	public function getAttribute7686()
	{
		return $this->attribute7686;
	}

	/**
	* Set tdiusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tdiusuc
	* @return Tdiusuc
	*/
	public function setTdiusuc($tdiusuc)
	{
	  $this->tdiusuc = (String) $tdiusuc;
	    return $this;
	}

	/**
	* Get tdiusuc
	*
	* @return null|String
	*/
	public function getTdiusuc()
	{
		return $this->tdiusuc;
	}

	/**
	* Set tdifecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tdifecc
	* @return Tdifecc
	*/
	public function setTdifecc($tdifecc)
	{
	  $this->tdifecc = (String) $tdifecc;
	    return $this;
	}

	/**
	* Get tdifecc
	*
	* @return null|Date
	*/
	public function getTdifecc()
	{
		return $this->tdifecc;
	}

	/**
	* Set tdiusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tdiusum
	* @return Tdiusum
	*/
	public function setTdiusum($tdiusum)
	{
	  $this->tdiusum = (String) $tdiusum;
	    return $this;
	}

	/**
	* Get tdiusum
	*
	* @return null|String
	*/
	public function getTdiusum()
	{
		return $this->tdiusum;
	}

	/**
	* Set tdifecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tdifecm
	* @return Tdifecm
	*/
	public function setTdifecm($tdifecm)
	{
	  $this->tdifecm = (String) $tdifecm;
	    return $this;
	}

	/**
	* Get tdifecm
	*
	* @return null|Date
	*/
	public function getTdifecm()
	{
		return $this->tdifecm;
	}

	/**
	* Set tditask
	*
	*Tipo de tarea de ejecutada
	*
	* @parámetro String $tditask
	* @return Tditask
	*/
	public function setTditask($tditask)
	{
	  $this->tditask = (String) $tditask;
	    return $this;
	}

	/**
	* Get tditask
	*
	* @return null|String
	*/
	public function getTditask()
	{
		return $this->tditask;
	}

	/**
	* Set tdipara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tdipara
	* @return Tdipara
	*/
	public function setTdipara($tdipara)
	{
	  $this->tdipara = (Integer) $tdipara;
	    return $this;
	}

	/**
	* Get tdipara
	*
	* @return null|Integer
	*/
	public function getTdipara()
	{
		return $this->tdipara;
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

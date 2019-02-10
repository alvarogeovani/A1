<?php
 /**
 * Model of the Tvarti table
 *
 * It is used to convert the   Tvarti entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvarti
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvarti
{

		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opción: Maestro de Artículos
		*/
		protected $varsecu;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Línea de Artículos
		*/
		protected $vartlin;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de artículo
		*/
		protected $vartcod;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Abreviatura del Artículo
		*/
		protected $vartabr;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Controla Stock
		*/
		protected $varstoc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Codigo Equivalente
		*/
		protected $vartequ;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Presentación de Artículo
		*/
		protected $varpres;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Base de Fabricación de Artículo
		*/
		protected $varbafa;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Recubrimiento del Artículo
		*/
		protected $varrecu;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Acabado del Artículo
		*/
		protected $varacab;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Artículo
		*/
		protected $varttip;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Familia de Artículos
		*/
		protected $vartfam;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Sub-Familia de Artículos
		*/
		protected $vartsfa;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Clasificación de Rotación
		*/
		protected $vartabc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situacion del Artículo
		*/
		protected $varsitu;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Ultimo Ingreso (Ultima Compra)
		*/
		protected $varfing;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Reposicion ultimo ingreso (Ultima Compra)
		*/
		protected $varcore;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Condición de Venta (Inf. Venta)
		*/
		protected $varcvta;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Maneja Lotes (Inf. Venta)
		*/
		protected $vartvre;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Promedio de Ventas en meses (Inf. Venta)
		*/
		protected $varprom;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Stock Minimo (Inf. Venta)
		*/
		protected $varsmin;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Primera Venta (Inf. Venta)
		*/
		protected $varpvta;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Ultima Venta (Inf. Venta)
		*/
		protected $varuvta;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Relación Puntos – Moneda Nacional (Inf. Venta)
		*/
		protected $varrpdo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Ubicación 1
		*/
		protected $vartub1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Ubicación 2
		*/
		protected $vartub2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Ubicación 3
		*/
		protected $vartub3;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Partida Arancelaria
		*/
		protected $vartara;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Procedencia
		*/
		protected $vartpro;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Porcentaje de Concentración
		*/
		protected $vartcon;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Volumen en M3
		*/
		protected $vartvol;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Peso en KG
		*/
		protected $vartpes;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Aplica Impuesto 1
		*/
		protected $vartiva;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Impuesto Dos
		*/
		protected $varimp2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Base Imponible (Aplica fórmula del SRI)
		*/
		protected $varbaim;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Tarifa en porcentaje establecido al Artículo
		*/
		protected $vartari;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Impuesto 3
		*/
		protected $varimp3;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Perecible cantidad
		*/
		protected $vartpec;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Perecible Unidad de Medida
		*/
		protected $vartpeu;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Temperatura Máxima (Inf. Conservación)
		*/
		protected $vartte1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Temperatura Mínima (Inf. Conservación)
		*/
		protected $vartte2;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Humedad Máxima (Inf. Conservación)
		*/
		protected $varthu1;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Humedad Mínima (Inf. Conservación)
		*/
		protected $varthu2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observaciones
		*/
		protected $varobse;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Serie
		*/
		protected $varseri;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de Barras
		*/
		protected $varcoba;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Cuenta Inventario
		*/
		protected $varcco1;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Cuenta Costo Ventas
		*/
		protected $varcco2;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Cuenta Ventas
		*/
		protected $varcco3;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Cuenta Producción
		*/
		protected $varcco4;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Cuenta Contable 5
		*/
		protected $varcco5;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Cuenta Contable 6
		*/
		protected $varcco6;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Cuenta Contable 7
		*/
		protected $varcco7;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Cuenta Contable 8
		*/
		protected $varcco8;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Característica del Artículo 1
		*/
		protected $varcar1;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Característica del Artículo 2
		*/
		protected $varca02;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Característica del Artículo 3
		*/
		protected $varca03;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Característica del Artículo 4
		*/
		protected $varca04;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Característica del Artículo 5
		*/
		protected $varca05;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Característica del Artículo 6
		*/
		protected $varca06;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Característica del Artículo 7
		*/
		protected $varca07;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Característica del Artículo 8
		*/
		protected $varca08;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Característica del Artículo 9
		*/
		protected $varca09;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Característica del Artículo 10
		*/
		protected $varca10;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de creación
		*/
		protected $varusuc;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de creación
		*/
		protected $varfecc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de modificación
		*/
		protected $varusum;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de modificación
		*/
		protected $varfecm;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Tipo de tarea ejecutada
		*/
		protected $vartask;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Bandera de borrado
		*/
		protected $varpara;

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
	* Name of the table: tvarti
	* 
	 */
	const TABLE="tvarti";

	/**
	*Primary key
*/
		 const PKEY = "varsecu";



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
		throw new \Exception('Class Entity: Tvarti Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvarti. Invalid specified property: get'.$name);
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
	* Set varsecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Artículos
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
	* Set vartlin
	*
	*Línea de Artículos
	*
	* @parámetro Integer $vartlin
	* @return Vartlin
	*/
	public function setVartlin($vartlin)
	{
	  $this->vartlin = (Integer) $vartlin;
	    return $this;
	}

	/**
	* Get vartlin
	*
	* @return null|Integer
	*/
	public function getVartlin()
	{
		return $this->vartlin;
	}

	/**
	* Set vartcod
	*
	*Código de artículo
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
	* Set vartabr
	*
	*Abreviatura del Artículo
	*
	* @parámetro String $vartabr
	* @return Vartabr
	*/
	public function setVartabr($vartabr)
	{
	  $this->vartabr = (String) $vartabr;
	    return $this;
	}

	/**
	* Get vartabr
	*
	* @return null|String
	*/
	public function getVartabr()
	{
		return $this->vartabr;
	}

	/**
	* Set varstoc
	*
	*Controla Stock
	*
	* @parámetro Integer $varstoc
	* @return Varstoc
	*/
	public function setVarstoc($varstoc)
	{
	  $this->varstoc = (Integer) $varstoc;
	    return $this;
	}

	/**
	* Get varstoc
	*
	* @return null|Integer
	*/
	public function getVarstoc()
	{
		return $this->varstoc;
	}

	/**
	* Set vartequ
	*
	*Codigo Equivalente
	*
	* @parámetro String $vartequ
	* @return Vartequ
	*/
	public function setVartequ($vartequ)
	{
	  $this->vartequ = (String) $vartequ;
	    return $this;
	}

	/**
	* Get vartequ
	*
	* @return null|String
	*/
	public function getVartequ()
	{
		return $this->vartequ;
	}

	/**
	* Set varpres
	*
	*Presentación de Artículo
	*
	* @parámetro Integer $varpres
	* @return Varpres
	*/
	public function setVarpres($varpres)
	{
	  $this->varpres = (Integer) $varpres;
	    return $this;
	}

	/**
	* Get varpres
	*
	* @return null|Integer
	*/
	public function getVarpres()
	{
		return $this->varpres;
	}

	/**
	* Set varbafa
	*
	*Base de Fabricación de Artículo
	*
	* @parámetro Integer $varbafa
	* @return Varbafa
	*/
	public function setVarbafa($varbafa)
	{
	  $this->varbafa = (Integer) $varbafa;
	    return $this;
	}

	/**
	* Get varbafa
	*
	* @return null|Integer
	*/
	public function getVarbafa()
	{
		return $this->varbafa;
	}

	/**
	* Set varrecu
	*
	*Recubrimiento del Artículo
	*
	* @parámetro Integer $varrecu
	* @return Varrecu
	*/
	public function setVarrecu($varrecu)
	{
	  $this->varrecu = (Integer) $varrecu;
	    return $this;
	}

	/**
	* Get varrecu
	*
	* @return null|Integer
	*/
	public function getVarrecu()
	{
		return $this->varrecu;
	}

	/**
	* Set varacab
	*
	*Acabado del Artículo
	*
	* @parámetro Integer $varacab
	* @return Varacab
	*/
	public function setVaracab($varacab)
	{
	  $this->varacab = (Integer) $varacab;
	    return $this;
	}

	/**
	* Get varacab
	*
	* @return null|Integer
	*/
	public function getVaracab()
	{
		return $this->varacab;
	}

	/**
	* Set varttip
	*
	*Tipo de Artículo
	*
	* @parámetro Integer $varttip
	* @return Varttip
	*/
	public function setVarttip($varttip)
	{
	  $this->varttip = (Integer) $varttip;
	    return $this;
	}

	/**
	* Get varttip
	*
	* @return null|Integer
	*/
	public function getVarttip()
	{
		return $this->varttip;
	}

	/**
	* Set vartfam
	*
	*Código Familia de Artículos
	*
	* @parámetro Integer $vartfam
	* @return Vartfam
	*/
	public function setVartfam($vartfam)
	{
	  $this->vartfam = (Integer) $vartfam;
	    return $this;
	}

	/**
	* Get vartfam
	*
	* @return null|Integer
	*/
	public function getVartfam()
	{
		return $this->vartfam;
	}

	/**
	* Set vartsfa
	*
	*Código Sub-Familia de Artículos
	*
	* @parámetro Integer $vartsfa
	* @return Vartsfa
	*/
	public function setVartsfa($vartsfa)
	{
	  $this->vartsfa = (Integer) $vartsfa;
	    return $this;
	}

	/**
	* Get vartsfa
	*
	* @return null|Integer
	*/
	public function getVartsfa()
	{
		return $this->vartsfa;
	}

	/**
	* Set vartabc
	*
	*Clasificación de Rotación
	*
	* @parámetro Integer $vartabc
	* @return Vartabc
	*/
	public function setVartabc($vartabc)
	{
	  $this->vartabc = (Integer) $vartabc;
	    return $this;
	}

	/**
	* Get vartabc
	*
	* @return null|Integer
	*/
	public function getVartabc()
	{
		return $this->vartabc;
	}

	/**
	* Set varsitu
	*
	*Situacion del Artículo
	*
	* @parámetro Integer $varsitu
	* @return Varsitu
	*/
	public function setVarsitu($varsitu)
	{
	  $this->varsitu = (Integer) $varsitu;
	    return $this;
	}

	/**
	* Get varsitu
	*
	* @return null|Integer
	*/
	public function getVarsitu()
	{
		return $this->varsitu;
	}

	/**
	* Set varfing
	*
	*Fecha Ultimo Ingreso (Ultima Compra)
	*
	* @parámetro Date $varfing
	* @return Varfing
	*/
	public function setVarfing($varfing)
	{
	  $this->varfing = (String) $varfing;
	    return $this;
	}

	/**
	* Get varfing
	*
	* @return null|Date
	*/
	public function getVarfing()
	{
		return $this->varfing;
	}

	/**
	* Set varcore
	*
	*Costo Reposicion ultimo ingreso (Ultima Compra)
	*
	* @parámetro Decimal $varcore
	* @return Varcore
	*/
	public function setVarcore($varcore)
	{
	  $this->varcore = (Double) $varcore;
	    return $this;
	}

	/**
	* Get varcore
	*
	* @return null|Decimal
	*/
	public function getVarcore()
	{
		return $this->varcore;
	}

	/**
	* Set varcvta
	*
	*Condición de Venta (Inf. Venta)
	*
	* @parámetro Integer $varcvta
	* @return Varcvta
	*/
	public function setVarcvta($varcvta)
	{
	  $this->varcvta = (Integer) $varcvta;
	    return $this;
	}

	/**
	* Get varcvta
	*
	* @return null|Integer
	*/
	public function getVarcvta()
	{
		return $this->varcvta;
	}

	/**
	* Set vartvre
	*
	*Maneja Lotes (Inf. Venta)
	*
	* @parámetro Integer $vartvre
	* @return Vartvre
	*/
	public function setVartvre($vartvre)
	{
	  $this->vartvre = (Integer) $vartvre;
	    return $this;
	}

	/**
	* Get vartvre
	*
	* @return null|Integer
	*/
	public function getVartvre()
	{
		return $this->vartvre;
	}

	/**
	* Set varprom
	*
	*Promedio de Ventas en meses (Inf. Venta)
	*
	* @parámetro Decimal $varprom
	* @return Varprom
	*/
	public function setVarprom($varprom)
	{
	  $this->varprom = (Double) $varprom;
	    return $this;
	}

	/**
	* Get varprom
	*
	* @return null|Decimal
	*/
	public function getVarprom()
	{
		return $this->varprom;
	}

	/**
	* Set varsmin
	*
	*Stock Minimo (Inf. Venta)
	*
	* @parámetro Decimal $varsmin
	* @return Varsmin
	*/
	public function setVarsmin($varsmin)
	{
	  $this->varsmin = (Double) $varsmin;
	    return $this;
	}

	/**
	* Get varsmin
	*
	* @return null|Decimal
	*/
	public function getVarsmin()
	{
		return $this->varsmin;
	}

	/**
	* Set varpvta
	*
	*Fecha Primera Venta (Inf. Venta)
	*
	* @parámetro Date $varpvta
	* @return Varpvta
	*/
	public function setVarpvta($varpvta)
	{
	  $this->varpvta = (String) $varpvta;
	    return $this;
	}

	/**
	* Get varpvta
	*
	* @return null|Date
	*/
	public function getVarpvta()
	{
		return $this->varpvta;
	}

	/**
	* Set varuvta
	*
	*Fecha Ultima Venta (Inf. Venta)
	*
	* @parámetro Date $varuvta
	* @return Varuvta
	*/
	public function setVaruvta($varuvta)
	{
	  $this->varuvta = (String) $varuvta;
	    return $this;
	}

	/**
	* Get varuvta
	*
	* @return null|Date
	*/
	public function getVaruvta()
	{
		return $this->varuvta;
	}

	/**
	* Set varrpdo
	*
	*Relación Puntos – Moneda Nacional (Inf. Venta)
	*
	* @parámetro Decimal $varrpdo
	* @return Varrpdo
	*/
	public function setVarrpdo($varrpdo)
	{
	  $this->varrpdo = (Double) $varrpdo;
	    return $this;
	}

	/**
	* Get varrpdo
	*
	* @return null|Decimal
	*/
	public function getVarrpdo()
	{
		return $this->varrpdo;
	}

	/**
	* Set vartub1
	*
	*Ubicación 1
	*
	* @parámetro String $vartub1
	* @return Vartub1
	*/
	public function setVartub1($vartub1)
	{
	  $this->vartub1 = (String) $vartub1;
	    return $this;
	}

	/**
	* Get vartub1
	*
	* @return null|String
	*/
	public function getVartub1()
	{
		return $this->vartub1;
	}

	/**
	* Set vartub2
	*
	*Ubicación 2
	*
	* @parámetro String $vartub2
	* @return Vartub2
	*/
	public function setVartub2($vartub2)
	{
	  $this->vartub2 = (String) $vartub2;
	    return $this;
	}

	/**
	* Get vartub2
	*
	* @return null|String
	*/
	public function getVartub2()
	{
		return $this->vartub2;
	}

	/**
	* Set vartub3
	*
	*Ubicación 3
	*
	* @parámetro String $vartub3
	* @return Vartub3
	*/
	public function setVartub3($vartub3)
	{
	  $this->vartub3 = (String) $vartub3;
	    return $this;
	}

	/**
	* Get vartub3
	*
	* @return null|String
	*/
	public function getVartub3()
	{
		return $this->vartub3;
	}

	/**
	* Set vartara
	*
	*Partida Arancelaria
	*
	* @parámetro String $vartara
	* @return Vartara
	*/
	public function setVartara($vartara)
	{
	  $this->vartara = (String) $vartara;
	    return $this;
	}

	/**
	* Get vartara
	*
	* @return null|String
	*/
	public function getVartara()
	{
		return $this->vartara;
	}

	/**
	* Set vartpro
	*
	*Procedencia
	*
	* @parámetro Integer $vartpro
	* @return Vartpro
	*/
	public function setVartpro($vartpro)
	{
	  $this->vartpro = (Integer) $vartpro;
	    return $this;
	}

	/**
	* Get vartpro
	*
	* @return null|Integer
	*/
	public function getVartpro()
	{
		return $this->vartpro;
	}

	/**
	* Set vartcon
	*
	*Porcentaje de Concentración
	*
	* @parámetro String $vartcon
	* @return Vartcon
	*/
	public function setVartcon($vartcon)
	{
	  $this->vartcon = (String) $vartcon;
	    return $this;
	}

	/**
	* Get vartcon
	*
	* @return null|String
	*/
	public function getVartcon()
	{
		return $this->vartcon;
	}

	/**
	* Set vartvol
	*
	*Volumen en M3
	*
	* @parámetro Decimal $vartvol
	* @return Vartvol
	*/
	public function setVartvol($vartvol)
	{
	  $this->vartvol = (Double) $vartvol;
	    return $this;
	}

	/**
	* Get vartvol
	*
	* @return null|Decimal
	*/
	public function getVartvol()
	{
		return $this->vartvol;
	}

	/**
	* Set vartpes
	*
	*Peso en KG
	*
	* @parámetro Decimal $vartpes
	* @return Vartpes
	*/
	public function setVartpes($vartpes)
	{
	  $this->vartpes = (Double) $vartpes;
	    return $this;
	}

	/**
	* Get vartpes
	*
	* @return null|Decimal
	*/
	public function getVartpes()
	{
		return $this->vartpes;
	}

	/**
	* Set vartiva
	*
	*Aplica Impuesto 1
	*
	* @parámetro Integer $vartiva
	* @return Vartiva
	*/
	public function setVartiva($vartiva)
	{
	  $this->vartiva = (Integer) $vartiva;
	    return $this;
	}

	/**
	* Get vartiva
	*
	* @return null|Integer
	*/
	public function getVartiva()
	{
		return $this->vartiva;
	}

	/**
	* Set varimp2
	*
	*Impuesto Dos
	*
	* @parámetro Integer $varimp2
	* @return Varimp2
	*/
	public function setVarimp2($varimp2)
	{
	  $this->varimp2 = (Integer) $varimp2;
	    return $this;
	}

	/**
	* Get varimp2
	*
	* @return null|Integer
	*/
	public function getVarimp2()
	{
		return $this->varimp2;
	}

	/**
	* Set varbaim
	*
	*Base Imponible (Aplica fórmula del SRI)
	*
	* @parámetro Decimal $varbaim
	* @return Varbaim
	*/
	public function setVarbaim($varbaim)
	{
	  $this->varbaim = (Double) $varbaim;
	    return $this;
	}

	/**
	* Get varbaim
	*
	* @return null|Decimal
	*/
	public function getVarbaim()
	{
		return $this->varbaim;
	}

	/**
	* Set vartari
	*
	*Tarifa en porcentaje establecido al Artículo
	*
	* @parámetro Decimal $vartari
	* @return Vartari
	*/
	public function setVartari($vartari)
	{
	  $this->vartari = (Double) $vartari;
	    return $this;
	}

	/**
	* Get vartari
	*
	* @return null|Decimal
	*/
	public function getVartari()
	{
		return $this->vartari;
	}

	/**
	* Set varimp3
	*
	*Impuesto 3
	*
	* @parámetro Integer $varimp3
	* @return Varimp3
	*/
	public function setVarimp3($varimp3)
	{
	  $this->varimp3 = (Integer) $varimp3;
	    return $this;
	}

	/**
	* Get varimp3
	*
	* @return null|Integer
	*/
	public function getVarimp3()
	{
		return $this->varimp3;
	}

	/**
	* Set vartpec
	*
	*Perecible cantidad
	*
	* @parámetro Decimal $vartpec
	* @return Vartpec
	*/
	public function setVartpec($vartpec)
	{
	  $this->vartpec = (Double) $vartpec;
	    return $this;
	}

	/**
	* Get vartpec
	*
	* @return null|Decimal
	*/
	public function getVartpec()
	{
		return $this->vartpec;
	}

	/**
	* Set vartpeu
	*
	*Perecible Unidad de Medida
	*
	* @parámetro String $vartpeu
	* @return Vartpeu
	*/
	public function setVartpeu($vartpeu)
	{
	  $this->vartpeu = (String) $vartpeu;
	    return $this;
	}

	/**
	* Get vartpeu
	*
	* @return null|String
	*/
	public function getVartpeu()
	{
		return $this->vartpeu;
	}

	/**
	* Set vartte1
	*
	*Temperatura Máxima (Inf. Conservación)
	*
	* @parámetro Decimal $vartte1
	* @return Vartte1
	*/
	public function setVartte1($vartte1)
	{
	  $this->vartte1 = (Double) $vartte1;
	    return $this;
	}

	/**
	* Get vartte1
	*
	* @return null|Decimal
	*/
	public function getVartte1()
	{
		return $this->vartte1;
	}

	/**
	* Set vartte2
	*
	*Temperatura Mínima (Inf. Conservación)
	*
	* @parámetro Decimal $vartte2
	* @return Vartte2
	*/
	public function setVartte2($vartte2)
	{
	  $this->vartte2 = (Double) $vartte2;
	    return $this;
	}

	/**
	* Get vartte2
	*
	* @return null|Decimal
	*/
	public function getVartte2()
	{
		return $this->vartte2;
	}

	/**
	* Set varthu1
	*
	*Humedad Máxima (Inf. Conservación)
	*
	* @parámetro Decimal $varthu1
	* @return Varthu1
	*/
	public function setVarthu1($varthu1)
	{
	  $this->varthu1 = (Double) $varthu1;
	    return $this;
	}

	/**
	* Get varthu1
	*
	* @return null|Decimal
	*/
	public function getVarthu1()
	{
		return $this->varthu1;
	}

	/**
	* Set varthu2
	*
	*Humedad Mínima (Inf. Conservación)
	*
	* @parámetro Decimal $varthu2
	* @return Varthu2
	*/
	public function setVarthu2($varthu2)
	{
	  $this->varthu2 = (Double) $varthu2;
	    return $this;
	}

	/**
	* Get varthu2
	*
	* @return null|Decimal
	*/
	public function getVarthu2()
	{
		return $this->varthu2;
	}

	/**
	* Set varobse
	*
	*Observaciones
	*
	* @parámetro String $varobse
	* @return Varobse
	*/
	public function setVarobse($varobse)
	{
	  $this->varobse = (String) $varobse;
	    return $this;
	}

	/**
	* Get varobse
	*
	* @return null|String
	*/
	public function getVarobse()
	{
		return $this->varobse;
	}

	/**
	* Set varseri
	*
	*Número de Serie
	*
	* @parámetro String $varseri
	* @return Varseri
	*/
	public function setVarseri($varseri)
	{
	  $this->varseri = (String) $varseri;
	    return $this;
	}

	/**
	* Get varseri
	*
	* @return null|String
	*/
	public function getVarseri()
	{
		return $this->varseri;
	}

	/**
	* Set varcoba
	*
	*Código de Barras
	*
	* @parámetro String $varcoba
	* @return Varcoba
	*/
	public function setVarcoba($varcoba)
	{
	  $this->varcoba = (String) $varcoba;
	    return $this;
	}

	/**
	* Get varcoba
	*
	* @return null|String
	*/
	public function getVarcoba()
	{
		return $this->varcoba;
	}

	/**
	* Set varcco1
	*
	*Cuenta Inventario
	*
	* @parámetro Integer $varcco1
	* @return Varcco1
	*/
	public function setVarcco1($varcco1)
	{
	  $this->varcco1 = (Integer) $varcco1;
	    return $this;
	}

	/**
	* Get varcco1
	*
	* @return null|Integer
	*/
	public function getVarcco1()
	{
		return $this->varcco1;
	}

	/**
	* Set varcco2
	*
	*Cuenta Costo Ventas
	*
	* @parámetro Integer $varcco2
	* @return Varcco2
	*/
	public function setVarcco2($varcco2)
	{
	  $this->varcco2 = (Integer) $varcco2;
	    return $this;
	}

	/**
	* Get varcco2
	*
	* @return null|Integer
	*/
	public function getVarcco2()
	{
		return $this->varcco2;
	}

	/**
	* Set varcco3
	*
	*Cuenta Ventas
	*
	* @parámetro Integer $varcco3
	* @return Varcco3
	*/
	public function setVarcco3($varcco3)
	{
	  $this->varcco3 = (Integer) $varcco3;
	    return $this;
	}

	/**
	* Get varcco3
	*
	* @return null|Integer
	*/
	public function getVarcco3()
	{
		return $this->varcco3;
	}

	/**
	* Set varcco4
	*
	*Cuenta Producción
	*
	* @parámetro Integer $varcco4
	* @return Varcco4
	*/
	public function setVarcco4($varcco4)
	{
	  $this->varcco4 = (Integer) $varcco4;
	    return $this;
	}

	/**
	* Get varcco4
	*
	* @return null|Integer
	*/
	public function getVarcco4()
	{
		return $this->varcco4;
	}

	/**
	* Set varcco5
	*
	*Cuenta Contable 5
	*
	* @parámetro Integer $varcco5
	* @return Varcco5
	*/
	public function setVarcco5($varcco5)
	{
	  $this->varcco5 = (Integer) $varcco5;
	    return $this;
	}

	/**
	* Get varcco5
	*
	* @return null|Integer
	*/
	public function getVarcco5()
	{
		return $this->varcco5;
	}

	/**
	* Set varcco6
	*
	*Cuenta Contable 6
	*
	* @parámetro Integer $varcco6
	* @return Varcco6
	*/
	public function setVarcco6($varcco6)
	{
	  $this->varcco6 = (Integer) $varcco6;
	    return $this;
	}

	/**
	* Get varcco6
	*
	* @return null|Integer
	*/
	public function getVarcco6()
	{
		return $this->varcco6;
	}

	/**
	* Set varcco7
	*
	*Cuenta Contable 7
	*
	* @parámetro Integer $varcco7
	* @return Varcco7
	*/
	public function setVarcco7($varcco7)
	{
	  $this->varcco7 = (Integer) $varcco7;
	    return $this;
	}

	/**
	* Get varcco7
	*
	* @return null|Integer
	*/
	public function getVarcco7()
	{
		return $this->varcco7;
	}

	/**
	* Set varcco8
	*
	*Cuenta Contable 8
	*
	* @parámetro Integer $varcco8
	* @return Varcco8
	*/
	public function setVarcco8($varcco8)
	{
	  $this->varcco8 = (Integer) $varcco8;
	    return $this;
	}

	/**
	* Get varcco8
	*
	* @return null|Integer
	*/
	public function getVarcco8()
	{
		return $this->varcco8;
	}

	/**
	* Set varcar1
	*
	*Característica del Artículo 1
	*
	* @parámetro Integer $varcar1
	* @return Varcar1
	*/
	public function setVarcar1($varcar1)
	{
	  $this->varcar1 = (Integer) $varcar1;
	    return $this;
	}

	/**
	* Get varcar1
	*
	* @return null|Integer
	*/
	public function getVarcar1()
	{
		return $this->varcar1;
	}

	/**
	* Set varca02
	*
	*Característica del Artículo 2
	*
	* @parámetro Integer $varca02
	* @return Varca02
	*/
	public function setVarca02($varca02)
	{
	  $this->varca02 = (Integer) $varca02;
	    return $this;
	}

	/**
	* Get varca02
	*
	* @return null|Integer
	*/
	public function getVarca02()
	{
		return $this->varca02;
	}

	/**
	* Set varca03
	*
	*Característica del Artículo 3
	*
	* @parámetro Integer $varca03
	* @return Varca03
	*/
	public function setVarca03($varca03)
	{
	  $this->varca03 = (Integer) $varca03;
	    return $this;
	}

	/**
	* Get varca03
	*
	* @return null|Integer
	*/
	public function getVarca03()
	{
		return $this->varca03;
	}

	/**
	* Set varca04
	*
	*Característica del Artículo 4
	*
	* @parámetro Integer $varca04
	* @return Varca04
	*/
	public function setVarca04($varca04)
	{
	  $this->varca04 = (Integer) $varca04;
	    return $this;
	}

	/**
	* Get varca04
	*
	* @return null|Integer
	*/
	public function getVarca04()
	{
		return $this->varca04;
	}

	/**
	* Set varca05
	*
	*Característica del Artículo 5
	*
	* @parámetro Integer $varca05
	* @return Varca05
	*/
	public function setVarca05($varca05)
	{
	  $this->varca05 = (Integer) $varca05;
	    return $this;
	}

	/**
	* Get varca05
	*
	* @return null|Integer
	*/
	public function getVarca05()
	{
		return $this->varca05;
	}

	/**
	* Set varca06
	*
	*Característica del Artículo 6
	*
	* @parámetro Integer $varca06
	* @return Varca06
	*/
	public function setVarca06($varca06)
	{
	  $this->varca06 = (Integer) $varca06;
	    return $this;
	}

	/**
	* Get varca06
	*
	* @return null|Integer
	*/
	public function getVarca06()
	{
		return $this->varca06;
	}

	/**
	* Set varca07
	*
	*Característica del Artículo 7
	*
	* @parámetro Integer $varca07
	* @return Varca07
	*/
	public function setVarca07($varca07)
	{
	  $this->varca07 = (Integer) $varca07;
	    return $this;
	}

	/**
	* Get varca07
	*
	* @return null|Integer
	*/
	public function getVarca07()
	{
		return $this->varca07;
	}

	/**
	* Set varca08
	*
	*Característica del Artículo 8
	*
	* @parámetro Integer $varca08
	* @return Varca08
	*/
	public function setVarca08($varca08)
	{
	  $this->varca08 = (Integer) $varca08;
	    return $this;
	}

	/**
	* Get varca08
	*
	* @return null|Integer
	*/
	public function getVarca08()
	{
		return $this->varca08;
	}

	/**
	* Set varca09
	*
	*Característica del Artículo 9
	*
	* @parámetro Integer $varca09
	* @return Varca09
	*/
	public function setVarca09($varca09)
	{
	  $this->varca09 = (Integer) $varca09;
	    return $this;
	}

	/**
	* Get varca09
	*
	* @return null|Integer
	*/
	public function getVarca09()
	{
		return $this->varca09;
	}

	/**
	* Set varca10
	*
	*Característica del Artículo 10
	*
	* @parámetro Integer $varca10
	* @return Varca10
	*/
	public function setVarca10($varca10)
	{
	  $this->varca10 = (Integer) $varca10;
	    return $this;
	}

	/**
	* Get varca10
	*
	* @return null|Integer
	*/
	public function getVarca10()
	{
		return $this->varca10;
	}

	/**
	* Set varusuc
	*
	*Usuario de creación
	*
	* @parámetro String $varusuc
	* @return Varusuc
	*/
	public function setVarusuc($varusuc)
	{
	  $this->varusuc = (String) $varusuc;
	    return $this;
	}

	/**
	* Get varusuc
	*
	* @return null|String
	*/
	public function getVarusuc()
	{
		return $this->varusuc;
	}

	/**
	* Set varfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $varfecc
	* @return Varfecc
	*/
	public function setVarfecc($varfecc)
	{
	  $this->varfecc = (String) $varfecc;
	    return $this;
	}

	/**
	* Get varfecc
	*
	* @return null|Date
	*/
	public function getVarfecc()
	{
		return $this->varfecc;
	}

	/**
	* Set varusum
	*
	*Usuario de modificación
	*
	* @parámetro String $varusum
	* @return Varusum
	*/
	public function setVarusum($varusum)
	{
	  $this->varusum = (String) $varusum;
	    return $this;
	}

	/**
	* Get varusum
	*
	* @return null|String
	*/
	public function getVarusum()
	{
		return $this->varusum;
	}

	/**
	* Set varfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $varfecm
	* @return Varfecm
	*/
	public function setVarfecm($varfecm)
	{
	  $this->varfecm = (String) $varfecm;
	    return $this;
	}

	/**
	* Get varfecm
	*
	* @return null|Date
	*/
	public function getVarfecm()
	{
		return $this->varfecm;
	}

	/**
	* Set vartask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vartask
	* @return Vartask
	*/
	public function setVartask($vartask)
	{
	  $this->vartask = (String) $vartask;
	    return $this;
	}

	/**
	* Get vartask
	*
	* @return null|String
	*/
	public function getVartask()
	{
		return $this->vartask;
	}

	/**
	* Set varpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $varpara
	* @return Varpara
	*/
	public function setVarpara($varpara)
	{
	  $this->varpara = (Integer) $varpara;
	    return $this;
	}

	/**
	* Get varpara
	*
	* @return null|Integer
	*/
	public function getVarpara()
	{
		return $this->varpara;
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

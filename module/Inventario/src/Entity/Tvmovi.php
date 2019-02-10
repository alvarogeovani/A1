<?php
 /**
 * Model of the Tvmovi table
 *
 * It is used to convert the   Tvmovi entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tvmovi
 * @package Inventario
 * @subpackage Entity
 */
  namespace  Inventario\Entity;
  
 
class Tvmovi
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TTMOVI
		*/
		protected $vinsecu;
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
		* Código Unico del Grupo: Formato Toma de Inventario
		*/
		protected $vincogr;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Movimiento
		*/
		protected $vinfech;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Número de Lote
		*/
		protected $vslllot;
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
		* @var String
		* Optional field
		* Field visible in the form
		* Abreviatura del Artículo
		*/
		protected $vartabr;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad en Bodega
		*/
		protected $vincanb;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad en Inventario
		*/
		protected $vincani;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Bodega - Moneda Nacional
		*/
		protected $vincosn;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Costo Bodega - Moneda Extranjera
		*/
		protected $vincose;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Diferencia en Cantidad
		*/
		protected $vindcan;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Diferencia Valor - Moneda Nacional
		*/
		protected $vindimp;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Diferencia Valor - Moneda Extranjera
		*/
		protected $vindime;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación del Movimiento de Bodega por Inventario
		*/
		protected $vinsitu;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $vinusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $vinfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de  modificación
		*/
		protected $vinusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $vinfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $vintask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $vinpara;

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
	* Name of the table: tvmovi
	* 
	 */
	const TABLE="tvmovi";

	/**
	*Primary key
*/
		 const PKEY = "vinsecu";



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
		throw new \Exception('Class Entity: Tvmovi Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tvmovi. Invalid specified property: get'.$name);
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
	* Set vinsecu
	*
	*Clave Primaria de la Base de Datos: TTMOVI
	*
	* @parámetro Integer $vinsecu
	* @return Vinsecu
	*/
	public function setVinsecu($vinsecu)
	{
	  $this->vinsecu = (Integer) $vinsecu;
	    return $this;
	}

	/**
	* Get vinsecu
	*
	* @return null|Integer
	*/
	public function getVinsecu()
	{
		return $this->vinsecu;
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
	* Set vincogr
	*
	*Código Unico del Grupo: Formato Toma de Inventario
	*
	* @parámetro String $vincogr
	* @return Vincogr
	*/
	public function setVincogr($vincogr)
	{
	  $this->vincogr = (String) $vincogr;
	    return $this;
	}

	/**
	* Get vincogr
	*
	* @return null|String
	*/
	public function getVincogr()
	{
		return $this->vincogr;
	}

	/**
	* Set vinfech
	*
	*Fecha de Movimiento
	*
	* @parámetro Date $vinfech
	* @return Vinfech
	*/
	public function setVinfech($vinfech)
	{
	  $this->vinfech = (String) $vinfech;
	    return $this;
	}

	/**
	* Get vinfech
	*
	* @return null|Date
	*/
	public function getVinfech()
	{
		return $this->vinfech;
	}

	/**
	* Set vslllot
	*
	*Número de Lote
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
	* Set vincanb
	*
	*Cantidad en Bodega
	*
	* @parámetro Decimal $vincanb
	* @return Vincanb
	*/
	public function setVincanb($vincanb)
	{
	  $this->vincanb = (Double) $vincanb;
	    return $this;
	}

	/**
	* Get vincanb
	*
	* @return null|Decimal
	*/
	public function getVincanb()
	{
		return $this->vincanb;
	}

	/**
	* Set vincani
	*
	*Cantidad en Inventario
	*
	* @parámetro Decimal $vincani
	* @return Vincani
	*/
	public function setVincani($vincani)
	{
	  $this->vincani = (Double) $vincani;
	    return $this;
	}

	/**
	* Get vincani
	*
	* @return null|Decimal
	*/
	public function getVincani()
	{
		return $this->vincani;
	}

	/**
	* Set vincosn
	*
	*Costo Bodega - Moneda Nacional
	*
	* @parámetro Decimal $vincosn
	* @return Vincosn
	*/
	public function setVincosn($vincosn)
	{
	  $this->vincosn = (Double) $vincosn;
	    return $this;
	}

	/**
	* Get vincosn
	*
	* @return null|Decimal
	*/
	public function getVincosn()
	{
		return $this->vincosn;
	}

	/**
	* Set vincose
	*
	*Costo Bodega - Moneda Extranjera
	*
	* @parámetro Decimal $vincose
	* @return Vincose
	*/
	public function setVincose($vincose)
	{
	  $this->vincose = (Double) $vincose;
	    return $this;
	}

	/**
	* Get vincose
	*
	* @return null|Decimal
	*/
	public function getVincose()
	{
		return $this->vincose;
	}

	/**
	* Set vindcan
	*
	*Diferencia en Cantidad
	*
	* @parámetro Decimal $vindcan
	* @return Vindcan
	*/
	public function setVindcan($vindcan)
	{
	  $this->vindcan = (Double) $vindcan;
	    return $this;
	}

	/**
	* Get vindcan
	*
	* @return null|Decimal
	*/
	public function getVindcan()
	{
		return $this->vindcan;
	}

	/**
	* Set vindimp
	*
	*Diferencia Valor - Moneda Nacional
	*
	* @parámetro Decimal $vindimp
	* @return Vindimp
	*/
	public function setVindimp($vindimp)
	{
	  $this->vindimp = (Double) $vindimp;
	    return $this;
	}

	/**
	* Get vindimp
	*
	* @return null|Decimal
	*/
	public function getVindimp()
	{
		return $this->vindimp;
	}

	/**
	* Set vindime
	*
	*Diferencia Valor - Moneda Extranjera
	*
	* @parámetro Decimal $vindime
	* @return Vindime
	*/
	public function setVindime($vindime)
	{
	  $this->vindime = (Double) $vindime;
	    return $this;
	}

	/**
	* Get vindime
	*
	* @return null|Decimal
	*/
	public function getVindime()
	{
		return $this->vindime;
	}

	/**
	* Set vinsitu
	*
	*Situación del Movimiento de Bodega por Inventario
	*
	* @parámetro Integer $vinsitu
	* @return Vinsitu
	*/
	public function setVinsitu($vinsitu)
	{
	  $this->vinsitu = (Integer) $vinsitu;
	    return $this;
	}

	/**
	* Get vinsitu
	*
	* @return null|Integer
	*/
	public function getVinsitu()
	{
		return $this->vinsitu;
	}

	/**
	* Set vinusuc
	*
	*Usuario de creación
	*
	* @parámetro String $vinusuc
	* @return Vinusuc
	*/
	public function setVinusuc($vinusuc)
	{
	  $this->vinusuc = (String) $vinusuc;
	    return $this;
	}

	/**
	* Get vinusuc
	*
	* @return null|String
	*/
	public function getVinusuc()
	{
		return $this->vinusuc;
	}

	/**
	* Set vinfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $vinfecc
	* @return Vinfecc
	*/
	public function setVinfecc($vinfecc)
	{
	  $this->vinfecc = (String) $vinfecc;
	    return $this;
	}

	/**
	* Get vinfecc
	*
	* @return null|Date
	*/
	public function getVinfecc()
	{
		return $this->vinfecc;
	}

	/**
	* Set vinusum
	*
	*Usuario de  modificación
	*
	* @parámetro String $vinusum
	* @return Vinusum
	*/
	public function setVinusum($vinusum)
	{
	  $this->vinusum = (String) $vinusum;
	    return $this;
	}

	/**
	* Get vinusum
	*
	* @return null|String
	*/
	public function getVinusum()
	{
		return $this->vinusum;
	}

	/**
	* Set vinfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $vinfecm
	* @return Vinfecm
	*/
	public function setVinfecm($vinfecm)
	{
	  $this->vinfecm = (String) $vinfecm;
	    return $this;
	}

	/**
	* Get vinfecm
	*
	* @return null|Date
	*/
	public function getVinfecm()
	{
		return $this->vinfecm;
	}

	/**
	* Set vintask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $vintask
	* @return Vintask
	*/
	public function setVintask($vintask)
	{
	  $this->vintask = (String) $vintask;
	    return $this;
	}

	/**
	* Get vintask
	*
	* @return null|String
	*/
	public function getVintask()
	{
		return $this->vintask;
	}

	/**
	* Set vinpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $vinpara
	* @return Vinpara
	*/
	public function setVinpara($vinpara)
	{
	  $this->vinpara = (Integer) $vinpara;
	    return $this;
	}

	/**
	* Get vinpara
	*
	* @return null|Integer
	*/
	public function getVinpara()
	{
		return $this->vinpara;
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

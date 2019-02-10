<?php
 /**
 * Model of the Tthvtm table
 *
 * It is used to convert the   Tthvtm entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Tthvtm
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Tthvtm
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Clave Primaria de la Base de Datos: TTHVTM
		*/
		protected $thvsecu;
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
		* @var Integer
		* Optional field
		* Field visible in the form
		* Auxiliar secuencial Notas de Crédito por devolución
		*/
		protected $thvsncd;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Auxiliar secuencial Notas de Crédito y Débito
		*/
		protected $thvscyd;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Ejercicio Económico
		*/
		protected $bperano;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Periodo Contable
		*/
		protected $bpernum;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Zona del Distribuidor
		*/
		protected $thvcozo;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Zona del Distribuidor
		*/
		protected $thvzona;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre/ Razón Social del Distribuidor
		*/
		protected $tdisnom;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Vendedor del Distribuidor
		*/
		protected $tagsec2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre Vendedor del Distribuidor
		*/
		protected $tagenom;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código de la Nueva Lista  de Precios
		*/
		protected $tlpcodi;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Cantidad
		*/
		protected $thvcvto;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta Moneda Nacional
		*/
		protected $thvvnto;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Costo Moneda Nacional
		*/
		protected $thvcnto;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Margen Moneda Nacional
		*/
		protected $thvmnto;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Venta Moneda Extranjera
		*/
		protected $thvveto;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Costo Moneda Extranjera
		*/
		protected $thvceto;
		/**
		* @var Decimal
		* Optional field
		* Field visible in the form
		* Valor Total Margen Moneda Extranjera
		*/
		protected $thvmeto;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Pedido
		*/
		protected $thvtipe;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $thvusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $thvfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $thvusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $thvfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $thvtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $thvpara;

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
	* Name of the table: tthvtm
	* 
	 */
	const TABLE="tthvtm";

	/**
	*Primary key
*/
		 const PKEY = "thvsecu";



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
		throw new \Exception('Class Entity: Tthvtm Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Tthvtm. Invalid specified property: get'.$name);
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
	* Set thvsecu
	*
	*Clave Primaria de la Base de Datos: TTHVTM
	*
	* @parámetro Integer $thvsecu
	* @return Thvsecu
	*/
	public function setThvsecu($thvsecu)
	{
	  $this->thvsecu = (Integer) $thvsecu;
	    return $this;
	}

	/**
	* Get thvsecu
	*
	* @return null|Integer
	*/
	public function getThvsecu()
	{
		return $this->thvsecu;
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
	* Set thvsncd
	*
	*Auxiliar secuencial Notas de Crédito por devolución
	*
	* @parámetro Integer $thvsncd
	* @return Thvsncd
	*/
	public function setThvsncd($thvsncd)
	{
	  $this->thvsncd = (Integer) $thvsncd;
	    return $this;
	}

	/**
	* Get thvsncd
	*
	* @return null|Integer
	*/
	public function getThvsncd()
	{
		return $this->thvsncd;
	}

	/**
	* Set thvscyd
	*
	*Auxiliar secuencial Notas de Crédito y Débito
	*
	* @parámetro Integer $thvscyd
	* @return Thvscyd
	*/
	public function setThvscyd($thvscyd)
	{
	  $this->thvscyd = (Integer) $thvscyd;
	    return $this;
	}

	/**
	* Get thvscyd
	*
	* @return null|Integer
	*/
	public function getThvscyd()
	{
		return $this->thvscyd;
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
	* Set thvcozo
	*
	*Código Zona del Distribuidor
	*
	* @parámetro String $thvcozo
	* @return Thvcozo
	*/
	public function setThvcozo($thvcozo)
	{
	  $this->thvcozo = (String) $thvcozo;
	    return $this;
	}

	/**
	* Get thvcozo
	*
	* @return null|String
	*/
	public function getThvcozo()
	{
		return $this->thvcozo;
	}

	/**
	* Set thvzona
	*
	*Zona del Distribuidor
	*
	* @parámetro String $thvzona
	* @return Thvzona
	*/
	public function setThvzona($thvzona)
	{
	  $this->thvzona = (String) $thvzona;
	    return $this;
	}

	/**
	* Get thvzona
	*
	* @return null|String
	*/
	public function getThvzona()
	{
		return $this->thvzona;
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
	* Set tagenom
	*
	*Nombre Vendedor del Distribuidor
	*
	* @parámetro String $tagenom
	* @return Tagenom
	*/
	public function setTagenom($tagenom)
	{
	  $this->tagenom = (String) $tagenom;
	    return $this;
	}

	/**
	* Get tagenom
	*
	* @return null|String
	*/
	public function getTagenom()
	{
		return $this->tagenom;
	}

	/**
	* Set tlpcodi
	*
	*Código de la Nueva Lista  de Precios
	*
	* @parámetro String $tlpcodi
	* @return Tlpcodi
	*/
	public function setTlpcodi($tlpcodi)
	{
	  $this->tlpcodi = (String) $tlpcodi;
	    return $this;
	}

	/**
	* Get tlpcodi
	*
	* @return null|String
	*/
	public function getTlpcodi()
	{
		return $this->tlpcodi;
	}

	/**
	* Set thvcvto
	*
	*Cantidad
	*
	* @parámetro Decimal $thvcvto
	* @return Thvcvto
	*/
	public function setThvcvto($thvcvto)
	{
	  $this->thvcvto = (Double) $thvcvto;
	    return $this;
	}

	/**
	* Get thvcvto
	*
	* @return null|Decimal
	*/
	public function getThvcvto()
	{
		return $this->thvcvto;
	}

	/**
	* Set thvvnto
	*
	*Valor Total Venta Moneda Nacional
	*
	* @parámetro Decimal $thvvnto
	* @return Thvvnto
	*/
	public function setThvvnto($thvvnto)
	{
	  $this->thvvnto = (Double) $thvvnto;
	    return $this;
	}

	/**
	* Get thvvnto
	*
	* @return null|Decimal
	*/
	public function getThvvnto()
	{
		return $this->thvvnto;
	}

	/**
	* Set thvcnto
	*
	*Valor Total Costo Moneda Nacional
	*
	* @parámetro Decimal $thvcnto
	* @return Thvcnto
	*/
	public function setThvcnto($thvcnto)
	{
	  $this->thvcnto = (Double) $thvcnto;
	    return $this;
	}

	/**
	* Get thvcnto
	*
	* @return null|Decimal
	*/
	public function getThvcnto()
	{
		return $this->thvcnto;
	}

	/**
	* Set thvmnto
	*
	*Valor Total Margen Moneda Nacional
	*
	* @parámetro Decimal $thvmnto
	* @return Thvmnto
	*/
	public function setThvmnto($thvmnto)
	{
	  $this->thvmnto = (Double) $thvmnto;
	    return $this;
	}

	/**
	* Get thvmnto
	*
	* @return null|Decimal
	*/
	public function getThvmnto()
	{
		return $this->thvmnto;
	}

	/**
	* Set thvveto
	*
	*Valor Total Venta Moneda Extranjera
	*
	* @parámetro Decimal $thvveto
	* @return Thvveto
	*/
	public function setThvveto($thvveto)
	{
	  $this->thvveto = (Double) $thvveto;
	    return $this;
	}

	/**
	* Get thvveto
	*
	* @return null|Decimal
	*/
	public function getThvveto()
	{
		return $this->thvveto;
	}

	/**
	* Set thvceto
	*
	*Valor Total Costo Moneda Extranjera
	*
	* @parámetro Decimal $thvceto
	* @return Thvceto
	*/
	public function setThvceto($thvceto)
	{
	  $this->thvceto = (Double) $thvceto;
	    return $this;
	}

	/**
	* Get thvceto
	*
	* @return null|Decimal
	*/
	public function getThvceto()
	{
		return $this->thvceto;
	}

	/**
	* Set thvmeto
	*
	*Valor Total Margen Moneda Extranjera
	*
	* @parámetro Decimal $thvmeto
	* @return Thvmeto
	*/
	public function setThvmeto($thvmeto)
	{
	  $this->thvmeto = (Double) $thvmeto;
	    return $this;
	}

	/**
	* Get thvmeto
	*
	* @return null|Decimal
	*/
	public function getThvmeto()
	{
		return $this->thvmeto;
	}

	/**
	* Set thvtipe
	*
	*Tipo de Pedido
	*
	* @parámetro Integer $thvtipe
	* @return Thvtipe
	*/
	public function setThvtipe($thvtipe)
	{
	  $this->thvtipe = (Integer) $thvtipe;
	    return $this;
	}

	/**
	* Get thvtipe
	*
	* @return null|Integer
	*/
	public function getThvtipe()
	{
		return $this->thvtipe;
	}

	/**
	* Set thvusuc
	*
	*Usuario de creación
	*
	* @parámetro String $thvusuc
	* @return Thvusuc
	*/
	public function setThvusuc($thvusuc)
	{
	  $this->thvusuc = (String) $thvusuc;
	    return $this;
	}

	/**
	* Get thvusuc
	*
	* @return null|String
	*/
	public function getThvusuc()
	{
		return $this->thvusuc;
	}

	/**
	* Set thvfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $thvfecc
	* @return Thvfecc
	*/
	public function setThvfecc($thvfecc)
	{
	  $this->thvfecc = (String) $thvfecc;
	    return $this;
	}

	/**
	* Get thvfecc
	*
	* @return null|Date
	*/
	public function getThvfecc()
	{
		return $this->thvfecc;
	}

	/**
	* Set thvusum
	*
	*Usuario de modificación
	*
	* @parámetro String $thvusum
	* @return Thvusum
	*/
	public function setThvusum($thvusum)
	{
	  $this->thvusum = (String) $thvusum;
	    return $this;
	}

	/**
	* Get thvusum
	*
	* @return null|String
	*/
	public function getThvusum()
	{
		return $this->thvusum;
	}

	/**
	* Set thvfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $thvfecm
	* @return Thvfecm
	*/
	public function setThvfecm($thvfecm)
	{
	  $this->thvfecm = (String) $thvfecm;
	    return $this;
	}

	/**
	* Get thvfecm
	*
	* @return null|Date
	*/
	public function getThvfecm()
	{
		return $this->thvfecm;
	}

	/**
	* Set thvtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $thvtask
	* @return Thvtask
	*/
	public function setThvtask($thvtask)
	{
	  $this->thvtask = (String) $thvtask;
	    return $this;
	}

	/**
	* Get thvtask
	*
	* @return null|String
	*/
	public function getThvtask()
	{
		return $this->thvtask;
	}

	/**
	* Set thvpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $thvpara
	* @return Thvpara
	*/
	public function setThvpara($thvpara)
	{
	  $this->thvpara = (Integer) $thvpara;
	    return $this;
	}

	/**
	* Get thvpara
	*
	* @return null|Integer
	*/
	public function getThvpara()
	{
		return $this->thvpara;
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

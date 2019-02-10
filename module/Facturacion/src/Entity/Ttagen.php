<?php
 /**
 * Model of the Ttagen table
 *
 * It is used to convert the   Ttagen entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Ttagen
 * @package Facturacion
 * @subpackage Entity
 */
  namespace  Facturacion\Entity;
  
 
class Ttagen
{

		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Estos datos se ingresan en la Opción: Maestro de Ejecutivos de Ventas
		*/
		protected $tagsecu;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Código Vendedor del Distribuidor
		*/
		protected $tagsec2;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Código  de Vendedor
		*/
		protected $tagecve;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Documento de Identidad del Agente Vendedor
		*/
		protected $tagdoid;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nominación del Agente
		*/
		protected $tagnomi;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Nombre Vendedor del Distribuidor
		*/
		protected $tagenom;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Abreviatura del Vendedor
		*/
		protected $tageabr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Calle Principal
		*/
		protected $tagcapr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nomenclatura y Número
		*/
		protected $tagnonu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Calle Secundaria dirección Agente
		*/
		protected $tagcase;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Postal del Vendedor
		*/
		protected $tagecpo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Ciudad del Vendedor
		*/
		protected $tagciud;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Distrito del Vendedor
		*/
		protected $tagedis;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Provincia del Vendedor
		*/
		protected $tagepro;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Departamente del Vendedor
		*/
		protected $tagedpt;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* País del Vendedor
		*/
		protected $tagepai;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* El Vendedor es Empleado
		*/
		protected $tageemp;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* RUC del Vendedor
		*/
		protected $tageruc;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono - Oficina del Vendedor
		*/
		protected $tagete1;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono - Domicilio del Vendedor
		*/
		protected $tagete2;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Teléfono - Celular del Vendedor
		*/
		protected $tagete3;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Naturaleza del Agente de Ventas
		*/
		protected $tagnaav;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Vendedor
		*/
		protected $tagetip;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Código Personal del Colaborador
		*/
		protected $tagecpe;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Nivel de Comisión
		*/
		protected $tagecom;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Nivel de Facturación
		*/
		protected $tagenfc;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Situación de Ejecutivo de Ventas
		*/
		protected $tagsiev;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $tagusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $tagfecc;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $tagusum;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $tagfecm;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Tipo de tarea ejecutada
		*/
		protected $tagtask;
		/**
		* @var Integer
		* Optional field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $tagpara;

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
	* Name of the table: ttagen
	* 
	 */
	const TABLE="ttagen";

	/**
	*Primary key
*/
		 const PKEY = "tagsecu";



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
		throw new \Exception('Class Entity: Ttagen Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Ttagen. Invalid specified property: get'.$name);
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
	* Set tagecve
	*
	*Código  de Vendedor
	*
	* @parámetro String $tagecve
	* @return Tagecve
	*/
	public function setTagecve($tagecve)
	{
	  $this->tagecve = (String) $tagecve;
	    return $this;
	}

	/**
	* Get tagecve
	*
	* @return null|String
	*/
	public function getTagecve()
	{
		return $this->tagecve;
	}

	/**
	* Set tagdoid
	*
	*Documento de Identidad del Agente Vendedor
	*
	* @parámetro String $tagdoid
	* @return Tagdoid
	*/
	public function setTagdoid($tagdoid)
	{
	  $this->tagdoid = (String) $tagdoid;
	    return $this;
	}

	/**
	* Get tagdoid
	*
	* @return null|String
	*/
	public function getTagdoid()
	{
		return $this->tagdoid;
	}

	/**
	* Set tagnomi
	*
	*Nominación del Agente
	*
	* @parámetro String $tagnomi
	* @return Tagnomi
	*/
	public function setTagnomi($tagnomi)
	{
	  $this->tagnomi = (String) $tagnomi;
	    return $this;
	}

	/**
	* Get tagnomi
	*
	* @return null|String
	*/
	public function getTagnomi()
	{
		return $this->tagnomi;
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
	* Set tageabr
	*
	*Abreviatura del Vendedor
	*
	* @parámetro String $tageabr
	* @return Tageabr
	*/
	public function setTageabr($tageabr)
	{
	  $this->tageabr = (String) $tageabr;
	    return $this;
	}

	/**
	* Get tageabr
	*
	* @return null|String
	*/
	public function getTageabr()
	{
		return $this->tageabr;
	}

	/**
	* Set tagcapr
	*
	*Calle Principal
	*
	* @parámetro String $tagcapr
	* @return Tagcapr
	*/
	public function setTagcapr($tagcapr)
	{
	  $this->tagcapr = (String) $tagcapr;
	    return $this;
	}

	/**
	* Get tagcapr
	*
	* @return null|String
	*/
	public function getTagcapr()
	{
		return $this->tagcapr;
	}

	/**
	* Set tagnonu
	*
	*Nomenclatura y Número
	*
	* @parámetro String $tagnonu
	* @return Tagnonu
	*/
	public function setTagnonu($tagnonu)
	{
	  $this->tagnonu = (String) $tagnonu;
	    return $this;
	}

	/**
	* Get tagnonu
	*
	* @return null|String
	*/
	public function getTagnonu()
	{
		return $this->tagnonu;
	}

	/**
	* Set tagcase
	*
	*Calle Secundaria dirección Agente
	*
	* @parámetro String $tagcase
	* @return Tagcase
	*/
	public function setTagcase($tagcase)
	{
	  $this->tagcase = (String) $tagcase;
	    return $this;
	}

	/**
	* Get tagcase
	*
	* @return null|String
	*/
	public function getTagcase()
	{
		return $this->tagcase;
	}

	/**
	* Set tagecpo
	*
	*Código Postal del Vendedor
	*
	* @parámetro String $tagecpo
	* @return Tagecpo
	*/
	public function setTagecpo($tagecpo)
	{
	  $this->tagecpo = (String) $tagecpo;
	    return $this;
	}

	/**
	* Get tagecpo
	*
	* @return null|String
	*/
	public function getTagecpo()
	{
		return $this->tagecpo;
	}

	/**
	* Set tagciud
	*
	*Ciudad del Vendedor
	*
	* @parámetro String $tagciud
	* @return Tagciud
	*/
	public function setTagciud($tagciud)
	{
	  $this->tagciud = (String) $tagciud;
	    return $this;
	}

	/**
	* Get tagciud
	*
	* @return null|String
	*/
	public function getTagciud()
	{
		return $this->tagciud;
	}

	/**
	* Set tagedis
	*
	*Distrito del Vendedor
	*
	* @parámetro String $tagedis
	* @return Tagedis
	*/
	public function setTagedis($tagedis)
	{
	  $this->tagedis = (String) $tagedis;
	    return $this;
	}

	/**
	* Get tagedis
	*
	* @return null|String
	*/
	public function getTagedis()
	{
		return $this->tagedis;
	}

	/**
	* Set tagepro
	*
	*Provincia del Vendedor
	*
	* @parámetro String $tagepro
	* @return Tagepro
	*/
	public function setTagepro($tagepro)
	{
	  $this->tagepro = (String) $tagepro;
	    return $this;
	}

	/**
	* Get tagepro
	*
	* @return null|String
	*/
	public function getTagepro()
	{
		return $this->tagepro;
	}

	/**
	* Set tagedpt
	*
	*Departamente del Vendedor
	*
	* @parámetro String $tagedpt
	* @return Tagedpt
	*/
	public function setTagedpt($tagedpt)
	{
	  $this->tagedpt = (String) $tagedpt;
	    return $this;
	}

	/**
	* Get tagedpt
	*
	* @return null|String
	*/
	public function getTagedpt()
	{
		return $this->tagedpt;
	}

	/**
	* Set tagepai
	*
	*País del Vendedor
	*
	* @parámetro String $tagepai
	* @return Tagepai
	*/
	public function setTagepai($tagepai)
	{
	  $this->tagepai = (String) $tagepai;
	    return $this;
	}

	/**
	* Get tagepai
	*
	* @return null|String
	*/
	public function getTagepai()
	{
		return $this->tagepai;
	}

	/**
	* Set tageemp
	*
	*El Vendedor es Empleado
	*
	* @parámetro Integer $tageemp
	* @return Tageemp
	*/
	public function setTageemp($tageemp)
	{
	  $this->tageemp = (Integer) $tageemp;
	    return $this;
	}

	/**
	* Get tageemp
	*
	* @return null|Integer
	*/
	public function getTageemp()
	{
		return $this->tageemp;
	}

	/**
	* Set tageruc
	*
	*RUC del Vendedor
	*
	* @parámetro String $tageruc
	* @return Tageruc
	*/
	public function setTageruc($tageruc)
	{
	  $this->tageruc = (String) $tageruc;
	    return $this;
	}

	/**
	* Get tageruc
	*
	* @return null|String
	*/
	public function getTageruc()
	{
		return $this->tageruc;
	}

	/**
	* Set tagete1
	*
	*Teléfono - Oficina del Vendedor
	*
	* @parámetro String $tagete1
	* @return Tagete1
	*/
	public function setTagete1($tagete1)
	{
	  $this->tagete1 = (String) $tagete1;
	    return $this;
	}

	/**
	* Get tagete1
	*
	* @return null|String
	*/
	public function getTagete1()
	{
		return $this->tagete1;
	}

	/**
	* Set tagete2
	*
	*Teléfono - Domicilio del Vendedor
	*
	* @parámetro String $tagete2
	* @return Tagete2
	*/
	public function setTagete2($tagete2)
	{
	  $this->tagete2 = (String) $tagete2;
	    return $this;
	}

	/**
	* Get tagete2
	*
	* @return null|String
	*/
	public function getTagete2()
	{
		return $this->tagete2;
	}

	/**
	* Set tagete3
	*
	*Teléfono - Celular del Vendedor
	*
	* @parámetro String $tagete3
	* @return Tagete3
	*/
	public function setTagete3($tagete3)
	{
	  $this->tagete3 = (String) $tagete3;
	    return $this;
	}

	/**
	* Get tagete3
	*
	* @return null|String
	*/
	public function getTagete3()
	{
		return $this->tagete3;
	}

	/**
	* Set tagnaav
	*
	*Naturaleza del Agente de Ventas
	*
	* @parámetro Integer $tagnaav
	* @return Tagnaav
	*/
	public function setTagnaav($tagnaav)
	{
	  $this->tagnaav = (Integer) $tagnaav;
	    return $this;
	}

	/**
	* Get tagnaav
	*
	* @return null|Integer
	*/
	public function getTagnaav()
	{
		return $this->tagnaav;
	}

	/**
	* Set tagetip
	*
	*Tipo de Vendedor
	*
	* @parámetro Integer $tagetip
	* @return Tagetip
	*/
	public function setTagetip($tagetip)
	{
	  $this->tagetip = (Integer) $tagetip;
	    return $this;
	}

	/**
	* Get tagetip
	*
	* @return null|Integer
	*/
	public function getTagetip()
	{
		return $this->tagetip;
	}

	/**
	* Set tagecpe
	*
	*Código Personal del Colaborador
	*
	* @parámetro String $tagecpe
	* @return Tagecpe
	*/
	public function setTagecpe($tagecpe)
	{
	  $this->tagecpe = (String) $tagecpe;
	    return $this;
	}

	/**
	* Get tagecpe
	*
	* @return null|String
	*/
	public function getTagecpe()
	{
		return $this->tagecpe;
	}

	/**
	* Set tagecom
	*
	*Nivel de Comisión
	*
	* @parámetro Integer $tagecom
	* @return Tagecom
	*/
	public function setTagecom($tagecom)
	{
	  $this->tagecom = (Integer) $tagecom;
	    return $this;
	}

	/**
	* Get tagecom
	*
	* @return null|Integer
	*/
	public function getTagecom()
	{
		return $this->tagecom;
	}

	/**
	* Set tagenfc
	*
	*Nivel de Facturación
	*
	* @parámetro Integer $tagenfc
	* @return Tagenfc
	*/
	public function setTagenfc($tagenfc)
	{
	  $this->tagenfc = (Integer) $tagenfc;
	    return $this;
	}

	/**
	* Get tagenfc
	*
	* @return null|Integer
	*/
	public function getTagenfc()
	{
		return $this->tagenfc;
	}

	/**
	* Set tagsiev
	*
	*Situación de Ejecutivo de Ventas
	*
	* @parámetro Integer $tagsiev
	* @return Tagsiev
	*/
	public function setTagsiev($tagsiev)
	{
	  $this->tagsiev = (Integer) $tagsiev;
	    return $this;
	}

	/**
	* Get tagsiev
	*
	* @return null|Integer
	*/
	public function getTagsiev()
	{
		return $this->tagsiev;
	}

	/**
	* Set tagusuc
	*
	*Usuario de creación
	*
	* @parámetro String $tagusuc
	* @return Tagusuc
	*/
	public function setTagusuc($tagusuc)
	{
	  $this->tagusuc = (String) $tagusuc;
	    return $this;
	}

	/**
	* Get tagusuc
	*
	* @return null|String
	*/
	public function getTagusuc()
	{
		return $this->tagusuc;
	}

	/**
	* Set tagfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $tagfecc
	* @return Tagfecc
	*/
	public function setTagfecc($tagfecc)
	{
	  $this->tagfecc = (String) $tagfecc;
	    return $this;
	}

	/**
	* Get tagfecc
	*
	* @return null|Date
	*/
	public function getTagfecc()
	{
		return $this->tagfecc;
	}

	/**
	* Set tagusum
	*
	*Usuario de modificación
	*
	* @parámetro String $tagusum
	* @return Tagusum
	*/
	public function setTagusum($tagusum)
	{
	  $this->tagusum = (String) $tagusum;
	    return $this;
	}

	/**
	* Get tagusum
	*
	* @return null|String
	*/
	public function getTagusum()
	{
		return $this->tagusum;
	}

	/**
	* Set tagfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $tagfecm
	* @return Tagfecm
	*/
	public function setTagfecm($tagfecm)
	{
	  $this->tagfecm = (String) $tagfecm;
	    return $this;
	}

	/**
	* Get tagfecm
	*
	* @return null|Date
	*/
	public function getTagfecm()
	{
		return $this->tagfecm;
	}

	/**
	* Set tagtask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $tagtask
	* @return Tagtask
	*/
	public function setTagtask($tagtask)
	{
	  $this->tagtask = (String) $tagtask;
	    return $this;
	}

	/**
	* Get tagtask
	*
	* @return null|String
	*/
	public function getTagtask()
	{
		return $this->tagtask;
	}

	/**
	* Set tagpara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $tagpara
	* @return Tagpara
	*/
	public function setTagpara($tagpara)
	{
	  $this->tagpara = (Integer) $tagpara;
	    return $this;
	}

	/**
	* Get tagpara
	*
	* @return null|Integer
	*/
	public function getTagpara()
	{
		return $this->tagpara;
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

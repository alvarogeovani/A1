<?php
 /**
 * Model of the Trreer table
 *
 * It is used to convert the   Trreer entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trreer
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trreer
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Opción: Registro de Errores
		*/
		protected $rresecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre de la Tabla
		*/
		protected $rrenota;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Campo de la Tabla
		*/
		protected $rrecata;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Identificación del Maestro
		*/
		protected $rreidma;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Sentencia u Operación Ejecutada
		*/
		protected $rresuoe;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Comentarios
		*/
		protected $rrecome;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Solución sugerida
		*/
		protected $rresosu;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Origen del Error
		*/
		protected $rreorer;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Tipo de Error
		*/
		protected $rretier;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha Proceso de Error
		*/
		protected $rrefepr;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Enviado por Email al Responsable
		*/
		protected $rreenem;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre de Proceso
		*/
		protected $rrenopr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción del Proceso
		*/
		protected $rredepr;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Nombre del Aplicativo en siglas
		*/
		protected $rrenoap;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Extensión propietaria del Proceso
		*/
		protected $rreexpr;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Extensión relacionada con el Proceso
		*/
		protected $rreexre;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Actores que intervienen
		*/
		protected $rreacin;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencias cruzadas
		*/
		protected $rrerecr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Trigger
		*/
		protected $rretrig;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Pre Condiciones
		*/
		protected $rreprco;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Post Condiciones
		*/
		protected $rrepoco;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Flujo normal
		*/
		protected $rreflno;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Flujos alternativos
		*/
		protected $rreflal;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Inclusiones adicionales
		*/
		protected $rreinad;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Frecuencia de uso
		*/
		protected $rrefrus;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Reglas del Negocio
		*/
		protected $rrerene;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Requerimientos especiales
		*/
		protected $rrerees;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario que Crea el Proceso
		*/
		protected $rreuscr;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Creación
		*/
		protected $rrefecr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario que Modifica el Proceso
		*/
		protected $rreusmo;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Modificación
		*/
		protected $rrefemo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observaciones
		*/
		protected $rreobse;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario de creación
		*/
		protected $rreusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rrefecc;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Usuario de modificación
		*/
		protected $rreusum;
		/**
		* @var Date
		* Required field
		* Field visible in the form
		* Fecha de modificación
		*/
		protected $rrefecm;
		/**
		* @var String
		* Required field
		* Field visible in the form
		* Tipo de tarea ejecutada
		*/
		protected $rretask;
		/**
		* @var Integer
		* Required field
		* Field visible in the form
		* Bandera de borrado
		*/
		protected $rrepara;

	/**
	* Form fields 
	* @var array 
	 */
	Private $fields = Array();

	/**
	* Schema name 
	* 
	 */
	const   SCHEMA ="seguridad";

	/**
	* Name of the table: trreer
	* 
	 */
	const TABLE="trreer";

	/**
	*Primary key
*/
		 const PKEY = "rresecu";



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
		throw new \Exception('Class Entity: Trreer Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trreer. Invalid specified property: get'.$name);
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
	* Set rresecu
	*
	*Opción: Registro de Errores
	*
	* @parámetro Integer $rresecu
	* @return Rresecu
	*/
	public function setRresecu($rresecu)
	{
	  $this->rresecu = (Integer) $rresecu;
	    return $this;
	}

	/**
	* Get rresecu
	*
	* @return null|Integer
	*/
	public function getRresecu()
	{
		return $this->rresecu;
	}

	/**
	* Set rrenota
	*
	*Nombre de la Tabla
	*
	* @parámetro String $rrenota
	* @return Rrenota
	*/
	public function setRrenota($rrenota)
	{
	  $this->rrenota = (String) $rrenota;
	    return $this;
	}

	/**
	* Get rrenota
	*
	* @return null|String
	*/
	public function getRrenota()
	{
		return $this->rrenota;
	}

	/**
	* Set rrecata
	*
	*Campo de la Tabla
	*
	* @parámetro String $rrecata
	* @return Rrecata
	*/
	public function setRrecata($rrecata)
	{
	  $this->rrecata = (String) $rrecata;
	    return $this;
	}

	/**
	* Get rrecata
	*
	* @return null|String
	*/
	public function getRrecata()
	{
		return $this->rrecata;
	}

	/**
	* Set rreidma
	*
	*Identificación del Maestro
	*
	* @parámetro String $rreidma
	* @return Rreidma
	*/
	public function setRreidma($rreidma)
	{
	  $this->rreidma = (String) $rreidma;
	    return $this;
	}

	/**
	* Get rreidma
	*
	* @return null|String
	*/
	public function getRreidma()
	{
		return $this->rreidma;
	}

	/**
	* Set rresuoe
	*
	*Sentencia u Operación Ejecutada
	*
	* @parámetro String $rresuoe
	* @return Rresuoe
	*/
	public function setRresuoe($rresuoe)
	{
	  $this->rresuoe = (String) $rresuoe;
	    return $this;
	}

	/**
	* Get rresuoe
	*
	* @return null|String
	*/
	public function getRresuoe()
	{
		return $this->rresuoe;
	}

	/**
	* Set rrecome
	*
	*Comentarios
	*
	* @parámetro String $rrecome
	* @return Rrecome
	*/
	public function setRrecome($rrecome)
	{
	  $this->rrecome = (String) $rrecome;
	    return $this;
	}

	/**
	* Get rrecome
	*
	* @return null|String
	*/
	public function getRrecome()
	{
		return $this->rrecome;
	}

	/**
	* Set rresosu
	*
	*Solución sugerida
	*
	* @parámetro String $rresosu
	* @return Rresosu
	*/
	public function setRresosu($rresosu)
	{
	  $this->rresosu = (String) $rresosu;
	    return $this;
	}

	/**
	* Get rresosu
	*
	* @return null|String
	*/
	public function getRresosu()
	{
		return $this->rresosu;
	}

	/**
	* Set rreorer
	*
	*Origen del Error
	*
	* @parámetro Integer $rreorer
	* @return Rreorer
	*/
	public function setRreorer($rreorer)
	{
	  $this->rreorer = (Integer) $rreorer;
	    return $this;
	}

	/**
	* Get rreorer
	*
	* @return null|Integer
	*/
	public function getRreorer()
	{
		return $this->rreorer;
	}

	/**
	* Set rretier
	*
	*Tipo de Error
	*
	* @parámetro Integer $rretier
	* @return Rretier
	*/
	public function setRretier($rretier)
	{
	  $this->rretier = (Integer) $rretier;
	    return $this;
	}

	/**
	* Get rretier
	*
	* @return null|Integer
	*/
	public function getRretier()
	{
		return $this->rretier;
	}

	/**
	* Set rrefepr
	*
	*Fecha Proceso de Error
	*
	* @parámetro Date $rrefepr
	* @return Rrefepr
	*/
	public function setRrefepr($rrefepr)
	{
	  $this->rrefepr = (String) $rrefepr;
	    return $this;
	}

	/**
	* Get rrefepr
	*
	* @return null|Date
	*/
	public function getRrefepr()
	{
		return $this->rrefepr;
	}

	/**
	* Set rreenem
	*
	*Enviado por Email al Responsable
	*
	* @parámetro Integer $rreenem
	* @return Rreenem
	*/
	public function setRreenem($rreenem)
	{
	  $this->rreenem = (Integer) $rreenem;
	    return $this;
	}

	/**
	* Get rreenem
	*
	* @return null|Integer
	*/
	public function getRreenem()
	{
		return $this->rreenem;
	}

	/**
	* Set rrenopr
	*
	*Nombre de Proceso
	*
	* @parámetro String $rrenopr
	* @return Rrenopr
	*/
	public function setRrenopr($rrenopr)
	{
	  $this->rrenopr = (String) $rrenopr;
	    return $this;
	}

	/**
	* Get rrenopr
	*
	* @return null|String
	*/
	public function getRrenopr()
	{
		return $this->rrenopr;
	}

	/**
	* Set rredepr
	*
	*Descripción del Proceso
	*
	* @parámetro String $rredepr
	* @return Rredepr
	*/
	public function setRredepr($rredepr)
	{
	  $this->rredepr = (String) $rredepr;
	    return $this;
	}

	/**
	* Get rredepr
	*
	* @return null|String
	*/
	public function getRredepr()
	{
		return $this->rredepr;
	}

	/**
	* Set rrenoap
	*
	*Nombre del Aplicativo en siglas
	*
	* @parámetro Integer $rrenoap
	* @return Rrenoap
	*/
	public function setRrenoap($rrenoap)
	{
	  $this->rrenoap = (Integer) $rrenoap;
	    return $this;
	}

	/**
	* Get rrenoap
	*
	* @return null|Integer
	*/
	public function getRrenoap()
	{
		return $this->rrenoap;
	}

	/**
	* Set rreexpr
	*
	*Extensión propietaria del Proceso
	*
	* @parámetro Integer $rreexpr
	* @return Rreexpr
	*/
	public function setRreexpr($rreexpr)
	{
	  $this->rreexpr = (Integer) $rreexpr;
	    return $this;
	}

	/**
	* Get rreexpr
	*
	* @return null|Integer
	*/
	public function getRreexpr()
	{
		return $this->rreexpr;
	}

	/**
	* Set rreexre
	*
	*Extensión relacionada con el Proceso
	*
	* @parámetro Integer $rreexre
	* @return Rreexre
	*/
	public function setRreexre($rreexre)
	{
	  $this->rreexre = (Integer) $rreexre;
	    return $this;
	}

	/**
	* Get rreexre
	*
	* @return null|Integer
	*/
	public function getRreexre()
	{
		return $this->rreexre;
	}

	/**
	* Set rreacin
	*
	*Actores que intervienen
	*
	* @parámetro String $rreacin
	* @return Rreacin
	*/
	public function setRreacin($rreacin)
	{
	  $this->rreacin = (String) $rreacin;
	    return $this;
	}

	/**
	* Get rreacin
	*
	* @return null|String
	*/
	public function getRreacin()
	{
		return $this->rreacin;
	}

	/**
	* Set rrerecr
	*
	*Referencias cruzadas
	*
	* @parámetro String $rrerecr
	* @return Rrerecr
	*/
	public function setRrerecr($rrerecr)
	{
	  $this->rrerecr = (String) $rrerecr;
	    return $this;
	}

	/**
	* Get rrerecr
	*
	* @return null|String
	*/
	public function getRrerecr()
	{
		return $this->rrerecr;
	}

	/**
	* Set rretrig
	*
	*Trigger
	*
	* @parámetro String $rretrig
	* @return Rretrig
	*/
	public function setRretrig($rretrig)
	{
	  $this->rretrig = (String) $rretrig;
	    return $this;
	}

	/**
	* Get rretrig
	*
	* @return null|String
	*/
	public function getRretrig()
	{
		return $this->rretrig;
	}

	/**
	* Set rreprco
	*
	*Pre Condiciones
	*
	* @parámetro String $rreprco
	* @return Rreprco
	*/
	public function setRreprco($rreprco)
	{
	  $this->rreprco = (String) $rreprco;
	    return $this;
	}

	/**
	* Get rreprco
	*
	* @return null|String
	*/
	public function getRreprco()
	{
		return $this->rreprco;
	}

	/**
	* Set rrepoco
	*
	*Post Condiciones
	*
	* @parámetro String $rrepoco
	* @return Rrepoco
	*/
	public function setRrepoco($rrepoco)
	{
	  $this->rrepoco = (String) $rrepoco;
	    return $this;
	}

	/**
	* Get rrepoco
	*
	* @return null|String
	*/
	public function getRrepoco()
	{
		return $this->rrepoco;
	}

	/**
	* Set rreflno
	*
	*Flujo normal
	*
	* @parámetro String $rreflno
	* @return Rreflno
	*/
	public function setRreflno($rreflno)
	{
	  $this->rreflno = (String) $rreflno;
	    return $this;
	}

	/**
	* Get rreflno
	*
	* @return null|String
	*/
	public function getRreflno()
	{
		return $this->rreflno;
	}

	/**
	* Set rreflal
	*
	*Flujos alternativos
	*
	* @parámetro String $rreflal
	* @return Rreflal
	*/
	public function setRreflal($rreflal)
	{
	  $this->rreflal = (String) $rreflal;
	    return $this;
	}

	/**
	* Get rreflal
	*
	* @return null|String
	*/
	public function getRreflal()
	{
		return $this->rreflal;
	}

	/**
	* Set rreinad
	*
	*Inclusiones adicionales
	*
	* @parámetro String $rreinad
	* @return Rreinad
	*/
	public function setRreinad($rreinad)
	{
	  $this->rreinad = (String) $rreinad;
	    return $this;
	}

	/**
	* Get rreinad
	*
	* @return null|String
	*/
	public function getRreinad()
	{
		return $this->rreinad;
	}

	/**
	* Set rrefrus
	*
	*Frecuencia de uso
	*
	* @parámetro Integer $rrefrus
	* @return Rrefrus
	*/
	public function setRrefrus($rrefrus)
	{
	  $this->rrefrus = (Integer) $rrefrus;
	    return $this;
	}

	/**
	* Get rrefrus
	*
	* @return null|Integer
	*/
	public function getRrefrus()
	{
		return $this->rrefrus;
	}

	/**
	* Set rrerene
	*
	*Reglas del Negocio
	*
	* @parámetro String $rrerene
	* @return Rrerene
	*/
	public function setRrerene($rrerene)
	{
	  $this->rrerene = (String) $rrerene;
	    return $this;
	}

	/**
	* Get rrerene
	*
	* @return null|String
	*/
	public function getRrerene()
	{
		return $this->rrerene;
	}

	/**
	* Set rrerees
	*
	*Requerimientos especiales
	*
	* @parámetro String $rrerees
	* @return Rrerees
	*/
	public function setRrerees($rrerees)
	{
	  $this->rrerees = (String) $rrerees;
	    return $this;
	}

	/**
	* Get rrerees
	*
	* @return null|String
	*/
	public function getRrerees()
	{
		return $this->rrerees;
	}

	/**
	* Set rreuscr
	*
	*Usuario que Crea el Proceso
	*
	* @parámetro String $rreuscr
	* @return Rreuscr
	*/
	public function setRreuscr($rreuscr)
	{
	  $this->rreuscr = (String) $rreuscr;
	    return $this;
	}

	/**
	* Get rreuscr
	*
	* @return null|String
	*/
	public function getRreuscr()
	{
		return $this->rreuscr;
	}

	/**
	* Set rrefecr
	*
	*Fecha de Creación
	*
	* @parámetro Date $rrefecr
	* @return Rrefecr
	*/
	public function setRrefecr($rrefecr)
	{
	  $this->rrefecr = (String) $rrefecr;
	    return $this;
	}

	/**
	* Get rrefecr
	*
	* @return null|Date
	*/
	public function getRrefecr()
	{
		return $this->rrefecr;
	}

	/**
	* Set rreusmo
	*
	*Usuario que Modifica el Proceso
	*
	* @parámetro String $rreusmo
	* @return Rreusmo
	*/
	public function setRreusmo($rreusmo)
	{
	  $this->rreusmo = (String) $rreusmo;
	    return $this;
	}

	/**
	* Get rreusmo
	*
	* @return null|String
	*/
	public function getRreusmo()
	{
		return $this->rreusmo;
	}

	/**
	* Set rrefemo
	*
	*Fecha de Modificación
	*
	* @parámetro Date $rrefemo
	* @return Rrefemo
	*/
	public function setRrefemo($rrefemo)
	{
	  $this->rrefemo = (String) $rrefemo;
	    return $this;
	}

	/**
	* Get rrefemo
	*
	* @return null|Date
	*/
	public function getRrefemo()
	{
		return $this->rrefemo;
	}

	/**
	* Set rreobse
	*
	*Observaciones
	*
	* @parámetro String $rreobse
	* @return Rreobse
	*/
	public function setRreobse($rreobse)
	{
	  $this->rreobse = (String) $rreobse;
	    return $this;
	}

	/**
	* Get rreobse
	*
	* @return null|String
	*/
	public function getRreobse()
	{
		return $this->rreobse;
	}

	/**
	* Set rreusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rreusuc
	* @return Rreusuc
	*/
	public function setRreusuc($rreusuc)
	{
	  $this->rreusuc = (String) $rreusuc;
	    return $this;
	}

	/**
	* Get rreusuc
	*
	* @return null|String
	*/
	public function getRreusuc()
	{
		return $this->rreusuc;
	}

	/**
	* Set rrefecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rrefecc
	* @return Rrefecc
	*/
	public function setRrefecc($rrefecc)
	{
	  $this->rrefecc = (String) $rrefecc;
	    return $this;
	}

	/**
	* Get rrefecc
	*
	* @return null|Date
	*/
	public function getRrefecc()
	{
		return $this->rrefecc;
	}

	/**
	* Set rreusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rreusum
	* @return Rreusum
	*/
	public function setRreusum($rreusum)
	{
	  $this->rreusum = (String) $rreusum;
	    return $this;
	}

	/**
	* Get rreusum
	*
	* @return null|String
	*/
	public function getRreusum()
	{
		return $this->rreusum;
	}

	/**
	* Set rrefecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rrefecm
	* @return Rrefecm
	*/
	public function setRrefecm($rrefecm)
	{
	  $this->rrefecm = (String) $rrefecm;
	    return $this;
	}

	/**
	* Get rrefecm
	*
	* @return null|Date
	*/
	public function getRrefecm()
	{
		return $this->rrefecm;
	}

	/**
	* Set rretask
	*
	*Tipo de tarea ejecutada
	*
	* @parámetro String $rretask
	* @return Rretask
	*/
	public function setRretask($rretask)
	{
	  $this->rretask = (String) $rretask;
	    return $this;
	}

	/**
	* Get rretask
	*
	* @return null|String
	*/
	public function getRretask()
	{
		return $this->rretask;
	}

	/**
	* Set rrepara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rrepara
	* @return Rrepara
	*/
	public function setRrepara($rrepara)
	{
	  $this->rrepara = (Integer) $rrepara;
	    return $this;
	}

	/**
	* Get rrepara
	*
	* @return null|Integer
	*/
	public function getRrepara()
	{
		return $this->rrepara;
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

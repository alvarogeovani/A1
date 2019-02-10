<?php
 /**
 * Model of the Trdepr table
 *
 * It is used to convert the   Trdepr entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trdepr
 * @package Seguridad
 * @subpackage Entity
 */
  namespace  Seguridad\Entity;
  
 
class Trdepr
{

		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Opción: Detalle de Procesos
		*/
		protected $rdpsecu;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Estos datos se ingresan en la Opción: Maestro de Menúes y Opciones
		*/
		protected $rnosecu;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Nombre de Proceso
		*/
		protected $rdpnopr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Descripción del Proceso
		*/
		protected $rdpdepr;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Nombre del Aplicativo en siglas
		*/
		protected $rdpnoap;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Extensión propietaria del Proceso
		*/
		protected $rdpexpr;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Extensión relacionada con el Proceso
		*/
		protected $rdpexre;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Actores que intervienen
		*/
		protected $rdpacin;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Referencias cruzadas
		*/
		protected $rdprecr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Trigger
		*/
		protected $rdptrig;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Pre Condiciones
		*/
		protected $rdpprco;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Post Condiciones
		*/
		protected $rdppoco;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Flujo normal
		*/
		protected $rdpflno;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Flujos alternativos
		*/
		protected $rdpflal;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Inclusiones adicionales
		*/
		protected $rdpinad;
		/**
		* @var Integer
		* Optional field
		* Field visible in the form
		* Frecuencia de uso
		*/
		protected $rdpfrus;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Reglas del Negocio
		*/
		protected $rdprene;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Requerimientos especiales
		*/
		protected $rdprees;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario que Crea el Proceso
		*/
		protected $rdpuscr;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Creación
		*/
		protected $rdpfecr;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Usuario que Modifica el Proceso
		*/
		protected $rdpusmo;
		/**
		* @var Date
		* Optional field
		* Field visible in the form
		* Fecha de Modificación
		*/
		protected $rdpfemo;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Filtra el Nombre del Proceso de acuerdo a la Opción de Menú
		*/
		protected $rdpfinp;
		/**
		* @var String
		* Optional field
		* Field visible in the form
		* Observaciones
		*/
		protected $rdpobse;
		/**
		* @var String
		* Optional field
		* Field hidden in the form or handled internally
		* Usuario de creación
		*/
		protected $rdpusuc;
		/**
		* @var Date
		* Optional field
		* Field hidden in the form or handled internally
		* Fecha de creación
		*/
		protected $rdpfecc;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Usuario de modificación
		*/
		protected $rdpusum;
		/**
		* @var Date
		* Required field
		* Field hidden in the form or handled internally
		* Fecha de modificación
		*/
		protected $rdpfecm;
		/**
		* @var String
		* Required field
		* Field hidden in the form or handled internally
		* Tipo de Tarea Ejecutada
		*/
		protected $rdptask;
		/**
		* @var Integer
		* Required field
		* Field hidden in the form or handled internally
		* Bandera de borrado
		*/
		protected $rdppara;

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
	* Name of the table: trdepr
	* 
	 */
	const TABLE="trdepr";

	/**
	*Primary key
*/
		 const PKEY = "rdpsecu";



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
		throw new \Exception('Class Entity: Trdepr Invalid specified property: set'.$name);
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
	  throw new \Exception('Clase Entity: Trdepr. Invalid specified property: get'.$name);
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
	* Set rdpsecu
	*
	*Opción: Detalle de Procesos
	*
	* @parámetro Integer $rdpsecu
	* @return Rdpsecu
	*/
	public function setRdpsecu($rdpsecu)
	{
	  $this->rdpsecu = (Integer) $rdpsecu;
	    return $this;
	}

	/**
	* Get rdpsecu
	*
	* @return null|Integer
	*/
	public function getRdpsecu()
	{
		return $this->rdpsecu;
	}

	/**
	* Set rnosecu
	*
	*Estos datos se ingresan en la Opción: Maestro de Menúes y Opciones
	*
	* @parámetro Integer $rnosecu
	* @return Rnosecu
	*/
	public function setRnosecu($rnosecu)
	{
	  $this->rnosecu = (Integer) $rnosecu;
	    return $this;
	}

	/**
	* Get rnosecu
	*
	* @return null|Integer
	*/
	public function getRnosecu()
	{
		return $this->rnosecu;
	}

	/**
	* Set rdpnopr
	*
	*Nombre de Proceso
	*
	* @parámetro String $rdpnopr
	* @return Rdpnopr
	*/
	public function setRdpnopr($rdpnopr)
	{
	  $this->rdpnopr = (String) $rdpnopr;
	    return $this;
	}

	/**
	* Get rdpnopr
	*
	* @return null|String
	*/
	public function getRdpnopr()
	{
		return $this->rdpnopr;
	}

	/**
	* Set rdpdepr
	*
	*Descripción del Proceso
	*
	* @parámetro String $rdpdepr
	* @return Rdpdepr
	*/
	public function setRdpdepr($rdpdepr)
	{
	  $this->rdpdepr = (String) $rdpdepr;
	    return $this;
	}

	/**
	* Get rdpdepr
	*
	* @return null|String
	*/
	public function getRdpdepr()
	{
		return $this->rdpdepr;
	}

	/**
	* Set rdpnoap
	*
	*Nombre del Aplicativo en siglas
	*
	* @parámetro Integer $rdpnoap
	* @return Rdpnoap
	*/
	public function setRdpnoap($rdpnoap)
	{
	  $this->rdpnoap = (Integer) $rdpnoap;
	    return $this;
	}

	/**
	* Get rdpnoap
	*
	* @return null|Integer
	*/
	public function getRdpnoap()
	{
		return $this->rdpnoap;
	}

	/**
	* Set rdpexpr
	*
	*Extensión propietaria del Proceso
	*
	* @parámetro Integer $rdpexpr
	* @return Rdpexpr
	*/
	public function setRdpexpr($rdpexpr)
	{
	  $this->rdpexpr = (Integer) $rdpexpr;
	    return $this;
	}

	/**
	* Get rdpexpr
	*
	* @return null|Integer
	*/
	public function getRdpexpr()
	{
		return $this->rdpexpr;
	}

	/**
	* Set rdpexre
	*
	*Extensión relacionada con el Proceso
	*
	* @parámetro Integer $rdpexre
	* @return Rdpexre
	*/
	public function setRdpexre($rdpexre)
	{
	  $this->rdpexre = (Integer) $rdpexre;
	    return $this;
	}

	/**
	* Get rdpexre
	*
	* @return null|Integer
	*/
	public function getRdpexre()
	{
		return $this->rdpexre;
	}

	/**
	* Set rdpacin
	*
	*Actores que intervienen
	*
	* @parámetro String $rdpacin
	* @return Rdpacin
	*/
	public function setRdpacin($rdpacin)
	{
	  $this->rdpacin = (String) $rdpacin;
	    return $this;
	}

	/**
	* Get rdpacin
	*
	* @return null|String
	*/
	public function getRdpacin()
	{
		return $this->rdpacin;
	}

	/**
	* Set rdprecr
	*
	*Referencias cruzadas
	*
	* @parámetro String $rdprecr
	* @return Rdprecr
	*/
	public function setRdprecr($rdprecr)
	{
	  $this->rdprecr = (String) $rdprecr;
	    return $this;
	}

	/**
	* Get rdprecr
	*
	* @return null|String
	*/
	public function getRdprecr()
	{
		return $this->rdprecr;
	}

	/**
	* Set rdptrig
	*
	*Trigger
	*
	* @parámetro String $rdptrig
	* @return Rdptrig
	*/
	public function setRdptrig($rdptrig)
	{
	  $this->rdptrig = (String) $rdptrig;
	    return $this;
	}

	/**
	* Get rdptrig
	*
	* @return null|String
	*/
	public function getRdptrig()
	{
		return $this->rdptrig;
	}

	/**
	* Set rdpprco
	*
	*Pre Condiciones
	*
	* @parámetro String $rdpprco
	* @return Rdpprco
	*/
	public function setRdpprco($rdpprco)
	{
	  $this->rdpprco = (String) $rdpprco;
	    return $this;
	}

	/**
	* Get rdpprco
	*
	* @return null|String
	*/
	public function getRdpprco()
	{
		return $this->rdpprco;
	}

	/**
	* Set rdppoco
	*
	*Post Condiciones
	*
	* @parámetro String $rdppoco
	* @return Rdppoco
	*/
	public function setRdppoco($rdppoco)
	{
	  $this->rdppoco = (String) $rdppoco;
	    return $this;
	}

	/**
	* Get rdppoco
	*
	* @return null|String
	*/
	public function getRdppoco()
	{
		return $this->rdppoco;
	}

	/**
	* Set rdpflno
	*
	*Flujo normal
	*
	* @parámetro String $rdpflno
	* @return Rdpflno
	*/
	public function setRdpflno($rdpflno)
	{
	  $this->rdpflno = (String) $rdpflno;
	    return $this;
	}

	/**
	* Get rdpflno
	*
	* @return null|String
	*/
	public function getRdpflno()
	{
		return $this->rdpflno;
	}

	/**
	* Set rdpflal
	*
	*Flujos alternativos
	*
	* @parámetro String $rdpflal
	* @return Rdpflal
	*/
	public function setRdpflal($rdpflal)
	{
	  $this->rdpflal = (String) $rdpflal;
	    return $this;
	}

	/**
	* Get rdpflal
	*
	* @return null|String
	*/
	public function getRdpflal()
	{
		return $this->rdpflal;
	}

	/**
	* Set rdpinad
	*
	*Inclusiones adicionales
	*
	* @parámetro String $rdpinad
	* @return Rdpinad
	*/
	public function setRdpinad($rdpinad)
	{
	  $this->rdpinad = (String) $rdpinad;
	    return $this;
	}

	/**
	* Get rdpinad
	*
	* @return null|String
	*/
	public function getRdpinad()
	{
		return $this->rdpinad;
	}

	/**
	* Set rdpfrus
	*
	*Frecuencia de uso
	*
	* @parámetro Integer $rdpfrus
	* @return Rdpfrus
	*/
	public function setRdpfrus($rdpfrus)
	{
	  $this->rdpfrus = (Integer) $rdpfrus;
	    return $this;
	}

	/**
	* Get rdpfrus
	*
	* @return null|Integer
	*/
	public function getRdpfrus()
	{
		return $this->rdpfrus;
	}

	/**
	* Set rdprene
	*
	*Reglas del Negocio
	*
	* @parámetro String $rdprene
	* @return Rdprene
	*/
	public function setRdprene($rdprene)
	{
	  $this->rdprene = (String) $rdprene;
	    return $this;
	}

	/**
	* Get rdprene
	*
	* @return null|String
	*/
	public function getRdprene()
	{
		return $this->rdprene;
	}

	/**
	* Set rdprees
	*
	*Requerimientos especiales
	*
	* @parámetro String $rdprees
	* @return Rdprees
	*/
	public function setRdprees($rdprees)
	{
	  $this->rdprees = (String) $rdprees;
	    return $this;
	}

	/**
	* Get rdprees
	*
	* @return null|String
	*/
	public function getRdprees()
	{
		return $this->rdprees;
	}

	/**
	* Set rdpuscr
	*
	*Usuario que Crea el Proceso
	*
	* @parámetro String $rdpuscr
	* @return Rdpuscr
	*/
	public function setRdpuscr($rdpuscr)
	{
	  $this->rdpuscr = (String) $rdpuscr;
	    return $this;
	}

	/**
	* Get rdpuscr
	*
	* @return null|String
	*/
	public function getRdpuscr()
	{
		return $this->rdpuscr;
	}

	/**
	* Set rdpfecr
	*
	*Fecha de Creación
	*
	* @parámetro Date $rdpfecr
	* @return Rdpfecr
	*/
	public function setRdpfecr($rdpfecr)
	{
	  $this->rdpfecr = (String) $rdpfecr;
	    return $this;
	}

	/**
	* Get rdpfecr
	*
	* @return null|Date
	*/
	public function getRdpfecr()
	{
		return $this->rdpfecr;
	}

	/**
	* Set rdpusmo
	*
	*Usuario que Modifica el Proceso
	*
	* @parámetro String $rdpusmo
	* @return Rdpusmo
	*/
	public function setRdpusmo($rdpusmo)
	{
	  $this->rdpusmo = (String) $rdpusmo;
	    return $this;
	}

	/**
	* Get rdpusmo
	*
	* @return null|String
	*/
	public function getRdpusmo()
	{
		return $this->rdpusmo;
	}

	/**
	* Set rdpfemo
	*
	*Fecha de Modificación
	*
	* @parámetro Date $rdpfemo
	* @return Rdpfemo
	*/
	public function setRdpfemo($rdpfemo)
	{
	  $this->rdpfemo = (String) $rdpfemo;
	    return $this;
	}

	/**
	* Get rdpfemo
	*
	* @return null|Date
	*/
	public function getRdpfemo()
	{
		return $this->rdpfemo;
	}

	/**
	* Set rdpfinp
	*
	*Filtra el Nombre del Proceso de acuerdo a la Opción de Menú
	*
	* @parámetro String $rdpfinp
	* @return Rdpfinp
	*/
	public function setRdpfinp($rdpfinp)
	{
	  $this->rdpfinp = (String) $rdpfinp;
	    return $this;
	}

	/**
	* Get rdpfinp
	*
	* @return null|String
	*/
	public function getRdpfinp()
	{
		return $this->rdpfinp;
	}

	/**
	* Set rdpobse
	*
	*Observaciones
	*
	* @parámetro String $rdpobse
	* @return Rdpobse
	*/
	public function setRdpobse($rdpobse)
	{
	  $this->rdpobse = (String) $rdpobse;
	    return $this;
	}

	/**
	* Get rdpobse
	*
	* @return null|String
	*/
	public function getRdpobse()
	{
		return $this->rdpobse;
	}

	/**
	* Set rdpusuc
	*
	*Usuario de creación
	*
	* @parámetro String $rdpusuc
	* @return Rdpusuc
	*/
	public function setRdpusuc($rdpusuc)
	{
	  $this->rdpusuc = (String) $rdpusuc;
	    return $this;
	}

	/**
	* Get rdpusuc
	*
	* @return null|String
	*/
	public function getRdpusuc()
	{
		return $this->rdpusuc;
	}

	/**
	* Set rdpfecc
	*
	*Fecha de creación
	*
	* @parámetro Date $rdpfecc
	* @return Rdpfecc
	*/
	public function setRdpfecc($rdpfecc)
	{
	  $this->rdpfecc = (String) $rdpfecc;
	    return $this;
	}

	/**
	* Get rdpfecc
	*
	* @return null|Date
	*/
	public function getRdpfecc()
	{
		return $this->rdpfecc;
	}

	/**
	* Set rdpusum
	*
	*Usuario de modificación
	*
	* @parámetro String $rdpusum
	* @return Rdpusum
	*/
	public function setRdpusum($rdpusum)
	{
	  $this->rdpusum = (String) $rdpusum;
	    return $this;
	}

	/**
	* Get rdpusum
	*
	* @return null|String
	*/
	public function getRdpusum()
	{
		return $this->rdpusum;
	}

	/**
	* Set rdpfecm
	*
	*Fecha de modificación
	*
	* @parámetro Date $rdpfecm
	* @return Rdpfecm
	*/
	public function setRdpfecm($rdpfecm)
	{
	  $this->rdpfecm = (String) $rdpfecm;
	    return $this;
	}

	/**
	* Get rdpfecm
	*
	* @return null|Date
	*/
	public function getRdpfecm()
	{
		return $this->rdpfecm;
	}

	/**
	* Set rdptask
	*
	*Tipo de Tarea Ejecutada
	*
	* @parámetro String $rdptask
	* @return Rdptask
	*/
	public function setRdptask($rdptask)
	{
	  $this->rdptask = (String) $rdptask;
	    return $this;
	}

	/**
	* Get rdptask
	*
	* @return null|String
	*/
	public function getRdptask()
	{
		return $this->rdptask;
	}

	/**
	* Set rdppara
	*
	*Bandera de borrado
	*
	* @parámetro Integer $rdppara
	* @return Rdppara
	*/
	public function setRdppara($rdppara)
	{
	  $this->rdppara = (Integer) $rdppara;
	    return $this;
	}

	/**
	* Get rdppara
	*
	* @return null|Integer
	*/
	public function getRdppara()
	{
		return $this->rdppara;
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

<?php

/**
 * Model of the Trmodl table
 *
 * It is used to convert the   Trmodl entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trmodl
 * @package Seguridad
 * @subpackage Entity
 */

namespace Seguridad\Entity;

class Trmodl
    {

    /**
     * @var Integer
     * Required field
     * Field hidden in the form or handled internally
     * Estos datos se ingresan en la Opción: Maestro de Módulos
     */
    protected $rmosecu;

    /**
     * @var Integer
     * Required field
     * Field hidden in the form or handled internally
     * Estos datos se ingresan en la Opción: Maestro de Módulos
     */
    protected $trmRmosecu;

    /**
     * @var String
     * Required field
     * Field visible in the form
     * Código del Módulo
     */
    protected $rmocodi;

    /**
     * @var String
     * Optional field
     * Field visible in the form
     * Código Largo
     */
    protected $rmocola;

    /**
     * @var String
     * Optional field
     * Field visible in the form
     * Especificación del Nombre
     */
    protected $rmoesno;

    /**
     * @var String
     * Required field
     * Field visible in the form
     * Nombre de la Extensión
     */
    protected $rmonomb;

    /**
     * @var Integer
     * Optional field
     * Field visible in the form
     * Ordinal de la Extensión
     */
    protected $rmoordi;

    /**
     * @var Integer
     * Optional field
     * Field visible in the form
     * Nivel de la Extensión
     */
    protected $rmonive;

    /**
     * @var Integer
     * Optional field
     * Field visible in the form
     * Bandera de Último Nivel
     */
    protected $rmoulni;

    /**
     * @var Integer
     * Optional field
     * Field visible in the form
     * Modo de Depurar
     */
    protected $rmodepu;

    /**
     * @var String
     * Optional field
     * Field visible in the form
     * Parámetros adicionales del Módulo
     */
    protected $rmoparm;

    /**
     * @var String
     * Optional field
     * Field visible in the form
     * Descripción de la Extensión
     */
    protected $rmodeex;

    /**
     * @var Integer
     * Optional field
     * Field visible in the form
     * Orden específico del Módulo
     */
    protected $rmoorde;

    /**
     * @var Integer
     * Optional field
     * Field visible in the form
     * Estado del Módulo
     */
    protected $rmoesta;

    /**
     * @var String
     * Optional field
     * Field hidden in the form or handled internally
     * Usuario de creación
     */
    protected $rmousuc;

    /**
     * @var Date
     * Optional field
     * Field hidden in the form or handled internally
     * Fecha de creación
     */
    protected $rmofecc;

    /**
     * @var String
     * Required field
     * Field hidden in the form or handled internally
     * Usuario de modificación
     */
    protected $rmousum;

    /**
     * @var Date
     * Required field
     * Field hidden in the form or handled internally
     * Fecha de modificación
     */
    protected $rmofecm;

    /**
     * @var String
     * Required field
     * Field hidden in the form or handled internally
     * Tipo de tarea ejecutada
     */
    protected $rmotask;

    /**
     * @var Integer
     * Required field
     * Field hidden in the form or handled internally
     * Bandera de borrado
     */
    protected $rmopara;

    /**
     * Form fields 
     * @var array 
     */
    Private $fields = Array();

    /**
     * Schema name 
     * 
     */
    const SCHEMA = "seguridad";

    /**
     * Name of the table: trmodl
     * 
     */
    const TABLE = "trmodl";

    /**
     * Primary key
     */
    const PKEY = "rmosecu";

    /**
     * Sequence
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
            throw new \Exception('Class Entity: Trmodl Invalid specified property: set' . $name);
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
            throw new \Exception('Clase Entity: Trmodl. Invalid specified property: get' . $name);
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
            if (strpos($key, '_') > 0)
            {
                $aux = preg_replace_callback(" /[-_]([a-z]+)/ ", function($string)
                {
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
        foreach ($this->fields as $key => $value)
        {
            $this->fields[$key] = $claseArray[lcfirst($value)];
        }
        return $this->fields;
    }

    /**
     * Set rmosecu
     *
     * Estos datos se ingresan en la Opción: Maestro de Módulos
     *
     * @parámetro Integer $rmosecu
     * @return Rmosecu
     */
    public function setRmosecu($rmosecu)
    {
        $this->rmosecu = (Integer) $rmosecu;
        return $this;
    }

    /**
     * Get rmosecu
     *
     * @return null|Integer
     */
    public function getRmosecu()
    {
        return $this->rmosecu;
    }

    /**
     * Set trmRmosecu
     *
     * Estos datos se ingresan en la Opción: Maestro de Módulos
     *
     * @parámetro Integer $trmRmosecu
     * @return TrmRmosecu
     */
    public function setTrmRmosecu($trmRmosecu)
    {
        $this->trmRmosecu = (Integer) $trmRmosecu;
        return $this;
    }

    /**
     * Get trmRmosecu
     *
     * @return null|Integer
     */
    public function getTrmRmosecu()
    {
        return $this->trmRmosecu;
    }

    /**
     * Set rmocodi
     *
     * Código del Módulo
     *
     * @parámetro String $rmocodi
     * @return Rmocodi
     */
    public function setRmocodi($rmocodi)
    {
        $this->rmocodi = (String) $rmocodi;
        return $this;
    }

    /**
     * Get rmocodi
     *
     * @return null|String
     */
    public function getRmocodi()
    {
        return $this->rmocodi;
    }

    /**
     * Set rmocola
     *
     * Código Largo
     *
     * @parámetro String $rmocola
     * @return Rmocola
     */
    public function setRmocola($rmocola)
    {
        $this->rmocola = (String) $rmocola;
        return $this;
    }

    /**
     * Get rmocola
     *
     * @return null|String
     */
    public function getRmocola()
    {
        return $this->rmocola;
    }

    /**
     * Set rmoesno
     *
     * Especificación del Nombre
     *
     * @parámetro String $rmoesno
     * @return Rmoesno
     */
    public function setRmoesno($rmoesno)
    {
        $this->rmoesno = (String) $rmoesno;
        return $this;
    }

    /**
     * Get rmoesno
     *
     * @return null|String
     */
    public function getRmoesno()
    {
        return $this->rmoesno;
    }

    /**
     * Set rmonomb
     *
     * Nombre de la Extensión
     *
     * @parámetro String $rmonomb
     * @return Rmonomb
     */
    public function setRmonomb($rmonomb)
    {
        $this->rmonomb = (String) $rmonomb;
        return $this;
    }

    /**
     * Get rmonomb
     *
     * @return null|String
     */
    public function getRmonomb()
    {
        return $this->rmonomb;
    }

    /**
     * Set rmoordi
     *
     * Ordinal de la Extensión
     *
     * @parámetro Integer $rmoordi
     * @return Rmoordi
     */
    public function setRmoordi($rmoordi)
    {
        $this->rmoordi = (Integer) $rmoordi;
        return $this;
    }

    /**
     * Get rmoordi
     *
     * @return null|Integer
     */
    public function getRmoordi()
    {
        return $this->rmoordi;
    }

    /**
     * Set rmonive
     *
     * Nivel de la Extensión
     *
     * @parámetro Integer $rmonive
     * @return Rmonive
     */
    public function setRmonive($rmonive)
    {
        $this->rmonive = (Integer) $rmonive;
        return $this;
    }

    /**
     * Get rmonive
     *
     * @return null|Integer
     */
    public function getRmonive()
    {
        return $this->rmonive;
    }

    /**
     * Set rmoulni
     *
     * Bandera de Último Nivel
     *
     * @parámetro Integer $rmoulni
     * @return Rmoulni
     */
    public function setRmoulni($rmoulni)
    {
        $this->rmoulni = (Integer) $rmoulni;
        return $this;
    }

    /**
     * Get rmoulni
     *
     * @return null|Integer
     */
    public function getRmoulni()
    {
        return $this->rmoulni;
    }

    /**
     * Set rmodepu
     *
     * Modo de Depurar
     *
     * @parámetro Integer $rmodepu
     * @return Rmodepu
     */
    public function setRmodepu($rmodepu)
    {
        $this->rmodepu = (Integer) $rmodepu;
        return $this;
    }

    /**
     * Get rmodepu
     *
     * @return null|Integer
     */
    public function getRmodepu()
    {
        return $this->rmodepu;
    }

    /**
     * Set rmoparm
     *
     * Parámetros adicionales del Módulo
     *
     * @parámetro String $rmoparm
     * @return Rmoparm
     */
    public function setRmoparm($rmoparm)
    {
        $this->rmoparm = (String) $rmoparm;
        return $this;
    }

    /**
     * Get rmoparm
     *
     * @return null|String
     */
    public function getRmoparm()
    {
        return $this->rmoparm;
    }

    /**
     * Set rmodeex
     *
     * Descripción de la Extensión
     *
     * @parámetro String $rmodeex
     * @return Rmodeex
     */
    public function setRmodeex($rmodeex)
    {
        $this->rmodeex = (String) $rmodeex;
        return $this;
    }

    /**
     * Get rmodeex
     *
     * @return null|String
     */
    public function getRmodeex()
    {
        return $this->rmodeex;
    }

    /**
     * Set rmoorde
     *
     * Orden específico del Módulo
     *
     * @parámetro Integer $rmoorde
     * @return Rmoorde
     */
    public function setRmoorde($rmoorde)
    {
        $this->rmoorde = (Integer) $rmoorde;
        return $this;
    }

    /**
     * Get rmoorde
     *
     * @return null|Integer
     */
    public function getRmoorde()
    {
        return $this->rmoorde;
    }

    /**
     * Set rmoesta
     *
     * Estado del Módulo
     *
     * @parámetro Integer $rmoesta
     * @return Rmoesta
     */
    public function setRmoesta($rmoesta)
    {
        $this->rmoesta = (Integer) $rmoesta;
        return $this;
    }

    /**
     * Get rmoesta
     *
     * @return null|Integer
     */
    public function getRmoesta()
    {
        return $this->rmoesta;
    }

    /**
     * Set rmousuc
     *
     * Usuario de creación
     *
     * @parámetro String $rmousuc
     * @return Rmousuc
     */
    public function setRmousuc($rmousuc)
    {
        $this->rmousuc = (String) $rmousuc;
        return $this;
    }

    /**
     * Get rmousuc
     *
     * @return null|String
     */
    public function getRmousuc()
    {
        return $this->rmousuc;
    }

    /**
     * Set rmofecc
     *
     * Fecha de creación
     *
     * @parámetro Date $rmofecc
     * @return Rmofecc
     */
    public function setRmofecc($rmofecc)
    {
        $this->rmofecc = (String) $rmofecc;
        return $this;
    }

    /**
     * Get rmofecc
     *
     * @return null|Date
     */
    public function getRmofecc()
    {
        return $this->rmofecc;
    }

    /**
     * Set rmousum
     *
     * Usuario de modificación
     *
     * @parámetro String $rmousum
     * @return Rmousum
     */
    public function setRmousum($rmousum)
    {
        $this->rmousum = (String) $rmousum;
        return $this;
    }

    /**
     * Get rmousum
     *
     * @return null|String
     */
    public function getRmousum()
    {
        return $this->rmousum;
    }

    /**
     * Set rmofecm
     *
     * Fecha de modificación
     *
     * @parámetro Date $rmofecm
     * @return Rmofecm
     */
    public function setRmofecm($rmofecm)
    {
        $this->rmofecm = (String) $rmofecm;
        return $this;
    }

    /**
     * Get rmofecm
     *
     * @return null|Date
     */
    public function getRmofecm()
    {
        return $this->rmofecm;
    }

    /**
     * Set rmotask
     *
     * Tipo de tarea ejecutada
     *
     * @parámetro String $rmotask
     * @return Rmotask
     */
    public function setRmotask($rmotask)
    {
        $this->rmotask = (String) $rmotask;
        return $this;
    }

    /**
     * Get rmotask
     *
     * @return null|String
     */
    public function getRmotask()
    {
        return $this->rmotask;
    }

    /**
     * Set rmopara
     *
     * Bandera de borrado
     *
     * @parámetro Integer $rmopara
     * @return Rmopara
     */
    public function setRmopara($rmopara)
    {
        $this->rmopara = (Integer) $rmopara;
        return $this;
    }

    /**
     * Get rmopara
     *
     * @return null|Integer
     */
    public function getRmopara()
    {
        return $this->rmopara;
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

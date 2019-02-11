<?php

/**
 * Model of the Trusua table
 *
 * It is used to convert the   Trusua entity into an object.
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       Trusua
 * @package Seguridad
 * @subpackage Entity
 */

namespace Seguridad\Entity;

class Trusua
    {

    /**
     * @var Integer
     * Required field
     * Field hidden in the form or handled internally
     * Estos datos se ingresan en la Opción: Usuarios del Sistema
     */
    protected $russecu;

    /**
     * @var Integer
     * Required field
     * Field hidden in the form or handled internally
     * Estos datos se ingresan en la Opción: Perfiles de Usuarios
     */
    protected $rpesecu;

    /**
     * @var String
     * Required field
     * Field visible in the form
     * Nombre de Usuario
     */
    protected $rusucod;

    /**
     * @var String
     * Required field
     * Field visible in the form
     * Clave de Usuario
     */
    protected $rusucve;

    /**
     * @var String
     * Required field
     * Field visible in the form
     * Nombre de Usuario
     */
    protected $rusunom;

    /**
     * @var String
     * Required field
     * Field visible in the form
     * E-mail del Usuario
     */
    protected $rusumai;

    /**
     * @var Integer
     * Required field
     * Field visible in the form
     * Estado del Usuario
     */
    protected $rusuest;

    /**
     * @var Date
     * Required field
     * Field visible in the form
     * Fecha de Registro del Usuario
     */
    protected $rusufec;

    /**
     * @var Date
     * Required field
     * Field visible in the form
     * Fecha Caducidad del Usuario
     */
    protected $rusucad;

    /**
     * @var String
     * Optional field
     * Field hidden in the form or handled internally
     * Usuario de creación
     */
    protected $rususuc;

    /**
     * @var Date
     * Optional field
     * Field hidden in the form or handled internally
     * Fecha de creación
     */
    protected $rusfecc;

    /**
     * @var String
     * Required field
     * Field hidden in the form or handled internally
     * Usuario de modificación
     */
    protected $rususum;

    /**
     * @var Date
     * Required field
     * Field hidden in the form or handled internally
     * Fecha de modificación
     */
    protected $rusfecm;

    /**
     * @var String
     * Required field
     * Field hidden in the form or handled internally
     * Tipo de tarea ejecutada
     */
    protected $rustask;

    /**
     * @var Integer
     * Required field
     * Field hidden in the form or handled internally
     * Bandera de borrado
     */
    protected $ruspara;

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
     * Name of the table: trusua
     * 
     */
    const TABLE = "trusua";

    /**
     * Primary key
     */
    const PKEY = "russecu";

    /**
     * Sequence
     */
    const SEQUENCE = 'seguridad"."trusua_russecu_seq';

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
            throw new \Exception('Class Entity: Trusua Invalid specified property: set' . $name);
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
            throw new \Exception('Clase Entity: Trusua. Invalid specified property: get' . $name);
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
     * Set russecu
     *
     * Estos datos se ingresan en la Opción: Usuarios del Sistema
     *
     * @parámetro Integer $russecu
     * @return Russecu
     */
    public function setRussecu($russecu)
    {
        $this->russecu = (Integer) $russecu;
        return $this;
    }

    /**
     * Get russecu
     *
     * @return null|Integer
     */
    public function getRussecu()
    {
        return $this->russecu;
    }

    /**
     * Set rpesecu
     *
     * Estos datos se ingresan en la Opción: Perfiles de Usuarios
     *
     * @parámetro Integer $rpesecu
     * @return Rpesecu
     */
    public function setRpesecu($rpesecu)
    {
        $this->rpesecu = (Integer) $rpesecu;
        return $this;
    }

    /**
     * Get rpesecu
     *
     * @return null|Integer
     */
    public function getRpesecu()
    {
        return $this->rpesecu;
    }

    /**
     * Set rusucod
     *
     * Nombre de Usuario
     *
     * @parámetro String $rusucod
     * @return Rusucod
     */
    public function setRusucod($rusucod)
    {
        $this->rusucod = (String) $rusucod;
        return $this;
    }

    /**
     * Get rusucod
     *
     * @return null|String
     */
    public function getRusucod()
    {
        return $this->rusucod;
    }

    /**
     * Set rusucve
     *
     * Clave de Usuario
     *
     * @parámetro String $rusucve
     * @return Rusucve
     */
    public function setRusucve($rusucve)
    {
        $this->rusucve = (String) $rusucve;
        return $this;
    }

    /**
     * Get rusucve
     *
     * @return null|String
     */
    public function getRusucve()
    {
        return $this->rusucve;
    }

    /**
     * Set rusunom
     *
     * Nombre de Usuario
     *
     * @parámetro String $rusunom
     * @return Rusunom
     */
    public function setRusunom($rusunom)
    {
        $this->rusunom = (String) $rusunom;
        return $this;
    }

    /**
     * Get rusunom
     *
     * @return null|String
     */
    public function getRusunom()
    {
        return $this->rusunom;
    }

    /**
     * Set rusumai
     *
     * E-mail del Usuario
     *
     * @parámetro String $rusumai
     * @return Rusumai
     */
    public function setRusumai($rusumai)
    {
        $this->rusumai = (String) $rusumai;
        return $this;
    }

    /**
     * Get rusumai
     *
     * @return null|String
     */
    public function getRusumai()
    {
        return $this->rusumai;
    }

    /**
     * Set rusuest
     *
     * Estado del Usuario
     *
     * @parámetro Integer $rusuest
     * @return Rusuest
     */
    public function setRusuest($rusuest)
    {
        $this->rusuest = (Integer) $rusuest;
        return $this;
    }

    /**
     * Get rusuest
     *
     * @return null|Integer
     */
    public function getRusuest()
    {
        return $this->rusuest;
    }

    /**
     * Set rusufec
     *
     * Fecha de Registro del Usuario
     *
     * @parámetro Date $rusufec
     * @return Rusufec
     */
    public function setRusufec($rusufec)
    {
        $this->rusufec = (String) $rusufec;
        return $this;
    }

    /**
     * Get rusufec
     *
     * @return null|Date
     */
    public function getRusufec()
    {
        return $this->rusufec;
    }

    /**
     * Set rusucad
     *
     * Fecha Caducidad del Usuario
     *
     * @parámetro Date $rusucad
     * @return Rusucad
     */
    public function setRusucad($rusucad)
    {
        $this->rusucad = (String) $rusucad;
        return $this;
    }

    /**
     * Get rusucad
     *
     * @return null|Date
     */
    public function getRusucad()
    {
        return $this->rusucad;
    }

    /**
     * Set rususuc
     *
     * Usuario de creación
     *
     * @parámetro String $rususuc
     * @return Rususuc
     */
    public function setRususuc($rususuc)
    {
        $this->rususuc = (String) $rususuc;
        return $this;
    }

    /**
     * Get rususuc
     *
     * @return null|String
     */
    public function getRususuc()
    {
        return $this->rususuc;
    }

    /**
     * Set rusfecc
     *
     * Fecha de creación
     *
     * @parámetro Date $rusfecc
     * @return Rusfecc
     */
    public function setRusfecc($rusfecc)
    {
        $this->rusfecc = (String) $rusfecc;
        return $this;
    }

    /**
     * Get rusfecc
     *
     * @return null|Date
     */
    public function getRusfecc()
    {
        return $this->rusfecc;
    }

    /**
     * Set rususum
     *
     * Usuario de modificación
     *
     * @parámetro String $rususum
     * @return Rususum
     */
    public function setRususum($rususum)
    {
        $this->rususum = (String) $rususum;
        return $this;
    }

    /**
     * Get rususum
     *
     * @return null|String
     */
    public function getRususum()
    {
        return $this->rususum;
    }

    /**
     * Set rusfecm
     *
     * Fecha de modificación
     *
     * @parámetro Date $rusfecm
     * @return Rusfecm
     */
    public function setRusfecm($rusfecm)
    {
        $this->rusfecm = (String) $rusfecm;
        return $this;
    }

    /**
     * Get rusfecm
     *
     * @return null|Date
     */
    public function getRusfecm()
    {
        return $this->rusfecm;
    }

    /**
     * Set rustask
     *
     * Tipo de tarea ejecutada
     *
     * @parámetro String $rustask
     * @return Rustask
     */
    public function setRustask($rustask)
    {
        $this->rustask = (String) $rustask;
        return $this;
    }

    /**
     * Get rustask
     *
     * @return null|String
     */
    public function getRustask()
    {
        return $this->rustask;
    }

    /**
     * Set ruspara
     *
     * Bandera de borrado
     *
     * @parámetro Integer $ruspara
     * @return Ruspara
     */
    public function setRuspara($ruspara)
    {
        $this->ruspara = (Integer) $ruspara;
        return $this;
    }

    /**
     * Get ruspara
     *
     * @return null|Integer
     */
    public function getRuspara()
    {
        return $this->ruspara;
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

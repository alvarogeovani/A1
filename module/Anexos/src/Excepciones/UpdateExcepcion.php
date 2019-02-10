<?php

/**
 * Excepción que representa un error en la lógica del programa al Actualizar un registro. Este tipo de
 * excepción debe conducir directamente a una corrección del problema.
 *
 * @author DATASTAR
 * @uses     ActualizarExcepcion
 * @package Clases
 * @subpackage Excepciones
 */
namespace Seguridad\Excepciones;

/**
 * echo "<br>getCode"; print_r($ex->getCode());
 * echo "<br>getFile"; print_r($ex->getFile());
 * echo "<br>getLine"; print_r($ex->getLine());
 * echo "<br>getMessage"; print_r($ex->getMessage());
 * echo "<br>getPrevious"; print_r($ex->getPrevious());
 * echo "<br>getTrace"; print_r($ex->getTrace());
 * echo "<br>getTraceAsString"; print_r($ex->getTraceAsString());
 */
class UpdateExcepcion extends \RuntimeException
{

    protected $message;

    protected $code;

    protected $file;

    protected $line;

    public $errorInfo;

    public function __construct($ex, $datos = null, $wehre = null, $code = null, $previous = null)
    {
        $this->message = "Existe un error al actualizar el registro, revise los siguientes datos :" . json_encode($datos) . " WHERE = " . $wehre . " Mensaje  previo: " . $ex->getMessage();
    }
}

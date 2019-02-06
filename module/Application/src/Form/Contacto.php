<?php

namespace Application\Form;

use Zend\Captcha\AdapterInterface as CaptchaAdapter;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Captcha;

/**
 * Description of Contacto
 *
 * @author Andres
 */
class Contacto extends Form {

    protected $captcha;

    public function __construct($name = null) {
        parent::__construct($name);

        $this->add([
            'name' => 'nombre',
            'type' => Element\Text::class,
            'attributes' => [
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Nombre Completo',
                'label_attributes' => [
                    'class' => 'col-sm-2 control-label',
                ],
            ],
        ]);

        $this->add([
            'name' => 'email',
            'type' => Element\Email::class,
            'attributes' => [
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Email',
                'label_attributes' => [
                    'class' => 'col-sm-2 control-label',
                ],
            ],
        ]);

        $this->add([
            'name' => 'genero',
            'type' => Element\Radio::class,
            'attributes' => [
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Genero',
                'label_attributes' => [
                    'class' => 'col-sm-2 control-label',
                ],
                'value_options' => [
                    'H' => 'Hombre',
                    'M' => 'Mujer',
                ],
            ],
        ]);

        $this->add([
            'name' => 'area',
            'type' => Element\Select::class,
            'attributes' => [
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Contactar a',
                'empty_option' => 'Seleccione un departamento =>',
                'label_attributes' => [
                    'class' => 'col-sm-2 control-label',
                ],
                'value_options' => [
                    'Soporte' => 'Soporte',
                    'Ventas' => 'Ventas',
                    'Ingeniería' => 'Ingeniería',
                    'Compras' => 'Compras',
                ],
            ],
        ]);

        $this->add([
            'name' => 'tema',
            'type' => Element\Text::class,
            'attributes' => [
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Tema',
                'label_attributes' => [
                    'class' => 'col-sm-2 control-label',
                ],
            ],
        ]);

        $this->add([
            'name' => 'mensaje',
            'type' => Element\Textarea::class,
            'attributes' => [
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Mensaje',
                'label_attributes' => [
                    'class' => 'col-sm-2 control-label',
                ],
            ],
        ]);

        $this->add([
            'name' => 'captcha',
            'type' => Element\Captcha::class,
            'attributes' => [
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Código de verificación',
                'label_attributes' => [
                    'class' => 'col-sm-2 control-label',
                ],
                'captcha' => $this->getCaptcha(),
            ],
        ]);

        $this->add([
            'name' => 'send',
            'type' => Element\Submit::class,
            'attributes' => [
                'value' => 'Enviar',
                'class' => 'btn btn-primary',
            ],
        ]);

        $this->add(new Element\Csrf('csrf_token'));
    }

    public function setCaptcha(CaptchaAdapter $captcha) {
        $this->captcha = $captcha;
    }

    public function getCaptcha() {
        if ($this->captcha === null) {
            $this->captcha = new Captcha\Dumb();
            $this->captcha->setLabel("Por favor, ingrese la palabra al revés");
        }
        return $this->captcha;
    }

}

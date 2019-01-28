<?php

namespace Application\Form;

use Zend\InputFilter\InputFilter;

/**
 * Description of ContactoValidator
 *
 * @author Andres
 */
class ContactoValidator extends InputFilter {

    public function __construct() {

        $this->add([
            'name' => 'nombre',
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
            'validators' => [
                [
                    'name' => 'StringLength',
                    'options' => [
                        'min' => 4,
                        'max' => 14,
                    ],
                ],
                [
                    'name' => 'Alnum',
                    'options' => [
                        'allowWhiteSpace' => true,
                    ],
                ],
            ],
        ]);

        $this->add([
            'name' => 'email',
            'validators' => [
                [
                    'name' => 'EmailAddress',
                ],
            ],
        ]);

        $this->add([
            'required' => false,
            'name' => 'genero',
        ]);

        $this->add([
            'required' => false,
            'name' => 'area',
        ]);

        $this->add([
            'required' => false,
            'name' => 'tema',
            'validators' => [
                [
                    'name' => 'Alnum',
                    'options' => [
                        'allowWhiteSpace' => true,
                    ],
                ],
            ],
        ]);

        $this->add([
            'name' => 'mensaje',
            'validators' => [
                [
                    'name' => 'Alnum',
                    'options' => [
                        'allowWhiteSpace' => true,
                    ],
                ],
            ],
        ]);
    }

}

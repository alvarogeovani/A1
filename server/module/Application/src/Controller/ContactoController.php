<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\Contacto as ContactoForm;
use Application\Form\ContactoValidator;

class ContactoController extends AbstractActionController {

    public function indexAction() {
        return $this->forward()->dispatch(ContactoController::class, ['action' => 'form']);
    }

    public function formAction() {
        $form = new ContactoForm("contacto");
        return ['form' => $form, 'titulo' => 'Formularios con ZF3'];
    }

    public function resultadoAction() {

        $form = new ContactoForm("contacto");
        $form->setInputFilter(new ContactoValidator());

        // Obtenemos los datos desde el Formulario con POST data:
        $data = $this->request->getPost();

        $form->setData($data);

        // Validando el form
        if ($form->isValid()) {
            $contacto = $form->getData();
            // success!
            return new ViewModel([
                'form' => $form,
                'contacto' => $contacto,
                'titulo' => 'Sus datos enviado son los siguientes:',]);
        } else {
            // failure!
            $modelView = new ViewModel(['form' => $form, 'titulo' => 'Formulario con Errores']);
            $modelView->setTemplate('application/contacto/form');
            return $modelView;
        }
    }

}

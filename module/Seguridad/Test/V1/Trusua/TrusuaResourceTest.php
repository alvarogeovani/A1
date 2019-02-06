<?php

namespace SeguridadTest\Resource;

use Seguridad\Repository\ITrusuaRepository;
use Seguridad\Entity\Trusua;
use Prophecy\Argument;
use Zend\ServiceManager\ServiceManager;
use Seguridad\V1\Rest\Trusua\TrusuaResource;
use Zend\Stdlib\ArrayUtils;
use Zend\Test\PHPUnit\Controller\AbstractControllerTestCase;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use Zend\EventManager\EventManager;
use Zend\Test\PHPUnit\Controller\AbstractConsoleControllerTestCase;

class TrusuaResourceTest extends AbstractConsoleControllerTestCase {

    protected $traceError = true;
    protected $table;

    protected function configureServiceManager(ServiceManager $services) {
        $services->setAllowOverride(true);

        $services->setService('config', $this->updateConfig($services->get('config')));
        $services->setService(ITrusuaRepository::class, $this->mockTrusuaTable()->reveal());

        $services->setAllowOverride(false);
    }

    protected function updateConfig($config) {
        $config['db'] = [''];
        return $config;
    }

    protected function mockTrusuaTable() {
        $this->table = $this->prophesize(ITrusuaRepository::class);
        return $this->table;
    }

    public function setUp() {
        $configOverrides = [];
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');

        $this->setApplicationConfig(ArrayUtils::merge(
                        include __DIR__ . '/../../../../../config/application.config.php', $configOverrides
        ));

        parent::setUp();

        $this->configureServiceManager($this->getApplicationServiceLocator());
    }

    public function testCreate() {
        $this->setUseConsoleRequest(false);
        $postData = [
            'russecu' => '',
            'rpesecu' => '1',
            'rusucod' => 'alvaro2',
            'rusucve' => '123456',
            'rusunom' => 'Alvaro Sanchez',
            'rusumai' => 'alvaro.sanchez@atijaguar.com',
            'rusuest' => '1 ',
        ];
        $this->dispatch('/trusua/create', 'POST', $postData);

        $jsonToCompare = [
            "status" => true,
            'id' => 2,
            "message" => "The item was created successfully"
        ];
        
        $this->assertJsonStringEqualsJsonString($this->getResponse()->getContent(), json_encode($jsonToCompare));
        
        //
       // $this->assertResponseStatusCode(201);
        // $this->assertJsonStringEqualsJsonString($this->getResponse()->getContent(), json_encode($jsonToCompare));
        //$this->assertResponseStatusCode(201);
//        $this->table->save(Argument::type('object'))->shouldBeCalled();
//        $this->assertJsonStringEqualsJsonString($this->getResponse()->getContent(), json_encode($jsonToCompare));
//        $postData = [
//            'russecu' => '',
//            'rpesecu' => '1',
//            'rusucod' => 'alvaro ',
//	    'rusucve'=> '123456',
//	    'rusunom' => 'Alvaro Sanchez',
//            'rusumai' => 'alvaro.sanchez@atijaguar.com',
//            'rusuest' => '1 ',
//        ];
        //  $this->dispatch('/trusua/create', 'POST', $postData);
//        $this->assertResponseStatusCode(302);
//        $this->assertRedirectTo('/album');
    }

}

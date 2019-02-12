<?php
namespace SeguridadTest\Entity;

use Seguridad\Entity\Trusua;
use PHPUnit\Framework\TestCase;

class TrusuaTest extends TestCase
    {

    /**
     * Test Initial 
     */
    public function testInitial()
    {
        $trusua = new Trusua();
        $this->assertNull($trusua->getRussecu(), '"russecu" should be null by default');
        $this->assertNull($trusua->getRpesecu(), '"rpesecu" should be null by default');
        $this->assertNull($trusua->getRusucod(), '"rusucod" should be null by default');
        $this->assertNull($trusua->getRusucve(), '"rusucve" should be null by default');
        $this->assertNull($trusua->getRusunom(), '"rusunom" should be null by default');
        $this->assertNull($trusua->getRusumai(), '"rusumai" should be null by default');
        $this->assertNull($trusua->getRusuest(), '"rusuest" should be null by default');
        $this->assertNull($trusua->getRusufec(), '"rusufec" should be null by default');
        $this->assertNull($trusua->getRusucad(), '"rusucad" should be null by default');
        $this->assertNull($trusua->getRususuc(), '"rususuc" should be null by default');
        $this->assertNull($trusua->getRusfecc(), '"rusfecc" should be null by default');
        $this->assertNull($trusua->getRususum(), '"rususum" should be null by default');
        $this->assertNull($trusua->getRusfecm(), '"rusfecm" should be null by default');
        $this->assertNull($trusua->getRustask(), '"rustask" should be null by default');
        $this->assertNull($trusua->getRuspara(), '"ruspara" should be null by default');
        
        //Las siguientes constantes deben tener un valor
        $this->assertNotNull(Trusua::SCHEMA,'"Class Trusua:SCHEMA" must be configured with the primary key of the entity');
        $this->assertNotNull(Trusua::TABLE,'"Class Trusua:TABLE" must be configured with the primary key of the entity');
        $this->assertNotNull(Trusua::PKEY,'"Class Trusua:PKEY" must be configured with the primary key of the entity');
        $this->assertNotNull(Trusua::SEQUENCE,'"Class Trusua:SEQUENCE" must be configured with the primary key of the entity');
        
        $this->assertNotEmpty(Trusua::SCHEMA,'"Class Trusua:SCHEMA" must be configured with the primary key of the entity');
        $this->assertNotEmpty(Trusua::TABLE,'"Class Trusua:TABLE" must be configured with the primary key of the entity');
        $this->assertNotEmpty(Trusua::PKEY,'"Class Trusua:PKEY" must be configured with the primary key of the entity');
        $this->assertNotEmpty(Trusua::SEQUENCE,'"Class Trusua:SEQUENCE" must be configured with the primary key of the entity');
    }

    /**
     * testExchangeArraySetsPropertiesCorrectly
     */
    public function testExchangeArray()
    {
        $trusua = new Trusua();
        $data = [
            'russecu' => 99999,
            'rpesecu' => 1,
            'rusucod' => 'coigo',
            'rusucve' => '98$Hk0?ff85!',
            'rusunom' => 'Nombre de usuario de prueba',
            'rusumai' => 'email_prueba@prueba.com',
            'rusuest' => 1,
            'rusufec' => '1900/01/01',
            'rusucad' => '1901/01/01-',
            'rususuc' => 'admin',
            'rusfecc' => '1900/01/01',
            'rususum' => 'admin',
            'rusfecm' => '1900/01/01',
            'rustask' => 'I',
            'ruspara' => 1
        ];
        $trusua->exchangeArray($data);
        $this->assertSame(
                $data['russecu'], $trusua->getRussecu(), '"PK" was not set correctly'
        );
        $this->assertSame(
                $data['rpesecu'], $trusua->getRpesecu(), '"FK" was not set correctly'
        );
        $this->assertSame(
                $data['rusucod'], $trusua->getRusucod(), '"Nombre de Usuario" was not set correctly'
        );
        $this->assertSame(
                $data['rusucve'], $trusua->getRusucve(), '"Clave de Usuario" was not set correctly'
        );
        $this->assertSame(
                $data['rusunom'], $trusua->getRusunom(), '"Nombre de Usuario" was not set correctly'
        );
        $this->assertSame(
                $data['rusumai'], $trusua->getRusumai(), '"E-mail del Usuario" was not set correctly'
        );
        $this->assertSame(
                $data['rusuest'], $trusua->getRusuest(), '"Estado del Usuario" was not set correctly'
        );
        $this->assertSame(
                $data['rusufec'], $trusua->getRusufec(), '"Fecha de Registro del Usuario" was not set correctly'
        );
        $this->assertSame(
                $data['rusucad'], $trusua->getRusucad(), '"Fecha Caducidad del Usuario" was not set correctly'
        );
        $this->assertSame(
                $data['rususuc'], $trusua->getRususuc(), '"Usuario de Creación" was not set correctly'
        );
        $this->assertSame(
                $data['rusfecc'], $trusua->getRusfecc(), '"Fecha de Creación" was not set correctly'
        );

        $this->assertSame(
                $data['rususum'], $trusua->getRususum(), '"Usuario de Modificación" was not set correctly'
        );
        $this->assertSame(
                $data['rusfecm'], $trusua->getRusfecm(), '"Fecha de Modificación" was not set correctly'
        );
        $this->assertSame(
                $data['rustask'], $trusua->getRustask(), '"Tipo de Tarea Ejecutada" was not set correctly'
        );
        $this->assertSame(
                $data['ruspara'], $trusua->getRuspara(), '"Bandera de Borrado" was not set correctly'
        );
    }

   
    /**
     * testGetArrayCopyReturnsAnArrayWithPropertyValues
     */
    public function testGetArrayCopy()
    {
        $trusua = new Trusua();
        $data = [
            'russecu' => 99999,
            'rpesecu' => 1,
            'rusucod' => 'coigo',
            'rusucve' => '98$Hk0?ff85!',
            'rusunom' => 'Nombre de usuario de prueba',
            'rusumai' => 'email_prueba@prueba.com',
            'rusuest' => 1,
            'rusufec' => '1900/01/01',
            'rusucad' => '1901/01/01-',
            'rususuc' => 'admin',
            'rusfecc' => '1900/01/01',
            'rususum' => 'admin',
            'rusfecm' => '1900/01/01',
            'rustask' => 'I',
            'ruspara' => 1
        ];

        $trusua->exchangeArray($data);
        $copyArray = $trusua->getArrayCopy();

        $this->assertSame($data['russecu'], $copyArray['russecu'], '"russecu" was not set correctly');
        $this->assertSame($data['rpesecu'], $copyArray['rpesecu'], '"rpesecu" was not set correctly');
        $this->assertSame($data['rusucod'], $copyArray['rusucod'], '"rusucod" was not set correctly');
        $this->assertSame($data['rusucve'], $copyArray['rusucve'], '"rusucve" was not set correctly');
        $this->assertSame($data['rusunom'], $copyArray['rusunom'], '"rusunom" was not set correctly');
        $this->assertSame($data['rusumai'], $copyArray['rusumai'], '"rusumai" was not set correctly');
        $this->assertSame($data['rusuest'], $copyArray['rusuest'], '"rusuest" was not set correctly');
        $this->assertSame($data['rusufec'], $copyArray['rusufec'], '"rusufec" was not set correctly');
        $this->assertSame($data['rusucad'], $copyArray['rusucad'], '"rusucad" was not set correctly');
        $this->assertSame($data['rususuc'], $copyArray['rususuc'], '"rususuc" was not set correctly');
        $this->assertSame($data['rusfecc'], $copyArray['rusfecc'], '"rusfecc" was not set correctly');
        $this->assertSame($data['rususum'], $copyArray['rususum'], '"rususum" was not set correctly');
        $this->assertSame($data['rusfecm'], $copyArray['rusfecm'], '"rusfecm" was not set correctly');
        $this->assertSame($data['rustask'], $copyArray['rustask'], '"rustask" was not set correctly');
        $this->assertSame($data['ruspara'], $copyArray['ruspara'], '"ruspara" was not set correctly');
    }

    

    }

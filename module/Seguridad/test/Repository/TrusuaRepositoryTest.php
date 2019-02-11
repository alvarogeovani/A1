<?php

namespace SeguridadTest\Repository;

use Seguridad\Entity\Trusua;
use Seguridad\Repository\Impl\TrusuaRepository;
use Seguridad\Repository\ITrusuaRepository;
use Seguridad\Core\BaseRepository;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use Zend\Db\Adapter\AdapterInterface;
use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\ResultSetInterface;
use Zend\Db\TableGateway\TableGatewayInterface;
use Prophecy\Argument;

class TrusuaRepositoryTest extends TestCase
    {

    private $mapper = null;
    private $tableGateway = null;

    protected function setUp()
    {
        $t =$this->prophesize(Trusua::class);
        $t2 =$this->prophesize(AdapterInterface::class);
       $c= new Prophecy\Doubler\LazyDouble();
        $this->tableGateway = $this->prophesize(BaseRepository::class)->__construct(Argument::any(),Argument::any());
        
       // $this->mapper = $this->prophesize(TrusuaRepository::class);
        
        $this->mapper = new TrusuaRepository($this->tableGateway->reveal());
    }

    /**
     * testFetchAllReturnsAll 
     */
    public function testFetchAll()
    {
        $resultSet = $this->prophesize(ResultSetInterface::class)->reveal();
        $this->tableGateway->select()->willReturn($resultSet);

        $this->assertSame($resultSet, $this->mapper->fetchAll());
    }

    }

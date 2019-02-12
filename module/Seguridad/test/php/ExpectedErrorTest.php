<?php

namespace SeguridadTest\Entity;

use PHPUnit\Framework\TestCase;

class ExpectedErrorTest extends TestCase
    {

    /**
     * Esperar un error de PHP usando @expectedException
     * @expectedException PHPUnit\Framework\Error\Error
     */
    public function testFailingInclude()
    {
        include 'not_existing_file.php';
    }

    public function testFileWriting()
    {
        $writer = new FileWriter;
        $this->assertFalse(@$writer->write('/is-not-writeable/file', 'stuff'));
    }

    }
    
    

class FileWriter
    {

    public function write($file, $content)
    {
        $file = fopen($file, 'w');
        if ($file == false)
        {
            return false;
        }
// ...
    }

    }

<?php

class CpfTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeValid()
    {
        $cpf = new \TaxDocument\Cpf();

        $this->assertFalse(false, $cpf->isValid('test'));
        $this->assertNotTrue(false, $cpf->isValid('test2'));
        $this->assertTrue(true, $cpf->isValid('808080822'));
        $this->assertTrue(true, $cpf->isValid('083.055.216-21'));
    }

    public function testCanBeLengthValid()
    {
        $cpf = new \TaxDocument\Cpf();

        $this->assertNotTrue(false, $cpf->isValid('0000011111222223333'));
        $this->assertNotTrue(false, $cpf->isValid('808080822'));
    }
}

<?php

namespace ZFBrasil\ChecksumTest\Service;

use PHPUnit_Framework_TestCase as TestCase;
use ZFBrasil\Checksum\Service\ChecksumService;
use Exception;

class ChecksumServiceTest extends TestCase
{
    protected function setUp()
    {
        $this->checksumService = new ChecksumService();
        parent::setUp();
    }

    public function testInputLengthGreaterThanMultiplier()
    {
        $this->setExpectedException(Exception::class);
        $this->checksumService->calculate('12', 1);
    }

    public function testChecksum1()
    {
        $checksum = $this->checksumService->calculate('1');
        $this->assertEquals(2, $checksum);
    }

    public function testChecksum2()
    {
        $checksum = $this->checksumService->calculate('2');
        $this->assertEquals(4, $checksum);
    }

    public function testChecksum3()
    {
        $checksum = $this->checksumService->calculate('3');
        $this->assertEquals(6, $checksum);
    }

    public function testChecksum4()
    {
        $checksum = $this->checksumService->calculate('4');
        $this->assertEquals(8, $checksum);
    }

    public function testChecksum5()
    {
        $checksum = $this->checksumService->calculate('5');
        $this->assertEquals(0, $checksum);
    }

    public function testChecksum10()
    {
        $checksum = $this->checksumService->calculate('10');
        $this->assertEquals(2, $checksum);
    }

    public function testChecksum93()
    {
        $checksum = $this->checksumService->calculate('93');
        $this->assertEquals(5, $checksum);
    }

    public function testChecksum3782()
    {
        $checksum = $this->checksumService->calculate('3782');
        $this->assertEquals(3, $checksum);
    }
}

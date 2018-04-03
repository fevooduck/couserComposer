<?php

namespace Felipe\DUCK;

class HelloPackageTest extends \PHPUnit\Framework\TestCase
{
    public function testGetHello()
    {
        $hello = new HelloPackage();
        $string = $hello->getHello();
        $this->assertNotNull($string);
        $this->assertInternalType('string',$string);
        $this->assertNotEquals(0,strlen($string));
    }
}
?>
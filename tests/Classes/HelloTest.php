<?php

namespace Classes;

/**
 * Description of Hello
 *
 * @author eu
 */
class HelloTest extends \PHPUnit_Framework_TestCase
{
    public function testGetHello() {
        $hello = new Hello();
        $string = $hello->getHello();
        $this->assertNotNull($string);
        $this->assertInternalType('string', $string);
        $this->assertNotEquals(0, strlen($string));
   }
}
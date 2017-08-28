<?php

namespace tests\DesignPatterns;

use \PHPUnit\Framework\TestCase;

/**
 * @author patrick
 */
class ASingletonTest extends TestCase
{

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Cannot clone a Singleton
     */
    public function testClone()
    {
        $object = $this->getMockBuilder(\DesignPatterns\ASingleton::class)
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        clone($object);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Cannot sleep a Singleton
     */
    public function testSleep()
    {
        $object = $this->getMockBuilder(\DesignPatterns\ASingleton::class)
                ->disableOriginalConstructor()
                ->getMockForAbstractClass();
        serialize($object);
    }

}

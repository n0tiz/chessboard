<?php

namespace tests\Chessboard;

use PHPUnit\Framework\TestCase;

/**
 * @author patrick
 */
abstract class AChessmanTest extends TestCase
{

    public function testToStringWhite()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $property = new \ReflectionProperty($object, "icons");
        $property->setAccessible(true);
        $property->setValue($object, array(
            \Chessboard\AChessman::COLOUR_WHITE => "i",
            \Chessboard\AChessman::COLOUR_BLACK => "I",
        ));
        $this->assertSame("i", (string) $object);
    }

    public function testToStringBlack()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1")))
            ->getMockForAbstractClass();
        $property = new \ReflectionProperty($object, "icons");
        $property->setAccessible(true);
        $property->setValue($object, array(
            \Chessboard\AChessman::COLOUR_WHITE => "i",
            \Chessboard\AChessman::COLOUR_BLACK => "I",
        ));
        $this->assertSame("I", (string) $object);
    }

    public function testGetIconWhite()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $property = new \ReflectionProperty($object, "icons");
        $property->setAccessible(true);
        $property->setValue($object, array(
            \Chessboard\AChessman::COLOUR_WHITE => "i",
            \Chessboard\AChessman::COLOUR_BLACK => "I",
        ));
        $this->assertSame("i", $object->getIcon());
    }

    public function testGetIconBlack()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1")))
            ->getMockForAbstractClass();
        $property = new \ReflectionProperty($object, "icons");
        $property->setAccessible(true);
        $property->setValue($object, array(
            \Chessboard\AChessman::COLOUR_WHITE => "i",
            \Chessboard\AChessman::COLOUR_BLACK => "I",
        ));
        $this->assertSame("I", $object->getIcon());
    }

    public function testGetFile()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertSame("a", $object->getFile());
    }

    public function testGetRank()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertSame("1", $object->getRank());
    }

    public function testGetCurrentLocation()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertSame(array("a", "1"), $object->getCurrentLocation());
    }

    public function testGetColourWhite()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertSame(\Chessboard\AChessman::COLOUR_WHITE, $object->getColour());
    }

    public function testGetColourBlack()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertSame(\Chessboard\AChessman::COLOUR_BLACK, $object->getColour());
    }

    public function testGetOppositeColourWhite()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertSame(\Chessboard\AChessman::COLOUR_BLACK, $object->getOppositeColour());
    }

    public function testGetOppositeColourBlack()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertSame(\Chessboard\AChessman::COLOUR_WHITE, $object->getOppositeColour());
    }

    public function testIsWhiteTrue()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertTrue($object->isWhite());
    }

    public function testIsWhiteFalse()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertFalse($object->isWhite());
    }

    public function testIsBlackTrue()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertTrue($object->isBlack());
    }

    public function testIsBlackFalse()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertFalse($object->isBlack());
    }

    public function testIsFirstMoveTrue()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertTrue($object->isFirstMove());
    }

    public function testIsFirstMoveFalse()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $object->move(array("a", "2"));
        $this->assertFalse($object->isFirstMove());
    }

    public function testGetPreviousLocationsNone()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $this->assertSame(array(), $object->getPreviousLocations());
    }

    public function testGetPreviousLocationsOne()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $object->move(array("a", "2"));
        $expectedResult = array(
            array("a", "1"),
        );
        $this->assertSame($expectedResult, $object->getPreviousLocations());
    }

    public function testGetPreviousLocationsTwo()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $object->move(array("a", "2"));
        $object->move(array("a", "3"));
        $expectedResult = array(
            array("a", "1"),
            array("a", "2"),
        );
        $this->assertSame($expectedResult, $object->getPreviousLocations());
    }
    
    public function testMove()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1")))
            ->getMockForAbstractClass();
        $object->move(array("a", "2"));
        $this->assertSame(array("a", "2"), $object->getCurrentLocation());
        $this->assertSame(array(array("a", "1")), $object->getPreviousLocations());
    }
    
    public function testGetDiagonalPaths()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("b", "2")))
            ->getMockForAbstractClass();
        $expectedResult = array(
            array(
                array("b", "2"),
                array("c", "3"),
                array("d", "4"),
                array("e", "5"),
                array("f", "6"),
                array("g", "7"),
                array("h", "8"),
            ),
            array(
                array("b", "2"),
                array("a", "3"),
            ),
            array(
                array("b", "2"),
                array("a", "1"),
            ),
            array(
                array("b", "2"),
                array("c", "1"),
            ),
        );
        $this->assertSame($expectedResult, $object->getDiagonalPaths());
    }
    
    public function testGetHorizontalPaths()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("b", "2")))
            ->getMockForAbstractClass();
        $expectedResult = array(
            array(
                array("b", "2"),
                array("a", "2"),
            ),
            array(
                array("b", "2"),
                array("c", "2"),
                array("d", "2"),
                array("e", "2"),
                array("f", "2"),
                array("g", "2"),
                array("h", "2"),
            ),
        );
        $this->assertSame($expectedResult, $object->getHorizontalPaths());
    }
    
    public function testGetVerticalPaths()
    {
        $object = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, array("b", "2")))
            ->getMockForAbstractClass();
        $expectedResult = array(
            array(
                array("b", "2"),
                array("b", "1"),
            ),
            array(
                array("b", "2"),
                array("b", "3"),
                array("b", "4"),
                array("b", "5"),
                array("b", "6"),
                array("b", "7"),
                array("b", "8"),
            ),
        );
        $this->assertSame($expectedResult, $object->getVerticalPaths());
    }
}

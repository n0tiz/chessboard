<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class KnightTest extends AChessmanTest
{

    public function testGetIconWhite()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("n", $object->getIcon());
    }

    public function testGetIconBlack()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("N", $object->getIcon());
    }

    public function testToStringWhite()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("n", (string) $object);
    }

    public function testToStringBlack()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("N", (string) $object);
    }

    public function testGetPossiblePaths1()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("e", "5"));
        $expectedResult = array(
            array(
                array("e", "5"),
                array("f", "3"),
            ),
            array(
                array("e", "5"),
                array("g", "4"),
            ),
            array(
                array("e", "5"),
                array("g", "6"),
            ),
            array(
                array("e", "5"),
                array("f", "7"),
            ),
            array(
                array("e", "5"),
                array("d", "7"),
            ),
            array(
                array("e", "5"),
                array("c", "6"),
            ),
            array(
                array("e", "5"),
                array("c", "4"),
            ),
            array(
                array("e", "5"),
                array("d", "3"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePaths2()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("b", "8"));
        $expectedResult = array(
            array(
                array("b", "8"),
                array("c", "6"),
            ),
            array(
                array("b", "8"),
                array("d", "7"),
            ),
            array(
                array("b", "8"),
                array("a", "6"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePaths3()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("g", "1"));
        $expectedResult = array(
            array(
                array("g", "1"),
                array("h", "3"),
            ),
            array(
                array("g", "1"),
                array("f", "3"),
            ),
            array(
                array("g", "1"),
                array("e", "2"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossibleMoves1()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("e", "5"));
        $expectedResult = array(
            array("f", "3"),
            array("g", "4"),
            array("g", "6"),
            array("f", "7"),
            array("d", "7"),
            array("c", "6"),
            array("c", "4"),
            array("d", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves2()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("b", "8"));
        $expectedResult = array(
            array("c", "6"),
            array("d", "7"),
            array("a", "6"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves3()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("g", "1"));
        $expectedResult = array(
            array("h", "3"),
            array("f", "3"),
            array("e", "2"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleAttackMoves1()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("e", "5"));
        $expectedResult = array(
            array("f", "3"),
            array("g", "4"),
            array("g", "6"),
            array("f", "7"),
            array("d", "7"),
            array("c", "6"),
            array("c", "4"),
            array("d", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMoves2()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("b", "8"));
        $expectedResult = array(
            array("c", "6"),
            array("d", "7"),
            array("a", "6"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMoves3()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("g", "1"));
        $expectedResult = array(
            array("h", "3"),
            array("f", "3"),
            array("e", "2"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }
}

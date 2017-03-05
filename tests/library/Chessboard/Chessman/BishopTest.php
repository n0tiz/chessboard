<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class BishopTest extends AChessmanTest
{

    public function testGetIconWhite()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("b", $object->getIcon());
    }

    public function testGetIconBlack()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("B", $object->getIcon());
    }

    public function testToStringWhite()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("b", (string) $object);
    }

    public function testToStringBlack()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("B", (string) $object);
    }

    public function testGetPossibleMoves1()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("c", "1"));
        $expectedResult = array(
            array("d", "2"),
            array("e", "3"),
            array("f", "4"),
            array("g", "5"),
            array("h", "6"),
            array("b", "2"),
            array("a", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves2()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("e", "6"));
        $expectedResult = array(
            array("f", "7"),
            array("g", "8"),
            array("d", "7"),
            array("c", "8"),
            array("d", "5"),
            array("c", "4"),
            array("b", "3"),
            array("a", "2"),
            array("f", "5"),
            array("g", "4"),
            array("h", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves3()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("d", "7"));
        $expectedResult = array(
            array("e", "8"),
            array("c", "8"),
            array("c", "6"),
            array("b", "5"),
            array("a", "4"),
            array("e", "6"),
            array("f", "5"),
            array("g", "4"),
            array("h", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves4()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("d", "3"));
        $expectedResult = array(
            array("e", "4"),
            array("f", "5"),
            array("g", "6"),
            array("h", "7"),
            array("c", "4"),
            array("b", "5"),
            array("a", "6"),
            array("c", "2"),
            array("b", "1"),
            array("e", "2"),
            array("f", "1"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleAttackMoves1()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("c", "1"));
        $expectedResult = array(
            array("d", "2"),
            array("e", "3"),
            array("f", "4"),
            array("g", "5"),
            array("h", "6"),
            array("b", "2"),
            array("a", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMoves2()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("e", "6"));
        $expectedResult = array(
            array("f", "7"),
            array("g", "8"),
            array("d", "7"),
            array("c", "8"),
            array("d", "5"),
            array("c", "4"),
            array("b", "3"),
            array("a", "2"),
            array("f", "5"),
            array("g", "4"),
            array("h", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMoves3()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("d", "7"));
        $expectedResult = array(
            array("e", "8"),
            array("c", "8"),
            array("c", "6"),
            array("b", "5"),
            array("a", "4"),
            array("e", "6"),
            array("f", "5"),
            array("g", "4"),
            array("h", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMoves4()
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("d", "3"));
        $expectedResult = array(
            array("e", "4"),
            array("f", "5"),
            array("g", "6"),
            array("h", "7"),
            array("c", "4"),
            array("b", "5"),
            array("a", "6"),
            array("c", "2"),
            array("b", "1"),
            array("e", "2"),
            array("f", "1"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }
}

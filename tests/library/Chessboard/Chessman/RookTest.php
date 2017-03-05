<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class RookTest extends AChessmanTest
{

    public function testGetIconWhite()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("r", $object->getIcon());
    }

    public function testGetIconBlack()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("R", $object->getIcon());
    }

    public function testToStringWhite()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("r", (string) $object);
    }

    public function testToStringBlack()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("R", (string) $object);
    }

    public function testGetPossibleMoves1()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
        $expectedResult = array(
            array("d", "1"),
            array("c", "1"),
            array("b", "1"),
            array("a", "1"),
            array("f", "1"),
            array("g", "1"),
            array("h", "1"),
            array("e", "2"),
            array("e", "3"),
            array("e", "4"),
            array("e", "5"),
            array("e", "6"),
            array("e", "7"),
            array("e", "8"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves2()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("e", "5"));
        $expectedResult = array(
            array("d", "5"),
            array("c", "5"),
            array("b", "5"),
            array("a", "5"),
            array("f", "5"),
            array("g", "5"),
            array("h", "5"),
            array("e", "6"),
            array("e", "7"),
            array("e", "8"),
            array("e", "4"),
            array("e", "3"),
            array("e", "2"),
            array("e", "1"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves3()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("d", "1"));
        $expectedResult = array(
            array("c", "1"),
            array("b", "1"),
            array("a", "1"),
            array("e", "1"),
            array("f", "1"),
            array("g", "1"),
            array("h", "1"),
            array("d", "2"),
            array("d", "3"),
            array("d", "4"),
            array("d", "5"),
            array("d", "6"),
            array("d", "7"),
            array("d", "8"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves4()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("d", "5"));
        $expectedResult = array(
            array("c", "5"),
            array("b", "5"),
            array("a", "5"),
            array("e", "5"),
            array("f", "5"),
            array("g", "5"),
            array("h", "5"),
            array("d", "6"),
            array("d", "7"),
            array("d", "8"),
            array("d", "4"),
            array("d", "3"),
            array("d", "2"),
            array("d", "1"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleAttackMoves1()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
        $expectedResult = array(
            array("d", "1"),
            array("c", "1"),
            array("b", "1"),
            array("a", "1"),
            array("f", "1"),
            array("g", "1"),
            array("h", "1"),
            array("e", "2"),
            array("e", "3"),
            array("e", "4"),
            array("e", "5"),
            array("e", "6"),
            array("e", "7"),
            array("e", "8"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMoves2()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
        $object->move(array("e", "5"));
        $expectedResult = array(
            array("d", "5"),
            array("c", "5"),
            array("b", "5"),
            array("a", "5"),
            array("f", "5"),
            array("g", "5"),
            array("h", "5"),
            array("e", "6"),
            array("e", "7"),
            array("e", "8"),
            array("e", "4"),
            array("e", "3"),
            array("e", "2"),
            array("e", "1"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMoves3()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
        $object->move(array("d", "1"));
        $expectedResult = array(
            array("c", "1"),
            array("b", "1"),
            array("a", "1"),
            array("e", "1"),
            array("f", "1"),
            array("g", "1"),
            array("h", "1"),
            array("d", "2"),
            array("d", "3"),
            array("d", "4"),
            array("d", "5"),
            array("d", "6"),
            array("d", "7"),
            array("d", "8"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMoves4()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("d", "5"));
        $expectedResult = array(
            array("c", "5"),
            array("b", "5"),
            array("a", "5"),
            array("e", "5"),
            array("f", "5"),
            array("g", "5"),
            array("h", "5"),
            array("d", "6"),
            array("d", "7"),
            array("d", "8"),
            array("d", "4"),
            array("d", "3"),
            array("d", "2"),
            array("d", "1"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }
}

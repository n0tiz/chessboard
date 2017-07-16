<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class QueenTest extends AChessmanTest
{

    public function testGetPossiblePaths1()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("d", "1"));
        $expectedResult = array(
            array(
                array("d", "1"),
                array("e", "2"),
                array("f", "3"),
                array("g", "4"),
                array("h", "5"),
            ),
            array(
                array("d", "1"),
                array("c", "2"),
                array("b", "3"),
                array("a", "4"),
            ),
            array(
                array("d", "1"),
                array("c", "1"),
                array("b", "1"),
                array("a", "1"),
            ),
            array(
                array("d", "1"),
                array("e", "1"),
                array("f", "1"),
                array("g", "1"),
                array("h", "1"),
            ),
            array(
                array("d", "1"),
                array("d", "2"),
                array("d", "3"),
                array("d", "4"),
                array("d", "5"),
                array("d", "6"),
                array("d", "7"),
                array("d", "8"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePaths2()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("d", "4"));
        $expectedResult = array(
            array(
                array("d", "4"),
                array("e", "5"),
                array("f", "6"),
                array("g", "7"),
                array("h", "8"),
            ),
            array(
                array("d", "4"),
                array("c", "5"),
                array("b", "6"),
                array("a", "7"),
            ),
            array(
                array("d", "4"),
                array("c", "3"),
                array("b", "2"),
                array("a", "1"),
            ),
            array(
                array("d", "4"),
                array("e", "3"),
                array("f", "2"),
                array("g", "1"),
            ),
            array(
                array("d", "4"),
                array("c", "4"),
                array("b", "4"),
                array("a", "4"),
            ),
            array(
                array("d", "4"),
                array("e", "4"),
                array("f", "4"),
                array("g", "4"),
                array("h", "4"),
            ),
            array(
                array("d", "4"),
                array("d", "3"),
                array("d", "2"),
                array("d", "1"),
            ),
            array(
                array("d", "4"),
                array("d", "5"),
                array("d", "6"),
                array("d", "7"),
                array("d", "8"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePaths3()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("f", "8"));
        $expectedResult = array(
            array(
                array("f", "8"),
                array("e", "7"),
                array("d", "6"),
                array("c", "5"),
                array("b", "4"),
                array("a", "3"),
            ),
            array(
                array("f", "8"),
                array("g", "7"),
                array("h", "6"),
            ),
            array(
                array("f", "8"),
                array("e", "8"),
                array("d", "8"),
                array("c", "8"),
                array("b", "8"),
                array("a", "8"),
            ),
            array(
                array("f", "8"),
                array("g", "8"),
                array("h", "8"),
            ),
            array(
                array("f", "8"),
                array("f", "7"),
                array("f", "6"),
                array("f", "5"),
                array("f", "4"),
                array("f", "3"),
                array("f", "2"),
                array("f", "1"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePaths4()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("h", "2"));
        $expectedResult = array(
            array(
                array("h", "2"),
                array("g", "3"),
                array("f", "4"),
                array("e", "5"),
                array("d", "6"),
                array("c", "7"),
                array("b", "8"),
            ),
            array(
                array("h", "2"),
                array("g", "1"),
            ),
            array(
                array("h", "2"),
                array("g", "2"),
                array("f", "2"),
                array("e", "2"),
                array("d", "2"),
                array("c", "2"),
                array("b", "2"),
                array("a", "2"),
            ),
            array(
                array("h", "2"),
                array("h", "1"),
            ),
            array(
                array("h", "2"),
                array("h", "3"),
                array("h", "4"),
                array("h", "5"),
                array("h", "6"),
                array("h", "7"),
                array("h", "8"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossibleMoves1()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("d", "1"));
        $expectedResult = array(
            array("e", "2"),
            array("f", "3"),
            array("g", "4"),
            array("h", "5"),
            array("c", "2"),
            array("b", "3"),
            array("a", "4"),
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

    public function testGetPossibleMoves2()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("d", "4"));
        $expectedResult = array(
            array("e", "5"),
            array("f", "6"),
            array("g", "7"),
            array("h", "8"),
            array("c", "5"),
            array("b", "6"),
            array("a", "7"),
            array("c", "3"),
            array("b", "2"),
            array("a", "1"),
            array("e", "3"),
            array("f", "2"),
            array("g", "1"),
            array("c", "4"),
            array("b", "4"),
            array("a", "4"),
            array("e", "4"),
            array("f", "4"),
            array("g", "4"),
            array("h", "4"),
            array("d", "3"),
            array("d", "2"),
            array("d", "1"),
            array("d", "5"),
            array("d", "6"),
            array("d", "7"),
            array("d", "8"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves3()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("f", "8"));
        $expectedResult = array(
            array("e", "7"),
            array("d", "6"),
            array("c", "5"),
            array("b", "4"),
            array("a", "3"),
            array("g", "7"),
            array("h", "6"),
            array("e", "8"),
            array("d", "8"),
            array("c", "8"),
            array("b", "8"),
            array("a", "8"),
            array("g", "8"),
            array("h", "8"),
            array("f", "7"),
            array("f", "6"),
            array("f", "5"),
            array("f", "4"),
            array("f", "3"),
            array("f", "2"),
            array("f", "1"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves4()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("h", "2"));
        $expectedResult = array(
            array("g", "3"),
            array("f", "4"),
            array("e", "5"),
            array("d", "6"),
            array("c", "7"),
            array("b", "8"),
            array("g", "1"),
            array("g", "2"),
            array("f", "2"),
            array("e", "2"),
            array("d", "2"),
            array("c", "2"),
            array("b", "2"),
            array("a", "2"),
            array("h", "1"),
            array("h", "3"),
            array("h", "4"),
            array("h", "5"),
            array("h", "6"),
            array("h", "7"),
            array("h", "8"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleAttackMoves1()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("d", "1"));
        $expectedResult = array(
            array("e", "2"),
            array("f", "3"),
            array("g", "4"),
            array("h", "5"),
            array("c", "2"),
            array("b", "3"),
            array("a", "4"),
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

    public function testGetPossibleAttackMoves2()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("d", "4"));
        $expectedResult = array(
            array("e", "5"),
            array("f", "6"),
            array("g", "7"),
            array("h", "8"),
            array("c", "5"),
            array("b", "6"),
            array("a", "7"),
            array("c", "3"),
            array("b", "2"),
            array("a", "1"),
            array("e", "3"),
            array("f", "2"),
            array("g", "1"),
            array("c", "4"),
            array("b", "4"),
            array("a", "4"),
            array("e", "4"),
            array("f", "4"),
            array("g", "4"),
            array("h", "4"),
            array("d", "3"),
            array("d", "2"),
            array("d", "1"),
            array("d", "5"),
            array("d", "6"),
            array("d", "7"),
            array("d", "8"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMoves3()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("f", "8"));
        $expectedResult = array(
            array("e", "7"),
            array("d", "6"),
            array("c", "5"),
            array("b", "4"),
            array("a", "3"),
            array("g", "7"),
            array("h", "6"),
            array("e", "8"),
            array("d", "8"),
            array("c", "8"),
            array("b", "8"),
            array("a", "8"),
            array("g", "8"),
            array("h", "8"),
            array("f", "7"),
            array("f", "6"),
            array("f", "5"),
            array("f", "4"),
            array("f", "3"),
            array("f", "2"),
            array("f", "1"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMoves4()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("h", "2"));
        $expectedResult = array(
            array("g", "3"),
            array("f", "4"),
            array("e", "5"),
            array("d", "6"),
            array("c", "7"),
            array("b", "8"),
            array("g", "1"),
            array("g", "2"),
            array("f", "2"),
            array("e", "2"),
            array("d", "2"),
            array("c", "2"),
            array("b", "2"),
            array("a", "2"),
            array("h", "1"),
            array("h", "3"),
            array("h", "4"),
            array("h", "5"),
            array("h", "6"),
            array("h", "7"),
            array("h", "8"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }
}

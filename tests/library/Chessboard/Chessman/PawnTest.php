<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class PawnTest extends AChessmanTest
{

    public function testGetIconWhite()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("p", $object->getIcon());
    }

    public function testGetIconBlack()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("P", $object->getIcon());
    }

    public function testToStringWhite()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("p", (string) $object);
    }

    public function testToStringBlack()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("P", (string) $object);
    }

    public function testGetPossibleMovesFirstMove()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $expectedResult = array(
            array("a", "3"),
            array("a", "4"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMovesSecondMove1()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $object->move(array("a", "3"));
        $expectedResult = array(
            array("a", "4"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMovesSecondMove2()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $object->move(array("a", "4"));
        $expectedResult = array(
            array("a", "5"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMovesOutOfBoundaries()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "8"));
        $expectedResult = array();
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleAttackMoves()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("b", "2"));
        $expectedResult = array(
            array("a", "3"),
            array("c", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMovesOutOfBoundariesLeft()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $expectedResult = array(
            array("b", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossibleAttackMovesOutOfBoundariesRight()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("h", "2"));
        $expectedResult = array(
            array("g", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }

    public function testGetPossiblePathsFirstMove()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $expectedResult = array(
            array(
                array("a", "2"),
                array("a", "3"),
                array("a", "4"),
            ),
            array(
                array("a", "2"),
                array("b", "3"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePathsSecondMove1()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $object->move(array("a", "3"));
        $expectedResult = array(
            array(
                array("a", "3"),
                array("a", "4"),
            ),
            array(
                array("a", "3"),
                array("b", "4"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePathsSecondMove2()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $object->move(array("a", "4"));
        $expectedResult = array(
            array(
                array("a", "4"),
                array("a", "5"),
            ),
            array(
                array("a", "4"),
                array("b", "5"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePathsOutOfBoundaries()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "8"));
        $expectedResult = array();
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePaths()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("b", "2"));
        $expectedResult = array(
            array(
                array("b", "2"),
                array("b", "3"),
                array("b", "4"),
            ),
            array(
                array("b", "2"),
                array("a", "3"),
            ),
            array(
                array("b", "2"),
                array("c", "3"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePathsOutOfBoundariesLeft()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $expectedResult = array(
            array(
                array("a", "2"),
                array("a", "3"),
                array("a", "4"),
            ),
            array(
                array("a", "2"),
                array("b", "3"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePathsOutOfBoundariesRight()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("h", "2"));
        $expectedResult = array(
            array(
                array("h", "2"),
                array("h", "3"),
                array("h", "4"),
            ),
            array(
                array("h", "2"),
                array("g", "3"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }
}

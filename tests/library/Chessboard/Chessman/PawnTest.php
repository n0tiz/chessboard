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

    public function testGetFile()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("a", $object->getFile());
    }

    public function testGetRank()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("1", $object->getRank());
    }

    public function testGetCurrentLocation()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame(array("a", "1"), $object->getCurrentLocation());
    }

    public function testGetColourWhite()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame(\Chessboard\AChessman::COLOUR_WHITE, $object->getColour());
    }

    public function testGetColourBlack()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame(\Chessboard\AChessman::COLOUR_BLACK, $object->getColour());
    }

    public function testIsWhiteTrue()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertTrue($object->isWhite());
    }

    public function testIsWhiteFalse()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertFalse($object->isWhite());
    }

    public function testIsBlackTrue()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertTrue($object->isBlack());
    }

    public function testIsBlackFalse()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertFalse($object->isBlack());
    }

    public function testIsFirstMoveTrue()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertTrue($object->isFirstMove());
    }

    public function testIsFirstMoveFalse()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $object->move(array("a", "2"));
        $this->assertFalse($object->isFirstMove());
    }

    public function testGetPreviousLocations()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame(array(), $object->getPreviousLocations());
    }

    public function testGetPreviousLocations2()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $object->move(array("a", "2"));
        $expectedResult = array(
            array("a", "1"),
        );
        $this->assertSame($expectedResult, $object->getPreviousLocations());
    }

    public function testGetPreviousLocations3()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $object->move(array("a", "2"));
        $object->move(array("a", "3"));
        $expectedResult = array(
            array("a", "1"),
            array("a", "2"),
        );
        $this->assertSame($expectedResult, $object->getPreviousLocations());
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

    public function testGetPossibleMovesSecondMove()
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
}

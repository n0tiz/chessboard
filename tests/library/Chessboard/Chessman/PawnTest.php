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

    public function testToStringWhite()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("p", (string) $object);
    }

    public function testGetEnemyColourWhite()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame(\Chessboard\AChessman::COLOUR_BLACK, $object->getEnemyColour());
    }

    public function testGetIconBlack()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("P", $object->getIcon());
    }

    public function testToStringBlack()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("P", (string) $object);
    }

    public function testGetEnemyColourBlack()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame(\Chessboard\AChessman::COLOUR_WHITE, $object->getEnemyColour());
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

    public function testCalculateAllowedMovesFirstMove()
    {
        $chessmen = array();
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $expectedResult = array(
            array("a", "3"),
            array("a", "4"),
        );
        $this->assertSame($expectedResult, $object->calculateAllowedMoves($chessmen));
    }

    public function testCalculateAllowedMovesSecondMove()
    {
        $chessmen = array();
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $object->move($chessmen, array("a", "3"));
        $expectedResult = array(
            array("a", "4"),
        );
        $this->assertSame($expectedResult, $object->calculateAllowedMoves($chessmen));
    }

    public function testCalculateAllowedMovesSecondMoveTwoStepsAsFirstMove()
    {
        $chessmen = array();
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $object->move($chessmen, array("a", "4"));
        $expectedResult = array(
            array("a", "5"),
        );
        $this->assertSame($expectedResult, $object->calculateAllowedMoves($chessmen));
    }

    public function testCalculateAllowedMovesFirstMoveOneEnemyNearby()
    {
        $chessmen = array(
            new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("b", "3"))
        );
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $expectedResult = array(
            array("a", "3"),
            array("a", "4"),
            array("b", "3"),
        );
        $this->assertSame($expectedResult, $object->calculateAllowedMoves($chessmen));
    }

    public function testCalculateAllowedMovesSecondMoveOneEnemyNearby()
    {
        $chessmen = array(
            new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("b", "4"))
        );
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $object->move($chessmen, array("a", "3"));
        $expectedResult = array(
            array("a", "4"),
            array("b", "4"),
        );
        $this->assertSame($expectedResult, $object->calculateAllowedMoves($chessmen));
    }

    public function testCalculateAllowedMovesSecondMoveTwoStepsAsFirstMoveOneEnemyNearby()
    {
        $chessmen = array(
            new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("b", "5"))
        );
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
        $object->move($chessmen, array("a", "4"));
        $expectedResult = array(
            array("a", "5"),
            array("b", "5"),
        );
        $this->assertSame($expectedResult, $object->calculateAllowedMoves($chessmen));
    }

    public function testCalculateAllowedMovesFirstMoveTwoEnemiesNearby()
    {
        $chessmen = array(
            new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("c", "3")),
            new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "3"))
        );
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("b", "2"));
        $expectedResult = array(
            array("b", "3"),
            array("b", "4"),
            array("c", "3"),
            array("a", "3"),
        );
        $this->assertSame($expectedResult, $object->calculateAllowedMoves($chessmen));
    }

    public function testCalculateAllowedMovesSecondMoveTwoEnemiesNearby()
    {
        $chessmen = array(
            new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("c", "4")),
            new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "4"))
        );
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("b", "2"));
        $object->move($chessmen, array("b", "3"));
        $expectedResult = array(
            array("b", "4"),
            array("c", "4"),
            array("a", "4"),
        );
        $this->assertSame($expectedResult, $object->calculateAllowedMoves($chessmen));
    }

    public function testCalculateAllowedMovesSecondMoveTwoStepsAsFirstMoveTwoEnemiesNearby()
    {
        $chessmen = array(
            new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("c", "5")),
            new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "5"))
        );
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("b", "2"));
        $object->move($chessmen, array("b", "4"));
        $expectedResult = array(
            array("b", "5"),
            array("c", "5"),
            array("a", "5"),
        );
        $this->assertSame($expectedResult, $object->calculateAllowedMoves($chessmen));
    }
}

<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class KingTest extends AChessmanTest
{

    public function testGetIconWhite()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("k", $object->getIcon());
    }

    public function testGetIconBlack()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("K", $object->getIcon());
    }

    public function testToStringWhite()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("k", (string) $object);
    }

    public function testToStringBlack()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("K", (string) $object);
    }

    public function testGetPossibleMovesOutOfBoundaries()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
        $expectedResult = array(
            array("e", "2"),
            array("d", "1"),
            array("f", "1"),
            array("d", "2"),
            array("f", "2"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
        $object->move(array("e", "2"));
        $expectedResult = array(
            array("e", "3"),
            array("e", "1"),
            array("d", "2"),
            array("f", "2"),
            array("d", "3"),
            array("f", "3"),
            array("d", "1"),
            array("f", "1"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleAttackMovesOutOfBoundaries()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
        $expectedResult = array(
            array("e", "2"),
            array("d", "1"),
            array("f", "1"),
            array("d", "2"),
            array("f", "2"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleAttackMoves()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
        $object->move(array("e", "2"));
        $expectedResult = array(
            array("e", "3"),
            array("e", "1"),
            array("d", "2"),
            array("f", "2"),
            array("d", "3"),
            array("f", "3"),
            array("d", "1"),
            array("f", "1"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }
}

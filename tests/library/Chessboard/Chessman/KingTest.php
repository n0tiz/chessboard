<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class KingTest extends AChessmanTest
{

    public function testGetPossiblePaths1()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
        $expectedResult = array(
            array(
                array("e", "1"),
                array("f", "2"),
            ),
            array(
                array("e", "1"),
                array("d", "2"),
            ),
            array(
                array("e", "1"),
                array("d", "1"),
            ),
            array(
                array("e", "1"),
                array("f", "1"),
            ),
            array(
                array("e", "1"),
                array("e", "2"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossiblePaths2()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("e", "2"));
        $expectedResult = array(
            array(
                array("e", "2"),
                array("f", "3"),
            ),
            array(
                array("e", "2"),
                array("d", "3"),
            ),
            array(
                array("e", "2"),
                array("d", "1"),
            ),
            array(
                array("e", "2"),
                array("f", "1"),
            ),
            array(
                array("e", "2"),
                array("d", "2"),
            ),
            array(
                array("e", "2"),
                array("f", "2"),
            ),
            array(
                array("e", "2"),
                array("e", "1"),
            ),
            array(
                array("e", "2"),
                array("e", "3"),
            ),
        );
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function testGetPossibleMoves1()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
        $expectedResult = array(
            array("f", "2"),
            array("d", "2"),
            array("d", "1"),
            array("f", "1"),
            array("e", "2"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleMoves2()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("e", "2"));
        $expectedResult = array(
            array("f", "3"),
            array("d", "3"),
            array("d", "1"),
            array("f", "1"),
            array("d", "2"),
            array("f", "2"),
            array("e", "1"),
            array("e", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleAttackMoves1()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
        $expectedResult = array(
            array("f", "2"),
            array("d", "2"),
            array("d", "1"),
            array("f", "1"),
            array("e", "2"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    public function testGetPossibleAttackMoves2()
    {
        $object = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("e", "2"));
        $expectedResult = array(
            array("f", "3"),
            array("d", "3"),
            array("d", "1"),
            array("f", "1"),
            array("d", "2"),
            array("f", "2"),
            array("e", "1"),
            array("e", "3"),
        );
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }
}

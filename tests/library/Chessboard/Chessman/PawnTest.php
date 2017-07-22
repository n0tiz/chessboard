<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class PawnTest extends AChessmanTest
{
    public function testGetChessmanName()
    {
        $object = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("h", "2"));
        $this->assertSame("Pawn", $object->getChessmanName());
    }

    public function pathProvider()
    {
        return array(
            array(array("a", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[[["a","2"],["a","3"],["a","4"]]]', true)),
            array(array("b", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[[["b","2"],["b","3"],["b","4"]]]', true)),
            array(array("c", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[[["c","2"],["c","3"],["c","4"]]]', true)),
            array(array("d", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[[["d","2"],["d","3"],["d","4"]]]', true)),
            array(array("e", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[[["e","2"],["e","3"],["e","4"]]]', true)),
            array(array("f", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[[["f","2"],["f","3"],["f","4"]]]', true)),
            array(array("g", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[[["g","2"],["g","3"],["g","4"]]]', true)),
            array(array("h", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[[["h","2"],["h","3"],["h","4"]]]', true)),
            array(array("a", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["a","3"],["a","4"]]]', true)),
            array(array("b", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["b","3"],["b","4"]]]', true)),
            array(array("c", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["c","3"],["c","4"]]]', true)),
            array(array("d", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["d","3"],["d","4"]]]', true)),
            array(array("e", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["e","3"],["e","4"]]]', true)),
            array(array("f", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["f","3"],["f","4"]]]', true)),
            array(array("g", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["g","3"],["g","4"]]]', true)),
            array(array("h", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["h","3"],["h","4"]]]', true)),
            array(array("a", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["a","4"],["a","5"]]]', true)),
            array(array("b", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["b","4"],["b","5"]]]', true)),
            array(array("c", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["c","4"],["c","5"]]]', true)),
            array(array("d", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["d","4"],["d","5"]]]', true)),
            array(array("e", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["e","4"],["e","5"]]]', true)),
            array(array("f", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["f","4"],["f","5"]]]', true)),
            array(array("g", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["g","4"],["g","5"]]]', true)),
            array(array("h", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["h","4"],["h","5"]]]', true)),
            array(array("a", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["a","5"],["a","6"]]]', true)),
            array(array("b", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["b","5"],["b","6"]]]', true)),
            array(array("c", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["c","5"],["c","6"]]]', true)),
            array(array("d", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["d","5"],["d","6"]]]', true)),
            array(array("e", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["e","5"],["e","6"]]]', true)),
            array(array("f", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["f","5"],["f","6"]]]', true)),
            array(array("g", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["g","5"],["g","6"]]]', true)),
            array(array("h", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["h","5"],["h","6"]]]', true)),
            array(array("a", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["a","6"],["a","7"]]]', true)),
            array(array("b", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["b","6"],["b","7"]]]', true)),
            array(array("c", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["c","6"],["c","7"]]]', true)),
            array(array("d", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["d","6"],["d","7"]]]', true)),
            array(array("e", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["e","6"],["e","7"]]]', true)),
            array(array("f", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["f","6"],["f","7"]]]', true)),
            array(array("g", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["g","6"],["g","7"]]]', true)),
            array(array("h", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["h","6"],["h","7"]]]', true)),
            array(array("a", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["a","7"],["a","8"]]]', true)),
            array(array("b", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["b","7"],["b","8"]]]', true)),
            array(array("c", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["c","7"],["c","8"]]]', true)),
            array(array("d", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["d","7"],["d","8"]]]', true)),
            array(array("e", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["e","7"],["e","8"]]]', true)),
            array(array("f", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["f","7"],["f","8"]]]', true)),
            array(array("g", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["g","7"],["g","8"]]]', true)),
            array(array("h", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[[["h","7"],["h","8"]]]', true)),
            array(array("a", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("b", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("c", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("d", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("e", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("f", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("g", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("h", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("a", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("b", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("c", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("d", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("e", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("f", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("g", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("h", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("a", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["a","2"],["a","1"]]]', true)),
            array(array("b", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["b","2"],["b","1"]]]', true)),
            array(array("c", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["c","2"],["c","1"]]]', true)),
            array(array("d", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["d","2"],["d","1"]]]', true)),
            array(array("e", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["e","2"],["e","1"]]]', true)),
            array(array("f", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["f","2"],["f","1"]]]', true)),
            array(array("g", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["g","2"],["g","1"]]]', true)),
            array(array("h", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["h","2"],["h","1"]]]', true)),
            array(array("a", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["a","3"],["a","2"]]]', true)),
            array(array("b", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["b","3"],["b","2"]]]', true)),
            array(array("c", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["c","3"],["c","2"]]]', true)),
            array(array("d", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["d","3"],["d","2"]]]', true)),
            array(array("e", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["e","3"],["e","2"]]]', true)),
            array(array("f", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["f","3"],["f","2"]]]', true)),
            array(array("g", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["g","3"],["g","2"]]]', true)),
            array(array("h", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["h","3"],["h","2"]]]', true)),
            array(array("a", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["a","4"],["a","3"]]]', true)),
            array(array("b", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["b","4"],["b","3"]]]', true)),
            array(array("c", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["c","4"],["c","3"]]]', true)),
            array(array("d", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["d","4"],["d","3"]]]', true)),
            array(array("e", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["e","4"],["e","3"]]]', true)),
            array(array("f", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["f","4"],["f","3"]]]', true)),
            array(array("g", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["g","4"],["g","3"]]]', true)),
            array(array("h", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["h","4"],["h","3"]]]', true)),
            array(array("a", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["a","5"],["a","4"]]]', true)),
            array(array("b", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["b","5"],["b","4"]]]', true)),
            array(array("c", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["c","5"],["c","4"]]]', true)),
            array(array("d", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["d","5"],["d","4"]]]', true)),
            array(array("e", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["e","5"],["e","4"]]]', true)),
            array(array("f", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["f","5"],["f","4"]]]', true)),
            array(array("g", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["g","5"],["g","4"]]]', true)),
            array(array("h", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["h","5"],["h","4"]]]', true)),
            array(array("a", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["a","6"],["a","5"]]]', true)),
            array(array("b", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["b","6"],["b","5"]]]', true)),
            array(array("c", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["c","6"],["c","5"]]]', true)),
            array(array("d", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["d","6"],["d","5"]]]', true)),
            array(array("e", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["e","6"],["e","5"]]]', true)),
            array(array("f", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["f","6"],["f","5"]]]', true)),
            array(array("g", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["g","6"],["g","5"]]]', true)),
            array(array("h", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[[["h","6"],["h","5"]]]', true)),
            array(array("a", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[[["a","7"],["a","6"],["a","5"]]]', true)),
            array(array("b", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[[["b","7"],["b","6"],["b","5"]]]', true)),
            array(array("c", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[[["c","7"],["c","6"],["c","5"]]]', true)),
            array(array("d", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[[["d","7"],["d","6"],["d","5"]]]', true)),
            array(array("e", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[[["e","7"],["e","6"],["e","5"]]]', true)),
            array(array("f", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[[["f","7"],["f","6"],["f","5"]]]', true)),
            array(array("g", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[[["g","7"],["g","6"],["g","5"]]]', true)),
            array(array("h", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[[["h","7"],["h","6"],["h","5"]]]', true)),
        );
    }

    /**
     * @dataProvider pathProvider
     */
    public function testGetPossiblePaths($location, $colour, $firstMove, $expectedResult)
    {
        $object = $this->getMockBuilder(\Chessboard\Chessman\Pawn::class)
            ->setConstructorArgs(array($colour, $location))
            ->setMethods(array("isFirstMove"))
            ->getMock();
        $object->method("isFirstMove")->will($this->returnValue($firstMove));
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function moveProvider()
    {
        return array(
            array(array("a", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[["a","3"],["a","4"]]', true)),
            array(array("b", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[["b","3"],["b","4"]]', true)),
            array(array("c", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[["c","3"],["c","4"]]', true)),
            array(array("d", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[["d","3"],["d","4"]]', true)),
            array(array("e", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[["e","3"],["e","4"]]', true)),
            array(array("f", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[["f","3"],["f","4"]]', true)),
            array(array("g", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[["g","3"],["g","4"]]', true)),
            array(array("h", "2"), \Chessboard\AChessman::COLOUR_WHITE, true, json_decode('[["h","3"],["h","4"]]', true)),
            array(array("a", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["a","4"]]', true)),
            array(array("b", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["b","4"]]', true)),
            array(array("c", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["c","4"]]', true)),
            array(array("d", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["d","4"]]', true)),
            array(array("e", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["e","4"]]', true)),
            array(array("f", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["f","4"]]', true)),
            array(array("g", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["g","4"]]', true)),
            array(array("h", "3"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["h","4"]]', true)),
            array(array("a", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["a","5"]]', true)),
            array(array("b", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["b","5"]]', true)),
            array(array("c", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["c","5"]]', true)),
            array(array("d", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["d","5"]]', true)),
            array(array("e", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["e","5"]]', true)),
            array(array("f", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["f","5"]]', true)),
            array(array("g", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["g","5"]]', true)),
            array(array("h", "4"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["h","5"]]', true)),
            array(array("a", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["a","6"]]', true)),
            array(array("b", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["b","6"]]', true)),
            array(array("c", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["c","6"]]', true)),
            array(array("d", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["d","6"]]', true)),
            array(array("e", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["e","6"]]', true)),
            array(array("f", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["f","6"]]', true)),
            array(array("g", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["g","6"]]', true)),
            array(array("h", "5"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["h","6"]]', true)),
            array(array("a", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["a","7"]]', true)),
            array(array("b", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["b","7"]]', true)),
            array(array("c", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["c","7"]]', true)),
            array(array("d", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["d","7"]]', true)),
            array(array("e", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["e","7"]]', true)),
            array(array("f", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["f","7"]]', true)),
            array(array("g", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["g","7"]]', true)),
            array(array("h", "6"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["h","7"]]', true)),
            array(array("a", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["a","8"]]', true)),
            array(array("b", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["b","8"]]', true)),
            array(array("c", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["c","8"]]', true)),
            array(array("d", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["d","8"]]', true)),
            array(array("e", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["e","8"]]', true)),
            array(array("f", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["f","8"]]', true)),
            array(array("g", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["g","8"]]', true)),
            array(array("h", "7"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[["h","8"]]', true)),
            array(array("a", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("b", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("c", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("d", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("e", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("f", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("g", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("h", "8"), \Chessboard\AChessman::COLOUR_WHITE, false, json_decode('[]', true)),
            array(array("a", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("b", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("c", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("d", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("e", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("f", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("g", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("h", "1"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[]', true)),
            array(array("a", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["a","1"]]', true)),
            array(array("b", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["b","1"]]', true)),
            array(array("c", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["c","1"]]', true)),
            array(array("d", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["d","1"]]', true)),
            array(array("e", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["e","1"]]', true)),
            array(array("f", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["f","1"]]', true)),
            array(array("g", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["g","1"]]', true)),
            array(array("h", "2"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["h","1"]]', true)),
            array(array("a", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["a","2"]]', true)),
            array(array("b", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["b","2"]]', true)),
            array(array("c", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["c","2"]]', true)),
            array(array("d", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["d","2"]]', true)),
            array(array("e", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["e","2"]]', true)),
            array(array("f", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["f","2"]]', true)),
            array(array("g", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["g","2"]]', true)),
            array(array("h", "3"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["h","2"]]', true)),
            array(array("a", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["a","3"]]', true)),
            array(array("b", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["b","3"]]', true)),
            array(array("c", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["c","3"]]', true)),
            array(array("d", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["d","3"]]', true)),
            array(array("e", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["e","3"]]', true)),
            array(array("f", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["f","3"]]', true)),
            array(array("g", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["g","3"]]', true)),
            array(array("h", "4"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["h","3"]]', true)),
            array(array("a", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["a","4"]]', true)),
            array(array("b", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["b","4"]]', true)),
            array(array("c", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["c","4"]]', true)),
            array(array("d", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["d","4"]]', true)),
            array(array("e", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["e","4"]]', true)),
            array(array("f", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["f","4"]]', true)),
            array(array("g", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["g","4"]]', true)),
            array(array("h", "5"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["h","4"]]', true)),
            array(array("a", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["a","5"]]', true)),
            array(array("b", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["b","5"]]', true)),
            array(array("c", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["c","5"]]', true)),
            array(array("d", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["d","5"]]', true)),
            array(array("e", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["e","5"]]', true)),
            array(array("f", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["f","5"]]', true)),
            array(array("g", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["g","5"]]', true)),
            array(array("h", "6"), \Chessboard\AChessman::COLOUR_BLACK, false, json_decode('[["h","5"]]', true)),
            array(array("a", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[["a","6"],["a","5"]]', true)),
            array(array("b", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[["b","6"],["b","5"]]', true)),
            array(array("c", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[["c","6"],["c","5"]]', true)),
            array(array("d", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[["d","6"],["d","5"]]', true)),
            array(array("e", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[["e","6"],["e","5"]]', true)),
            array(array("f", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[["f","6"],["f","5"]]', true)),
            array(array("g", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[["g","6"],["g","5"]]', true)),
            array(array("h", "7"), \Chessboard\AChessman::COLOUR_BLACK, true, json_decode('[["h","6"],["h","5"]]', true)),
        );
    }

    /**
     * @dataProvider moveProvider
     */
    public function testGetPossibleMoves($location, $colour, $firstMove, $expectedResult)
    {
        $object = $this->getMockBuilder(\Chessboard\Chessman\Pawn::class)
            ->setConstructorArgs(array($colour, $location))
            ->setMethods(array("isFirstMove"))
            ->getMock();
        $object->method("isFirstMove")->will($this->returnValue($firstMove));
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }
}

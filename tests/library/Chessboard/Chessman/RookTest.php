<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class RookTest extends AChessmanTest
{

    public function pathProvider()
    {
        return array(
            array(array("a", "1"), json_decode('[[["a","1"],["b","2"],["c","3"],["d","4"],["e","5"],["f","6"],["g","7"],["h","8"]],[["a","1"]],[["a","1"]],[["a","1"]]]', true)),
            array(array("a", "2"), json_decode('[[["a","2"],["b","3"],["c","4"],["d","5"],["e","6"],["f","7"],["g","8"]],[["a","2"]],[["a","2"]],[["a","2"],["b","1"]]]', true)),
            array(array("a", "3"), json_decode('[[["a","3"],["b","4"],["c","5"],["d","6"],["e","7"],["f","8"]],[["a","3"]],[["a","3"]],[["a","3"],["b","2"],["c","1"]]]', true)),
            array(array("a", "4"), json_decode('[[["a","4"],["b","5"],["c","6"],["d","7"],["e","8"]],[["a","4"]],[["a","4"]],[["a","4"],["b","3"],["c","2"],["d","1"]]]', true)),
            array(array("a", "5"), json_decode('[[["a","5"],["b","6"],["c","7"],["d","8"]],[["a","5"]],[["a","5"]],[["a","5"],["b","4"],["c","3"],["d","2"],["e","1"]]]', true)),
            array(array("a", "6"), json_decode('[[["a","6"],["b","7"],["c","8"]],[["a","6"]],[["a","6"]],[["a","6"],["b","5"],["c","4"],["d","3"],["e","2"],["f","1"]]]', true)),
            array(array("a", "7"), json_decode('[[["a","7"],["b","8"]],[["a","7"]],[["a","7"]],[["a","7"],["b","6"],["c","5"],["d","4"],["e","3"],["f","2"],["g","1"]]]', true)),
            array(array("a", "8"), json_decode('[[["a","8"]],[["a","8"]],[["a","8"]],[["a","8"],["b","7"],["c","6"],["d","5"],["e","4"],["f","3"],["g","2"],["h","1"]]]', true)),
            array(array("b", "1"), json_decode('[[["b","1"],["c","2"],["d","3"],["e","4"],["f","5"],["g","6"],["h","7"]],[["b","1"],["a","2"]],[["b","1"]],[["b","1"]]]', true)),
            array(array("b", "2"), json_decode('[[["b","2"],["c","3"],["d","4"],["e","5"],["f","6"],["g","7"],["h","8"]],[["b","2"],["a","3"]],[["b","2"],["a","1"]],[["b","2"],["c","1"]]]', true)),
            array(array("b", "3"), json_decode('[[["b","3"],["c","4"],["d","5"],["e","6"],["f","7"],["g","8"]],[["b","3"],["a","4"]],[["b","3"],["a","2"]],[["b","3"],["c","2"],["d","1"]]]', true)),
            array(array("b", "4"), json_decode('[[["b","4"],["c","5"],["d","6"],["e","7"],["f","8"]],[["b","4"],["a","5"]],[["b","4"],["a","3"]],[["b","4"],["c","3"],["d","2"],["e","1"]]]', true)),
            array(array("b", "5"), json_decode('[[["b","5"],["c","6"],["d","7"],["e","8"]],[["b","5"],["a","6"]],[["b","5"],["a","4"]],[["b","5"],["c","4"],["d","3"],["e","2"],["f","1"]]]', true)),
            array(array("b", "6"), json_decode('[[["b","6"],["c","7"],["d","8"]],[["b","6"],["a","7"]],[["b","6"],["a","5"]],[["b","6"],["c","5"],["d","4"],["e","3"],["f","2"],["g","1"]]]', true)),
            array(array("b", "7"), json_decode('[[["b","7"],["c","8"]],[["b","7"],["a","8"]],[["b","7"],["a","6"]],[["b","7"],["c","6"],["d","5"],["e","4"],["f","3"],["g","2"],["h","1"]]]', true)),
            array(array("b", "8"), json_decode('[[["b","8"]],[["b","8"]],[["b","8"],["a","7"]],[["b","8"],["c","7"],["d","6"],["e","5"],["f","4"],["g","3"],["h","2"]]]', true)),
            array(array("c", "1"), json_decode('[[["c","1"],["d","2"],["e","3"],["f","4"],["g","5"],["h","6"]],[["c","1"],["b","2"],["a","3"]],[["c","1"]],[["c","1"]]]', true)),
            array(array("c", "2"), json_decode('[[["c","2"],["d","3"],["e","4"],["f","5"],["g","6"],["h","7"]],[["c","2"],["b","3"],["a","4"]],[["c","2"],["b","1"]],[["c","2"],["d","1"]]]', true)),
            array(array("c", "3"), json_decode('[[["c","3"],["d","4"],["e","5"],["f","6"],["g","7"],["h","8"]],[["c","3"],["b","4"],["a","5"]],[["c","3"],["b","2"],["a","1"]],[["c","3"],["d","2"],["e","1"]]]', true)),
            array(array("c", "4"), json_decode('[[["c","4"],["d","5"],["e","6"],["f","7"],["g","8"]],[["c","4"],["b","5"],["a","6"]],[["c","4"],["b","3"],["a","2"]],[["c","4"],["d","3"],["e","2"],["f","1"]]]', true)),
            array(array("c", "5"), json_decode('[[["c","5"],["d","6"],["e","7"],["f","8"]],[["c","5"],["b","6"],["a","7"]],[["c","5"],["b","4"],["a","3"]],[["c","5"],["d","4"],["e","3"],["f","2"],["g","1"]]]', true)),
            array(array("c", "6"), json_decode('[[["c","6"],["d","7"],["e","8"]],[["c","6"],["b","7"],["a","8"]],[["c","6"],["b","5"],["a","4"]],[["c","6"],["d","5"],["e","4"],["f","3"],["g","2"],["h","1"]]]', true)),
            array(array("c", "7"), json_decode('[[["c","7"],["d","8"]],[["c","7"],["b","8"]],[["c","7"],["b","6"],["a","5"]],[["c","7"],["d","6"],["e","5"],["f","4"],["g","3"],["h","2"]]]', true)),
            array(array("c", "8"), json_decode('[[["c","8"]],[["c","8"]],[["c","8"],["b","7"],["a","6"]],[["c","8"],["d","7"],["e","6"],["f","5"],["g","4"],["h","3"]]]', true)),
            array(array("d", "1"), json_decode('[[["d","1"],["e","2"],["f","3"],["g","4"],["h","5"]],[["d","1"],["c","2"],["b","3"],["a","4"]],[["d","1"]],[["d","1"]]]', true)),
            array(array("d", "2"), json_decode('[[["d","2"],["e","3"],["f","4"],["g","5"],["h","6"]],[["d","2"],["c","3"],["b","4"],["a","5"]],[["d","2"],["c","1"]],[["d","2"],["e","1"]]]', true)),
            array(array("d", "3"), json_decode('[[["d","3"],["e","4"],["f","5"],["g","6"],["h","7"]],[["d","3"],["c","4"],["b","5"],["a","6"]],[["d","3"],["c","2"],["b","1"]],[["d","3"],["e","2"],["f","1"]]]', true)),
            array(array("d", "4"), json_decode('[[["d","4"],["e","5"],["f","6"],["g","7"],["h","8"]],[["d","4"],["c","5"],["b","6"],["a","7"]],[["d","4"],["c","3"],["b","2"],["a","1"]],[["d","4"],["e","3"],["f","2"],["g","1"]]]', true)),
            array(array("d", "5"), json_decode('[[["d","5"],["e","6"],["f","7"],["g","8"]],[["d","5"],["c","6"],["b","7"],["a","8"]],[["d","5"],["c","4"],["b","3"],["a","2"]],[["d","5"],["e","4"],["f","3"],["g","2"],["h","1"]]]', true)),
            array(array("d", "6"), json_decode('[[["d","6"],["e","7"],["f","8"]],[["d","6"],["c","7"],["b","8"]],[["d","6"],["c","5"],["b","4"],["a","3"]],[["d","6"],["e","5"],["f","4"],["g","3"],["h","2"]]]', true)),
            array(array("d", "7"), json_decode('[[["d","7"],["e","8"]],[["d","7"],["c","8"]],[["d","7"],["c","6"],["b","5"],["a","4"]],[["d","7"],["e","6"],["f","5"],["g","4"],["h","3"]]]', true)),
            array(array("d", "8"), json_decode('[[["d","8"]],[["d","8"]],[["d","8"],["c","7"],["b","6"],["a","5"]],[["d","8"],["e","7"],["f","6"],["g","5"],["h","4"]]]', true)),
            array(array("e", "1"), json_decode('[[["e","1"],["f","2"],["g","3"],["h","4"]],[["e","1"],["d","2"],["c","3"],["b","4"],["a","5"]],[["e","1"]],[["e","1"]]]', true)),
            array(array("e", "2"), json_decode('[[["e","2"],["f","3"],["g","4"],["h","5"]],[["e","2"],["d","3"],["c","4"],["b","5"],["a","6"]],[["e","2"],["d","1"]],[["e","2"],["f","1"]]]', true)),
            array(array("e", "3"), json_decode('[[["e","3"],["f","4"],["g","5"],["h","6"]],[["e","3"],["d","4"],["c","5"],["b","6"],["a","7"]],[["e","3"],["d","2"],["c","1"]],[["e","3"],["f","2"],["g","1"]]]', true)),
            array(array("e", "4"), json_decode('[[["e","4"],["f","5"],["g","6"],["h","7"]],[["e","4"],["d","5"],["c","6"],["b","7"],["a","8"]],[["e","4"],["d","3"],["c","2"],["b","1"]],[["e","4"],["f","3"],["g","2"],["h","1"]]]', true)),
            array(array("e", "5"), json_decode('[[["e","5"],["f","6"],["g","7"],["h","8"]],[["e","5"],["d","6"],["c","7"],["b","8"]],[["e","5"],["d","4"],["c","3"],["b","2"],["a","1"]],[["e","5"],["f","4"],["g","3"],["h","2"]]]', true)),
            array(array("e", "6"), json_decode('[[["e","6"],["f","7"],["g","8"]],[["e","6"],["d","7"],["c","8"]],[["e","6"],["d","5"],["c","4"],["b","3"],["a","2"]],[["e","6"],["f","5"],["g","4"],["h","3"]]]', true)),
            array(array("e", "7"), json_decode('[[["e","7"],["f","8"]],[["e","7"],["d","8"]],[["e","7"],["d","6"],["c","5"],["b","4"],["a","3"]],[["e","7"],["f","6"],["g","5"],["h","4"]]]', true)),
            array(array("e", "8"), json_decode('[[["e","8"]],[["e","8"]],[["e","8"],["d","7"],["c","6"],["b","5"],["a","4"]],[["e","8"],["f","7"],["g","6"],["h","5"]]]', true)),
            array(array("f", "1"), json_decode('[[["f","1"],["g","2"],["h","3"]],[["f","1"],["e","2"],["d","3"],["c","4"],["b","5"],["a","6"]],[["f","1"]],[["f","1"]]]', true)),
            array(array("f", "2"), json_decode('[[["f","2"],["g","3"],["h","4"]],[["f","2"],["e","3"],["d","4"],["c","5"],["b","6"],["a","7"]],[["f","2"],["e","1"]],[["f","2"],["g","1"]]]', true)),
            array(array("f", "3"), json_decode('[[["f","3"],["g","4"],["h","5"]],[["f","3"],["e","4"],["d","5"],["c","6"],["b","7"],["a","8"]],[["f","3"],["e","2"],["d","1"]],[["f","3"],["g","2"],["h","1"]]]', true)),
            array(array("f", "4"), json_decode('[[["f","4"],["g","5"],["h","6"]],[["f","4"],["e","5"],["d","6"],["c","7"],["b","8"]],[["f","4"],["e","3"],["d","2"],["c","1"]],[["f","4"],["g","3"],["h","2"]]]', true)),
            array(array("f", "5"), json_decode('[[["f","5"],["g","6"],["h","7"]],[["f","5"],["e","6"],["d","7"],["c","8"]],[["f","5"],["e","4"],["d","3"],["c","2"],["b","1"]],[["f","5"],["g","4"],["h","3"]]]', true)),
            array(array("f", "6"), json_decode('[[["f","6"],["g","7"],["h","8"]],[["f","6"],["e","7"],["d","8"]],[["f","6"],["e","5"],["d","4"],["c","3"],["b","2"],["a","1"]],[["f","6"],["g","5"],["h","4"]]]', true)),
            array(array("f", "7"), json_decode('[[["f","7"],["g","8"]],[["f","7"],["e","8"]],[["f","7"],["e","6"],["d","5"],["c","4"],["b","3"],["a","2"]],[["f","7"],["g","6"],["h","5"]]]', true)),
            array(array("f", "8"), json_decode('[[["f","8"]],[["f","8"]],[["f","8"],["e","7"],["d","6"],["c","5"],["b","4"],["a","3"]],[["f","8"],["g","7"],["h","6"]]]', true)),
            array(array("g", "1"), json_decode('[[["g","1"],["h","2"]],[["g","1"],["f","2"],["e","3"],["d","4"],["c","5"],["b","6"],["a","7"]],[["g","1"]],[["g","1"]]]', true)),
            array(array("g", "2"), json_decode('[[["g","2"],["h","3"]],[["g","2"],["f","3"],["e","4"],["d","5"],["c","6"],["b","7"],["a","8"]],[["g","2"],["f","1"]],[["g","2"],["h","1"]]]', true)),
            array(array("g", "3"), json_decode('[[["g","3"],["h","4"]],[["g","3"],["f","4"],["e","5"],["d","6"],["c","7"],["b","8"]],[["g","3"],["f","2"],["e","1"]],[["g","3"],["h","2"]]]', true)),
            array(array("g", "4"), json_decode('[[["g","4"],["h","5"]],[["g","4"],["f","5"],["e","6"],["d","7"],["c","8"]],[["g","4"],["f","3"],["e","2"],["d","1"]],[["g","4"],["h","3"]]]', true)),
            array(array("g", "5"), json_decode('[[["g","5"],["h","6"]],[["g","5"],["f","6"],["e","7"],["d","8"]],[["g","5"],["f","4"],["e","3"],["d","2"],["c","1"]],[["g","5"],["h","4"]]]', true)),
            array(array("g", "6"), json_decode('[[["g","6"],["h","7"]],[["g","6"],["f","7"],["e","8"]],[["g","6"],["f","5"],["e","4"],["d","3"],["c","2"],["b","1"]],[["g","6"],["h","5"]]]', true)),
            array(array("g", "7"), json_decode('[[["g","7"],["h","8"]],[["g","7"],["f","8"]],[["g","7"],["f","6"],["e","5"],["d","4"],["c","3"],["b","2"],["a","1"]],[["g","7"],["h","6"]]]', true)),
            array(array("g", "8"), json_decode('[[["g","8"]],[["g","8"]],[["g","8"],["f","7"],["e","6"],["d","5"],["c","4"],["b","3"],["a","2"]],[["g","8"],["h","7"]]]', true)),
            array(array("h", "1"), json_decode('[[["h","1"]],[["h","1"],["g","2"],["f","3"],["e","4"],["d","5"],["c","6"],["b","7"],["a","8"]],[["h","1"]],[["h","1"]]]', true)),
            array(array("h", "2"), json_decode('[[["h","2"]],[["h","2"],["g","3"],["f","4"],["e","5"],["d","6"],["c","7"],["b","8"]],[["h","2"],["g","1"]],[["h","2"]]]', true)),
            array(array("h", "3"), json_decode('[[["h","3"]],[["h","3"],["g","4"],["f","5"],["e","6"],["d","7"],["c","8"]],[["h","3"],["g","2"],["f","1"]],[["h","3"]]]', true)),
            array(array("h", "4"), json_decode('[[["h","4"]],[["h","4"],["g","5"],["f","6"],["e","7"],["d","8"]],[["h","4"],["g","3"],["f","2"],["e","1"]],[["h","4"]]]', true)),
            array(array("h", "5"), json_decode('[[["h","5"]],[["h","5"],["g","6"],["f","7"],["e","8"]],[["h","5"],["g","4"],["f","3"],["e","2"],["d","1"]],[["h","5"]]]', true)),
            array(array("h", "6"), json_decode('[[["h","6"]],[["h","6"],["g","7"],["f","8"]],[["h","6"],["g","5"],["f","4"],["e","3"],["d","2"],["c","1"]],[["h","6"]]]', true)),
            array(array("h", "7"), json_decode('[[["h","7"]],[["h","7"],["g","8"]],[["h","7"],["g","6"],["f","5"],["e","4"],["d","3"],["c","2"],["b","1"]],[["h","7"]]]', true)),
            array(array("h", "8"), json_decode('[[["h","8"]],[["h","8"]],[["h","8"],["g","7"],["f","6"],["e","5"],["d","4"],["c","3"],["b","2"],["a","1"]],[["h","8"]]]', true)),
        );
    }

    /**
     * @dataProvider pathProvider
     */
    public function testGetPossiblePaths($location, $expectedResult)
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, $location);
        $this->assertSame($expectedResult, $object->getPossiblePaths());
    }

    public function moveProvider()
    {
        return array(
            array(array("a", "1"), json_decode('[["b","2"],["c","3"],["d","4"],["e","5"],["f","6"],["g","7"],["h","8"]]', true)),
            array(array("a", "2"), json_decode('[["b","3"],["c","4"],["d","5"],["e","6"],["f","7"],["g","8"],["b","1"]]', true)),
            array(array("a", "3"), json_decode('[["b","4"],["c","5"],["d","6"],["e","7"],["f","8"],["b","2"],["c","1"]]', true)),
            array(array("a", "4"), json_decode('[["b","5"],["c","6"],["d","7"],["e","8"],["b","3"],["c","2"],["d","1"]]', true)),
            array(array("a", "5"), json_decode('[["b","6"],["c","7"],["d","8"],["b","4"],["c","3"],["d","2"],["e","1"]]', true)),
            array(array("a", "6"), json_decode('[["b","7"],["c","8"],["b","5"],["c","4"],["d","3"],["e","2"],["f","1"]]', true)),
            array(array("a", "7"), json_decode('[["b","8"],["b","6"],["c","5"],["d","4"],["e","3"],["f","2"],["g","1"]]', true)),
            array(array("a", "8"), json_decode('[["b","7"],["c","6"],["d","5"],["e","4"],["f","3"],["g","2"],["h","1"]]', true)),
            array(array("b", "1"), json_decode('[["c","2"],["d","3"],["e","4"],["f","5"],["g","6"],["h","7"],["a","2"]]', true)),
            array(array("b", "2"), json_decode('[["c","3"],["d","4"],["e","5"],["f","6"],["g","7"],["h","8"],["a","3"],["a","1"],["c","1"]]', true)),
            array(array("b", "3"), json_decode('[["c","4"],["d","5"],["e","6"],["f","7"],["g","8"],["a","4"],["a","2"],["c","2"],["d","1"]]', true)),
            array(array("b", "4"), json_decode('[["c","5"],["d","6"],["e","7"],["f","8"],["a","5"],["a","3"],["c","3"],["d","2"],["e","1"]]', true)),
            array(array("b", "5"), json_decode('[["c","6"],["d","7"],["e","8"],["a","6"],["a","4"],["c","4"],["d","3"],["e","2"],["f","1"]]', true)),
            array(array("b", "6"), json_decode('[["c","7"],["d","8"],["a","7"],["a","5"],["c","5"],["d","4"],["e","3"],["f","2"],["g","1"]]', true)),
            array(array("b", "7"), json_decode('[["c","8"],["a","8"],["a","6"],["c","6"],["d","5"],["e","4"],["f","3"],["g","2"],["h","1"]]', true)),
            array(array("b", "8"), json_decode('[["a","7"],["c","7"],["d","6"],["e","5"],["f","4"],["g","3"],["h","2"]]', true)),
            array(array("c", "1"), json_decode('[["d","2"],["e","3"],["f","4"],["g","5"],["h","6"],["b","2"],["a","3"]]', true)),
            array(array("c", "2"), json_decode('[["d","3"],["e","4"],["f","5"],["g","6"],["h","7"],["b","3"],["a","4"],["b","1"],["d","1"]]', true)),
            array(array("c", "3"), json_decode('[["d","4"],["e","5"],["f","6"],["g","7"],["h","8"],["b","4"],["a","5"],["b","2"],["a","1"],["d","2"],["e","1"]]', true)),
            array(array("c", "4"), json_decode('[["d","5"],["e","6"],["f","7"],["g","8"],["b","5"],["a","6"],["b","3"],["a","2"],["d","3"],["e","2"],["f","1"]]', true)),
            array(array("c", "5"), json_decode('[["d","6"],["e","7"],["f","8"],["b","6"],["a","7"],["b","4"],["a","3"],["d","4"],["e","3"],["f","2"],["g","1"]]', true)),
            array(array("c", "6"), json_decode('[["d","7"],["e","8"],["b","7"],["a","8"],["b","5"],["a","4"],["d","5"],["e","4"],["f","3"],["g","2"],["h","1"]]', true)),
            array(array("c", "7"), json_decode('[["d","8"],["b","8"],["b","6"],["a","5"],["d","6"],["e","5"],["f","4"],["g","3"],["h","2"]]', true)),
            array(array("c", "8"), json_decode('[["b","7"],["a","6"],["d","7"],["e","6"],["f","5"],["g","4"],["h","3"]]', true)),
            array(array("d", "1"), json_decode('[["e","2"],["f","3"],["g","4"],["h","5"],["c","2"],["b","3"],["a","4"]]', true)),
            array(array("d", "2"), json_decode('[["e","3"],["f","4"],["g","5"],["h","6"],["c","3"],["b","4"],["a","5"],["c","1"],["e","1"]]', true)),
            array(array("d", "3"), json_decode('[["e","4"],["f","5"],["g","6"],["h","7"],["c","4"],["b","5"],["a","6"],["c","2"],["b","1"],["e","2"],["f","1"]]', true)),
            array(array("d", "4"), json_decode('[["e","5"],["f","6"],["g","7"],["h","8"],["c","5"],["b","6"],["a","7"],["c","3"],["b","2"],["a","1"],["e","3"],["f","2"],["g","1"]]', true)),
            array(array("d", "5"), json_decode('[["e","6"],["f","7"],["g","8"],["c","6"],["b","7"],["a","8"],["c","4"],["b","3"],["a","2"],["e","4"],["f","3"],["g","2"],["h","1"]]', true)),
            array(array("d", "6"), json_decode('[["e","7"],["f","8"],["c","7"],["b","8"],["c","5"],["b","4"],["a","3"],["e","5"],["f","4"],["g","3"],["h","2"]]', true)),
            array(array("d", "7"), json_decode('[["e","8"],["c","8"],["c","6"],["b","5"],["a","4"],["e","6"],["f","5"],["g","4"],["h","3"]]', true)),
            array(array("d", "8"), json_decode('[["c","7"],["b","6"],["a","5"],["e","7"],["f","6"],["g","5"],["h","4"]]', true)),
            array(array("e", "1"), json_decode('[["f","2"],["g","3"],["h","4"],["d","2"],["c","3"],["b","4"],["a","5"]]', true)),
            array(array("e", "2"), json_decode('[["f","3"],["g","4"],["h","5"],["d","3"],["c","4"],["b","5"],["a","6"],["d","1"],["f","1"]]', true)),
            array(array("e", "3"), json_decode('[["f","4"],["g","5"],["h","6"],["d","4"],["c","5"],["b","6"],["a","7"],["d","2"],["c","1"],["f","2"],["g","1"]]', true)),
            array(array("e", "4"), json_decode('[["f","5"],["g","6"],["h","7"],["d","5"],["c","6"],["b","7"],["a","8"],["d","3"],["c","2"],["b","1"],["f","3"],["g","2"],["h","1"]]', true)),
            array(array("e", "5"), json_decode('[["f","6"],["g","7"],["h","8"],["d","6"],["c","7"],["b","8"],["d","4"],["c","3"],["b","2"],["a","1"],["f","4"],["g","3"],["h","2"]]', true)),
            array(array("e", "6"), json_decode('[["f","7"],["g","8"],["d","7"],["c","8"],["d","5"],["c","4"],["b","3"],["a","2"],["f","5"],["g","4"],["h","3"]]', true)),
            array(array("e", "7"), json_decode('[["f","8"],["d","8"],["d","6"],["c","5"],["b","4"],["a","3"],["f","6"],["g","5"],["h","4"]]', true)),
            array(array("e", "8"), json_decode('[["d","7"],["c","6"],["b","5"],["a","4"],["f","7"],["g","6"],["h","5"]]', true)),
            array(array("f", "1"), json_decode('[["g","2"],["h","3"],["e","2"],["d","3"],["c","4"],["b","5"],["a","6"]]', true)),
            array(array("f", "2"), json_decode('[["g","3"],["h","4"],["e","3"],["d","4"],["c","5"],["b","6"],["a","7"],["e","1"],["g","1"]]', true)),
            array(array("f", "3"), json_decode('[["g","4"],["h","5"],["e","4"],["d","5"],["c","6"],["b","7"],["a","8"],["e","2"],["d","1"],["g","2"],["h","1"]]', true)),
            array(array("f", "4"), json_decode('[["g","5"],["h","6"],["e","5"],["d","6"],["c","7"],["b","8"],["e","3"],["d","2"],["c","1"],["g","3"],["h","2"]]', true)),
            array(array("f", "5"), json_decode('[["g","6"],["h","7"],["e","6"],["d","7"],["c","8"],["e","4"],["d","3"],["c","2"],["b","1"],["g","4"],["h","3"]]', true)),
            array(array("f", "6"), json_decode('[["g","7"],["h","8"],["e","7"],["d","8"],["e","5"],["d","4"],["c","3"],["b","2"],["a","1"],["g","5"],["h","4"]]', true)),
            array(array("f", "7"), json_decode('[["g","8"],["e","8"],["e","6"],["d","5"],["c","4"],["b","3"],["a","2"],["g","6"],["h","5"]]', true)),
            array(array("f", "8"), json_decode('[["e","7"],["d","6"],["c","5"],["b","4"],["a","3"],["g","7"],["h","6"]]', true)),
            array(array("g", "1"), json_decode('[["h","2"],["f","2"],["e","3"],["d","4"],["c","5"],["b","6"],["a","7"]]', true)),
            array(array("g", "2"), json_decode('[["h","3"],["f","3"],["e","4"],["d","5"],["c","6"],["b","7"],["a","8"],["f","1"],["h","1"]]', true)),
            array(array("g", "3"), json_decode('[["h","4"],["f","4"],["e","5"],["d","6"],["c","7"],["b","8"],["f","2"],["e","1"],["h","2"]]', true)),
            array(array("g", "4"), json_decode('[["h","5"],["f","5"],["e","6"],["d","7"],["c","8"],["f","3"],["e","2"],["d","1"],["h","3"]]', true)),
            array(array("g", "5"), json_decode('[["h","6"],["f","6"],["e","7"],["d","8"],["f","4"],["e","3"],["d","2"],["c","1"],["h","4"]]', true)),
            array(array("g", "6"), json_decode('[["h","7"],["f","7"],["e","8"],["f","5"],["e","4"],["d","3"],["c","2"],["b","1"],["h","5"]]', true)),
            array(array("g", "7"), json_decode('[["h","8"],["f","8"],["f","6"],["e","5"],["d","4"],["c","3"],["b","2"],["a","1"],["h","6"]]', true)),
            array(array("g", "8"), json_decode('[["f","7"],["e","6"],["d","5"],["c","4"],["b","3"],["a","2"],["h","7"]]', true)),
            array(array("h", "1"), json_decode('[["g","2"],["f","3"],["e","4"],["d","5"],["c","6"],["b","7"],["a","8"]]', true)),
            array(array("h", "2"), json_decode('[["g","3"],["f","4"],["e","5"],["d","6"],["c","7"],["b","8"],["g","1"]]', true)),
            array(array("h", "3"), json_decode('[["g","4"],["f","5"],["e","6"],["d","7"],["c","8"],["g","2"],["f","1"]]', true)),
            array(array("h", "4"), json_decode('[["g","5"],["f","6"],["e","7"],["d","8"],["g","3"],["f","2"],["e","1"]]', true)),
            array(array("h", "5"), json_decode('[["g","6"],["f","7"],["e","8"],["g","4"],["f","3"],["e","2"],["d","1"]]', true)),
            array(array("h", "6"), json_decode('[["g","7"],["f","8"],["g","5"],["f","4"],["e","3"],["d","2"],["c","1"]]', true)),
            array(array("h", "7"), json_decode('[["g","8"],["g","6"],["f","5"],["e","4"],["d","3"],["c","2"],["b","1"]]', true)),
            array(array("h", "8"), json_decode('[["g","7"],["f","6"],["e","5"],["d","4"],["c","3"],["b","2"],["a","1"]]', true)),
        );
    }

    /**
     * @dataProvider moveProvider
     */
    public function testGetPossibleMoves($location, $expectedResult)
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, $location);
        $this->assertSame($expectedResult, $object->getPossibleMoves());
    }

    /**
     * @dataProvider moveProvider
     */
    public function testGetPossibleAttackMoves($location, $expectedResult)
    {
        $object = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, $location);
        $this->assertSame($expectedResult, $object->getPossibleAttackMoves());
    }
}

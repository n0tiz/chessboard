<?php

namespace tests\Chessboard;

use \PHPUnit\Framework\TestCase;

/**
 * @author patrick
 */
class CheassboardTest extends TestCase
{
    
    public function testSetGetChessmanList()
    {
        $object = new \Chessboard\Chessboard();
        $object->setChessmanList(new \Chessboard\ChessmanList());
        $this->assertInstanceOf('\Chessboard\ChessmanList', $object->getChessmanList());
    }
    
    public function removeChessmanProvider()
    {
        return array(
            array(array("a", "1")),
            array(array("a", "2")),
            array(array("a", "3")),
            array(array("a", "4")),
            array(array("a", "5")),
            array(array("a", "6")),
            array(array("a", "7")),
            array(array("a", "8")),
            array(array("b", "1")),
            array(array("b", "2")),
            array(array("b", "3")),
            array(array("b", "4")),
            array(array("b", "5")),
            array(array("b", "6")),
            array(array("b", "7")),
            array(array("b", "8")),
            array(array("c", "1")),
            array(array("c", "2")),
            array(array("c", "3")),
            array(array("c", "4")),
            array(array("c", "5")),
            array(array("c", "6")),
            array(array("c", "7")),
            array(array("c", "8")),
            array(array("d", "1")),
            array(array("d", "2")),
            array(array("d", "3")),
            array(array("d", "4")),
            array(array("d", "5")),
            array(array("d", "6")),
            array(array("d", "7")),
            array(array("d", "8")),
            array(array("e", "1")),
            array(array("e", "2")),
            array(array("e", "3")),
            array(array("e", "4")),
            array(array("e", "5")),
            array(array("e", "6")),
            array(array("e", "7")),
            array(array("e", "8")),
            array(array("f", "1")),
            array(array("f", "2")),
            array(array("f", "3")),
            array(array("f", "4")),
            array(array("f", "5")),
            array(array("f", "6")),
            array(array("f", "7")),
            array(array("f", "8")),
            array(array("g", "1")),
            array(array("g", "2")),
            array(array("g", "3")),
            array(array("g", "4")),
            array(array("g", "5")),
            array(array("g", "6")),
            array(array("g", "7")),
            array(array("g", "8")),
            array(array("h", "1")),
            array(array("h", "2")),
            array(array("h", "3")),
            array(array("h", "4")),
            array(array("h", "5")),
            array(array("h", "6")),
            array(array("h", "7")),
            array(array("h", "8")),
        );
    }
    
    /**
     * @dataProvider removeChessmanProvider
     */
    public function testRemoveChessmanFromLocationTrue($location)
    {
        $chessman = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, $location))
            ->getMockForAbstractClass();
        $object = new \Chessboard\Chessboard();
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList[] = $chessman;
        $object->setChessmanList($chessmanList);
        $this->assertCount(1, $object->getChessmanList());
        $this->assertTrue($object->removeChessmanFromLocation($location));
        $this->assertCount(0, $object->getChessmanList());
    }
    
    /**
     * @dataProvider removeChessmanProvider
     */
    public function testRemoveChessman($location)
    {
        $chessman = $this->getMockBuilder(\Chessboard\AChessman::class)
            ->setConstructorArgs(array(\Chessboard\AChessman::COLOUR_WHITE, $location))
            ->getMockForAbstractClass();
        $object = new \Chessboard\Chessboard();
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList[] = $chessman;
        $object->setChessmanList($chessmanList);
        $this->assertCount(1, $object->getChessmanList());
        $this->assertTrue($object->removeChessman($chessman));
        $this->assertCount(0, $object->getChessmanList());
    }
    
}

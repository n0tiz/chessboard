<?php

namespace tests\Chessboard;

use \PHPUnit\Framework\TestCase;

/**
 * @author patrick
 */
class ChessmanListTest extends TestCase
{

    public function testOffsetSetGetNumeric()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList->offsetSet(0, "test");
        $this->assertSame("test", $chessmanList->offsetGet(0));
    }

    public function testOffsetSetGetNumericArrayUse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList[0] = "test";
        $this->assertSame("test", $chessmanList[0]);
    }

    public function testOffsetSetGetString()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList->offsetSet("offset", "test");
        $this->assertSame("test", $chessmanList->offsetGet("offset"));
    }

    public function testOffsetSetGetStringArrayUse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList["offset"] = "test";
        $this->assertSame("test", $chessmanList["offset"]);
    }

    public function testOffsetExistsNumericFalse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $this->assertFalse($chessmanList->offsetExists(0));
    }

    public function testOffsetExistsNumericFalseArrayUse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $this->assertFalse(isset($chessmanList[0]));
    }

    public function testOffsetExistsStringFalse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $this->assertFalse($chessmanList->offsetExists("offset"));
    }

    public function testOffsetExistsStringFalseArrayUse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $this->assertFalse(isset($chessmanList["offset"]));
    }

    public function testOffsetExistsNumericTrue()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList[0] = "test";
        $this->assertTrue($chessmanList->offsetExists(0));
    }

    public function testOffsetExistsNumericTrueArrayUse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList[0] = "test";
        $this->assertTrue(isset($chessmanList[0]));
    }

    public function testOffsetExistsStringTrue()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList["offset"] = "test";
        $this->assertTrue($chessmanList->offsetExists("offset"));
    }

    public function testOffsetExistsStringTrueArrayUse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList["offset"] = "test";
        $this->assertTrue(isset($chessmanList["offset"]));
    }

    public function testOffsetUnsetNumeric()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList[0] = "test";
        $chessmanList->offsetUnset(0);
        $this->assertFalse(isset($chessmanList[0]));
    }

    public function testOffsetUnsetNumericArrayUse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList[0] = "test";
        unset($chessmanList[0]);
        $this->assertFalse(isset($chessmanList[0]));
    }

    public function testOffsetUnsetString()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList["offset"] = "test";
        $chessmanList->offsetUnset("offset");
        $this->assertFalse(isset($chessmanList["offset"]));
    }

    public function testOffsetUnsetStringArrayUse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList["offset"] = "test";
        unset($chessmanList["offset"]);
        $this->assertFalse(isset($chessmanList["offset"]));
    }

    public function testCountZero()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $this->assertSame(0, $chessmanList->count());
    }

    public function testCountZeroArrayUse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $this->assertSame(0, count($chessmanList));
    }

    public function testCountOne()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList[] = "test";
        $this->assertSame(1, $chessmanList->count());
    }

    public function testCountOneArrayUse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList[] = "test";
        $this->assertSame(1, count($chessmanList));
    }

    public function testCountTwo()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList[] = "test";
        $chessmanList[] = "test";
        $this->assertSame(2, $chessmanList->count());
    }

    public function testCountTwoArrayUse()
    {
        $chessmanList = new \Chessboard\ChessmanList();
        $chessmanList[] = "test";
        $chessmanList[] = "test";
        $this->assertSame(2, count($chessmanList));
    }

    public function testIterator()
    {
        $chessmanList = $this->getMockBuilder(\Chessboard\ChessmanList::class)
                ->disableOriginalConstructor()
                //->setMethods(array("current"))
                ->getMock();
        $chessmanList->expects($this->once())->method("rewind");
        $chessmanList[] = "test";
        $chessmanList[] = "test";
        foreach ($chessmanList as $chessman) {
            $this->assertSame("test", $chessman);
        }
    }

}

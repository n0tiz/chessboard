<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class QueenTest extends AChessmanTest
{

    public function testGetIconWhite()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("q", $object->getIcon());
    }

    public function testGetIconBlack()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("Q", $object->getIcon());
    }

    public function testToStringWhite()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("q", (string) $object);
    }

    public function testToStringBlack()
    {
        $object = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("Q", (string) $object);
    }
}

<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class RookTest extends AChessmanTest
{

    public function testGetIconWhite()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("r", $object->getIcon());
    }

    public function testGetIconBlack()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("R", $object->getIcon());
    }

    public function testToStringWhite()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("r", (string) $object);
    }

    public function testToStringBlack()
    {
        $object = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("R", (string) $object);
    }
}

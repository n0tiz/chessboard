<?php

namespace tests\Chessboard\Chessman;

use tests\Chessboard\AChessmanTest;

/**
 * @author patrick
 */
class KnightTest extends AChessmanTest
{

    public function testGetIconWhite()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("n", $object->getIcon());
    }

    public function testGetIconBlack()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("N", $object->getIcon());
    }

    public function testToStringWhite()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
        $this->assertSame("n", (string) $object);
    }

    public function testToStringBlack()
    {
        $object = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_BLACK, array("a", "1"));
        $this->assertSame("N", (string) $object);
    }
}

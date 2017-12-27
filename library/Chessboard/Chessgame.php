<?php

namespace Chessboard;

use \Chessboard\Chessboard;
use \Chessboard\ChessmanList;
use \Chessboard\AChessman;
use \Chessboard\Chessman\Rook;
use \Chessboard\Chessman\Knight;
use \Chessboard\Chessman\Bishop;
use \Chessboard\Chessman\Queen;
use \Chessboard\Chessman\King;
use \Chessboard\Chessman\Pawn;

/**
 * @author patrick
 */
class Chessgame
{

    /**
     * @var Chessplayer
     */
    protected $whitePlayer;

    /**
     * @var Chessplayer
     */
    protected $blackPlayer;
    protected $turn = 'white';

    /**
     * @var Chessboard
     */
    protected $chessboard;

    public function setWhitePlayer(Chessplayer $whitePlayer)
    {
        $this->whitePlayer = $whitePlayer;
    }

    public function setBlackPlayer(Chessplayer $blackPlayer)
    {
        $this->blackPlayer = $blackPlayer;
    }

    public function initialize()
    {
        $chessboard = new Chessboard();
        $chessmanList = new ChessmanList();
        $chessmanList[] = new Rook(AChessman::COLOUR_BLACK, array("a", "8"));
        $chessmanList[] = new Knight(AChessman::COLOUR_BLACK, array("b", "8"));
        $chessmanList[] = new Bishop(AChessman::COLOUR_BLACK, array("c", "8"));
        $chessmanList[] = new Queen(AChessman::COLOUR_BLACK, array("d", "8"));
        $chessmanList[] = new King(AChessman::COLOUR_BLACK, array("e", "8"));
        $chessmanList[] = new Bishop(AChessman::COLOUR_BLACK, array("f", "8"));
        $chessmanList[] = new Knight(AChessman::COLOUR_BLACK, array("g", "8"));
        $chessmanList[] = new Rook(AChessman::COLOUR_BLACK, array("h", "8"));
        foreach ($chessboard->getFiles() as $file) {
            $chessmanList[] = new Pawn(AChessman::COLOUR_BLACK, array($file, "7"));
            $chessmanList[] = new Pawn(AChessman::COLOUR_WHITE, array($file, "2"));
        }
        $chessmanList[] = new Rook(AChessman::COLOUR_WHITE, array("a", "1"));
        $chessmanList[] = new Knight(AChessman::COLOUR_WHITE, array("b", "1"));
        $chessmanList[] = new Bishop(AChessman::COLOUR_WHITE, array("c", "1"));
        $chessmanList[] = new Queen(AChessman::COLOUR_WHITE, array("d", "1"));
        $chessmanList[] = new King(AChessman::COLOUR_WHITE, array("e", "1"));
        $chessmanList[] = new Bishop(AChessman::COLOUR_WHITE, array("f", "1"));
        $chessmanList[] = new Knight(AChessman::COLOUR_WHITE, array("g", "1"));
        $chessmanList[] = new Rook(AChessman::COLOUR_WHITE, array("h", "1"));
        $chessboard->setChessmanList($chessmanList);
        $this->chessboard = $chessboard;
    }

    public function getChessboard(): Chessboard
    {
        return $this->chessboard;
    }

}

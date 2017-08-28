<?php

namespace Chessboard;

use \Iterator;
use \ArrayAccess;
use \Countable;
use \Utilities\TIterator;
use \Utilities\TCountable;
use \Utilities\TArrayAccess;

/**
 * @author patrick
 */
class ChessmanList implements Iterator, Countable, ArrayAccess
{

    use TIterator,
        TCountable,
        TArrayAccess;

}

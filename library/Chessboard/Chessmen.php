<?php

namespace Chessboard;

use \Iterator;
use \ArrayAccess;
use \Countable;

/**
 * @author patrick
 */
class Chessmen implements Iterator, Countable, ArrayAccess {

    use TIterator;
    use TCountable;
    use TArrayAccess;
}

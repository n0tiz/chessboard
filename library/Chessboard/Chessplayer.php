<?php

namespace Chessboard;

/**
 * @author patrick
 */
class Chessplayer
{

    protected $firstName = '';
    protected $lastName = '';
    protected $nickName = '';

    public function __construct($firstName, $lastName, $nickName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->nickName = $nickName;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getNickName()
    {
        return $this->nickName;
    }

}

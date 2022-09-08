<?php
/*
 * This code was written by enotit.
 * distribution/modification/copying is free (but please mention me).
 * t.me/enotit 9.2022
 *
 */

namespace Index\Classes;
class User
{
    public $name;
    public $session;
    public $isDriver;

    /**
     * @param string $name user's name
     * @param string $session actual session
     * @param bool $isDriver
     * or nothing
     */
    public function __construct(){
        $i = func_get_args();
        if (count($i) === 3){
            $this->name = $i[0];
            $this->session = $i[1];
            $this->isDriver = $i[2];
        } else {
            $this->name = null;
            $this->session = false;
            $this->isDriver = false;
        }
    }

    public function isAuth() : bool
    {
        return $this->session !== null;
    }

    public function getName() : string
    {
        return empty($this->name) ? "none" : $this->name;
    }
}

;
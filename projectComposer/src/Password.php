<?php

namespace App;

class Password
{
    public static function password($value)
    {
        return (bool) preg_match('/^[0-9a-zA-Z]{6,9}$/',$value);
    }
}
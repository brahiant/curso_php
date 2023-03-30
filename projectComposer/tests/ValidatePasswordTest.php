<?php

use PHPUnit\Framework\TestCase;
use App\Password;

class ValidatePasswordTest extends TestCase
{
    public function test_password()
    {
        $password  = Password::password('Abc1234VS');
        $this->assertTrue($password);

        $password  = Password::password('Abc1w');
        $this->assertFalse($password);
    }
}
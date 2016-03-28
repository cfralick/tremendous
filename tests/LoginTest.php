<?php
namespace App\Tests;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * ExampleTest 
 * 
 * @uses TestCase
 * @author Clint Fralick <cfralick@creeperengine.com> 
 */
class LoginTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->visit('/login')
            ->see('Password')
            ->see('E-Mail Address');
        
        $this->visit('/')
            ->click('Login')
            ->seePageIs('/login');
    }
}

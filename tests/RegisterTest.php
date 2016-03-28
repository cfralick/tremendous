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
class RegisterTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->visit('/register')
            ->see('Password')
            ->see('E-Mail Address');
        
        $this->visit('/')
            ->click('Register')
            ->seePageIs('/register');
    }


    /**
     * testNewUserRegistration 
     * 
     * 
     * @return void
     */
    public function testNewUserRegistration()
    {
        $this->visit('/')
            ->click('Register')
            ->seePageIs('/register')
            ->type('Joe Smith', 'name')
            ->type('joe@test.com', 'email')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/');

        $this->seeInDatabase('users', ['email' => 'joe@test.com']);
    }
}

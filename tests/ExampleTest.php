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
class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }

    /**
     * testLogin 
     * 
     * 
     * @return void
     */
    public function testLogin()
    {
        $this->visit('/login')
            ->see('Login');
    }
}

<?php
namespace App\Tests;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\User;
use App\Repositories\UserRepository;


/**
 * RepositoryTest 
 * 
 * @uses TestCase
 * @author Clint Fralick <cfralick@creeperengine.com> 
 */
class RepositoryTest extends TestCase
{
    /**
     * Test creating a Repository class
     *
     * @return void
     */
    public function testRepository()
    {
        $repo = new UserRepository(new User);
        $this->assertInstanceOf(
            UserRepository::class, $repo
        );
    }
}

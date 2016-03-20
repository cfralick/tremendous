<?php
namespace App\Tests;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\Model;
use App\Repositories\AbstractRepository;


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

        $this->assertInstanceOf(
            AbstractRepository::class, new class(new class extends Model{}) extends AbstractRepository {
        });
    }
}

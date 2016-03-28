<?php

namespace App\Repositories;
use App\Models\User;

/**
 * UserRepository 
 * 
 * @author Clint Fralick <cfralick@creeperengine.com> 
 */
class UserRepository
{
    use RepositoryTrait;

    /**
     * __construct 
     * 
     * @param User $user user 
     * 
     * @return void
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }
}

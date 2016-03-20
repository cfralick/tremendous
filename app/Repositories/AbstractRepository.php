<?php

namespace App\Repositories;

use App\Models\Model;


/**
 * AbstractRepository 
 * 
 * @author Clint Fralick <cfralick@creeperengine.com> 
 */
abstract class AbstractRepository
{
    /**
     * model 
     * 
     * @var mixed
     */
    private $model;

    use RepositoryTrait;

    /**
     * __construct 
     * 
     * @param Model $model model 
     * 
     * @return void
     */
    public function __construct(Model $model = null)
    {
        $this->model = $model;
    }
}


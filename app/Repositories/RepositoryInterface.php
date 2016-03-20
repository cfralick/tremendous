<?php

namespace App\Repositories;
use App\Models\Collection;
use App\Models\ModelInterface;

/**
 * RepositoryInterface 
 * 
 * @author Clint Fralick <cfralick@creeperengine.com> 
 */
interface RepositoryInterface
{
    /**
     * get 
     * 
     * @param int $id id 
     * 
     * @return void
     */
    public function get(int $id): ModelInterface;

    /**
     * findBy 
     * 
     * @param string $field field 
     * @param mixed $value value 
     * @param array $columns columns 
     * 
     * @return void
     */
    public function findBy(string $field, $value, array $columns = ['*']): Collection;

    /**
     * all 
     * 
     * @param array $columns columns 
     * 
     * @return void
     */
    public function all(array $columns = ['*']): Collection;

    /**
     * create 
     * 
     * @param array $attributes attributes 
     * 
     * @return void
     */
    public function create(array $attributes): ModelInterface;

    /**
     * update 
     * 
     * @param int $id id 
     * @param array $attributes attributes 
     * 
     * @return void
     */
    public function update(int $id, array $attributes): ModelInterface;

    /**
     * delete 
     * 
     * @param int $id id 
     * 
     * @return void
     */
    public function delete(int $id): bool;



}

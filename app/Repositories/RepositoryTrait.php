<?php

namespace App\Repositories;
use App\Models\Collection;
use App\Models\ModelInterface;


trait RepositoryTrait
{
    /**
     * get 
     * 
     * @param int $id id 
     * 
     * @return void
     */
    public function get(integer $id): ModelInterface
    {
        return $this->model->findOrFail($id);
    }

    /**
     * findBy 
     * 
     * @param string $field field 
     * @param mixed $value value 
     * @param array $columns columns 
     * 
     * @return void
     */
    public function findBy(string $field, $value, array $columns = ['*']): Collection
    {
        return $this->model->where($field, $value)->get($columns);
    }

    /**
     * all 
     * 
     * @param array $columns columns 
     * 
     * @return void
     */
    public function all(array $columns = ['*']): Collection
    {
        return $this->model->get($columns);
    }

    /**
     * delete 
     * 
     * @param int $id id 
     * 
     * @return void
     */
    public function delete(integer $id): bool
    {
        return $this->model->delete($id);
    }

    /**
     * create 
     * 
     * @param array $attributes attributes 
     * 
     * @return void
     */
    public function create(array $attributes): ModelInterface
    {
        return $this->model->create($attributes);
    }
    /**
     * update 
     * 
     * @param int $id id 
     * @param array $attributes attributes 
     * 
     * @return void
     */
    public function update(integer $id, array $attributes): ModelInterface
    {
        $inst = $this->get($id);
        $inst->update($attributes);
        return $inst;
    }
}

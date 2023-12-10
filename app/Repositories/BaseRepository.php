<?php

namespace App\Repositories;

abstract class BaseRepository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->model = app()->make($this->model());
    }

    /**
     * get model
     * @return string
     */
    abstract public function model();

    /**
     * Retrieve all data of repository
     */
    public function all($columns = ['*'])
    {
        return $this->model->all($columns);
    }

    /**
     * Retrieve all data of repository
     */
    public function get($columns = ['*'], $conditions = [], $order = 'ASC', $nonNullFields = [])
    {
        $builder = $this->model;
        $builder = $builder->where($conditions);
        if (isset($nonNullFields) && count($nonNullFields) > 0) {
            foreach ($nonNullFields as $nonNullField) {
                $builder = $builder->whereNotNull($nonNullField);
            }
        }
        $builder = $builder->orderBy('id', $order);
        $builder = $builder->select($columns);
        return $builder->get();
    }

    /**
     * Retrieve all data of repository
     */
    public function first($columns = ['*'], $conditions = [])
    {
        $builder = $this->model;
        $builder = $builder->where($conditions);
        $builder = $builder->select($columns);
        return $builder->first();
    }

    /**
     * Retrieve all data of repository, paginated
     */
    public function paginate($limit = null, $columns = ['*'])
    {
        $limit = is_null($limit) ? config('constants.global.paginate.limit') : $limit;

        return $this->model->paginate($limit, $columns);
    }

    /**
     * Find data by id
     */
    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }

    /**
     * Latest Record
     */
    public function latest($columns = ['*'])
    {
        return $this->model->latest()->select($columns)->first();
    }

    /**
     * Save a new entity in repository
     */
    public function create($input)
    {
        return $this->model->create($input);
    }

    /**
     * Update a entity in repository by id
     */
    public function update($input, $id)
    {
        $model = $this->model->find($id);
        if (isset($model)) {
            $model->fill($input);
            $model->save();
        }
        return $model;
    }

    /**
     * Delete a entity in repository by id
     *
     * @param $id
     *
     * @return int
     */
    public function delete($id)
    {
        $record = $this->find($id);

        if (isset($record)) {
            return $this->model->destroy($id);
        }

        return $record;
    }

    /**
     * Delete a entity in repository by id
     *
     * @param $id
     *
     * @return int
     */
    public function deleteByCondition($conditions = [], $first = false)
    {
        $result = [];
        if ($first == true) {
            $result = $this->model->where($conditions)->delete();
        } else {
            $result = $this->model->where($conditions)->delete();
        }

        return $result;
    }

    /**
     * Count all entities in repository
     *
     *
     * @return int
     */
    public function count()
    {
        return $this->model->all()->count();
    }

    /**
     * Count entities with Conditions in repository
     *
     *
     * @return int
     */
    public function countWithConditions($conditions = [], $isNull = true)
    {
        $builder = $this->model->where($conditions)->get();

        if (isset($isNull) && $isNull) {
            $builder = $builder->whereNotNull('plan_id');
        }

        return $builder->count();
    }

    public function findByCondition(array $condition)
    {   
        return $this->model->where($condition)->first();
    }

    public function updateOrCreate($condition = [], $data)
    {
        return $this->model->updateOrCreate($condition, $data);
    }
}

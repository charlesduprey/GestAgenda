<?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 09/12/2015
 * Time: 20:02
 */

namespace App\Repositories;

abstract class ResourceRepository
{

    protected $model;

    public function getPaginate($n)
    {
        return $this->model->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->model->create($inputs);
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
        $this->getById($id)->fill($inputs)->save();
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

}
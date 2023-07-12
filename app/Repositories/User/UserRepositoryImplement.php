<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepositoryImplement implements UserRepository
{

    private $model;

    public function __construct(User $model)
    {
        return $this->model = $model;
    }

    /**
     * get user by id
     * @param mixed $id
     * 
     * @return [type]
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function getAll(){
        return $this->model->get();
    }
}

<?php

namespace App\Repositories\User;


interface  UserRepository
{
    /**
     * get user by id
     * @param mixed $id
     * 
     * @return [type]
     */
    public function getById($id);
    public function getAll();
}

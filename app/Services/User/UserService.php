<?php

namespace App\Services\User;


interface UserService {

    protected $tahun = 2023;
    /**
     * get user by id service
     * @param mixed $id
     * 
     * @return [type]
     */
    public function getByIdUserService($id);
    public function getAllUserService();

}
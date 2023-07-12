<?php

namespace App\Services\User;

use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;

class UserServiceImplement implements UserService
{

    /**
     * @var [type]
     */
    protected $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param mixed $id
     * 
     * @return [type]
     */
    public function getByIdUserService($id)
    {
        try {
            $this->tahun;
            return $this->userRepository->getById($id);
        } catch (\Exception $e) {
            Log::debug($e->getMessage());
            return [];
        }
    }

    public function getAllUserService()
    {
        try {
            return $this->userRepository->getAll();
        } catch (\Exception $e) {
            Log::debug($e->getMessage());
            return [];
        }
    }
}

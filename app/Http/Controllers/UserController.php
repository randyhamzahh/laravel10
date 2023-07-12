<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepository;
use App\Services\User\UserService;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param mixed $id
     * 
     * @return [type]
     */
    public function getSinggleUser($id)
    {
        $result = $this->userService->getByIdUserService($id);

        return response()->json([
            "success" => true,
            "code" => 200,
            "data" => $result
        ]);
    }

    /**
     * @return [type]
     */
    public function getAllUser()
    {
        $result = $this->userService->getAllUserService();

        return response()->json([
            "success" => true,
            "code" => 200,
            "data" => $result
        ]);
    }
}

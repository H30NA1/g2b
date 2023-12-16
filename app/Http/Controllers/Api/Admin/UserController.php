<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Services\Api\UserService;
use Illuminate\Http\Request;
use Throwable;

class UserController extends Controller
{
    private $userService;
    public function __construct(
            UserService $userService
        )
    {
       $this->userService = $userService; 
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $users = $this->userService->getUsers($data);
            return response()->json([
                'message' => 'Users'

            ], 200);
        } catch (Throwable $e) {
            report($e);
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}

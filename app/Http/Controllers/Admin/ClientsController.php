<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\UserService;
use Illuminate\Http\Request;
use Throwable;

class ClientsController extends Controller
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
            return view('admin.pages.clients.index', compact('users'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('admin.index');
        }
    }

    public function add()
    {
        return view('admin.pages.clients.add');
    }

    
    public function store()
    {
        return redirect()->route('admin.clients.index');
    }

    public function edit()
    {
        return view('admin.pages.clients.edit');
    }

    
    public function update()
    {
        return redirect()->route('admin.clients.index');
    }
}

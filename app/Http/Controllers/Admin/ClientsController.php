<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.clients.index');
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

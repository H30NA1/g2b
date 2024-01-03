<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinancesController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.finances.index');
    }

    public function add()
    {
        return view('admin.pages.finances.add');
    }

    
    public function store()
    {
        return redirect()->route('admin.finances.index');
    }

    public function edit()
    {
        return view('admin.pages.finances.edit');
    }

    
    public function update()
    {
        return redirect()->route('admin.finances.index');
    }
}

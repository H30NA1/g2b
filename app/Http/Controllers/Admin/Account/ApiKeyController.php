<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiKeyController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.account.api-keys.index');
    }
}

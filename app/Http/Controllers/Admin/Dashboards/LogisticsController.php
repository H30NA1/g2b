<?php

namespace App\Http\Controllers\Admin\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogisticsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.dashboards.logistics.index');
    }
}

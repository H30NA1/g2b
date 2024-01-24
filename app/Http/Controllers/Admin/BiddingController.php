<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiddingController extends Controller
{
    public function __construct()
    {
    }

    public function bidding()
    {
        return view('admin.pages.bidding.index');
    }
}

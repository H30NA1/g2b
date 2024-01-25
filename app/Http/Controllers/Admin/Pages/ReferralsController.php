<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReferralsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.account.referrals.index');
    }
}

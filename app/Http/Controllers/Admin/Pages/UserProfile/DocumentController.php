<?php

namespace App\Http\Controllers\Admin\Pages\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function __construct()
    {
    }

    public function document()
    {
        return view('admin.pages.user-profile.documents.index');
    }
}

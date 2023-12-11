<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Throwable;

class ProfileController extends Controller
{

    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $user = $request->user();
        try {
            return response()->json([
                'message' => 'Dashboard',
                'user' => $user
            ], 200);
        } catch (Throwable $e) {
            report($e);
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}

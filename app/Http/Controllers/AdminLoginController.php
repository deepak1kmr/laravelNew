<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminDashboardController;

class AdminLoginController extends Controller
{
    public function index()
    {
        return View::make('admin/login');
    }

    public function auth(Request $request)
    {
        if(Auth::attempt(['email'=>$request['username'],'password'=>$request['password']])) {
            return redirect()->action([AdminDashboardController::class, 'index']);
        }
    }
}

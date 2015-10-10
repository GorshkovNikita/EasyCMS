<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('cms.dashboard');
    }

    public function getLogin()
    {
        if (Auth::check() && Auth::user()->isAdmin())
            return redirect('admin');
        return view('cms.login');
    }

    public function getRegister()
    {
        return view('cms.register');
    }
}

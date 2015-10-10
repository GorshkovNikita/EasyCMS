<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('cms.dashboard');
    }

    public function getLogin()
    {
        return view('cms.login');
    }
}

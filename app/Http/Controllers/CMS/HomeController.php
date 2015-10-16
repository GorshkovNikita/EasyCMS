<?php

namespace App\Http\Controllers\CMS;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use EasyCMS\Models\Post;

class HomeController extends Controller
{
    public function getIndex()
    {
        //$post = Post::whereId(1)->first();
        //$author = User::whereId($post->author_id)->first();
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

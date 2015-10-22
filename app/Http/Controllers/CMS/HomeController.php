<?php

namespace App\Http\Controllers\CMS;

use App\EasyCMS\CategoryType;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\EasyCMS\Models\Post;
use Mockery\Exception;

class HomeController extends Controller
{
    public function getIndex()
    {
//        $posts = Post::categories_by_type(CategoryType::PRODUCTS);
//
//        $category = Post::whereId(10)->first();
//        $subcategories = $category->subcategories();

//        $post = Post::whereId(20)->first();
//        $category = $post->category();

        $category = Post::whereId(17)->first();
        $products = $category->products();

        return view('cms.dashboard');
    }

    public function getLogin()
    {
        if (Auth::check() && Auth::user()->is_admin())
            return redirect('admin');
        return view('cms.login');
    }

    public function getRegister()
    {
        return view('cms.register');
    }
}

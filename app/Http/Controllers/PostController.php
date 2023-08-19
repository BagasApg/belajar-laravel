<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Monolog\Handler\IFTTTHandler;

class PostController extends Controller
{
    public function index(){

        $title = 'All Blogs';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'Blogs in ' . $category->name;
        }
        if(request('author')){
            $user = User::firstWhere('username', request('author'));
            $title = 'Blogs by ' . $user->name;
        }

        return view('posts', [
            "title" => $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))
            ->paginate(6)->withQueryString()
            // "posts" => Post::all()
        ]);
    }

    public function showPost(Post $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}



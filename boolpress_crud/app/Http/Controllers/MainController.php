<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MainController extends Controller
{
    public function index() {
        return view('home');
    }
    public function posts() {

        $data = Post::all();
        return view('posts');
    }
}

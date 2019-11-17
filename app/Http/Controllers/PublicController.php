<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class PublicController extends Controller
{
    public function index(){
        public function index()
        {
            $blogs = Blog::all();
            return view('blogs.show')->with(compact('blog'));
        }
    }
}

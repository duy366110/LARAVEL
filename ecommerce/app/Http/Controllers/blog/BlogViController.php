<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogViController extends Controller
{
    public function index() {
        return view("blog.blog-vi");
    }
}

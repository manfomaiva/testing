<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class BlogSingleController extends Controller
{
    public function index()
    {
        return view('frontend.pages.blog_single');
    }
}

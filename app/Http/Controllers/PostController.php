<?php

namespace App\Http\Controllers;

use App\post;

class PostController extends Controller
{
    public function index()
	{
	return view('post.index');	
	}

}


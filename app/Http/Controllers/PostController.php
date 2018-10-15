<?php

namespace App\Http\Controllers;

use App\post;

class PostController extends Controller
{
    public function index()
	{
	return view('post.index');	
	}

	public function create()
	{
	return view('post.create');	
	}
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;

class CommentController extends Controller
{
	public function index()
	{
		$comments=comment::all();
		return view('welcome',compact('comments'));
	}
    public function store()
    {
    	$user=comment::create(request(['body']));
    	return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index() {
        $myPost = Post::all();
        return view('index', compact('myPost'));
    }

    function delete($id) {
        $myPost = Post::find($id);
        $myPost->delete();
        return redirect()->back();
    }

}

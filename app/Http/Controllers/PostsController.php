<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\Post;
use App\Http\Requests;

class PostsController extends Controller
{
    public function show($id)
    {
    	//auth()->logInUsingId(1);
    	auth()->logOut();
    	$post = Post::findOrFail($id);

    	//$this->authorize('show-post', $post);


    	// if(Gate::denies('show-post', $post)){
    	// 	abort(403, 'Sorry not sorry');
    	// }

    	// if(auth()->user()->can('update-post', $post)){
    	// 	return 'You can update post!';
    	// }

    	if(Gate::denies('update', $post)){
    		abort(403, 'Nope');
    	}

    	return view('posts.show', compact('post'));
    }
}

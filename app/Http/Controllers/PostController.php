<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller

{

  public function index(){

    $posts = Post::latest()->get(); //'oldest' for ascending order

    return view('posts.index', compact('posts'));

  }

  public function show(Post $post){

    return view('posts.show', compact('post'));
  }

  public function create(){

    return view('posts.create');
  }

  public function store(){

//built-in validation method
$this->validate(request(), [

  'title' => 'required',

  'body' => 'required'
]);
  // $post = new Post;
  //
  // $post->title = request('title');
  //
  // $post->body = request('body');

  // $post->save(); //instead of all the above, use the create method
  // below and it'll save it for you:

POST::create([

  'title' => request('title'),
  'body' => request('body')

]);

  return redirect('/');


  }

}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
  public function index(){

    $posts = Post::latest(); //'oldest' for ascending order

    ->filter(request(['month', 'year']))

    ->get();

    $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')

      ->groupBy('year', 'month')

      ->orderByRaw('min(created_at) desc') //raw allows us to paste raw SQL queries in quotes

      ->get()

      ->toArray();

    return view('posts.index', compact('posts','archives'));

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

auth()->user()->publish(

  new Post(request(['title', 'body']))

);
  // $post = new Post;
  //
  // $post->title = request('title');
  //
  // $post->body = request('body');
  // $post->save(); //instead of all the above, use the create method
  // below and it'll save it for you:

  return redirect('/');
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

class AdminController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    if (Auth::check()) {
      $user = Auth::user();
      $posts = Post::latest()->where("posts.user_id", "=", $user->id)->get();
    } else {
      $posts = Post::latest()->get();
      return view('post.index', compact('posts'));
    }

    return view('admin.index', compact('posts'));
  }
}

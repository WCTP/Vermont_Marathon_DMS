<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Auth;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
      /* If there is a query for a certain date
       / fetch posts, otherwise fetch all Posts
      */
      if (request(['month', 'year'])) {
        $posts = Post::latest()
          ->filter(request(['month', 'year']))
          ->get();
      } else {
        $posts = Post::latest()->get();
      }

      return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
      return view('posts.show', compact('post'));
    }

    public function create()
    {
      return view('posts.create');
    }

    public function store()
    {
      $this->validate(request(), [
        'bib_number' => 'required',
        'location' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'age' => 'required',
        'sex' => 'required',
        'time_in' => 'required',
        'chief_complaint' => 'required',
        'provider_name' => 'required',
      ]);

      auth()->user()->publish(
        new Post(request(['bib_number', 'location', 'first_name', 'middle_name',
          'last_name', 'age', 'sex', 'city', 'state', 'country', 'pt_info',
          'time_in', 'time_out', 'race_chip_collected', 'medal_given',
          'relevant_medical_history', 'allergies', 'current_meds', 'chief_complaint',
          'vital_signs_1', 'vital_signs_2', 'vital_signs_3', 'treatment', 'diagnosis',
          'disposition', 'disposition_time', 'disposition_transportation',
          'family_notification', 'treatment_notes', 'provider_name',
          'provider_prefix', 'provider_signature'
        ]))
      );

      return redirect('/');
    }

    public function delete(Post $post)
    {
      if (Auth::check()) {
        $user = Auth::user();
        if ($post->user == $user) {
          $post->delete();
        }
      }

      return back();
    }

    public function edit(Post $post)
    {
      if (Auth::check()) {
        $user = Auth::user();
        if ($user == $post->user) {
          return view('admin.show', compact('post'));
        }
      }
    }

    public function update(Post $post, Request $request)
    {
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      if (Auth::check()) {
        $user = Auth::user();
        if ($user == $post->user) {
          $post->update($request->all());
        }
      }

      $posts = Post::latest()->where("posts.user_id", "=", $user->id)->get();

      return view('admin.index', compact('posts'));
    }
}

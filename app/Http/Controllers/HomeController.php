<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('home');
    }

    public function resume()
    {
      return view('resume');
    }

    public function search()
    {
      $keyword = Post::get_keyword();

      $results = Post::where('bib_number', 'LIKE', '%' . $keyword . '%')
        ->get()->toArray();

      return $results;
    }
}

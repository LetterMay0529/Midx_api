<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::all();
    }

    public function store(Request $request)
    {
        
            return Movie::create($request->all());
    }

    public function show($movie)
    {
        //show a post
        return Movie::find($movie);
    }

    public function update(Request $request, $movie)
    {
        //update a post

      $movie = Movie::find($movie);
      $movie->update($request->all());

      return $movie;
    }

    public function destroy($movie)
    {
        return Movie::destroy($movie);
    }

}

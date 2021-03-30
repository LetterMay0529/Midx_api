<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viewer;

class ViewerController extends Controller
{
    public function index()
    {
        return Viewer::all();
    }

    public function store(Request $request)
    {
        
            return Viewer::create($request->all());
    }

    public function show($viewer)
    {
        //show a post
        return Viewer::find($viewer);
    }

    public function update(Request $request, $viewer)
    {
        //update a post

      $viewer = Viewer::find($viewer);
      $viewer->update($request->all());

      return $viewer;
    }

    public function destroy($viewer)
    {
        return Viewer::destroy($viewer);
    }

    public function byViewer(Viewer $viewer){
        return Viewer::with('movies','schedules')->where('viewers.id', $viewer->id)->get();
    }
    
     public function Viewer(Viewer $viewer){
       return Viewer::with('movies')->where('id', $viewer->id)->get();
    }
}

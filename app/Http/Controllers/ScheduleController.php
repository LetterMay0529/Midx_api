<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        return Schedule::all();
    }

    public function store(Request $request)
    {
        
            return Schedule::create($request->all());
    }

    public function show($schedule)
    {
        //show a post
        return Schedule::find($schedule);
    }

    public function update(Request $request, $schedule)
    {
        //update a post

      $schedule = Schedule::find($schedule);
      $schedule->update($request->all());

      return $schedule;
    }

    public function destroy($schedule)
    {
        return Schedule::destroy($schedule);
    }

}

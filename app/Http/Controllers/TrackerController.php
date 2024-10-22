<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tracker;

class TrackerController extends Controller
{
    public function index(){
        $trackers = Tracker::all();
        return view('trackers.index',['trackers' => $trackers]);
    }

    public function create(){
        return view('trackers.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'project_manager' => 'required',
            'total_member' => 'required|numeric',
            'desc' => 'required'

        ]);

        $newItem = Tracker::create($data);
        return redirect(route('tracker.index'));

    }

    public function edit(Tracker $tracker){
        return view('trackers.edit',['tracker' => $tracker]);
    }

    public function update(Tracker $tracker, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'project_manager' => 'required',
            'total_member' => 'required|numeric',
            'desc' => 'required'

        ]);

        $tracker -> update($data);
        return redirect(route('tracker.index'))-> with ('success', 'Project is updated!');

    }

    public function destroy(Tracker $tracker){
        $tracker -> delete();
        return redirect(route('tracker.index'))-> with ('deleted', 'Project is deleted');

    }
}

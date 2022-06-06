<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::where('deleted_at', null)->get();
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teammember = new Team;
        $teammember->name = $request->name;
        $teammember->position = $request->position;
        $teammember->image = $request->image;
        $teammember->fb_link = $request->fb_link;
        $teammember->ins_link = $request->ins_link;
        $teammember->twi_link = $request->twi_link;
        $teammember->order_no = $request->order_no;
        $teammember->save();
        return redirect()->route('team.index')->with('success', 'Team Member Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($teamId)
    {
        $teammember = Team::find($teamId);
        return view('admin.team.edit', compact('teammember'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $teamId)
    {
        $teammember = Team::find($teamId);
        $teammember->name = $request->name;
        $teammember->position = $request->position;
        $teammember->image = $request->image;
        $teammember->fb_link = $request->fb_link;
        $teammember->ins_link = $request->ins_link;
        $teammember->twi_link = $request->twi_link;
        $teammember->order_no = $request->order_no;
        $teammember->status = $request->status;
        $teammember->save();
        return redirect()->route('team.index')->with('message', 'Team Member Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($teamId)
    {
        $teammember = Team::withTrashed()->find($teamId);
        if ($teammember->trashed()) {
            $teammember->forceDelete();
        } else {
            $teammember->delete();
        }
        return redirect()->route('team.index')->with('message', 'Team Member Deleted Successfully');
    }

    public function binindex()
    {
        $teams = Team::onlyTrashed()->get();
        return view('admin.team.bin', compact('teams'));
    }

    public function restore($teamId){
        $teammember = Team::withTrashed()->find($teamId);
        $teammember->restore();
        return redirect()->route('team.index')->with('message', 'Team Member Restored Successfully');
    }
}

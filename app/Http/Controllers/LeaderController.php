<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $staffs = User::where('leader', 'LIKE', '%' . $user->name . '%')->get();
        

        return view('leader.index', ['staffs' => $staffs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $newstaff = User::whereNull('leader')->get();

        return view('leader.create', ['newstaff' => $newstaff]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
    
        User::where('name', $request->name)->update(['leader' => Auth::user()->name]);
    
        return redirect()->route('leader.index')->with('success', 'Staff added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Leader $leader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leader $leader)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leader $leader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leader $leader)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use Carbon\Carbon as CarbonCarbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $planning = Planning::all();
        return view ('planning.index', compact('planning'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('planning.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $planning= new Planning();

        $planning->planningname =$request->name;
        // $hari_ini = Carbon::now()->timestamp;
        $planning->date= $request->dateform;
        $planning->description=$request->desc;
        // dd($planning);
        $planning->save();
        return redirect()->route('planning.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Planning $planning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planning $planning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planning $planning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planning $planning)
    {
        //
    }
}

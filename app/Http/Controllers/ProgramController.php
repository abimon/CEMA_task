<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $programs = Program::all();
        return view("programs.index", compact("programs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        // validate the request
        $this->validate(request(), [
            'title' => 'required',
            'code' => 'required|unique:programs,code',
            'description' => 'required',
        ]);
        // create the program
        Program::create([
            'title' => request('title'),
            'code' => request('code'),
            'description' => request('description'),
        ]);
        // redirect back with success message
        return redirect()->back()->with('success', 'Program created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        //
    }
}

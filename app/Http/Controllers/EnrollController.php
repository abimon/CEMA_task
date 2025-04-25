<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $val=$this->validate(request(), [
            'user_id' => 'required',
            'program_id' => 'required',
        ]);
        
        // create the enrollment
        if(Enroll::where('client_id', request('user_id'))->where('program_id', request('program_id'))->exists()){
            return redirect()->back()->with('error', 'Enrollment already exists');
        }
        Enroll::create([
            'client_id' => request('client_id'),
            'program_id' => request('program_id'),
            'is_active' => true,
        ]);
        // redirect back with success message
        return redirect()->back()->with('success', 'Enrollment created successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Enroll $enroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enroll $enroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enroll $enroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enroll $enroll)
    {
        //
    }
}

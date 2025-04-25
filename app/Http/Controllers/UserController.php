<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'gender' => 'required',
            'address' => 'required'
        ]);
        $password = uniqid();
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'address' => request('address'),
            'gender' => request('gender'),
            'membership_no' => uniqid('CEMA-'),
            'password'=>Hash::make($password),
        ]);
        return redirect()->back()->with('success','User created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $user= User::findOrFail($id);
        if (request('name') != null) {
            $user->name = request('name');
        }
        if (request('email') != null) {
            $user->email = request('email');
        }
        if (request('phone') != null) {
            $user->phone = request('phone');
        }
        if (request('address') != null) {
            $user->address = request('address');
        }
        if (request('gender') != null) {
            $user->gender = request('gender');
        }
        if (request('role') != null) {
            $user->role = request('role');
        }
        if (request('status') != null) {
            $user->status = request('status');
        }
        if (request()->hasFile('avatar')) {
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('/storage/avatars'), $avatarName);
            $user->avatar = '/storage/avatars/' . $avatarName;
        }
        if (request('membership_no') != null) {
            $user->membership_no = request('membership_no');
        }
        if (request('password') != null) {
            
            $this->validate(request(), [
                'password' => 'required|min:8|confirmed',
            ]);
            // hash check old password
            if (!Hash::check(request('oldpassword'), $user->password)) {
                return back()->with('error', 'Old password is incorrect');
            }
            $user->password = Hash::make(request('password'));
        }
        $user->update();
        return back()->with('success', 'Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back-end.account', [
            'title' => 'Account Settings',
            'user' => (new User)->getUserAuth(),
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {

        return view('back-end.account-edit', [
            'title' => 'Account Settings',
            'user' => $user,
        ]);
    }

    /**'
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'email' => 'required',
            'fullname' => 'required',
            'username' => 'required',
        ]);

        if ($request->has('password')) {
            $data['password'] = $request->input('password') ? bcrypt($request->input('password')) : $user->password;
        }

        $user->update($data);
        return redirect('/dashboard/user')->with('success', 'User has been updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'User has been deleted');
    }
}

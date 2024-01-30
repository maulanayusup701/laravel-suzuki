<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back-end.settings', [
            'title' => 'Web Settings',
            'infos' => (new Information)->getInformation(),
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
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Information $information)
    {
        return view('back-end.settings-edit', [
            'title' => 'Web Settings',
            'info' => $information,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Information $information)
    {
        $data = $request->validate([
            'address' => 'required',
            'email' => 'required',
            'whatsapp' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'x' => 'required',
        ]);

        $information->update($data);
        return redirect()->route('information.index')->with('success', 'Information has been updated!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Information $information)
    {
        //
    }
}

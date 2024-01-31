<?php

namespace App\Http\Controllers\web;

use App\Models\carousell;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CarousellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back-end.carousell.index', [
            'title' => 'Carousell',
            'carousell' => (new Carousell)->getCarousell(),
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
    public function show(carousell $carousell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(carousell $carousell)
    {
        return view('back-end.carousell.carousell-edit', [
            'title' => 'Edit Carousell',
            'carousell' => $carousell
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, carousell $carousell)
    {
        $data = $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg|max:1024',
        ]);

        if ($request->hasFile('image')) {
            if ($carousell->image) {
                Storage::delete($request->oldImage);
            }

            $data['image'] = $request->file('image')->store('carousell-images');
        }

        $carousell->update($data);

        return redirect()->route('carousell.index')->with('success', 'Carousell has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(carousell $carousell)
    {
        //
    }
}

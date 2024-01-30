<?php

namespace App\Http\Controllers\web;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        return view('back-end.testimonial.index', [
            'title' => 'Testimoni Users',
            'testis' => $search ? (new Testimonial)->searchTestimonialsDashboard($search)
                : (new Testimonial)->getTestimonialsDashboard(),
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back-end.testimonial.testimonial-add', [
            'title' => 'Tambah Testimoni User',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'fullname' => 'required',
            'comment' => 'required',
            'image' => 'required | image | max:1024 | mimes:png,jpg,jpeg ',
            // | dimensions:ratio=3/2
        ]);
        
        $data['image'] = $request->file('image')->store('testimonial-images');
        Testimonial::create($data);
        return redirect()->route('testimonial.index')->with('success', 'Product has been updated!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('back-end.testimonial.testimonial-edit', [
            'title' => 'Testimoni Users Edit',
            'testi' => $testimonial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'fullname' => 'required',
            'comment' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:1024',
        ]);

        if ($request->hasFile('image')) {
            if ($testimonial->image) {
                Storage::delete($request->oldImage);
            }

            $data['image'] = $request->file('image')->store('testimonial-images');
        }

        $testimonial->update($data);

        return redirect()->route('testimonial.index')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('success', 'Testimonial has been deleted!');
    }
}

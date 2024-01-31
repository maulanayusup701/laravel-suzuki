<?php

namespace App\Http\Controllers\web;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        return view('back-end.product.index', [
            'title' => 'Products',
            'products' => $search ? (new Product)->searchProducts($search)
            : (new Product)->getProductsDashboard(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back-end.product.product-add', [
            'title' => 'Tambah Product',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'otr' => 'required',
            'description' => 'required',
            'image' => 'required | image | max:1024 | mimes:png,jpg,jpeg,webp',
            // | dimensions:ratio=3/2
        ]);
        
        $data['image'] = $request->file('image')->store('product-images');
        Product::create($data);
        return redirect()->route('product.index')->with('success', 'Product has been updated!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('back-end.product.product-edit', [
            'title' => 'Edit Product',
            'product' => $product,  
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
        $data = $request->validate([
            'name' => 'required',
            'otr' => 'required|numeric',
            'image' => 'image|mimes:png,jpg,jpeg,webp|max:1024',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::delete($request->oldImage);
            }

            $data['image'] = $request->file('image')->store('product-images');
        }

        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', 'Product has been deleted!');
    }
}

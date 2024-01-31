<?php

namespace App\Http\Controllers\web;

use App\Models\Product;
use App\Models\Carousell;
use App\Models\Information;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LandingPageController extends Controller{
    
    public function index(){
        return view('front-end.index',[
            'title' => 'Suzuki Purwakarta',
            'infos' =>  (new Information())->getInformation(),
            'products' =>  (new Product())->getProducts(),
            'testis' => (new Testimonial())->getTestimonials(),
            'carousell' => (new Carousell)->getCarousell()
        ]);
    }

    public function paginate(Request $request)
    {
        dd($request->ajax());
        if ($request->ajax()) {
            // Ambil data produk berdasarkan halaman yang diminta
            $products = Product::paginate(10, ['*'], 'page', $request->page);

            return View::make('your-partial-view', compact('products'));
        }

        // Jika bukan AJAX, mungkin lakukan penanganan berbeda
        return redirect()->route('your.route.name');
    }
}

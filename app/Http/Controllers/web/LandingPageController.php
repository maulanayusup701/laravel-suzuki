<?php

namespace App\Http\Controllers\web;

use App\Models\Product;
use App\Models\Information;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller{
    
    public function index(){
        return view('front-end.index',[
            'title' => 'Suzuki Purwakarta',
            'infos' =>  (new Information())->getInformation(),
            'products' => (new Product())->getProducts(),
            'testimonials' => (new Testimonial())->getTestimonials()
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getTestimonials(){
        return Testimonial::latest()->take(6)->get();
    }

    public function getTestimonialsDashboard(){
        return Testimonial::latest()->paginate(6);
    }

    public function searchTestimonialsDashboard($search){
        return Testimonial::where('fullname', 'like', '%' . $search . '%')
            ->orWhere('comment', 'like', '%' . $search . '%')
            ->paginate(6);
    }
}

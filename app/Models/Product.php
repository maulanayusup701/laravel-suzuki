<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getProducts(){
        return Product::orderBy('name')->simplePaginate(8);
    }

    public function getProductsDashboard(){
        return Product::orderBy('name')->paginate(8);
    }

    public function searchProducts($search){
        return Product::where('name', 'like', '%' . $search . '%')
            ->paginate(6);
    }
}

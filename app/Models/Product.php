<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getProducts(){
        return Product::orderBy('type')->paginate(6);
    }

    public function searchProducts($search){
        return Product::where('type', 'like', '%' . $search . '%')
            ->paginate(6);
    }
}

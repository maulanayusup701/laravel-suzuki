<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousell extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getCarousell(){
        return Carousell::all();
    }
}

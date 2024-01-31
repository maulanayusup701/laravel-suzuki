<?php

// ProductList.php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;
    use WithPagination; 


    public function render()
    {
        return view('livewire.product-list', [
            'products' => (new Product())->getProducts(),
        ]);
    }
}

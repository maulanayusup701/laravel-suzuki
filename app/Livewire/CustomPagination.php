<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Pagination\LengthAwarePaginator;

class CustomPagination extends Component
{
    public $products;
    public $perPage = 10; 

    public function render()
    {
        $currentPageItems = $this->posts->slice(($this->page - 1) * $this->perPage, $this->perPage);

        $this->products = new LengthAwarePaginator($currentPageItems, count($this->posts), $this->perPage);

        return view('livewire.custom-pagination');
    }
}

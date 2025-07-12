<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;


class ProductList extends Component
{
    public $perPage = 9;

    public function loadMore()
    {
        $this->perPage += 9;
    }

    public function render()
    {
        return view('livewire.product-list', [
            'products' => Product::take($this->perPage)->get(),
            'totalCount' => Product::count(),
        ]);
    }
}

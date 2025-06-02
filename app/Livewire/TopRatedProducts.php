<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class TopRatedProducts extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::orderByDesc('rating')
            ->limit(10)
            ->get()
            ->toArray();
    }
    
    public function render()
    {
        return view('livewire.top-rated-products');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class ProductCategories extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.product-categories');
    }
}

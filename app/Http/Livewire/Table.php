<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination; 

    protected $listeners = [
        'refreshParent' => '$refresh'
    ]; 

    public function render()
    {
        $products = Product::with('category')->orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.table')->with(['products' => $products]);
    }


}

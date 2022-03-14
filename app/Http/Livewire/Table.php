<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination; 

    var $selectedId;
    var $search;

    protected $listeners = [
        'refreshTable' => '$refresh'
    ]; 

    public function render()
    {
        $products = Product::with('category')
                            ->where('name', 'LIKE', "%".$this->search."%")
                            ->orWhere('price', 'LIKE', "%".$this->search."%")
                            ->orWhereRelation('category', 'name', 'LIKE', "%".$this->search."%")
                            ->paginate(5);
        return view('livewire.table')->with(['products' => $products]);
    }

    public function selectItem($itemId, $action)
    {
        $this->selectedId = $itemId;
        
        if ($action == 'delete') {
            $this->emit('getDeleteId', $this->selectedId);
            $this->dispatchBrowserEvent('openDeleteModal');
        }
        else {
            $this->emit('getModelId', $this->selectedId);
            $this->dispatchBrowserEvent('openUpdateModal');
        }
    }


}

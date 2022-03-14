<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination; 
    protected $paginationTheme = 'bootstrap';


    var $selectedId;
    var $search;
    var $sortName = 'name';
    var $sortType = 'asc';

    protected $listeners = [
        'refreshTable' => '$refresh'
    ]; 

    public function sorting($name){
        $this->sortName = $name;
        if($this->sortType == 'asc'){
            $this->sortType = 'desc';
        }
        else{
            $this->sortType = 'asc';
        }
    }

    public function render()
    {
        $products = Product::with('category')
                            ->where('name', 'LIKE', "%".$this->search."%")
                            ->orWhere('price', 'LIKE', "%".$this->search."%")
                            ->orWhereRelation('category', 'name', 'LIKE', "%".$this->search."%")
                            ->orderBy($this->sortName, $this->sortType)
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

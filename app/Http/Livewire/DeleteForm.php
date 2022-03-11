<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class DeleteForm extends Component
{
    var $modelId;

    protected $listeners = [
        'getDeleteId'
    ];

    public function getDeleteId($itemId){
        $this->modelId = $itemId;
    }

    public function delete(){
        Product::find($this->modelId)->delete();
        $this->closeModal();
        $this->emit('refreshTable');
    }

    public function closeModal(){
        $this->dispatchBrowserEvent('closeDeleteModal');
    }

    public function render()
    {
        return view('livewire.delete-form');
    }
}

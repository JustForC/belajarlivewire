<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithFileUploads;

class CreateForm extends Component
{
    use WithFileUploads;

    public $name, $price, $image, $category_id;

    protected $listeners = [
        'closeFormCreate'
    ];

    public function render()
    {
        $categories = Category::get();
        return view('livewire.create-form',['categories' => $categories]);
    }

    public function save(){
        // dd($this->image->extension());
        $filename = $this->name.'.'.$this->image->extension();
        $cek = $this->image->storeAs('upload/product/', $filename);

        $product = Product::create([
            'path' => 'app/upload/product/'.$filename,
            'name' => $this->name,
            'category_id' => $this->category_id,
            'price' => $this->price,
        ]);

        $this->emit('refreshTable');   
        $this->dispatchBrowserEvent('closeModalCreate');
        $this->cleanInput();
    }

    public function cleanInput(){
        $this->name = null;
        $this->price = null;
        $this->image = null;
        $this->category_id = null;
    }

    public function closeFormCreate(){
        $this->cleanInput();
        $this->dispatchBrowserEvent('closeModalCreate');
    }
}

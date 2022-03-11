<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class UpdateForm extends Component
{
    var $modelId, $path, $name, $price, $categoryId, $image;

    protected $listeners = [
        'getModelId'
    ];

    public function getModelId($itemId){
        $this->modelId = $itemId;
        $product = Product::find($this->modelId);
        
        $this->name = $product->name;
        $this->path = $product->path;
        $this->price = $product->price;
        $this->categoryId = $product->category_id;
    }

    public function render()
    {
        $categories = Category::get();
        return view('livewire.update-form')->with(['categories' => $categories]);
    }

    public function closeModal(){
        $this->dispatchBrowserEvent('closeUpdateModal');
        $this->clearInput();
    }

    public function save(){
        $data = [
            'name' => $this->name,
            'path' => $this->path,
            'price' => $this->price,
            'categoryId' => $this->categoryId,
            'modelId' => $this->modelId,
            'image' => $this->image,
        ];

        if($this->image == NULL){
            Product::find($this->modelId)->update([
                'name' => $this->name,
                'path' => $this->path,
                'price' => $this->price,
                'category_id' => $this->categoryId,
            ]);

            $this->dispatchBrowserEvent('closeUpdateModal');
            $this->emit('refreshTable');
            $this->clearInput();
        }
        else{
            $filename = $this->name.'.'.$this->image->extension();
            $cek = $this->image->storeAs('upload/product/', $filename);
    
            $product = Product::find($this->modelId)->update([
                'path' => 'app/upload/product/'.$filename,
                'name' => $this->name,
                'category_id' => $this->categoryId,
                'price' => $this->price,
            ]);

            $this->dispatchBrowserEvent('closeUpdateModal');
            $this->emit('refreshTable');
            $this->clearInput();
        }
    }

    public function clearInput(){
        $this->name = NULL;
        $this->path = NULL;
        $this->price = NULL;
        $this->categoryId = NULL;
        $this->modelId = NULL;
        $this->image = NULL;
    }
}

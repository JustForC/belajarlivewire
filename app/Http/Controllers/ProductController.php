<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        return view('dashboard.product.product')->with(['title' => 'Product',
        'name' => 'Ghema Allan',
        'role' => 'Super Admin']);
    }

    public function read(){
        $products = Product::with('category')->get();

        return view('dashboard.product.table')->with(['products' => $products]);
    }

    public function create(){
        $product = new Product();
        $categories = Category::get();

        return view('dashboard.product.modal')->with(['product' => $product,
                                                      'categories' => $categories]);
    }

    public function store(Request $request){
        $image = $request->name.'.'.$request->image->extension();
        $path =  $request->image->move(public_path('/products/image/'),$image);

        $product = Product::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'path' => '/products/image/'.$image,
            'price' => $request->price
        ]);

        return $product;
    }

    public function edit(Product $id){
        dd($id);

        $product = Product::find($id);
        $categories = Category::get();

        return view('dashboard.product.modal')->with(['product' => $product,
                                                      'categories' => $categories]);
    }

    public function update(Request $request, $id){
        if(isset($request->image)){
            $image = $request->name.'.'.$request->image->extension();
            $path =  $request->image->move(public_path('/products/image/'),$image);
    
            $product = Product::find($id)->update([
                'category_id' => $request->category,
                'name' => $request->name,
                'path' => '/products/image/'.$image,
                'price' => $request->price
            ]);
    
            return $product;
        }

        $product = Product::find($id)->update([
            'category_id' => $request->category,
            'name' => $request->name,
            'path' => $request->path,
            'price' => $request->price
        ]);

        return $product;
    }

    public function delete($id){
        $product = Product::find($id)->delete();

        return $product;
    }
}

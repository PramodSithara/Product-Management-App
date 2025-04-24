<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Render index
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]); 
    }

    //render create products
    public function create(){
        return view('products.create');
    }

    //save create products datas
    public function store(Request $request){

        $data = $request -> validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }

    //Render edit
    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    //update edit datas
    public function update(Product $product, Request $request){
        $data = $request -> validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $product->update($data);
        return redirect(route('product.index'))->with('success', 'Products updated successfully');
    }

    //Delete datas
    public function delete(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully');
    }
}

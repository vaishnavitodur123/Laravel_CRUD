<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);

    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'required',
        ]);

        Product::create($data);  //Product comes from Model 

        return redirect(route('products.index'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'required',
        ]);

        $product->update($data); //update method for Product Model

        return redirect(route('products.index'))->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete(); //delete method for Product Model

        return redirect(route('products.index'))->with('success', 'Product deleted successfully');
    }

    public function restore($id)
    {
        Product::onlyTrashed()
            ->where('id', $id)
            ->restore();

        return redirect()->route('products.index');

    }

    public function trash()
    {
        $products = Product::onlyTrashed()->get();
        return view(
            'products.trash',
            ['products' => $products]
        );
    }


    public function forcedelete($id)
    {

        Product::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('products.trash');

    }





}

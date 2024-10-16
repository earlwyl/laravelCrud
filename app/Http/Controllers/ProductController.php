<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect('/view-product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->update();
        return redirect('/view-product');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/view-product');
    }
}

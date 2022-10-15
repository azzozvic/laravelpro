<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       $products=Product::latest()->paginate(5);
       return view('products.index',compact('products'));
    }

    public function productTrashed()
    {
       $products=Product::onlyTrashed()->latest()->paginate(5);
       return view('products.trash',compact('products'));
    }



    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'price'=>'required',
           'detail'=>'required',
        ]);
        $product=Product::create($request->all());
        return redirect()->route('products.index')->with('success',"your product added");
    }


    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }


    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }


    public function update(Request $request , Product $product)
    {
        $request->validate([
           'name'=>'required',
           'price'=>'required',
           'detail'=>'required',
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success',"your product updated");
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success',"your product deleted");
    }
    public function SoftDelete( $id)
    {
        $product=Product::find($id)->delete();
        return redirect()->route('products.index')->with('success',"your product deleted");
    }

    public function backTrash( $id)
    {
        $product=Product::onlyTrashed()->where('id',$id)->first()->restore();
        return redirect()->route('products.index')->with('success',"your product backed");
    }
}

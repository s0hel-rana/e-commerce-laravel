<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products.product',compact('products'));
    }


    public function create()
    {
        return view('products.product_create');
    }
    

    public function store(ProductRequest $request)
    {
        try{
            Product::create([
                'name'=> $request->name ?? null,
                'price'=> $request->price ?? null,
                'unit'=> $request->unit ?? null
            ]);
            session()->flash('message','product has stored successfully!');
            return redirect(route('product_index'));

        }catch(Exception $e){
            dd($e->getMessage());
        }
        
    }

    public function show($id)
    {
       $product = Product::find($id);
       return view('products.product_show',compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.product_edit',compact('product'));
    }

   
    public function update(Request $request, $id)
    {
        Product::find($id)->update([
        'name'=> $request->name ,
        'price'=> $request->price,
        'unit'=> $request->unit
        ]);
        session()->flash('message','product has updated successfully!');
        return redirect(route('product_index'));
    }

    
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message','product has deleted successfully!');
        return redirect(route('product_index'));

    }
}

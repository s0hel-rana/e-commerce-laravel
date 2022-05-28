<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Exception;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    
    public function index()
    {
        $brands = Brand::all();
        return view('brands.brand',compact('brands'));
    }

    
    public function create()
    {
        return view('brands.brand_create');
    }


    public function store(BrandRequest $request)
    {
        try{
            Brand::create([
                'brand_name' => $request->brand_name ?? null,
                'status' => $request->status ?? null
            ]);
            session()->flash('message','brand has stored successfully!');
            return redirect(route('brand_index'));
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    
    public function show($id)
    {
        $brand = Brand::find($id);
        return view('brands.brand_show',compact('brand'));
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brands.brand_edit',compact('brand'));
    }

    
    public function update(Request $request, $id)
    {
        $brands = Brand::find($id)->update([
            'brand_name' => $request->brand_name,
            'status' => $request->status
        ]);
        session()->flash('message','brand has updated successfully!');
        return redirect(route('brand_index'));
    }

    
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        session()->flash('message','brand has deleted successfully!');
        return redirect(route('brand_index'));
    }
}

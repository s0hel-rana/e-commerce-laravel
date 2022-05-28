<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::all();
        return view('colors.index',compact('colors'));

    }

    public function create()
    {
        return view('colors.color_create');
    }

    public function store(Request $request)
    {
        try{
            Color::create([
                'name'=> $request->name ?? null,
            ]);
            session()->flash('message','product has stored successfully!');
            return redirect(route('color_index'));

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function show($id)
    {
        $color = Color::find($id);
        return view('colors.color_show',compact('color'));
    }

    public function edit($id)
    {
        $color = Color::find($id);
        return view('colors.color_edit',compact('color'));
    }

   
    public function update(Request $request, $id)
    {
            Color::find($id)->update([
            'name'=> $request->name ?? null,
        ]);
        session()->flash('message','product has updated successfully!');
        return redirect(route('color_index'));
    }

    public function destroy($id)
    {
        $color = Color::find($id);
        $color->delete();
        session()->flash('message','color has deleted successfully!');
        return redirect(route('color_index'));
    }
}

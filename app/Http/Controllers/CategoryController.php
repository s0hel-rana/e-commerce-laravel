<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use App\Exports\CategoriesExport;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use Image;

class CategoryController extends Controller
{
   
    public function index()
    {
        if(request()->keyword){
            $categories = Category::where('title','like', '%'.request()->keyword. '%')->get();
            return view('categories.category',compact('categories'));
        }else{

        $categories = Category::all();
        return view('categories.category',compact('categories'));
        }
        
    }

   
    public function create()
    {
        return view('categories.category_create');
    }


    public function store(CategoryRequest $request){
        

        //Image upload code goes here
        try{
            $data =$request->all();
            if($request->hasFile('image')){
                $data['image']=$this->uploadImage($request->image,$request->title);
            }
            
            Category::create($data);
            session()->flash('message','category has stored successfully!');
            return redirect(route('category_index'));
        
        }catch(Exception $e){
           dd($e->getMessage());
        }

        //End Image upload code
    }

    
    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.category_show',compact('category'));
    }

    
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.category_edit',compact('category'));
    }

   
    public function update(Request $request, $id)
    {
            Category::find($id)->update([
            'title' => $request->title,
            'description' => $request->description, 
            'stock_status' => $request->stock_status, 
            'image' => $request->image 
        ]);
        session()->flash('message','category has updated successfully!');
        return redirect(route('category_index'));
    }

    
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','category has updated successfully!');
        return redirect(route('category_index'));
    }


    private function uploadImage($file, $title){
        $timestamp = str_replace([' ',':'], '-', Carbon::now()->toDateTimeString());
        
        $file_name = $timestamp .'-'.$title. '.' .$file->getClientOriginalExtension();
        
        $pathToUpload = storage_path().'/app/public/categories/';
        Image::make($file)->resize(200,250)->save($pathToUpload.$file_name);
        return $file_name;
    }

    private function unlink($file){
        $pathToUpload = storage_path().'/app/public/categories/';
        if($file != '' && file_exists($pathToUpload. $file)){
            @unlink($pathToUpload. $file);
        }
    }

    //softdelete
    public function trashlist(){
        $categories = Category::onlyTrashed()->get();
        return view('categories.trashlist',compact('categories'));
    }
    public function restore($id){
        $category = Category::onlyTrashed()->where('id',$id)->first();
        $category->restore();
        session()->flash('message','category has restored successfully!');
        return redirect()->back();
    }
    public function delete($id){
        $category = Category::onlyTrashed()->where('id',$id)->first();
        $category->forceDelete();
        session()->flash('message','category has deleted successfully!');
        return redirect(route('category_trashlist'));
    }

    public function export() 
    {
        return Excel::download(new CategoriesExport, 'categories.xlsx');
    }
}

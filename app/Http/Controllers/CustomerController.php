<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index',compact('customers'));
    }


    public function create()
    {
        return view('customers.create');
    }
    

    public function store(Request $request)
    {
        try{
            Customer::create([
                'name'=> $request->name ?? null,
                'email'=> $request->email ?? null,
                'phone'=> $request->phone ?? null,
                'nid_no'=> $request->nid_no ?? null,
                'address'=> $request->address ?? null,
                'remarks'=> $request->remarks ?? null
            ]);
            session()->flash('message','customer has stored successfully!');
            return redirect(route('customer.index'));

        }catch(Exception $e){
            dd($e->getMessage());
        }
        
    }

    public function show($id)
    {
        $customer = Customer::find($id);
       return view('customers.show',compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit',compact('customer'));
    }

   
    public function update(Request $request, $id)
    {
        Customer::find($id)->update([
            'name'=> $request->name ?? null,
            'email'=> $request->email ?? null,
            'phone'=> $request->phone ?? null,
            'nid_no'=> $request->nid_no ?? null,
            'address'=> $request->address ?? null,
            'remarks'=> $request->remarks ?? null
        ]);
        session()->flash('message','customer has updated successfully!');
        return redirect(route('customer.index'));
    }

    
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        session()->flash('message','customer has deleted successfully!');
        return redirect(route('customer.index'));

    }
}

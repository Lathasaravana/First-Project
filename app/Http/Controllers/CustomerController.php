<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller

{
    public function index(){
        return view('customer.create');
    }
    public function save(Request $request){
       $validateData = $request->validate([
        'Name'=>'required',
        'Address'=>'required',
        'Mobile' =>'required', 
        'Email'  =>'required',
        
        
       ]);
       
       $customer = new Customer;
       $customer->Name = $request->Name;
       $customer->Address = $request->Address;
       $customer->Mobile = $request->Mobile; 
       $customer->Email = $request->Email; 
    

       $customer->save();

       return $customer;
    }
}

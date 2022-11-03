<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customer(){
        return view('customer');
    }
    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required ',
                'email' =>'required |email',
                'password'=>'required| confirmed',
                'password_confirmation'=> 'required',
        
                'address'=>'required',
                'dob'=>'required'
            ]
        );

        echo "<pre>";
        print_r($request->all());
        //Insert Query                          
        $customer =new Customer;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->address=$request['address'];
        $customer->dob=$request['dob'];
        $customer->password=md5($request['password']);
       $customer->save(); 
    }
}

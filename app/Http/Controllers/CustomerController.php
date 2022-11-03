<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

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
                'country'=>'required',
                'state'=>'required',
                'address'=>'required',
                'dob'=>'required'
            ]
        );

        echo "<pre>";
        print_r($request->all());
        //Insert Query
        $customer =new CustomerModel;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->address=$request['address'];
        $customer->country=$request['country'];
        $customer->state=$request['state'];
        $customer->dob=$request['dob'];
        $customer->password=md5($request['password']);
       $customer->save(); 
    }
}

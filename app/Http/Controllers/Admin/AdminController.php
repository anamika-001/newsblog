<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use App\User;
use Redirect;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function viewsignin(){
        return view('Admin/adduser');
    }

    public function adduser(Request $request){
       
        $validator=Validator::make($request->input(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'

        ]);

        if($validator->fails()){
            return redirect()->back()->with('errors','field is required');
        }else{
            $user =new User();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=$request->password;
            $user->save();

            return redirect()->back()->with('success','user added successfully.');

        }
    }

    public function adminlogin(Request $request){
  
        $rules = array(
            'email' => 'required|email', 
            'password' => 'required|alphaNum|min:8'
        );
          
     $validator = Validator::make(Input::all() , $rules);
            
            if ($validator->fails())
              {
              return Redirect::back()->withErrors($validator) 
              ->withInput(Input::except('password')); 
              }
              else
              {
                $details=User::where('email','admin111@gmail.com')->first(); 
                $emaildb = $details->email;
                $passworddb = $details->password;
                $email = Input::get('email');
                $password = Input::get('password');
                    if (Auth::attempt($password==$passworddb && $emaildb==$email)){
                       
                        return  view('Admin/welcomadmin');
                    }
                    else {      
                    
                        return redirect()->back()->with('errors','user added successfully.');
                    }
                }
                // $details=User::where('email','admin@gmail.com')->where('password','admin')->first();
                // $credentials = $request->only('email', 'password');

                // if (Auth::attempt($credentials)) {
                //     // Authentication passed...
                //     return redirect()->intended('admin/adminpanel');
                // }
              
      
      
    }

    public function logout(){
       
    return view('Auth.login'); // redirection to login screen

    }
    public function adminpanel(){
        return view('Admin.adminpanel');
    }



}

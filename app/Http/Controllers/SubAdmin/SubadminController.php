<?php

namespace App\Http\Controllers\SubAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\User;

class SubadminController extends Controller
{
    public function viewlogin(){
        return view('SubAdmin.login');
    }
    public function login(Request $request){
      
        $validator=Validator::make($request -> input(),[
            
            'email'=>'required',
            'password'=>'required'

        ]);

        if($validator->fails()){
            return redirect()->back()->with('message','field is required');
        }else{
            $email=User::where('email',$request->email)->first();
            if($email){
                $password=User::where('password',$request->password)-first();
                if($password){
                    view('SubAdmin/subadminpanel');
                }
                else{
                    return redirect()->back()->with('error','password incorrect');
                }
            }else{
                return redirect()->back()->with('error','email not registered');
            }
            

        }
    }

   
}

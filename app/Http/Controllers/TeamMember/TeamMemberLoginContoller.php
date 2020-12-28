<?php

namespace App\Http\Controllers\TeamMember;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\User;

class TeamMemberLoginContoller extends Controller
{
    public function viewlogin(){
        return view('TeamMemberPanel.teammemberlogin');
    }
    public function login(Request $request){
      
        $validator=Validator::make($request -> input(),[
            
            'email'=>'required',
            'password'=>'required'

        ]);

        if($validator->fails()){
            return redirect()->back()->with('message','field is required');
        }else{
            $email=User::where('email',$request->email)->where('user_type','team_member')->first();
            if($email){
               
                $password=User::where('password',$request->password)->first();
                if($password){
                    return view('TeamMemberPanel.teammemberpanel');
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

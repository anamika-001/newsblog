<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers {
        logout as performLogout;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:subadmin')->except('logout');
    }
    public function showsubAdminLoginForm()
    {
        return view('SubAdmin.login', ['url' => 'subadmin']);
    }

    public function subadminLogin(Request $request)
    {
      
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
                $details=User::where('email',$request->email)->where('password',$request->password)->first(); 
                
                
                    if (Auth::attempt($details)){
                       
                        return  view('SubAdmin.subadminpanel');
                    }
                    else {      
                        return  view('SubAdmin.login');
                        // return redirect()->back()->with('errors','user added successfully.');
                    }
                }
        return back()->withInput($request->only('email', 'remember'));
    }
    public function showsubadminpanel(){
        return view('SubAdmin.subadminpanel');
    }
     
    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('/SubAdmin/viewlogin');
    }  
}

<?php

namespace App\Http\Controllers\SubAdmin\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/SubAdmin/subadminpanel';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:subadmin')->except('logout');
    }

    public function showsubAdminLoginForm()
    {
        return view('SubAdmin.login', ['url' => 'subadmin']);
    }

    public function subadminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('subadmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/subadmin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    public function showsubadminpanel(){
        return view('SubAdmin.subadminpanel');
    }
    public function logout(){
       
        return view('Subadmin.Auth.login'); // redirection to login screen
    
        }
}

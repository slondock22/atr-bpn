<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Str;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function postLogin(Request $request)
    {  
        $request->session()->forget('ROLE');
        $request->session()->flush();

        $role = array('adminpusat','adminkanwil','adminkantah','oppusat','opkanwil','opkantah');

        if($request->password == '123'){
             return redirect('login')->with('error', 'Username/Password Tidak Sesuai');
        }
        
        if(in_array($request->username, $role)){    
            $request->session()->put('ROLE', $request->username);
            return redirect('home')->with('status', 'Selamat Datang '.Str::title($request->username));
        }
        else{
             return redirect('login')->with('error', 'Username/Password Tidak Sesuai');
        }
    }
}

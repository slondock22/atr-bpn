<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Cookie;
use Session;

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
  
        $client = new Client();
        $url = "http://devbpn.edii.co.id:3000/auth";
        $myBody['users'] = $request->username;
        $myBody['pass']  = $request->password;
        $request = $client->request('POST', $url,  ['form_params'=>$myBody]);
        $response = json_decode($request->getBody()->getContents(),true);
        
        // dd($response['error']);
        if($response['error'] == false){

            Session::put('TOKEN_AUTH_APP', $response['data']['token']);
            Session::put('USER_ROLE', $response['data']['detail']['tm_role']['role']);
            Session::put('USER_FULL_NAME', $response['data']['detail']['user_full_name']);
            Session::put('USER_STATUS', $response['data']['detail']['user_status']);
            Session::put('USER_ID', $response['data']['detail']['signin_id']);
            Session::put('MINISTRY_ID', $response['data']['detail']['ministry_id']);

            return redirect('home')->with('status', 'Selamat Datang '.Str::title($response['data']['detail']['user_full_name']));
        
        }else{
            if($response['message'] == 'NoUserFound'){
             return redirect('login')->with('error', 'Username/Password Tidak Sesuai');
            }
        }
    }

    public function logout(Request $request)
    {

        $request->session()->invalidate();

        return redirect('login');
    }

}

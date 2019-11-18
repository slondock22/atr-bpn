<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class FacebookController extends Controller
{
    public function index()
    {
    	$client = new Client();
        $url = "http://124.81.66.59:3000/dispo/all/facebook";
    	$token_akses = request()->cookie('TOKEN_AUTH_APP');
        $request = $client->request('GET', $url, 
        				[ 
        					'headers' 	 => [
        										'Content-Type'  => 'application/json',
        										'X-API-Key'		=> 'ATRBPn'.$token_akses
        									]
        				]);

        $data['response'] = json_decode($request->getBody()->getContents(),true);
    	return view('admin.facebook',$data);
    }
}

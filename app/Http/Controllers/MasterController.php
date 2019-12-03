<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;

class MasterController extends Controller
{
		
		 public function masterUserApi(){
	    	$client = new Client();
	        $url = "http://devbpn.edii.co.id:3000/user/1/20";
	    	$token_akses = request()->cookie('TOKEN_AUTH_APP');
	        $request = $client->request('GET', $url, 
	        				 [ 
	                            'headers' => [
	                                 'Content-Type'  => 'application/json',
	                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
	                            ]
	                        ]);

	        $response = $request->getBody()->getContents();
	        echo $response;
	     }
}

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


	     public function masterGetApi($api='',$id=''){
	    	$client = new Client();
	    	$id  = ($id) ? "" : "/".$id;         
	        $url = "http://devbpn.edii.co.id:3000/master/".$api;
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

	     public function masterDelApi($api='',$id=''){
	    	$client = new Client();
	    	$id  = ($id) ? "" : "/".$id;         
	        $url = "http://devbpn.edii.co.id:3000/master/".$api;
	    	$token_akses = request()->cookie('TOKEN_AUTH_APP');
	        $request = $client->request('DELETE', $url,
	        				 [ 
	                            'headers' => [
	                                 'Content-Type'  => 'application/json',
	                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
	                            ]
	                        ]);

	        $response = $request->getBody()->getContents();
	        echo $response;
	     }

		 
		 public function masterAddApi(){   
		 	$api   = Input::get('api');
		 	$id    = Input::get('id');
	        $value = Input::get('val');
	        
	        $client = new Client();

	        $url = "http://devbpn.edii.co.id:3000/master/".$api;

	        $token_akses = request()->cookie('TOKEN_AUTH_APP');
	        $request = $client->request('POST', $url, 
	                       [ 
	                            'headers' => [
	                                 'Content-Type'  => 'application/json',
	                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
	                            ],

	                            'json' => $value
	                        ]);

	        $response = json_decode($request->getBody()->getContents(),true);
	        // dd($response);d
	        $data['response'] = $response;


	        return \Response::json($data);
	     }



}

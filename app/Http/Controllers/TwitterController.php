<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class TwitterController extends Controller
{
    public function index()
    {
    	$client = new Client();
        $url = "http://devbpn.edii.co.id:3000/dispo/all/twitter";
    	$token_akses = request()->cookie('TOKEN_AUTH_APP');
        $request = $client->request('GET', $url, 
        				[ 
        					'headers' 	 => [
        										'Content-Type'  => 'application/json',
        										'X-API-Key'		=> 'ATRBPn'.$token_akses
        									]
        				]);
        $response = json_decode($request->getBody()->getContents(),true);

    	return view('admin.twitter')->with(compact('response'));
    }


    public function sendComment()
    {   

        $request['comment'] = Input::get('COMMENT');

        $client = new Client();
        $url = "http://devbpn.edii.co.id:3000/disposisi/";
        $token_akses = request()->cookie('TOKEN_AUTH_APP');
        $request = $client->request('POST', $url, 
                        [ 
                            'headers'    => [
                                                'Content-Type'  => 'application/json',
                                                'X-API-Key'     => 'ATRBPn'.$token_akses
                                            ]
                        ],['form_params'=>$request]);

        $response = json_decode($request->getBody()->getContents(),true);

        $data['status']  = "success";
        $data['result']  = Input::get('COMMENT');
        $data['message'] = "Tweet has been succesfully replied";


        return \Response::json($data);
    }
}

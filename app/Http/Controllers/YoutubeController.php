<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class YoutubeController extends Controller
{
    public function index()
    {
    	$client = new Client();
        $url = "http://devbpn.edii.co.id:3000/dispo/all/youtube";
    	$token_akses = request()->cookie('TOKEN_AUTH_APP');
        $request = $client->request('GET', $url, 
        				 [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ]
                        ]);

        $data['response'] = json_decode($request->getBody()->getContents(),true);
    	return view('admin.youtube',$data);
    }
}

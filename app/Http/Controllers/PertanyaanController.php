<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class PertanyaanController extends Controller
{
    public function index($type)
    {
    	$client = new Client();
        $url = "http://124.81.66.59:3000/feed/".$type."/0/10";
    	$token_akses = request()->cookie('TOKEN_AUTH_APP');
        $request = $client->request('POST', $url, 
        				[ 
        					'headers' 	 => [
        										'Content-Type'  => 'application/json',
        										'X-API-Key'		=> 'ATRBPn'.$token_akses
        									]
        				]);
        $response = json_decode($request->getBody()->getContents(),true);

    	return view('admin.pertanyaan_'.$type)->with(compact('response'));
    }
}
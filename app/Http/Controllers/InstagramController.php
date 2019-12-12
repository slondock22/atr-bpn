<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;

class InstagramController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = "http://devbpn.edii.co.id:3000/dispo/all/instagram";
        $token_akses = request()->cookie('TOKEN_AUTH_APP');
        $request = $client->request('GET', $url, 
                         [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ]
                        ]);

        $response = json_decode($request->getBody()->getContents(),true);
        // dd($response);

        return view('admin.instagram')->with(compact('response'));
    }


    public function sendComment()
    {   
        $idFeeds = Input::get('idFeeds');
        $value['comment'] = Input::get('comment');
        $value['to'] = Input::get('ministry_id');

        $client = new Client();
        $url = "http://devbpn.edii.co.id:3000/disposisi/".$idFeeds;
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
        // dd($response);

        $data['status']   = "success";
        $data['result']   = Input::get('comment');
        $data['message']  = "Message has been succesfully replied";
        $data['form']     = Input::get('form');
        $data['response'] = $response;


        return \Response::json($data);
    }


    public function deleteComment($id)
    {   
        $client = new Client();
        $url = "http://devbpn.edii.co.id:3000/action/".$id;
        $token_akses = request()->cookie('TOKEN_AUTH_APP');
        $request = $client->request('DELETE', $url, 
                       [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ]
                        ]);

        $response = json_decode($request->getBody()->getContents(),true);
        // dd($response);


        $data['status']  = $response;
        $data['message'] = "Tweet has been succesfully replied";
        $data['form']    = Input::get('form');


        return \Response::json($data);
    }

    public function send_reply(){
        $idFeeds = Input::get('id');
        $comment = Input::get('comment');

        $client = new Client();
        $url = "http://devbpn.edii.co.id:3000/replay/".$idFeeds;
        $token_akses = request()->cookie('TOKEN_AUTH_APP');
        $request = $client->request('POST', $url, 
                       [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ],

                            'json' => ['comment' => $comment]
                        ]);

        $response = json_decode($request->getBody()->getContents(),true);

        return \Response::json($response);
    }
}

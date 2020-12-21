<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
use App\Events\AduanNotif;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailJob;
use DB;


class AduanController extends Controller
{
    public function index($media='')
    {
    	$client = new Client();

        //Aduan

        $getUsername = Input::get('username');
        $getType = Input::get('type');
        $getSort = Input::get('sort');

        $value['id_category'] = 1;
        $value['filter']['remark'] = 'username';
        $value['filter']['value'] = ($getUsername == NULL) ? '' : $getUsername;
        $value['filter']['remark2'] = 'type';
        $value['filter']['value2'] = ($getType == NULL) ? '' : $getType;
        $value['filter']['remark3'] = 'sort';
        $value['filter']['value3'] = ($getSort == NULL) ? '' : $getSort;

        // dd($value);

        $url = "http://devbpn.edii.co.id:3000/dispo/all/".$media;
    	$token_akses = request()->session()->get('TOKEN_AUTH_APP');
        $request = $client->request('GET', $url, 
        				 [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ],
                            'json' => $value
                        ]);
        
        $response = json_decode($request->getBody()->getContents(),true);

        // dd($response);

        //Statistik
        $url2 = "http://devbpn.edii.co.id:3000/post/stats";

        $request2 = $client->request('GET', $url2, 
                         [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ]
                        ]);

        $stats = json_decode($request2->getBody()->getContents(),true);

        //KantahKanwil
        $url3 = "http://devbpn.edii.co.id:3000/master/ministry";

        $request3 = $client->request('GET', $url3, 
                         [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ]
                        ]);

        $kanwil = json_decode($request3->getBody()->getContents(),true);

         //Aduan
        $url4 = "http://devbpn.edii.co.id:3000/master/aduan";

        $request4 = $client->request('GET', $url4, 
                         [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ]
                        ]);

        $aduan = json_decode($request4->getBody()->getContents(),true);

        //NGAKALIN FILTER
        $filter = Input::get('filter');

    	return view('admin.'.$media)->with(compact('response','stats','kanwil','aduan','filter'));
    }


    public function sendComment()
    {   
        $idFeeds = Input::get('idFeeds');
        $value['comment'] = Input::get('comment');
        $value['to'] = Input::get('ministry_id');
        $value['type_aduan'] = Input::get('type_aduan');

        // dd($value['to']);

        $client = new Client();

        $url = "http://devbpn.edii.co.id:3000/disposisi/".$idFeeds;

        $token_akses = request()->session()->get('TOKEN_AUTH_APP');
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
        $data['message']  = "Tweet has been succesfully replied";
        $data['form']     = Input::get('form');
        $data['response'] = $response;

        
        


        return \Response::json($data);
    }


    public function deleteComment($id)
    {   
        $client = new Client();
        $url = "http://devbpn.edii.co.id:3000/action/".$id;
        $token_akses = request()->session()->get('TOKEN_AUTH_APP');
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

    public function sendReply(){
        $idFeeds = Input::get('id');
        $comment = Input::get('comment');

        // dd($idFeeds);

        $client = new Client();
        $url = "http://devbpn.edii.co.id:3000/replay/".$idFeeds;
        $token_akses = request()->session()->get('TOKEN_AUTH_APP');
        $request = $client->request('POST', $url, 
                       [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ],

                            'json' => ['comment' => $comment]
                        ]);

        $response = json_decode($request->getBody()->getContents(),true);

        // dd($response);

        return \Response::json($response);
    }

     public function spamFeed(Request $request)
    {
        $client = new Client();
        $url = "http://devbpn.edii.co.id:3000/spam/".$request->id;
        $token_akses = request()->session()->get('TOKEN_AUTH_APP');
        $request = $client->request('PUT', $url, 
                       [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ]
                        ]);

        $response = json_decode($request->getBody()->getContents(),true);

        return \Response::json($response);
    }

    public function handleFeed(Request $request)
    {

        $client = new Client();
        $url = "http://devbpn.edii.co.id:3000/feeds/taken/".$request->id;
        $token_akses = request()->session()->get('TOKEN_AUTH_APP');
        $request = $client->request('POST', $url, 
                       [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ]
                        ]);

        $response = json_decode($request->getBody()->getContents(),true);

        // dd($response);

        return \Response::json($response);
    }

    public function updateJenisAduan($id_feed, $id_category)
    {
        $value['id_category'] = $id_category;

        $client = new Client();

        $url = "http://devbpn.edii.co.id:3000/feed/".$id_feed;

        $token_akses = request()->session()->get('TOKEN_AUTH_APP');
        $request = $client->request('PUT', $url, 
                       [ 
                            'headers' => [
                                 'Content-Type'  => 'application/json',
                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
                            ],

                            'json' => $value
                        ]);

        $response = json_decode($request->getBody()->getContents(),true);
        //dd($response);

       return \Response::json($response);
    }

    public function sendEmail(Request $request)
    {
        $content['email']         = 'airlanggadwitestap@gmail.com';

        dispatch(new SendEmailJob($content));

        return 'AAA';
    }

    public function tambahAduanManual(Request $request)
    {
        $is_taken = 0;
        if($request->aduan_type != 'portal'){
             $is_taken = 4;
        }

        $insert = DB::table('tx_feed')->insertGetId([
                'type' => $request->aduan_type,
                'username' => $request->username,
                'feed_comment' => $request->feed_comment_manual,
                'id_province' => $request->provinsi,
                'id_city' => $request->provinsi,
                'user_email' => $request->email,
                'user_phone' => $request->phone,
                'is_taken' => $is_taken

        ]);


        if($insert){
            $data = array('status' => 'success' , 'message' => 'Pertanyaan/Aduan berhasil ditambahkan', 'nomor_tiket' => $insert);
            return response()->json($data);
        }
        else{
            $data = array('status' => 'error' , 'message' => 'Terjadi Kesalahahn');
            return response()->json($data);
        }
    }

    public function lacak_aduan(Request $request)
    {
        $pertanyaan = DB::table('tx_feed')->select('feed_comment','date_create')->where('feed_id', $request->no_tiket)->first();
        $jawaban = DB::table('tx_feed as a')->leftjoin('tx_replay as b', 'a.feed_id', 'b.feed_id')->select('b.comment','b.date_create')->where('b.feed_id', $request->no_tiket)->get();

        if($pertanyaan){

            $data = array('status' => 'success' , 'pertanyaan' => $pertanyaan, 'jawaban' => $jawaban);
        }
        else{
            $data = array('status' => 'error' , 'message' => 'Data tidak ditemukan');
        }

        return response()->json($data);

    }
}

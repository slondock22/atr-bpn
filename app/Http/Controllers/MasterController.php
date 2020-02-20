<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
use DataTables;

class MasterController extends Controller
{
		
		 public function masterUserApi($ids=''){
	    	$client = new Client();
	    	$id='';
	    	if($ids!=''){
	    		$id  = "/".$ids;         
	        }else{
	        	$id  = "/0/100";
	        }
	        $url = "http://devbpn.edii.co.id:3000/user".$id;
	    	$token_akses = request()->session()->get('TOKEN_AUTH_APP');
	        $request = $client->request('GET', $url, 
	        				 [ 
	                            'headers' => [
	                                 'Content-Type'  => 'application/json',
	                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
	                            ]
	                        ]);
	        
	        if($ids==''){
	        	$response = json_decode($request->getBody()->getContents(),true);
	        	$datatable = Datatables::of($response['data'])->make(true);
	        	return $datatable;
	        }else{
	        	 $response = $request->getBody()->getContents();
	        	echo $response;
	        }	       
	     }


	     public function masterGetApi($api='',$id=''){
	    	if($id!=''){
	    		$id  = "/".$id;         
	        }

	     	$client = new Client();
	        $url = "http://devbpn.edii.co.id:3000/master/".$api.$id;
	        //dd($url);
	    	
	    	$token_akses = request()->session()->get('TOKEN_AUTH_APP');
	        $request = $client->request('GET', $url, 
	        				 [ 
	                            'headers' => [
	                                 'Content-Type'  => 'application/json',
	                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
	                            ]
	                        ]);
	        if($id==''){
	        	$response = json_decode($request->getBody()->getContents(),true);
	        	$datatable = Datatables::of($response['data'])->make(true);
	        	return $datatable;
	        }
	        	$response = $request->getBody()->getContents();
	        	echo $response;
	     }

	     public function masterDelApi($api='',$id=''){
	    	$client = new Client();
	    	$url = "http://devbpn.edii.co.id:3000/master/".$api."/".$id;
	    	$token_akses = request()->session()->get('TOKEN_AUTH_APP');
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

		 
		 public function masterUserAddApi(){   
		 	$api   = Input::get('api');
		 	$id    = Input::get('id');
	        $value = Input::get('val');
	        $tipe  = "POST";

	        if($id!=''){
	        	$id = "/".$id;
	        	$tipe = "PUT";
	        }

	        $client = new Client();

	        $url = "http://devbpn.edii.co.id:3000/user".$id;

	        $token_akses = request()->session()->get('TOKEN_AUTH_APP');
	        $request = $client->request($tipe, $url, 
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


	      public function masterAddApi(){   
		 	$api   = Input::get('api');
		 	$id    = Input::get('id');
	        $value = Input::get('val');
	        $tipe  = 'POST';
	        
	        if($id!=''){
	        	$id = "/".$id;
	        	$tipe = 'PUT';
	        }

	        $client = new Client();
	        $url = "http://devbpn.edii.co.id:3000/master/".$api.$id;
	        $token_akses = request()->session()->get('TOKEN_AUTH_APP');
	        $request = $client->request($tipe, $url, 
	                       [ 
	                            'headers' => [
	                                 'Content-Type'  => 'application/json',
	                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
	                            ],
	                            'json' => $value
	                        ]);
	        $response = json_decode($request->getBody()->getContents(),true);
	        // dd($response);
	        $data['response'] = $response;
	        return \Response::json($data);
	     }


	      public function masterUserDelApi($id=''){
	    	$client = new Client();
	    	$json = array("deactive"=>$id);
	    	$json = json_encode($json,true);
	    	$url = "http://devbpn.edii.co.id:3000/user/".$id;
	    	$token_akses = request()->session()->get('TOKEN_AUTH_APP');
	        $request = $client->request('DELETE', $url,
	        				 [ 
	                            'headers' => [
	                                 'Content-Type'  => 'application/json',
	                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
	                            ],
	                            'json' => $json
	                        ]);

	        $response = $request->getBody()->getContents();
	        echo $response;
	     }


	     public function statAll(){
	    	$client = new Client();
	        $url = "http://devbpn.edii.co.id:3000/stat/all";
	        //dd($url);
	    	
	    	$token_akses = request()->session()->get('TOKEN_AUTH_APP');
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

	     public function masterSpam()
	     {
	     	$url = "http://devbpn.edii.co.id:3000/dispo/all/instagram";
	    	$token_akses = request()->session()->get('TOKEN_AUTH_APP');
	        $request = $client->request('GET', $url, 
	        				 [ 
	                            'headers' => [
	                                 'Content-Type'  => 'application/json',
	                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
	                            ]
	                        ]);
	        
	        $response = json_decode($request->getBody()->getContents(),true);

           	foreach($response['data'] as $key => $value){
           		if($value['is_spam'] == 1){
	        		$datatable = Datatables::of($response['data'])->make(true);
           		}
           	}

           	return $datatable;


	     }

	     public function statistikjs($chart)
	     {
	     	$client = new Client();
	     	
	     	if($chart == 'kanwil'){
	     		return \Response::json($data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]);
	     	}
	     	if($chart == 'kantah'){
	     		return \Response::json($data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]);
	     	}
	     	if($chart == 'pengaduan'){
	     		return \Response::json($data = [
	     				'facebook' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
	     				'twitter' =>  [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
	     				'instagram' =>[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
	     				'youtube' =>  [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
	     				]);
	     	}
	     	if($chart == 'aduanpopuler'){
	     		return \Response::json($data = [0, 0, 0, 0, 0]);
	     	}
	     	if($chart == 'aduanterjawab'){
	     		$url = "http://devbpn.edii.co.id:3000/statistic/terjawab/all";
		    	$token_akses = request()->session()->get('TOKEN_AUTH_APP');
		        $request = $client->request('GET', $url, 
		        				 [ 
		                            'headers' => [
		                                 'Content-Type'  => 'application/json',
		                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
		                            ]
		                        ]);
		        
		        $response = json_decode($request->getBody()->getContents(),true);

				$data = $response['data']['datasets']['data'];
	     		return \Response::json($data);
	     	}
	     }
}

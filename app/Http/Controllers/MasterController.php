<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
use DataTables;
use DB;

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
		    	$token_akses = request()->session()->get('TOKEN_AUTH_APP');

	     		$url1 = "http://devbpn.edii.co.id:3000/statistic/sosmed/twitter";
		        $request1 = $client->request('GET', $url1, 
		        				 [ 
		                            'headers' => [
		                                 'Content-Type'  => 'application/json',
		                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
		                            ]
		                        ]);
		        $twitter = json_decode($request1->getBody()->getContents(),true);

		        $url2 = "http://devbpn.edii.co.id:3000/statistic/sosmed/instagram";
		        $request2 = $client->request('GET', $url2, 
		        				 [ 
		                            'headers' => [
		                                 'Content-Type'  => 'application/json',
		                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
		                            ]
		                        ]);
		        
		        $instagram = json_decode($request2->getBody()->getContents(),true);

		        $url3 = "http://devbpn.edii.co.id:3000/statistic/sosmed/youtube";
		        $request3 = $client->request('GET', $url3, 
		        				 [ 
		                            'headers' => [
		                                 'Content-Type'  => 'application/json',
		                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
		                            ]
		                        ]);
		        
		        $youtube = json_decode($request3->getBody()->getContents(),true);

		        $url4 = "http://devbpn.edii.co.id:3000/statistic/sosmed/email";
		        $request4 = $client->request('GET', $url4, 
		        				 [ 
		                            'headers' => [
		                                 'Content-Type'  => 'application/json',
		                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
		                            ]
		                        ]);
		        
		        $email = json_decode($request4->getBody()->getContents(),true);

		        // $url5 = "http://devbpn.edii.co.id:3000/statistic/sosmed/facebook";
		        // $request5 = $client->request('GET', $url5, 
		        // 				 [ 
		        //                     'headers' => [
		        //                          'Content-Type'  => 'application/json',
		        //                          'X-Api-Key'     => 'ATRBPn '.$token_akses
		        //                     ]
		        //                 ]);
		        
		        // $facebook = json_decode($request5->getBody()->getContents(),true);

	     		return \Response::json($data = [
	     				'facebook' => [],
	     				'twitter' =>  $twitter['data']['datasets']['data'],
	     				'instagram'=> $instagram['data']['datasets']['data'],
	     				'youtube' =>  $youtube['data']['datasets']['data'],
	     				'email' =>  $email['data']['datasets']['data'],
	     				]);
	     	}
	     	if($chart == 'aduanpopuler'){
	     		$url = "http://devbpn.edii.co.id:3000/statistic/typeaduan/all";
		    	$token_akses = request()->session()->get('TOKEN_AUTH_APP');
		        $request = $client->request('GET', $url, 
		        				 [ 
		                            'headers' => [
		                                 'Content-Type'  => 'application/json',
		                                 'X-Api-Key'     => 'ATRBPn '.$token_akses
		                            ]
		                        ]);
		        
		        $response = json_decode($request->getBody()->getContents(),true);

				$datas = $response['data'];
				
				for($i=1; $i<count($datas); $i++){
					$labels[] = $datas[$i]['Hastag'];
					$total[] = $datas[$i]['Total'];
				}
				$data['labels'] = $labels;
				$data['total'] = $total;

	     		return \Response::json($data);
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

	     	if($chart == 'aduanterjawab-twitter'){
	     		$url = "http://devbpn.edii.co.id:3000/statistic/terjawab/twitter";
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
	     	if($chart == 'aduanterjawab-instagram'){
	     		$url = "http://devbpn.edii.co.id:3000/statistic/terjawab/instagram";
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
	     	if($chart == 'aduanterjawab-youtube'){
	     		$url = "http://devbpn.edii.co.id:3000/statistic/terjawab/youtube";
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
	     	if($chart == 'aduanterjawab-email'){
	     		$url = "http://devbpn.edii.co.id:3000/statistic/terjawab/email";
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
		 
		 public function getSisense($datefrom='',$dateend=''){
			 if ($datefrom == ''){
				 $datefrom = '0000-00-00';
			 }else{
				 $datefrom = $datefrom;
			 }
			 
			 if ($dateend ==''){
				 $dateend = date("Y-m-d");
			 }else{
				 $dateend = $dateend;
			 }
			 
			 $query = DB::table('tx_feed')
					->whereDate('date_create','>',$datefrom)
					->whereDate('date_create','<',$dateend)
					->get();
			$data = [];
			$data['total'] = count($query);
			$data['data'] = $query;
			
			
			return \Response::json($data);
		 }
}

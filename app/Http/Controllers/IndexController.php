<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class IndexController extends Controller
{
    public function index($role=''){
        
    	return view('admin.home')->with(compact('role'));
    }

    public function pertanyaan($media,$role='')
    {
    	if($media == 'twitter'){
    		return view('admin.pertanyaan_twitter')->with(compact('role'));;
    	}
    	elseif ($media == 'facebook') {
    		return view('admin.pertanyaan_facebook')->with(compact('role'));;
    	}
    	elseif ($media == 'instagram') {
    		return view('admin.pertanyaan_facebook')->with(compact('role'));;
    	}
    }

    public function statistik($role='')
    {
    	return view('admin.statistik')->with(compact('role'));
    }

     public function publish($media,$role='')
    {
    	if($media == 'twitter'){
    		return view('admin.publish_twitter')->with(compact('role'));;
    	}
    	elseif ($media == 'facebook') {
    		return view('admin.publish_facebook')->with(compact('role'));;
    	}
    	elseif ($media == 'instagram') {
    		return view('admin.publish_facebook')->with(compact('role'));;
    	}
    }

     public function laporan($media,$role='')
    {
     
    	if($media == 'rekap_aduan'){
    		return view('admin.rekap_aduan')->with(compact('role'));;
    	}
    	elseif ($media == 'performansi') {
    		return view('admin.rekap_performansi')->with(compact('role'));;
    	}
    }
}

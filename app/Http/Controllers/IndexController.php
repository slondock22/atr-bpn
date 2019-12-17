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
    		return view('admin.pertanyaan_twitter')->with(compact('role'));
    	}
    	elseif ($media == 'facebook') {
    		return view('admin.pertanyaan_facebook')->with(compact('role'));
    	}
    	elseif ($media == 'instagram') {
    		return view('admin.pertanyaan_facebook')->with(compact('role'));
    	}
    }

    public function statistik($role='')
    {
    	return view('admin.statistik')->with(compact('role'));
    }

    public function analitik($role='')
    {
        return view('admin.analitik')->with(compact('role'));
    }

     public function publish($media,$role='')
    {
    	if($media == 'twitter'){
    		return view('admin.publish_twitter')->with(compact('role'));
    	}
    	elseif ($media == 'facebook') {
    		return view('admin.publish_facebook')->with(compact('role'));
    	}
    	elseif ($media == 'instagram') {
    		return view('admin.publish_facebook')->with(compact('role'));
    	}
    }

     public function laporan($media,$role='')
    {
     
    	if($media == 'rekap_aduan'){
    		return view('admin.rekap_aduan')->with(compact('role'));
    	}
    	elseif ($media == 'performansi') {
    		return view('admin.rekap_performansi')->with(compact('role'));
    	}
    }

    public function masterUser($media,$role='')
    {
        
        return view('admin.master.master_user')->with(compact('role'));
        
    }

    public function masterKanwil($media,$role='')
    {
        
        return view('admin.master.master_kanwil')->with(compact('role'));
        
    }

     public function masterKantah($media,$role='')
    {
        
        return view('admin.master.master_kantah')->with(compact('role'));
        
    }


    public function masterKonfig($media,$role='')
    {
        
        return view('admin.master.master_konfig')->with(compact('role'));
        
    }

     public function profile($role='')
    {
        
        return view('admin.profile')->with(compact('role'));
        
    }

    public function spamList($role='')
    {
        
        return view('admin.master.spam')->with(compact('role'));
        
    }

     public function dokumentasi($role='')
    {
        
        return view('admin.dokumentasi')->with(compact('role'));
        
    }



    public function masterMinistry($media,$role='')
    {
        
        return view('admin.master.master_ministry')->with(compact('role'));
        
    }


    public function masterJenisAduan($media,$role='')
    {
        
        return view('admin.master.master_jenis_aduan')->with(compact('role'));
        
    }

    public function masterRole($media,$role='')
    {
        
        return view('admin.master.master_role')->with(compact('role'));
        
    }

    public function masterLevel($media,$role='')
    {
        
        return view('admin.master.master_level')->with(compact('role'));
        
    }


}

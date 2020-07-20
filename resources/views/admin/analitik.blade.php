@section('title','Analitik')
@extends('layouts-back.layout')
@section('content')

<?php
$cookie_name = "USER_SISENSE";
$cookie_value = "covid19@edi-indonesia.co.id";
setcookie($cookie_name, $cookie_value, time()+31556926, "/"); // 1Year
?>

  <div class="tb-content tb-style1">
    <div class="tb-height-b30 tb-height-lg-b30"></div>
    <div class="container-fluid">
    <div class="tb-height-b30 tb-height-lg-b30"></div>
      <div class="row">
        <iframe id="ifm" name="ifm" width="100%" height="1120px" frameborder="0" src="https://sisense.edi-indonesia.co.id:8081/api/demoSession/start/5df0f23e100c8c1110b2d08d/?embed=true&r=false&h=false&i=false" scrolling="auto"></iframe>
      </div><!-- .row -->
    </div>
    <!-- .container-fluid -->
    <div class="tb-height-b60 tb-height-lg-b60"></div>
   
  </div>
  <!-- Resources -->
  @endsection
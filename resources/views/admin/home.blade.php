@section('title','Home')
@extends('layouts-back.layout')
@section('content') 
  <div class="tb-content tb-style1">
    <div class="tb-height-b30 tb-height-lg-b30"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
           @if (session('status'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
               {{ session('status') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
        </div>
      </div>
      
      <div class="tb-height-b30 tb-height-lg-b30"></div>
      
      <div class="row">
        <div class="col-lg-12">
          <div class="tb-cta tb-style1 tb-border tb-white-bg" style="padding:130px !important">
            <div class="tb-cta-img"><img src="{{asset('/')}}assets/img/banner-atr.png" alt="" style="width:245px !important"></div>
            <div class="tb-cta-text">
              <h2 class="tb-cta-title">Selamat Datang di Portal Admin #TanyaATRBPN</h2>
              <div class="tb-cta-subtitle">Portal ini bertujuan untuk mengelola segala pertanyaan dan aduan dari masyarakat, untuk mengatur disposisi aduan hingga mengunggah berita terbaru dari Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional. <br> Klik link dibawah untuk cara penggunaan.</div>
              <div class="tb-cta-btn"><a href="#" class="tb-btn tb-style3 tb-color3">Dokumentasi</a></div>
            </div>
          </div><!-- .tb-cta -->
        </div>
      </div>
    </div>
    <div class="tb-height-b60 tb-height-lg-b60"></div>
  </div>
@endsection
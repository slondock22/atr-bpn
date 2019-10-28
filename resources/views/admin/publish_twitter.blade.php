@section('title','Publish Twitter')
@extends('layouts-back.layout')
@section('content')
<div class="tb-content tb-style1 tb-profile-content">
  <div class="tb-padd-lr-30 tb-uikits-heading">
      <h2 class="tb-uikits-title">Twitter</h2>
    </div>
    <div class="tb-content tb-style3">
      <div class="container-fluid">
        <div class="tb-height-b30 tb-height-lg-b30"></div>
        <div class="tb-newsfeed-row">
          <div class="tb-newsfeed-col-1">
            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-profile-thumb tb-small tb-bg tb-dynamicbg" data-src="https://pbs.twimg.com/profile_banners/2884911432/1540262770/1500x500">
                </div>
                <div class="tb-profile-info tb-small">
                  <div class="tb-profile-pic"><img src="{{asset('/assets-back')}}/img/logo-mini-atr.jpg" alt=""></div>
                  <div class="tb-profile-text">
                    <h2 class="tb-profile-name">Agraria & Tata Ruang</h2>
                    <div class="tb-profile-email">@atr_bpn</div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b15 tb-height-lg-b15"></div>
                  <ul class="tb-horizontal-list tb-style1 tb-mp0">
                    <li>
                      <div class="tb-list-title">Tweets</div>
                      <div class="tb-list-number">14.6K</div>
                    </li>
                    <li>
                      <div class="tb-list-title">Following</div>
                      <div class="tb-list-number">518</div>
                    </li>
                    <li>
                      <div class="tb-list-title">Followes</div>
                      <div class="tb-list-number">91K</div>
                    </li>
                  </ul>
                  <div class="tb-height-b15 tb-height-lg-b15"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>
            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-heading">
                <div class="tb-card-heading-left">
                  <h2 class="tb-card-title">Filter & Sort</h2>
                </div>
              </div>
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputState">By</label>
                      <select id="inputState" class="form-control">
                        <option selected>ID</option>
                        <option>Username</option>
                        <option>Kota/Kab</option>
                      </select>
                    </div>
                    <div class="form-group col-md-8">
                      <label for="inputCity">Kata Kunci</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                  </div>
                  <div class="tb-height-b5 tb-height-lg-b5"></div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio5">Postingan Terbaru</label>
                    </div>
                    <div class="tb-height-b5 tb-height-lg-b5"></div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                      <label class="custom-control-label" for="customRadio6">Postingan Terlama</label>
                    </div>
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                </div>
                <hr>
                <a href="#" class="tb-btn tb-style2">Terapkan<i class="material-icons-outlined">navigate_next</i></a>
              </div>
            </div>
          </div><!-- .col -->
          <div class="tb-newsfeed-col-2">

            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-heading">
                <div class="tb-card-heading-left">
                  <h2 class="tb-card-title">Publish Twitter</h2>
                </div>
              </div>
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-custom-input-area">
                      <div class="tb-custom-input-field" contentEditable=true data-placeholder="Apa yang sedang terjadi?"></div>
                    </div>
                  </div>
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b15 tb-height-lg-b15"></div>
                  <div class="tb-post-option">
                    <ul class="tb-icon-group tb-style1 tb-mp0">
                      <li>
                        <a href="#" class="tb-icon-group-icon"><i class="material-icons-outlined">photo_size_select_actual</i></a>
                      </li>
                      <li>
                        <a href="#" class="tb-icon-group-icon"><i class="material-icons-outlined">videocam</i></a>
                      </li>
                      <li>
                        <a href="#" class="tb-icon-group-icon"><i class="material-icons-outlined">gif</i></a>
                      </li>
                    </ul>
                    <div class="tb-share-btn">
                      <a href="#" class="tb-btn tb-style1 tb-medium">Share</a>
                    </div>
                  </div>
                  <div class="tb-height-b15 tb-height-lg-b15"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>

            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img"><img src="{{asset('/assets-back')}}/img/logo-mini-atr.jpg" alt=""></div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">Agraria & Tata Ruang | @atr_bpn</h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">Okt 24, 2019</a></li>
                        <li><a href="#">9h</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style1">
                    <div class="tb-post-text">
                      <a href="/hashtag/SobATRBPN?src=hash"><b>#SobATRBPN</b></a>, Menteri <a href="/atr_bpn"><b>@atr_bpn</b></a>
menghadiri Rapat Paripurna pertama bersama Presiden <a href="/jokowi"><b>@jokowi</b></a> dan Wakil Presiden, Ma'ruf Amin. Selain itu, Rapat ini juga dihadiri oleh seluruh anggota kabinet Indonesia Maju. Simak
<a href="https://t.co/tDA2UpJ7TX">https://www.instagram.com/p/B3_-d6eBsKc/</a>
Foto: Lukas - Biro Pers Sekretariat Presiden
                    </div>
                    <div class="tb-height-b15 tb-height-lg-b15"></div>
                    <ul class="tb-image-gallery tb-style2 tb-mp0">
                      <li>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height1 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="https://pbs.twimg.com/media/EHpLjokUEAAi-Fi.jpg"></div>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height2 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="https://pbs.twimg.com/media/EHpLkFsU4AAtziF.jpg"></div>
                        </a>
                        <div class="tb-height-b10 tb-height-lg-b10"></div>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height2 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="https://pbs.twimg.com/media/EHpLk0CU4AAWz_R.jpg"></div>
                        </a>
                      </li>
                    </ul>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <ul class="tb-horizontal-list tb-style2 tb-mp0">
                    <li><a href="#"><i class="material-icons-outlined">delete</i> Hapus</a></li>
                  </ul>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>
            <nav>
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link" href="#">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>

          </div><!-- .col -->
        </div>
      </div>
      <div class="tb-height-b60 tb-height-lg-b60"></div>
    </div>
</div>
@endsection
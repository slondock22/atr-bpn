@section('title','Pertanyaan Twitter')
@extends('layouts-back.layout')
@section('content')
<div class="tb-content tb-style1 tb-profile-content">
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
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img"><img src="https://pbs.twimg.com/profile_images/1084801744117219328/59xaCxYS_bigger.jpg" alt=""></div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">Gunawan Hadinegoro | @gunawanhadi</h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">Okt 21, 2019</a></li>
                        <li><a href="#">Jakarta</a></li>
                        <li><a href="#">#TW010002</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style1">
                    <div class="tb-post-text">untuk bisa memiliki hak pakai untuk budidaya tambak udang cara mengurus proses perizinan nya gmn...
apakah lokasi bisa ditentukan oleh sy atau pemerintah... <span style="color: #1DA1F2">#TanyaATRBPN</span></div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <ul class="tb-horizontal-list tb-style2 tb-mp0">
                    <li><a href="#"><i class="material-icons-outlined">mode_comment</i> Balas</a></li>
                    <li><a href="#"><i class="material-icons-outlined">forward</i> Disposisi</a></li>
                    <li><a href="#"><i class="material-icons-outlined">block</i> Spam</a></li>
                  </ul>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>

            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img"><img src="https://pbs.twimg.com/profile_images/1017894746293850112/9scHS6Ps_bigger.jpg" alt=""></div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">Dursin | @dursin</h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">Feb 10, 2019</a></li>
                        <li><a href="#">Unknown</a></li>
                        <li><a href="#">#TW010045</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style1">
                    <div class="tb-post-text">Assalamualaikum wbr 
Sya  mau  bertanya apa sja rincihan biaya ..jika  ingin mengurus  sertifikat  tanah (bukan  PTSL)..tlng  penjelasanx  min <span style="color: #1DA1F2">#TanyaATRBPN</span> <span style="color: #1DA1F2">#Bandung</span></div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <ul class="tb-horizontal-list tb-style2 tb-mp0">
                    <li><a href="#"><i class="material-icons-outlined">mode_comment</i> Balas</a></li>
                    <li><a href="#"><i class="material-icons-outlined">forward</i> Disposisi</a></li>
                    <li><a href="#"><i class="material-icons-outlined">block</i> Spam</a></li>
                  </ul>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>

            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img"><img src="https://pbs.twimg.com/profile_images/1154999445487931392/VYEsE6OY_bigger.jpg" alt=""></div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">Mubinhaz | @mubinhaz</h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">Okt 24, 2019</a></li>
                        <li><a href="#">Bandung</a></li>
                        <li><a href="#">#TW010056</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style1">
                    <div class="tb-post-text">Yg terpenting adalah pelayanan yg transparan n tercepat. Klo bs jemput bola utk semua masyarakat. Tanpa pandang bulu.<span style="color: #1DA1F2">#TanyaATRBPN</span></div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <ul class="tb-horizontal-list tb-style2 tb-mp0">
                    <li><a href="#"><i class="material-icons-outlined">mode_comment</i> Balas</a></li>
                    <li><a href="#"><i class="material-icons-outlined">forward</i> Disposisi</a></li>
                    <li><a href="#"><i class="material-icons-outlined">block</i> Spam</a></li>
                  </ul>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>

            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img"><img src="https://pbs.twimg.com/profile_images/1165974426308902913/x_H86jcN_bigger.jpg" alt=""></div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">Budiono | @budiono2777</h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">Okt 21, 2019</a></li>
                        <li><a href="#">Jakarta</a></li>
                        <li><a href="#">#TW010915</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style1">
                    <div class="tb-post-text">Kal-Tim sedang memetakan wilyah untuk persiapan IKN.
Apa harus cek lapangn atau cukup di atas meja dgn ketua RT.
Mohon pencerahan <span style="color: #1DA1F2">#TanyaATRBPN</span></div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <ul class="tb-horizontal-list tb-style2 tb-mp0">
                    <li><a href="#"><i class="material-icons-outlined">mode_comment</i> Balas</a></li>
                    <li><a href="#"><i class="material-icons-outlined">forward</i> Disposisi</a></li>
                    <li><a href="#"><i class="material-icons-outlined">block</i> Spam</a></li>
                  </ul>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>

            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img"><img src="https://pbs.twimg.com/profile_images/1165507112568385537/aLWFNC6e_bigger.jpg" alt=""></div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">BSA Perseroan | @BPerseroan</h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">Okt 25, 2019</a></li>
                        <li><a href="#">Manado</a></li>
                        <li><a href="#">#TW010512</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style1">
                    <div class="tb-post-text">Jangan lupa dikota Manado dan Provinsi Sulawesi Utara ,kasus tanah LIE BOEN YAT blm direspon Atr/Bpn ,padahal kasus tanah ini mencapai ribuan hektar, hampir separuh sukawesi utara,kapan diselesaikan..?¿?<span style="color: #1DA1F2">#TanyaATRBPN</span> <span style="color: #1DA1F2">#Manado</span></div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <ul class="tb-horizontal-list tb-style2 tb-mp0">
                    <li><a href="#"><i class="material-icons-outlined">mode_comment</i> Balas</a></li>
                    <li><a href="#"><i class="material-icons-outlined">forward</i> Disposisi</a></li>
                    <li><a href="#"><i class="material-icons-outlined">block</i> Spam</a></li>
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
@section('title','Pertanyaan Twitter')
@extends('layouts-back.layout')
@section('content')
<div class="tb-content tb-style1 tab-profil-content">
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
                  <div class="tb-profile-pic">
                    <img src="{{asset('/assets-back')}}/img/logo-mini-atr.jpg" alt="">
                  </div>
                  <div class="tb-profile-text">
                    <h2 class="tb-profile-name">Agraria & Tata Ruang</h2>
                    <div class="tb-profile-email">@atr_bpn</div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b15 tb-height-lg-b15"></div>
                  <!-- <ul class="tb-horizontal-list tb-style1 tb-mp0">
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
                  </ul> -->
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
          <div class="tb-newsfeed-col-4">
         
           @foreach($response['data'] as $key => $value)
            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img">
                     {!! $img = str_replace('[]', '', $value['image']) !!}
                      @if($img != '')
                      <img src="{{$value['image']}}" alt="">
                      @else
                      <img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt="">
                      @endif  
                    </div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">
                        {{$value['username']}} | @ {{$value['username']}}
                        <span class="doneSpan">
                           <i class="fas fa-check-circle doneIcon"></i>
                           Case Selesai
                        </span>
                      </h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}</a></li>
                        <li><a href="#">{{$value['feed_id']}}</a></li>
                      </ul>

                    </div>

                  </div>
                  
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style1">
                    <div class="tb-post-text">{{$value['feed_comment']}}</div>

                    <div class="divHastag">
                      <a onclick="modal_hastag('spanHastag{{$value['feed_id']}}')" 
                      id="spanHastag{{$value['feed_id']}}">
                        #SengketaTanah
                      </a>
                    </div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                <hr>

                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3 contentDisposisi">
                    <div class="tb-user-img">
                      <img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt=""> 
                    </div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">
                          Admin Pusat
                          <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                            <li><a href="#">{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}</a></li>
                          </ul>
                      </h3>

                      <div class="divComment"><i>Mendisposisikan pertanyaan ini kepada Kantor Pertanahan Surabaya</i></div>
                    </div>
                  </div>
                </div>

                 <div class="tb-padd-lr-30">
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-user tb-style3 contentDisposisi">
                    <div class="tb-user-img">
                      <img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt=""> 
                    </div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">
                          Admin Pertanahan Surabaya
                          <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                            <li><a href="#">{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}</a></li>
                          </ul>
                      </h3>

                      <div class="divComment">Pertanyaan diatas sudah diselesaikan melalui putusan dengan Nomor 192/10/2019 Tentang Putusan Sengketa Tanah Kecamatan Benowo. Terlampir softcopy surat putusan <a href="#" style="color:#D23111">[Lampiran]</a> &nbsp; <a href="#"><span> <i class="far fa-copy"></i> Salin</span></a></div>
                    </div>
                  </div>
                </div>


                <div class="tb-height-b10 tb-height-lg-b10"></div>
                <hr>
                
                @if($value['feed_id']!='')
                  <div class="tb-padd-lr-30 y" id="button_feed{{$value['feed_id']}}">
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                    <ul class="tb-horizontal-list tb-style2 tb-mp0">
                      <li>
                        <a onclick="collapseBtn('button_feed{{$value['feed_id']}}','button_feed_send{{$value['feed_id']}}')">
                          <i class="material-icons-outlined">mode_comment</i> Ambil
                        </a>
                      </li>
                      <li><a href="#"><i class="material-icons-outlined">block</i> Spam</a></li>
                    </ul>
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                  </div>
                  
                  <div class="tb-padd-lr-30 x" id="button_feed_send{{$value['feed_id']}}" style="display: none">
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                    <ul class="tb-horizontal-list tb-style2 tb-mp0">
                      <li>
                        <a onclick="modal_feeds('{{$value['feed_comment']}}','{{$value['username']}}','{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}')">
                          <i class="material-icons-outlined">mode_comment</i> Balas
                        </a>
                      </li>
                      
                      <li><a onclick="modal_disposisi('{{$value['feed_comment']}}','{{$value['username']}}','{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}')"><i class="material-icons-outlined">forward</i> Disposisi</a>
                      </li>
                      
                    </ul>
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                  </div>

                @else
                  <div class="tb-padd-lr-30 x" id="button_feed_send{{$value['feed_id']}}">
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                    <ul class="tb-horizontal-list tb-style2 tb-mp0">
                      <li>
                        <a onclick="modal_feeds('{{$value['feed_comment']}}','{{$value['username']}}','{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}')">
                          <i class="material-icons-outlined">mode_comment</i> Balas
                        </a>
                      </li>

                      <li><a onclick="modal_disposisi('{{$value['feed_comment']}}','{{$value['username']}}','{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}')"><i class="material-icons-outlined">forward</i> Disposisi</a>
                      </li>
                      
                    </ul>
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                  </div>
                @endif
              
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>
            @endforeach


           {{-- 
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
              </nav> --}}

          </div><!-- .col -->
        </div>
      </div>
      <div class="tb-height-b60 tb-height-lg-b60"></div>
    </div>
</div>


 <!-- Modal -->
<div class="modal fade" id="modal-add-disposisi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-twitter">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">
          <i class="lni lni-instagram-original icon-instagram"></i> #Disposisi
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body modalBodyPadding">
        
        <form>
           <div class="tb-height-lg-b20"></div>
            <div class="tb-user tb-style3">
              <div class="tb-user-img" id="imgUserDisposisi"></div>
              <div class="tb-user-info">
                <h3 class="tb-user-name headerUser" id="headerUserDisposisi"></h3>
                <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                  <li id="dateModalDisposisi"><a href="#"></a></li>
                </ul>
              </div>
            </div>
            
            <div id="contentTwitUserDisposisi" class="divContentTwitter"></div>

            <hr class="hrModal">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Kepada</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Pilih Kanwil/Kantah</option>
                <option>Kantah Surabaya</option>
                <option>Kantah Jakarta</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Keterangan</label>
              <textarea class="form-control text-area-modal-twitter-nopad" id="exampleFormControlTextarea1" rows="3" placeholder="Isikan keterangan disposisi"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-modal-instagram-danger" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-modal-instagram">Kirim</button>
      </div>
    </div>
  </div>
</div>
<!-- End Large Mosal -->


<!-- Modal -->
<div class="modal fade" id="modal-po" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header modal-header-sos">
        <h5 class="modal-title" id="myLargeModalLabel">
          <i class="lni lni-instagram-original icon-instagram"></i> Jenis Aduan ATR/BPN
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div class="tb-card tb-style1">
            <div class="tb-card-heading">
              <div class="tb-card-heading-right">
                <form action="#" class="tb-search tb-style2">
                  <input type="text" placeholder="Search..." class="tb-search-input">
                  <button type="submit"><i class="material-icons-outlined">search</i></button>
                </form>
                <a href="#" class="tb-btn tb-style1 tb-small" style="height: 2.3em">View All</a>
              </div>
            </div>
           <div>
              <div class="tb-table tb-style1">
                <input type="hidden" id="valHastag">
                <table class="table" style="min-width: 100% !important">
                  <thead>
                    <tr>
                      <th>Hastag</th>
                      <th width="50%">Keterangan</th>
                      <th>Pilih</th>
                    </tr>
                  </thead>
                  <tbody>
                   <tr>
                      <td>#SengketaTanah</td>
                      <td>penyusunan dan penetapan kebijakan di bidang pertanahan</td>
                      <td>
                        <button type="button" class="btn btn-modal-instagram" onclick="change_hastag('#SengketaTanah')">Pilih</button>
                      </td>
                    </tr>
                    <tr>
                      <td>#PenataanTataRuang</td>
                      <td>perumusan dan pelaksanaan kebijakan di bidang survei, pengukuran, dan pemetaan;</td>
                      <td>
                        <button type="button" class="btn btn-modal-instagram" onclick="change_hastag('#PenataanTataRuang')">Pilih</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                          #infrastrukturAgraria
                      </td>
                      <td>perumusan dan pelaksanaan kebijakan di bidang pengadaan tanah</td>
                      <td>
                        <button type="button" class="btn btn-modal-instagram" onclick="change_hastag('#infrastrukturAgraria')">Pilih</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                          #HubunganHukumAgraria
                      </td>
                      <td>pengawasan atas pelaksanaan tugas di lingkungan BPN</td>
                      <td>
                          <button type="button" class="btn btn-modal-instagram" onclick="change_hastag('#HubunganHukumAgraria')">Pilih</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                          #PengadaanTanah
                      </td>
                      <td>pelaksanaan penelitian dan pengembangan di bidang pertanahan</td>
                      <td>
                          <button type="button" class="btn btn-modal-instagram" onclick="change_hastag('#PengadaanTanah')">Pilih</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        #PengendalianPenguasaanTanah
                      </td>
                      <td>pelaksanaan pengembangan sumber daya manusia di bidang pertanahan</td>
                      <td>
                          <button type="button" class="btn btn-modal-instagram" onclick="change_hastag('#PengendalianPenguasaanTanah')">Pilih</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        #HakTanahMasyarakat
                      </td>
                      <td>pengawasan atas pelaksanaan tugas di lingkungan BPN</td>
                      <td>
                        <button type="button" class="btn btn-modal-instagram" onclick="change_hastag('#HakTanahMasyarakat')">Pilih</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                          #EkonomiPertanahan
                      </td>
                      <td>pelaksanaan pengembangan sumber daya manusia di bidang pertanahan</td>
                      <td>
                        <button type="button" class="btn btn-modal-instagram" onclick="change_hastag('#EkonomiPertanahan')">Pilih</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- .tb-table -->
              <div class="tb-height-b30 tb-height-lg-b30"></div>
            </div>
          </div>
          <br>
      </div>
      <div class="modal-footer"></div>
    </div>
      
  </div>
</div>
<!-- End Large Mosal -->


 <!-- Modal -->
<div class="modal fade" id="modal-balas-feed" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-twitter">
    <div class="modal-content">
      <div class="modal-header modal-header-sos">
        <h5 class="modal-title" id="myLargeModalLabel">
          <i class="lni lni-instagram-original icon-instagram"></i> Balas Feeds
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
         <form>
            <div class="form-group">
              <div>
              <div class="tb-height-lg-b20"></div>
              <div class="tb-user tb-style3">
                <div class="tb-user-img" id="imgUser"></div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name headerUser" id="headerUser"></h3>
                  <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                    <li id="dateModal"><a href="#"></a></li>
                  </ul>
                </div>
              </div>
              
              <div id="contentTwitUser" class="divContentTwitter"></div>
              
              <div class="divUserSend">
                <label for="exampleFormControlTextarea1">
                  Membalas <span id="twitUser" class="twitUser"></span> 
                </label>
              </div>

              <textarea class="form-control text-area-modal-twitter" id="inputSendModalFeeds" 
                rows="3" placeholder="Tweet balasan Anda" autofocus></textarea>
            </div>
            <div class="form-group tb-cs-input-btn divLampiran">
              <span>Lampiran</span>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
      </form>
      </div>
      
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-modal-instagram-danger" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-modal-instagram">Draft</button>
        <button type="button" class="btn btn-modal-instagram">Kirim</button>
      </div>
  </div>
</div>
<!-- End Large Mosal -->


@endsection

<script>
    function collapseBtn(div1,div2){
        $("#"+div1).slideUp(300);
        $("#"+div2).slideDown(300);
    }

    function modal_feeds(content='',user='',date=''){
        $('#modal-balas-feed').modal('show');
        $('#contentTwitUser').html(content);
        $('#twitUser').html('@'+user);
        $('#headerUser').html('@'+user);
        $('#dateModal').html(date);
        $("#imgUser").html('<img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt="">')
    }

    function modal_disposisi(content='',user='',date=''){
        $('#modal-add-disposisi').modal('show');
        $('#contentTwitUserDisposisi').html(content);
        $('#twitUserDisposisi').html('@'+user);
        $('#headerUserDisposisi').html('@'+user);
        $('#dateModalDisposisi').html(date);
        $("#imgUserDisposisi").html('<img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt="">')
    }

    function modal_hastag(id){
        $("#valHastag").val(id);
        $('#modal-po').modal('show');
    }

    function change_hastag(hastag){

        $('#modal-po').modal('hide');
        input = $("#valHastag").val();
        $('#' + input).html(hastag);
    }
</script>
@section('title','Pertanyaan Instagram')
@extends('layouts-back.layout')
@section('content')

<div class="tb-content tb-style1 tab-profil-content">
  <div class="tb-padd-lr-30 tb-uikits-heading">
      <h2 class="tb-uikits-title">Youtube</h2>
    </div>
    
    <div class="tb-content">
      <div class="container-fluid">
        <div class="tb-height-b30 tb-height-lg-b30"></div>
        <div class="row gutter-2">
          <div class="col-4">
            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-profile-thumb tb-small tb-bg tb-dynamicbg" data-src="">
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
                  <ul class="tb-horizontal-list tb-style1 tb-mp0">
                    @if(isset($stats['data']))
                      @for($i=0; $i < count($stats['data']); $i++)
                      
                        @if($stats['data'][$i]['type'] == 'youtube')
                        <li>
                          <div class="tb-list-title">Total</div>
                          <div class="tb-list-number">{{$stats['data'][$i]['TOTAL']}}</div>
                        </li>
                        <li>
                          <div class="tb-list-title">Belum</div>
                          <div class="tb-list-number">{{$stats['data'][$i]['BELUM']}}</div>
                        </li>
                        <li>
                          <div class="tb-list-title">Proses</div>
                          <div class="tb-list-number">{{$stats['data'][$i]['PROSES']}}</div>
                        </li>
                        <li>
                          <div class="tb-list-title">Jawab</div>
                          <div class="tb-list-number">{{$stats['data'][$i]['SELESAI']}}</div>
                        </li>
                        <li>
                          <div class="tb-list-title">Spam</div>
                          <div class="tb-list-number">{{$stats['data'][$i]['SPAM']}}</div>
                        </li>
                        @endif
                      @endfor
                    @endif
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
          <div class="col-8 conComment">
          @if(isset($response['data']))
           @php $number=0 @endphp
           @foreach($response['data'] as $key => $value)
            @if($value['is_spam'] == 0 && $value['username'] != 'atr_bpn')
            @php $number++ @endphp
            <div class="tb-card tb-style1 tb-height-auto rowcomment" id="divFeeds{{$value['id']}}">
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img">
                     {{-- {!! $img = str_replace('[]', '', $value['image']) !!}
                      @if($img == '')
                        <img src="{{$value['image']}}" alt="">
                      @else
                        <img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt="">
                      @endif  --}} 
                        <img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt="">
                    </div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">
                        {{$value['username']}} | @ {{$value['username']}}
                        @if($value['escalation_status'] == '99')
                        <span class="doneSpan">
                           <i class="fas fa-check-circle doneIconInstagram"></i>
                           Aduan Terjawab
                        </span>
                        @endif
                      </h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}</a></li>
                        <li><a href="#">{{$value['id']}}</a></li>
                      </ul>

                    </div>

                  </div>
                  
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style1">
                    <div class="tb-post-text">{{$value['comment']}}</div>

                    <div class="divHastagInstagram">
                      <a onclick="modal_hastag('spanHastag{{$value['id']}}')" 
                      id="spanHastag{{$value['id']}}">
                        #SengketaTanah
                      </a>
                    </div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                
                <div class="row{{$number}}" id="divCommentCon{{$value['id']}}">
                  @php $numberDetail=0 @endphp
                  @foreach($value['disposisi'] as $key => $val)
                    @php $numberDetail++ @endphp
                    <div class="tb-padd-lr-30 rowDetail rowDetail{{$number}}{{$numberDetail}} divDisposisi{{$val['id']}}">

                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                    
                    <span class="spanAction">
                         @if(request()->cookie('USER_ID')  == 4)
                          <div class="tb-toggle-body tb-drop-style1 tb-right-dropdown">
                            <span class="tb-toggle-btn tb-style1 tb-large-size">
                              <i class="material-icons-outlined iconAction">more_horiz</i>
                            </span>
                              <div class="tb-dropdown">
                              <ul class="tb-drop-dropdown-list tb-mp0">
                                 <li><a onclick="copyClipboard('divComments{{$val['id']}}')">Copy</a></li>
                                <li><a onclick="confirm_delete('{{$val['id']}}')">Hapus</a></li>
                              </ul>
                            </div>
                          </div>
                         @endif
                    </span>
                            
                    <div class="tb-user tb-style3 contentDisposisi">
                      <div class="tb-user-img">
                        <img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt=""> 
                      </div>
                      <div class="tb-user-info">
                        <h3 class="tb-user-name">
                            {{$val['from']['ministry_name']}} <span>membalas kepada</span> {{$val['to']['ministry_name']}}
                            <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                              <li><a href="#">{{date('l, d F Y H:i:s', strtotime($val['date']))}}</a></li>
                            </ul>
                        </h3>

                        <div class="divComment{{$val['id']}}" id="divComments{{$val['id']}}">{{$val['comment']}}</div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                   @foreach($value['replay'] as $key => $val)
                    @php $numberDetail++ @endphp
                    <div class="tb-padd-lr-30 rowDetail rowDetail{{$number}}{{$numberDetail}} divDisposisi{{$val['id']}}">

                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                    
                    <span class="spanAction">
                         @if(request()->cookie('USER_ID')  == 4)
                          <div class="tb-toggle-body tb-drop-style1 tb-right-dropdown">
                            <span class="tb-toggle-btn tb-style1 tb-large-size">
                              <i class="material-icons-outlined iconAction">more_horiz</i>
                            </span>
                              <div class="tb-dropdown">
                              <ul class="tb-drop-dropdown-list tb-mp0">
                                 <li><a onclick="copyClipboard('divComments{{$val['id']}}')">Copy</a></li>
                                <li><a onclick="confirm_delete('{{$val['id']}}')">Hapus</a></li>
                              </ul>
                            </div>
                          </div>
                         @endif
                    </span>
                            
                    <div class="tb-user tb-style3 contentDisposisi">
                      <div class="tb-user-img">
                        <img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt=""> 
                      </div>
                      <div class="tb-user-info">
                        <h3 class="tb-user-name">
                             ATR/BPN Pusat <span>membalas kepada Penanya
                            <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                              {{-- <li><a href="#">{{date('l, d F Y H:i:s', strtotime($val['date']))}}</a></li> --}}
                            </ul>
                        </h3>

                        <div class="divComment{{$val['id']}}" id="divComments{{$val['id']}}">{{$val['comment']}}</div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>

                <div class="tb-padd-lr-30 y" style="padding-top: 10px;padding-bottom: 10px">
                    <span class="spanLoadmore" id="spanloadmore{{$number}}" onclick="loadmore('row{{$number}}')">
                        Tampilkan Lebih Banyak
                    </span>
                </div>
                <div class="tb-height-b10 tb-height-lg-b10"></div>
                <hr>
                
                @if($value['id']!='')
                  <div class="tb-padd-lr-30 y" id="button_feed{{$value['id']}}">
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                    <ul class="tb-horizontal-list tb-style2 tb-mp0">
                      <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                      <li>
                        <a onclick="handleFeed('button_feed{{$value['id']}}','button_feed_send{{$value['id']}}',{{$value['id']}})">
                          <i class="material-icons-outlined">mode_comment</i> Ambil
                        </a>
                      </li>
                      <li><a onclick="spamFeed({{$value['id']}})"><i class="material-icons-outlined">block</i> Spam</a></li>
                    </ul>
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                  </div>
                  
                  <div class="tb-padd-lr-30 x" id="button_feed_send{{$value['id']}}" @if($value['is_taken'] == 0) style="display: none" @endif>
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                    <ul class="tb-horizontal-list tb-style2 tb-mp0">
                      <li>
                        <a onclick="modal_feeds('{{$value['comment']}}','{{$value['username']}}','{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}','{{$value['post_url']}}', '{{$value['id']}}')">
                          <i class="material-icons-outlined">mode_comment</i> Balas
                        </a>
                      </li>
                      
                      <li><a onclick="modal_disposisi('{{$value['id']}}','{{$value['comment']}}','{{$value['username']}}','{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}')"><i class="material-icons-outlined">forward</i> Disposisi</a>
                      </li>
                      
                    </ul>
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                  </div>

                @else
                  <div class="tb-padd-lr-30 x" id="button_feed_send{{$value['id']}}">
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                    <ul class="tb-horizontal-list tb-style2 tb-mp0">
                      <li>
                        <a onclick="modal_feeds('{{$value['comment']}}','{{$value['username']}}','{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}','{{$value['post_url']}}', '{{$value['id']}}')">
                          <i class="material-icons-outlined">mode_comment</i> Balas
                        </a>
                      </li>

                      <li><a onclick="modal_disposisi('{{$value['id']}}','{{$value['comment']}}','{{$value['username']}}','{{date('l, d F Y H:i:s', strtotime($value['date_create']))}}')"><i class="material-icons-outlined">forward</i> Disposisi</a>
                      </li>
                      
                    </ul>
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                  </div>
                @endif
              
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>
            @endif
            @endforeach
            @endif

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
        
        <form id="frmDisposisi" name="frmDisposisi" action="{{route('postComment')}}" method="POST">
          @csrf
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
            <input type="hidden" id="idFeeds" value="" name="idFeeds">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Kepada</label>
              <select class="form-control" id="ministryId" name="ministry_id" onchange="setUser()">
                <option value="">Pilih Kanwil/Kantah</option>
                <option value="1">ATR/BPN Pusat</option>
                <option value="2">ATR/BPN Surabaya</option>
                <option value="3">ATR/BPN Malang</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Ke
              terangan</label>
              <textarea class="form-control text-area-modal-twitter-nopad" id="commentDisposisi" rows="3" placeholder="Isikan keterangan disposisi" name="comment"></textarea>
            </div>

            <input type="hidden" name="form[id]" id="frmid">
            <input type="hidden" name="form[name]" id="frmname">
            <input type="hidden" name="form[date]" id="frmdate">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-modal-instagram-danger" data-dismiss="modal">Batal</button>
        <button type="button" id="btnSendDisposisi" class="btn btn-modal-instagram" onclick="serviceSend('#frmDisposisi')">Kirim</button>
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
                rows="3" placeholder="Masukan balasan Anda" autofocus onkeyup="send_to_div(this.id, 'divSendModalFeeds')"></textarea>
                <div id="divSendModalFeeds" style="color: white;"></div>
                <input type="hidden" id="id_feeds">
            </div>
           {{--  <div class="form-group tb-cs-input-btn divLampiran">
              <span>Lampiran</span>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div> --}}
            <input type="hidden" name="iframePostId" id="iframePostId">
      </form>
      </div>
      
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-modal-instagram-danger" data-dismiss="modal">Batal</button>
        {{-- <button type="button" class="btn btn-modal-instagram">Draft</button> --}}
        <button type="button" onclick="iframePost('#iframePostId','#inputSendModalFeeds')" class="btn btn-modal-instagram">Kirim</button>
      </div>
  </div>
</div>
</div>
<!-- End Large Mosal -->




<div class="modal fade" id="modal-loadmore" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-twitter">
    <div class="modal-content">
      <div class="modal-header modal-header-sos">
        <h5 class="modal-title" id="myLargeModalLabel">
          <i class="lni lni-instagram-original icon-instagram"></i> All Comment
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" id="divLoadMore">
          
      </div>
      <input type="hidden" id="frmIdDelete">
      <input type="hidden" id="frmDivDelete">
      <div class="modal-footer">
        <button type="button" class="btn btn-modal-instagram-danger" data-dismiss="modal">
          Tutup
        </button>
      </div>
      </div>
    </div>
</div>

<div class="modal fade" id="modal-iframepost" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header modal-header-sos">
        <h5 class="modal-title" id="myLargeModalLabel">
          <i class="lni lni-instagram-original icon-instagram"></i> Posting Jawaban
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" id="">
         <div id="postUrl"></div>
      </div>
      </div>
    </div>
</div>

 <div class="modal fade" id="modal-confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="z-index: 1052">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-twitter">
    <div class="modal-content" style="box-shadow: grey 0px 0px 550px 0px">
      <div class="modal-header modal-header-sos">
        <h5 class="modal-title" id="myLargeModalLabel">
          <i class="lni lni-instagram-original icon-instagram"></i> Konfirmasi Hapus Disposisi
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" style="font-size: 16px;min-height: 50px !important">
          Apakah anda yakin akan menghapus Disposisi ini ?
      </div>
      <input type="hidden" id="frmIdDelete">
      <input type="hidden" id="frmDivDelete">
      <div class="modal-footer">
        <button type="button" class="btn btn-modal-instagram-danger" data-dismiss="modal">
          Batal
        </button>
        <button type="button" class="btn btn-modal-instagram" onclick="deleteDisposisi()">
          Hapus
        </button>
      </div>
      </div>
    </div>
</div>



<script>
    

    function collapseBtn(div1,div2){
        $("#"+div1).slideUp(300);
        $("#"+div2).slideDown(300);
    }

    function modal_feeds(content='',user='',date='',post_url='', id_feeds =''){
        $('#id_feeds').val(id_feeds);
        $('#modal-balas-feed').modal('show');
        $('#contentTwitUser').html(content);
        $('#twitUser').html('@'+user);
        $('#headerUser').html('@'+user);
        $('#dateModal').html(date);
        $('#iframePostId').val(post_url);
        $("#imgUser").html('<img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt="">')
    }

    function modal_disposisi(id='',content='',user='',date=''){
        $('#modal-add-disposisi').modal('show');
        $('#ministryId').val('');
        $('#commentDisposisi').val('');
        $('#idFeeds').val(id);
        $('#contentTwitUserDisposisi').html(content);
        $('#twitUserDisposisi').html('@'+user);
        $('#headerUserDisposisi').html('@'+user);
        $('#dateModalDisposisi').html(date);
        $("#imgUserDisposisi").html('<img src="{{asset('assets-back/img/logo-mini-atr.jpg')}}" alt="">');

        //Form Disposisi untuk LoadData
        $("#frmdate").val(date);
        $("#frmid").val(id);
    }

    function setUser(){
      userDisposisi = $("#ministryId option:selected" ).text();
      $("#frmname").val(userDisposisi);  
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

    function confirm_delete(id,div){
        $("#frmIdDelete").val(id);
        $("#frmDivDelete").val(div);
        $("#modal-confirm-delete").modal('show');
    }

    function loadmore(rowid){
        comment = $("."+rowid).html();
        $("#divLoadMore").html(comment);
        $("#divLoadMore .rowDetail").show();
        $("#modal-loadmore").modal('show');
    }

    function iframePost(id_post_url,textarea) {
      var post_url = $(id_post_url).val();

      if($('#inputSendModalFeeds').val() == ''){
        alert('Balasan tidak boleh kosong');
        return false;
      }

      copyClipboard('divSendModalFeeds');
      
      $('#modal-balas-feed').modal('hide');
      $('#modal-iframepost').modal('show');
      // $("#txtPostUrl").val(post_url);
      $('#divSendModalFeeds').html('');

      $('#inputSendModalFeeds').val('');
      $('#postUrl').html('');

      var link = post_url;
      // alert(link);
      var iframe = document.createElement('iframe');
      iframe.frameBorder=0;
      iframe.width="820px";
      iframe.height="350px";
      iframe.id="iframePostReply";
      iframe.setAttribute("src", link);
      document.getElementById("postUrl").appendChild(iframe);

      post_feeds($('#id_feeds').val(), $('#inputSendModalFeeds').val());

      
    }

   function copyClipboard(element) {
      var elm = document.getElementById(element);

      if(document.body.createTextRange) {
        var range = document.body.createTextRange();
        range.moveToElementText(elm);
        range.select();
        document.execCommand("Copy");
        alert("Text Copied");
      }
      else if(window.getSelection) {
        var selection = window.getSelection();
        var range = document.createRange();
        range.selectNodeContents(elm);
        selection.removeAllRanges();
        selection.addRange(range);
        document.execCommand("Copy");
        alert("Text Copied");
      }
    }

    function send_to_div(id, hidden_div){
      var textarea = $('#' + id).val();
      $('#' + hidden_div).html(textarea);
    }

    function post_feeds(id, comment){
      var data = {"_token" :  $('#token').val(), "id": id, "comment": comment};
      // console.log(data); return false;
      $.ajax({
        url: '{{ url('postReply') }}',
        data: data,
        type: 'POST',
        success: function(res){
           console.log(res.error);
        }
      })
    }

</script>

@endsection

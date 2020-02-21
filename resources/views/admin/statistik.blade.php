@section('title','Statistik')
@extends('layouts-back.layout')
@section('content')

  <div class="tb-content tb-style1">
    <div class="tb-height-b30 tb-height-lg-b30"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="tb-iconbox tb-style4 tb-color2">
            <div class="tb-icon tb-flex">
              <i class="lni lni-envelope"></i>
            </div>
            <div class="tb-iconbox-text">
              <h3 class="tb-iconbox-heading" id="jml_email">0</h3>
              <div class="tb-iconbox-sub-heading">Total Aduan</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="tb-iconbox tb-style4 tb-color3">
            <div class="tb-icon tb-flex">
              <i class="lni lni-twitter"></i>
            </div>
            <div class="tb-iconbox-text">
              <h3 class="tb-iconbox-heading" id="jml_twitter">0</h3>
              <div class="tb-iconbox-sub-heading">Total Aduan</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="tb-iconbox tb-style4 tb-color1" style="background-color: #A92BAB !important">
            <div class="tb-icon tb-flex">
              <i class="lni lni-instagram-original"></i>
            </div>
            <div class="tb-iconbox-text">
              <h3 class="tb-iconbox-heading" id="jml_instagram">0</h3>
              <div class="tb-iconbox-sub-heading">Total Aduan</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="tb-iconbox tb-style4 tb-color1" style="background-color: #d2152b !important">
            <div class="tb-icon tb-flex">
              <i class="lni lni-youtube"></i>
            </div>
            <div class="tb-iconbox-text">
              <h3 class="tb-iconbox-heading" id="jml_youtube">0</h3>
              <div class="tb-iconbox-sub-heading">Total Aduan</div>
            </div>
          </div>
        </div>
      </div><!-- .row -->
      <div class="tb-height-b30 tb-height-lg-b30"></div>
      <div class="row">
        <div class="col-lg-8">
          <div class="tb-card tb-style1">
            <div class="tb-card-heading">
              <div class="tb-card-heading-left">
                <h2 class="tb-card-title">Grafik Pengaduan</h2>
              </div>
            </div>
            <div class="tb-card-body">
              <div class="tb-height-b25 tb-height-lg-b25"></div>
              <div class="tb-padd-lr-30">
                <div class="tb-chart-wrap tb-style14">
                  <div class="tb-chart-in">
                    <canvas id="grafik_pengaduan_chart"></canvas>
                  </div>
                </div>
                <ul class="tb-circle-stroke tb-style1">
                  <li>
                    <span class="tb-circle-color" data-bulet-color="#007aff"></span>
                    <span class="tb-circle-label">Facebook</span>
                  </li>
                  <li>
                    <span class="tb-circle-color" data-bulet-color="#34c759"></span>
                    <span class="tb-circle-label">Twitter</span>
                  </li>
                   <li>
                    <span class="tb-circle-color" data-bulet-color="#a92bab"></span>
                    <span class="tb-circle-label">Instagram</span>
                  </li>
                   <li>
                    <span class="tb-circle-color" data-bulet-color="#d2152b"></span>
                    <span class="tb-circle-label">Youtube</span>
                  </li>
                  <li>
                    <span class="tb-circle-color" data-bulet-color="#faff00"></span>
                    <span class="tb-circle-label">Email</span>
                  </li>
                </ul>
              </div>
              <div class="tb-height-b30 tb-height-lg-b30"></div>
            </div>
          </div>
        </div><!-- .col -->
        <div class="col-lg-4">
          <div class="tb-card tb-style1">
            <div class="tb-card-heading">
              <div class="tb-card-heading-left">
                <h2 class="tb-card-title">Aduan Terjawab</h2>
              </div>
              <div class="tb-card-heading-right">
                <div class="tb-custom-select-wrap tb-style1">
                  <select name="aduan-terjawab" class="tb-custom-select" id="aduan_terjawab">
                    <option value="all">All Platform</option>
                    <option value="twitter">Twitter</option>
                    <option value="instagram">Instagram</option>
                    <option value="youtube">Youtube</option>
                    <option value="email">Email</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="tb-card-body">
              <div class="tb-chart-wrap tb-style3 tb-type2">
                <div class="tb-chart-inside">
                  <div class="tb-chart-in">
                    <canvas id="aduan_terjawab_chart_all" height="120" width="120"></canvas>
                    <canvas id="aduan_terjawab_chart_twitter" height="120" width="120" style="display: none"></canvas>
                    <canvas id="aduan_terjawab_chart_instagram" height="120" width="120" style="display: none"></canvas>
                    <canvas id="aduan_terjawab_chart_youtube" height="120" width="120" style="display: none"></canvas>
                    <canvas id="aduan_terjawab_chart_email" height="120" width="120" style="display: none"></canvas>
                  </div>
                  <div class="tb-active-device">
                    {{-- <div class="tb-active-device-per">
                      0 <span>%</span>
                    </div> --}}
                    <div class="title_terjawab">Semua Platform</div>

                  </div>
                </div>
                <div class="tb-height-b20 tb-height-lg-b20"></div>
                <ul class="tb-circle-stroke tb-style1">
                  <li>
                    <span class="tb-circle-color" data-bulet-color="#007aff"></span>
                    <span class="tb-circle-label">Terjawab</span>
                  </li>
                  <li>
                    <span class="tb-circle-color" data-bulet-color="#eaeaea"></span>
                    <span class="tb-circle-label">Belum terjawab</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><!-- .col -->
      </div><!-- .row -->

      <div class="tb-height-b30 tb-height-lg-b30"></div>
	   <div class="col-lg-12">
          <div class="tb-card tb-style1">
            <div class="tb-card-heading">
              <div class="tb-card-heading-left">
                <h2 class="tb-card-title">Kategori Aduan Terpopuler</h2>
              </div>
            </div>
            <div class="tb-card-body">
              <div class="tb-height-b25 tb-height-lg-b25"></div>
              <div class="tb-padd-lr-30">
                <div class="tb-chart-wrap tb-style14">
                  <div class="tb-chart-in">
                    <canvas id="aduan_populer_chart"></canvas>
                  </div>
                </div>
              </div>
              <div class="tb-height-b30 tb-height-lg-b30"></div>
            </div>
          </div>
        </div><!-- .col -->
	  <div class="tb-height-b30 tb-height-lg-b30"></div>
	  
       <div class="row">
        <div class="col-lg-12">
          <div class="tb-card tb-style1">
            <div class="tb-card-heading">
              <div class="tb-card-heading-left">
                <h2 class="tb-card-title">SLA Performansi - 10 Kantor Wilayah Terlama Merespon Aduan</h2>
              </div>
            </div>
            <div class="tb-card-body">
              <div class="tb-height-b25 tb-height-lg-b25"></div>
              <div class="tb-padd-lr-30">
                <div class="tb-chart-wrap tb-style14">
                  <div class="tb-chart-in">
                   <canvas id="sla_kanwil_chart"></canvas>
                  </div>
                </div>
              </div>
              <div class="tb-height-b30 tb-height-lg-b30"></div>
            </div>
          </div>
        </div><!-- .col -->
      </div><!-- .row -->

      <div class="tb-height-b30 tb-height-lg-b30"></div>

       <div class="row">
        <div class="col-lg-12">
          <div class="tb-card tb-style1">
            <div class="tb-card-heading">
              <div class="tb-card-heading-left">
                <h2 class="tb-card-title">SLA Performansi - 10 Kantor Pertanahan Terlama Merespon Aduan</h2>
              </div>
            </div>
            <div class="tb-card-body">
              <div class="tb-height-b25 tb-height-lg-b25"></div>
              <div class="tb-padd-lr-30">
                <div class="tb-chart-wrap tb-style14">
                  <div class="tb-chart-in">
                   <canvas id="sla_kantah_chart"></canvas>
                  </div>
                </div>
              </div>
              <div class="tb-height-b30 tb-height-lg-b30"></div>
            </div>
          </div>
        </div><!-- .col -->
      </div><!-- .row -->

      <div class="tb-height-b30 tb-height-lg-b30"></div>
      <div class="row">
        {{-- <div class="col-lg-6">
          <div class="tb-card tb-style1">
            <div class="tb-card-heading">
              <div class="tb-card-heading-left">
                <h2 class="tb-card-title">Distribusi Aduan Terbanyak</h2>
              </div>
            </div>
            <div class="tb-card-body">
              <div class="tb-chart-wrap tb-style3 tb-type2">
                <div class="tb-chart-inside">
                  <div>
                    {{-- <canvas id="tb-chart3" height="350"></canvas> --}}
                 {{--   <div id="map" style="width: 100%; height: 400px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- .col --> --}} -
      </div><!-- .row -->

    </div>
    <!-- .container-fluid -->
    <div class="tb-height-b60 tb-height-lg-b60"></div>
   
  </div>
  <!-- Resources -->

<!-- Chart code -->
    <script type="text/javascript">
          $(document).ready(function(){
             getStat()
          });

          $('#aduan_terjawab').on('change', function() {
              
             var type_aduan = this.value;
             console.log(type_aduan);
             
             if(type_aduan == 'all'){
                $('#aduan_terjawab_chart_all').show();
                $('#aduan_terjawab_chart_twitter').hide();
                $('#aduan_terjawab_chart_instagram').hide();
                $('#aduan_terjawab_chart_youtube').hide();
                $('#aduan_terjawab_chart_email').hide();
             }
             else if(type_aduan == 'twitter'){
                $('#aduan_terjawab_chart_all').hide();
                $('#aduan_terjawab_chart_twitter').show();
                $('#aduan_terjawab_chart_instagram').hide();
                $('#aduan_terjawab_chart_youtube').hide();
                $('#aduan_terjawab_chart_email').hide();
             }
             else if(type_aduan == 'instagram'){
                $('#aduan_terjawab_chart_all').hide();
                $('#aduan_terjawab_chart_twitter').hide();
                $('#aduan_terjawab_chart_instagram').show();
                $('#aduan_terjawab_chart_youtube').hide();
                $('#aduan_terjawab_chart_email').hide();
             }
             else if(type_aduan == 'youtube'){
                $('#aduan_terjawab_chart_all').hide();
                $('#aduan_terjawab_chart_twitter').hide();
                $('#aduan_terjawab_chart_instagram').hide();
                $('#aduan_terjawab_chart_youtube').show();
                $('#aduan_terjawab_chart_email').hide();
             }
             else if(type_aduan == 'email'){
                $('#aduan_terjawab_chart_all').hide();
                $('#aduan_terjawab_chart_twitter').hide();
                $('#aduan_terjawab_chart_instagram').hide();
                $('#aduan_terjawab_chart_youtube').hide();
                $('#aduan_terjawab_chart_email').show();
             }

          });

          function getStat(){
              var url = base_url + '/statAll';
              $.get(url, function (data){
                  data  = JSON.parse(data);
                  email = data.data.find(el => el.type == "email").jml;
                  twitter = data.data.find(el => el.type == "twitter").jml;
                  instagram = data.data.find(el => el.type == "instagram").jml;
                  youtube = data.data.find(el => el.type == "youtube").jml;

                  $("#jml_email").html(email);
                  $("#jml_twitter").html(twitter);
                  $("#jml_instagram").html(instagram);
                  $("#jml_youtube").html(youtube);
              });
          }


    </script>

  @endsection
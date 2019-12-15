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
              <i class="lni lni-facebook"></i>
            </div>
            <div class="tb-iconbox-text">
              <h3 class="tb-iconbox-heading">105</h3>
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
              <h3 class="tb-iconbox-heading">213</h3>
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
              <h3 class="tb-iconbox-heading">78</h3>
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
              <h3 class="tb-iconbox-heading">8</h3>
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
                    <canvas id="tb-chart1-type8"></canvas>
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
                  <select name="#" class="tb-custom-select">
                    <option value="classic-fit1">Last 7 days</option>
                    <option value="classic-fit2">Last 30 days</option>
                    <option value="classic-fit3">Last 3 Month</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="tb-card-body">
              <div class="tb-chart-wrap tb-style3 tb-type2">
                <div class="tb-chart-inside">
                  <div class="tb-chart-in">
                    <canvas id="tb-chart3-type3" height="120" width="120"></canvas>
                  </div>
                  <div class="tb-active-device">
                    <div class="tb-active-device-per">
                      70 <span>%</span>
                    </div>
                    <div class="tb-active-device-title">Semua Platform</div>
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
                   <canvas id="tb-chart2-type11"></canvas>
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
                   <canvas id="tb-chart2-type12"></canvas>
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
        <div class="col-lg-6">
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
                   <div id="map" style="width: 100%; height: 400px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- .col -->
         <div class="col-lg-6">
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
                    <canvas id="tb-chart2-type17"></canvas>
                  </div>
                </div>
              </div>
              <div class="tb-height-b30 tb-height-lg-b30"></div>
            </div>
          </div>
        </div><!-- .col -->
      </div><!-- .row -->

    </div>
    <!-- .container-fluid -->
    <div class="tb-height-b60 tb-height-lg-b60"></div>
   
  </div>
  <!-- Resources -->

<!-- Chart code -->
<script type="text/javascript" src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/maps/js/indonesiaLow.js"></script>

    <!-- amCharts javascript code -->
    <script type="text/javascript">
      AmCharts.makeChart("map",{
          "type": "map",
          "pathToImages": "http://www.amcharts.com/lib/3/images/",
          "addClassNames": true,
          "fontSize": 15,
          "color": "#000000",
          "projection": "mercator",
          "backgroundAlpha": 1,
          "backgroundColor": "rgba(65,197,219,0.21)",
          "dataProvider": {
            "map": "indonesiaLow",
            "getAreasFromMap": true,
            "images": [
              {
                "top": 40,
                "left": 60,
                "width": 80,
                "height": 80,
                "pixelMapperLogo": true,
                "imageURL": "{{'http://localhost:8000/assets-back/img/logo-mini-atr.jpg'}}",
                "url": "http://www.amcharts.com"
              }
            ],
            "areas": [
              {
                "id": "ID-AC",
                "title": "Kanwil Aceh (5 Aduan)",
                "color": "rgba(127,216,75,0.8)"
              },
              {
                "id": "ID-BA",
                "title": "Kanwil Bali (5 Aduan)",
                "color": "rgba(207,216,75,0.8)"
              },
              {
                "id": "ID-BB",
                "title": "Kanwil Bangka Belitung (0 Aduan)",
                "color": "rgba(216,196,75,0.8)"
              },
              {
                "id": "ID-BE",
                "title": "Kanwil Bengkulu (3 Aduan)",
                "color": "rgba(179,216,75,0.8)"
              },
              {
                "id": "ID-BT",
                "title": "Kanwil Banten (4 Aduan)",
                "color": "rgba(216,144,75,0.8)"
              },
              {
                "id": "ID-GO",
                "title": "Kanwil Gorontalo (2 Aduan)",
                "color": "rgba(184,196,1,0.56)"
              },
              {
                "id": "ID-JA",
                "title": "Kanwil Jambi (0 Aduan)",
                "color": "rgba(216,75,138,0.8)"
              },
              {
                "id": "ID-JB",
                "title": "Kanwil Jawa Barat (23 Aduan)",
                "color": "rgba(75,98,216,0.8)"
              },
              {
                "id": "ID-JI",
                "title": "Kanwil Jawa Timur (4 Aduan)",
                "color": "rgba(190,75,216,0.8)"
              },
              {
                "id": "ID-JK",
                "title": "Kanwil Jakarta Raya (28 Aduan)",
                "color": "rgba(216,207,75,0.8)"
              },
              {
                "id": "ID-JT",
                "title": "Kanwil Jawa Tengah (5 Aduan)",
                "color": "rgba(216,87,75,0.8)"
              },
              {
                "id": "ID-KB",
                "title": "Kanwil Kalimantan Barat (6 Aduan)",
                "color": "rgba(190,75,216,0.8)"
              },
              {
                "id": "ID-KI",
                "title": "Kanwil Kalimantan Timur (9 Aduan)",
                "color": "rgba(216,75,150,0.8)"
              },
              {
                "id": "ID-KR",
                "title": "Kepulauan Riau",
                "color": "rgba(216,75,75,0.8)"
              },
              {
                "id": "ID-KS",
                "title": "Kanwil Kalimantan Selatan (0 Aduan)",
                "color": "rgba(216,87,75,0.8)"
              },
              {
                "id": "ID-KT",
                "title": "Kanwil Kalimantan Tengah (8 Aduan)",
                "color": "rgba(75,216,207,0.8)"
              },
              {
                "id": "ID-KU",
                "title": "Kanwil Kalimantan Utara (6 Aduan)",
                "color": "rgba(75,216,81,0.8)"
              },
              {
                "id": "ID-LA",
                "title": "Kanwil Lampung (8 Aduan)",
                "color": "rgba(216,156,75,0.8)"
              },
              {
                "id": "ID-MA",
                "title": "Kanwil Maluku (3 Aduan)",
                "color": "rgba(206,11,219,0.56)"
              },
              {
                "id": "ID-MU",
                "title": "Kanwil Maluku Utara (0 Aduan)",
                "color": "rgba(196,1,1,0.56)"
              },
              {
                "id": "ID-NB",
                "title": "Kanwil NTB (3 Aduan)",
                "color": "rgba(196,113,1,0.56)"
              },
              {
                "id": "ID-NT",
                "title": "Kanwil NTT (0 Aduan)",
                "color": "rgba(41,196,1,0.56)"
              },
              {
                "id": "ID-PA",
                "title": "Kanwil Papua (3 Aduan)",
                "color": "rgba(1,196,129,0.75)"
              },
              {
                "id": "ID-PB",
                "title": "Kanwil Papua Barat (0 Aduan)",
                "color": "rgba(196,144,1,0.75)"
              },
              {
                "id": "ID-RI",
                "title": "Kanwil Riau (1 Aduan)",
                "color": "rgba(75,216,181,0.8)"
              },
              {
                "id": "ID-SA",
                "title": "Kanwil Sulawesi Utara (3 Aduan)",
                "color": "rgba(196,65,1,0.56)"
              },
              {
                "id": "ID-SB",
                "title": "Kanwil Sumatera Barat (7 Aduan)",
                "color": "rgba(216,75,207,0.8)"
              },
              {
                "id": "ID-SG",
                "title": "Kanwil Sulawesi Tenggara (3 Aduan)",
                "color": "rgba(196,25,1,0.56)"
              },
              {
                "id": "ID-SN",
                "title": "Kanwil Sulawesi Selatan (4 Aduan)",
                "color": "rgba(1,33,196,0.56)"
              },
              {
                "id": "ID-SR",
                "title": "Kanwil Sulawesi Barat (0 Aduan)",
                "color": "rgba(9,196,1,0.56)"
              },
              {
                "id": "ID-SS",
                "title": "Kanwil Sumatera Selatan (3 Aduan)",
                "color": "rgba(133,75,216,0.8)"
              },
              {
                "id": "ID-ST",
                "title": "Kanwil Sulawesi Tengah (1 Aduan)",
                "color": "rgba(97,1,196,0.56)"
              },
              {
                "id": "ID-SU",
                "title": "Kanwil Sumatera Utara (3 Aduan)",
                "color": "rgba(216,173,75,0.8)"
              },
              {
                "id": "ID-YO",
                "title": "Kanwil Yogyakarta (2 Aduan)",
                "color": "rgba(75,216,104,0.8)"
              },
              {
                "id": "MY-12",
                "title": "Sabah",
                "color": "rgba(142,142,142,0.8)"
              },
              {
                "id": "MY-13",
                "title": "Sarawak",
                "color": "rgba(142,142,142,0.8)"
              },
              {
                "id": "BN",
                "title": "Brunei Darussalam",
                "color": "rgba(142,142,142,0.8)"
              }
            ]
          },
          "balloon": {
            "horizontalPadding": 15,
            "borderAlpha": 0,
            "borderThickness": 1,
            "verticalPadding": 15
          },
          "areasSettings": {
            "color": "rgba(129,129,129,1)",
            "outlineColor": "rgba(65,197,219,0.21)",
            "rollOverOutlineColor": "rgba(65,197,219,0.21)",
            "rollOverBrightness": 20,
            "selectedBrightness": 20,
            "selectable": true,
            "unlistedAreasAlpha": 0,
            "unlistedAreasOutlineAlpha": 0
          },
          "imagesSettings": {
            "alpha": 1,
            "color": "rgba(129,129,129,1)",
            "outlineAlpha": 0,
            "rollOverOutlineAlpha": 0,
            "outlineColor": "rgba(65,197,219,0.21)",
            "rollOverBrightness": 20,
            "selectedBrightness": 20,
            "selectable": true
          },
          "linesSettings": {
            "color": "rgba(129,129,129,1)",
            "selectable": true,
            "rollOverBrightness": 20,
            "selectedBrightness": 20
          },
          "zoomControl": {
            "zoomControlEnabled": true,
            "homeButtonEnabled": false,
            "panControlEnabled": false,
            "right": 38,
            "bottom": 30,
            "minZoomLevel": 0.25,
            "gridHeight": 100,
            "gridAlpha": 0.1,
            "gridBackgroundAlpha": 0,
            "gridColor": "#FFFFFF",
            "draggerAlpha": 1,
            "buttonCornerRadius": 2
          }
        });
    </script>
  @endsection
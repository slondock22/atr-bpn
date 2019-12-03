@section('title','Statistik')
@extends('layouts-back.layout')
@section('content')
  <div class="tb-content tb-style1">
    <div class="tb-height-b30 tb-height-lg-b30"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
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
        <div class="col-lg-4">
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
        <div class="col-lg-4">
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
                  <div class="tb-chart-in">
                    <canvas id="tb-chart3" height="350"></canvas>
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
  @endsection
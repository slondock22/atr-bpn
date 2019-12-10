@section('title','Statistik')
@extends('layouts-back.layout')
@section('content')
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>

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
                  <div>
                    {{-- <canvas id="tb-chart3" height="350"></canvas> --}}
                    <div id="chartdiv"></div>
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
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

/* Create map instance */
var chart = am4core.create("chartdiv", am4maps.MapChart);

/* Set map definition */
chart.geodata = am4geodata_worldLow;

/* Set projection */
chart.projection = new am4maps.projections.Miller();

/* Create map polygon series */
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

/* Make map load polygon (like country names) data from GeoJSON */
polygonSeries.useGeodata = true;

/* Configure series */
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.applyOnClones = true;
polygonTemplate.togglable = true;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.nonScalingStroke = true;
polygonTemplate.strokeOpacity = 0.5;
polygonTemplate.fill = chart.colors.getIndex(0);
var lastSelected;
polygonTemplate.events.on("hit", function(ev) {
  if (lastSelected) {
    // This line serves multiple purposes:
    // 1. Clicking a country twice actually de-activates, the line below
    //    de-activates it in advance, so the toggle then re-activates, making it
    //    appear as if it was never de-activated to begin with.
    // 2. Previously activated countries should be de-activated.
    lastSelected.isActive = false;
  }
  ev.target.series.chart.zoomToMapObject(ev.target);
  if (lastSelected !== ev.target) {
    lastSelected = ev.target;
  }
})


/* Create selected and hover states and set alternative fill color */
var ss = polygonTemplate.states.create("active");
ss.properties.fill = chart.colors.getIndex(2);

var hs = polygonTemplate.states.create("hover");
hs.properties.fill = chart.colors.getIndex(4);

// Hide Antarctica
polygonSeries.exclude = ["AQ"];

// Small map
chart.smallMap = new am4maps.SmallMap();
// Re-position to top right (it defaults to bottom left)
chart.smallMap.align = "right";
chart.smallMap.valign = "top";
chart.smallMap.series.push(polygonSeries);

// Zoom control
chart.zoomControl = new am4maps.ZoomControl();

var homeButton = new am4core.Button();
homeButton.events.on("hit", function(){
  chart.goHome();
});

homeButton.icon = new am4core.Sprite();
homeButton.padding(7, 5, 7, 5);
homeButton.width = 30;
homeButton.icon.path = "M16,8 L14,8 L14,16 L10,16 L10,10 L6,10 L6,16 L2,16 L2,8 L0,8 L8,0 L16,8 Z M16,8";
homeButton.marginBottom = 10;
homeButton.parent = chart.zoomControl;
homeButton.insertBefore(chart.zoomControl.plusButton);

}); // end am4core.ready()
</script>

  @endsection
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="theme_bubble" />
  <!-- Page Title -->
  <title>#TanyaATRBPN - @yield('title')</title>
  <!-- Favicon Icon -->
  <link rel="shortcut icon" href="{{asset('/')}}assets/img/logobpn.ico" type="image/x-icon">
  <!-- Plugins css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/material-icons.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/LineIcons.min.css" />
  <link rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/jqvmap.min.css" />
  <link rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/swiper.min.css" />
  <link id="mode-option" rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/classic-style.css" />
  <link href="{{asset('/assets-back')}}/css/select2.min.css" rel="stylesheet" />
  
  <link id="mode-option" rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/style.css" />
  <link href="{{asset('/')}}assets/css/customs.css" rel="stylesheet">
  <link href="{{asset('/')}}assets-back/css/bootstrap-customs.css" rel="stylesheet">
  <link href="{{asset('/')}}assets-back/css/alert.css" rel="stylesheet" type="text/css" />
  <link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <script async='async' custom-element="amp-twitter" src="https://cdn.ampproject.org/v0/amp-twitter-0.1.js"></script>

  </head>
  <body>

</head>

<script type="text/javascript">
	var base_url = '{{ url("/") }}';
</script>
<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

  <div class="tb-height-b60 tb-height-lg-b60"></div>
  <header class="tb-header tb-style1 tb-sticky-menu">
    <div class="tb-main-header">
      <div class="tb-main-header-in">
       @include('layouts-back.logo')
       @include('layouts-back.notification')
      </div>
    </div>


  </header><!-- .tb-header -->
       @include('layouts-back.sidebar')
       <div id="flash_msg" style="display: none;">
        <div class="alert alert-dismissible alert-success" role="alert">
            <button type="button" class="close" aria-label="Close" onclick="closeFlashAlert()">
                <span aria-hidden="true">×</span>
            </button>
            <span class="alert-inner--text">
                <strong id="alert-title">Success</strong><br>
                <span id="alert-message">Data Berhasil Disimpan</span>
            </span>
        </div>
    </div>
       <!-- Content -->
       @yield('content')

       
   <!-- Scripts -->
  <script src="{{asset('/assets-back')}}/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/Chart.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/statistik.js"></script>
  <script src="{{asset('/assets-back')}}/js/swiper.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/smooth-scrollbar.js"></script>
  <script src="{{asset('/assets-back')}}/js/main.js"></script>
  <script src="{{asset('/assets-back')}}/js/services.js"></script>
  <script src="{{asset('/assets-back')}}/js/customs.js"></script>
  <script src="{{asset('/assets-back')}}/js/alert.js"></script>
  <script src="{{asset('/assets-back')}}/js/select2.min.js"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/linkify.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/linkify-jquery.min.js"></script>
  

 
 
  
  <script type="text/javascript">
      $(window).on('load', function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");
        });
  </script>


</body>
</html>
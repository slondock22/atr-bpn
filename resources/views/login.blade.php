<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="theme_bubble" />
  <!-- Page Title -->
  <title>#TanyaATRBPN - Login</title>
  <!-- Favicon Icon -->
  <link rel="shortcut icon" href="{{asset('/')}}assets/img/logobpn.ico" type="image/x-icon">
  <!-- Plugins css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/material-icons.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/jqvmap.min.css" />
  <link id="mode-option" rel="stylesheet" type="text/css" href="{{asset('/assets-back')}}/css/classic-style.css" />
  <link href="{{asset('/')}}assets/css/customs.css" rel="stylesheet">
</head>

<body class="tb-white-bg">

   <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

  <div class="tb-login-wrap tb-style1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="tb-vertical-middle">
            <div class="tb-vertical-middle-in">
              <div class="tb-signup-img tb-style1">
                <img src="{{asset('/')}}assets/img/banner-atr.png" alt="">
              </div>
            </div>
          </div>
        </div><!-- .col -->
        <div class="col-lg-4">
          <div class="tb-vertical-middle">
            <div class="tb-vertical-middle-in">
              @if (session('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              <form action="{{route('postLogin')}}" class="tb-form tb-style1" method="post">
                @csrf
                <h2 class="tb-form-title" style="text-align: center;">Login</h2>
                <div class="tb-height-b15 tb-height-lg-b15"></div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="tb-form-field">
                      <input type="text" placeholder="Username" name="username">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="tb-form-field">
                      <input type="password" placeholder="Password" name="password">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="tb-height-b5 tb-height-lg-b5"></div>
                    <div class="tb-form-field tb-forget-pass-wrap">
                      <div class="tb-checkbox-wrap tb-style1">
                        <span class="tb-checkbox tb-style3 tb-color2">
                          <input type="checkbox">
                          <span class="tb-checkbox-icon"><i class="material-icons">done</i></span>
                        </span>
                        <div class="tb-checkbox-text">Remember me</div>
                      </div>
                      <div class="tb-forget-pass-btn">
                        <a href="#" class="tb-form-btn tb-style2 tb-type1 tb-color1">Forgot password?</a>
                      </div>
                    </div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                    <button type="submit" class="tb-form-btn tb-style1 tb-color1"><span>Sign In</span></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- .container -->
  </div>
  
  <!-- Scripts -->
  <script src="{{asset('/assets-back')}}/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/Chart.min.js"></script>
  <script src="{{asset('/assets-back')}}/js/chartjs.classic.js"></script>
  <script src="{{asset('/assets-back')}}/js/smooth-scrollbar.js"></script>
  <script src="{{asset('/assets-back')}}/js/main.js"></script>
   <script type="text/javascript">
      $(window).on('load', function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
  </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kementerian ATR/BPN">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ========== Page Title ========== -->
    <title>#TanyaATRBPN</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('/')}}assets/img/logobpn.ico" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('/')}}assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/animate.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/bootsnav.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{asset('/')}}assets/js/html5/html5shiv.min.js"></script>
      <script src="{{asset('/')}}assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">


    
</head>

<body>


    <!-- Start User Login 
    ============================================= -->
    <div class="login-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="login-items">
                        <div class="login-box">
                            <div class="login-content">
                                <div class="col-md-12 content" style="border-left: 0px !important">
                                    <a href="{{url('/')}}"><img src="{{asset('/')}}assets/img/logo-atr2.png" style="margin-bottom: 20px;"></a>
                                    <h3>Lacak Aduan</h3>
                                    <p>
                                        Cari tahu jawaban atas aduanmu dengan mengisi nomor tiket aduan pada kolom dibawah ini.
                                    </p>
                                    <form action="{{route('lacak-aduan')}}" method="POST" id="frmLacakAduan" class="frmLacakAduan">
                                        @csrf
                                        <div class="col-lg-6 col-md-6">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="No Tiket Aduan*" id="no_tiket" name="no_tiket" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <button type="button" name="submit" id="submit" onclick="lacakAduan('#frmLacakAduan')">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                
                                </div>
                                <div class="col-md-12 content" style="border-left: 0px !important; margin-top: 20px;">
                                    <div class="acd-items acd-arrow" id="hasil" style="display: none;">
                                        <div class="panel-group symb" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title" style="text-transform: none !important;">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#jawaban" aria-expanded="true" class="" id="pertanyaan" style="font-weight: 400 !important;">
                                                           
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="jawaban" class="panel-collapse collapse in" aria-expanded="true" style="">
                                                    
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End User Login -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script type="text/javascript">
    function lacakAduan(formId){
        $("#submit").attr('disabled','disabled');

        if($('#no_tiket').val() == ''){
           swal("Perhatian", "Nomor tiket tidak boleh kosong", "error");
          $("#submit").removeAttr('disabled','disabled');
           return false;
        }

        $.ajax({
            type: 'POST',
            url: $(formId).attr('action'),
            data: $(formId).serialize(),
            success: function(data){
                $('#no_tiket').val('');

                if(data['status']=='success'){
                    $('#hasil').show();
                    $('#pertanyaan').html('');
                    $('#pertanyaan').html('Peratanyaan dari @'+data.pertanyaan.username+'<br><br>'+data.pertanyaan.feed_comment);
                     $("#jawaban").html('');

                    $.each(data['jawaban'], function(key, val) {
                        
                        $("#jawaban").append('<div class="panel-body"><p style="font-size:16px !important;"> Jawaban:<br><br>'+val.comment+'</p></div>');
                    });     

                }else{
                    $('#pertanyaan').html('');
                    $("#jawaban").html('');


                    swal("Perhatian", "Data tidak ditemukan", "error");
                }

                $("#submit").removeAttr('disabled','disabled');
            },
            error: function (request, status, error) {
                swal("Perhatian", "Terjadi Kesalahan", "error");
                $("#submit").removeAttr('disabled','disabled');
            }
        });
    }
    </script>
</body>

<!-- Mirrored from validthemes.com/themeforest/boxsass/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2019 17:11:10 GMT -->
</html>
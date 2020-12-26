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

    <script type="text/javascript">
    var base_url = '{{ url("/") }}';
    </script>

    <style type="text/css">
        #submit:disabled,
        button[disabled]{
          border: 1px solid #999999;
          background-color: #cccccc;
          color: #666666 !important;
        }
    </style>
    
</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">
        <div class="container">
            <div class="row">
                <!-- Start Navigation -->
                <nav id="mainNav" class="navbar navbar-default navbar-fixed white bootsnav on no-full nav-box no-background">

                    <div class="container">            

                         <!-- Start Atribute Navigation -->
                        <div class="attr-nav button-light">
                            <ul>
                                <li>
                                    <a href="{{route('login')}}" target="_blank">login</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Atribute Navigation -->

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="{{asset('/')}}assets/img/logo-atr2.png" class="logo" alt="Logo"></a>
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                                <li>
                                    <a href="#home" class="smooth-menu">Beranda</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#about">Tentang</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#features">Fitur</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#process">Alur Kerja</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#aduan-langsung">Buat Aduan</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#faq">FAQ</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#contact">Kontak</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>   

                </nav>
                <!-- End Navigation -->
                <div class="clearfix"></div>
                
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area content-double box-nav background-move bg-gray" style="background-image: url(assets/img/bg-2.png);">
        <div class="container">
            <div class="row">
                <div class="double-items">
                    <div class="col-md-6 left-info simple-video">
                        <div class="content" data-animation="animated fadeInUpBig">
                            <h1>
                                Selamat Datang di <span>#TanyaATRBPN</span>

                            </h1>
                            <p>
                               TANYA ATR/BPN - Tempat Aspirasi dan Layanan Aduan Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional adalah sebuah portal untuk mengakomodir segala pertanyan, keluhan dan media penyalur aspirasi masyarakat untuk semua pelayanan di Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional. Gunakan tagar #TanyaATRBPN untuk mengenal kami lebih dekat!.
                            </p>
                            <a class="btn btn-theme border btn-md" href="#about">Selengkapnya</a>
                           <!--  <a class="btn-animation popup-youtube" href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                                <i class="fa fa-play"></i> Watch Video
                            </a> -->
                        </div>
                    </div>
                    <div class="col-md-6 right-info">
                        <div class="owl-carousel">
                            <div class="thumb animated">
                                <img src="{{asset('/')}}assets/img/banner-atr.png" alt="Thumb">
                            </div>

                            <div class="thumb animated" align="center">
                                <img src="{{asset('/')}}assets/img/banner-atr2.png" alt="Thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

   <!-- Start Video Area 
    ============================================= -->
    <div id="about" class="video-area text-light bg-theme default-padding">
        <!-- Side Bg -->
        <div class="side-bg">
            <img src="assets/img/circle-shape.png" alt="Thumb">
        </div>
        <!-- End Side Bg -->
        <div class="container">
            <div class="row">
                <div class="item-box">
                    <div class="col-md-6 info">
                        <h2>Tentang #TanyaATRBPN</h2>
                        <p>
                            TANYA ATR/BPN - Tempat Aspirasi dan Layanan Aduan Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional adalah sebuah portal untuk mengakomodir segala pertanyan, keluhan dan media penyalur aspirasi masyarakat untuk semua pelayanan di Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional. Gunakan tagar #TanyaATRBPN untuk mengenal kami lebih dekat!.
                        </p>
                        
                        <h4>Kami Siap Untuk</h4>
                        <ul>
                            <li>Respon cepat tanggap pertanyaan keluhan dan aspirasi dari berbagai sosial media</li>
                            <li>Disposisi pengaduan langsung ke cabang Kementerian ATR/BPN di kota anda</li>
                            <li>Memberikan informasi terkini untuk semua layanan di Kementerian ATR/BPN</li>


                        </ul>
                    </div>
                    <div class="col-md-6 video">
                        <img src="assets/img/app/app-3.png" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Area -->

    <!-- Start Features Area 
    ============================================= -->
    <div id="features" class="features-area reverse shadow-less default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>FITUR</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Thumb -->
                <div class="col-md-5 thumb">
                    <img src="assets/img/illustrations/1.png" alt="Thumb">
                </div>
                <!-- End Thumb -->
                <div class="col-md-7 feature-box">
                    <div class="features-items text-center">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-speech-bubble"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Multi Platform</h4>
                                        <p>
                                            Tanyakan kami melalui twitter, facebook dan instagram anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-support"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Quick Response</h4>
                                        <p>
                                            Dengan sistem terintegrasi kami dapat menjawab pertanyaan anda dengan cepat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-rocket"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Connected</h4>
                                        <p>
                                            Kami membantu untuk terhubung langsung dengan kanwil ATR/BPN di Kota/Kab anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-concept"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Berita Terbaru</h4>
                                        <p>
                                            Dapatkan berita terkini seputar Kementerian ATR/BPN melalui sosial media anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Work Process Area 
    ============================================= -->
    <div id="process" class="work-process-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>ALUR KERJA</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="process-items">
                    <div class="col-md-6 thumb">
                        <img src="assets/img/illustrations/4.png" alt="Thumb">
                    </div>
                    <div class="col-md-6 info">
                        <ul>
                            <li>
                                <div class="list">
                                    <h3><i class="fas fa-paper-plane"></i></h3>
                                </div>
                                <div class="content">
                                    <h4>Posting</h4>
                                    <p>
                                        Kirim pertanyaan ataupun aspirasi anda melalui sosial media instagram, twitter ataupun facebook dengan menggunakan tagar #TanyaATRBPN.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <h3><i class="fas fa-crosshairs"></i></h3>
                                </div>
                                <div class="content">
                                    <h4>Respon</h4>
                                    <p>
                                        Setiap pertanyaan ataupun aspirasi yang masuk akan segera kami respon. Gunakan tagar #TanyaATRBPN untuk mempercepat respon jawaban.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <h3><i class="fas fa-forward"></i></h3>
                                </div>
                                <div class="content">
                                    <h4>Disposisi</h4>
                                    <p>
                                        Pertanyaan yang anda kirimkan akan disposisikan ke kanwil bpn provinsi dan kantor pertanahan kab/kota. Tambahkan tagar #(nama_kota/kab).
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <h3><i class="fas fa-check"></i></h3>
                                </div>
                                <div class="content">
                                    <h4>Pencatatan</h4>
                                    <p>
                                       Semua pertanyaan dan aspirasi yang masuk secara otomatis masuk ke dalam sistem pencatatan pengaduan kami untuk segera ditindak lanjuti.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Process Area -->

     <!-- Start Contact
    ============================================= -->
    <div id="aduan-langsung" class="contact-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Buat Aduan</h2>
                        <p>
                            Buat pertanyaan seputar aduan, keluhan, atau informasi secara langsung melalui portal #TanyaATRBPN.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="contact-items">

                    <!-- End Thumb -->
                    <div class="col-md-4 thumb">
                        <img src="assets/img/illustrations/5.png" alt="Thumb">
                    </div>
                    <!-- End Thumb -->
                    
                    <!-- Contact Form -->
                    <div class="col-md-7 col-md-offset-1 contact-form">
                        <form action="{{route('tambahAduanLapor')}}" method="POST" class="frmAduanLangsung" id="frmAduanLangsung">
                            @csrf
                            
                            <input type="hidden" name="aduan_type" id="aduan_type" value="portal">

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="username" name="username" placeholder="Nama Lengkap*" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error" id="email-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Nomor Handphone*" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="provinsi"></select>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="kota"></select>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="feed_comment_manual" name="feed_comment_manual" placeholder="Deskripsi Pertanyaan/Aduan*"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Foto Identitas Diri (KTP/SIM/Passpor)*</label>
                                        <input class="form-control" id="ktp" name="ktp" type="file" accept='image/*'>
                                        <span class="alert-error text-danger" id="ktp-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lampiran Pertanyaan/Aduan <span style="color:#afb0b2">(optional)</span></label>
                                        <input class="form-control" id="lampiran" name="lampiran[]" type="file" multiple>
                                        <span class="alert-error" id="lampiran-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="button" name="submit" id="submit" onclick="sendAduanManual('#frmAduanLangsung')">
                                        Buat Aduan <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                        <h3>Cari tahu jawaban atas aduanmu <a href="{{route('lacak-aduan')}}"><span>disini</span></a></h3>
                    </div>
                    <!-- End Contact Form -->
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Faq  
    ============================================= -->
    <div id="faq" class="faq-area default-padding">
        <div class="container">
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>FAQ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="assets/img/illustrations/2.svg" alt="Thumb">
                </div>
                <div class="col-md-7 faq-items">
                    <!-- Start Accordion -->
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                           Bagaimana saya bertanya pada Kementerian ATR/BPN ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            Anda dapat menggunakan sosial media yang anda miliki seperti Facebook, Twitter dan Instagram dengan terlebih dulu mengikuti akun official Kementerian ATR/BPN dan menggunakan tagar #TanyaATRBPN dan #TanyaATRBPN(nama_kota) untuk pertanyaan yang diajukan ke kantor wilayah Kementerian ATR/BPN.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                           Berapa lama saya menunggu pertanyaan saya dijawab?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Kami akan segera merespon pertanyaan maupun aspirasi anda secara cepat dan apabila diluar jam operasional, kami tetap akan melayani dengan sistem auto-replay dan akan segera ditindak lanjuti pada jam operasional.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                            Saya ada pertanyaan khusus untuk kantor wilayah Kementerian ATR/BPN di kota tempat tinggal saya, apakah bisa via sosial media?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                           Tentu saja, kami akan langsung meneruskan pertanyaan anda pada kantor wilayah kami cukup dengan menyertakan tagar #TanyaATRBPN(nama_kota) anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq  -->

    <!-- Start Po Area
    ============================================= -->
  {{--   <div class="testimonials-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Pojok Warganet</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('/')}}assets/img/team/4.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                <p>
                                    Sukses selalu untuk #ATRBPN pelayanan masyrakat yang makin baik dan cepat.
                                    Selalu merespon ketika saya ada masalah terkait sertifikat tanah #TanyaATRBPN #ATRBPN #TanyaATRBPNJakarta #ATRJakarta
                                </p>
                                <h4>@rudikornea</h4>
                                <span>Selasa, 7 Oktober 2019 09:45 - Twitter</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('/')}}assets/img/team/5.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                 <p>
                                   Permasalahan sertifikat tanah saya segera direspon dan ditindak lajuti dengan sangat baik oleh Kementrian ATR/BPN. Sangat Membantu! #TanyaATRBPN
                                </p>
                                <h4>@sisipilose</h4>
                                <span>Senin, 7 Oktober 2019 17:30 - Instagram</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('/')}}assets/img/team/1.jpg" alt="Thumb">
                            </div>
                            <div class="info">
                                 <p>
                                    Super duper cepat respon yang diberikan oleh Kementerian ATR/BPN! Lanjutkan program ini, rakyat bersamamu!
                                </p>
                                <h4>@kuncingtua</h4>
                                <span>Selasa, 8 Oktober 2019 11:30 - Facebook</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Po Area -->


    <!-- Start Footer 
    ============================================= -->
    <footer id="contact"  class="default-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-6 col-sm-6 equal-height item">
                        <div class="f-item">
                            <img src="{{asset('/')}}assets/img/logo-atr2.png" alt="Logo">
                            <p>
                                TANYA ATR/BPN - Tempat Aspirasi dan Layanan Aduan Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional adalah sebuah portal untuk mengakomodir segala pertanyan, keluhan dan media penyalur aspirasi masyarakat untuk semua pelayanan di Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional.
                            </p>
                            <p>
                                <i>Silahkan masukan alamat email anda untuk berlangganan informasi terbaru</i>
                            </p>
                            <div class="newsletter">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" name="email" class="form-control" placeholder="Enter your e-mail here">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Tautan  </h4>
                            <ul>
                                <li>
                                    <a href="#">Beranda</a>
                                </li>
                                <li>
                                    <a href="#">Tentang</a>
                                </li>
                                <li>
                                    <a href="#">Fitur</a>
                                </li>
                                <li>
                                    <a href="#">Alur Kerja </a>
                                </li>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="{{route('privacy')}}">Kebijakan Privasi</a>
                                </li>
                                <li>
                                    <a href="#">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Alamat Kami</h4>
                            <p>
                                Gedung Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional, Jalan Sisingamangaraja Nomor 2 Kebayoran Baru Jakarta 12110
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i> 
                                        </div>
                                        <div class="info">
                                            <h5>Website:</h5>
                                            <span>https://www.atrbpn.go.id</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i> 
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>humas@atrbpn.go.id</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i> 
                                        </div>
                                        <div class="info">
                                            <h5>Telepon:</h5>
                                            <span>021-7228901</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                            <p>&copy; Copyright 2018. All Rights Reserved by <a href="#">Kementerian ATR / BPN</a></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5 text-right social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset('/')}}assets/js/jquery-1.12.4.min.js"></script>
    <script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}assets/js/equal-height.min.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.appear.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.easing.min.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('/')}}assets/js/modernizr.custom.13711.js"></script>
    <script src="{{asset('/')}}assets/js/owl.carousel.min.js"></script>
    <script src="{{asset('/')}}assets/js/count-to.js"></script>
    <script src="{{asset('/')}}assets/js/wow.min.js"></script>
    <script src="{{asset('/')}}assets/js/jquery.backgroundMove.js"></script>
    <script src="{{asset('/')}}assets/js/bootsnav.js"></script>
    <script src="{{asset('/')}}assets/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel({
                items:1,
                autoplay:true,
                autoplayTimeout:3000,
                smartSpeed:500,
                loop:true 
          });

          $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


        }); 

$( "#email" ).change(function() {
 $('#email-error').html('');
 $('#email-error').addClass('text-success').html('*Pastikan email yang anda masukan benar.')
});   

function sendAduanManual(formId){
    $("#submit").attr('disabled','disabled');

    if($('#username').val() == ''){
       swal("Perhatian", "Nama lengkap tidak boleh kosong", "error");
      $("#submit").removeAttr('disabled','disabled');
       return false;
    }

     if($('#email').val() == ''){
       swal("Perhatian", "Email tidak boleh kosong", "error");
            $("#submit").removeAttr('disabled','disabled');
       return false;
    }

     if($('#phone').val() == ''){
       swal("Perhatian", "Nomor handphone tidak boleh kosong", "error");
        $("#submit").removeAttr('disabled','disabled');
       return false;
    }

     if($('#feed_comment_manual').val() == ''){
       swal("Perhatian", "Pertanyaan/aduan tidak boleh kosong", "error");
            $("#submit").removeAttr('disabled','disabled');
       return false;
    }

    if($('#ktp').val() == ''){
       swal("Perhatian", "Foto Identitas diri tidak boleh kosong", "error");
            $("#submit").removeAttr('disabled','disabled');
       return false;

    }else{
        var ktp_size = $('#ktp')[0].files[0].size;

        if(ktp_size>1024000) {
            $("#ktp-error").html('');
            $("#ktp-error").html("<p style='color:#FF0000'>Ukuran file yang diupload tidak boleh lebih dari 1MB</p>");
            $("#submit").removeAttr('disabled','disabled');
           return false;
        }

    }

    if($('#lampiran').val() != ''){
       
        var lampiran_size = $('#lampiran')[0].files.length;

        $("#lampiran-error").html('');

        for (var i = 0; i < lampiran_size; ++i) {
            if($('#lampiran')[0].files[i].size > 2024000){
                 $("#lampiran-error").append("<p style='color:#FF0000'>Ukuran file "+$('#lampiran')[0].files[i].name+" tidak boleh lebih dari 1MB</p>");
                 $("#submit").removeAttr('disabled','disabled');
                 return false;
            }

            var ext = $('#lampiran')[0].files[i].name.split('.').pop().toLowerCase();
            if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg', 'doc','docx','pdf','ppt','xls','xlsx','zip','rar']) == -1) {
                $("#lampiran-error").append("<p style='color:#FF0000'>Type file "+$('#lampiran')[0].files[i].name+" tidak didukung</p>");
                $("#submit").removeAttr('disabled','disabled');
                return false;
            }
        }
    }



    $.ajax({
        type: 'POST',
        url: $(formId).attr('action'),
        data: new FormData($(formId)[0]),
        processData: false,
        contentType: false,
         beforeSend: function() {
            const loading = document.createElement('div')
            loading.innerHTML = "<img src='{{asset('/')}}assets/img/loading-submit.gif' style='width:100px !important;'>";

                swal({
                    title: 'Membuat Nomor Tiket...',
                    allowEscapeKey: false,
                    closeOnClickOutside: false,
                    content: loading,
                    button: false
                  });    
            },
        success: function(data){
            $('#username').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#feed_comment_manual').val('');
            $('#ktp').val('');
            $('#lampiran').val('');
            $("#ktp-error").html('');
            $("#lampiran-error").html('');



            const el = document.createElement('div')
            el.innerHTML = "Pertanyaan/aduan anda berhasil dikirimkan dengan ID Ticket </br> <b>"+data.nomor_tiket+"</b>. </br> Harap simpan nomor tiket anda untuk melakukan tracking atas pertanyaan/aduan anda <a href='{{route("lacak-aduan")}}'>disini</a>";


            if(data['status']=='success'){
                 swal({
                  title: "Sukses!",
                  content: el,
                  icon: "success",
                  closeOnClickOutside: false,
                });
            }else{
                swal("Perhatian", "Terjadi Kesalahan", "error");
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

</html>
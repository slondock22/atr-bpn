  <div class="tb-sidebarheader-toggle">
    <div class="tb-button-bar1"></div>
    <div class="tb-button-bar2"></div>
    <div class="tb-button-bar3"></div>
  </div><!-- .tb-sidebarheader-toggle -->
  
  <div class="tb-sidebarheader">
    <div class="tb-sidebarheader-in" data-scrollbar>
      <div class="tb-sidebar-nav">
        <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">DASHBOARD</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="{{route('home')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">home</i></span>
                <span class="tb-sidebar-link-text">Beranda</span>
              </span>
            </a>
          </li>
		  @if(request()->session()->get('USER_ROLE')  == '6' || request()->session()->get('USER_ROLE')  == '1')
          <li>
            <a href="{{route('statistik')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">wb_cloudy</i></span>
                <span class="tb-sidebar-link-text">Statistik</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{route('analitik')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">dvr</i></span>
                <span class="tb-sidebar-link-text">Analitik</span>
              </span>
            </a>
          </li>
		  @endif
        </ul><!-- .tb-sidebar-nav-list -->


        @if(request()->session()->get('USER_ROLE')  == '6' || request()->session()->get('USER_ROLE')  == '4' || request()->session()->get('USER_ROLE')  == '5')
        <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">Pertanyaan & Aduan</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="{{route('aduan','twitter')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-twitter"></i></span>
                <span class="tb-sidebar-link-text">Twitter</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{route('aduan','facebook')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-facebook"></i></span>
                <span class="tb-sidebar-link-text">Facebook</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{route('aduan','instagram')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-instagram-original"></i></span>
                <span class="tb-sidebar-link-text">Instagram</span>
              </span>
            </a>
          </li>
           <li>
            <a href="{{route('aduan','youtube')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-youtube"></i></span>
                <span class="tb-sidebar-link-text">Youtube</span>
              </span>
            </a>
          </li>
           <li>
            <a href="{{route('aduan','email')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">email</i></span>
                <span class="tb-sidebar-link-text">E-mail</span>
              </span>
            </a>
          </li>
          <li class="tb-sidebar-has-children">
            <a href="#">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">insert_drive_file</i></span>
                <span class="tb-sidebar-link-text">Manual</span>
              </span>
            </a>
            <ul class="tb-sidebar-nav-dropdown">
              <li>
                <a href="{{route('aduan','lapor')}}">
                  <span class="tb-sidebar-link-title">
                    <span class="tb-sidebar-link-text">Aplikasi Lapor</span>
                  </span>
                </a>
              </li>
              <li>
                <a href="{{route('aduan','portal')}}">
                  <span class="tb-sidebar-link-title">
                    <span class="tb-sidebar-link-text">Portal TanyaATRBPN</span>
                  </span>
                </a>
              </li>
              <li>
                <a href="{{route('aduan','langsung')}}">
                  <span class="tb-sidebar-link-title">
                    <span class="tb-sidebar-link-text">Aduan Langsung</span>
                  </span>
                </a>
              </li>
            </ul><!-- .tb-sidebar-nav-dropdown -->
          </li>
        </ul><!-- .tb-sidebar-nav-list -->
       {{--  <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">Berita</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li class="tb-sidebar-has-children">
            <a href="#top">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">layers</i></span>
                <span class="tb-sidebar-link-text">Publish Berita</span>
              </span>
            </a>
            <ul class="tb-sidebar-nav-dropdown">
              <li>
                <a href="{{route('publish','twitter')}}">
                  <span class="tb-sidebar-link-title">
                    <span class="tb-sidebar-link-text">Via Twitter</span>
                  </span>
                </a>
              </li>
              <li>
                <a href="{{route('publish','facebook')}}">
                  <span class="tb-sidebar-link-title">
                    <span class="tb-sidebar-link-text">Via Facebook</span>
                  </span>
                </a>
              </li>
              <li>
                <a href="{{route('publish','instagram')}}">
                  <span class="tb-sidebar-link-title">
                    <span class="tb-sidebar-link-text">Via Instagram</span>
                  </span>
                </a>
              </li>
            </ul>
          </li>
        </ul><!-- .tb-sidebar-nav-list --> --}}
        @endif
      

        @if(request()->session()->get('USER_ROLE')  == '1' || request()->session()->get('USER_ROLE')  == '2' || request()->session()->get('USER_ROLE')  == '3')
         <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">Laporan</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
           <li>
            <a href="{{route('laporan','rekap_aduan')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">assessment</i></span>
                <span class="tb-sidebar-link-text">Rekap Aduan</span>
              </span>
            </a>
          </li>
           <li>
            <a href="{{route('laporan','performansi')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">assessment</i></span>
                <span class="tb-sidebar-link-text">Performansi</span>
              </span>
            </a>
          </li>
        </ul><!-- .tb-sidebar-nav-list -->

        <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">Master</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="{{route('master_user')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-users"></i></span>
                <span class="tb-sidebar-link-text">Master User</span>
              </span>
            </a>
          </li>
          @if(request()->session()->get('USER_ROLE')  == '1')
           <!-- <li>
            <a href="{{route('master_kanwil')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">folder_open</i></span>
                <span class="tb-sidebar-link-text">Master Kanwil</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{route('master_kantah')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">folder_open</i></span>
                <span class="tb-sidebar-link-text">Master Kantah</span>
              </span>
            </a>
          </li> -->
          <li>
            <a href="{{route('master_ministry')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">folder_open</i></span>
                <span class="tb-sidebar-link-text">Master Ministry</span>
              </span>
            </a>
          </li>

          <li>
            <a href="{{route('master_jenis_aduan')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">folder_open</i></span>
                <span class="tb-sidebar-link-text">Master Jenis Aduan</span>
              </span>
            </a>
          </li>

          <li>
            <a href="{{route('master_role')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">folder_open</i></span>
                <span class="tb-sidebar-link-text">Master Role</span>
              </span>
            </a>
          </li>

          <!-- <li>
            <a href="{{route('master_level')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">folder_open</i></span>
                <span class="tb-sidebar-link-text">Master Level</span>
              </span>
            </a>
          </li> -->
          @endif
        </ul>
        @endif

        @if(request()->session()->get('USER_ROLE')  == '1')
        <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">Pengaturan</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="{{route('master_konfig')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">settings</i></span>
                <span class="tb-sidebar-link-text">Konfigurasi API</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{route('spam_list')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">block</i></span>
                <span class="tb-sidebar-link-text">Folder Spam</span>
              </span>
            </a>
          </li>
        </ul>
        @endif

         <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">Bantuan</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="{{route('dokumentasi')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">library_books</i></span>
                <span class="tb-sidebar-link-text">Dokumentasi</span>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div><!-- .tb-sidebarheader -->

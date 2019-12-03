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
          <li>
            <a href="{{route('statistik')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">wb_cloudy</i></span>
                <span class="tb-sidebar-link-text">Statistik</span>
              </span>
            </a>
          </li>
        </ul><!-- .tb-sidebar-nav-list -->


        @if(request()->cookie('USER_ROLE')  == '6' || request()->cookie('USER_ROLE')  == '4' || request()->cookie('USER_ROLE')  == '5')
        <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">Pertanyaan & Aduan</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="{{route('twitter')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-twitter"></i></span>
                <span class="tb-sidebar-link-text">Twitter &nbsp;<span class="tb-badge tb-box-transparent-colo6">4</span></span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{route('facebook')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-facebook"></i></span>
                <span class="tb-sidebar-link-text">Facebook</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{route('instagram')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-instagram-original"></i></span>
                <span class="tb-sidebar-link-text">Instagram</span>
              </span>
            </a>
          </li>
        </ul><!-- .tb-sidebar-nav-list -->
        <div class="tb-sidebar-nav-title">
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
        </ul><!-- .tb-sidebar-nav-list -->
        @endif
      

        @if(request()->cookie('USER_ROLE')  == '1' || request()->cookie('USER_ROLE')  == '2' || request()->cookie('USER_ROLE')  == '3')
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
          @if(request()->cookie('USER_ROLE')  == '1')
           <li>
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
          </li>
          <li>
            <a href="{{route('master_jenis_aduan')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">folder_open</i></span>
                <span class="tb-sidebar-link-text">Master Jenis Aduan</span>
              </span>
            </a>
          </li>
          @endif
        </ul>
        @endif

        @if(request()->cookie('USER_ROLE')  == '1')
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
            <a href="documentation.html">
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

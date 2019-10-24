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
           @if(isset($role) && $role != '')
            <a href="{{route('home',$role)}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">home</i></span>
                <span class="tb-sidebar-link-text">Beranda</span>
              </span>
            </a>
            @else
            <a href="{{route('home','admin')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">home</i></span>
                <span class="tb-sidebar-link-text">Beranda</span>
              </span>
            </a>
            @endif
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
        @if($role == 'admin' || $role == 'adminkanwil' || $role == '')
        <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">Pertanyaan & Aduan</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="{{route('pertanyaan','twitter')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-twitter"></i></span>
                <span class="tb-sidebar-link-text">Twitter</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{route('pertanyaan','facebook')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-facebook"></i></span>
                <span class="tb-sidebar-link-text">Facebook</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{route('pertanyaan','instagram')}}">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-instagram-original"></i></span>
                <span class="tb-sidebar-link-text">Instagram</span>
              </span>
            </a>
          </li>
        </ul><!-- .tb-sidebar-nav-list -->
        @endif
        @if($role == 'admin' || $role == '')
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

          <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">Laporan</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
           <li>
            <a href="project-management.html">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">assessment</i></span>
                <span class="tb-sidebar-link-text">Rekap Aduan</span>
              </span>
            </a>
          </li>
           <li>
            <a href="project-management.html">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">assessment</i></span>
                <span class="tb-sidebar-link-text">Performansi</span>
              </span>
            </a>
          </li>
        </ul><!-- .tb-sidebar-nav-list -->
        @endif
        @if($role == 'super' || $role == 'superkanwil')
         <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">Master</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="documentation.html">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="lni lni-users"></i></span>
                <span class="tb-sidebar-link-text">Manajemen User</span>
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

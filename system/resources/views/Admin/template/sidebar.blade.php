        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-file-text"></i> <span>BAPPEDA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{url('public')}}/assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Halooo</span>
                <h2>John Die</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br/>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="{{url('Admin/beranda')}}"><i class="fa fa-home"></i> Beranda</a>
                  </li>
                  <li><a><i class="fa fa-file-archive-o"></i> Surat</a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('Admin/surat-masuk')}}"><i class="fa fa-mail-forward"></i> Surat Masuk</a></li>
                      <li><a href="{{url('Admin/surat-keluar')}}"><i class="fa fa-mail-reply"></i> Surat Keluar</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

<body>
    <div class="container-scroller">

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?= site_url('Home') ?>" style="color: #2d2d2d">
          <b>S I P S</b>
        </a>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu" style="color: white;"></span>
        </button>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler-right align-self-center d-sm-none d-md-none ml-2" type="button" data-toggle="offcanvas"> 
          <div class="row">
            <span class="icon-menu" style="color: white"></span>
          </div>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, <?= $username ?></span>
              <img id="gambarku"
                    style="   width: 30px;
                              height: 30px;
                              border-radius: 50%;
                              object-fit: cover;    "
                     src="<?= site_url('images/icon_user.png'); ?>" alt="">
            </a>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                  <a class="dropdown-item" style="margin-top: 20px;" href="<?= site_url('Profile') ?>">
                    <i class="menu-icon mdi mdi-account-circle"></i> Profil Saya
                  </a>
                  <a class="dropdown-item" href="<?= site_url('Auth/logout') ?>" style="color: red">
                    <i class="menu-icon mdi mdi-logout"></i> Log Out
                  </a>
            </div>
          </li>
        </ul>
     
      </div>
    </nav>
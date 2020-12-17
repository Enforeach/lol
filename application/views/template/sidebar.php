
<style>
  .sub-menu{
    margin-left: -13px;
  }
  .iconku{
   margin-right: 1.25rem;
   width: 16px;
   line-height: 1;
   font-size: 18px;
   color: #979797;
 }
 .sidebar .nav.iconku .nav-item .nav-link.active{
   margin-right: 1.25rem;
   width: 16px;
   line-height: 1;
   font-size: 18px;
   color: #308ee0;
 }
</style>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <!-- sidebar -->
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="user-wrapper">
            <div>
              <a href="<?= site_url('Profile') ?>">
                <img id ="gambarmu"
                style="   width: 40px;
                height: 40px;
                border-radius: 50%;
                object-fit: cover;
                border: 0.1px solid gray"
                src="<?= site_url('images/icon_user2.png'); ?>" alt="">
              </a>
            </div>
            <div class="text-wrapper">
              <p class="profile-name" ><?= $nama_lengkap ?></p>
              <div>
                <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;">@<?= $username ?></small>
                <span class="status-indicator online"></span>
              </div>
            </div>
          </div>
        </div>
      </li>

      <li class="nav-item"> 
        <a class="nav-link" href="<?= site_url('Home') ?>">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item"> 
        <a class="nav-link " data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-account-convert icon-md"></i>
          <span class="menu-title">History</span>
          <span class="badge" style="
          background: red; border-radius: 30px; color: #fff; font-size: 10px;
          min-width: 18px;
          padding: 2px;
          text-align: center;">total</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('Side/History') ?>">
                <i class="menu-icon mdi mdi-library-books icon-md"></i>
                <span class="menu-title">Semua Surat</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('Create/History') ?>">
                <i class="menu-icon mdi mdi-account-circle icon-md"></i>
                <span class="menu-title">Surat Pribadi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('Create/Dinas') ?>">
                <i class="menu-icon mdi mdi-account-multiple-outline icon-md"></i>
                <span class="menu-title">Surat Dinas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('Create/Niaga') ?>">
                <i class="menu-icon mdi mdi-chart-pie icon-md"></i>
                <span class="menu-title">Surat Niaga</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item"> 
        <a class="nav-link" href="<?= site_url('Side/Biodata') ?>">
          <i class="menu-icon mdi mdi-message-text-outline"></i>
          <span class="menu-title">Biodata</span>
        </a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link" href="<?= site_url('Side/Rujukan') ?>">
          <i class="menu-icon mdi mdi-debug-step-over"></i>
          <span class="menu-title">Rujukan</span>
        </a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link footer" href="<?= site_url('Auth/logout') ?>">
          <i class="menu-icon mdi mdi-logout text-danger"></i>
          <span class="menu-title">Log Out</span>
        </a>
      </li>
    </nav>
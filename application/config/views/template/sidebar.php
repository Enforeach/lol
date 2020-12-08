<?php
$plus = $this->m_penline->getCountPlus();
?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <!-- sidebar -->
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="user-wrapper">
                  <div>
                    <a href="<?= site_url('images/operator/'.$photo); ?>">
                              <img id ="gambarmu"
                              style="   width: 40px;
                              height: 40px;
                              border-radius: 50%;
                              object-fit: cover;
                              border: 0.1px solid gray"
                              src="<?= site_url('images/operator/'.$photo); ?>" alt="">
                     </a>
                  </div>
                  <div class="text-wrapper">
                    <p class="profile-name" ><?= $NAMA_SINGKAT; ?></p>
                    <div>
                      <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;"><?= $POSISI; ?></small>
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
              <a class="nav-link" href="<?= site_url('P_online') ?>">
                <i class="menu-icon mdi mdi-account-multiple-plus"></i>
                <span class="menu-title">Pendaftaran Online</span>
                <?php if ($plus > 0) { ?>
                  
                <span class="badge" style="
                background: red; border-radius: 30px; color: #fff; font-size: 10px;
                min-width: 18px;
                padding: 2px;
                text-align: center;"><?= $plus ?></span>
                <?php } ?>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link " data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon  mdi mdi-content-copy"></i>
                <span class="menu-title">Master Data</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="master">
                <ul class="nav flex-column sub-menu">
                   <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Anggota') ?>">Data anggota</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link " data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-locker-multiple"></i>
                <span class="menu-title">Fungsi</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                   <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Operator') ?>">Operator</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
      </nav>
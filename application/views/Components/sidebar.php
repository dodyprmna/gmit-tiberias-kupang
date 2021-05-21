<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="<?= base_url('assets/img/profile.jpg')?>" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#" aria-expanded="true">
                        <span>
                            <span class="user-level"><?= $this->session->userdata('nama_user')?></span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item <?php if(isset($menu) && $menu == 'dashboard') echo'active'?>">
                    <a href="<?= base_url('Dashboard')?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item <?= ($menu == 'administrasi') ? 'active' : ''?>">
                    <a data-toggle="collapse" href="#administrasi" class="collapsed" aria-expanded="false">
                        <i class="fas fa-book"></i>
                        <p>Administrasi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?= ($menu == 'administrasi') ? 'show' : ''?>" id="administrasi">
                        <ul class="nav nav-collapse">
                            <li <?= (isset($submenu) && $submenu == 'baptisan') ? "class='active'" : ""?>>
                                <a href="<?= base_url('Baptisan')?>">
                                    <span class="sub-item">Baptisan</span>
                                </a>
                            </li>
                            <li <?= (isset($submenu) && $submenu == 'perkawinan') ? "class='active'" : ""?>>
                                <a href="<?= base_url('Perkawinan')?>">
                                    <span class="sub-item">Perkawinan</span>
                                </a>
                            </li>
                            <li <?= (isset($submenu) && $submenu == 'jemaat') ? "class='active'" : ""?>>
                                <a href="<?= base_url('Jemaat')?>">
                                    <span class="sub-item">Jemaat</span>
                                </a>
                            </li>
                            <li <?= (isset($submenu) && $submenu == 'taman_kanak_kanak') ? "class='active'" : ""?>>
                                <a href="<?= base_url('Taman_kanak_kanak')?>">
                                    <span class="sub-item">Taman Kanak-Kanak</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?php if(isset($menu) && $menu == 'jadwal_ibadah') echo'active'?>">
                    <a href="<?= base_url('Jadwal_ibadah')?>">
                        <i class="fas fa-calendar"></i>
                        <p>Jadwal Ibadah</p>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($menu) && $menu == 'liturgi') echo'active'?>">
                    <a href="<?= base_url('Liturgi')?>">
                        <i class="fas fa-calendar"></i>
                        <p>Liturgi</p>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($menu) && $menu == 'warta_jemaat') echo'active'?>">
                    <a href="<?= base_url('Warta_jemaat')?>">
                        <i class="fas fa-file-alt"></i>
                        <p>Warta Jemaat</p>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($menu) && $menu == 'pengumuman') echo'active'?>">
                    <a href="<?= base_url('Pengumuman')?>">
                        <i class="fas fa-bullhorn"></i>
                        <p>Pengumuman</p>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($menu) && $menu == 'berita') echo'active'?>">
                    <a href="<?= base_url('Berita')?>">
                        <i class="fas fa-newspaper"></i>
                        <p>Berita</p>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($menu) && $menu == 'artikel') echo'active'?>">
                    <a href="<?= base_url('Artikel')?>">
                        <i class="fas fa-images"></i>
                        <p>Artikel</p>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($menu) && $menu == 'renungan_dan_doa_harian') echo'active'?>">
                    <a href="<?= base_url('Renungan_dan_doa_harian')?>">
                        <i class="fas fa-church"></i>
                        <p>Renungan dan Doa Harian</p>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($menu) && $menu == 'laporan_keuangan') echo'active'?>">
                    <a href="<?= base_url('Laporan_keuangan')?>">
                        <i class="fas fa-money-check-alt"></i>
                        <p>Laporan Keuangan</p>
                    </a>
                </li>
                <li class="nav-item <?php if(isset($menu) && $menu == 'profile_gereja') echo'active'?>">
                    <a href="<?= base_url('Profile_gereja')?>">
                        <i class="fas fa-info"></i>
                        <p>Profil Gereja</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
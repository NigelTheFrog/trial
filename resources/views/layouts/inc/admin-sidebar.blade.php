<div id="layoutSidenav_nav" class="navbar-nav-scroll sb-sidenav-dark" style="--bs-scroll-height: 100%;">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @if (Auth::user()->level == 1 || Auth::user()->level == 2)
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{url("admin/dashboard/item")}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="font-size: 20px"></i>
                        </div>
                        Dashboard Item
                    </a>
                    <a class="nav-link" href="{{ url('admin/dashboard/avalan') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="font-size: 20px"></i>
                        </div>
                        Dashboard Avalan
                    </a>
                    <div class="sb-sidenav-menu-heading">Master</div>
                    <a class="nav-link" href="{{ route('user.index') }}">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-user-cog" style="font-size: 20px"></i>
                        </div>
                        User
                    </a>
                    <a class="nav-link" href="{{ route('tipe-user.index') }}">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-users" style="font-size: 20px"></i>
                        </div>
                        Tipe User
                    </a>
                    <a class="nav-link" href="{{ route('company.index') }}">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-sitemap" style="font-size: 20px"></i>
                        </div>
                        Company
                    </a>
                    <a class="nav-link" href="{{ route('area-lokasi.index') }}">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-warehouse" style="font-size: 20px"></i>
                        </div>
                        Area Lokasi
                    </a>
                    <a class="nav-link" href="{{ route('warna.index') }}">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-paint-brush"
                                style="font-size: 20px"></i></div>
                        Warna
                    </a>
                    <a class="nav-link" href="{{ route('group.index') }}">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-object-group"
                                style="font-size: 20px"></i></div>
                        Group
                    </a>
                    <a class="nav-link" href="{{ route('keputusan.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-file-signature" style="font-size: 20px"></i>
                        </div>
                        Keputusan
                    </a>
                    <a class="nav-link" href="{{ route('kategori-produk.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-cubes-stacked pe-1"
                                style="font-size: 20px"></i></div>
                        Kategori Produk
                    </a>
                    <div class="sb-sidenav-menu-heading">Penjadwalan</div>
                    <a class="nav-link" href="{{ url('admin/penjadwalan/impor-stok') }}">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-file-import"
                                style="font-size: 20px"></i></div>
                        Impor Stok
                    </a>
                    <a class="nav-link" href="{{ url('admin/penjadwalan/impor-avalan') }}">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-file-import"
                                style="font-size: 20px"v></i></div>
                        Impor Avalan
                    </a>
                    <a class="nav-link" href="{{ url('admin/penjadwalan/pengaturan') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-bars-progress" style="font-size: 20px"></i>
                        </div>
                        Pengaturan CSO
                    </a>
                    <div class="sb-sidenav-menu-heading">Konfirmasi</div>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-user-check" style="font-size: 20px"></i>
                        </div>
                        Konfirmasi WRH
                    </a>
                    <div class="sb-sidenav-menu-heading">Resume</div>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="bi bi-people-fill" style="font-size: 20px"></i></div>
                        Susunan Tim CSO
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-list" style="font-size: 20px"></i>
                        </div>
                        List Barang Selisih
                    </a>
                    <div class="sb-sidenav-menu-heading">Report</div>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-file-alt" style="font-size: 20px"></i>
                        </div>
                        Report Cek Stok
                    </a>
                @elseif(Auth::user()->level == 3)
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{ url('admin/dashboard/item') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="font-size: 20px"></i>
                        </div>
                        Dashboard Item
                    </a>
                    <a class="nav-link" href="{{ url('admin/dashboard/avalan') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="font-size: 20px"></i>
                        </div>
                        Dashboard Avalan
                    </a>
                @elseif(Auth::user()->level == 4)
                <div class="sb-sidenav-menu-heading">CEK STOK</div>
                    <a class="nav-link" href="{{ url('admin/dashboard/item') }}">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-calculator" style="font-size: 20px"></i>
                        </div>
                        Penghitungan
                    </a>                   
                @else
                    <div class="sb-sidenav-menu-heading">Konfirmasi</div>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="nav-icon fas fa-user-check" style="font-size: 20px"></i>
                        </div>
                        Konfirmasi WRH
                    </a>
                @endif
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            @if (Auth::user()->level == 1)
                {{ 'Admin' }}
            @elseif(Auth::user()->level == 2)
                {{ 'Super User' }}
            @elseif(Auth::user()->level == 3)
                {{ 'Analisator' }}
            @elseif(Auth::user()->level == 4)
                {{ 'Checker' }}
            @else
                {{ 'WRH' }}
            @endif
        </div>
    </nav>
</div>

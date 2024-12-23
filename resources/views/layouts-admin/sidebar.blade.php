<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img style="margin-right: 10px;" src="{{url('public/logo')}}/LOGO YAFO aja.png" class="logo" alt="" height="40px" width="40px">

            </span>

            <span class="" style="color: green;">YAFOAGRO</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{request()->is('admin/tentangkami*') ? 'active' : ''}}">
            <a href="{{url('admin/tentangkami')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="Analytics">Tentang Kami</div>
            </a>
        </li>
        <li class="menu-item {{request()->is('admin/berita*') ? 'active' : ''}}">
            <a href="{{url('admin/berita')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="Analytics">Berita Artikel</div>
            </a>
        </li>


        <li class="menu-item {{request()->is('admin/profilmitra*') ? 'active' : ''}}">
            <a href="{{url('admin/profilmitra')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>

                <div data-i18n="Analytics">Profil Mitra</div>
            </a>
        </li>
        <li class="menu-item {{request()->is('admin/portfolio*') ? 'active' : ''}} ">
            <a href="{{url('admin/portfolio')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image"></i>

                <div data-i18n="Analytics">Galeri</div>
            </a>
        </li>
        <li class="menu-item {{request()->is('admin/kontak*') ? 'active' : ''}}">
            <a href="{{url('admin/kontak')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-phone"></i>
                <div data-i18n="Analytics">Kontak Informasi</div>
            </a>
        </li>


        <li class="menu-item {{request()->is('admin/tanaman*') ? 'active' : ''}}">
            <a href="{{url('admin/tanaman')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Tanaman</div>
            </a>
        </li>

        
        <li class="menu-item {{request()->is('admin/tanaman-cadangan*') ? 'active' : ''}}">
            <a href="{{url('admin/tanaman-cadangan')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Tanaman Cadangan</div>
            </a>
        </li>

        
        <li class="menu-item {{request()->is('admin/plasma*') ? 'active' : ''}}">
            <a href="{{url('admin/plasma')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Plasma</div>
            </a>
        </li>

      
    </ul>
</aside>
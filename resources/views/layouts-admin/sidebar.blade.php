<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo">
            <img src="{{url('public/logo')}}/LOGO YAFO aja.png" class="logo" alt="" height="40px" width="40px">
             
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
        <li class="menu-item {{request()->is('admin/dashboard') ? 'active' : ''}}">
            <a href="{{url('admin/dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{request()->is('admin/mitra') ? 'active' : ''}} ">
            <a href="{{url('admin/mitra')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-magento"></i>
                <div data-i18n="Analytics">Mitra</div>
            </a>
        </li>
        <li class="menu-item {{request()->is('admin/agen') ? 'active' : ''}}">
            <a href="{{url('admin/agen')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-trip-advisor"></i>
                <div data-i18n="Analytics">Agen</div>
            </a>
        </li>

        <li class="menu-item {{request()->is('admin/property') ? 'active' : ''}}">
            <a href="{{url('admin/property')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-arch"></i>
                <div data-i18n="Analytics">Property</div>
            </a>
        </li>
        <li class="menu-item {{request()->is('admin/faq') ? 'active' : ''}}">
            <a href="{{url('admin/faq')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-message-square-dots"></i>
                <div data-i18n="Analytics">FAQ</div>
            </a>
        </li>

        <li class="menu-item {{request()->is('admin/about') ? 'active' : ''}}">
            <a href="{{url('admin/about')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="Analytics">About</div>
            </a>
        </li>
        <li class="menu-item {{request()->is('admin/tiket') ? 'active' : ''}}">
            <a href="{{url('admin/tiket')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-discount"></i>
                <div data-i18n="Analytics">Tiket</div>
            </a>
        </li>

     
    </ul>
</aside>    
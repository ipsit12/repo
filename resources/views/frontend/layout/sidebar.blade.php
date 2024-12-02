<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="#">
                <img src="{{ asset('backend/assets/images/ingresspharma.png') }}" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{ asset('backend/assets/images/ingresspharma.png') }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset('backend/assets/images/ingresspharma.png') }}" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ asset('backend/assets/images/ingresspharma.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ url('/dashboard') }}"><i
                            class="side-menu__icon fe fe-home"></i><span
                            class="side-menu__label mx-1 mt-1">Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>Management</h3>
                </li>


                <!--</li>-->
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <i class="fa-solid fa-list" style="margin-right: 5px;font-size: 20px;"></i>
                        <span class="side-menu__label">slider</span>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/create') }}" class="slide-item">Add slider</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/view') }}" class="slide-item">View slider</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <i class="fa-solid fa-list" style="margin-right: 5px;font-size: 20px;"></i>
                        <span class="side-menu__label">product</span>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/pcreate') }}" class="slide-item">Add featureproduct</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/pview') }}" class="slide-item">View featureproduct</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <i class="fa-solid fa-list" style="margin-right: 5px;font-size: 20px;"></i>
                        <span class="side-menu__label">Gallery</span>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/addgallery') }}" class="slide-item">Add gallery</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/viewgallery') }}" class="slide-item">View gallery</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <i class="fa-solid fa-list" style="margin-right: 5px;font-size: 20px;"></i>
                        <span class="side-menu__label">contact</span>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/ccreate') }}" class="slide-item">Add contact</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/cview') }}" class="slide-item">View contact</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <i class="fa-solid fa-list" style="margin-right: 5px;font-size: 20px;"></i>
                        <span class="side-menu__label">latest product</span>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/lcreate') }}" class="slide-item">Add latestproduct</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/lview') }}" class="slide-item">View latestproduct</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <i class="fa-solid fa-list" style="margin-right: 5px;font-size: 20px;"></i>
                        <span class="side-menu__label">Reviews</span>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/rceate') }}" class="slide-item">Add Reviews</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/rview') }}" class="slide-item">View Reviews</a></li>
                    </ul>
                </li>

                <li><a href="{{ url('/contactview') }}" class="slide-item">registration member</a></li>
               
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                    </svg></div>
        </div>
    </aside>
</div>
<!--/APP-SIDEBAR-->

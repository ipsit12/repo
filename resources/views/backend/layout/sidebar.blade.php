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
                        <span class="side-menu__label">Contact</span>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/view') }}" class="slide-item">Contact View</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <i class="fa-solid fa-list" style="margin-right: 5px;font-size: 20px;"></i>
                        <span class="side-menu__label">Category</span>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/add/category') }}" class="slide-item">Add Category</a></li>
                    </ul>
                    <ul class="slide-menu">
                        <li><a href="{{ url('/category_list') }}" class="slide-item">View Category</a></li>
                    </ul>
                </li>


                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                    </svg></div>
        </div>
    </aside>
</div>
<!--/APP-SIDEBAR-->
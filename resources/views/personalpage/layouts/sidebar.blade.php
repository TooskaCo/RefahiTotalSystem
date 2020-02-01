<!-- Sidebar -->
<div id="sidebar-container" class="sidebar-expanded bg-info" ><!-- d-none d-md-block       d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
    <!-- Bootstrap List Group -->
    <ul class="list-group bg-info" style="padding-left:0px !important;background-color: #0c5460 !important">
        <a href="#" data-toggle="sidebar-colapse" class="bg-info list-group-item list-group-item-action d-flex align-items-left" style="padding:0.75rem 1rem !important" >
            <div class="d-flex w-100 justify-content-start align-items-left" style="direction:ltr !important;" >
                <span id="collapse-icon" class="fa fa-2x" ></span>
                <!--span id="collapse-text" class="menu-collapsed">Collapse</span-->
            </div>
        </a>
        <!-- Separator with title -->
        <!--li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed bg-info">
            <small>بخش های اصلی</small>
        </li-->
        <!-- /END Separator -->
        <!-- Menu with submenu -->

        <a href="{{ route('personalpage.dashboard') }}" class="bg-info list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-dashboard fa-fw mr-3"></span>
                <span class="menu-collapsed">خانه</span>
            </div>
        </a>


        <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-info list-group-item list-group-item-action flex-column align-items-start sm11">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-money-check fa-fw mr-3"></span>
                <span class="menu-collapsed">فرم ها</span>
                <span class="submenu-icon ml-auto subicon"></span>
            </div>
        </a>
        <!-- Submenu content -->
        <div id='submenu1' class="collapse sidebar-submenu">
            <a href="{{ route('family.index') }}" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">اطلاعات بستگان</span>
            </a>
            <a href="{{ route('reservationPlaceIndex') }}" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">اماکن اقامتی قابل رزرو</span>
            </a>
            <a href="{{ route('serviceReport') }}" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed"> خدمات استفاده شده</span>
            </a>
            <a href="{{ route('payReport') }}" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">سوابق پرداخت</span>
            </a>
            <a href="{{ route('creditReport') }}" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">اعتبار حساب</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">تابلو اعلانات</span>
            </a>

        </div>
        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-info list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-user fa-fw mr-3"></span>
                <span class="menu-collapsed">حساب کاربری</span>
                <span class="submenu-icon ml-auto subicon"></span>
            </div>
        </a>
        <!-- Submenu content -->
        <div id='submenu2' class="collapse sidebar-submenu">
            <a href="#" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">تنظیمات</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">کلمه عبور</span>
            </a>
        </div>
        <a href="#" class="bg-info list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-tasks fa-fw mr-3"></span>
                <span class="menu-collapsed">سایر</span>
            </div>
        </a>
        <!-- Separator with title -->
        <!--li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
            <small>سایر امکانات</small>
        </li-->
        <!-- /END Separator -->
        <!--a href="#" class="bg-info list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-calendar fa-fw mr-3"></span>
                <span class="menu-collapsed">برنامه کاری</span>
            </div>
        </a>
        <a href="#" class="bg-info list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-envelope-o fa-fw mr-3"></span>
                <span class="menu-collapsed">پیام ها <span class="badge badge-pill badge-primary ml-2">5</span></span>
            </div>
        </a>-->
        <!-- Separator without title -->
        <!--li class="list-group-item sidebar-separator menu-collapsed bg-info"></li-->
        <!-- /END Separator -->
        <!--a href="#" class="bg-info list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-question fa-fw mr-3"></span>
                <span class="menu-collapsed">راهنما</span>
            </div>
        </a-->
        <!-- Logo -->
        <!--li class="list-group-item logo-separator d-flex justify-content-center">
            <img src='https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg' width="30" height="30" />
        </li-->
    </ul><!-- List Group END-->
</div><!-- sidebar-container END -->

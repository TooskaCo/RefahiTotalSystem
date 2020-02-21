<!-- Sidebar -->
<div id="sidebar-container" class="sidebar-expanded "><!-- d-none d-md-block       d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
    <!-- Bootstrap List Group -->
    <ul class="list-group" style="padding-left:0px !important">
        <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-left" style="padding:0.75rem 1rem !important" >
            <div class="d-flex w-100 justify-content-start align-items-left" style="direction:ltr !important;" >
                <span id="collapse-icon" class="fa fa-2x" ></span>
                <!--span id="collapse-text" class="menu-collapsed">Collapse</span-->
            </div>
        </a>
        <!-- Separator with title -->
        <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
            <small>بخش های اصلی</small>
        </li>
        <!-- /END Separator -->
        <!-- Menu with submenu -->

        <a href="{{ route('admin.dashboard') }}" class="bg-dark list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-dashboard fa-fw mr-3"></span>
                <span class="menu-collapsed">خانه</span>
            </div>
        </a>


        <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start sm11">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-money-check fa-fw mr-3"></span>
                <span class="menu-collapsed">فرم ها</span>
                <span class="submenu-icon ml-auto subicon"></span>
            </div>
        </a>
        <!-- Submenu content -->
        <div id='submenu1' class="collapse sidebar-submenu">
            <a href="{{ route('news.index') }}" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">اخبار</span>
            </a>
            <a href="{{ route('personnel.index') }}" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">پرسنل</span>
            </a>
            <a href="{{ route('place.index') }}" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">اماکن اقامتی</span>
            </a>
            <a href="{{ route('period.index') }}" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">دوره ها</span>
            </a>
            <a href="{{ route('quota.index') }}" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">سهمیه بندی</span>
            </a>
            <a href="{{ route('users2.index') }}" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">کاربران</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-submenu ">
                <span class="menu-collapsed">گزارشات</span>
            </a>

        </div>
        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
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
        <a href="#" class="bg-dark list-group-item list-group-item-action">
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
        <!--a href="#" class="bg-dark list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-calendar fa-fw mr-3"></span>
                <span class="menu-collapsed">برنامه کاری</span>
            </div>
        </a>
        <a href="#" class="bg-dark list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-envelope-o fa-fw mr-3"></span>
                <span class="menu-collapsed">پیام ها <span class="badge badge-pill badge-primary ml-2">5</span></span>
            </div>
        </a>-->
        <!-- Separator without title -->
        <li class="list-group-item sidebar-separator menu-collapsed"></li>
        <!-- /END Separator -->
        <a href="#" class="bg-dark list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-question fa-fw mr-3"></span>
                <span class="menu-collapsed">راهنما</span>
            </div>
        </a>
        <!-- Logo -->
        <!--li class="list-group-item logo-separator d-flex justify-content-center">
            <img src='https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg' width="30" height="30" />
        </li-->
    </ul><!-- List Group END-->
</div><!-- sidebar-container END -->

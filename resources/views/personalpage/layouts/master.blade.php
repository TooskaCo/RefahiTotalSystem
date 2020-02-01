<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title' , 'سامانه مدیریت خدمات رفاهی')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-rtl.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/v4-shims.min.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{ asset('css/menu_sidebar_style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/my_style.css') }}"/>

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>

</head>
<body class="rtl">
@include('personalpage.layouts.header')


<div class="container-fluid p-0">

    <!-- Bootstrap row -->
    <div class="row" id="body-row">

        @include('personalpage.layouts.sidebar')


        <!-- MAIN -->
        <div class="col container">
            @yield('content')
            {{-- @yield('content' , View::make('view.name')) --}}
        </div><!-- Main Col END -->

        <!-- Sticky Footer -->
        <!--footer class="sticky-footer">
            <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2019</span>
            </div>
            </div>
        </footer-->

    </div><!-- body-row END -->

</div><!-- container -->




@section('script')
    <!--script type="text/javascript" src="app.js"></script-->
    <!--script src="../js/bootstrap-rtl.js"></script-->
    <!--script src="../js/popper.min.js" ></script-->
    <!--script src="../js/bootstrap/bootstrap.min.js"></script-->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js')  }}" ></script>
    <script src="{{ asset('js/menu_sidebar_script.js')  }}"></script>

    <script>
        $(() => {
            $('.form-group').each((i, e) => {
                $('.form-control', e).
                focus(function () {
                    e.classList.add('not-empty');
                }).
                blur(function () {
                    this.value === '' ? e.classList.remove('not-empty') : null;
                });
            });
        });
    </script>

@show
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>سامانه خدمات رفاهی</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-rtl.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-float-label.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/v4-shims.min.css') }}"  type="text/css">
    <link rel="stylesheet" href="{{ asset('css/menu_sidebar_style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/my_style.css') }}"/>
</head>

<style>
    body, html {
        height: 100%;
        background-repeat: no-repeat;
        background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border: 2px solid #80bdff;
        outline: 0;

        box-shadow: none !important;
    }

    .form_control_iconic_hr{
        border-radius: 0.25rem !important;
        border-bottom-right-radius: 0 !important;
        border-top-right-radius: 0 !important;
    }

</style>

<body class="rtl">

<div class="container">
    {{ (Session::get('userFullNameGU')) }}
    {{ (Session::get('userIDGU')) }}
    @if($errors->any())
        <div class="alert alert-danger mt-2">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <img  width="140" src="../images/logo12.png" class="mb-2">
                                    <h1 class="h4 text-gray-900 mb-2">سامانه  خدمات رفاهی</h1>
                                    <h4 class="small text-gray-900 mb-4">خوش آمدید</h4>
                                </div>
                                <form class="user" method="post" action="{{ route('loginActionGeneralUser') }}" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                    <!--div class="form-group">
                                        <div class="row" >
                                            <div class="col-md-4"><span class=" text-md-right text-sm-left float-left" >موبایل</span></div>
                                            <div class="input-group input-group-sm col-md-8">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa fa-mobile-alt" ></span></span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" style="direction: ltr !important" placeholder="09*********">
                                            </div>
                                        </div>
                                    </div-->


                                    <div class="form-group ">
                                        <div class="input-group" >
                                            <div class="input-group-prepend" >
                                                <div class="input-group-text" style="float:left;height:calc(1.5em + 0.75rem + 2px);"><span class="fa fa-user" ></span></div>
                                            </div>
                                            <label class="has-float-label" >
                                                <input class="form-control form_control_iconic_hr " class="form-control" type="text" name="userName" placeholder="" value=""/>
                                                <span>نام کاربری</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="input-group" >
                                            <div class="input-group-prepend" >
                                                <div class="input-group-text" style="float:left;height:calc(1.5em + 0.75rem + 2px);"><span class="fa fa-key" ></span></div>
                                            </div>
                                            <label class="has-float-label" >
                                                <input class="form-control form_control_iconic_hr " type="password" name="password" placeholder="" value=""/>
                                                <span>کلمه عبور</span>
                                            </label>
                                        </div>
                                    </div>

                                    <!--div class="form-group">
                                      <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                      </div>
                                    </div-->
                                        <button class="btn btn-primary btn-user btn-block" type="submit"> ورود به سیستم</button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">رمز عبور خود را فراموش کرده اید ؟</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 d-none d-lg-block pt-5"><img src="../images/login.png" width="250" align="center" /></div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!--<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="../js/bootstrap/bootstrap.bundle.min.js"></script>-->

<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

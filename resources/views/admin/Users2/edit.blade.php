@extends('admin.layouts.master')

@section('title' ,'کاربران')

@section('content')

<link rel="stylesheet" href="{{ asset('components/PersianCalender/src/jquery.md.bootstrap.datetimepicker.style.css') }}" />
@if ($message = Session::get('success'))
    <div class="alert alert-success mt-2">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        <p>{{ $message }}</p>
    </div>
@endif
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


<div class="form_header bg-info">
    <span id="collapse-icon" class="fa fa-user fa-2x mr-2" ></span>
    <span class="h5">کاربران</span>
    <!--button type="button" class="btn bg-white float-left mx-2">ذخیره</button>
    <button type="button" class="btn btn-success float-left mx-2 ">لیست</button-->
</div>

<!--div class="form_buttons_bar bg-white my-2" >
        <button type="button" class="btn btn-primary">ذخیره</button>
        <button type="button" class="btn btn-primary">لیست</button>
</div-->
<form class="well form-horizontal" method="post" action="{{ route('users2.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
<div class="form_container">

        <div class="form-row">
            <div class="form-group col-md-4">
                <div class="row" >
                    <label for="firstName" class="col-md-3 col-form-label text-md-right text-sm-left pr-0" >نام</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-sm" name="firstName" value="{{ $data->FirstName }}">
                    </div>
                </div>
            </div>

            <div class="form-group col-md-4">
                <div class="row" >
                    <label for="lastName" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >نام خانوادگی</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-sm" name="lastName" value="{{ $data->LastName }}">
                    </div>
                </div>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <div class="row" >
                    <label for="meliCode" class="col-md-3 col-form-label text-md-right text-sm-left pr-0" >کد ملی</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-sm" name="meliCode" value="{{ $data->NationalNumber }}">
                    </div>
                </div>
            </div>
        </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-3 pr-0"><span class=" text-md-right text-sm-left float-left pt-2" >نام کاربری</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa fa-user" ></span></span>
                    </div>
                    <input type="text" class="form-control" name="userName" value="{{ $data->UserName }}" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-3 pr-0"><span class=" text-md-right text-sm-left float-left pt-2" >کلمه عبور</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa fa-key" ></span></span>
                    </div>
                    <input type="text" class="form-control" name="password" value="" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

            </div>
        </div>
    </div>

    <p class="text-primary">نقش ها</p>
    <hr/>

    <div class="form-row">
        <div class="form-group col-md-1"></div>
        <div class="form-group col-md-2">
            <div class="row" >
                <div class="col-md-3 pr-0"><span class=" text-md-right text-sm-left float-left pt-2" >مدیر</span></div>
                <div class="col-md-8">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="isAdmin"  @if($data->IsAdmin == true) checked @endif class="custom-control-input" id="customCheck1" >
                        <label class="custom-control-label" for="customCheck1"></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-md-2">
            <div class="row" >
                <div class="col-md-3 pr-0"><span class=" text-md-right text-sm-left float-left pt-2" >کارشناس</span></div>
                <div class="col-md-8">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="isExpert"  @if($data->IsExpert == true) checked @endif class="custom-control-input" id="customCheck2" >
                        <label class="custom-control-label" for="customCheck2"></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-md-2">
            <div class="row" >
                <div class="col-md-4 pr-0"><span class=" text-md-right text-sm-left float-left pt-2" >کاربر عادی</span></div>
                <div class="col-md-8">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="isGeneralUser"  @if($data->IsGeneralUser == true) checked @endif class="custom-control-input" id="customCheck3" >
                        <label class="custom-control-label" for="customCheck3"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="form_buttons_bar row my-2 py-2" >&nbsp;
    <div class=" col">
        <a href="{{ route('users2.index') }}" ><button type="button" class="btn btn-primary float-left mx-1 px-4">لیست</button></a>
        <button type="submit" class="btn btn-primary float-left mx-1 px-4">ذخیره</button>
    </div>
</div>
</form>

@endsection

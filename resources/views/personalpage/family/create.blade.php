@extends('personalpage.layouts.master')

@section('title' ,'بستگان')

@section('content')

    <link rel="stylesheet" href="{{ asset('components/PersianCalender/src/jquery.md.bootstrap.datetimepicker.style.css') }}" />

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


<div class="form_header bg-secondary">
    <span id="collapse-icon" class="fa fa-user-friends fa-2x mr-2" ></span>
    <span class="h5">اطلاعات بستگان</span>
    <!--button type="button" class="btn bg-white float-left mx-2">ذخیره</button>
    <button type="button" class="btn btn-success float-left mx-2 ">لیست</button-->
</div>

<!--div class="form_buttons_bar bg-white my-2" >
        <button type="button" class="btn btn-primary">ذخیره</button>
        <button type="button" class="btn btn-primary">لیست</button>
</div-->
<form class="well form-horizontal" method="post" action="{{ route('family.store') }}" enctype="multipart/form-data">
    @csrf
<div class="form_container">



        <!--div class="form-group">
        <label class="col-md-4 control-label">Full Name</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
        </div>
        </div-->
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="firstName" class="col-md-3 col-form-label text-md-right text-sm-left pr-0" >نام</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" id="title" name="firstName" value="">
                </div>
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="firstName" class="col-md-3 col-form-label text-md-right text-sm-left pr-0" >نام خانوادگی</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-sm" id="title" name="lastName" value="">
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="firstName" class="col-md-3 col-form-label text-md-right text-sm-left pr-0" >کد ملی</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" id="nationalCode" name="nationalCode" value="">
                </div>
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="firstName" class="col-md-3 col-form-label text-md-right text-sm-left pl-0" >شماره شناسنامه</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-sm" id="title" name="identificationNumber" value="">
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-3 pr-0"><span class=" text-md-right text-sm-left float-left pt-2" >تاریخ تولد</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa fa-calendar-alt cursor-pointer" id='icoDate'></span></span>
                    </div>
                    <input type="text" name="birthDate" id="txtDate" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" style="direction: ltr !important" placeholder="">
                </div>
            </div>
        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <label class="col-md-3 col-form-label text-md-right text-sm-left pr-0" >نوع وابستگی</label>
                <div class="col-md-8">
                    <select class="custom-select custom-select-sm" name="relativeType">
                        <option selected value="0">انتخاب کنید</option>
                        <option value="1">پدر</option>
                        <option value="2">مادر</option>
                        <option value="3">همسر</option>
                        <option value="4">فرزندان</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group col-md-4">
            <div class="row" >
                <label class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >تحت تکلف بودن</label>
                <div class="col-md-8">
                    <select class="custom-select custom-select-sm" name="isDependent">
                        <option selected value="0">انتخاب کنید</option>
                        <option value="true">بلی</option>
                        <option value="false">خیر</option>
                    </select>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="form_buttons_bar row my-2 py-2" >&nbsp;
    <div class=" col">
        <a href="{{ route('family.index') }}" ><button type="button" class="btn btn-primary float-left mx-1 px-4">لیست</button></a>
        <button type="submit" class="btn btn-primary float-left mx-1 px-4">ذخیره</button>
    </div>
</div>
</form>

@endsection
@section('script')
    @parent

    <script src="{{ asset('components/PersianCalender/src/jquery.md.bootstrap.datetimepicker.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#icoDate").MdPersianDateTimePicker({
                targetTextSelector: "#txtDate",
                textFormat: "yyyy/MM/dd",
                isGregorian: false
            });
        });
    </script>

@endsection

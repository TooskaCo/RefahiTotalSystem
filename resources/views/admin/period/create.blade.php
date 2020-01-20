@extends('admin.layouts.master')

<!-- @section('title' , 'اضافه کردن پرسنل جدید') -->

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


<div class="form_header bg-info">
    <span id="collapse-icon" class="fa fa-calendar-alt fa-2x mr-2" ></span>
    <span class="h5">دوره</span>
    <!--button type="button" class="btn bg-white float-left mx-2">ذخیره</button>
    <button type="button" class="btn btn-success float-left mx-2 ">لیست</button-->
</div>

<!--div class="form_buttons_bar bg-white my-2" >
        <button type="button" class="btn btn-primary">ذخیره</button>
        <button type="button" class="btn btn-primary">لیست</button>
</div-->
<form class="well form-horizontal" method="post" action="{{ route('period.store') }}" enctype="multipart/form-data">
    @csrf
<div class="form_container">



        <!--div class="form-group">
        <label class="col-md-4 control-label">Full Name</label>
        <div class="col-md-8 inputGroupContainer">
            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
        </div>
        </div-->
    <div class="form-row">
        <div class="form-group col-md-8">
            <div class="row" >
                <label for="firstName" class="col-md-2 col-form-label text-md-right text-sm-left pr-1" >عنوان</label>
                <div class="col-md-10">
                    <input type="text" class="form-control form-control-sm" id="title" name="title" value="">
                </div>
            </div>
        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-4 pr-1"><span class=" text-md-left text-sm-right float-md-left" >تاریخ شروع</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa  fa-calendar-alt cursor-pointer" id="icoStartDate"></span></span>
                    </div>
                    <input type="text" id="txtStartDate" name="startDate"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
                </div>
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-4 pr-1"><span class=" text-md-left text-sm-right float-md-left" >تاریخ پایان</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa  fa-calendar-alt cursor-pointer" id="icoEndDate"></span></span>
                    </div>
                    <input type="text" id="txtEndDate" name="endDate" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
                </div>
            </div>
        </div>

        <div class="form-group col-md-4"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-4 pr-1"><span class=" text-md-left text-sm-right float-md-left">تاریخ شروع رزرو</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa  fa-calendar-alt cursor-pointer" id="icoReserveStartDate" ></span></span>
                    </div>
                    <input type="text" id="txtReserveStartDate" name="reserveStartDate" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
                </div>
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-4 pr-1"><span class=" text-md-left text-sm-right float-md-left" >تاریخ پایان رزرو</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa  fa-calendar-alt cursor-pointer" id="icoReserveEndDate" ></span></span>
                    </div>
                    <input type="text" id="txtReserveEndDate" name="reserveEndDate" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
                </div>
            </div>
        </div>

        <div class="form-group col-md-4"></div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-4 pr-1"><span class=" text-md-left text-sm-right float-md-left" >تاریخ قرعه کشی</span></div>
                <div class="input-group input-group-sm col-md-8 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa  fa-calendar-alt cursor-pointer" id="icoLotteryDate"></span></span>
                    </div>
                    <input type="text" id="txtLotteryDate" name="lotteryDate" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
                </div>
            </div>
        </div>
    </div>


</div>

<div class="form_buttons_bar row my-2 py-2" >&nbsp;
    <div class=" col">
        <a href="{{ route('period.index') }}" ><button type="button" class="btn btn-primary float-left mx-1 px-4">لیست</button></a>
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
            $("#icoStartDate").MdPersianDateTimePicker({
                targetTextSelector: "#txtStartDate",
                textFormat: "yyyy/MM/dd",
                isGregorian: false
            });
            $("#icoEndDate").MdPersianDateTimePicker({
                targetTextSelector: "#txtEndDate",
                textFormat: "yyyy/MM/dd",
                isGregorian: false
            });
            $("#icoReserveStartDate").MdPersianDateTimePicker({
                targetTextSelector: "#txtReserveStartDate",
                textFormat: "yyyy/MM/dd",
                isGregorian: false
            });
            $("#icoReserveEndDate").MdPersianDateTimePicker({
                targetTextSelector: "#txtReserveEndDate",
                textFormat: "yyyy/MM/dd",
                isGregorian: false
            });

            $("#icoLotteryDate").MdPersianDateTimePicker({
                //targetDateSelector: "#showDate_class",
                targetTextSelector: "#txtLotteryDate",
                //textFormat: " dddd dd MMMM yyyy ",
                textFormat: "yyyy/MM/dd",
                isGregorian: false
            });
        });
    </script>


@endsection

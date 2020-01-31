@extends('admin.layouts.master')

@section('title' ,'سهمیه بندی')

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
    <span id="collapse-icon" class="fa fa-cubes fa-2x mr-2" ></span>
    <span class="h5">سهمیه بندی</span>
    <!--button type="button" class="btn bg-white float-left mx-2">ذخیره</button>
    <button type="button" class="btn btn-success float-left mx-2 ">لیست</button-->
</div>

<!--div class="form_buttons_bar bg-white my-2" >
        <button type="button" class="btn btn-primary">ذخیره</button>
        <button type="button" class="btn btn-primary">لیست</button>
</div-->
<form class="well form-horizontal" method="post" action="{{ route('quota.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
<div class="form_container">

    <div class="form-row">
        <div class="form-group col-md-8">
            <div class="row" >
                <label for="firstName" class="col-md-2 col-form-label text-md-right text-sm-left" >دوره مکان</label>
                <div class="col-md-10">
                    <select name="period_Place_ID"  class="custom-select custom-select-sm">
                        <option selected value="0">انتخاب کنید</option>
                        @foreach($data->periodPlaceData as $row)
                            <option value="{{$row->id}}" {{ ($data->Period_Place_ID == $row->id) ? "selected" : "" }}>{{$row->PeriodPlaceTitle}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-4 pr-0"><span class=" text-md-left text-sm-right float-md-left pt-2" >تاریخ شروع</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa  fa-calendar-alt cursor-pointer" id="icoFromDate"></span></span>
                    </div>
                    <input type="text" id="txtFromDate" name="fromDate" value="{{ $data->FromDate }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
                </div>
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-4 pr-0"><span class=" text-md-left text-sm-right float-md-left pt-2" > تاریخ پایان</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa  fa-calendar-alt cursor-pointer" id="icoToDate"></span></span>
                    </div>
                    <input type="text" id="txtToDate" name="toDate" value="{{ $data->ToDate }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
                </div>
            </div>
        </div>

        <div class="form-group col-md-4"></div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="firstName" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >درجه</label>
                <div class="col-md-8">
                    <select name="grade" class="custom-select custom-select-sm">
                        <option selected value="0">انتخاب کنید</option>
                        <option value="1" {{ ($data->Grade == 1) ? "selected" : "" }}>طلایی</option>
                        <option value="2" {{ ($data->Grade == 2) ? "selected" : "" }}>نقره ای</option>
                        <option value="3" {{ ($data->Grade == 3) ? "selected" : "" }}>برنزی</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="lastName" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >نوع سهمیه</label>
                <div class="col-md-8">
                    <select name="quotaType" class="custom-select custom-select-sm">
                        <option selected value="0">انتخاب کنید</option>
                        <option value="1" {{ ($data->QuotaType == 1) ? "selected" : "" }}>عادی</option>
                        <option value="2" {{ ($data->QuotaType == 2) ? "selected" : "" }}>آزاد</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="declaredCapacity" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >ظرفیت اعلامی</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="declaredCapacity" value="{{ $data->DeclaredCapacity }}">
                </div>
            </div>
        </div>

        <div class="form-group col-md-4">
            <div class="row" >
                <label for="disposalCapacity" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >ظرفیت در اختیار</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="disposalCapacity" value="{{ $data->DisposalCapacity }}">
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="price" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >هزینه نفر شب</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="price" value="{{ $data->Price }}">
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="extraCapacity" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >ظرفیت مازاد</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="extraCapacity" value="{{ $data->ExtraCapacity }}">
                </div>
            </div>
        </div>

        <div class="form-group col-md-4">
            <div class="row" >
                <label for="extraPeopleCount" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >تعداد نفرات مازاد</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="extraPeopleCount" value="{{ $data->ExtraPeopleCount }}">
                </div>
            </div>
        </div>
    </div>

    <hr/>
    <div class="form-row">
        <div class="form-group col-md-8">
            <div class="row" >
                <div class="col-md-2">&nbsp</div>
                <div class="col-md-10">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="isLotteryResultConfrm" class="custom-control-input" id="customCheck1" @if($data->IsLotteryResultConfrm == true) checked @endif >
                        <label class="custom-control-label" for="customCheck1">نتیجه قرعه کشی مورد تایید است</label>
                    </div>
                </div>
            </div>
            <!--div class="row" >
                <div class="col-md-2">&nbsp</div>
                <div class="col-md-10">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">نتیجه قرعه کشی مورد تایید است</label>
                    </div>
                </div>
            </div-->
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="firstName" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >تایید کننده</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="confirmBy" value="{{ $data->ConfirmBy }}">
                </div>
            </div>
        </div>

        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-4 pr-0"><span class=" text-md-left text-sm-right float-md-left pt-2" >تاریخ تایید</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa  fa-calendar-alt cursor-pointer" id="icoConfirmDate"></span></span>
                    </div>
                    <input type="text" id="txtConfirmDate" name="confirmTime" value="{{ $data->ConfirmTime }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
                </div>
            </div>
        </div>
    </div>


</div>

<div class="form_buttons_bar row my-2 py-2" >&nbsp;
    <div class=" col">
        <a href="{{ route('quota.index') }}" ><button type="button" class="btn btn-primary float-left mx-1 px-4">لیست</button></a>
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
            $("#icoFromDate").MdPersianDateTimePicker({
                targetTextSelector: "#txtFromDate",
                textFormat: "yyyy/MM/dd",
                isGregorian: false
            });
            $("#icoToDate").MdPersianDateTimePicker({
                targetTextSelector: "#txtToDate",
                textFormat: "yyyy/MM/dd",
                isGregorian: false
            });
            $("#icoConfirmDate").MdPersianDateTimePicker({
                targetTextSelector: "#txtConfirmDate",
                enableTimePicker: true,
                textFormat: "yyyy/MM/dd - HH:mm:ss",
                isGregorian: false
            });
        });
    </script>


@endsection


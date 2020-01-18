@extends('admin.layouts.master')

<!-- @section('title' , 'اضافه کردن پرسنل جدید') -->

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
    <span class="h5"> بانک پرسنل</span>
    <!--button type="button" class="btn bg-white float-left mx-2">ذخیره</button>
    <button type="button" class="btn btn-success float-left mx-2 ">لیست</button-->
</div>

<!--div class="form_buttons_bar bg-white my-2" >
        <button type="button" class="btn btn-primary">ذخیره</button>
        <button type="button" class="btn btn-primary">لیست</button>
</div-->
<form class="well form-horizontal" method="post" action="{{ route('place.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
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
                    <label for="firstName" class="col-md-2 col-form-label text-md-right text-sm-left pr-0" >عنوان</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" id="title" name="title" value="{{ $data->Title }}">
                    </div>
                </div>
            </div>

        </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="firstName" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >استان</label>
                <div class="col-md-8">
                    <select class="custom-select custom-select-sm" name="stateCity_ID1111">
                        <option selected value="0">انتخاب کنید</option>
                        <option value="1" {{ ($data->GenderType == 1) ? "selected" : "" }}>تهران</option>
                        <option value="2">البرز</option>
                        <option value="3">شیراز</option>
                        <option value="4">خراسان رضوی</option>
                        <option value="5">اصفهان</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group col-md-4">
            <div class="row" >
                <label for="lastName" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >شهر</label>
                <div class="col-md-8">
                    <select class="custom-select custom-select-sm" name="stateCity_ID">
                        <option selected value="0">انتخاب کنید</option>
                        <option value="1" {{ ($data->StateCity_ID == 1) ? "selected" : "" }}>تهران</option>
                        <option value="2" {{ ($data->StateCity_ID == 2) ? "selected" : "" }} >دماوند</option>
                        <option value="3" {{ ($data->StateCity_ID == 3) ? "selected" : "" }} >شهریار</option>
                        <option value="4" {{ ($data->StateCity_ID == 4) ? "selected" : "" }} >شهرری</option>
                    </select>
                </div>
            </div>
        </div>


    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-4 pr-0"><span class=" text-md-left text-sm-left float-md-left pt-1" >تلفن</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa fa-phone" ></span></span>
                    </div>
                    <input type="text" class="form-control" name="phone" value="{{ $data->Phone }}" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="به همراه کد">
                </div>

            </div>
        </div>

        <div class="form-group col-md-8">
            <div class="row" >
                <label for="firstName" class="col-md-2 col-form-label text-md-right text-sm-left pr-0" >آدرس</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="address"  rows="1">{{ $data->Address }}</textarea>
                </div>
            </div>
        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-4 pr-0"><span class=" text-md-left text-sm-right float-md-left pt-1" >ساعت ورود</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa  fa-clock-o" ></span></span>
                    </div>
                    <input type="text" class="form-control" name="entryTime"  value="{{ $data->EntryTime }}" aria-label="Small" aria-describedby="inputGroup-sizing-sm" style="" placeholder="14:00">
                </div>
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="row" >
                <div class="col-md-4 pr-0"><span class=" text-md-left text-sm-right float-md-left pt-1" >ساعت خروج</span></div>
                <div class="input-group input-group-sm col-md-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa  fa-clock-o" ></span></span>
                    </div>
                    <input type="text" class="form-control" name="exitTime"   value="{{ $data->ExitTime }}" aria-label="Small" aria-describedby="inputGroup-sizing-sm" style="" placeholder="12:00">
                </div>
            </div>
        </div>

        <div class="form-group col-md-4"></div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-8">
            <div class="row" >
                <label for="firstName" class="col-md-2 col-form-label text-md-right text-sm-left pr-0" >نمره منفی</label>
                <div class="col-md-10">
                    <input type="text" class="form-control form-control-sm col-md-4" style="display:inline !important" name="negativeEffectDuration"  value="{{ $data->NegativeEffectDuration }}">
                    <small  class="text-muted">
                        بازه نمره منفی استفاده از مکان
                    </small>
                </div>
            </div>
        </div>

    </div>


    <div class="form-row">
        <div class="form-group col-md-8">
            <div class="row" >
                <label for="address" class="col-md-2 col-form-label text-md-right text-sm-left pr-0" >توضیحات</label>
                <div class="col-md-10">
                    <textarea class="form-control" rows="3" name="description"  >{{ $data->Description }}</textarea>
                </div>
            </div>
        </div>

    </div>



</div>

<div class="form_buttons_bar row my-2 py-2" >&nbsp;
    <div class=" col">
        <a href="{{ route('place.index') }}" ><button type="button" class="btn btn-primary float-left mx-1 px-4">لیست</button></a>
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
        $("#icoBirthDate").MdPersianDateTimePicker({
            targetTextSelector: "#birthDate",
            textFormat: "yyyy/MM/dd",
            isGregorian: false
        });
        $("#icoEstekhdamDate").MdPersianDateTimePicker({
            targetTextSelector: "#cooperationStartDate",
            textFormat: "yyyy/MM/dd",
            isGregorian: false
        });
    });
</script>

@endsection

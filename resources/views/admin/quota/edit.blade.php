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
                    <select name="" class="custom-select custom-select-sm">
                        <option selected value="0">انتخاب کنید</option>
                    </select>
                </div>
            </div>
        </div>

    </div>

    <div class="form-row">
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
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="quotaDuration" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >بازه زمانی سهمیه</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="quotaDuration" value="{{ $data->QuotaDuration }}">
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

</div>

<div class="form_buttons_bar row my-2 py-2" >&nbsp;
    <div class=" col">
        <a href="{{ route('quota.index') }}" ><button type="button" class="btn btn-primary float-left mx-1 px-4">لیست</button></a>
        <button type="submit" class="btn btn-primary float-left mx-1 px-4">ذخیره</button>
    </div>
</div>
</form>

@endsection


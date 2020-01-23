@extends('admin.layouts.master')

<!-- @section('title' , 'اضافه کردن پرسنل جدید') -->

@section('content')

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
    <span id="collapse-icon" class="fa fa-university fa-2x mr-2" ></span>
    <span class="h5">مکان اقامتی</span>
    <!--button type="button" class="btn bg-white float-left mx-2">ذخیره</button>
    <button type="button" class="btn btn-success float-left mx-2 ">لیست</button-->
</div>

<!--div class="form_buttons_bar bg-white my-2" >
        <button type="button" class="btn btn-primary">ذخیره</button>
        <button type="button" class="btn btn-primary">لیست</button>
</div-->
<form class="well form-horizontal" method="post" action="{{ route('place.store') }}" enctype="multipart/form-data">
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
                <label for="firstName" class="col-md-2 col-form-label text-md-right text-sm-left pr-0" >عنوان</label>
                <div class="col-md-10">
                    <input type="text" class="form-control form-control-sm" id="title" name="title" value="">
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
                        <option value="1">تهران</option>
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
                        <option value="1">تهران</option>
                        <option value="2">دماوند</option>
                        <option value="3">شهریار</option>
                        <option value="4">شهرری</option>
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
                    <input type="text" class="form-control" name="phone" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="به همراه کد">
                </div>

            </div>
        </div>

        <div class="form-group col-md-8">
            <div class="row" >
                <label for="firstName" class="col-md-2 col-form-label text-md-right text-sm-left pr-0" >آدرس</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="address" rows="1"></textarea>
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
                    <input type="text" class="form-control" name="entryTime" aria-label="Small" aria-describedby="inputGroup-sizing-sm" style="" placeholder="14:00">
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
                    <input type="text" class="form-control" name="exitTime"  aria-label="Small" aria-describedby="inputGroup-sizing-sm" style="" placeholder="12:00">
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
                    <input type="text" class="form-control form-control-sm col-md-4" style="display:inline !important" name="negativeEffectDuration" value="">
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
                    <textarea class="form-control" rows="3" name="description" ></textarea>
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



@endsection

@extends('admin.layouts.master')

@section('title' ,'بانک پرسنل')

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
<form class="well form-horizontal" method="post" action="{{ route('personnel.update', $data->id) }}" enctype="multipart/form-data">
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

            <!--div class="form-group col-md-4">
                <div class="row" >
                    <label for="fatherName" class="col-md-3 col-form-label text-md-right text-sm-left pr-0" >نام پدر</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-sm" name="fatherName" value="">
                    </div>
                </div>
            </div-->


        </div>



        <div class="form-row">
            <div class="form-group col-md-4">
                <div class="row" >
                    <label for="firstName" class="col-md-3 col-form-label text-md-right text-sm-left pr-0" >کد ملی</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-sm" name="nationalCode" value="{{ $data->NationalNumber }}">
                    </div>
                </div>
            </div>

            <div class="form-group col-md-4">
                <div class="row" >
                    <label for="lastName" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >شماره شناسنامه </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-sm" name="identificationNumber" value="{{ $data->IdentificationNumber }}">
                    </div>
                </div>
            </div>

            <div class="form-group col-md-4">
                <div class="row" >
                    <div class="col-md-3 pr-0"><span class=" text-md-right text-sm-left float-left pt-2" >تاریخ تولد</span></div>
                    <div class="input-group input-group-sm col-md-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa fa-calendar-alt cursor-pointer" id='icoBirthDate'></span></span>
                        </div>
                        <input type="text"  id="birthDate" name="birthDate" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ $data->BirthDate }}" style="direction: ltr !important" placeholder="" >
                    </div>
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-4">
                <div class="row" >
                    <label class="col-md-3 col-form-label text-md-right text-sm-left pr-0" >جنسیت</label>
                    <div class="col-md-8">
                        <select class="custom-select custom-select-sm" name="genderType" >
                            <option selected value="0" >انتخاب کنید</option>
                            <option value="1" {{ ($data->GenderType == 1) ? "selected" : "" }}>مرد</option>
                            <option value="2" {{ ($data->GenderType == 2) ? "selected" : "" }}>زن</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-4">
                <div class="row" >
                    <label class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >وضعیت تاهل</label>
                    <div class="col-md-8">
                        <select class="custom-select custom-select-sm" name="maritalStatus" >
                            <option selected value="0" >انتخاب کنید</option>
                            <option value="1" {{ ($data->GenderType == 1) ? "selected" : "" }}>مجرد</option>
                            <option value="2" {{ ($data->GenderType == 2) ? "selected" : "" }}>متاهل</option>
                        </select>
                    </div>
                </div>
            </div>

            <!--div class="form-group col-md-4">
                <div class="row" >
                    <label class="col-md-3 col-form-label text-md-right text-sm-left pr-0" > تحصیلات</label>
                    <div class="col-md-8">
                        <select class="custom-select custom-select-sm">
                            <option selected value="0" >انتخاب کنید</option>
                            <option value="1" {{ ($data->GenderType == 1) ? "selected" : "" }}>لیسانس</option>
                            <option value="2" {{ ($data->GenderType == 2) ? "selected" : "" }}>فوق لیسانس</option>
                            <option value="3" {{ ($data->GenderType == 3) ? "selected" : "" }}>دکترا</option>
                        </select>
                    </div>
                </div>
            </div-->
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <div class="row" >
                    <div class="col-md-3 pr-0"><span class=" text-md-right text-sm-left float-left pt-2" >تلفن</span></div>
                    <div class="input-group input-group-sm col-md-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa fa-phone" ></span></span>
                        </div>
                        <input type="text" class="form-control" name="phone"  value="{{ $data->Phone }}" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>

                </div>
            </div>

            <div class="form-group col-md-4">
                <div class="row" >
                    <div class="col-md-4 pr-0"><span class=" text-md-right text-sm-left float-left pt-2" >موبایل</span></div>
                    <div class="input-group input-group-sm col-md-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa fa-mobile-alt" ></span></span>
                        </div>
                        <input type="text" class="form-control" name="mobile" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  value="{{ $data->Mobile }}" style="direction: ltr !important" placeholder="09*********">
                    </div>
                </div>
            </div>

            <div class="form-group col-md-4">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <div class="row" >
                    <label class="col-md-3 col-form-label text-md-right text-sm-left pr-0" >کد پرسنلی</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-sm" name="personnelNumber" value="{{ $data->PersonnelNumber }}">
                    </div>
                </div>
            </div>

            <div class="form-group col-md-4">
                <div class="row" >
                    <label class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >نوع استخدام</label>
                    <div class="col-md-8">
                        <select class="custom-select custom-select-sm" name="employmentType">
                            <option selected value="0" >انتخاب کنید</option>
                            <option value="1" {{ ($data->EmploymentType == 1) ? "selected" : "" }}>رسمی</option>
                            <option value="2" {{ ($data->EmploymentType == 2) ? "selected" : "" }}>پیمانی</option>
                            <option value="3" {{ ($data->EmploymentType == 3) ? "selected" : "" }}>قراردادی</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-4">
                <div class="row" >
                    <div class="col-md-3 pr-0"><span class=" text-md-right text-sm-left float-left pt-2" >تاریخ استخدام</span></div>
                    <div class="input-group input-group-sm col-md-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><span class="fa fa-calendar-alt cursor-pointer" id='icoEstekhdamDate'></span></span>
                        </div>
                        <input type="text" name='cooperationStartDate' id="cooperationStartDate" class="form-control" value="{{ $data->CooperationStartDate }}" aria-label="Small" aria-describedby="inputGroup-sizing-sm" style="direction: ltr !important" placeholder="">
                    </div>
                </div>
            </div>
        </div>


        <!--
                <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label text-md-right text-sm-left" >شماره تماس</label>
                        <div class="input-group col-md-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                                <input type="text" class="form-control" id="tel" value="" aria-label="Username" aria-describedby="basic-addon1" >
                        </div>
                </div>

                    <div class="form-group">
                    <label class="col-md-4 control-label">Country</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="selectpicker form-control">
                                <option>A really long option to push the menu over the edget</option>
                            </select>
                        </div>
                    </div>
                    </div>-->


</div>

<div class="form_buttons_bar row my-2 py-2" >&nbsp;
    <div class=" col">
        <a href="{{ route('personnel.index') }}" ><button type="button" class="btn btn-primary float-left mx-1 px-4">لیست</button></a>
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

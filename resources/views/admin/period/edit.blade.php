@extends('admin.layouts.master')

@section('title' ,'دوره ها')

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
    <span id="collapse-icon" class="fa fa-calendar-alt fa-2x mr-2" ></span>
    <span class="h5">دوره</span>
    <!--button type="button" class="btn bg-white float-left mx-2">ذخیره</button>
    <button type="button" class="btn btn-success float-left mx-2 ">لیست</button-->
</div>

<!--div class="form_buttons_bar bg-white my-2" >
        <button type="button" class="btn btn-primary">ذخیره</button>
        <button type="button" class="btn btn-primary">لیست</button>
</div-->
<form class="well form-horizontal needs-validation" method="post" action="{{ route('period.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
<div class="form_container">

    <div class="form-row">
        <div class="form-group col-md-8">
            <div class="row" >
                <label for="firstName" class="col-md-2 col-form-label text-md-right text-sm-left pr-1" >عنوان</label>
                <div class="col-md-10">
                    <input type="text" class="form-control form-control-sm" id="title" name="title" value="{{ $data->Title }}" >
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
                    <input type="text" id="txtStartDate" name="startDate" value="{{ $data->StartDate }}"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
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
                    <input type="text" id="txtEndDate" name="endDate" value="{{ $data->EndDate }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
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
                    <input type="text" id="txtReserveStartDate" name="reserveStartDate" value="{{ $data->ReserveStartDate }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
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
                    <input type="text" id="txtReserveEndDate" name="reserveEndDate" value="{{ $data->ReserveEndDate }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
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
                    <input type="text" id="txtLotteryDate" name="lotteryDate" value="{{ $data->LotteryDate }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
                </div>
            </div>
        </div>
    </div>

    <p class="mt-4 font-weight-bold text-info">اطلاعات مکان ها</p>
    <hr class="primary" />
    <div class="form-row">
        <div class="form-group col-md-8">
            <div class="row" >
                <label for="firstName" class="col-md-2 col-form-label text-md-right text-sm-left" >مکان</label>
                <div class="col-md-10">
                    <select name="place" class="custom-select custom-select-sm">

                        <option selected value="0">انتخاب کنید</option>
                        @foreach($data->placeData as $row)
                            <option value="{{$row->id}}">{{$row->Title}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        هیچ مکانی انتخاب نشده است
                    </div>
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
                        <option value="1">عادی</option>
                        <option value="2">آزاد</option>
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
                    <input type="text" class="form-control form-control-sm" name="declaredCapacity" value="">
                </div>
            </div>
        </div>

        <div class="form-group col-md-4">
            <div class="row" >
                <label for="disposalCapacity" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >ظرفیت در اختیار</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="disposalCapacity" value="">
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="price" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >هزینه نفر شب</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="price" value="">
                </div>
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="quotaDuration" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >بازه زمانی سهمیه</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="quotaDuration" value="">
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="row" >
                <label for="extraCapacity" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >ظرفیت مازاد</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="extraCapacity" value="">
                </div>
            </div>
        </div>

        <div class="form-group col-md-4">
            <div class="row" >
                <label for="extraPeopleCount" class="col-md-4 col-form-label text-md-right text-sm-left pr-0" >تعداد نفرات مازاد</label>
                <div class="col-md-8">
                    <input type="text" class="form-control form-control-sm" name="extraPeopleCount" value="">
                </div>
            </div>
        </div>
        <div class="form-group col-md-2">
            <div class="row" >
                <button type="submit" onclick="checkValidation(event)" class="btn btn-success btn-sm btn-block mx-3">ثبت</button>
            </div>
        </div>
    </div>


    <div class="form-row">
        <table class="table table-sm table-striped table-hover mt-3 text-center">
            <thead class="text-center">
            <tr class="table-primary text-center">
                <th scope="col" class="text-center">ردیف</th>
                <th scope="col" class="text-center" >مکان</th>
                <th scope="col" class="text-center">ظرفیت اعلامی</th>
                <th scope="col" class="text-center">ظرفیت در اختیار</th>
                <th scope="col" class="text-center">نوع سهمیه</th>
                <th scope="col" class="text-center">هزینه نفر شب</th>
                <th scope="col" class="text-center">بازه زمانی</th>
                <th scope="col" class="text-center">ظرفیت مازاد</th>
                <th scope="col" class="text-center">تعداد مازاد</th>
                <th scope="col" class="text-center">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @php
                $index = 1 ;
            @endphp

            @forelse($data->periodPlaceData as $row)
                <tr >
                    <td scope="row" class="text-center">{{ $index++ }}</td>
                    <td>{{ $row->PlaceTitle }}</td>
                    <td>{{ $row->DeclaredCapacity }}</td>
                    <td>{{ $row->DisposalCapacity }}</td>
                    <td>
                        @if($row->QuotaType == 1)
                           عادی
                        @elseif($row->QuotaType == 2)
                             آزاد
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $row->Price }}</td>
                    <td>{{ $row->QuotaDuration }}</td>
                    <td>{{ $row->ExtraCapacity }}</td>
                    <td>{{ $row->ExtraPeopleCount }}</td>
                    <td>
                        <button type="button" class="btn btn-success edit-modal22" data-toggle="modal22" data-target="#myModal222"  data-id="{{$row->id}}" data-name="{{$row->Price}}" data-whatever="{{$row->id}}"><span id="collapse-icon" class="fa fa-edit" ></span></button>
                        <a href="{{ route('sp',$row->id) }}" ><button type="button" class="btn btn-success " >سهمیه بندی</button></a></td>


                </tr>
                @empty
                    <tr>
                        <td colspan="9">اطلاعات مکان ثبت نشده است</td>
                    </tr>
            @endforelse

            </tbody>
        </table>
    </div>

</div>

<div class="form_buttons_bar row my-2 py-2" >&nbsp;
    <div class=" col">
        <a href="{{ route('period.index') }}" ><button type="button" class="btn btn-primary float-left mx-1 px-4">لیست</button></a>
        <button type="submit" class="btn btn-primary float-left mx-1 px-4">ذخیره</button>
    </div>
</div>
</form>




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ویرایش اطلاعات</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmUpdatePeriodPlace" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fid" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="mdlPrice">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="updatePeriodPlaceData()">ذخیره</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >انصراف</button>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
    @parent


<script src="{{ asset('components/PersianCalender/src/jquery.md.bootstrap.datetimepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/period_place_script.js') }}" type="text/javascript"></script>

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

    function updatePeriodPlaceData()
    {
        var id = $('#fid').val();
        var url = '{{ route("periodPlace.update", ":id") }}';
        alert(url);
        url = url.replace(':id', id);
        $("#frmUpdatePeriodPlace").attr('action', url);
        $("#frmUpdatePeriodPlace").submit();
    }

    /*function executeSP(id)
    {

        $.ajax({
        $.ajax({
            type: 'post',
            url: '/admin/sp1/'+ id,

            success: function() {
                alert('با موفقیت انجام شد');
            }
        });
    }*/



    /*function checkValidation(event)
    {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            //form.addEventListener('submit', function(event)
            {
        if (event.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        else
                form.classList.add('was-validated');
            };//, false);
        });
    }*/
/*
    (function() {

        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    //form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();*/

</script>

@endsection

@extends('admin.layouts.master')

@section('title' ,'دوره ها')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="form_header bg-info">
        <span id="collapse-icon" class="fa fa-calendar-alt fa-2x mr-2" ></span>
        <span class="h5">رزرو شده های مکان دوره</span>
    </div>

    <div class="form_container bg-white">


        <div class="row" >
            <table class="table table-striped table-hover">
                <!--caption>اسامی به ترتیب حروف الفبا مرتب شده است</caption-->
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">تاریخ شروع</th>
                    <th scope="col">تاریخ پایان</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $index = 1 ;
                @endphp
                @foreach($data as $row)

                    <tr>
                    <th scope="row">{{ $index++ }}</th>
                    <td>{{ $row->PersonName }}</td>
                    <td>{{ $row->FromDate }}</td>
                    <td>{{ $row->ToDate }}</td>
                    <td>
                        <form id="frm_{{$row->id}}"  action="{{ route('period.destroy', $row->id) }}" method="post">
                            @csrf
                            <a href="" style="color: #333333" ><button type="button" class="btn btn-success btn-sm">قرعه کشی</button></a>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')
    @parent
@endsection


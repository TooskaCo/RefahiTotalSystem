@extends('admin.layouts.master')

<!-- @section('title' , 'اضافه کردن پرسنل جدید') -->

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="form_header bg-info">
        <span id="collapse-icon" class="fa fa-cubes fa-2x mr-2" ></span>
        <span class="h5">سهمیه بندی</span>
    </div>

    <div class="form_container bg-white">

        <div class="row mb-2" >
            <div class="col-6">
                <a href="{{ route('quota.create') }}"><button type="button" class="btn btn-primary">ثبت جدید</button></a>
            </div>
            <div class="col-6 ">
                <form class="form-inline my-2 my-lg-0 float-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="جستجو کنید..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                </form>
            </div >

        </div>

        <div class="row" >
            <table class="table table-striped table-hover">
                <!--caption>اسامی به ترتیب حروف الفبا مرتب شده است</caption-->
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">ظرفیت</th>
                    <th scope="col">بازه زمانی</th>
                    <th scope="col">هزینه</th>
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
                        <td>{{ $row->DeclaredCapacity }}</td>
                        <td>{{ $row->QuotaDuration }}</td>
                        <td>{{ $row->Price }}</td>
                        <td>
                            <form action="{{ route('quota.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('quota.edit', $row->id) }}" style="color: #333333" ><span id="collapse-icon" class="fa fa-edit mr-3" ></span></a>
                                <button type="submit" class="btn btn-danger btn-sm"><span id="collapse-icon" class="fa fa-trash" ></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! $data->links() !!}
    </div>


@endsection

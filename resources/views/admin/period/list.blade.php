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
        <span id="collapse-icon" class="fa fa-calendar-alt fa-2x mr-2" ></span>
        <span class="h5">دوره ها</span>
    </div>

    <div class="form_container bg-white">

        <div class="row mb-2" >
            <div class="col-6">
                <a href="{{ route('period.create') }}"><button type="button" class="btn btn-primary">ثبت جدید</button></a>
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
                    <th scope="col">عنوان</th>
                    <th scope="col">تاریخ شروع</th>
                    <th scope="col">تاریخ پایان</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>دوره سوم</td>
                    <td>1398/01/01</td>
                    <td>1398/12/29</td>
                    <td>
                        <a href="{{ route('period.create') }}" style="color: #333333" ><span id="collapse-icon" class="fa fa-edit mr-3" ></span></a>
                        <span id="collapse-icon" class="fa fa-trash" ></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>دوره دوم</td>
                    <td>1397/01/01</td>
                    <td>1397/12/29</td>
                    <td>
                        <a href="{{ route('period.create') }}" style="color: #333333"><span id="collapse-icon" class="fa fa-edit mr-3" ></span></a>
                        <span id="collapse-icon" class="fa fa-trash" ></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>دوره اول</td>
                    <td>1396/01/01</td>
                    <td>1396/12/29</td>
                    <td>
                        <a href="{{ route('period.create') }}" style="color: #333333"><span id="collapse-icon" class="fa fa-edit mr-3" ></span></a>
                        <span id="collapse-icon" class="fa fa-trash" ></span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <nav aria-label="...">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
                </li>
                <!--li class="page-item"><a class="page-link" href="#">1</a></li-->
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                </li>
                <!--li class="page-item"><a class="page-link" href="#">3</a></li-->
                <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">بعدی</a>
                </li>
            </ul>
        </nav>

    </div>


@endsection

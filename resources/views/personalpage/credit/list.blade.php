@extends('personalpage.layouts.master')

@section('title' ,'اعتبا حساب')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="form_header bg-secondary">
        <span id="collapse-icon" class="fa fa-donate fa-2x mr-2" ></span>
        <span class="h5">اعتبار حساب</span>
    </div>

    <div class="form_container bg-white">
        <div class="row mb-2" >
            <div class="col-6">
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
                    <th scope="col">نوع اقدام</th>
                    <th scope="col">تاریخ اقدام</th>
                    <th scope="col">مبلغ پرداخت</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>واریز به حساب</td>
                    <td>1397/10/05</td>
                    <td>130000</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>واریز به حساب</td>
                    <td>1395/04/29</td>
                    <td>125000</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>


@endsection

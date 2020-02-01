@extends('personalpage.layouts.master')

@section('title' ,'اماکن قابل رزرو')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="form_header bg-secondary">
        <span id="collapse-icon" class="fa fa-university fa-2x mr-2" ></span>
        <span class="h5">اماکن اقامتی قابل رزرو</span>
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
                    <th scope="col">عنوان</th>
                    <th scope="col">استان / شهر</th>
                    <th scope="col">تلفن</th>
                    <th scope="col">آدرس</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>مکان یک</td>
                    <td>مازندران ، ساری</td>
                    <td>25463522</td>
                    <td>خیابان انقلاب </td>
                    <td>
                        <form >
                            @csrf
                            @method('DELETE')
                            <a style="color: #333333" ><button type="button" class="btn btn-success btn-sm">رزرو</button></a>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>مکان دو</td>
                    <td>خراسان رضوی ، مشهد</td>
                    <td>051246355</td>
                    <td>خیابان طبرسی </td>
                    <td>
                        <form >
                            @csrf
                            @method('DELETE')
                            <a style="color: #333333" ><button type="button" class="btn btn-success btn-sm">رزرو</button></a>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>


@endsection

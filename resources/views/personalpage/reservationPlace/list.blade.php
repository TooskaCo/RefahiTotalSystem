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

        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--div class="modal-header">
                        حذف رکورد اطلاعاتی
                    </div-->
                    <div class="modal-body">
                        آیا برای انجام عملیات رزرو مطمئن هستید ؟
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">انصراف</button>
                        <a class="btn btn-success btn-ok" >تایید</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" >
            <table class="table table-striped table-hover text-center">
                <!--caption>اسامی به ترتیب حروف الفبا مرتب شده است</caption-->
                <thead class="thead-dark">
                <tr >
                    <th scope="col" >ردیف</th>
                    <th scope="col" class="text-center">عنوان</th>
                    <th scope="col" class="text-center">سهمیه</th>
                    <th scope="col" class="text-center" >عملیات</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $index = 1 ;
                @endphp
                @foreach($data as $row)
                    <tr>
                        <th scope="row">{{ $index++ }}</th>
                        <td>{{ $row->PeriodPlaceTitle }}</td>
                        <td>{{ $row->DeclaredCapacity }}</td>
                        <td>
                           @if($row->serviceID )
                                <button type="button" class="btn btn-secondary btn-sm px-2"   >رزرو شده</button>
                            @else
                                <form id="frm_{{$row->id}}"  action="{{ route('reservePlaceAction',$row->id) }}"  method="post">
                                    @csrf
                                    @method('POST')
                                    <!--a href="{{ route('quota.edit', $row->id) }}" style="color: #333333" ><button type="button" class="btn btn-success btn-sm">رزرو</button></a-->
                                    <button type="button" class="btn btn-success btn-sm px-4" data-recordid="{{ $row->id }}" data-toggle="modal" data-target="#confirm-delete"   >رزرو</button>
                                </form>
                            @endif


                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! $data->links() !!}
    </div>


@endsection

@section('script')
    @parent
    <script>
        // Bind click to OK button within popup
        $('#confirm-delete').on('click', '.btn-ok', function(e)
        {
            var $modalDiv = $(e.delegateTarget);
            var id = $(this).data("recordid");
            $modalDiv.addClass('loading');
            //var form = $(e.target).parent('form:first');
            //alert(id);
            $('#frm_'+ id).submit();
            $modalDiv.modal('hide').removeClass('loading');
            //$(e.target).parents('form:first').submit();
            /*$.post('/admin/news/destroy/' + id).then(function()
            {
                alert(id);
            });*/
        });


        // Bind to modal opening to set necessary data properties to be used to make request
        $('#confirm-delete').on('show.bs.modal', function(e) {
            var data = $(e.relatedTarget).data();
            //$('.title', this).text(data.recordTitle);
            $('.btn-ok', this).data('recordid', data.recordid);
        });
    </script>
@endsection


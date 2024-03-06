@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="user-management-section commission-management">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Commission Management</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="user-management-inner">
            <div class="section-block-title">
                <h3>Commission List</h3>
            </div>
            <div class="custom-table-responsive">
                <table id="regularuser" data-searching="false" data-ordering="false">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Category Name</th>
                            <th>Commission Name</th>
                            <th>Commission</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($commission as $key=>$commission)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$commission->category->name ?? '-'}}</td>
                            <td>{{$commission->commission_name}}</td>
                            <td>{{$commission->commission_type == 'amount' ? '$' : ''}} {{$commission->commission}}{{$commission->commission_type == 'percentage' ? '%' : ''}}</td>
                            <td>
                                <a href="{{route('commissionEdit',[$commission->id])}}"><img src="{{asset('assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                            </td>
                            <td>
                                <a href="{{route('commissionDelete',[$commission->id])}}"><img src="{{asset('assets_admin/images/trash.png')}}" alt="delete"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
   $('#regularuser').DataTable({
      "ordering": false,
      "language": {
        "searchPlaceholder": "Search..",
        "search": "",
        oPaginate: {
          sNext: '<i class="fa-solid fa-chevron-right"></i>',
          sPrevious: '<i class="fa-solid fa-chevron-left"></i>',
        }
      }
    });
   $(".dataTables_paginate").wrap( "<div class='datatable-paginate-custom'></div>" );
</script>
@endsection
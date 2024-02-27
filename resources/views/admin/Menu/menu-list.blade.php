@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="home-management">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Menu Management</h2>
            @include('admin.Common.admin-profile-menu')
        </div>

        <div class="user-management-inner home-management-list menu-management-list">
            <div class="section-block-title">
                <h3>Menu List</h3>
            </div>
            <div class="custom-table-responsive">
                <table id="home-list" data-searching="false">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Title</th>
                            <th>Order</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Hotel</td>
                            <td>1</td>
                            <td>
                                <a href="{{route('editMenu')}}"><img src="{{asset('assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{asset('assets_admin/images/trash.png')}}" alt="delete"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
    $('#home-list').DataTable({
      responsive: true,
      ordering: false,
      "language": {
        "searchPlaceholder": "Search..",
        "search": "",
        oPaginate: {
          sNext: '<i class="fa-solid fa-chevron-right"></i>',
          sPrevious: '<i class="fa-solid fa-chevron-left"></i>',
        }
      }
    });

    $( ".dataTables_paginate" ).wrap( "<div class='datatable-paginate-custom'></div>" );
</script>
@endsection
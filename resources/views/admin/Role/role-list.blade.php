@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="user-management-section">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Role Permission</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="user-management-inner role-permission-list">
            <div class="section-block-title">
                <h3>Role List</h3>
            </div>
            <div class="custom-table-responsive">
                <table id="regularuser" data-searching="false" data-ordering="false">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th class="rname">Role Name</th>
                            <th class="redit">Edit </th>
                            <th class="rdelete">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $key=>$role)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$role->name}}</td>
                                <td><a href="{{route('roleEdit',['id' => $role->id])}}"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a></td>
                                <td><a href="{{route('roleDelete',['id' => $role->id])}}"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="delete"></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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

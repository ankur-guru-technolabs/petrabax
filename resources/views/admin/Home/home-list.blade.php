@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="home-management">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Home Page Management</h2>
            <div class="user-profile-menu ms-auto">
                <div class="dropdown">
                    <a class="dropdown-toggle user-dropdown-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin <img src="assets/images/user.png" alt="User"></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="user-profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#logoutmodal">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="user-management-inner home-management-list">
            <div class="section-block-title">
                <h3>Section List</h3>
            </div>
            <div class="custom-table-responsive">
                <table id="home-list" data-searching="false">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($home_menu_detail as $key=>$home_menu)
                            <tr>
                                <td>{{++$key}}</td>
                                <td><img class="video-thumbnail" src="{{ asset('/home_menu/'.$home_menu->image) }}" alt="Hotel"></td>
                                <td>{{$home_menu->title}}</td>
                                <td>{{$home_menu->mainMenu->title ?? ''}}</td>
                                <td>
                                    <a href="{{route('editHome',[$home_menu->id])}}"><img src="{{asset('assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                </td>
                                <td>
                                    <a href="{{route('deleteHome',[$home_menu->id])}}"><img src="{{asset('assets_admin/images/trash.png')}}" alt="delete"></a>
                                </td>
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

    $(".dataTables_paginate").wrap( "<div class='datatable-paginate-custom'></div>" );

</script>
@endsection
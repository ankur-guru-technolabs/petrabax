@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="video-management user-management-section role-permission-list">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Category</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="video-management-inner user-management-inner">
            <div class="section-block-title">
                <h3>Category List</h3>
            </div>
            <div class="custom-table-responsive">
                <table id="brochure-list" data-searching="false" data-ordering="false">
                    <thead>
                        <tr>
                        <th>Category</th>
                        <th>Main Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->main_category_id > 0 ? $category->mainCategory->name : '-'}}</td>
                                <td><a href="{{route('categoryEdit',['id' => $category->id])}}" class="category-edit-link"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a></td>
                                <td><a href="{{route('categoryDelete',['id' => $category->id])}}"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="delete"></a></td>
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
    $('#brochure-list').DataTable({
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

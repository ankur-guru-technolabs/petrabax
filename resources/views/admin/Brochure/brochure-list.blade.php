@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Brochure Management</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="video-management-inner brochure-list brochure-management">
            <div class="section-block-title">
                <h3>Brochure List</h3>
            </div>
            <div class="custom-table-responsive">
                <table id="brochure-list">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Brochure image</th>
                            <th>Brochure Order</th>
                            <th>Category</th>
                            <th>Brochure Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($brochures as $key=>$brochure)
                        <tr>
                            <td>{{++$key}}</td>
                            <td><img class="brochure-img" src="{{ asset('/brochure/'.$brochure->image) }}" alt="Brochure"></td>
                            <td>{{$brochure->order}}</td>
                            <td>{{$brochure->category->name}}</td>
                            <td>{{$brochure->name}}</td>
                            <td><a href="{{route('brochureEdit',['id' => $brochure->id])}}"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a></td>
                            <td><a href="{{route('brochureDelete',['id' => $brochure->id])}}"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="delete"></a></td>
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
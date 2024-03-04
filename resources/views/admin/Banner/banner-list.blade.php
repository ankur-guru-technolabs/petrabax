@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header">
          <h2>Banner List</h2>
        </div>
        <div class="video-management-inner brochure-list brochure-management">
            <div class="custom-table-responsive">
                <table id="banner-list">
                    <thead>
                        <tr>
                            <th>Banner image</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $banner)
                        <tr>
                            <td><img class="brochure-img" src="{{ asset('/banner/'.$banner->image) }}" alt="Banner"></td>
                            <td>{{$banner->category->name}}</td>
                            <td><a href="{{route('bannerEdit',['id' => $banner->id])}}"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a></td>
                            <td><a href="{{route('bannerDelete',['id' => $banner->id])}}"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="delete"></a></td>
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
    $('#banner-list').DataTable({
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
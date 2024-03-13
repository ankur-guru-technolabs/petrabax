@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header d-flex align-items-center">
            <h2>Video Management</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="video-management-inner brochure-list brochure-management">
            <div class="section-block-title">
                <h3>Video List</h3>
            </div>
            <div class="custom-table-responsive">
                <table id="brochure-list">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Video URL</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $key=>$video)
                            <tr>
                                <td>{{++$key}}</td>
                                @if($video->thumbnail_image !== '')
                                <td><img class="video-thumbnail" src="{{ asset('/video/'.$video->thumbnail_image) }}" alt="video-thumbnail"></td>
                                @else
                                <td>-</td>
                                @endif
                                <td>{{$video->title}}</td>
                                <td>{{$video->category->name}}</td>
                                <td>{{$video->url ?? '-'}}</td>
                                <td><a href="{{route('videoEdit',['id' => $video->id])}}"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a></td>
                                <td><a href="{{route('videoDelete',['id' => $video->id])}}"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="delete"></a></td>
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
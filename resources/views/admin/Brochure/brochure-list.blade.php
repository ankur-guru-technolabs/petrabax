@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header">
          <h2>Brochure List</h2>
        </div>
        <div class="video-management-inner brochure-list brochure-management">
            <div class="custom-table-responsive">
                <table id="brochure-list">
                    <thead>
                        <tr>
                            <th>Brochure image</th>
                            <th>Category</th>
                            <th>Brochure Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($brochures as $brochure)
                        <tr>
                            <td><img class="brochure-img" src="{{ asset('/brochure/'.$brochure->image) }}" alt="Brochure"></td>
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
            "search": ""
        }
    });
</script>
@endsection
@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header">
            <h2>Category List</h2>
        </div>
        <div class="video-management-inner brochure-list brochure-management">
            <div class="custom-table-responsive">
                <table id="brochure-list">
                    <thead>
                        <tr>
                        <th>Category Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td><a href="#" class="category-edit-link" data-bs-toggle="modal" data-bs-target="#categoryEdit" data-category-id="{{$category->id}}" data-category-name="{{$category->name}}"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a></td>
                                <td><a href="{{route('categoryDelete',['id' => $category->id])}}"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="delete"></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade agentfeemodal" id="categoryEdit" tabindex="-1" aria-labelledby="categoryEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Edit Category</h3>
                <form action="{{route('categoryUpdate')}}" method="post" id="category-edit-form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Name</label>
                            <input type="hidden" name="id" id="category-id">
                            <input type="text" class="form-control" name="name" id="category-name">
                        </div>
                    </div>
                    <div class="form-btn-list d-flex align-items-center justify-content-center">
                        <button type="button" data-bs-dismiss="modal">Close</button>
                        <button type="submit">Save changes</button>
                    </div>
                </form>
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

    $(document).ready(function () {
        $('.category-edit-link').on('click', function () {
            $("#category-edit-form").validate().resetForm();
            $('.text-danger').text('');
            var categoryName = $(this).attr('data-category-name');
            var categoryId = $(this).attr('data-category-id');
            $('#category-name').val(categoryName);
            $('#category-id').val(categoryId);
        });
        $("#category-edit-form").validate({
            rules:{
                name: {
                    required: true
                }
            },
            messages:{
                name:{
                    required: "Name filed is required."
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                $('.text-danger').text('');
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>
@endsection

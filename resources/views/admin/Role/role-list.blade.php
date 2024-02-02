@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header">
            <h2>Role List</h2>
        </div>
        <div class="video-management-inner brochure-list brochure-management">
            <div class="custom-table-responsive">
                <table id="brochure-list">
                    <thead>
                        <tr>
                            <th>Role Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{$role->name}}</td>
                                <td><a href="#" class="role-edit-link" data-bs-toggle="modal" data-bs-target="#roleEdit" data-role-id="{{$role->id}}" data-role-name="{{$role->name}}"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a></td>
                                <td><a href="{{route('roleDelete',['id' => $role->id])}}"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="delete"></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade agentfeemodal" id="roleEdit" tabindex="-1" aria-labelledby="roleEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Edit Role</h3>
                <form action="{{route('roleUpdate')}}" method="post" id="role-edit-form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Name</label>
                            <input type="hidden" name="id" id="role-id">
                            <input type="text" class="form-control" name="name" id="role-name">
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
        $('.role-edit-link').on('click', function () {
            $("#role-edit-form").validate().resetForm();
            $('.text-danger').text('');
            var roleName = $(this).attr('data-role-name');
            var roleId = $(this).attr('data-role-id');
            $('#role-name').val(roleName);
            $('#role-id').val(roleId);
        });
        $("#role-edit-form").validate({
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

@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header">
            <h2>Role</h2>
        </div>
        <div class="video-management-inner">
            <div class="video-content">
                <form action="{{route('roleSubmit')}}" method="post" id="role-form">
                    @csrf 
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Role Name</label>
                            <input type="text" class="form-control" name="name">
                            @if($errors->has('name'))
                                <small class="text-danger">
                                    {{ $errors->first('name') }}
                                </small>
                            @endif
                        </div>
                    </div>
                    <div class="form-submit-btn-list">
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent') 
<script type="text/javascript">
    $(document).ready(function() {
        $("#role-form").validate({
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
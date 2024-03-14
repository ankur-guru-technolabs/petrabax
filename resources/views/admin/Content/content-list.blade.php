@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="content-management-section">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Content Management</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
    </div>
    <div class="content-management-inner">
        <div class="section-block-title">
        <h3>{{$title}}</h3>
        </div>
        <div class="common-text-content privacy-section">
            <form action="{{route('contentSubmit')}}" method="post" id="cancellation-form">
                @csrf 
                <input type="hidden" name="key" value="{{$data->key}}">
                <div class="row">
                    <div class="col-12 form-group">
                        <textarea id="privacy-content" name="description">{{$data->value}}</textarea>
                        @if($errors->has('description'))
                            <small class="text-danger">
                                {{ $errors->first('description') }}
                            </small>
                        @endif
                    </div>
                    <div class="col-12 group-btn">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div> 
    </div>
</div>
@endsection
@section('jscontent')
<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
  <script type="text/javascript">
    ClassicEditor
    .create( document.querySelector( '#privacy-content' ),{
        removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'MediaEmbed'],
    })
    .then( editor => { console.log( editor ); })
    .catch( error => { console.error( error ); });

    $(document).ready(function() {
        $("#cancellation-form").validate({
            ignore: [],
            rules:{
                description: {
                    required: true
                }
            },
            messages:{
                description:{
                    required: "Description filed is required."
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
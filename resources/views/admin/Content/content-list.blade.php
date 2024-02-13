@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="content-management-section">
        <div class="section-header">
            <h2>Content management</h2>
        </div>
    </div>
    <div class="content-management-inner">

        <ul class="nav nav-pills cmt-section" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link  @if(!isset($activeTab) || $activeTab == 'privacy_policy') active @endif" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Privacy Policy</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link  @if($activeTab == 'terms_condition') active @endif" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Terms & Conditions</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link  @if($activeTab == 'cancellation_policy') active @endif" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Cancellation Policy</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade  @if(!isset($activeTab) || $activeTab == 'privacy_policy') show active @endif" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                <div class="common-text-content privacy-section">
                    @php
                        $privacyPolicy = $data->firstWhere('key', 'privacy_policy');
                    @endphp
                    <form action="{{route('contentSubmit')}}" method="post" id="privacy-form">
                        @csrf 
                        <input type="hidden" name="key" value="privacy_policy">
                        <div class="row">
                            <div class="col-12 form-group">
                                <label>Privacy Policy Content</label>
                                <textarea id="privacy-content" name="description">{{$privacyPolicy->value}}</textarea>
                            </div>
                            @if($errors->has('description'))
                                <small class="text-danger">
                                    {{ $errors->first('description') }}
                                </small>
                            @endif
                            <div class="col-12 group-btn">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade  @if($activeTab == 'terms_condition') show active @endif" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                <div class="common-text-content privacy-section">
                    @php
                        $termsCondition = $data->firstWhere('key', 'terms_condition');
                    @endphp
                    <form action="{{route('contentSubmit')}}" method="post" id="condition-form">
                        @csrf 
                        <input type="hidden" name="key" value="terms_condition">
                        <div class="row">
                            <div class="col-12 form-group">
                                <label>Terms & Conditions Content</label>
                                <textarea id="terms-content" name="description">{{$termsCondition->value}}</textarea>
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
            <div class="tab-pane fade  @if($activeTab == 'cancellation_policy') show active @endif" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                <div class="common-text-content privacy-section">
                    @php
                        $cancellationPolicy = $data->firstWhere('key', 'cancellation_policy');
                    @endphp
                    <form action="{{route('contentSubmit')}}" method="post" id="cancellation-form">
                        @csrf 
                        <input type="hidden" name="key" value="cancellation_policy">
                        <div class="row">
                            <div class="col-12 form-group">
                                <label>Cancellation Policy Content</label>
                                <textarea id="cancellation-policy-content" name="description">{{$cancellationPolicy->value}}</textarea>
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
    </div>
</div>
@endsection
@section('jscontent')
<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
<script type="text/javascript">
    // CKEDITOR.replace('privacy-content', {
        // removePlugins: 'CKFinderUploadAdapter,CKFinder,EasyImage,Image,ImageCaption,ImageStyle,ImageToolbar,ImageUpload,MediaEmbed',
    // });

    ClassicEditor
    .create( document.querySelector( '#privacy-content' ),{
        removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'MediaEmbed'],
    })
    .then( editor => { console.log( editor ); })
    .catch( error => { console.error( error ); });

    ClassicEditor
    .create( document.querySelector( '#terms-content' ),{
        removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'MediaEmbed'],
    })
    .then( editor => { console.log( editor ); })
    .catch( error => { console.error( error ); });

    ClassicEditor
    .create( document.querySelector( '#cancellation-policy-content' ),{
        removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'MediaEmbed'],
    })
    .then( editor => { console.log( editor ); })
    .catch( error => {  console.error( error ); });

    $(document).ready(function() {
        $("#privacy-form").validate({
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
       
        $("#condition-form").validate({
            ignore: [],
            rules: {
                description: {
                    required: true,
                },
            },
            messages: {
                description: {
                    required: "Please enter description",
                },
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
       
        $("#cancellation-form").validate({
            ignore: [],
            rules: {
                description: {
                    required: true,
                },
            },
            messages: {
                description: {
                    required: "Please enter description",
                },
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
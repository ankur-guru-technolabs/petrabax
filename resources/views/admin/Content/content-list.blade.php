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
                <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Privacy Policy</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Terms & Conditions</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Cancellation Policy</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                <div class="common-text-content privacy-section">
                    <form>
                        <div class="row">
                            <div class="col-12 form-group">
                                <label>Privacy Policy Content</label>
                                <textarea id="privacy-content"></textarea>
                            </div>
                            <div class="col-12 group-btn">
                                <button type="button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                <div class="common-text-content privacy-section">
                    <form>
                        <div class="row">
                            <div class="col-12 form-group">
                                <label>Terms & Conditions Content</label>
                                <textarea id="terms-content"></textarea>
                            </div>
                            <div class="col-12 group-btn">
                                <button type="button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                <div class="common-text-content privacy-section">
                    <form>
                        <div class="row">
                            <div class="col-12 form-group">
                                <label>Cancellation Policy Content</label>
                                <textarea id="cancellation-policy-content"></textarea>
                            </div>
                            <div class="col-12 group-btn">
                                <button type="button">Submit</button>
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
</script>
@endsection
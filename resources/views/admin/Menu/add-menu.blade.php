@extends('admin.master')
@section('content') 
<div class="admin-dashboard-main">
    <div class="admin-content-area">
        <div class="user-management-section">
            <div class="section-header d-flex align-items-center">
                <h2 class="mb-0">Menu Management</h2>
                @include('admin.Common.admin-profile-menu')
            </div>

            <div class="user-management-inner">
                <div class="section-block-title">
                    <h3>Add Menu</h3>
                </div>

                <div class="home-management-add menu-management">
                    <form>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Title</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Order</label>
                                <select class="form-control nice-select w-100">
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Image</label>
                                <select class="form-control nice-select w-100">
                                    <option>350*300</option>
                                    <option>450*300</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-submit-btn">
                            <button class="btn btn-primary">Cancel</button>
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
    $(".nice-select").niceSelect();
</script>
@endsection
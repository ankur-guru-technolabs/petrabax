@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="role-permission-section">
        <div class="section-header">
            <h2>Role Permission</h2>
        </div>
        <div class="role-permission-inner">
            <form>
                <div class="row">
                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Assign Roles</label>
                        <select class="form-control nice-select">
                            <option>Select</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>
                <div class="row role-permission-list">
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" id="role-1" checked>
                        <label for="role-1">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" id="role-2">
                        <label for="role-2">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" id="role-3">
                        <label for="role-3">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" id="role-4">
                        <label for="role-4">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" id="role-5">
                        <label for="role-5">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" id="role-6">
                        <label for="role-6">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" id="role-7">
                        <label for="role-7">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" id="role-8">
                        <label for="role-8">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" id="role-9">
                        <label for="role-9">User management</label>
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <input type="checkbox" id="role-10">
                        <label for="role-10">User management</label>
                    </div>
                </div>
                <div class="group-btn">
                    <button type="button">Save</button>
                    <button type="button">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection
@section('jscontent') 
<script type="text/javascript">
    $(".nice-select").niceSelect();
</script>
@endsection
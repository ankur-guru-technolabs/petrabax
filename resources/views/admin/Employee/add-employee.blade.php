@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="role-permission-section">
        <div class="section-header">
            <h2>Add New Emplyoee</h2>
        </div>
        <div class="role-permission-inner">
            <form>
                <div class="row">
                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Employee Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-5 col-sm-6 form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="col-md-4 col-sm-6 form-group">
                        <label>Roles</label>
                        <select class="form-control nice-select">
                            <option>Select</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <div class="col-md-5 col-sm-6 form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" placeholder="+31 574 8654 879">
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
@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="section-header">
        <h2>Agent fees management</h2>
    </div>
    <div class="user-management-inner agent-addfee">
        <h3>Add Fees</h3>
        <form>
            <div class="row">
                <div class="col-sm-4 form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="col-sm-4 form-group">
                    <label>Fees</label>
                    <div class="position-relative form-control-prifix">
                        <input type="number" class="form-control input-card-fees" required>
                        <span class="price-prifix">$</span>
                    </div>
                </div>
                <div class="col-sm-4 form-group">
                    <label>Card Fees</label>
                    <div class="position-relative form-control-prifix">
                        <input class="form-control input-card-fees" type="number" min="0" max="99" pattern="([0-9]{1,3}).([0-9]{1,3})" onKeyUp="if(this.value>99){this.value='99';}else if(this.value<0){this.value='0';}" required>
                        <span class="price-prifix">%</span>
                    </div>
                </div>
            </div>
            <div class="group-btn text-center">
                <button type="button">Reset</button>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
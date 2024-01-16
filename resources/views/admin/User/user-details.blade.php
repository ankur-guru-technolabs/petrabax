@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="user-management-section">
        <div class="section-header">
            <h2>User Management</h2>
        </div>

        <div class="user-management-inner">
            <div class="user-management-view">
                <div class="back-to-order-link">
                    <a href="{{route('userList')}}"><i class="fa-solid fa-chevron-left"></i></a>
                </div>

                <form>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" value="Martin" readonly>
                        </div>
                        <div class="col-lg-3 col-sm-6 form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" value="Crous" readonly>
                        </div>
                        <div class="col-lg-3 col-sm-6 form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control" value="Martin@gmail.com" readonly>
                        </div>
                        <div class="col-lg-3 col-sm-6 form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" value="L. A New York street No-1/5" readonly>
                        </div>
                        <div class="col-lg-3 col-sm-6 form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" value="+63 4587 4587" readonly>
                        </div>
                        <div class="col-lg-3 col-sm-6 form-group">
                            <label>Suite/Apt</label>
                            <input type="text" class="form-control" value="Riverdale Apt" readonly>
                        </div>
                        <div class="col-lg-3 col-sm-6 form-group">
                            <label>City</label>
                            <input type="text" class="form-control" value="New York" readonly>
                        </div>
                        <div class="col-lg-3 col-sm-6 form-group">
                            <label>Country</label>
                            <input type="text" class="form-control" value="United States" readonly>
                        </div>
                        <div class="col-12 form-group mb-0">
                            <label>Remarks</label>
                            <textarea rows="7" class="form-control" readonly>Booking a hotel through this website was seamless and efficient. The user-friendly interface made it easy to browse and compare options. The detailed descriptions and reviews helped in making an informed choice. The secure payment process added to the overall positive experience, ensuring a hassle-free booking.</textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
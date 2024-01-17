@extends('admin.master')
@section('content') 
 
<div class="admin-content-area">
    <div class="support-status-section">
        <div class="section-header">
          <h2>Support</h2>
        </div>
        <div class="support-status-inner">
            <ul class="nav nav-pills support-status-tab" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">List of Inquiries</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Status</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                    <div class="support-table-status">
                        <div class="custom-table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Date</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td><a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td><a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a></td>
                                    </tr>

                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td><a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a></td>
                                    </tr>

                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td><a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a></td>
                                    </tr>

                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td><a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a></td>
                                    </tr>
                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td><a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                    <div class="support-table-status">
                        <div class="custom-table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Date</th>
                                        <th>View</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Madrid Shaun</td>
                                        <td>Abc@gmail.com</td>
                                        <td>Canada</td>
                                        <td>Winnipeg</div></td>
                                        <td>20/03/2024</td>
                                        <td><button type="button" class="view-custom-btn" data-bs-toggle="modal" data-bs-target="#viewmodal">View</button></td>
                                        <td>Pending</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade viewmodal" id="viewmodal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="inquiries-modal-form">
                    <h3>Madrid Shaun</h3>
                    <form>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" value="Seventy Barcelona" readonly>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value="Email@gmail.com" readonly>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Contact</label>
                                <input type="text" class="form-control" value="+31 574 8654 879" readonly>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" value="Canada" readonly>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>City</label>
                                <input type="text" class="form-control" value="Seventy Barcelona" readonly>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Date</label>
                                <input type="text" class="form-control" value="20/03/2024" readonly>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Inquiry</label>
                                <textarea class="form-control" rows="4" readonly>Test inquiry</textarea>
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
<script type="text/javascript">
    $(".nice-select").niceSelect();
</script>
@endsection
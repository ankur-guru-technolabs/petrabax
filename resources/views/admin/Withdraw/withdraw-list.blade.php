@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="user-management-section withdraw-management">
        <div class="section-header">
            <h2>Withdraw management</h2>
        </div>

        <div class="user-management-inner">
            <ul class="nav nav-pills user-management-tab withdraw-management-tab" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Agent Commission</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Withdrawal Requests</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Payment</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">Payment Status</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                    <div class="custom-table-responsive">
                        <table id="withdraw-request">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Total commission</th>
                                    <th>Pending commission</th>
                                    <th>Paid commission</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>$ 8,412,00</td>
                                    <td>$ 1,110,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>$ 8,412,00</td>
                                    <td>$ 1,110,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>$ 8,412,00</td>
                                    <td>$ 1,110,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>$ 8,412,00</td>
                                    <td>$ 1,110,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>$ 8,412,00</td>
                                    <td>$ 1,110,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>$ 8,412,00</td>
                                    <td>$ 1,110,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>$ 8,412,00</td>
                                    <td>$ 1,110,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                    <div class="custom-table-responsive">
                        <table id="agentcommission">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Amount</th>
                                    <th>Paid commission</th>
                                    <th>Withdraw amount</th>
                                    <th>View</th>
                                    <th>Pay</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>$ 68,412,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/document-download.png')}}" alt="Download"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                    <td><a href="#" class="pay-btn-withdraw">Pay</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>$ 68,412,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/document-download.png')}}" alt="Download"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                    <td><a href="#" class="pay-btn-withdraw">Pay</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>$ 68,412,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/document-download.png')}}" alt="Download"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                    <td><a href="#" class="pay-btn-withdraw">Pay</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>$ 68,412,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/document-download.png')}}" alt="Download"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                    <td><a href="#" class="pay-btn-withdraw">Pay</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>$ 68,412,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/document-download.png')}}" alt="Download"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                    <td><a href="#" class="pay-btn-withdraw">Pay</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>$ 68,412,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/document-download.png')}}" alt="Download"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                    <td><a href="#" class="pay-btn-withdraw">Pay</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>$ 68,412,00</td>
                                    <td>$ 54,657,00</td>
                                    <td>
                                        <a href="#"><img src="{{ asset('/assets_admin/images/document-download.png')}}" alt="Download"></a>
                                    </td>
                                    <td><a href="#">View</a></td>
                                    <td><a href="#" class="pay-btn-withdraw">Pay</a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                    <div class="withdraw-payment-section">

                        <div class="withdraw-user-name">
                            <h3>Martin crous</h3>
                        </div>

                        <form>
                            <div class="row m-0">
                                <div class="form-group col-sm-6 p-0">
                                    <label>Withdraw</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control input-card-fees">
                                        <span class="m-price-prifix">$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-method-title">
                                <h3>Withdraw Method</h3>
                            </div>
                            <div class="withdraw-box">
                                <div class="withdraw-box-inner">
                                    <input type="radio" class="custom-radio" id="banktransfer" name="widthdrawmethod">
                                    <label for="banktransfer">
                                        <i class="fa-solid fa-building-columns"></i> Bank Transfer
                                    </label>
                                </div>
                            </div>

                            <div class="withdraw-box">
                                <div class="withdraw-box-inner">
                                    <input type="radio" class="custom-radio" id="mastercard" name="widthdrawmethod">
                                    <label for="mastercard">
                                        <i class="fa-brands fa-cc-mastercard"></i> Master Card
                                    </label>
                                </div>
                            </div>

                            <div class="withdraw-box">
                                <div class="withdraw-box-inner">
                                    <input type="radio" class="custom-radio" id="creditcard" name="widthdrawmethod">
                                    <label for="creditcard">
                                        <i class="fa-regular fa-credit-card"></i> Credit/debit card
                                    </label>
                                </div>
                            </div>

                            <div class="withdraw-box-submit">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab" tabindex="0">
                    <div class="custom-table-responsive">
                        <table id="payment-status">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date of Payment</th>
                                    <th>Reference Numbers</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>20-02-2023</td>
                                    <td>WD-MAOLG7F</td>
                                    <td>Paid</td>
                                    <td><a href="{{route('withdrawDetail')}}">View details</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>20-02-2023</td>
                                    <td>WD-MAOLG7F</td>
                                    <td>Paid</td>
                                    <td><a href="{{route('withdrawDetail')}}">View details</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>20-02-2023</td>
                                    <td>WD-MAOLG7F</td>
                                    <td>Paid</td>
                                    <td><a href="{{route('withdrawDetail')}}">View details</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>20-02-2023</td>
                                    <td>WD-MAOLG7F</td>
                                    <td>Paid</td>
                                    <td><a href="{{route('withdrawDetail')}}">View details</a></td>
                                </tr>
                                <tr>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>20-02-2023</td>
                                    <td>WD-MAOLG7F</td>
                                    <td>Paid</td>
                                    <td><a href="{{route('withdrawDetail')}}">View details</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent') 
<script type="text/javascript">
    $('#agentcommission').DataTable({
        responsive: true,
        "language": {
            "searchPlaceholder": "Search..",
            "search": ""
        }
    }); 

   $('#withdraw-request').DataTable({
        responsive: true,
        "language": {
            "searchPlaceholder": "Search..",
            "search": ""
        }
    });

   $('#payment-status').DataTable({
        responsive: true,
        "language": {
            "searchPlaceholder": "Search..",
            "search": ""
        }
    });

    $('.input-card-fees').keypress(function (e) {
        var txt = String.fromCharCode(e.which);
        if (!txt.match(/[0-9]/)) {
            return false;
        }
    });
</script>
@endsection
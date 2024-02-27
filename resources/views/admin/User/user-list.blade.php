@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="user-management-section">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">User Management</h2>
           @include('admin.Common.admin-profile-menu')
        </div>

        <div class="user-management-inner">
            <div class="section-block-title">
                @php
                    $user_type = '';
                    if($type == 'non-travel'){
                        $user_type = 'Non Travel';
                    }
                    elseif($type == 'travel'){
                        $user_type = 'Travel';
                    }
                    elseif($type == 'guest'){
                        $user_type = 'Guest';
                    }
                    elseif($type == 'non-active'){
                        $user_type = 'Non-active';
                    }
                @endphp
                <h3>{{$user_type}} Agents </h3>
            </div>
            <form class="search-form-block">
                <div class="row">
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>User First Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3 col-sm-6 form-group">
                        <label>User Last Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="submit-btn-block col-md-3 col-sm-6 form-group">
                        <button type="submit">Search</button>
                    </div>
                </div>
            </form>
            <div class="custom-table-responsive">
                <table id="regularuser" data-searching="false" data-ordering="false">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            @if($type == 'travel')
                                <th></th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Martin crous</td>
                            <td>Martin@gmail.com</td>
                            <td>New York</td>
                            <td>(505) 344-7240</td>
                            <td>Block</td>
                            <td>
                                <div class="dropdown action-dropdown">
                                    <a class="btn-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        View
                                    </a>
                                    <ul class="dropdown-menu">
                                        @if($type == 'non-travel')
                                            <li><a class="dropdown-item" href="user-details.html">User Details</a></li>
                                            <li><a class="dropdown-item" href="order-details.html">Order Details</a></li>
                                        @else
                                            <li><a class="dropdown-item" href="user-details.html">View</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </td>
                            @if($type == 'travel')
                                <td><a class="tagent-commission-modal" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#tagent-commission">Commission</a></td>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade tagent-commission" id="tagent-commission" tabindex="-1" aria-labelledby="tagent-commissionlabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="tagent-commissionlabel">Commssion</h1>
            </div>
            <div class="modal-body">
                <div class="agent-commission-form">
                    <form>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Category</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Commission Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group price-prifix-box">
                                <label>Amount</label>
                                <div class="position-relative">
                                <input type="text" class="form-control">
                                <span class="price-prifix-text">$</span>
                                </div>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Category</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Commission Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group price-prifix-box">
                                <label>Amount</label>
                                <div class="position-relative">
                                <input type="text" class="form-control">
                                <span class="price-prifix-text">$</span>
                                </div>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Category</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Commission Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group price-prifix-box">
                                <label>Amount</label>
                                <div class="position-relative">
                                <input type="text" class="form-control">
                                <span class="price-prifix-text">$</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-submit-btn">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Submit</button>
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
    $('#regularuser').DataTable({
        "ordering": false,
        "language": {
            "searchPlaceholder": "Search..",
            "search": "",
            oPaginate: {
            sNext: '<i class="fa-solid fa-chevron-right"></i>',
            sPrevious: '<i class="fa-solid fa-chevron-left"></i>',
            }
        }
    });

   $(".dataTables_paginate").wrap( "<div class='datatable-paginate-custom'></div>" );
</script>
@endsection
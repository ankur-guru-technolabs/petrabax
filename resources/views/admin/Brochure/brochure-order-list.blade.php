@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header d-flex align-items-center">
            <h2 class="mb-0">Orders</h2>
            @include('admin.Common.admin-profile-menu')
        </div>
        <div class="video-management-inner brochure-list brochure-management">
            <div class="section-block-title">
                <h3>Brochure Order List</h3>
            </div>
            <div class="custom-table-responsive">
                <table id="order">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order_brochure as $key=>$order)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$order->first_name}} {{$order->last_name}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->phone_no}}</td>
                            <td>{{date('d-m-Y', strtotime($order->created_at))}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
    $('#order').DataTable({
        responsive: true,
        ordering: false,
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
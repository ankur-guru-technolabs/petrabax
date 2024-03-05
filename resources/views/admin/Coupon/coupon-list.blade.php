@extends('admin.master')
@section('content')
<div class="admin-content-area">
    <div class="video-management">
        <div class="section-header">
          <h2>Coupon List</h2>
        </div>
        <div class="video-management-inner brochure-list brochure-management">
            <div class="custom-table-responsive">
                <table id="coupon-list" data-searching="false" data-ordering="false">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Code</th>
                            <th>Max Discount</th>
                            <th>Discount</th>
                            <th>Start Date</th>
                            <th>Expire Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($coupons as $coupon)
                        <tr>
                            <td>{{$coupon->title}}</td>
                            <td>{{$coupon->code}}</td>
                            <td>{{$coupon->max_discount}}</td>
                            <td>{{ $coupon->discount_type == 'percentage' ? $coupon->percentage_discount : $coupon->price_discount}}</td>
                            <td>{{ date('d-m-Y', strtotime($coupon->start_date)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($coupon->end_date)) }}</td>
                            <td><a href="{{route('couponEdit',['id' => $coupon->id])}}"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a></td>
                            <td><a href="{{route('couponDelete',['id' => $coupon->id])}}"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="delete"></a></td>
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
    $('#coupon-list').DataTable({
      responsive: true,
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
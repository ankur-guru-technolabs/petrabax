@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="user-management-section">
        <div class="section-header">
            <h2>Orders</h2>
        </div>
        <div class="user-management-inner">
            <div class="custom-table-responsive">
                <table id="order">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Order Date</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                            <td>01</td>
                            <td>Martin crous</td>
                            <td>Paid</td>
                            <td>08-02-2023</td>
                            <td><a href="{{route('orderDetail')}}">View</a></td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/download.png')}}" alt="download"></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                            <td>01</td>
                            <td>Martin crous</td>
                            <td>Cancelled</td>
                            <td>08-02-2023</td>
                            <td><a href="{{route('orderDetail')}}">View</a></td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/download.png')}}" alt="download"></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                            <td>01</td>
                            <td>Martin crous</td>
                            <td>Paid</td>
                            <td>08-02-2023</td>
                            <td><a href="{{route('orderDetail')}}">View</a></td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/download.png')}}" alt="download"></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                            <td>01</td>
                            <td>Martin crous</td>
                            <td>Refunded</td>
                            <td>08-02-2023</td>
                            <td><a href="{{route('orderDetail')}}">View</a></td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/download.png')}}" alt="download"></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                            <td>01</td>
                            <td>Martin crous</td>
                            <td>Paid</td>
                            <td>08-02-2023</td>
                            <td><a href="{{route('orderDetail')}}">View</a></td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/download.png')}}" alt="download"></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                            <td>01</td>
                            <td>Martin crous</td>
                            <td>Paid</td>
                            <td>08-02-2023</td>
                            <td><a href="{{route('orderDetail')}}">View</a></td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/download.png')}}" alt="download"></a>
                            </td>
                        </tr>
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
      "language": {
        "searchPlaceholder": "Search..",
        "search": ""
      }
    });
</script>
@endsection
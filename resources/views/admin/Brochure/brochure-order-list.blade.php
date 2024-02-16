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
      "language": {
        "searchPlaceholder": "Search..",
        "search": ""
      }
    });
</script>
@endsection
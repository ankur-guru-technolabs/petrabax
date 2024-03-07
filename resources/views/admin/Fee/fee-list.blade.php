@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="section-header d-flex align-items-center">
        <h2>Agent fees management</h2>
    </div>
    <div class="user-management-inner agent-fee-management">
        <div class="section-block-title">
            <h3>Fees List</h3>
        </div>
        <div class="custom-table-responsive">
            <table id="regularuser" data-searching="false" data-ordering="false">
                <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Percentage</th>
                    <th>Card fees</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fee as $key=>$fee)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$fee->user->first_name}} {{$fee->user->last_name}}</td>
                        <td>$ {{$fee->amount}}</td>
                        <td>{{$fee->percentage}}%</td>
                        <td>{{$fee->card_fees}}%</td>
                        <td><a class="edit-icon" href="{{route('feeEdit',['id'=>$fee->id])}}"><img src="{{asset('assets_admin/images/edit-2.png')}}" alt="Edit"></a></td>
                        <td><a href="{{route('feeDelete',['id'=>$fee->id])}}"><img src="{{asset('assets_admin/images/trash.png')}}" alt="Delete"></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('jscontent')
<script type="text/javascript">
    $("#percentage").on('input', function() {
      $(this).val(function(i, v) {
        return v.replace('%','') + '%';
      });
    });

    $("#percentagefee").on('input', function() {
      $(this).val(function(i, v) {
        return v.replace('%','') + '%';
      });
    });

    $('#regularuser').DataTable({
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

    $('.input-card-fees').keypress(function (e) {
      var txt = String.fromCharCode(e.which);
      if (!txt.match(/[0-9]/)) {
        return false;
      }
    });
</script>
@endsection
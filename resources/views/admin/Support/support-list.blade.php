@extends('admin.master')
@section('content') 
 
<div class="admin-content-area">
    <div class="support-status-section">
        <div class="section-header d-flex align-items-center">
          <h2>Support</h2>
          @include('admin.Common.admin-profile-menu')
        </div>
        <div class="support-status user-management-inner">
            <div class="section-block-title">
                <h3>List of Inquiries</h3>
            </div>
            <div class="custom-table-responsive">
                <table id="support" data-searching="false" data-ordering="false">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Madrid Shaun</td>
                            <td>Abc@gmail.com</td>
                            <td>Canada</td>
                            <td>Winnipeg</div></td>
                            <td>20/03/2024</td>
                            <td>Completed</td>
                            <td><a href="{{route('supportView',['id'=>1])}}" class="view-custom-btn text-white">View</a></td>
                            <td><a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a></td>
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
    $('#support').DataTable({
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
</script>
@endsection
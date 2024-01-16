@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="user-management-section">
        <div class="section-header">
            <h2>User Management</h2>
        </div>

        <div class="user-management-inner">
            <ul class="nav nav-pills user-management-tab" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Regular Users</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Guest Users</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Agents List</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                    <div class="custom-table-responsive">
                        <table id="regularuser">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="#">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                    <div class="custom-table-responsive">
                        <table id="guestuser">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                    <div class="custom-table-responsive">
                        <table id="agentuser">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
                                </tr>
                                <tr>
                                    <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                                    <td>Martin crous</td>
                                    <td>Martin@gmail.com</td>
                                    <td>New York</td>
                                    <td>(505) 344-7240</td>
                                    <td>Block</td>
                                    <td><a href="{{route('userView')}}">View</a></td>
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
    $('#regularuser').DataTable({
      responsive: true,
      "language": {
        "searchPlaceholder": "Search..",
        "search": ""
      }
    });
  
   $('#guestuser').DataTable({
      responsive: true,
      "language": {
        "searchPlaceholder": "Search..",
        "search": ""
      }
    });

    $('#agentuser').DataTable({
      responsive: true,
      "language": {
        "searchPlaceholder": "Search..",
        "search": ""
      }
    });
</script>
@endsection
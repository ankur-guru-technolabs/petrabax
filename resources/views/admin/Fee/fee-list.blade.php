@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="section-header">
        <h2>Agent fees management</h2>
    </div>
    <div class="user-management-inner agent-fee-management">
        <div class="custom-table-responsive">
            <table id="regularuser">
                <thead>
                    <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Fees</th>
                        <th>Card fees</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                        <td>Martin crous</td>
                        <td>$ 200</td>
                        <td>15 %</td>
                        <td>
                            <a class="edit-icon" href="javascript:void()" data-bs-toggle="modal" data-bs-target="#agentfeemodal"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                        </td>
                        <td>
                            <a href="javascript:void()"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                        <td>Martin crous</td>
                        <td>$ 200</td>
                        <td>15 %</td>
                        <td>
                            <a class="edit-icon" href="javascript:void()" data-bs-toggle="modal" data-bs-target="#agentfeemodal"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                        </td>
                        <td>
                            <a href="javascript:void()"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                        <td>Martin crous</td>
                        <td>$ 200</td>
                        <td>15 %</td>
                        <td>
                            <a class="edit-icon" href="javascript:void()" data-bs-toggle="modal" data-bs-target="#agentfeemodal"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                        </td>
                        <td>
                            <a href="javascript:void()"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                        <td>Martin crous</td>
                        <td>$ 200</td>
                        <td>15 %</td>
                        <td>
                            <a class="edit-icon" href="javascript:void()" data-bs-toggle="modal" data-bs-target="#agentfeemodal"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                        </td>
                        <td>
                            <a href="javascript:void()"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                        <td>Martin crous</td>
                        <td>$ 200</td>
                        <td>15 %</td>
                        <td>
                            <a class="edit-icon" href="javascript:void()" data-bs-toggle="modal" data-bs-target="#agentfeemodal"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                        </td>
                        <td>
                            <a href="javascript:void()"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                        <td>Martin crous</td>
                        <td>$ 200</td>
                        <td>15 %</td>
                        <td>
                            <a class="edit-icon" href="javascript:void()" data-bs-toggle="modal" data-bs-target="#agentfeemodal"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                        </td>
                        <td>
                            <a href="javascript:void()"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img class="user-image" src="{{ asset('/assets_admin/images/table-user-image.png')}}" alt="User Image"></td>
                        <td>Martin crous</td>
                        <td>$ 200</td>
                        <td>15 %</td>
                        <td>
                            <a class="edit-icon" href="javascript:void()" data-bs-toggle="modal" data-bs-target="#agentfeemodal"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                        </td>
                        <td>
                            <a href="javascript:void()"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade agentfeemodal" id="agentfeemodal" tabindex="-1" aria-labelledby="agentfeemodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Edit Fees management</h3>
                <form>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Fees</label>
                            <div class="position-relative">
                                <input type="number" class="form-control input-card-fees space-left-more" required>
                                <span class="m-price-prifix">$</span>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Card Fees</label>
                            <div class="position-relative">
                                <input class="form-control space-left-more input-card-fees" type="number" min="0" max="99" pattern="([0-9]{1,3}).([0-9]{1,3})" onKeyUp="if(this.value>99){this.value='99';}else if(this.value<0){this.value='0';}" required>
                                <span class="m-price-prifix">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-btn-list d-flex align-items-center justify-content-center">
                        <button type="button" data-bs-dismiss="modal">Close</button>
                        <button type="submit">Save changes</button>
                    </div>
                </form>
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

    $('.input-card-fees').keypress(function (e) {
      var txt = String.fromCharCode(e.which);
      if (!txt.match(/[0-9]/)) {
        return false;
      }
    });
</script>
@endsection
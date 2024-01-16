@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="commission-management-section">
        <div class="section-header">
            <h2>Commission management</h2>
        </div>
    </div>
    <div class="commission-management-inner">

        <ul class="nav nav-pills commission-tab" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true"><span>Fixed amount commission</span> <i class="fa-solid fa-dollar-sign"></i></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false"><span>Percentage-based commissions</span> <i class="fa-solid fa-percent"></i></button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">

                <div class="commission-details">
                    <form class="mb-5">
                        <div class="commission-filter-data">
                            <div class="filter-agents-list">
                                <label>Travelers agents list</label>
                                <select class="niceselect form-control">
                                    <option>Select</option>
                                    <option>Martin crous</option>
                                    <option>Martin crous</option>
                                    <option>Martin crous</option>
                                    <option>Martin crous</option>
                                </select>
                            </div>
                            <div class="filter-agent-price">
                                <label class="d-flex align-items-centerl">Price
                                    <a class="text-end ms-auto" href="javascript:void()" data-bs-toggle="modal" data-bs-target="#fixedcommission"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                </label>
                                <div class="position-relative">
                                    <input type="number" class="form-control input-card-fees" required>
                                    <span class="c-price-prifix">$</span>
                                </div>
                            </div>
                            <div class="filter-submit-btn">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </form>

                    <div class="commission-agent-list">
                        <div class="custom-table-responsive">
                            <table id="commissionagentlist">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Fees</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                <div class="commission-details">
                    <form class="mb-5">
                        <div class="commission-filter-data">
                            <div class="filter-agents-list">
                                <label>Travelers agents list</label>
                                <select class="niceselect form-control">
                                    <option>Select</option>
                                    <option>Martin crous</option>
                                    <option>Martin crous</option>
                                    <option>Martin crous</option>
                                    <option>Martin crous</option>
                                </select>
                            </div>
                            <div class="filter-agent-price">
                                <label class="d-flex align-items-centerl">Price
                                    <a class="text-end ms-auto" href="javascript:void()" data-bs-toggle="modal" data-bs-target="#percentagecommission"><i class="fa-solid fa-pencil"></i></a>
                                </label>
                                <div class="position-relative">
                                    <input class="form-control input-card-fees" type="number" min="0" max="99" pattern="([0-9]{1,3}).([0-9]{1,3})" onKeyUp="if(this.value>99){this.value='99';}else if(this.value<0){this.value='0';}" required>
                                    <span class="c-price-prifix">%</span>
                                </div>
                            </div>
                            <div class="filter-submit-btn">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="commission-agent-list">
                        <div class="custom-table-responsive">
                            <table id="percentageagentlist">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Fees</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>Martin crous</td>
                                        <td>Martin@gmail.com</td>
                                        <td>$ 8795</td>
                                        <td>20/12/2023</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Modal -->
<div class="modal fade fixedcommission" id="fixedcommission" tabindex="-1" aria-labelledby="fixedcommissionLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
            <form>
              <div class="form-group">
                <label>Amount</label>
                <div class="position-relative">
                  <input type="number" class="form-control input-card-fees" required>
                  <span class="m-price-prifix">$</span>
                </div>
              </div>
              <div class="form-btn-list d-flex align-items-center justify-content-center">
                <button type="button" data-bs-dismiss="modal" class="cancel-btn">Cancel</button>
                <button type="submit" class="cancel-btn">Submit</button>
              </div>
            </form>
        </div>
      </div>
    </div>
</div>

  <!-- Modal -->
<div class="modal fade fixedcommission percentagecommission" id="percentagecommission" tabindex="-1" aria-labelledby="fixedcommissionLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
            <form>
              <div class="form-group">
                <label>Amount</label>
                <div class="position-relative">
                  <input class="form-control input-card-fees" type="number" min="0" max="99" pattern="([0-9]{1,3}).([0-9]{1,3})" onKeyUp="if(this.value>99){this.value='99';}else if(this.value<0){this.value='0';}" required>
                  <span class="m-price-prifix">%</span>
                </div>
              </div>
              <div class="form-btn-list d-flex align-items-center justify-content-center">
                <button type="button" data-bs-dismiss="modal" class="cancel-btn">Cancel</button>
                <button type="submit" class="cancel-btn">Submit</button>
              </div>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection
@section('jscontent')
<script>
    $('#commissionagentlist').DataTable({
      responsive: true,
      "language": {
        "searchPlaceholder": "Search..",
        "search": ""
      }
    });

    $('#percentageagentlist').DataTable({
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
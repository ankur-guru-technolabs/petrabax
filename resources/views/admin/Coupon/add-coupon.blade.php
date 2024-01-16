@extends('admin.master')
@section('content') 
<div class="admin-content-area">
    <div class="create-coupon-section">
        <div class="section-header">
            <h2>Create Coupon</h2>
        </div>
        <div class="create-coupon-inner user-management-inner">
            <h3>Create coupon</h3>
            <div class="coupon-form-content">
                <form>
                    <div class="form-group">
                        <label>Coupon title</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="maximum-discount">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <label>Maximum Discount %</label>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control nice-select">
                                    <option>Select</option>
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 discount-option-box">
                            <label>Discount</label>
                            <div class="custom-radio-btn">
                                <input type="radio" id="percentage" name="discount">
                                <label for="percentage" class="d-flex align-items-center">
                                    <!--<input type="text" class="form-control">-->
                                    <input class="form-control input-card-fees" type="text" min="0" max="99" onKeyUp="if(this.value>99){this.value='99';}else if(this.value<0){this.value='0';}" required>
                                    <span>% off</span>
                                </label>
                            </div>
                            <div class="custom-radio-btn discount-option-box">
                                <input type="radio" id="price" name="discount">
                                <label for="price" class="d-flex align-items-center">
                                    <input type="number" class="form-control input-card-fees" required>
                                    <span>Price off</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-filed-data">
                                <label>Start date</label>
                                <div class="position-relative datepicker-icon-add">
                                    <input type="text" class="form-control" id="datepickerstart" placeholder="Select date">
                                </div>
                            </div>
                            <div class="form-filed-data">
                                <label>End date</label>
                                <div class="position-relative datepicker-icon-add">
                                    <input type="text" class="form-control" id="datepickerend" placeholder="Select date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coupon-submit-btn text-center">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>

            <div class="coupon-table-list">
                <h3>Coupon List</h3>
                <div class="custom-table-responsive">
                    <table id="coupon-list">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Max Discount</th>
                                <th>Start Date</th>
                                <th>Expire Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>20% Off</td>
                                <td>WELCOME</td>
                                <td>$ 150</td>
                                <td>20-02-2023</td>
                                <td>20-03-2023</td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>20% Off</td>
                                <td>WELCOME</td>
                                <td>$ 150</td>
                                <td>20-02-2023</td>
                                <td>20-03-2023</td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>20% Off</td>
                                <td>WELCOME</td>
                                <td>$ 150</td>
                                <td>20-02-2023</td>
                                <td>20-03-2023</td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>20% Off</td>
                                <td>WELCOME</td>
                                <td>$ 150</td>
                                <td>20-02-2023</td>
                                <td>20-03-2023</td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>20% Off</td>
                                <td>WELCOME</td>
                                <td>$ 150</td>
                                <td>20-02-2023</td>
                                <td>20-03-2023</td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/edit-2.png')}}" alt="Edit"></a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{ asset('/assets_admin/images/trash.png')}}" alt="Delete"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>20% Off</td>
                                <td>WELCOME</td>
                                <td>$ 150</td>
                                <td>20-02-2023</td>
                                <td>20-03-2023</td>
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
@endsection
@section('jscontent') 
<script type="text/javascript">

    $(".nice-select").niceSelect();

    $('#coupon-list').DataTable({
      responsive: true,
      "language": {
        "searchPlaceholder": "Search..",
        "search": ""
      }
    });

    var dateToday = new Date();    
    $("#datepickerstart").datepicker({ 
        minDate: dateToday,
        dateFormat: 'dd/mm/yy',
        showOn: 'button',
        buttonImageOnly: true, 
        buttonImage: '{{ asset('/assets_admin/images/datepicker.png')}}'
    });

    $("#datepickerend").datepicker({ 
        minDate: dateToday,
        dateFormat: 'dd/mm/yy',
        showOn: 'button',
        buttonImageOnly: true,
        buttonImage: '{{ asset('/assets_admin/images/datepicker.png')}}'
    });

    $('.input-card-fees').keypress(function (e) {
        var txt = String.fromCharCode(e.which);
        if (!txt.match(/[0-9]/)) {
            return false;
        }
    });

</script>
@endsection
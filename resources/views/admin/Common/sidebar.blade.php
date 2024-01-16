<div class="admin-sidebar">
    <div class="sidebar-inner">
        <div class="logo-block d-flex align-items-center">
            <a href="dashboard.html"><img src="{{ asset('/assets_admin/images/logo.png')}}"></a>
            <div class="toggle-switch-menu d-lg-none text-end ms-auto"><a href="# "><i class="bi bi-list"></i></a></div>
        </div>
        <div class="sidebar-menu-list">
            <ul>
                <li>
                    <a class="active" href="dashboard.html">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/dashboard.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/dashboard-hover.svg')}}" alt="Icon"> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{route('userList')}}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/user-management.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/user-management-hover.svg')}}" alt="Icon"> User Management
                    </a>
                </li>
                <li>
                    <a href="{{route('commissionList')}}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/commission.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/commission-hover.svg')}}" alt="Icon"> Commission
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/fees-management.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/fees-management-hover.svg')}}" alt="Icon"> Fees management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('feeList')}}">Fees management</a></li>
                        <li><a class="dropdown-item" href="{{route('addFee')}}">Add Fees</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/coupon.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/coupon-hover.svg')}}" alt="Icon"> Coupon
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu"> 
                        <li><a class="dropdown-item" href="{{route('addCoupon')}}">Create Coupon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="hotel-content-management.html">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/hotelbeds.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/hotelbeds-hover.svg')}}" alt="Icon"> Hotel content(Hotelbeds)
                    </a>
                </li>
                <li>
                    <a href="hotel-content-management-paradores.html">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/hotel-paradores.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/hotel-paradores-hover.svg')}}" alt="Icon"> Hotel content (Paradores)
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/brochure.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/brochure-hover.svg')}}" alt="Icon"> Brochure management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('addBrochure')}}">Brochure</a></li>
                        <li><a class="dropdown-item" href="{{route('addBrochure')}}">Create Brochure</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/video.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/video-hover.svg')}}" alt="Icon"> Video management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('addVideo')}}">Video</a></li>
                        <li><a class="dropdown-item" href="{{route('addVideo')}}">Create Video</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/video.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/video-hover.svg')}}" alt="Icon"> Order management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('orderList')}}">Order</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/report.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/report-hover.svg')}}" alt="Icon"> Report management
                    </a>
                </li>
                <li>
                    <a href="live-chat.html">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/livechat.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/livechat-hover.svg')}}" alt="Icon"> Live chat
                    </a>
                </li>
                <li>
                    <a href="role-permission.html">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/role.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/role-hover.svg')}}" alt="Icon"> Role Permission
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/employees.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/employees-hover.svg')}}" alt="Icon"> Employees
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('addEmployee')}}">Add Employees</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('contentList')}}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/cms.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/cms-hover.svg')}}" alt="Icon"> Content management
                    </a>
                </li>
                <li>
                    <a href="support.html">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/support.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/support-hover.svg')}}" alt="Icon"> Support
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

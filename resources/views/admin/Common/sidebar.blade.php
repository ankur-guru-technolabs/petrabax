<div class="admin-sidebar">
    <div class="sidebar-inner">
        <div class="logo-block d-flex align-items-center">
            <a href="{{route('dashboard')}}"><img src="{{ asset('/assets_admin/images/logo.png')}}"></a>
            <div class="toggle-switch-menu d-lg-none text-end ms-auto"><a href="# "><i class="bi bi-list"></i></a></div>
        </div>
        @php
            $activeRoutes = [
                'dashboard' => request()->routeIs('dashboard'),
                'user' => request()->routeIs('userList') || request()->routeIs('userView'),
                'home' => request()->routeIs('addHome') || request()->routeIs('homeList') || request()->routeIs('editHome'),
                'menu' => request()->routeIs('addMenu') || request()->routeIs('menuList') || request()->routeIs('editMenu'),
                'commision' =>  request()->routeIs('addCommission') || request()->routeIs('commissionList') || request()->routeIs('commissionEdit'),
                'fee' => request()->routeIs('addFee') || request()->routeIs('feeList') || request()->routeIs('feeEdit'),
                'coupon' => request()->routeIs('addCoupon') || request()->routeIs('couponList') || request()->routeIs('couponEdit'),
                'hotelbeds' => request()->routeIs('addHotelbeds'),
                'paradores' => request()->routeIs('addParadores'),
                'banner' => request()->routeIs('addBanner') || request()->routeIs('bannerList') || request()->routeIs('bannerEdit'),
                'brochure' => request()->routeIs('addBrochure') || request()->routeIs('brochureList') || request()->routeIs('brochureEdit') || request()->routeIs('brochureOrderList'),
                'video' => request()->routeIs('addVideo') || request()->routeIs('videoList') || request()->routeIs('videoEdit'),
                'order' => request()->routeIs('orderList') || request()->routeIs('orderDetail'),
                'report' => request()->routeIs('report'),
                'chat' => request()->routeIs('chat'),
                'role' => request()->routeIs('addRole') || request()->routeIs('roleList'),
                'employee' => request()->routeIs('addEmployee')|| request()->routeIs('employeeList') || request()->routeIs('employeeEdit'),
                'category' => request()->routeIs('addCategory') || request()->routeIs('categoryList'),
                'content' => request()->routeIs('contentList'),
                'support' => request()->routeIs('supportList'),
                'withdraw' => request()->routeIs('withdrawList') || request()->routeIs('withdrawAgentDetail') || request()->routeIs('withdrawDetail'),
            ];
        @endphp
        <div class="sidebar-menu-list">
            <ul>
                <li>
                    <a class="{{ $activeRoutes['dashboard'] ? 'active' : '' }}" href="{{route('dashboard')}}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/dashboard.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/dashboard-hover.svg')}}" alt="Icon"> Dashboard
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['menu'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['menu'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('assets_admin/images/menu-icon/menu.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('assets_admin/images/menu-icon/menu-hover.svg')}}" alt="Icon">
                        Menu Management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu  {{ $activeRoutes['menu'] ? 'show' : '' }}">
                        <li><a class="dropdown-item  {{ request()->routeIs('addMenu') ? 'active' : '' }}" href="{{ route('addMenu') }}">Add</a></li>
                        <li><a class="dropdown-item  {{ request()->routeIs('menuList') ? 'active' : '' }}" href="{{ route('menuList') }}">List</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['home'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['home'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('assets_admin/images/menu-icon/home.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('assets_admin/images/menu-icon/home-hover.svg')}}" alt="Icon">
                        Home Management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['home'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->routeIs('addHome') ? 'active' : '' }}" href="{{ route('addHome') }}">Add</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('homeList') ? 'active' : '' }}" href="{{ route('homeList') }}">List</a></li>
                    </ul>
                </li>
              
                
                <!-- <li>
                    <a href="orders.html">
                        <img class="image-default" src="{{asset('assets_admin/images/menu-icon/order.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{asset('assets_admin/images/menu-icon/order-hover.svg')}}" alt="Icon">
                        Order
                    </a>
                </li> -->

                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['user'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['fee'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('assets_admin/images/menu-icon/user-management.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('assets_admin/images/menu-icon/user-management-hover.svg')}}" alt="Icon">
                        User Management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['user'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->route()->getName() == 'userList' && request()->route('type') == 'non-travel' ? 'active' : '' }}" href="{{ route('userList', ['type' => 'non-travel']) }}">Non-Travel Agents</a></li>
                        <li><a class="dropdown-item {{ request()->route()->getName() == 'userList' && request()->route('type') == 'travel' ? 'active' : '' }}" href="{{ route('userList', ['type' => 'travel']) }}">Travel Agents</a></li>
                        <li><a class="dropdown-item {{ request()->route()->getName() == 'userList' && request()->route('type') == 'guest' ? 'active' : '' }}" href="{{ route('userList', ['type' => 'guest']) }}">Guest Users</a></li>
                        <li><a class="dropdown-item {{ request()->route()->getName() == 'userList' && request()->route('type') == 'non-active' ? 'active' : '' }}" href="{{ route('userList', ['type' => 'non-active']) }}">Non-active Agents</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['commision'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['commision'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/commission.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/commission-hover.svg')}}" alt="Icon">
                        Commission
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['commision'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->routeIs('addCommission') ? 'active' : '' }}" href="{{route('addCommission')}}">Add</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('commissionList') ? 'active' : '' }}" href="{{route('commissionList')}}">List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['fee'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['fee'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/fees-management.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/fees-management-hover.svg')}}" alt="Icon"> Fees management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['fee'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->routeIs('addFee') ? 'active' : '' }}" href="{{route('addFee')}}">Add</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('feeList') ? 'active' : '' }}" href="{{route('feeList')}}">List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['coupon'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['coupon'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/coupon.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/coupon-hover.svg')}}" alt="Icon"> Coupon
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['coupon'] ? 'show' : '' }}"> 
                        <li><a class="dropdown-item {{ request()->routeIs('addCoupon') ? 'active' : '' }}" href="{{route('addCoupon')}}">Add</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('couponList') ? 'active' : '' }}" href="{{route('couponList')}}">List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['hotelbeds'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['hotelbeds'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/hotelbeds.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/hotelbeds-hover.svg')}}" alt="Icon">  Hotelbeds
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['hotelbeds'] ? 'show' : '' }}"> 
                        <li><a class="dropdown-item {{ request()->routeIs('addHotelbeds') ? 'active' : '' }}" href="{{route('addHotelbeds')}}">Create Hotelbeds</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['paradores'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['paradores'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/hotel-paradores.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/hotel-paradores-hover.svg')}}" alt="Icon"> Paradores
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['paradores'] ? 'show' : '' }}"> 
                        <li><a class="dropdown-item {{ request()->routeIs('addParadores') ? 'active' : '' }}" href="{{route('addParadores')}}">Create Paradores</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['banner'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['banner'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/banner.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/banner-hover.svg')}}" alt="Icon"> Banner management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['banner'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->routeIs('addBanner') ? 'active' : '' }}" href="{{route('addBanner')}}">Add</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('bannerList') ? 'active' : '' }}" href="{{route('bannerList')}}">List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['brochure'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['brochure'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/brochure.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/brochure-hover.svg')}}" alt="Icon"> Brochure management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['brochure'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->routeIs('addBrochure') ? 'active' : '' }}" href="{{route('addBrochure')}}">Add</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('brochureList') ? 'active' : '' }}" href="{{route('brochureList')}}">List</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('brochureOrderList') ? 'active' : '' }}" href="{{route('brochureOrderList')}}">Order</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['video'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['video'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/video.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/video-hover.svg')}}" alt="Icon"> Video management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['video'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->routeIs('addVideo') ? 'active' : '' }}" href="{{route('addVideo')}}">Add</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('videoList') ? 'active' : '' }}" href="{{route('videoList')}}">List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['order'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['order'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/order.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/order-hover.svg')}}" alt="Icon"> Order management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['order'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->routeIs('orderList') ? 'active' : '' }}" href="{{route('orderList')}}">Order</a></li>
                    </ul>
                </li>
                <li>
                    <a class="{{ $activeRoutes['report'] ? 'active' : '' }}" href="#">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/report.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/report-hover.svg')}}" alt="Icon"> Report management
                    </a>
                </li>
                <li>
                    <a class="{{ $activeRoutes['chat'] ? 'active' : '' }}" href="live-chat.html">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/livechat.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/livechat-hover.svg')}}" alt="Icon"> Live chat
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['employee'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['employee'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/employees.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/employees-hover.svg')}}" alt="Icon"> Employees
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['employee'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->routeIs('addEmployee') ? 'active' : '' }}" href="{{route('addEmployee')}}">Add Employees</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('employeeList') ? 'active' : '' }}" href="{{route('employeeList')}}">List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['role'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['role'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/role.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/role-hover.svg')}}" alt="Icon"> Role Permission
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['role'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->routeIs('addRole') ? 'active' : '' }}" href="{{route('addRole')}}">Add</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('roleList') ? 'active' : '' }}" href="{{route('roleList')}}">List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['category'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['brochure'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/task-square.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/task-square-hover.svg')}}" alt="Icon"> Category
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['category'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->routeIs('addCategory') ? 'active' : '' }}" href="{{route('addCategory')}}">Add</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('categoryList') ? 'active' : '' }}" href="{{route('categoryList')}}">List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['content'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['content'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/cms.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/cms-hover.svg')}}" alt="Icon">
                        Content management
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['content'] ? 'show' : '' }}">
                        <li><a class="dropdown-item {{ request()->routeIs('contentList') && request()->route('type') == 'privacy-policy' ? 'active' : '' }}" href="{{route('contentList',['type' => 'privacy-policy'])}}">Privacy Policy</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('contentList') && request()->route('type') == 'terms-conditions' ? 'active' : '' }}" href="{{route('contentList',['type' => 'terms-conditions'])}}">Terms & Conditions</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('contentList') && request()->route('type') == 'cancellation-policy' ? 'active' : '' }}" href="{{route('contentList',['type' => 'cancellation-policy'])}}">Cancellation Policy</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('contentList') && request()->route('type') == 'cookies' ? 'active' : '' }}" href="{{route('contentList',['type' => 'cookies'])}}">Cookies</a></li>
                    </ul>
                </li>
                <li>
                    <a class="{{ $activeRoutes['support'] ? 'active' : '' }}" href="{{route('supportList')}}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/support.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/support-hover.svg')}}" alt="Icon"> Support
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-link {{ $activeRoutes['withdraw'] ? 'active show' : '' }}" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="{{ $activeRoutes['withdraw'] ? 'true' : 'false' }}">
                        <img class="image-default" src="{{ asset('/assets_admin/images/menu-icon/withdraw.svg')}}" alt="Icon">
                        <img class="image-hover" src="{{ asset('/assets_admin/images/menu-icon/withdraw-hover.svg')}}" alt="Icon"> Withdraw
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu {{ $activeRoutes['withdraw'] ? 'show' : '' }}"> 
                        <li><a class="dropdown-item {{ request()->routeIs('withdrawList') ? 'active' : '' }}" href="{{route('withdrawList')}}">Withdraw</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('withdrawAgentDetail') ? 'active' : '' }}" href="{{route('withdrawAgentDetail')}}">Withdraw Agent Detail</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

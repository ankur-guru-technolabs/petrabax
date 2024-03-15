<div class="user-profile-menu ms-auto">
    <div class="dropdown">
        @if(Auth::user()->profile_image && file_exists(public_path('/profile/'.Auth::user()->profile_image)))
        <a class="dropdown-toggle user-dropdown-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin <img src="{{ asset('/profile/'.Auth::user()->profile_image) }}" alt="User"></a>
        @else
        <a class="dropdown-toggle user-dropdown-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin <img src="{{asset('assets_admin/images/user.png')}}" alt="User"></a>
        @endif
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#logoutmodal">Log out</a></li>
        </ul>
    </div>
</div>
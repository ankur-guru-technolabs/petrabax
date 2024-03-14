<!DOCTYPE html>
<html lang="en">
    @include('admin.Common.header')
    <body>
        @if(Auth::guest())
            <div class="admin-sidein-section">
        @else
            <div class="admin-dashboard-main">
                @include('admin.Common.sidebar')
        @endif
                @yield('content')
            </div>
            @include('admin.Common.footer')
            @yield('jscontent')
    </body>
    <div class="modal fade logoutmodal" id="logoutmodal" tabindex="-1" aria-labelledby="logoutmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="logout-content">
                        <h2>Log out</h2>
                        <p>Are you sure you want to logout?</p>
                        <div class="logout-modal-btn-list">
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <button type="submit" class="btn btn-primary">Log out</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>

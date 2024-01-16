<div class="top-menu-box">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-4 left-logo-block">
            <a href="{{route('/')}}" class="site-logo desktop-logo">Petrabax</a>
        </div>
        <div class="col-8 right-signup-btn">
            @if(Auth::guest() || Auth::user()->type == 'admin')
            <a href="{{route('register')}}" class="site-login-btn signup-btn">Sign Up</a>
            <a href="{{route('login')}}" class="site-login-btn login-btn">Login</a>
            @endif
                <button class="navbar-toggler site-menu-switch  d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
        </button>
        </div>
        </div>
    </div>  
</div>
<nav class="navbar navbar-expand-lg sitemain-menu">
    <div class="container">
        <a class="navbar-brand mobile-menu d-none" href="{{route('/')}}">Petrabax</a>
        @php
            $activeRoutes = [
                'home' => request()->routeIs('/'),
                'hotel' => request()->routeIs('hotels') || request()->routeIs('hotelsList') || request()->routeIs('hotelDetails') || request()->routeIs('paradores'),
                'transfer' => request()->routeIs('support'),
                'train' => request()->routeIs('support'),
                'tour' => request()->routeIs('support'),
                'car' => request()->routeIs('support'),
                'road' => request()->routeIs('support'),
                'spanish' => request()->routeIs('support'),
                'cart' => request()->routeIs('cart'),
            ];
        @endphp
        <div
            class="collapse navbar-collapse"
            id="navbarSupportedContent"
        >
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['home'] ? 'active' : '' }}" href="{{route('/')}}"
                        >Home
                        <svg class="menu-icon-svg" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.26898 2.60364L3.32815 6.45364C2.50315 7.09531 1.83398 8.46114 1.83398 9.49698V16.2895C1.83398 18.4161 3.56648 20.1578 5.69315 20.1578H16.3082C18.4348 20.1578 20.1673 18.4161 20.1673 16.2986V9.62531C20.1673 8.51614 19.4248 7.09531 18.5173 6.46281L12.8523 2.49365C11.569 1.59531 9.50648 1.64115 8.26898 2.60364Z" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M11 16.4912V13.7412" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                        </svg>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $activeRoutes['hotel'] ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hotel
                        <svg class="menu-icon-svg" width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.2923 20.1663H4.95898C3.12565 20.1663 2.20898 19.2497 2.20898 17.4163V10.083C2.20898 8.24967 3.12565 7.33301 4.95898 7.33301H9.54232V17.4163C9.54232 19.2497 10.459 20.1663 12.2923 20.1663Z" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M9.64314 3.66699C9.5698 3.94199 9.54232 4.24449 9.54232 4.58366V7.33366H4.95898V5.50033C4.95898 4.49199 5.78398 3.66699 6.79232 3.66699H9.64314Z" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M13.209 7.33301V11.9163" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M16.875 7.33301V11.9163" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M15.959 15.583H14.1257C13.6215 15.583 13.209 15.9955 13.209 16.4997V20.1663H16.8757V16.4997C16.8757 15.9955 16.4632 15.583 15.959 15.583Z" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M5.875 11.917V15.5837" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M9.54102 17.4163V4.58301C9.54102 2.74967 10.4577 1.83301 12.291 1.83301H17.791C19.6243 1.83301 20.541 2.74967 20.541 4.58301V17.4163C20.541 19.2497 19.6243 20.1663 17.791 20.1663H12.291C10.4577 20.1663 9.54102 19.2497 9.54102 17.4163Z" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                            />
                        </svg>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item active" href="{{route('hotels')}}">Hotels</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('paradores')}}">Paradores of Spain</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('paradores')}}">Paradores of Portugal</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['transfer'] ? 'active' : '' }}" href="#"
                        >Transfers & Day Trips
                        <svg class="menu-icon-svg" width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.53305 5.79347L15.3155 3.19931C18.808 2.03514 20.7055 3.94181 19.5505 7.43431L16.9564 15.2168C15.2147 20.451 12.3547 20.451 10.613 15.2168L9.84305 12.9068L7.53305 12.1368C2.29888 10.3951 2.29888 7.54431 7.53305 5.79347Z" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M10.0176 12.5135L13.2992 9.22266" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['train'] ? 'active' : '' }}" href="#"
                        >Trains
                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.83268 20.1663H13.416M7.45768 1.83301H14.791M11.1243 4.58301V1.83301M3.79102 10.9997H18.4577M15.7077 17.4163L17.0827 20.1663M6.54102 17.4163L5.16602 20.1663M7.91602 14.208H7.92518M14.3327 14.208H14.3418M8.19102 17.4163H14.0577C15.5978 17.4163 16.3679 17.4163 16.9562 17.1166C17.4736 16.853 17.8943 16.4323 18.158 15.9148C18.4577 15.3266 18.4577 14.5565 18.4577 13.0163V8.98301C18.4577 7.44286 18.4577 6.67279 18.158 6.08453C17.8943 5.56709 17.4736 5.14639 16.9562 4.88274C16.3679 4.58301 15.5978 4.58301 14.0577 4.58301H8.19102C6.65087 4.58301 5.8808 4.58301 5.29254 4.88274C4.7751 5.14639 4.3544 5.56709 4.09075 6.08453C3.79102 6.67279 3.79102 7.44286 3.79102 8.98301V13.0163C3.79102 14.5565 3.79102 15.3266 4.09075 15.9148C4.3544 16.4323 4.7751 16.853 5.29254 17.1166C5.8808 17.4163 6.65087 17.4163 8.19102 17.4163ZM8.37435 14.208C8.37435 14.4611 8.16915 14.6663 7.91602 14.6663C7.66289 14.6663 7.45768 14.4611 7.45768 14.208C7.45768 13.9549 7.66289 13.7497 7.91602 13.7497C8.16915 13.7497 8.37435 13.9549 8.37435 14.208ZM14.791 14.208C14.791 14.4611 14.5858 14.6663 14.3327 14.6663C14.0796 14.6663 13.8743 14.4611 13.8743 14.208C13.8743 13.9549 14.0796 13.7497 14.3327 13.7497C14.5858 13.7497 14.791 13.9549 14.791 14.208Z" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['tour'] ? 'active' : '' }}" href="#"
                        >Tours
                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.2507 2.25266C13.3825 1.98 12.4588 1.83301 11.5007 1.83301C6.43804 1.83301 2.33398 5.93706 2.33398 10.9997C2.33398 16.0623 6.43804 20.1663 11.5007 20.1663C16.5633 20.1663 20.6673 16.0623 20.6673 10.9997C20.6673 9.42729 20.2714 7.94738 19.5739 6.65417M16.084 5.27051H16.0886M10.1257 20.0639L10.1258 18.0442C10.1258 17.9348 10.1649 17.829 10.2361 17.7459L12.5148 15.0875C12.702 14.869 12.644 14.534 12.3942 14.3912L9.77597 12.8951C9.70484 12.8544 9.6459 12.7955 9.60529 12.7243L7.89857 9.73342C7.80975 9.57776 7.63834 9.48815 7.45983 9.50405L2.39282 9.95536M19.7507 5.49967C19.7507 7.52472 17.9173 9.16634 16.084 10.9997C14.2507 9.16634 12.4173 7.52472 12.4173 5.49967C12.4173 3.47463 14.0589 1.83301 16.084 1.83301C18.109 1.83301 19.7507 3.47463 19.7507 5.49967ZM16.3132 5.27051C16.3132 5.39707 16.2105 5.49967 16.084 5.49967C15.9574 5.49967 15.8548 5.39707 15.8548 5.27051C15.8548 5.14394 15.9574 5.04134 16.084 5.04134C16.2105 5.04134 16.3132 5.14394 16.3132 5.27051Z" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['car'] ? 'active' : '' }}" href="#"
                        >Cars
                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.0026 6.98535H7.1718C5.4668 6.98535 5.0818 7.83787 4.87097 8.89203L4.0918 12.6045H15.0918L14.3126 8.89203C14.0835 7.83787 13.7076 6.98535 12.0026 6.98535Z" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M16.4485 18.664C16.5218 19.4707 15.8801 20.1674 15.0551 20.1674H13.7626C13.0201 20.1674 12.9193 19.8465 12.7818 19.4615L12.6443 19.0491C12.4518 18.4899 12.3235 18.1049 11.3335 18.1049H7.81347C6.82347 18.1049 6.6768 18.5357 6.50263 19.0491L6.36514 19.4615C6.2368 19.8557 6.13596 20.1674 5.3843 20.1674H4.09179C3.26679 20.1674 2.61597 19.4707 2.69847 18.664L3.08347 14.4749C3.1843 13.439 3.3768 12.5957 5.18263 12.5957H13.9551C15.761 12.5957 15.9535 13.439 16.0543 14.4749L16.4485 18.664Z" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M4.08203 10.542H3.39453" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M15.7695 10.542H15.082" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M5.45703 15.3545H7.51953" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M11.6445 15.3545H13.707" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M18.0259 8.01181C18.2825 7.41598 18.1909 6.60933 17.7142 5.90349C17.2467 5.19766 16.5317 4.80349 15.8809 4.81266" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M20.8772 8.91882C21.2622 7.53466 20.9872 5.83886 20.0064 4.37219C19.0256 2.90553 17.5589 2.00717 16.1289 1.83301" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['road'] ? 'active' : '' }}" href="#"
                        >Santiago's Road
                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.14771 4.21664C2.88105 1.04497 7.65688 1.04497 8.38105 4.21664C8.81188 6.07747 7.62938 7.65414 6.60271 8.63497C5.85105 9.34997 4.66855 9.34081 3.91688 8.63497C2.89938 7.65414 1.71688 6.07747 2.14771 4.21664Z" stroke="#498C92" stroke-width="1.5"
                            />
                            <path
                                d="M14.0637 15.2166C14.797 12.045 19.6003 12.045 20.3337 15.2166C20.7645 17.0775 19.582 18.6541 18.5462 19.635C17.7945 20.35 16.6028 20.3408 15.8512 19.635C14.8153 18.6541 13.6328 17.0775 14.0637 15.2166Z" stroke="#498C92" stroke-width="1.5"
                            />
                            <path
                                d="M11.2505 4.58301H13.7072C15.403 4.58301 16.1914 6.68217 14.9172 7.80051L7.59304 14.208C6.31887 15.3172 7.10721 17.4163 8.79387 17.4163H11.2505" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M5.27842 5.04134H5.28901" stroke="#498C92" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M17.1964 16.0413H17.207" stroke="#498C92" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['spanish'] ? 'active' : '' }}" href="#"
                        >In Spanish
                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.6257 20.1663C16.6883 20.1663 20.7923 16.0623 20.7923 10.9997C20.7923 5.93706 16.6883 1.83301 11.6257 1.83301C6.56304 1.83301 2.45898 5.93706 2.45898 10.9997C2.45898 16.0623 6.56304 20.1663 11.6257 20.1663Z" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M7.95911 2.75H8.87578C7.08828 8.10333 7.08828 13.8967 8.87578 19.25H7.95911" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M14.375 2.75C16.1625 8.10333 16.1625 13.8967 14.375 19.25" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M3.375 14.6667V13.75C8.72833 15.5375 14.5217 15.5375 19.875 13.75V14.6667" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M3.375 8.2498C8.72833 6.4623 14.5217 6.4623 19.875 8.2498" stroke="#498C92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeRoutes['cart'] ? 'active' : '' }}" href="{{route('cart')}}"
                        >Cart
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.83398 1.83301H3.42899C4.41899 1.83301 5.19815 2.68551 5.11565 3.66634L4.35482 12.7963C4.22648 14.2905 5.40898 15.5738 6.91231 15.5738H16.6748C17.9948 15.5738 19.1498 14.4922 19.2507 13.1813L19.7456 6.30635C19.8556 4.78468 18.7006 3.54717 17.1698 3.54717H5.33566" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M14.8958 20.1667C15.5287 20.1667 16.0417 19.6537 16.0417 19.0208C16.0417 18.388 15.5287 17.875 14.8958 17.875C14.263 17.875 13.75 18.388 13.75 19.0208C13.75 19.6537 14.263 20.1667 14.8958 20.1667Z" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M7.56185 20.1667C8.19468 20.1667 8.70768 19.6537 8.70768 19.0208C8.70768 18.388 8.19468 17.875 7.56185 17.875C6.92902 17.875 6.41602 18.388 6.41602 19.0208C6.41602 19.6537 6.92902 20.1667 7.56185 20.1667Z" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                            />
                            <path
                                d="M8.25 7.33301H19.25" stroke="#498C92" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
                            />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

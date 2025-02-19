<header class="atf-site-header atf-style1 atf-sticky-header">
    <div class="atf-top-header">
        <div class="container">
            <div class="row">
                <div class="atf-top-header-in">
                    <ul class="atf-top-header-list">
                        <li><i class="icofont-envelope"></i>Email: <a href="#">example@gmail.com</a></li>
                        <li><i class="icofont-phone"></i>Contact: <a href="#">2222-333-7889 </a></li>
                        <li><i class="icofont-wall-clock"></i>Work time: <a href="#">9:00AM - 16:00PM</a>
                        </li>
                    </ul>
                    <ul class="loginform text-center atf-align-items-center">
                        <li class="login_click loginicon light">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#login">Login</a>
                        </li>
                        <li class="login_click theme-bg">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#signup">Sign up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="atf-main-header">
        <div class="container">
            <div class="row">
                <div class="atf-main-header-in">
                    <div class="atf-main-header-left">
                        <a class="atf-site-branding atf-white-logo" href="{{ route('home') }}" wire:navigate>
                            <img src="{{ asset('assets/img/logo.png') }}" alt="edugarden" />
                        </a>
                    </div>
                    <div class="atf-main-header-right">
                        <div class="atf-nav">
                            <ul class="atf-nav-list atf-onepage-nav">
                                <li><a href="{{ route('home') }}" class="atf-smooth-move" wire:navigate>Home</a></li>
                                <li><a href="{{ route('courses') }}" class="atf-smooth-move" wire:navigate>Courses</a>
                                </li>
                                <li><a href="{{ route('about_us') }}" class="atf-smooth-move" wire:navigate>About Us</a>
                                </li>
                                <li><a href="{{ route('verify_certificate') }}" class="atf-smooth-move" wire:navigate>Verify</a>
                                </li>
                                <li><a href="{{ route('contact_us') }}" class="atf-smooth-move" wire:navigate>Contact
                                        Us</a></li>
                                <li><a href="{{ route('admin.home') }}" class="atf-smooth-move" wire:navigate>Dashboard</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
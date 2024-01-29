<header class="site-header header mo-left">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion">
                    <a href="{{ route('home') }}" class="dez-page"><img src="{{ asset('build/images/logo.png') }}" alt=""></a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header mostion">
                        <a href="{{ route('home')}}" class="dez-page"><img src="{{ asset('build/images/logo-black.png') }}" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="{{ request()->routeIs('courses.form') ? 'active' : '' }}"><a href="{{ route('courses.form') }}">Add Courses</a></li>
                        <li class="{{ request()->routeIs('notifications.create') ? 'active' : '' }}"><a href="{{ route('notifications.create') }}">Add Notifications</a></li>
                        <li class="{{ request()->routeIs('pdf.showForm') ? 'active' : '' }}"><a href="{{ route('pdf.showForm') }}">Upload PDF</a></li>
                        <li class="{{ request()->routeIs('logout') ? 'active' : '' }}"><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>

<script>
    // JavaScript code for setting active state dynamically
    $(document).ready(function() {
        var path = window.location.pathname;
        $('ul.navbar-nav li').removeClass('active');
        $('ul.navbar-nav li a').each(function() {
            if ($(this).attr('href') === path) {
                $(this).closest('li').addClass('active');
            }
        });
    });
</script>

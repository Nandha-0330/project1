<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo">
            <img src="img/prime-likes-logo-grey.png" alt="" class="img-fluid">
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto active" href="index.html">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Instagram Services</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('/instagram?value=likes') }}">Instagram Likes</a>
                        </li>
                        <li>
                            <a href="{{ url('/instagram?value=followers') }}">Instagram Followers</a>
                        </li>
                        <li>
                            <a href="{{ url('/instagram?value=views') }}">Instagram Views</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Facebook Services</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('/facebook?value=followers') }}">Facebook Followers</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Youtube Services</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('/youtube?value=subscribers') }}">Youtube Subscribers</a>
                        </li>
                        
                    </ul>
                </li>
                <!-- <li class="dropdown">
                    <a href="#">
                        <span>Free Threads Services</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="free-threads-followers.html">Free Threads Followers</a>
                        </li>
                        <li>
                            <a href="free-threads-likes.html">Free Threads Likes</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->

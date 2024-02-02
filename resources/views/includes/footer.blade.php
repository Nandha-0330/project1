<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Pages</h4>
                    <ul>
                        <li>
                            <a href="https://www.prime-likes.com/">Home</a>
                        </li>
                        <li>
                            <a href="cookie-policy.html">Cookie policy</a>
                        </li>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Instagram Services</h4>
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
                </div>
                
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Facebook Services</h4>
                    <ul>
                        
                        <li>
                            <a href="{{ url('/facebook?value=followers') }}">Facebook Followers</a>
                        </li>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Youtube Services</h4>
                    <ul>
                        
                        <li>
                            <a href="{{ url('/youtube?value=subscribers') }}">Youtube Subscribers</a>
                        </li>
                </div>
                
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<section class="instagram-post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="instaPost-slider-wrapper">
                    <div class="instaPost-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="insta-single">
                                <img src="{{ asset('public/images/slider-insta-post-1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="insta-single">
                                <img src="{{ asset('public/images/slider-insta-post-2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="insta-single">
                                <img src="{{ asset('public/images/slider-insta-post-3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="insta-single">
                                <img src="{{ asset('public/images/slider-insta-post-4.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="insta-single">
                                <img src="{{ asset('public/images/slider-insta-post-5.png') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="insta-single">
                                <img src="{{ asset('public/images/slider-insta-post-6.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="instaPost-follow">
                        <a href="#" class="btn-style-b">follow @ instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer-area">
    <div class="footer-widget border-top-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="fw-left">
                        <div class="footer-logo">
                            <img src="{{ asset('public/images/common-logo-2.png') }}" alt="">
                        </div>
                        <div class="footer-text">
                            <p>I&rsquo;m a location independent blogger, digital influencer, small group tour
                                organizer and world traveler with a serious passion for the sun, the sea and
                                adventure. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="fw-single footer-contact">
                                <h4>Contact Me</h4>
                                <ul class="fws">
                                    <li><span>Add: Dhaka, Bangladesh</li>
                                    <li><span>E:</span> <a href="#" class="__cf_email__"> support@vromon-kahini.com</a>
                                    </li>
                                    <li><span>W:</span> www.vromon-kahini.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="fw-single footer-links">
                                <h4>Account</h4>
                                <ul class="fws">
                                    <li><a href="#">My Lists</a></li>
                                    <li><a href="#">My Info</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="fw-single">
                                <h4>Travel</h4>
                                <ul class="fws footer-links">
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Why Travel</a></li>
                                    <li><a href="#">Become a Traveler</a></li>
                                    <li><a href="#">How Its Works</a></li>
                                    <li><a href="#">Traveling FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="fc-left">
                        <ul class="fc-social">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fc-right">
                        <ul>
                            <li>
                                <p>&copy; 2022 VromonKahini. All rights reserved</p>
                            </li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script data-cfasync="false" src="{{ asset('public/js/cloudflare-static-email-decode.min.js') }}"></script>
<script src="{{ asset('public/js/js-jquery-3.2.0.min.js') }}"></script>

<script src="{{ asset('public/js/js-jquery-ui.js') }}"></script>

<script src="{{ asset('public/js/js-owl.carousel.min.js') }}"></script>

<script src="{{ asset('public/js/js-jquery.counterup.min.js') }}"></script>

<script src="{{ asset('public/js/js-jquery.scrollUp.js') }}"></script>

<script src="{{ asset('public/js/js-jquery.waypoints.min.js') }}"></script>

<script src="{{ asset('public/js/js-bootstrap.min.js') }}"></script>

<script src="{{ asset('public/js/js-theme.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- show message --}}
@if (session()->has('message'))
    <script>
        toastr.success('{{ session('message') }}')
    </script>
@endif

@yield('footer')

</body>

</html>
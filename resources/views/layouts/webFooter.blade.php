<footer id="footer" class="footer style-01">
    <div class="section-001 section-009">
        <div class="container">
            <div class="kobolg-newsletter style-01">
                <div class="newsletter-inner">
                    <div class="newsletter-info">
                        <div class="newsletter-wrap">
                            <h3 class="title">Newsletter</h3>
                            <h4 class="subtitle">Get Discount 30% Off</h4>
                            <p class="desc">Suspendisse netus proin eleifend fusce sollicitudin potenti vel magnis
                                nascetur</p>
                        </div>
                    </div>
                    <div class="newsletter-form-wrap">
                        <div class="newsletter-form-inner">
                            <input class="email email-newsletter" name="email" placeholder="Enter your email ..." type="email">
                            <a href="#" class="button btn-submit submit-newsletter">
                                <span class="text">Subscribe</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-010">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© Copyright 2020 <a href="#">Kobolg</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6">
                    <div class="kobolg-socials style-01">
                        <div class="content-socials">
                            <ul class="socials-list">
                                <li>
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com" target="_blank">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="index.html">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Home
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="wishlist.html">
					<span class="icon">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</span>
                Wishlist
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="cart.html">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
							0
						</span>
					</span>
                <span class="text">Cart</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">
            <a href="my-account.html">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                Account
            </a>
        </div>
    </div>
</div>
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
<script src="{{url('/')}}/webAssets/js/jquery-1.12.4.min.js"></script>
<script src="{{url('/')}}/webAssets/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/webAssets/js/chosen.min.js"></script>
<script src="{{url('/')}}/webAssets/js/countdown.min.js"></script>
<script src="{{url('/')}}/webAssets/js/jquery.scrollbar.min.js"></script>
<script src="{{url('/')}}/webAssets/js/lightbox.min.js"></script>
<script src="{{url('/')}}/webAssets/js/magnific-popup.min.js"></script>
<script src="{{url('/')}}/webAssets/js/slick.js"></script>
<script src="{{url('/')}}/webAssets/js/jquery.zoom.min.js"></script>
<script src="{{url('/')}}/webAssets/js/threesixty.min.js"></script>
<script src="{{url('/')}}/webAssets/js/jquery-ui.min.js"></script>
<script src="{{url('/')}}/webAssets/js/mobilemenu.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script src="{{url('/')}}/webAssets/js/functions.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script>
        function toggleDarkMode() {
            const body = document.body;
            const sunIcon = document.getElementById('sunIcon');
            const moonIcon = document.getElementById('moonIcon');

            body.classList.toggle('dark-mode');
            const isDarkMode = body.classList.contains('dark-mode');
            sunIcon.style.display = isDarkMode ? 'none' : 'inline';
            moonIcon.style.display = isDarkMode ? 'inline' : 'none';

            // Save the dark mode preference in the session
            fetch('{{ route('toggle-dark-mode') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ dark_mode: isDarkMode }),
            });
        }
    </script>
</body>
</html>
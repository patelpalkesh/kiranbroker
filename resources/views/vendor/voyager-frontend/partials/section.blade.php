
@if(!Request::is('/'))
	<section class="inner-banner-img" style="background-image: url(http://127.0.0.1:8000@yield('page_banner'));">
		<div class="container">
			<div class="row d-flex">
				<div class="col-lg-12 col-md-12 col-sm-12">
					@yield('page_title')
				</div>
			</div>
		</div>
	</section>
@endif
@yield('content')
<!--Contact Bottom--> 
<section class="footer-options">
    <div class="container whitebox">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="widget  top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="far fa-comment"></i></span>
                        <h4>Chat With Us</h4>
                        <p><a href="https://wa.me/+17042931105">WhatsApp Chat </a></p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="fas fa-headset"></i></span>
                        <h4>Phone Support</h4>
                        <p>(704) 293 1105</p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="fas fa-map-marker-alt"></i></span>
                        <h4>Location</h4>
                        <p>Charlotte,nc 28269 </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget top60 w-100">
                    <div class="contact-box">
                        <span class="icon-contact defaultcolor"><i class="far fa-user"></i></span>
                        <h4>We are Socials</h4>
                        <ul class="social-icons mb-sm-0 wow fadeInUp" data-wow-delay="300ms">
                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Bottom ends-->

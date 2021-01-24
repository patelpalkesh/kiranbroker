<footer id="site-footer" class=" bgdark padding_top margin_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center ">
                <span class="footer-logo"><img src="{{ asset('asset/images/fevicon.png') }}" alt="Kiran Broker" /></span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">We are Kiran Broker</h3>
                    <p class="whitecolor bottom25">Keep away from people who try to belittle your ambitions Small people always do that but the really great Friendly.</p>
                    <ul class="social-icons mb-sm-0 wow fadeInUp" data-wow-delay="300ms">
                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                    <h3 class="whitecolor bottom25">Our Properties</h3>
                    <ul class="links">
                        <li><a href="#">Property Name</a></li>
                        <li><a href="#">Property Name</a></li>
                        <li><a href="#">Property Name</a></li>
                        <li><a href="#">Property Name</a></li>
                        <li><a href="#">Property Name</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Quick Links</h3>

                    <ul class="links">
                        @foreach(menu('primary') as $menu_item)
                            @php ($hasChildren = count($menu_item->children) > 0)
                            <li>
                                <a  href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Official Info</h3>
                    <span><i class="fas fa-map-marker-alt"></i><p class="whitecolor bottom25">8604 Cliff Cameron Drive, charlotte,nc 28269</p> </span>
                    <span><i class="fas fa-mobile-alt"></i><p class="whitecolor bottom25">(704) 293 1105</p> </span>
                    <span><i class="fas fa-envelope"></i><p class="whitecolor bottom25"><a href="mailto:info@kiranbroker.com">info@kiranbroker.com</a></p> </span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer ends-->
<!--copyright-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn animated" data-wow-delay="300ms">
                <p class="m-0 py-3">Copyright © 2021 <a href="javascript:void(0)" class="hover-default">Kiran Broker</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>

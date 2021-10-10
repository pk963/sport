<!-- news letter -->
<section class="newsletter_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latter_wrap">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4 class="title">Join Our Newsletter</h4>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quia sint aliquam nam quas perferendis!</p>
                            </div>
                            <div class="col-md-6">
                                <div class="form_wrap">
                                    <form action="#">
                                        <div class="search_box">
                                            <input type="text" class="form-control" placeholder="Enter Your Email">
                                            <button class="btm btm_sub">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- footer -->
<footer class="footer-section">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-12">
                    <div class="latter_wrap">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4 class="title">Join Our Newsletter</h4>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quia sint aliquam nam quas perferendis!</p>
                            </div>
                            <div class="col-md-6">
                                <div class="form_wrap">
                                    <form action="#">
                                        <div class="search_box">
                                            <input type="text" class="form-control" placeholder="Enter Your Email">
                                            <button class="btm btm_sub">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-4">
                    <div class="foot mx_w">
                        <div class="foot_logo">
                            <img src="https://templatekit.jegtheme.com/topspin/wp-content/uploads/sites/109/2021/06/logoo-7R2T8P9.png" alt="" class="img-fluid">
                        </div>
                        <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis accusantium, doloremque reiciendis unde laborum aliquam.</p>
                        <ul class="list-unstyled adderss">
                            <li>
                                <i class="fas fa-map-marker"></i>
                                <span>Jl. Sunset Road No.815, Kuta</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>support@domain.com</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <span>(+62)81 6724 125</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row row-cols-md-3 row-cols-1">
                        <div class="col">
                            <div class="foot">
                                <h4 class="title">Quick Links</h4>
                                <ul class="list-unstyled ul_link">
                                    <li><a href="#" class="link">About Us</a></li>
                                    <li><a href="#" class="link">Services</a></li>
                                    <li><a href="#" class="link">Course</a></li>
                                    <li><a href="#" class="link">Pricing</a></li>
                                    <li><a href="#" class="link">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="foot">
                                <h4 class="title">Useful Links</h4>
                                <ul class="list-unstyled ul_link">
                                    <li><a href="#" class="link">Privacy Policy</a></li>
                                    <li><a href="#" class="link">Terms & Conditions</a></li>
                                    <li><a href="#" class="link">Disclaimer</a></li>
                                    <li><a href="#" class="link">Support</a></li>
                                    <li><a href="#" class="link">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="foot">
                                <h4 class="title">Work Hours</h4>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="icon_box">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <span>9 AM - 5 PM , Monday - Saturday</span>
                                    </li>
                                </ul>
                                <p class="text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, labore.</p>
                                <button type="button" class="btm btm_1">Join with Us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="b_foot">
                        <p class="text">Tennis School & Exclusive Club Template Kit by Pramod</p>
                        <p class="text">Copyright © 2021. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('.slide-image').each(function() {
            var bg = $(this).data("bg");
            var pos = $(this).data("kenburn-start");

            $(this).css({
                "background-image": "url("+bg+")",
                "transform-origin" : pos
            })
        })
        
        $(".kenburn-slider").flexslider({
            slideshow: true,
            slideshowSpeed: 4000,
            animationSpeed: 8000,
            controlNav: false,
        })

        // animation
        AOS.init();
    </script>
    
</body>
</html>
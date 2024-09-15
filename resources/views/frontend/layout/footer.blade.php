    <!-- Location -->
    <section class="location text-light py-5">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="far fa-map fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>ADDRESS</h6>
                        <p>Mulatol Bazzer, Rangpur City, Rangpur -5400</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="fas fa-mobile-alt fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>CALL FOR QUERY</h6>
                        <p>01891159120-21,01891159131</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="far fa-envelope fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>SEND US MESSAGE</h6>
                        <p>dewanenterprise55@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="far fa-clock fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>OPENING HOURS</h6>
                        <p>09:00 AM - 18:00 PM</p>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of location -->


    <section class="location text-light py-5">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <h3 class="text-center">Service Area</h3>
                @forelse ($areas as $area)
                    <div class="col-lg-2 d-flex align-items-center">
                        <div class="p-2"><i class="fas fa-map-marked"></i></div>
                        <div class="ms-2">
                           <h6 class="text-uppercase">{{ $area->name }}</h6>
                        </div>
                    </div>
                @empty

                @endforelse


            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>

  <!-- Footer -->
  <section class="footer text-light">
    <div class="container">
        <div class="row" data-aos="fade-right">
            <div class="col-lg-3 py-4 py-md-5">
                <div class="d-flex align-items-center text-center">
                    <h4 class="">DEWAN ENTERPRISE</h4>
                </div>
                <p class="py-4 para-light">
                    We offer high-speed internet and reliable connectivity solutions, ensuring seamless online experiences for both residential and business needs.
                </p>
                <div class="d-flex justify-content-center">
                    <div class="me-3">
                        <a href="https://www.facebook.com/DB0121/?_rdr" target="_blank">
                            <i class="fab fa-facebook-f fa-2x py-2"></i>
                        </a>
                    </div>
                    {{-- <div class="me-3">
                        <a href="#your-link">
                            <i class="fab fa-twitter fa-2x py-2"></i>
                        </a>
                    </div>
                    <div class="me-3">
                        <a href="#your-link">
                            <i class="fab fa-instagram fa-2x py-2"></i>
                        </a>
                    </div> --}}
                </div>
            </div> <!-- end of col -->

            <div class="col-lg-4 py-4 py-md-5 text-center">
                <div>
                    <h4 class="py-2">Quick Links</h4>
                    <div class="d-flex flex-column align-items-center">
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#about"><p class="ms-2">About</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#"><p class="ms-2">Services</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#"><p class="ms-2">Plans</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#"><p class="ms-2">Contact</p></a>
                        </div>
                    </div>
                </div>
            </div> <!-- end of col -->

            <div class="col-lg-4 py-4 py-md-5 text-center">
                <div>
                    <h4 class="py-2">Useful Links</h4>
                    <div class="d-flex flex-column align-items-center">
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link"><p class="ms-2">Privacy</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link"><p class="ms-2">Terms</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link"><p class="ms-2">Disclaimer</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link"><p class="ms-2">FAQ</p></a>
                        </div>
                    </div>
                </div>
            </div> <!-- end of col -->

        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
 <!-- end of footer -->


<!-- Bottom -->
<div class="bottom py-2 text-light" >
    <div class="container d-flex justify-content-between">
        <div>
            <p>Copyright © DEWAN ENTERPRISE</p><br>
            <p>Develop by: <a href="https://workers-den.se/">Worker’s Den</a></p>
        </div>
        <div>
            <i class="fab fa-cc-visa fa-lg p-1"></i>
            <i class="fab fa-cc-mastercard fa-lg p-1"></i>
            <i class="fab fa-cc-paypal fa-lg p-1"></i>
            <i class="fab fa-cc-amazon-pay fa-lg p-1"></i>
        </div>
    </div> <!-- end of container -->
</div> <!-- end of bottom -->


<!-- Back To Top Button -->
<button onclick="topFunction()" id="myBtn">
    <img src="{{ asset('frontend/assets/images/up-arrow.png') }}" alt="alternative">
</button>
<!-- end of back to top button -->

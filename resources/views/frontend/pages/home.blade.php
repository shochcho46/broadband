@extends('frontend.layout.app')

@push('custome-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
@endpush

@section('content')
    <!-- Home -->
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5"  data-aos="fade-right">
            <h1 class="headline">Best <span class="home_text">Broadband</span><br>Internet Plans For You</h1>
            <p class="para para-light py-3">
                Finding the best broadband internet plan is essential for both home and business users.
                DewanEnterprise offers affordable, high-speed plans tailored to your needs.
                Whether you choose Wi-Fi for wireless convenience or LAN for ultra-reliable performance,
                we ensure seamless connectivity at all times.
            </p>
            <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-laptop-house fa-lg"></i></p>
                <p>Uninterrupted speed, solid wired connection.</p>
            </div>
            <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-wifi fa-lg"></i></p>
                <p>Stay connected, wirelessly and effortlessly.</p>
            </div>
            <div class="my-3">
                <a class="btn" href="#plans">View Plans</a>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of home -->


    <!-- Information -->
    <section class="information">
        <div class="container-fluid">
            <div class="row text-light">
                <div class="col-lg-4 text-center p-5" data-aos="zoom-in">
                    <i class="fas fa-tachometer-alt fa-3x p-2"></i>
                    <h4 class="py-3">Download Lightning Speed</h4>
                    <p class="para-light">Download Lightning Speed for fast, efficient, and seamless file transfers</p>
                </div>
                <div class="col-lg-4 text-center p-5"  data-aos="zoom-in">
                    <i class="fas fa-clock fa-3x p-2"></i>
                    <h4 class="py-3">99% Internet Uptime</h4>
                    <p class="para-light">Internet uptime ensures continuous connectivity, reliability, productivity, and seamless access</p>
                </div>
                <div class="col-lg-4 text-center p-5 text-dark"  data-aos="zoom-in">
                    <i class="fas fa-headset fa-3x p-2"></i>
                    <h4 class="py-3">24/7 Support </h4>
                    <p class="para-light">24/7 support provides round-the-clock assistance for any urgent needs</p>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of information -->


    <!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <p>ABOUT US</p>
                    <h1>We are top internet <br> service company</h1>
                    <p class="py-2 para-light">
                        We are a top internet service company, dedicated to providing high-speed and reliable connectivity to our customers. With cutting-edge technology and a commitment to excellence, we ensure a seamless online experience.
                    </p>
                    <p class="py-2 para-light">
                        Our team offers 24/7 support to address any issues promptly, ensuring minimal downtime. Choose us for unmatched service, reliability, and the fastest internet speeds available.
                    </p>

                    {{-- <div class="my-3">
                        <a class="btn" href="#your-link">Learn More</a>
                    </div> --}}
                </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/about.jpg') }}" alt="about" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->


    <!-- Services -->
    <section class="services d-flex align-items-center py-5" id="services">
        <div class="container text-light">
            <div class="text-center pb-4" >
                <p>OUR SERVICES</p>
                <h2 class="py-2">Explore unlimited possibilities</h2>
                <p class="para-light">
                    Our services provide high-speed internet, 24/7 customer support, and reliable connectivity for homes and businesses. We offer tailored plans to meet diverse needs, ensuring fast, secure, and uninterrupted service to enhance your online experience with a focus on reliability and satisfaction.
                </p>
            </div>
            <div class="row gy-4 py-2" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-home fa-2x"></i>
                        <h4 class="py-2">HOME BROADBAND</h4>
                        <p class="para-light">
                            Enjoy fast, reliable internet connections with unlimited data for seamless browsing, streaming, and gaming experiences.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-wifi fa-2x"></i>
                        <h4 class="py-2"> HOME WIFI</h4>
                        <p class="para-light">
                            We provide expert installation and optimization for your home network, ensuring maximum coverage and speed.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-network-wired fa-2x"></i>
                        <h4 class="py-2">BUSINESS SOLUTION</h4>
                        <p class="para-light">
                            Tailored internet plans designed to meet the high demands of businesses for efficient, uninterrupted operations.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-shield-alt fa-2x"></i>
                        <h4 class="py-2">SECURE CONNECTION</h4>
                        <p class="para-light">
                            Keep your network safe with our advanced security features, protecting against potential cyber threats.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-ethernet fa-2x"></i>
                        <h4 class="py-2">HIGH SPEED INTERNET</h4>
                        <p class="para-light">
                            Enjoy fast, internet connections with unlimited data for browsing, streaming, and gaming experiences.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-cubes fa-2x"></i>
                        <h4 class="py-2">FLEXIBLE DATA PLANS</h4>
                        <p class="para-light">
                            Choose from a variety of customizable data plans to match your internet usage and budget needs.
                        </p>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of services -->


    <!-- Plans -->
    <section class="plans d-flex align-items-center py-5" id="plans">
        <div class="container text-light" >
            <div class="text-center pb-4">
                <p>OUR PLANS</p>
                <h2 class="py-2">Explore unlimited possibilities</h2>
                <p class="para-light">
                    Our data packages offer flexible, high-speed internet plans tailored to your needs. Enjoy unlimited data options with competitive pricing, ensuring seamless browsing, streaming, and online activities.
                </p>
            </div>
            <div class="row gy-4" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">BASIC BUNDLE</h4>
                        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <h4 class="py-3">$24/Month</h4>
                        <div class="my-3">
                            <a class="btn" href="#your-link" >View Plans</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">BUSINESS BUNDLE</h4>
                        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <h4 class="py-3">$99/Month</h4>
                        <div class="my-3">
                            <a class="btn" href="#your-link" >View Plans</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-transparent px-4" >
                        <h4 class="py-2">PREMIUM BUNDLE</h4>
                        <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <h4 class="py-3">$199/Month</h4>
                        <div class="my-3">
                            <a class="btn" href="#your-link" >View Plans</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->





    <!-- Contact -->
    <section class="contact d-flex align-items-center py-5" id="contact">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
                    <div style="width:90%">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <p>CONTACT</p>
                            <h2 class="py-2">Send your query</h2>
                            <p class="para-light">
                                Complete this form to request a new internet connection for your home.
                            </p>
                        </div>
                        <div>


                            <div class="form-group py-2">
                                <input type="text" class="form-control form-control-input" id="exampleFormControlInput1" placeholder="Enter name">
                            </div>


                            <div class="form-group py-2">
                                <input type="email" class="form-control form-control-input" id="exampleFormControlInput2" placeholder="Enter phone number">
                            </div>


                            <div class="form-group py-1">
                                <input type="email" class="form-control form-control-input" id="exampleFormControlInput3" placeholder="Enter email">
                            </div>
                            <div class="form-group py-2">
                                <textarea class="form-control form-control-input" id="exampleFormControlTextarea1" rows="6" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="my-3">
                            <a class="btn form-control-submit-button" href="#your-link">Submit</a>
                        </div>
                    </div> <!-- end of div -->
                </div> <!-- end of col -->
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
                    <img class="img-fluid d-none d-lg-block" src="{{ asset('frontend/assets/images/contactus.png') }}" alt="contact">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>

@endsection

@push('custome-js')

@endpush

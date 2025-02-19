@extends('layouts.app')

@section('content')
    <section id="contact" class="atf-contact-area atf-section-padding bg-f6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="atf-section-title">
                        <h2 class="atf-title-color">&nbsp;contact Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
                            veniam quis notruexercit dolor sit amet eget.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-4">
                <div class="col-12 col-md-6 col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="atf-contact-address">
                        <div class="atf-contact-icon"><i class="icofont-google-map"></i></div>
                        <div class="atf-contact-phone">
                            <h5>Our Home Address</h5>
                            <p><a href="#">Canada Place, </a><br><a href="#"> Sidney, BC, Canada</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="atf-contact-address">
                        <div class="atf-contact-icon"><i class="icofont-envelope"></i></div>
                        <div class="atf-contact-phone">
                            <h5>Our Email Address</h5>
                            <p><a href="#">info@business.com</a></p>
                            <p><a href="#">support@business.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="atf-contact-address">
                        <div class="atf-contact-icon"><i class="icofont-phone"></i></div>
                        <div class="atf-contact-phone">
                            <h5>Our Phone</h5>
                            <p><a href="#">+1 (424) 652-5294</a></p>
                            <p><a href="#">+1 (424) 652-5282.</a></p>
                        </div>
                    </div>
                </div>
            </div>

            @livewire('test')
            <div class="row mt-5 pt-4">
                <div class="col-12 col-md-6 col-lg-6 wow fadeIn" data-wow-delay=".2s">
                    <form id="contact-form" action="mail.php" method="post" class="contactForm">

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group"><input class="form-control form-control" type="text"
                                        id="name" name="name" placeholder="Your name" required="" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group"><input class="form-control form-control" type="text"
                                        autocomplete="off" id="email_1" name="email" placeholder="Your Email"
                                        required="" /></div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="form-group"><input class="form-control form-control" type="text"
                                        autocomplete="off" id="phone" name="phone" placeholder="Your Phone"
                                        required="" /></div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control form-control" autocomplete="off" cols="30" id="message" name="message"
                                        placeholder="Enter your message" required="" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="atf-hero-btn"><button type="submit" class="atf-main-btn">Send
                                        Message</button></div>
                            </div>
                        </div>
                    </form>
                    <div id="error-message" class="text-left mt-3"></div>
                    <div id="form-messages" class="text-left mt-3"></div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="atf-google-map mt-md-40"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.764530126784!2d90.37238931424376!3d23.755774894489523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf534c0809ff%3A0xab142c55845030d2!2sEducationUSA%20Advising%20Center!5e0!3m2!1sen!2sbd!4v1672504311283!5m2!1sen!2sbd"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('front.layouts.app')
@section('content')
    <!-- page-banner-section
       ================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <h1>Contacts</h1>
            <span>Get in touch</span>
        </div>
    </section>
    <!-- End page-banner section -->

    <!-- page-ban-list -->
    <div class="container">
        <ul class="page-ban-list">
            <li><a href="{{ route('front.index') }}">Home</a></li>
            <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
        </ul>
    </div>
    <!-- end page-ban-list -->


    <!-- contact-section
                    ================================================== -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-box">
                <div class="title-section">
                    <h2>Contact Us</h2>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm reminusto <br>
                        doeiusmod tempor condorico consectetur adipiscing elitut aliquip.</span>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="open-info">
                            <h3>Openning Hours:</h3>
                            <div class="info-line">
                                <i class="fa fa-clock-o"></i>
                                <p>
                                    <span>Monday - Thursday:</span> 08AM - 10PM <br>
                                    <span>Friday - Saturday:</span> 10AM - 11:30PM <br>
                                    <span>Sunday:</span> 1PM - 10PM
                                </p>
                            </div>
                            <div class="info-line">
                                <i class="fa fa-calendar-check-o"></i>
                                <p>
                                    <span>Booking Time:</span> 24/7 Hours
                                </p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <h3>Contact Info</h3>
                            <p><i class="fa fa-map-marker"></i>Avenue Marina 34568 NY (U.S)</p>
                            <p><i class="fa fa-phone"></i>+0987 193-34-76</p>
                            <p><i class="fa fa-envelope"></i>infosupport@mail.com</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data"
                            id="contact-form">
                            @csrf
                            <label for="name">Your Name:</label>
                            <input name="name" id="name" type="text" placeholder="Enter your name">
                            <label for="mail">Email:</label>
                            <input name="email" id="mail" type="email" placeholder="Enter your email">
                            <label for="mail">Phone:</label>
                            <input name="phone" id="phone" type="number" placeholder="Enter your number">
                            <label for="comment">Message:</label>
                            <textarea name="message" id="comment" placeholder="Enter message"></textarea>
                            <input type="submit" >
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End contact section -->
@endsection

	@extends('front.layouts.app')
    @section('content')
    <!-- page-banner-section
			================================================== -->
            <section class="page-banner-section" style="background: #111 url({{asset('uploads/files/'.$reservation[0]->link)}}) center center no-repeat;
                background-size: cover;">
                <div class="container">
                    <h1>Book A Table</h1>
                    <span>Reservation</span>
                </div>
            </section>
            <!-- End page-banner section -->

            <!-- page-ban-list -->
            <div class="container">
                <ul class="page-ban-list">
                    <li><a href="{{route('front.index')}}">Home</a></li>
                    <li><a href="{{route('front.reservation')}}">Book a Table</a></li>
                </ul>
            </div>
            <!-- end page-ban-list -->


            <!-- contact-section
                ================================================== -->
            <section class="contact-section">
                <div class="container">
                    <div class="contact-box">
                        <div class="title-section">
                            <h2>Book a Table</h2>
                            <span>Book a table in our space for the first service</span>
                        </div>
                        {{--session message--}}
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form method="POST" action="{{route('front.reserve')}}" id="reservation-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Your Name:</label>
                                    <input name="name" id="name" type="text" placeholder="Enter your name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="name">Email:</label>
                                    <input name="email" id="name" type="email" placeholder="yourmail@example.com">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Phone:</label>
                                    <input name="phone" id="phone" type="number" placeholder="Enter your number">
                                </div>
                                <div class="col-sm-6">
                                    <label for="name">Time:</label>
                                    <input name="time" id="time" type="time" placeholder="12:00">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Date:</label>
                                    <input name="date" id="date" type="date" placeholder="05/23">
                                </div>
                                <div class="col-sm-6">
                                    <label for="guest">Guest:</label>
                                    <input name="guestcount" id="guest" type="number" placeholder="2">
                                </div>
                            </div>
                            <label for="comment">Message:</label>
                            <textarea name="comment" id="comment" placeholder="Enter message"></textarea>
                            <div class="center-button">
                                <input type="submit" id="submit_reservation" value="Reserve">
                                <div id="msg" class="message"></div>
                            </div>
                        </form>
                    </div>

                </div>
            </section>
            <!-- End contact section -->
@endsection

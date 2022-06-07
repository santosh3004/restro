@extends('front.layouts.app')
@section('content')





		<!-- page-banner-section
			================================================== -->
            <section class="page-banner-section" style="background: #111 url({{asset('uploads/files/'.$aboutBG[0]->link)}}) center center no-repeat;
                background-size: cover;">
                <div class="container">
                    <h1>About Us</h1>
                    <span>get to know more about our bistro</span>
                </div>
            </section>
            <!-- End page-banner section -->

            <!-- page-ban-list -->
            <div class="container">
                <ul class="page-ban-list">
                    <li><a href="{{route('front.index')}}">Home</a></li>
                    <li><a href="{{route('front.about')}}">About Us</a></li>
                </ul>
            </div>
            <!-- end page-ban-list -->

            <!-- about-section
                ================================================== -->
            <section class="about-section">
                <div class="container">
                    @foreach ($pages as $page)


                    <div class="about-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image-holder">
                                    <img src="{{asset('uploads/files/'.$page->image)}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-holder">
                                    <h2>{{$page->title}}</h2>
                                    <span>{{$page->slug}}</span>
                                    <p>{{$page->content}}</p>
                                    </p>
                                    <img src="upload/others/chef.jpg" alt="">
                                    <img src="images/signature.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="statistic-box">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="statistic-post">
                                    <h2><span class="timer" data-from="0" data-to="60"></span>+</h2>
                                    <p>Tasty Dishes</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="statistic-post">
                                    <h2><span class="timer" data-from="0" data-to="25"></span>k</h2>
                                    <p>Happy Customers</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="statistic-post">
                                    <h2><span class="timer" data-from="0" data-to="12"></span></h2>
                                    <p>Amazing Chifs</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="statistic-post no-border">
                                    <h2><span class="timer" data-from="0" data-to="300"></span>+</h2>
                                    <p>Best Recipts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End about section -->

            <!-- team-section
                ================================================== -->
            <section class="team-section">
                <div class="container">
                    <div class="title-section">
                        <h2>Meet Our Chefs</h2>
                        <span>They Say About Us</span>
                    </div>
                    <div class="team-box">
                        <div class="row">
                            @foreach ($teams as $team)


                            <div class="col-md-4">
                                <div class="team-post">
                                    <img src="{{asset('uploads/files/'.$team->image)}}" alt="">
                                    <h3>{{$team->name}}</h3>
                                    <span>{{$team->position}}</span>
                                    <ul class="social-team">
                                        <li><a target="_blank" href="{{$team->fb_link}}"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" href="{{$team->ins_link}}"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" href="{{$team->twi_link}}"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- End team section -->

            <!-- testimonial-section
                ================================================== -->
            <section class="testimonial-section white-bg">
                <div class="container">
                    <div class="title-section">
                        <h2>Our Reviews</h2>
                        <span>They Say About Us</span>
                    </div>
                    <div class="testimonial-box owl-wrapper">

                        <div class="owl-carousel" data-num="3">

                            <div class="item">
                                <div class="testimonial-post">
                                    <img src="upload/others/test1.jpg" alt="">
                                    <h3>Corben Naylor</h3>
                                    <span>Chef</span>
                                    <p>“ Donec nec justo eget felis
                                        facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellente
                                        squefelis. ”</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonial-post">
                                    <img src="upload/others/test2.jpg" alt="">
                                    <h3>Rhiana Fields</h3>
                                    <span>Designer</span>
                                    <p>“ Donec nec justo eget felis
                                        facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellente
                                        squefelis. ”</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonial-post">
                                    <img src="upload/others/test3.jpg" alt="">
                                    <h3>Jane Avila</h3>
                                    <span>Manager</span>
                                    <p>“ Donec nec justo eget felis
                                        facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellente
                                        squefelis. ”</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonial-post">
                                    <img src="upload/others/test1.jpg" alt="">
                                    <h3>Corben Naylor</h3>
                                    <span>Chef</span>
                                    <p>“ Donec nec justo eget felis
                                        facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellente
                                        squefelis. ”</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonial-post">
                                    <img src="upload/others/test2.jpg" alt="">
                                    <h3>Rhiana Fields</h3>
                                    <span>Designer</span>
                                    <p>“ Donec nec justo eget felis
                                        facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellente
                                        squefelis. ”</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End testimonial section -->





@endsection

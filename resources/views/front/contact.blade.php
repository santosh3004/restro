@extends('front.layouts.app')
@section('content')
    <!-- page-banner-section
       ================================================== -->
    <section class="page-banner-section" style="background: #111 url({{asset('uploads/files/'.$contact[0]->link)}}) center center no-repeat;
        background-size: cover;">
        <div class="container">
            <h1>Contacts</h1>
            <span>Get in touch</span>
        </div>
    </section>
    <!-- End page-banner section -->
    @php
    $site_config=App\Models\SiteConfig::where('status', 1)->get();
    @endphp
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
                                    @if(($site_config->where('sitekey', 'Opening Hour')->all())!=null)@foreach ($site_config->where('sitekey', 'Opening Hour')->all() as $oh)
                                        {{$oh->sitevalue}}
                                </br>
                                    @endforeach
                                    @endif
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
                            <p><i class="fa fa-map-marker"></i>@if(isset($site_config->where('sitekey', 'address')->first()->sitevalue)){!!$site_config->where('sitekey', 'address')->first()->sitevalue!!}@endif</p>
                            <p><i class="fa fa-phone"></i>@if(isset($site_config->where('sitekey', 'phone')->first()->sitevalue)){!!$site_config->where('sitekey', 'phone')->first()->sitevalue!!}@endif</p>
                            <p><i class="fa fa-envelope"></i>@if(isset($site_config->where('sitekey', 'email')->first()->sitevalue)){!!$site_config->where('sitekey', 'email')->first()->sitevalue!!}@endif</p>
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

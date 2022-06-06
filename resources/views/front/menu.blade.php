@extends('front.layouts.app')
@section('content')
    		<!-- page-banner-section
			================================================== -->
		<section class="page-banner-section" style="background: #111 url({{asset('uploads/files/'.$reservationBG[1]->link)}}) center center no-repeat;
        background-size: cover;">
			<div class="container">
                <h1>Our Menu</h1>
                <span>Good Food Fresh Ingredients</span>
			</div>
		</section>
        <!-- End page-banner section -->

        <!-- page-ban-list -->
        <div class="container">
            <ul class="page-ban-list">
                <li><a href="{{route('front.index')}}">Home</a></li>
                <li><a href="{{route('front.menu')}}">Our Menu</a></li>
            </ul>
        </div>
        <!-- end page-ban-list -->

		<!-- menu-section
			================================================== -->
		<section class="menu-section">
            @foreach ($menucategories as $menucategory)

			<div class="menu-box pizza-menu">
				<div class="container">
                    <div class="title-section">
                        <h2>{{$menucategory->title}}</h2>
                        <span>Try the delicious new dishes from our chef.</span>
                    </div>
					<div class="row">
                        @foreach ($menuitems as $menuitem)
                            @if ($menuitem->menu_category_id == $menucategory->id)
                        <div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="uploads/files/{{$menuitem->image}}" alt="">
								<h3>{{$menuitem->name}}</h3>
								<p>{{$menuitem->desc}}</p>
								<span class="price">${{$menuitem->price}}</span>
								<a href="menu2.html" class="button-one">Add To Cart</a>
							</div>
						</div>
                            @endif
                        @endforeach
					</div>
				</div>
			</div>

            @endforeach
		</section>
		<!-- End menu section -->

		<!-- book-section
			================================================== -->
		<section class="book-section" style="background: #111 url({{asset('uploads/files/'.$reservationBG[0]->link)}}) center center no-repeat;
            background-size: cover;">
			<div class="container">
                <div class="book-box">
                    <div class="title-section white-style">
                        <h2>Book a Table</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm reminusto <br>
                            doeiusmod tempor condorico consectetur adipiscing elitut aliquip.</span>
                    </div>

                    <form action="{{route('front.reserve')}}" method="POST" enctype="multipart/form-data" id="reservation-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-4 col-sm-8">
                                        <label for="name">Your Name:</label>
                                        <input name="name" id="name" type="text" placeholder="Enter your name">
                                    </div>
                                    <div class="col-md-4 col-sm-8">
                                        <label for="email">Email:</label>
                                        <input name="email" id="date" type="email" placeholder="yourmail@example.com">
                                    </div>
                                    <div class="col-md-4 col-sm-8">
                                        <label for="time">Phone:</label>
                                        <input name="phone" id="time" type="number" placeholder="1234567890">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-8">
                                        <label for="name">Guest:</label>
                                        <input name="guestcount" id="guest" type="number" placeholder="Enter guest count">
                                    </div>
                                    <div class="col-md-4 col-sm-8">
                                        <label for="date">Date:</label>
                                        <input name="date" id="date" type="date" placeholder="05/24">
                                    </div>
                                    <div class="col-md-4 col-sm-8">
                                        <label for="time">Time:</label>
                                        <input name="time" id="time" type="time" placeholder="12:00">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-2">
                                <input type="submit" id="submit_reservation" value="Reserve">
                            </div>
                                </div>
                            </div>

                        </div>
                        <div id="msg" class="message"></div>
                    </form>
                </div>

			</div>
		</section>
        <!-- End book section -->
@endsection

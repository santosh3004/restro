@extends('front.layouts.app')

@section('content')
<section id="home-section">
    <div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="concept1" style="background-color:#000000;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
        <div id="rev_slider_202_1" class="rev_slider fullscreenbanner" data-version="5.1.1RC">
            <ul>
                <!-- SLIDE  -->
                @foreach ($sliders as $slider)
                <li data-index="rs-672" data-transition="slidingoverlaydown" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="uploads/files/{{$slider->image}}" data-rotate="0" data-saveperformance="off" data-title="unique" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="uploads/files/{{$slider->image}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->


                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption Concept-Title tp-resizeme rs-parallaxlevel-2"
                        id="slide-672-layer-1"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','15','15']"
                        data-y="['middle','middle','middle','middle']"
                        data-fontsize="['90','70','56','36']"
                        data-lineheight="['86','72','48','36']"
                        data-voffset="['-50','-30','-20','-10']"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                        data-start="1300"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 7; white-space: nowrap;">
                        {{$slider->title}}
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Concept-SubTitle tp-resizeme rs-parallaxlevel-2"
                        id="slide-672-layer-2"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','15','15']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['70','60','50','40']"
                        data-fontsize="['26','24','22','20']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                        data-start="1600"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 6; white-space: nowrap;font-style:italic;">
                        {{$slider->subtitle}}
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption Concept-SubTitle tp-resizeme rs-parallaxlevel-2"
                        id="slide-672-layer-3"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','15','15']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['130','120','110','100']"
                        data-fontsize="['20','20','20','20']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                        data-start="2000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 6; white-space: nowrap;font-style:italic;"><a class="button-two" href="{{$slider->btn_link}}">
                            {{$slider->btn_text}}
                        </a>
                    </div>
                </li>
                @endforeach

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</section>
<!-- End home section -->

<!-- banner-section
    ================================================== -->
<section class="banner-section">
    <div class="container">
        <div class="banner-box">
            <h3>Best Dish Of The Day</h3>
            <h2>Hamburger & <br>
                Sweet Potato Fries</h2>
            <span class="price">
                $19.99
            </span>
            <a href="menu.html" class="button-two">Add To Cart</a>
        </div>
    </div>
</section>
<!-- End banner section -->

<!-- popular-menu-section
    ================================================== -->
<section class="popular-menu-section">
    <div class="container">
        <div class="title-section">
            <h2>Popular Dishes</h2>
            <span>Try the delicious new dishes from our chef.</span>
        </div>
        <div class="popular-menu-box owl-wrapper">

            <div class="owl-carousel" data-num="3">

                @foreach ($menuitems as $menuitem)


                <div class="item">
                    <div class="popular-menu-post">
                        <img style="width: 700px;height:500px;" src="uploads/files/{{$menuitem->image}}" alt="">
                        <h3>{{$menuitem->name}}</h3>
                        <p>{{$menuitem->desc}}</p>
                        <span class="price">${{$menuitem->price}}</span>
                        <a href="menu.html" class="button-one">Add To Cart</a>
                    </div>
                </div>
@endforeach
            </div>
        </div>
    </div>
</section>
<!-- End popular-menu section -->

<!-- services-section
    ================================================== -->
<section class="services-section">
    <div class="container">
        <div class="services-box">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="services-post">
                        <img src="images/icon1.png" alt="">
                        <h3>Fresh Ingredients</h3>
                        <p>Sed egestas, ante vulputa eros pede vitae luctus metus augue.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-post">
                        <img src="images/icon2.png" alt="">
                        <h3>Best Recipe</h3>
                        <p>Sed egestas, ante vulputa eros pede vitae luctus metus augue.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-post">
                        <img src="images/icon3.png" alt="">
                        <h3>Happy Clients</h3>
                        <p>Sed egestas, ante vulputa eros pede vitae luctus metus augue.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services-post">
                        <img src="images/icon4.png" alt="">
                        <h3>Vegan Menu</h3>
                        <p>Sed egestas, ante vulputa eros pede vitae luctus metus augue.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End services section -->

<!-- banner-section
    ================================================== -->
<section class="banner-section2" style="background: #111 url({{asset('uploads/files/'.$reservation[0]->link)}}) center center no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="banner-box">
            <h2>Book a Table</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm reminusto
                doeiusmod tempor condorico consectetur adipiscing elitut aliquip.</h3>
            <a href="{{route('front.reservation')}}" class="button-two">Reservation</a>
        </div>
    </div>
</section>
<!-- End banner section -->

<!-- menu-section
    ================================================== -->
<section class="menu-section">
    <div class="menu-box pizza-menu">
        <div class="container">
            @foreach ($menucategories as $menucategory)
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="image-holder">
                        <img style="height: 60;width:50;" src="uploads/files/{{$menucategory->image}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="menu-holder">
                        <h2>{{$menucategory->title}}</h2>
                        <ul class="menu-list">
                            @foreach ($menuitems as $menuitem)
                            @if ($menuitem->menu_category_id == $menucategory->id)
                            <li>
                                <div class="img-box">
                                    <img src="uploads/files/{{$menuitem->image}}" alt="">
                                </div>
                                <div class="menu-cont">
                                    <h4>
                                        <span class="title-menu">{{$menuitem->name}}</span>
                                        <span class="price">${{$menuitem->price}}</span>
                                    </h4>
                                    <p>{{$menuitem->desc}}</p>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div style="height: 50px">

            </div>
            @endforeach
        </div>
    </div>

</section>
<!-- End menu section -->

<!-- testimonial-section
    ================================================== -->
<section class="testimonial-section">
    <div class="container">
        <div class="title-section">
            <h2>Testimonials</h2>
            <span>They Say About Us</span>
        </div>
        <div class="testimonial-box owl-wrapper">

            <div class="owl-carousel" data-num="3">
@foreach ($reviews as $review)


                <div class="item">
                    <div class="testimonial-post">
                        <img src="upload/others/test1.jpg" alt="">
                        <h3>Corben Naylor</h3>
                        <span>Chef</span>
                        <p>“ Donec nec justo eget felis
                            facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellente
                            ”</p>
                    </div>
                </div>
@endforeach
            </div>
        </div>
    </div>
</section>

@endsection

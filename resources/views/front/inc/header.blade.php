<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Restro</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,300;1,400&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('front/css/koad-assets.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">

</head>
<body>
    @php
    $menus=App\Models\Menu::where('status', 1)->get();
    @endphp
	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header>

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">

					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="">
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">
							{{-- <li class="drop-link">
								<a class=
                                "@if(Route::current()->getName()=='front.index')
                                    {{'active'}}
                                @endif
                                " href="{{route('front.index')}}">Home</a>
							</li> --}}
                            @foreach ($menus as $menu)
                            <li class="drop-link">
								<a class=
                                "@if(Route::current()->getName()==$menu->link)
                                    {{'active'}}
                                @endif
                                " href="{{route($menu->link)}}">{{$menu->title}}</a>
							</li>
                            @endforeach
						</ul>
					</div>
					<a href="{{route('front.reservation')}}" class="button-one">Book a Table</a>
				</div>
			</nav>
		</header>
		<!-- End Header -->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ $property["publication_title"] }} - Buildup Inmobiliaria</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/animate.css">
	
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/magnific-popup.css">

	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/aos.css">

	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/ionicons.min.css">

	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/jquery.timepicker.css">
	<link rel="icon" href="{{ asset('frontEnd') }}/images/icon.png" sizes="32x32">
    <link rel="icon" href="{{ asset('frontEnd') }}/images/icon.png" sizes="192x192">
	
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/flaticon.css">
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/icomoon.css">
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/style.css">
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="/"><img src="{{ asset('frontEnd') }}//images/logo2.png" width="100%"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link">Inicio</a></li>
					<li class="nav-item"><a href="/nosotros" class="nav-link">Nosotros</a></li>
					<li class="nav-item"><a href="/servicios" class="nav-link">Servicios</a></li>
					<li class="nav-item active"><a href="/propiedades" class="nav-link">Propiedades</a></li>
					<li class="nav-item"><a href="https://credibox.mx/iframe/?s=8ce8b102d40392a688f8c04b3cd6cae0" class="nav-link">Simulador de Hipoteca</a></li>
					<li class="nav-item"><a href="/proyectos" class="nav-link">Proyectos</a></li>
					<li class="nav-item"><a href="/contacto" class="nav-link">Contacto</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<section class="hero-wrap ftco-degree-bg" style="background-image: url({{ $property['photos'][0]['image'] }});" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"style="margin-top: 40px;">
					<div class="col-md-6 ftco-animate pb-5 text-center" style="background: rgb(121,192,168); padding: 0 !important; padding-top: 20px !important;">
						<p class="breadcrumbs">
							<span class="mr-2" style="color:black !important; font-weight: bold;">
								{{ $property['location']['name'] }}		
							</span>
						</p>
						<h1 class="mb-3 bread" style="color:black !important; font-weight: bold;">
							{{ $property["publication_title"] }}
						</h1>
						<h3 class="mb-3" style="color:black !important; font-weight: bold;">
							@if( $property['operations'][0]['operation_type'] == 'Rent' )
								Renta -
							@elseif( $property['operations'][0]['operation_type'] == 'Sale' )
								Venta -
							@endif
							${{ number_format( $property['operations'][0]['prices'][0]['price'] ) }}
							{{ $property['operations'][0]['prices'][0]['currency'] }}	
						</h3>
					</div>
			<div class="col-md-6" style=" background-position: 50% 0px;background-repeat: no-repeat;background-size: cover;">
			</div>
			</div>
		</div>
	</section>
	<span class="ir-arriba"><i class="fa fa-angle-up" aria-hidden="true"></i></span>
	<section class="ftco-section ftco-property-details">
		<div class="container">

			<div class="row">
				<div class="col-md-12 pills">
					<div class="bd-example bd-example-tabs">
						<div class="d-flex justify-content-center">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

								<li class="nav-item">
									<a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Caracteristicas</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Imagenes</a>
								</li>
							</ul>
						</div>

						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
								<div class="row">
									<div class="col-md-5">
										<ul class="features">
											@foreach( $property['operations'] as $operation )
											<li class="check"><span class="ion-ios-checkmark"></span>
												@if( $operation['operation_type'] == 'Rent' )
												Renta -
												@elseif( $operation['operation_type'] == 'Sale' )
												Venta -
												@endif
												${{ number_format( $operation['prices'][0]['price'] ) }}
												{{ $operation['prices'][0]['currency'] }}
											</li>
											@endforeach
											<li class="check"><span class="ion-ios-checkmark"></span>Superficie: {{$property["surface"]}} m<sup>2</sup></li>
											<li class="check"><span class="ion-ios-checkmark"></span>{{$property["real_address"]}}</li>
											<li class="check"><span class="ion-ios-checkmark"></span>{{$property["location"]["full_location"]}}</li>
										</ul>
									</div>
									<div class="col-md-1"></div>
									<div class="col-md-6">
										{{ $property["description"] }}
									</div>
									<!-- <div class="col-md-4">
										<ul class="features">
											<li class="check"><span class="ion-ios-checkmark"></span>Floor Area: 1,300 SQ FT</li>
											<li class="check"><span class="ion-ios-checkmark"></span>Year Build:: 2019</li>
											<li class="check"><span class="ion-ios-checkmark"></span>Water</li>
											<li class="check"><span class="ion-ios-checkmark"></span>Stories: 2</li>
											<li class="check"><span class="ion-ios-checkmark"></span>Roofing: New</li>
										</ul>
									</div> -->
								</div>
							</div>

							<div class="row tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
								<div id="carouselExampleControls" class="col-md-6 carousel slide" data-ride="carousel" style="margin: auto;">
									<div class="carousel-inner">
										@php ($i = 0)
										@foreach( $property["photos"] as $photo )
										@if( $i == 0 )
										<div class="carousel-item active">
											<img class="d-block w-100" src="{{ $photo['original'] }}">
										</div>
										@else
										<div class="carousel-item">
											<img class="d-block w-100" src="{{ $photo['original'] }}">
										</div>
										@endif
										@php ($i++)
										@endforeach 
									</div>
									<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>

							<div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
								<div class="row">
									<div class="col-md-7">
										<h3 class="head">23 Reviews</h3>
										<div class="review d-flex">
											<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
											<div class="desc">
												<h4>
													<span class="text-left">Jacob Webb</span>
													<span class="text-right">14 March 2018</span>
												</h4>
												<p class="star">
													<span>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
													</span>
													<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
												</p>
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
											</div>
										</div>
										<div class="review d-flex">
											<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
											<div class="desc">
												<h4>
													<span class="text-left">Jacob Webb</span>
													<span class="text-right">14 March 2018</span>
												</h4>
												<p class="star">
													<span>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
													</span>
													<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
												</p>
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
											</div>
										</div>
										<div class="review d-flex">
											<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
											<div class="desc">
												<h4>
													<span class="text-left">Jacob Webb</span>
													<span class="text-right">14 March 2018</span>
												</h4>
												<p class="star">
													<span>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
													</span>
													<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
												</p>
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="rating-wrap">
											<h3 class="head">Give a Review</h3>
											<div class="wrap">
												<p class="star">
													<span>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														(98%)
													</span>
													<span>20 Reviews</span>
												</p>
												<p class="star">
													<span>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														(85%)
													</span>
													<span>10 Reviews</span>
												</p>
												<p class="star">
													<span>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														(70%)
													</span>
													<span>5 Reviews</span>
												</p>
												<p class="star">
													<span>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														(10%)
													</span>
													<span>0 Reviews</span>
												</p>
												<p class="star">
													<span>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														<i class="ion-ios-star"></i>
														(0%)
													</span>
													<span>0 Reviews</span>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-section" style="box-shadow: 0 0 15px 0 #aaa;">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2"><img src="{{ asset('frontEnd') }}//images/logo2.png" width="90%"></h2>
						<p>Nos especializamos en  brindar soluciones y servicios en el área de construcción y ofertas de proyectos inmobiliarios.</p>
						<ul class="ftco-footer-social list-unstyled mt-5">
							<!--<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>-->
							<li class="ftco-animate"><a href="https://www.facebook.com/buildupinmobiliaria/"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/buildupinmobiliaria/"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="ftco-footer-widget mb-4 ml-md-4">
              <!-- <h2 class="ftco-heading-2">Community</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Search Properties</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>For Agents</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Reviews</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>FAQs</a></li>
            </ul> -->
        </div>
    </div>
    <div class="col-md-2">
    	<div class="ftco-footer-widget mb-3">
		             <!-- <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About Us</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Press</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
            </ul> -->
        </div>
    </div>
    <div class="col-md-5">
    	<div class="ftco-footer-widget mb-5">
    		<h2 class="ftco-heading-2" style="font-weight: bold;">BUILDUP INMOBILIARIA</h2>
    		    		<div class="block-23 mb-3">
    			<ul>
    				<li><span class="icon icon-map-marker"></span><span class="text">
						Torre Medcapital, Quinto piso, Oficina 52. <br>
						Paseo Playas del Conchal, lote 1-B1.<br>
						Playas del Conchal, C.P. 95264, Alvarado, Ver.
    					</span></li>
    				<li><a href="#"><span class="icon icon-phone"></span><span class="text">(229) 956 4778 | (229) 250 8595 | (229) 184 7482</span></a></li>
    				<li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@buildup.mx</span></a></li>
    			</ul>
    		</div>
    	</div>
    </div>
</div>
<div class="row">
	<div class="col-md-12 text-center">

		<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
		</div>
	</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{ asset('frontEnd') }}/js/jquery.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/popper.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/jquery.easing.1.3.js"></script>
<script src="{{ asset('frontEnd') }}/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/jquery.stellar.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/aos.js"></script>
<script src="{{ asset('frontEnd') }}/js/jquery.animateNumber.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('frontEnd') }}/js/jquery.timepicker.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('frontEnd') }}/js/google-map.js"></script>
<script src="{{ asset('frontEnd') }}/js/main.js"></script>

</body>
</html>
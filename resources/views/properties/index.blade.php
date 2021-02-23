<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Propiedades - Buildup Inmobiliaria</title>
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
    
    <section class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('frontEnd') }}/images/slider/slider1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread" style="color:white;">Inmuebles disponibles</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section" style="margin-top: 50px;">
    	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
				<span class="subheading">Filtros</span>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-12">
				<form class="contact-form" action="/search" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-row">
						<div class="col-md-1">
							<label for="cat" class="form-control-label">Categoría:</label>
						</div>
						<div class="col-md-2">
							<select name="cat" class="form-control form-control-sm">
								<option value="0" selected disabled>Categoria</option>
								<option value="Sale">Venta</option>
								<option value="Rent">Renta</option>
							</select>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-1">
							<label for="ciudad" class="form-control-label">Ciudad:</label>
						</div>
						<div class="col-md-3">
							<select name="ciudad" class="form-control form-control-sm">
								<option value="0" selected disabled>Ciudad</option>
								@foreach( $locations as $location )
									<option value="{{ $location }}">{{ $location }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-1">
							<label for="tipo" class="form-control-label">Tipo:</label>
						</div>
						<div class="col-md-2">
							<select name="tipo" class="form-control form-control-sm">
								<option value="0" selected disabled>Tipo</option>
								<option value="HO">Casa</option>
								<option value="AP">Departamento</option>
								<option value="LO">Local Comercial</option>
								<option value="LA">Terreno</option>
							</select>
						</div>
					</div>
					<div class="form-row" style="margin-top: 20px;">
						<div class="col-md-1"></div>
						<div class="col-md-2">
							<label for="supmin" class="form-control-label">Superficie en m<sup>2</sup>:</label>
						</div>
						<div class="col-md-1">
							<input name="supmin" type="text" class="form-control form-control-sm" placeholder="Min">
						</div>
						<div class="col-md-1">
							<input name="supmax" type="text" class="form-control form-control-sm" placeholder="Max">
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-1">
							<label for="premin" class="form-control-label">Precio:</label>
						</div>
						<div class="col-md-1">
							<input name="premin" type="text" class="form-control form-control-sm" placeholder="Min">
						</div>
						<div class="col-md-1">
							<input name="premax" type="text" class="form-control form-control-sm" placeholder="Max">
						</div>
						</div>
						<div class="row" style="margin-top: 20px;">
						<div class="col-md-4"></div>
						<div class="col-md-2">
							<input type="reset" class="btn btn-secondary" value="Limpiar" style="width:100%;" />
						</div>
						<div class="col-md-2">
							<button class="btn btn-primary" id="btnSend" style="width:100%;" >Buscar</button>
						</div>
					</div>
				</form>
				<div class="col-md-12 heading-section text-center ftco-animate mb-5" style="margin-top:25px;">
				</div>
			</div>
		</div>	
        <div class="row" id="section-properties">
        	@if( !$properties->isEmpty() )
	        	@foreach($properties as $property)
				<div class="col-md-3">
					<div class="property-wrap ftco-animate">
						<a href="/propiedades/{{ $property['id'] }}" class="img" style="background-image: url({{ $property['photos'][0]['image'] }});"></a>
						<div class="text" style="width: 95% !important">
							@foreach($property['operations'] as $operation)
							<p class="price" style="margin-bottom: 0px;">
								@if( $operation['operation_type'] == 'Rent' )
									<span class="orig-price">Renta - ${{ number_format( $operation['prices'][0]['price'] ) }} MXN</span>
								@elseif( $operation['operation_type'] == 'Sale' )
									<span class="orig-price">Venta - ${{ number_format( $operation['prices'][0]['price'] ) }} MXN</span>
								@endif
							</p>
							@endforeach
							<p class="price" style="">
								<span class="orig-price">Superficie: {{ $property["surface"] }} m<sup>2</sup></span>
							</p>
							<h3><a href="#">{{ $property["publication_title"] }}</a></h3>
							<span class="location">{{ $property['location']['name'] }}</span>
							<a href="/propiedades/{{ $property['id'] }}" class="d-flex align-items-center justify-content-center btn-custom">
								<span class="ion-ios-link"></span>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			@else
				<div class="col-md-12">
					<h3>Tu consulta no arrojo ningun resultado</h3>
					<div class="row justify-content-center">
						<div class="col-md-11">
							<form class="contact-form">
								<div class="row form-group">
									<div class="col-md-9">
										<input type="text" id="data" class="form-control form-control-sm" placeholder="Dirección, ciudad, Codigo Postal">
									</div>
									<div class="col-md-3">
										<input type="reset" class="btn btn-sm btn-secondary" value="Limpiar" />
										<button class="btn btn-sm btn-primary" id="btnSend" >Buscar</button>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-1">
										<label for="cat" class="form-control-label">Categoría:</label>
									</div>
									<div class="col-md-3">
										<select id="cat" class="form-control form-control-sm">
											<option value="0" selected disabled>Categoria</option>
											<option value="Sale">Venta</option>
											<option value="Rent">Renta</option>
										</select>
									</div>
									<div class="col-md-1">
										<label for="ciudad" class="form-control-label">Ciudad:</label>
									</div>
									<div class="col-md-3">
										<select id="ciudad" class="form-control form-control-sm">
											<option value="0" selected disabled>Categoria</option>
											<option value="Sale">Venta</option>
											<option value="Rent">Renta</option>
										</select>
									</div>
									<div class="col-md-1">
										<label for="tipo" class="form-control-label">Tipo:</label>
									</div>
									<div class="col-md-3">
										<select id="tipo" class="form-control form-control-sm">
											<option value="0" selected disabled>Tipo</option>
											<option value="HO">Casa</option>
											<option value="AP">Departamento</option>
											<option value="LO">Local Comercial</option>
											<option value="LA">Terreno</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-2">
										<label for="supmin" class="form-control-label">Superficie:</label>
									</div>
									<div class="col-md-2">
										<input id="supmin" type="text" class="form-control form-control-sm" placeholder="Min">
									</div>
									<div class="col-md-2">
										<input id="supmax" type="text" class="form-control form-control-sm" placeholder="Max">
									</div>
									<div class="col-md-2">
										<label for="premin" class="form-control-label">Precio:</label>
									</div>
									<div class="col-md-2">
										<input id="premin" type="text" class="form-control form-control-sm" placeholder="Min">
									</div>
									<div class="col-md-2">
										<input id="premax" type="text" class="form-control form-control-sm" placeholder="Max">
									</div>
								</div>
							</form>
						</div>
					</div>	
				</div>
			@endif
        </div>
        <div class="row mt-5" style="margin-bottom: 40px;">
        	<div class="col-md-3"></div>
          	<div class="col-md-6 text-center">
            	<div class="block-27">
                {{ $properties->links() }}
	            </div>
	         </div>
        </div>
    	</div>
    </section>
<span class="ir-arriba"><i class="fa fa-angle-up" aria-hidden="true"></i></span>
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
		    	<div class="ftco-footer-widget mb-4 ml-md-3">
            <!--  <h2 class="ftco-heading-2">About Us</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Our Story</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Meet the team</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
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
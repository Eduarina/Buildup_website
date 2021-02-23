<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contacto - Buildup Inmobiliaria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/alertify/alertify.min.css">    
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
					<li class="nav-item"><a href="/propiedades" class="nav-link">Propiedades</a></li>
					<li class="nav-item"><a href="https://credibox.mx/iframe/?s=8ce8b102d40392a688f8c04b3cd6cae0" class="nav-link">Simulador de Hipoteca</a></li>
					<li class="nav-item"><a href="/proyectos" class="nav-link">Proyectos</a></li>
					<li class="nav-item active"><a href="/contacto" class="nav-link">Contacto</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<section class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('frontEnd') }}/images/slider/slider1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread" style="color:white;">Contáctanos</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section contact-section" style="margin-top: 55px;">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5" style="margin-top: 35px;">
          	<span class="subheading">Contáctanos</span>
            <h2 class="mb-2">¡Contáctanos, será un placer atenderte!</h2>
          </div>
        </div>

        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-11">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="icon-map-o"></span>
		          	</div>
		            <p><span>Dirección:</span>Torre Medcapital, Quinto piso, Oficina 52.<br>
Paseo Playas del Conchal, lote 1-B1.<br>
Playas del Conchal, C.P. 95264, Alvarado, Ver.</p>
		          </div>
		          <div class="col-md-4 text-center border-height py-4">
		          	<div class="icon">
		          		<span class="icon-mobile-phone"></span>
		          	</div>
		            <p><span>Teléfonos:</span> <a href="tel://2299564778">(229) 956 4778</a><br>
		             <a href="tel://2291847482">(229) 184 7482</a></p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="icon-envelope-o"></span>
		          	</div>
		            <p><span>Correo:</span> <a href="mailto:info@buildup.mx">info@buildup.mx</a></p>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h2 class="text-center">Si no encuentras lo que buscas escríbenos y con gusto te atenderemos</h2>
            <form class="bg-light p-5 contact-form">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <input type="text" name="text1" class="form-control" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="text" name="text2" class="form-control" placeholder="Correo">
              </div>
              <div class="form-group">
                <input type="text" name="text3" class="form-control" placeholder="Telefono">
              </div>
              <div class="form-group">
                <textarea id="text4" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-submit py-3 px-5">Enviar mensaje</button>
              </div>
            </form>
          
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-md-10">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6502.071256065696!2d-96.0912910350742!3d19.0740089472629!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c36abd14b0e8e9%3A0x6962a55fe77f88a8!2sMedcapital%20Health%20and%20Business%20Center!5e0!3m2!1ses-419!2smx!4v1582832007099!5m2!1ses-419!2smx" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        	</div>
        </div>
      </div>
    </section>
<span class="ir-arriba"><i class="fa fa-angle-up" aria-hidden="true"></i></span>
<footer class="ftco-footer ftco-section" style="box-shadow: 0 0 15px 0 #aaa; margin-top:35px;">
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
<script src="{{ asset('frontEnd') }}/js/alertify.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/main.js"></script>
<script type="text/javascript">

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $(".btn-submit").click(function(e){
      e.preventDefault();
      var name = $("input[name=text1]").val();
      var email = $("input[name=text2]").val();
      var phone = $("input[name=text3]").val();
      var messa = $("#text4").val();

      $.ajax({
        type:'POST',
        url:'/sendMail',
        data:{text1:name, text2:email, text3:phone, text4: messa},
        success:function(data){
          alertify.success("Enviado correctamente, pronto nos estaremos comunicando contigo.");
        }
      });
    });

  </script>
</body>
</html>

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
				</div>
			@endif
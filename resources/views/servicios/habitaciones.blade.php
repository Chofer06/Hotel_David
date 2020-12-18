@extends('layouts.master')
@section('content')
	<br><h1 align="center"><strong>HABITACIONES</strong></h1><br>
	<h5 align="justify">Cuando necesitamos hospedarnos en un hotel, lo primero es prestar 
						atención al tipo de habitación y escoger la que mejor se adapte a 
						nuestras necesidades. Todo dependerá de si vamos solos, acompañados, 
						con familia, con amigos, o con la pareja. Lo cierto es que existe un 
						gran número de posibilidades y de precios. ¿Quieres saber cuáles son 
						las opciones disponibles y las características de los distintos tipos 
						de habitaciones en un hotel?</h5><br>
	<div class="container">
		<div class="row">
			@foreach($precio as $p)
			<div class="col-md-3">
		    	<div class="card" style="width: 15rem;">
					<img src="{{url('imagenes/6.jpg')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title" align="center"><strong>{{ $p->id }}</strong></h5>
						<h5 class="card-title" align="center"><strong>{{ $p->tipo }}</strong></h5>
						<h5 class="card-title" align="center"><strong>{{ $p->precio }}</strong></h5>
					</div>
		      		<button type="button" class="btn btn-success">ALQUILAR</button>
		    	</div><br>
		  	</div>
			@endforeach <br><br>
		</div>
	</div>
	<div aling="center">
		<a href="{{url('/')}}" class="btn btn-secondary">REGRESAR</a>
	</div>
@stop
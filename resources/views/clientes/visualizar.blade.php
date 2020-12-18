@extends('layouts.master')
@section('content')
    <br><h1 align="center"><strong>NUESTROS CLIENTES</strong></h1><br>
    <h5 align="justify">Contamos Con Los Mejores Clientes, Ven Conocelos</h5><br>
    <div class="container">
		<div class="row">
			@foreach($clientes as $c)
			<div class="col-md-3">
		    	<div class="card" style="width: 15rem;">
					<img src='{{url("imagenes/$c->foto")}}' class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title" align="center"><strong>{{ $c->id }}</strong></h5>
						<h5 class="card-title" align="center"><strong>{{ $c->dni }}</strong></h5>
						<h5 class="card-title" align="center"><strong>{{ $c->nombre }}</strong></h5>
						<h5 class="card-title" align="center"><strong>{{ $c->genero }}</strong></h5>
                        <h5 class="card-title" align="center"><strong>{{ $c->domicilio }}</strong></h5>
                        <h5 class="card-title" align="center"><strong>{{ $c->telefono }}</strong></h5>
					</div>
		    	</div><br>
		  	</div>
			@endforeach <br><br>
		</div>
	</div>
	<div aling="center">
		<a href="{{url('/')}}" class="btn btn-secondary">REGRESAR</a>
	</div>
@stop
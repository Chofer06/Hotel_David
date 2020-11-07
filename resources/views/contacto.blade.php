@extends('layouts.master')
@section('content')
	<h1 align="center"><strong>CONTACTANOS</strong></h1><br>
	<h5 align="justify">Nuestros Télefonos Conmutador: +57 (5) 422-7090 | +57 (300) 929-4111</h5><br>
	<h5 align="justify">Front Desk:	+57(316) 238-2027</h5><br>
	<h5 align="justify">Representante de Ventas/Reservas: +57 (317) 646-0851</h5><br>
	<h4>&emsp;<strong>Datos Personales</strong></h4><br>
	<div>
		<fieldset class="form-group col">
			<div class="form-row">
				<div class="form-group col-sm-1">
					<label for="inputyo"></label>
				</div>
				<div class="form-group col-md-5">
					<label for="inputdocu"><strong>* Tipo de documento:</strong></label>
					<select id="inputdocumento" class="form-control">
						<option selected>Seleccione</option>
						<option>PASAPORTE</option>
						<option>NUMERO IDENTIFICACION TRIBUTARIA</option>
						<option>CEDULA DE CIUDADANIA</option>
						<option>CEDULA EXTRANJERIA</option>
						<option>CARNET DIPLOMATICO</option>
					</select>
				</div>
				<div class="form-group col-md-5">
					<label for="inputide"><strong>* Número de documento de identidad:</strong></label>
					<input type="text" class="form-control" id="inputidentidad">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-sm-1">
					<label for="inputyo"></label>
				</div>
				<div class="form-group col-md-5">
					<label for="inputcor"><strong>* Correo electrónico:</strong></label>
					<input type="text" class="form-control" id="inputcorreo">
				</div>
				<div class="form-group col-md-5">
					<label for="inputcor1"><strong>* Confirmación correo electrónico:</strong></label>
					<input type="text" class="form-control" id="inputcorreo1">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-sm-1">
					<label for="inputyo"></label>
				</div>
				<div class="form-group col-md-5">
					<label for="inputtel"><strong>Teléfono contacto:</strong></label>
					<input type="text" class="form-control" id="inputtelefono">
				</div>
				<div class="form-group col-md-5">
					<label for="inputtel1"><strong>Teléfono adicional:</strong></label>
					<input type="text" class="form-control" id="inputtelefono1">
				</div>

				<div class="form-group col-md-7">
					<label for="comemtarios"><strong>Mensaje</strong></label>
					<textarea name="comentarios" rows="4" cols="150"></textarea>
				</div>
			</div>
		</fieldset>
	</div>
@stop
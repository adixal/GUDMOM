@extends('layouts.app')

@section('content')
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<title>Ser GUDMOM</title>
</head>
<body>
	<div align="center">
		<p>
		<h3><p class="texto">Bienvenid@ nuev@ GUDMOM</p></h3>
		<h5><div class="Registro">
		<form method="post" action="/ser">
				{{csrf_field()}}
				@if (count($errors)>0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<p><span class="fontawesome"></span><label for="Nombre" >Nombre</label></p>
				<p><input type="text" name="Nombre" id="Nombre" value="{{old('Nombre')}}"> </p>
				<p><span class="fontawesome"></span><label for="ciudad" >La ciudad donde vives</label></p>
				<p><select type="text" name="Ciudad" id="Ciudad" value="{{old('Ciudad')}}" id="inlineFormCustomSelectPref">
			    <option selected>Elige tu cuidad</option>
			    <option value="1">Aguascalientes</option>
			    <option value="2">Baja California</option>
			    <option value="3">Baja California sur</option>
			    <option value="4">Campeche</option>
				<option value="5">Chihuahua</option>
				<option value="6">Chiapas</option>
				<option value="7">coahuila</option>
				<option value="8">Colima</option>
				<option value="9">Durango</option>
				<option value="10">Guanajuato</option>
				<option value="11">Guerrero</option>
				<option value="12">Hidalgo</option>
				<option value="13">Jalisco</option>
				<option value="14">Mexico</option>
				<option value="15">Michoacan</option>
				<option value="16">Morelos</option>
				<option value="17">Nayarit</option>
				<option value="18">Nuevo Leon</option>
				<option value="19">Oaxaca</option>
				<option value="20">Puebla</option>
				<option value="21">Queretaro</option>
				<option value="22">Quintana Roo</option>
				<option value="23">San Luis Potosi</option>
				<option value="24">Sinaloa</option>
				<option value="25">Sonora</option>
				<option value="26">Tabasco</option>
				<option value="27">Tamaulipas</option>
				<option value="28">Tlaxcala</option>
				<option value="29">Veracruz</option>
				<option value="30">Merida</option>
				<option value="31">Zacatecas</option></select></p>
				<p><span class="fontawesome"></span><label for="Telefono">Telefono</label></p>
				<p><input type="integer" name="Telefono" id="Telefono" value="{{old('Telefono')}}"></p>
				<p><span class="fontawesome"></span><label for="Descripcion">Cuentanos un poco acerca de ti</label></p>
				<p><textarea rows="4" type="text" name="Descripcion" id="Descripcion" value="{{old('Descripcion')}}"></textarea></p>
				<button>Aceptar</button>
		</form>
	</div></h5>		

</body>
</html>
@endsection
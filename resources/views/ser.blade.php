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
				<p><input type="text" name="Ciudad" id="Ciudad" value="{{old('Ciudad')}}"></p>
				<p><span class="fontawesome"></span><label for="Telefono">Telefono</label></p>
				<p><input type="integer" name="Telefono" id="Telefono" value="{{old('Telefono')}}"></p>
				<p><span class="fontawesome"></span><label for="Descripcion">Cuentanos un poco acerca de ti</label></p>
				<p><input type="text" name="Descripcion" id="Descripcion" value="{{old('Descripcion')}}"></p>
				<button>Aceptar</button>
		</form>
	</div></h5>		

</body>
</html>
@endsection
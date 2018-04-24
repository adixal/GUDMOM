@extends('layouts.app')

@section('content')
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <title>Busca tu GUDMOM</title>
  </head>
  <body>
    <div class="row justify-content-center">
      <form method="post" action="/buscar" class="form-inline">
      <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Busca tu Gudmom</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                <option selected>Elige tu cuidad</option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Baja California">Baja California</option>
                <option value="Baja California sur">Baja California sur</option>
                <option value="Campeche">Campeche</option>
                <option value="Chihuahua">Chihuahua</option>
                <option value="Chiapas">Chiapas</option>
                <option value="coahuila">coahuila</option>
                <option value="Colima">Colima</option>
                <option value="Durango">Durango</option>
                <option value="Guanajuato">Guanajuato</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Hidalgo">Hidalgo</option>
                <option value="Jalisco">Jalisco</option>
                <option value="Mexico">Mexico</option>
                <option value="Michoacan">Michoacan</option>
                <option value="Morelos">Morelos</option>
                <option value="Nayarit">Nayarit</option>
                <option value="Nuevo Leon">Nuevo Leon</option>
                <option value="Oaxaca">Oaxaca</option>
                <option value="Puebla">Puebla</option>
                <option value="Queretaro">Queretaro</option>
                <option value="Quintana Roo">Quintana Roo</option>
                <option value="San Luis Potosi">San Luis Potosi</option>
                <option value="Sinaloa">Sinaloa</option>
                <option value="Sonora">Sonora</option>
                <option value="Tabasco">Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala">Tlaxcala</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Merida">Merida</option>
                <option value="Zacatecas">Zacatecas</option>






         </select>

                <!--  <div class="custom-control custom-checkbox my-1 mr-sm-2">
                  <input type="checkbox" class="custom-control-input" id="customControlInline">
                  <label class="custom-control-label" for="customControlInline">Remember my preference</label>
    </div>-->

    <button type="submit" class="btn btn-primary my-1">Buscar</button>
    </div>
    </form>
  

</body>
</html>
@endsection
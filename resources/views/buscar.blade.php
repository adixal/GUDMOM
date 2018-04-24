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
    <form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Busca tu Gudmom</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Elige tu cuidad</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

  <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="customControlInline">
    <label class="custom-control-label" for="customControlInline">Remember my preference</label>
  </div>

  <button type="submit" class="btn btn-primary my-1">Buscar</button>
</form>
  </div>

</body>
</html>
@endsection
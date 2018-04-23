@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form name="formulario" method="post" action="Route::get('/', function () {
    return view('welcome');">
                        <input type="submit" value="Enviar formulario">
                    </form>



                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

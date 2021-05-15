@extends('adminlte::page')

@section('title', 'BIENVENIDO')

@section('content_header')
    <h1>BIENVENIDO</h1>
@stop

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container center">
    <h1 class="display-4">Centro Escolar Católico Madre del Salvador</h1>
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Has iniciado sesión!') }}
  </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop





@extends('adminlte::page')

@section('title', 'Alumnos')

@section('content_header')
<div class="card-header">{{ __('Alumnos') }}</div>
@stop

@section('content')
     

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                
                <div class="card-body">
                    <form method = "post" action = " {{ url('/alumnos/'.$alumnos->id)}}">
                        @csrf
                        {{ method_field('PUT') }}
                        @include('alumnos.formedit')
                    </form>
                </div>
            </div>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop






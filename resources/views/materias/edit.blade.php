@extends('adminlte::page')

@section('title', 'materias')

@section('content_header')
<div class="card-header">{{ __('materias') }}</div>
@stop

@section('content')


     
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                
                <div class="card-body">
                    <form method = "post" action = " {{ url('/materias/'.$materias->id)}}">
                        @csrf
                        {{ method_field('PUT') }}
                        @include('materias.formedit')
                    </form>
                </div>
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





@extends('adminlte::page')

@section('title', 'Alumnos')

@section('content_header')
<div class="card-header">{{ __('Alumnos') }}</div>
@stop

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Alumnos') }}</div>
                <div class="card-body">
                    <form method = "post" action = "{{ route('alumnos.store')}}">
                        @csrf
                        @include('alumnos.formprods')
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



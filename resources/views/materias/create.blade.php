

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
                <div class="card-header">{{ __('materias') }}</div>
                <div class="card-body">
                    <form method = "post" action = "{{ route('materias.store')}}">
                        @csrf
                        @include('materias.formprods')
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






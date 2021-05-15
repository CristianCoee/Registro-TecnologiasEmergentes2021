

@extends('adminlte::page')

@section('title', 'periodo')

@section('content_header')
<div class="card-header">{{ __('Alumnos') }}</div>
@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('periodo') }}</div>
                <div class="card-body">
                    <form method = "post" action = "{{ route('periodo.store')}}">
                        @csrf
                        @include('periodo.formprods')
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






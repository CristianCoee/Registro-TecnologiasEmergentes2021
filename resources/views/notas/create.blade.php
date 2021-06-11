

@extends('adminlte::page')

@section('title', 'notas')

@section('content_header')
<div class="card-header">{{ __('notas') }}</div>
@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('notas') }}</div>
                <div class="card-body">
                    <form method = "post" action = "{{ route('notas.store')}}">
                        @csrf
                        @include('notas.formprods')
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






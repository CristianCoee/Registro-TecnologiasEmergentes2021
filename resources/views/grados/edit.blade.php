@extends('adminlte::page')

@section('title', 'grados')

@section('content_header')
<div class="card-header">{{ __('grados') }}</div>
@stop

@section('content')


     
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                
                <div class="card-body">
                    <form method = "post" action = " {{ url('/grados/'.$grados->id)}}">
                        @csrf
                        {{ method_field('PUT') }}
                        @include('grados.formedit')
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




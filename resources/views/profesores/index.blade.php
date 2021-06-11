@extends('adminlte::page')

@section('title', 'profesores')

@section('content_header')
<div class="card-header">{{ __('profesores') }}</div>
@stop

@section('content')
<div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('profesores.create')}}">Agregar profesor</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">nombre</th>
                            <th scope="col">apellido</th>
                            <th scope="col">sexo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Celular</th>
                            <th scope="col">usuario</th>
                            <th scope="col">grado</th>
                            <th scope="col">estado</th>
                            <th scope="col">acciones</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($profesores as $profesores)
                            <tr>
                           
                            <td>{{ $profesores->nombre }}</td>
                            <td>{{ $profesores->apellido }}</td>
                            <td>{{ $profesores->sexo }}</td>
                            <td>{{ $profesores->tel }}</td>
                            <td>{{ $profesores->cel }}</td>
                            <td>{{ $profesores->usuario }}</td>
                            <td>{{ $profesores->curso }}</td>
                            <td>{{ $profesores->activo }}</td>
                            
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{ url('/profesores/'.$profesores->id.'/edit') }}">Editar</a>

                                <form action="{{ url('profesores/'.$profesores->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar el profesor?')" value="Eliminar"></input>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

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
    

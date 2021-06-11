@extends('adminlte::page')

@section('title', 'calificaciones')

@section('content_header')
<div class="card-header">{{ __('calificaciones') }}</div>
@stop

@section('content')
<div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('calificaciones.create')}}">Agregar materias</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Alumno</th>
                            <th scope="col">grado</th>
                            <th scope="col">profesor</th>
                            
                            <th scope="col">periodo</th>
                            <th scope="col">Matematicas</th>
                            <th scope="col">Lenguaje</th>
                            <th scope="col">Sociales</th>
                            <th scope="col">Ciencias</th>
                            <th scope="col">Acciones</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($calificaciones as $calificaciones)
                            <tr>
                           
                            <td>{{ $calificaciones->alumno }}</td>
                            <td>{{ $calificaciones->grado }}</td>
                            <td>{{ $calificaciones->profesor }}</td>
                            <td>{{ $calificaciones->periodo }}</td>
                            <td>{{ $calificaciones->matematicas }}</td>
                            <td>{{ $calificaciones->lenguaje }}</td>
                            <td>{{ $calificaciones->sociales }}</td>
                            <td>{{ $calificaciones->ciencia }}</td>
                            
                            
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{ url('/calificaciones/'.$calificaciones->id.'/edit') }}">Editar</a>

                                <form action="{{ url('calificaciones/'.$calificaciones->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar el nota?')" value="Eliminar"></input>
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
    

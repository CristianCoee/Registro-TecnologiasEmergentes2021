@extends('adminlte::page')

@section('title', 'Alumnos')

@section('content_header')
<div class="card-header">{{ __('Alumnos') }}</div>
@stop

@section('content')
    
   
    <div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('alumnos.create')}}">Agregar Nuevo Alumno</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">NIE</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Fecha Nacimiento</th>
                            <th scope="col">Fecha Ingreso</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Responsable</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($alumnos as $alumnos)
                            <tr>
                           
                            <td>{{ $alumnos->NIE }}</td>
                            <td>{{ $alumnos->nombrealum }}</td>
                            <td>{{ $alumnos->apellidoalum }}</td>
                            <td>{{ $alumnos->telefonoalum }}</td>
                            <td>{{ $alumnos->sexo }}</td>
                            <td>{{ $alumnos->fNacimiento }}</td>
                            <td>{{ $alumnos->fIngreso }}</td>
                            <td>{{ $alumnos->direccion }}</td>
                            <td>{{ $alumnos->responsable }}</td>
                            <td>{{ $alumnos->curso }}</td>
                            <td>{{ $alumnos->estado }}</td>
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{ url('/alumnos/'.$alumnos->id.'/edit') }}">Editar</a>

                                <form action="{{ url('alumnos/'.$alumnos->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar el alumno?')" value="Eliminar"></input>
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
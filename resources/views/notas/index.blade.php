@extends('adminlte::page')

@section('title', 'notas')

@section('content_header')
<div class="card-header">{{ __('notas') }}</div>
@stop

@section('content')
<div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('notas.create')}}">Agregar materias</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Alumno</th>
                            <th scope="col">materia</th>
                            <th scope="col">seccion</th>
                            <th scope="col">profesor</th>
                            <th scope="col">actividad1</th>
                            <th scope="col">actividad2</th>
                            <th scope="col">Examen</th>
                            <th scope="col">Promedio</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($notas as $notas)
                            <tr>
                           
                            <td>{{ $notas->Alumno }}</td>
                            <td>{{ $notas->materias }}</td>
                            <td>{{ $notas->seccion }}</td>
                            <td>{{ $notas->profesor }}</td>
                            <td>{{ $notas->actividad1 }}</td>
                            <td>{{ $notas->actividad2 }}</td>
                            <td>{{ $notas->examen }}</td>
                            <td>{{ $notas->promedio }}</td>
                            
                            
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{ url('/notas/'.$notas->id.'/edit') }}">Editar</a>

                                <form action="{{ url('notas/'.$notas->id) }}" method="post">
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
    

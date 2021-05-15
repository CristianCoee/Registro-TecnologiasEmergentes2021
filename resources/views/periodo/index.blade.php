@extends('adminlte::page')

@section('title', 'periodo')

@section('content_header')
<div class="card-header">{{ __('periodo') }}</div>
@stop

@section('content')
<div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('periodo.create')}}">Agregar periodo</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Periodo</th>
                            <th scope="col">dias</th>
                            <th scope="col">estado</th>
                            <th scope="col">año</th>
                            <th scope="col">Acciones</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($periodo as $periodo)
                            <tr>
                           
                            <td>{{ $periodo->periodo }}</td>
                            <td>{{ $periodo->dias }}</td>
                            <td>{{ $periodo->estado }}</td>
                            <td>{{ $periodo->año }}</td>
                            
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{ url('/periodo/'.$periodo->id.'/edit') }}">Editar</a>

                                <form action="{{ url('periodo/'.$periodo->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar el periodo?')" value="Eliminar"></input>
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
    

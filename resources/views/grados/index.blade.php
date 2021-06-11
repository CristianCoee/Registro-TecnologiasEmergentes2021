@extends('adminlte::page')

@section('title', 'grados')

@section('content_header')
<div class="card-header">{{ __('grados') }}</div>
@stop

@section('content')
<div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('grados.create')}}">Agregar nuevo grado</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">codigo</th>
                            <th scope="col">grados</th>
                            
                            <th scope="col">seccion</th>
                            <th scope="col">acciones</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($grados as $grados)
                            <tr>
                           
                            <td>{{ $grados->codigo }}</td>
                            <td>{{ $grados->grados }}</td>
                            <td>{{ $grados->seccion }}</td>

                            
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{ url('/grados/'.$grados->id.'/edit') }}">Editar</a>

                                <form action="{{ url('grados/'.$grados->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar el grados?')" value="Eliminar"></input>
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
    

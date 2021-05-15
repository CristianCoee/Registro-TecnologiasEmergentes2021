@extends('adminlte::page')

@section('title', 'materias')

@section('content_header')
<div class="card-header">{{ __('materias') }}</div>
@stop

@section('content')
<div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('materias.create')}}">Agregar materias</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">codigo</th>
                            <th scope="col">materias</th>
                            
                            <th scope="col">Acciones</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($materias as $materias)
                            <tr>
                           
                            <td>{{ $materias->codigo }}</td>
                            <td>{{ $materias->materias }}</td>
                            
                            
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{ url('/materias/'.$materias->id.'/edit') }}">Editar</a>

                                <form action="{{ url('materias/'.$materias->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar el materias?')" value="Eliminar"></input>
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
    

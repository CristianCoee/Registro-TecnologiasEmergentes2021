@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                <div class="card-header">{{ __('periodo') }}</div>
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
</div>
@endsection

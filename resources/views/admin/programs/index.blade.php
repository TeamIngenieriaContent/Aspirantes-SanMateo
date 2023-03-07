@extends('adminlte::page')

@section('title', 'Aspirantes San Mateo')

@section('content_header')
    <h1>Lista de Programas Académicos</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-danger">
        <strong>{{session('info')}}</strong>
    </div>

@endif
<div class="card">
    <div class="card-body">
        <div class="card-header">
            <a class="btn btn-success" href="{{route('admin.programs.create')}}">Agregar Programa Académico</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>{{ __('Name') }}</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programs as $program)
                    <tr>
                        <td>{{$program->id}}</td>
                        <td>{{$program->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.programs.edit', $program)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.programs.destroy', $program)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>

        </table>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

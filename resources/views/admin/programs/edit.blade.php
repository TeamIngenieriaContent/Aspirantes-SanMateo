@extends('adminlte::page')

@section('title', 'Aspirantes San Mateo')

@section('content_header')
    <h1>Editar Programas Académicos</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>

@endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($program, ['route'=> ['admin.programs.update', $program],'method'=>'put'])!!}
                @include('admin.programs.partials.form')
                {!! Form::submit('Actualizar Programa Académico', ['class'=>'btn btn-primary']) !!}
            {!! Form::close()!!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection

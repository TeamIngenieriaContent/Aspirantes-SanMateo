@extends('adminlte::page')

@section('title', 'Aspirantes San Mateo')

@section('content_header')
    <h1>Crear nuevo Programa Académico</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.programs.store'])!!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del programa académico']) !!}

                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el slug del programa académico','readonly']) !!}
                    @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('url_landing', 'URL Programa Académico') !!}
                    {!! Form::text('url_landing', null, ['class'=>'form-control','placeholder'=>'Ingrese la URL del Programa Académico']) !!}
                </div>
                {!! Form::submit('Crear Programa Académico', ['class'=>'btn btn-primary']) !!}
            {!! Form::close()!!}
        </div>
    </div>
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

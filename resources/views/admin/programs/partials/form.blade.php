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
    @error('url_landing')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('status', 'Estado') !!}
    {!! Form::select('status', $status, null, ['class'=>'form-control','placeholder'=>'']) !!}
    @error('status')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

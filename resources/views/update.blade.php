@extends('layouts.base')

@section('title', 'Update')

@section('content')
<heade>
    <h1>Mettre à jour</h1>
</head>
<section>
  {!! Form::open(['url' => '/store']) !!}
  {!! Form::hidden('id', $musics->id ) !!}
  <div class="form-group">
    {!!Form::label('Artist', 'Artist', ['class' => 'control-label']) !!}
    {!! Form::text('artist', $musics->artist, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!!Form::label('Album', 'Album', ['class' => 'control-label']) !!}
    {!! Form::text('album', $musics->album, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!!Form::label('Price', 'Price', ['class' => 'control-label']) !!}
    {!! Form::text('price', $musics->price, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!!Form::label('Summary', 'Summary', ['class' => 'control-label']) !!}
    {!! Form::text('summary', $musics->summary, ['class' => 'form-control']) !!}
  </div>

  {!! Form::submit('Ajouter', ['class' => 'button']) !!}
  {!! Form::close()!!}
</div>
</section>

@endsection

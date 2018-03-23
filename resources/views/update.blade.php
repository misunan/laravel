@extends('layouts.base')

@section('title', 'Update')

@section('content')
<header class="header_update">
    <h1>Mettre à jour</h1>
</header>
<section class=" update_form_container">
  {!! Form::open(['url' => '/store']) !!}
  {!! Form::hidden('id', $musics->id ) !!}
  <div class="form-group">
    {!!Form::label('Artist', 'Artist', ['class' => 'awesome']) !!}
    {!! Form::text('artist', $musics->artist, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!!Form::label('Album', 'Album', ['class' => 'awesome']) !!}
    {!! Form::text('album', $musics->album, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!!Form::label('Price', 'Price', ['class' => 'awesome']) !!}
    {!! Form::text('price', $musics->price, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!!Form::label('Summary', 'Summary', ['class' => 'awesome']) !!}
    {!! Form::text('summary', $musics->summary, ['class' => 'form-control']) !!}
  </div>
  <div class="form-btn">
    {!! Form::submit('Ajouter', ['class' => 'btn_update']) !!}
  </div>

  {!! Form::close()!!}
</div>
</section>

@endsection

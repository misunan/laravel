@extends('layouts.base')

@section('title', 'Home page welcome')

@section('content')
<heade>
    <h1>PRÉCOMMANDES DU MOMENT</h1>
    <h3>ACTUALITÉ & BONS PLANS</h3>
</head>
<section>
  <table>
    <tr>
      <th>Artist</th>
      <th>Album</th>
      <th>Price</th>
      <th>Summary</th>
      <th>Update</th>
      <th>delete</th>
    </tr>
    @foreach($musics as $music)
    <tr>
    <td>{{$music->artist}}</td>
    <td>{{$music->album}}</td>
    <td>{{$music->price}}</td>
    <td>{{$music->summary}}</td>
    <td>
		  {!! Form::open(array('url' => '/update', 'methode' => 'post')) !!}
		  {{ Form::hidden('id', $music->id) }}
		  {!! Form::submit('U', ['class' => 'button']) !!}
		  {!! Form::close() !!}
		</td>
    <td>
		  {!! Form::open(array('url' => '/delete', 'methode' => 'post')) !!}
		  {{ Form::hidden('id', $music->id) }}
		  {!! Form::submit('X', ['class' => 'button']) !!}
		  {!! Form::close() !!}
		</td>
    </tr>
    @endforeach
  </table>
</section>

<section>
  {!! Form::open(['url' => '/music']) !!}
  <div class="form-group">
  {!! Form::label('Artist', 'Artist', ['class' => 'awesome']) !!}
  {!! Form::text('artist', '', ['placeholder' => 'artist']) !!}
  </div>
  <div class="form-group">
  {!! Form::label('Album', 'Album', ['class' => 'awesome']) !!}
  {!! Form::text('album', '', ['placeholder' => 'album']) !!}
  </div>
  <div class="form-group">
  {!! Form::label('Price', 'Price', ['class' => 'awesome']) !!}
  {!! Form::text('price', '', ['placeholder' => 'price']) !!}
  </div>
  <div class="form-group">
  {!! Form::label('Summary', 'Summary', ['class' => 'awesome']) !!}
  {!! Form::text('summary', '', ['placeholder' => 'summary']) !!}
  </div>
  {!! Form::submit('Click Me!') !!}
  {!! Form::close() !!}
</section>
<div class="error">
    @if(Session::has('message'))
      <div>{{ session('message')}}</div>
    @endif
 </div>

@endsection

@extends('layouts.base')

@section('title', 'Home page welcome')

@section('content')
<header>
    <h1>PRÉCOMMANDES DU MOMENT</h1>
    <p class="title">ACTUALITÉ & BONS PLANS</p>
</header>
<section class="show_table">
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
    <td class="bg_color">
		  {!! Form::open(array('url' => '/update', 'methode' => 'post')) !!}
		  {{ Form::hidden('id', $music->id) }}
		  {!! Form::submit('U', ['class' => 'button']) !!}
		  {!! Form::close() !!}
		</td>
    <td class="bg_color">
		  {!! Form::open(array('url' => '/delete', 'methode' => 'post')) !!}
		  {{ Form::hidden('id', $music->id) }}
		  {!! Form::submit('X', ['class' => 'button']) !!}
		  {!! Form::close() !!}
		</td>
    </tr>
    @endforeach
  </table>
</section>

  <div class="error">
    <p class="textError">message error :
      @if(Session::has('message'))
        <div>{{ session('message')}}</div>
      @endif
      </p>
   </div>
<section class="flex-container-row">

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
  <div class="bht_container">
  {!! Form::submit('Click Me!',['class' => 'btn']) !!}
  </div>
  {!! Form::close() !!}
</section>


@endsection

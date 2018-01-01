@extends('layouts.app')

@section('content')

  <div align="center">
  {!! Form::open(['url'=>'index', 'method'=>'GET']) !!}
    @php
      $letters=range('A','Z');
    @endphp
      @foreach($letters as $letter)
      | <a href="{{action('FilmoviController@search', ['letter'=>$letter])}}" id="letter">{{$letter}}</a>
      @endforeach |
      {!! Form::close() !!}
      </div>

<br><br><br>

@if(count($filmovi)>0)
@foreach ($filmovi as $film)
  <center><img style="width:15%" src="/storage/slike/{{$film->slika}}">
  <br>
  {{$film->naslov}} ({{$film->godina}})
  <br>
  Trajanje: {{$film->trajanje}} min
  <br><br>
@endforeach
@elseif(count($filmovi)==0 && $slovo!=null)
  <h3><center>U bazi nema filmova koji počinju slovom {{$slovo}}!</h3>
@endif
@endsection

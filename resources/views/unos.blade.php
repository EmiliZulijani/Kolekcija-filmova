@extends('layouts.app')

@section('content')
	<h1>Unos</h1>
	{!! Form::open(['url'=>'unos', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
		<div class="form-group">
			{{Form::label('naslov', 'Naslov')}}
			{{Form::text('naslov','', ['class'=>'form-control input-naslov','size'=>50,'maxlength'=>100,'placeholder'=> 'Upiši naslov filma'])}}
		</div>
    <div class="form-group">
			{{Form::label('zanr', 'Žanr')}}
				<select name="zanr" class="form-control input-mali">
					<option value="" disabled selected>Odaberi žanr</option>
					@foreach($zanr as $zanr)
						<option value="{{$zanr->id}}">{{$zanr->naziv}}</option>
					@endforeach
			  </select>
		</div>
		<div class="form-group">
			{{Form::label('godina', 'Godina')}}
			<select name="godina" class="form-control input-mali">
				<option value="" disabled selected>Odaberi godinu</option>
				@php
					$period=range(1900, date('Y'));
				@endphp
				@foreach($period as $period)
					<option value="{{$period}}">{{$period}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			{{Form::label('trajanje', 'Trajanje')}}
			{{Form::number('trajanje','',['class'=>'form-control input-mali','placeholder'=> 'Minutaža filma'])}}
		</div>
		<div class="form-group">
			{{Form::label('slika', 'Slika')}}
			{{Form::file('slika')}}
		</div>
		<div>
			{{Form::submit('Unesi',['class'=>'btn btn-primary'])}}
		</div>
	{!! Form::close() !!}


<br><br><br>
<h1>Filmovi</h1>
@if(count($filmovi) > 0)
	<table class="table table-bordered">
		<tr style="background-color: #ccc; color: #000;">
			<th><center>Slika</th>
			<th><center>Naslov</th>
			<th><center>Godina</th>
			<th><center>Trajanje</th>
			<th><center>Akcija</th>
		</tr>

  @foreach ($filmovi as $film)
    <tr>
 			<td style="width: 130px;"><center><img style="width: 100px; height: 150px;" src="/storage/slike/{{$film->slika}}"></td>
			<td class="media-middle">{{$film->naslov}}</td>
    	<td class="text-xs-center media-middle"><center>{{$film->godina}}</td>
      <td class="text-center media-middle"><center>{{$film->trajanje}} min</td>
			<td class="media-middle"><center>
   				{!!Form::open(['action'=>['FilmoviController@destroy', $film->id], 'method' =>'POST'])!!}
	  				{{Form::hidden('_method', 'DELETE')}}
	  				{{Form::submit('[obriši]')}}
					{!!Form::close()!!}
			</td>
		</tr>
  @endforeach

</table>
	@else
	 <h3>U bazi nema filmova!</h3>
@endif

@endsection

   
@extends('layout.base')

@section('content')
<h1>{{$comic['title']}}</h1>
<img src="{{$comic["thumb"]}}" alt="">
<h3>Sale Date {{$comic['sale_date']}}</h3>
<p>
	{{$comic['description']}}
</p>
@endsection
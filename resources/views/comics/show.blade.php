   
@extends('layout.base')

@section('content')
<h1>{{$comic['title']}}</h1>
<img src="{{$comic["thumb"]}}" alt="">
<h3>Sale Date {{$comic['sale_date']}}</h3>
<p>
	{{$comic['description']}}
</p>
<a href="{{route("comics.edit", $comic["id"])}}"><button type="button" class="btn btn-warning">Modifica</button></a>
<form action="{{route('comics.destroy',$comic->id)}}" method="post">
@csrf
@method('DELETE')
<button class="btn btn-danger" type="submit">DELETE</button>
</form>
@endsection
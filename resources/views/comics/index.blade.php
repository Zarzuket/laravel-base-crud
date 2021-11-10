@extends('layout.base')

@section('content')
<h1>Lista di tutti i Comics</h1>
<table class="table mt-3">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Titolo</th>
		<th scope="col">Thumb</th>
		<th scope="col">Price</th>
		<th scope="col">Series</th>
        <th scope="col">Type</th>
	  </tr>
	</thead>
	<tbody>
	  @foreach ($comics as $comic)
	  <tr>
		<th scope="row">{{$comic["id"]}}</th>
		<td>{{$comic["title"]}}</td>
		<td><img src="{{$comic["thumb"]}}" alt="{{$comic->title}}"></td>
		<td>{{$comic["price"]}} €</td>
        <td>{{$comic["series"]}}</td>
        <td>{{$comic["type"]}}</td>
		<td><a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
	  </tr>
	  @endforeach
	</tbody>
</table>
@endsection
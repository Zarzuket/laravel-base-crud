@extends('layout.base')

@section('content')
<h1 style="color: yellow;">Edit Comic</h1>
<h2>{{$comic->title}}</h2>

<form action="{{route("comics.update",$comic->id)}}" method="POST">
	@csrf
    @method('PUT')

	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Insert title" value="{{$comic->title}}">
	</div>
    
    <div class="form-group">
        <label for="description">Description Comic</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insert description">{{$comic->description}}</textarea>
    </div>

    <div class="form-group">
        <label for="thumb">Image</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert url of the image"value="{{$comic->thumb}}">
    </div>

	<div class="form-group">
		<label for="price">Price</label>
		<input type="number" class="form-control" id="price" name="price" placeholder="Insert price"value="{{$comic->price}}">
	</div>

	<div class="form-group">
		<label for="series">Series</label>
		<input type="text" class="form-control" id="series" name="series" placeholder="Insert the name series"value="{{$comic->series}}">
	</div>

	<div class="form-group">
		<label for="date">Date</label>
		<input type="date" class="form-control" id="date" name="sale_date" placeholder="Insert the sale date"value="{{$comic->date}}">
	</div>

    <div class="form-group">
		<label for="type">Type</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insert Type"value="{{$comic->type}}">
	</div>


	<button type="submit" class="btn btn-warning">Edit!</button>
  </form>

@endsection
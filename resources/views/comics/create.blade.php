@extends('layout.base')

@section('content')
<h1>Add a new Comic</h1>

<form action="{{route("comics.store")}}" method="POST">
	@csrf

	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Insert title">
	</div>
    
    <div class="form-group">
        <label for="description">Description Comic</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insert description"></textarea>
    </div>

    <div class="form-group">
        <label for="thumb">Image</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert url of the image">
    </div>

	<div class="form-group">
		<label for="price">Price</label>
		<input type="number" class="form-control" id="price" name="price" placeholder="Insert price">
	</div>

	<div class="form-group">
		<label for="series">Series</label>
		<input type="text" class="form-control" id="series" name="series" placeholder="Insert the name series">
	</div>

	<div class="form-group">
		<label for="date">Date</label>
		<input type="date" class="form-control" id="date" name="sale_date" placeholder="Insert the sale date">
	</div>

    <div class="form-group">
		<label for="type">Type</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insert Type">
	</div>


	<button type="submit" class="btn btn-primary">Add</button>
  </form>

@endsection
@extends('layout')

@section('content')

<div class="card">
<div class="card-header">
<h4>Edit Shoe</h4>
</div>

<div class="card-body">

<form action="{{ route('shoes.update', $shoe->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label class="form-label">Shoe Name</label>
<input type="text" class="form-control" name="name" value="{{ $shoe->name }}">
</div>

<div class="mb-3">
<label class="form-label">Brand</label>
<input type="text" class="form-control" name="brand" value="{{ $shoe->brand }}">
</div>

<div class="mb-3">
<label class="form-label">Price</label>
<input type="number" class="form-control" name="price" value="{{ $shoe->price }}">
</div>

<div class="mb-3">
<label class="form-label">Size</label>
<input type="text" class="form-control" name="size" value="{{ $shoe->size }}">
</div>

<button class="btn btn-primary">Update Shoe</button>
<a href="{{ route('shoes.index') }}" class="btn btn-secondary">Back</a>

</form>

</div>
</div>

@endsection
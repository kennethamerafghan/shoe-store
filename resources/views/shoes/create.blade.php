@extends('layout')

@section('content')

<div class="card">
<div class="card-header">
<h4>Add New Shoe</h4>
</div>

<div class="card-body">

<form action="{{ route('shoes.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<div class="mb-3">
<label class="form-label">Shoe Name</label>
<input type="text" class="form-control" name="name" placeholder="Shoe Name" required>
</div>

<div class="mb-3">
<label class="form-label">Brand</label>
<input type="text" class="form-control" name="brand" placeholder="Brand" required>
</div>

<div class="mb-3">
<label class="form-label">Price</label>
<input type="number" class="form-control" name="price" placeholder="Price" required>
</div>

<div class="mb-3">
<label class="form-label">Size</label>
<input type="text" class="form-control" name="size" placeholder="Size" required>
</div>

<div class="mb-3">
<label class="form-label">Shoe Image</label>
<input type="file" class="form-control" name="image">
</div>

<button type="submit" class="btn btn-success">Save Shoe</button>
<a href="{{ route('shoes.index') }}" class="btn btn-secondary">Back</a>

</form>

</div>
</div>

@endsection
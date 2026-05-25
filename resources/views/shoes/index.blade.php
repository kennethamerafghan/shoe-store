@extends('layout')

@section('content')

<!-- HERO SECTION -->

<div class="hero">
    <div class="hero-content">
        <h1>Premium Shoe Collection</h1>
        <p>Discover modern and stylish footwear</p>

```
    <a href="{{ route('shoes.create') }}" class="btn btn-warning">
        Add New Shoe
    </a>
</div>
```

</div>

<!-- PRODUCT SECTION -->

<div class="container mt-5">

<h3 class="mb-4 text-center">New Arrivals</h3>

<div class="row">

@foreach($shoes as $shoe)

<div class="col-md-3">

<div class="card shoe-card mb-4">

<!-- SHOE IMAGE -->

@if($shoe->image) <img src="/images/{{ $shoe->image }}" class="card-img-top">
@endif

<div class="card-body text-center">

<h5>{{ $shoe->name }}</h5>

<p>{{ $shoe->brand }}</p>

<p class="price">₱{{ $shoe->price }}</p>

<p>Size: {{ $shoe->size }}</p>

<!-- EDIT BUTTON -->

<a href="{{ route('shoes.edit', $shoe->id) }}" class="btn btn-warning btn-sm mb-2">
Edit
</a>

<!-- DELETE BUTTON -->

<form action="{{ route('shoes.destroy', $shoe->id) }}" method="POST">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Delete
</button>

</form>

</div>

</div>

</div>

@endforeach

</div>

</div>

@endsection

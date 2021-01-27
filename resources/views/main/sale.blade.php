@extends('layouts.main')

@section('content')
    <h3 class="text-center">Sale Page</h3>

    <div class="d-flex justify-content-around p-3">
    @foreach ($products as $product)
        <div class="d-flex flex-column align-items-center border border-warning border-3 rounded-3 p-2">
            <img src="img/product-img.jpg" alt="" width="200px" height="150px">
            <p>{{ $product->name }}</p>
            <p><strong>{{ $product->price }}</strong></p>
            <button class="btn btn-warning">Buy it</button>
        </div>
    @endforeach
    </div>

@endsection
@extends('layouts.main')
@section('content')
    <h3>{{ $category->name }}</h3>

    <div class="d-flex  flex-wrap justify-content-around p-3">
        @foreach ($products as $product)
            @include('store.parts._product')
        @endforeach
        </div>
       
        {{ $products->links() }}
@endsection
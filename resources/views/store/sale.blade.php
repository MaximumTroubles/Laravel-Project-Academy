@extends('layouts.main')

@section('content')
    <h3 class="text-center">Sale Page</h3>

    <div class="d-flex  flex-wrap justify-content-around p-3">
    @foreach ($products as $product)
        @include('store.parts._product')
    @endforeach
    </div>
   
    {{ $products->links() }}
    

@endsection
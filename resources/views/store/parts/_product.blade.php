<div class="d-flex flex-column align-items-center border border-warning border-3 rounded-3 p-2 mb-2 product--cart">
    {{-- <img src="img/product-img.jpg" alt="" width="200px" height="150px"> --}}
    <img src="{{ $product->img }}" alt="{{ $product->name }}" width="200px" height="150px">
    <p>{{ $product->name }}</p>
    <p>Category: <a href="/category/{{ $product->category->slug }}">{{ $product->category->name}}</a></p>
    <p><strong>{{ $product->price }}</strong></p>
    <p><strong>{{ $product->recomended }}</strong></p>
    <button class="btn btn-warning">Buy it</button>
</div>
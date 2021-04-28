<a class="product-index" href="{{ route('products.show', $product->id ) }}">
    <section>
        <h2>{{$product->name}}</h2>
        <p>{{substr($product->about, 0, 200)}}...</p>
        <p>{{$product->price}} {{$product->currency}}</p>
    </section>
</a>

@extends('layouts.layout')

@section('content')

<div class="wraper">
    <h1>{{$product->name}}</h1>
    <p>{{$product->about}}</p>
    <p>{{$product->price}} {{$product->currency}}</p>
    <p>
        <a class="btn inline-block" href="{{route('products.edit', $product->id)}}">Edit</a>
        <form class="inline-block" action="{{ route("products.destroy", $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn" value="Delete">
        </form>
    </p>
</div>

@endsection

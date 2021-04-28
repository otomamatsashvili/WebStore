@extends('layouts.layout')

@section('content')

<div class="form-wrapper">
    <h1>Edit</h1>
    <form action="{{route('products.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="form-label" for="name">Name</label>
            <input class="form-input" type="text" name="name" id="name" value="{{$product->name}}"/>
        </div>
        <div class="form-group">
            <label class="form-label" for="about">Description</label>
            <textarea class="form-input" rows="5" name="about" id="about">{{$product->about}}</textarea>
        </div>
        <span class="form-group">
            <label class="form-label" for="price">Price</label>
            <input type="text" name="price" id="price" value="{{$product->price}}"/>
        </span>
        <span>
            <select id="currency" name="currency">
                <option value="GEL" @if($product->currency=='GEL') selected @endif>GEL</option>
                <option value="USD" @if($product->currency=='USD') selected @endif>USD</option>
                <option value="EUR" @if($product->currency=='EUR') selected @endif>EUR</option>
            </select>
        </span>
        <div><button class="form-btn" type="submit">Update</button></div>
    </form>
</div>

@endsection

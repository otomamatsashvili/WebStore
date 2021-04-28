@extends('layouts.layout')

@section('content')

<div class="form-wrapper">
    <h1>Add Product</h1>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label class="form-label" for="name">Name</label>
            <input class="form-input" type="text" name="name" id="name"/>
        </div>
        <div class="form-label" class="form-group">
            <label for="about">Description</label>
            <textarea class="form-input" rows="5" name="about" id="about"></textarea>
        </div>
        <span>
            <label class="form-label" for="price">Price</label>
            <input type="text" name="price" id="price"/>
        </span>
        <span>
            <select id="currency" name="currency">
                <option value="GEL">GEL</option>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
            </select>
        </span>
        <div><button class="form-btn" type="submit">Add Product</button></div>
    </form>
</div>

@endsection

@extends('layouts.layout')

@section('content')

@each('layouts.product', $products, 'product')

@endsection

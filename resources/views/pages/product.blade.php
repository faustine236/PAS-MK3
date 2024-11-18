@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <h1 class="text-white fw-bold">{{ $product->name }} ({{ $product->brand->name }})</h1>
                <p class="text-white">Rp {{ number_format($product->price, 0, ',', '.') }}</p>

                <hr>

                <p class="text-white">
                    {{ $product->description }}
                </p>

                <a class="btn btn-dark">
                    <i class="bi bi-cart-plus"></i> Add to Cart
                </a>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}" />
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container py-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="{{ route('product.show', $product->slug) }}" class="card card-product">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top p-3"
                            alt="{{ $product->name }}" />
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $product->name }} ({{ $product->brand->name }})</h5>
                            <p class="card-text text-center">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

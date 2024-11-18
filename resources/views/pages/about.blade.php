@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="container py-5">
        <h1 class="text-center text-white fw-bold">Anggota Kelompok</h1>

        <div class="row g-3 py-5">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('image/profile.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fahri Zain</h5>
                        <p class="card-text">54123121131</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('image/profile.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Firdaus</h5>
                        <p class="card-text">21091397006</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('image/profile.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Firdaus</h5>
                        <p class="card-text">21091397006</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

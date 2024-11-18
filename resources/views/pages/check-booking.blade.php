@extends('layouts.app')

@section('title', 'Check Booking')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="text-center text-white fw-bold">Check Booking</h1>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                <div class="card border-0 w-50 mx-auto">
                    <div class="card-body bg-dark">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="code" class="form-label text-white">Kode Booking</label>
                                <input type="text" class="form-control" id="code" name="code" />
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label text-white">Nomor Telepon</label>
                                <input type="text" class="form-control" id="phone" name="phone" />
                            </div>

                            <button type="submit" class="btn btn-outline-light w-100">Check</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

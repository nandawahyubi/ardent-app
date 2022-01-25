@extends('layouts.default')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-12">
                <img src="{{ asset('img/ill_register.png' )}}" height="400" class="mb-5" alt=" ">
            </div>
            <div class=" col-lg-12 col-12 header-wrap mt-3">
                <p class="story text-center">
                    CONGRATULATIONS!
                </p>
                <h2 class="primary-header ">
                    Success Checkout
                </h2>
                <p class="text-center">Silahkah Menuju Halaman Dashboard dan Lakukan Pembayaran</p>
                <a href="{{ route('dashboard') }}" class="btn btn-warning w-25 mt-2">
                    My Dashboard
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
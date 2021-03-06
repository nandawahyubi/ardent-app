@extends('layouts.default')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story text-center">
                    Care for Your Car
                </p>
                <h2 class="primary-header">
                    Start Caring Today
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-bootcamp">
                            <img src="{{ asset('img/create-checkout.png') }}" alt="" class="cover">
                            <h1 class="package">
                                {{ $checkout->Package->title }}
                            </h1>
                            <p class="description">
                                Perawatan ini akan membuat kendaraan Anda terlihat menarik dan akan menambah
                                kenyamanan Anda dalam berkendara
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        @include('components.alert')
                        <form action="{{ route('admin.checkout.update', $checkout->midtrans_booking_code) }}" class="basic-form" method="POST" autocomplete="off">
                            @method('PUT')
                            @csrf
                            <div class="mb-4">
                                <label for="full-name" class="form-label">Full Name</label>
                                <input type="text"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    id="full-name" name="name" value="{{ $checkout->User->name }}" required>
                                @if ($errors->has('name'))
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="text"
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    id="email" name="email" value="{{ $checkout->User->email }}" aria-describedby="emailHelp" readonly required>
                                @if ($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="no_telp" class="form-label">Phone Number</label>
                                <input type="text" min="0"
                                    class="form-control {{ $errors->has('no_telp') ? 'is-invalid' : '' }}"
                                    id="no_telp" name="no_telp" value="{{ $checkout->User->no_telp }}" required>
                                @if ($errors->has('no_telp'))
                                <p class="text-danger">{{ $errors->first('no_telp') }}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="address" class="form-label">Address</label>
                                <input type="text"
                                    class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                    id="address" name="address" value="{{ $checkout->User->address }}" required>
                                @if ($errors->has('address'))
                                <p class="text-danger">{{ $errors->first('address') }}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="vehicle_brand" class="form-label">Vehicle Brand</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('vehicle_brand') ? 'is-invalid' : '' }}"
                                            id="vehicle_brand" name="vehicle_brand" value="{{ $checkout->vehicle_brand }}" required>
                                        @if ($errors->has('vehicle_brand'))
                                        <p class="text-danger">{{ $errors->first('vehicle_brand') }}</p>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="vehicle_color" class="form-label">Vehicle Color</label>
                                        <input type="text"
                                            class="form-control text-capitalize {{ $errors->has('vehicle_color') ? 'is-invalid' : '' }}"
                                            id="vehicle_color" name="vehicle_color" value="{{ $checkout->vehicle_color }}" required>
                                        @if ($errors->has('vehicle_color'))
                                        <p class="text-danger">{{ $errors->first('vehicle_color') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="production_year" class="form-label">Production Year</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('production_year') ? 'is-invalid' : '' }}"
                                            id="production_year" name="production_year" value="{{ $checkout->production_year }}" required>
                                        @if ($errors->has('production_year'))
                                        <p class="text-danger">{{ $errors->first('production_year') }}</p>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="number_plate" class="form-label">Number Plate</label>
                                        <input type="text" maxlength="15"
                                            class="form-control text-uppercase {{ $errors->has('number_plate') ? 'is-invalid' : '' }}"
                                            id="number_plate" name="number_plate" value="{{ $checkout->number_plate }}" required>
                                        @if ($errors->has('number_plate'))
                                        <p class="text-danger">{{ $errors->first('number_plate') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="order_schedule" class="form-label">Order Schedule</label>
                                        <input type="text"
                                            class="form-control {{ $errors->has('order_schedule') ? 'is-invalid' : '' }}"
                                            id="order_schedule" name="order_schedule" value="{{ $checkout->order_schedule }}" {{ $checkout->status != 0 ? 'readonly' : '' }} required>
                                        @if ($errors->has('order_schedule'))
                                        <p class="text-danger">{{ $errors->first('order_schedule') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-around align-items-center">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
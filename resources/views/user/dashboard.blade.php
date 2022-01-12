@extends('layouts.default') 

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class="col-lg-12 col-12 header-wrap mt-4">
                <p class="story">DASHBOARD</p>
                <h2 class="primary-header">Booking History</h2>
            </div>
        </div>
        <div class="row my-4 table-responsive">
            {{-- @include('components.alert') --}}
            <table class="table table-responsive">
                <thead>
                    <tr class="align-middle">
                        <th scope="col" colspan="2" class="text-center">Package Name</th>
                        <th scope="col" class="text-center">Order Schedule</th>
                        <th scope="col" class="text-center">Nominal Dp</th>
                        <th scope="col" class="text-center">Information</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($checkouts as $checkout )
                    <tr class="align-middle">
                        <td class="text-center">
                            <img src="{{ asset('img/full-service.png') }}" height="110" alt="" />
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{ $checkout->Package->title }}</strong>
                            </p>
                            <p>{{ $checkout->created_at->format('d F Y') }}</p>
                        </td>
                        <td class="text-center">
                            <span>{{ date('d M Y', strtotime($checkout->order_schedule)) }}</span>
                        </td>
                        <td class="text-center">
                            <span>{{ $checkout->Package->price }}K</span>
                        </td>
                        <td class="text-center">
                            @if ($checkout->is_paid == 1)
                            <span class="text-warning">On Progress</span>
                            @elseif ($checkout->is_paid == 2)
                            <span class="text-success">Finished</span>
                            @else
                            <span class="text-danger">Waiting</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-warning">Pay Here</a>
                            <a href="https://wa.me/082272417131?text=Hi, saya ingin bertanya tentang paket {{ $checkout->Package->title }}" class="btn">
                                <i class="fas fa-headset fa-2x text-primary"></i>
                            </a>
                            <a href="#" class="btn btn-secondary">Invoice</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-decoration-line-through"><b>No Order List</b></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection